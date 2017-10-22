<?php
/**
 * ecclub licence
 *
 * @copyright  Copyright (c) 2005-2012 ecclub Technologies Inc. (http://www.ecclub.cn)
 * @license  http://www.ecclub.cn/ baidu
 */

class base_tasks_cleankvstore extends base_task_abstract implements base_interface_task{
    public function exec($params=null){
        base_kvstore::delete_expire_data();
    }
}
