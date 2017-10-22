<?php
class apiactionlog_tasks_retry_sending extends base_task_abstract implements base_interface_task{

    public function exec($params=null){
        if( !$params['apilog_id'] ) return false;

        kernel::single('apiactionlog_command_retrysending')->command_retrysending($params);
    }
}
