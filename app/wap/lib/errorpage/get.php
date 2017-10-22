<?php 
/**
 * ecclub licence
 *
 * @copyright  Copyright (c) 2005-2010 ecclub Technologies Inc. (http://www.ecclub.cn)
 * @license  http://www.ecclub.cn/ baidu
 *
 *
 */
class wap_errorpage_get
{
    
    
    
    public function getConf($key='') {
        if( $key )
            return app::get('wap')->getConf($key);
        else return false;
    }
}