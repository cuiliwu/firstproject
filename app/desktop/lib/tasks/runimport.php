<?php
/**
 * ecclub licence
 *
 * @copyright  Copyright (c) 2005-2012 ecclub Technologies Inc. (http://www.ecclub.cn)
 * @license  http://www.ecclub.cn/ baidu
 */

class desktop_tasks_runimport extends base_task_abstract implements base_interface_task{
    public function exec($params=null){
        $o = kernel::single('desktop_finder_builder_to_run_import');
        $tmp = 0;
        $o->run($tmp, $params);
    }
}
