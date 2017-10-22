<?php

 

class desktop_ctl_code extends base_controller
{
    public function __construct($app)
    {
        parent::__construct($app);
        header("cache-control: no-store, no-cache, must-revalidate");
    }
    
    //激活码校验
    public function codecheck()
    {
    }

    function error_info_view(){

        exit;
    }
    
    function error_view($auth_error_msg)
    {

        echo $render->display('active_code.html');
        exit;
    }
    
}
