<?php
class apiactionlog_command_cleandata extends base_shell_prototype{
    var $command_cleandata = '删除过期apilog数据';


    function command_cleandata(){
        $this->_checkdata();
    }

    function _checkdata(){
        $model_api = app::get('apiactionlog')->model('apilog');
        $filter = 'delete from sdb_apiactionlog_apilog where last_modified< ' . (time() - 2592000);
        $restul = $model_api->db->exec($filter);
        if($restul['rs']){
            logger::info($restul['sql']);
            logger::info("删除一个月之前的数据成功!");
            return true;
        }else{
            logger::info($restul['sql']);
            logger::info("删除一个月前的数据失败");
            return false;
        }

    }
}
