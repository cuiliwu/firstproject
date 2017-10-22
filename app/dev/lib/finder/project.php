<?php
/**
 * ecclub licence
 *
 * @copyright  Copyright (c) 2005-2010 ecclub Technologies Inc. (http://www.ecclub.cn)
 * @license  http://ecos.ecclub.com/license/gpl GPL License
 */
 
class dev_finder_project{

    var $detail_basic = '信息';
    
    public function __construct($app)
    {
        $this->app = $app;
    }
    
    public function detail_basic($order_id)
    {
        $render = $this->app->render();
        return $render->fetch('project/detail.html');
    }
}
