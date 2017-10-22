<?php
/**
 * ecclub licence
 *
 * @copyright  Copyright (c) 2005-2010 ecclub Technologies Inc. (http://www.ecclub.cn)
 * @license  http://ecos.ecclub.com/license/gpl GPL License
 */
 
class base_ctl_default extends base_controller{
    
    function index(){
        $this->pagedata['project_name'] = '';
        $this->display('default.html');
    }
    
}