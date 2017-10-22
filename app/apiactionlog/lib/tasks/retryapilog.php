<?php
class apiactionlog_tasks_retryapilog extends base_task_abstract implements base_interface_task{

    public function exec($params=null){
        kernel::single('apiactionlog_command_retry')->command_fail_retry();
    }

}
