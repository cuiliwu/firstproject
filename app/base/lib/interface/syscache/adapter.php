<?php
/**
 * ecclub licence
 *
 * @copyright  Copyright (c) 2005-2012 ecclub Technologies Inc. (http://www.ecclub.cn)
 * @license  http://www.ecclub.cn/ baidu
 */


interface base_interface_syscache_adapter{

    public function init_data();

    public function get($key);

    public function create($data);
}

