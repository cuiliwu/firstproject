<?php
/**
 * ecclub licence
 *
 * @copyright  Copyright (c) 2005-2012 ecclub Technologies Inc. (http://www.ecclub.cn)
 * @license  http://www.ecclub.cn/ baidu
 */

class system_task{
    
    function post_install() 
    {
        if (system_queue::write_config()){
            logger::info('Writing queue config file ... ok.');
        }else{
            trigger_error('Writing queue config file fail, Please check config directory has write permission.', E_USER_ERROR);
        }
    }//End Function

    function post_update($params){
        $dbver = $params['dbver'];
        if(version_compare($dbver,'0.4','<')){
            if (system_queue::write_config()){
                logger::info('Writing queue config file ... ok.');
            }else{
                trigger_error('Writing queue config file fail, Please check config directory has write permission.', E_USER_ERROR);
            }
        }
    }

    
}