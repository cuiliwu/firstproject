<?php


class ectools_view_helper{

    function __construct($app){
        $this->app = $app;
    }
    function modifier_barcode($data){
        return kernel::single('ectools_barcode')->get($data);
    }

    function modifier_payname($data){
        return $this->app->model('payment_cfgs')->get_app_display_name($data);
    }
}
