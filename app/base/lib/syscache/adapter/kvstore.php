<?php
/**
 * ecclub licence
 *
 * @copyright  Copyright (c) 2005-2012 ecclub Technologies Inc. (http://www.ecclub.cn)
 * @license  http://www.ecclub.cn/ baidu
 */

class base_syscache_adapter_kvstore extends base_syscache_adapter_abstract implements base_interface_syscache_adapter{

    private $_controller = null;

    protected $_handler = null;

    private $_data = array();

    public function init_data(){
        $key = $this->get_key();
        base_kvstore::instance('syscache')->fetch($key, $result);

        if(!$result){
            return false;
        }else{
            $this->_data = unserialize($result);
            return true;
        }
    }//End Function


    public function create($data){
        $key = $this->get_key();
        $data = serialize($data);
        return base_kvstore::instance('syscache')->store($key, $data);
    }

    public function get($key){
        return $this->_data[$key];
    }
}