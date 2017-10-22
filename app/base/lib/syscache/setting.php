<?php
/**
 * ecclub licence
 *
 * @copyright  Copyright (c) 2005-2012 ecclub Technologies Inc. (http://www.ecclub.cn)
 * @license  http://www.ecclub.cn/ baidu
 */

class base_syscache_setting extends base_syscache_abstract implements base_interface_syscache_farmer {
    
    public function get_data(){
        $pri_settings = kernel::database()->select('select app, `key`, value from sdb_base_setting');
        $settings = array();

        foreach( $pri_settings as $setting ){
            $settings['setting/'.$setting['app'].'-'.$setting['key']] = unserialize($setting['value']);
        }

        return $settings;
    }
}

