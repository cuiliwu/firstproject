<?php
class apiactionlog_command_retry extends base_shell_prototype{
    var $command_fail_retry = '失败API自动重试';
    function command_fail_retry(){
        echo '正在准备重试调用失败的API', "\n";
        $objApilog = app::get('apiactionlog')->model('apilog');
        $loglist = (array) $objApilog->db->select("select * from sdb_apiactionlog_apilog where status ='fail' and api_type='request' and retry<=3  and  worker!='store.point.get' ORDER BY `last_modified` DESC limit 0,1000");
        echo '本次需要重试的API数量:', count($loglist), "\n";
        foreach ($loglist as $log) {
            $result = $this->_request($log);
            echo 'Api Task:', $log['apilog_id'], ' Name:', $log['task_name'], ' status:', $result['status'], "\n";
        }

        echo 'API重试结束', "\n";
    }

    private function _request($row){
        $method = $row['worker'];
        $params = unserialize($row['params']);
        $rpc_id = $row['apilog'];
        $calltime = $row['calltime'];
        $msg = '自动重试';

        $obj_shop = app::get('b2c')->model('shop');
        $mdl_apilog = app::get('apiactionlog')->model('apilog');
        $obj_shop_filter = array('status' => 'bind');
        $arr_shops = $obj_shop->getList('*',$obj_shop_filter);

        if($params){
            $return = $mdl_apilog->db->exec("UPDATE sdb_apiactionlog_apilog SET retry=retry+1,last_modified=".time().",status='sending',msg='".$row['msg'].";".$msg."' WHERE apilog='".$rpc_id."'");
            $shop_node_type = $params["node_type"];
            $shop_node_id = $params['to_node_id'];
        }

        if($arr_shops){
            foreach($arr_shops as $shop){
                if($shop['node_type'] ==$shop_node_type &&  $shop['node_id'] == $shop_node_id){
                    $result = app::get('b2c')->matrix()->call($method,$params,$rpc_id."-".$calltime);
                }
            }
        }
        if($return){
            return array('task_name'=>$row['task_name'], 'status'=>'succ');
        }else{
            return array('task_name'=>$row['task_name'], 'status'=>'fail');
        }
    }
}
