<?php
/**
 * ecclub licence
 *
 * @copyright  Copyright (c) 2005-2012 ecclub Technologies Inc. (http://www.ecclub.cn)
 * @license  http://www.ecclub.cn/ baidu
 */

class ectools_tasks_statistic_hour extends base_task_abstract implements base_interface_task{
    public function exec($params=null){
        kernel::single('ectools_analysis_task')->analysis_hour();
    }
}
