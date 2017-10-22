<?php
#include("app/serveradm/xhprof.php");
ini_set('display_error','On');
include("Debug/debug.php");
define('ROOT_DIR',realpath(dirname(__FILE__)));
require(ROOT_DIR.'/app/base/kernel.php');
kernel::boot();
// app::get('desktop')->setConf('ecclub_auth_code','dsf');
if(defined("STRESS_TESTING")){
    b2c_forStressTest::logSqlAmount();
}
