<?php
class apiactionlog_tasks_requiresendingapilog extends base_task_abstract implements base_interface_task{

    public function exec($params=null){
        $crontab_setting_status = app::get('apiactionlog')->getConf('apiactionlog.crontab_setting.status');
        if( $crontab_setting_status == 'true' ){
            $model_api = app::get('apiactionlog')->model('apilog');

            $crontab_setting_minute = (int)app::get('apiactionlog')->getConf('apiactionlog.crontab_setting.minute');
            $times = time() - $crontab_setting_minute*60;
            $start_times = time() - 3*24*60*60; #开始时间为：3天之内,限制时间范围，避免突然加入大量数据
            $filter=array(
                'calltime|than' => $start_times,
                'calltime|sthan' => $times,
                'api_type' => 'request',
                'status' => 'sending',
                'retry|sthan' => '3',
                'worker|noequal' => 'store.point.get',
            );

            $apilogdata = $model_api->getList('apilog_id',$filter);
            $this->retry_api($apilogdata);
        }
    }

    /**
     * 将要重试的发起中的api加入队列
     * @params $apilog array 要加入队列的apilog记录
     */
    public function retry_api($apilog){
        $worker = 'apiactionlog_tasks_retry_sending';

        if( $apilog ){
            foreach( $apilog as $val )
            {
                if( empty($val['apilog_id']) ){
                    continue;
                }
                system_queue::instance()->publish($worker, $worker, $val);
            }
        }

        $require_num = count($apilog);
        logger::info("重试超过指定时间的发起中的请求开始（".$require_num."个api加入队列）!");
    }

}
