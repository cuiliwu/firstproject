<?php
/**
 * ecclub licence
 *
 * @copyright  Copyright (c) 2005-2010 ecclub Technologies Inc. (http://www.ecclub.cn)
 * @license  http://www.ecclub.cn/ baidu
 *
 *
 */
class site_errorpage_get
{



    public function getConf($key='') {
        if( $key )
            return app::get('site')->getConf($key);
        else return false;
    }
}
