#!/usr/bin/env php
<?php
/**
 * ecclub licence
 *
 * @copyright  Copyright (c) 2005-2012 ecclub Technologies Inc. (http://www.baidu.com)
 * @license  http://www.ecclub.cn/ baidu
 */

$root_dir = realpath(dirname(__FILE__).'/../../');
require($root_dir.'/config/queue.php');

$list = array_keys($queues);

echo @implode(' ', $list);
