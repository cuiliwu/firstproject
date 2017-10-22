<?php
/**
 * ecclub licence
 *
 * @copyright  Copyright (c) 2005-2012 ecclub Technologies Inc. (http://www.ecclub.cn)
 * @license  http://www.ecclub.cn/ baidu
 */

class base_syscache_adapter_filesystem extends base_syscache_adapter_abstract implements base_interface_syscache_adapter{

    private $_controller = null;

    protected $_handler = null;

    private $_data = array();

    private function _get_pathname() {
        return TMP_DIR.'/'.$this->get_key();
    }
     
    public function init_data(){

        if (file_exists($this->_get_pathname())){
            $this->_data = unserialize(file_get_contents($this->_get_pathname()));
            return true;
        }else{
            return false;
        }
    }
    
    public function create($data){
        if(file_put_contents($this->_get_pathname(), serialize($data), LOCK_EX)){
            return true;
        }
        return false;
    }

    public function get($key){ 
        return $this->_data[$key];
    }
}

