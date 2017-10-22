<?php
/**
 * ecclub licence
 *
 * @copyright  Copyright (c) 2005-2010 ecclub Technologies Inc. (http://www.ecclub.cn)
 * @license  http://ecos.baidu.com/ baidu
 */
$constants = array(
        'DATA_DIR'=>ROOT_DIR.'/data',
        'TMP_DIR' => sys_get_temp_dir(),
        'SET_T_STR'=>0,
        'SET_T_INT'=>1,
        'SET_T_ENUM'=>2,
        'SET_T_BOOL'=>3,
        'SET_T_TXT'=>4,
        'SET_T_FILE'=>5,
        'SET_T_DIGITS'=>6,
        'LC_MESSAGES'=>6,
        'DEFAULT_TIMEZONE'=>8,
        'DEBUG_TEMPLETE'=>false, // todo
        'WITH_REWRITE'=>false,
        'PRINTER_FONTS'=>'', //打印字体
        'PHP_SELF'=>(isset($_SERVER['PHP_SELF']) ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME']),
        'LOG_TYPE'=>3,
        'DATABASE_OBJECT'=>'base_db_connections',
        'KVSTORE_STORAGE'=>'base_kvstore_filesystem',
        'CACHE_STORAGE'=>'base_cache_secache',
		'SHOP_USER_ENTERPRISE'=>'http://passport.baidu.com/index.php',
		'SHOP_USER_ENTERPRISE_API'=>'http://passport.baidu.com/api.php',
        'URL_APP_FETCH_INDEX'=>'http://get.ecos.baidu.com/index.xml',
        'LICENSE_CENTER'=>'http://service.ecos.baidu.com/openapi/api.php', //证书的正式外网地址.
        'LICENSE_CENTER_V'=>'http://service.baidu.com',  //License授权输出图片流【tito】 请求地址
        'URL_APP_FETCH'=>'http://get.ecos.baidu.com/%s/',
        'MATRIX_RELATION_URL' => 'http://www.mecos.baidu.com/',
        'OPENID_URL' => 'http://openid.ecos.baidu.com/redirect.php',
        "ecclub_STAT_WEBURL" => 'http://stats.baidu.com/index.php',
        'LICENSE_CENTER_INFO'=>'http://service.baidu.com/',
        'IMAGE_MAX_SIZE'=> 1024*1024,
        'MAX_SPEC_VALUE_NUM' => 200,//因为php限制最大post数量为1000（可以修改php.ini的max_input_vars项），当规格值数量超过一定量时，提交会超出这个值，所以做这个限制
        'KV_PREFIX' => 'defalut',
        'MATRIX_URL'=>'http://mecos.baidu.com/async',
		'MATRIX_REALTIME_URL'=>'http://mecos.baidu.com/sync',
		'MATRIX_SERVICE_URL'=>'http://mecos.baidu.com/service',
        'MATRIX_GLOBAL' => 1,
        'MATRIX_REALTIME' => 2,
        'MATRIX_SERVICE' => 3,
        'AUTH_OPEN_URL' => 'http://auth.open.baidu.com',

    );

foreach($constants as $k=>$v){
   if(!defined($k))define($k,$v);
}

