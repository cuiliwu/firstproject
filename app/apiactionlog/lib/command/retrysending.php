<?php
class apiactionlog_command_retrysending extends base_shell_prototype{
    var $command_retrysending = '重试超过指定时间的发起中的请求';


    function command_retrysending($apilog_id){
        $this->_checkdata($apilog_id);
    }

    function _checkdata($apilog_id){

        $request_mdl = kernel::single('apiactionlog_router_request');
        $result = $request_mdl->re_request($apilog_id);

        if( $result['status'] == 'succ' )
        {
            return true;
        }
        return false;
    }
}
