<?php

 
$db['setting']=array (
  'columns' => 
  array (
    'app' => array(
        'type'=>'varchar(50)',
        'pkey' => true,
        'comment' => app::get('base')->_('app名'),
    ),
    'key' => array(
        'type'=>'varchar(255)',
        'pkey' => true,
        'comment' => app::get('base')->_('setting键值'),
        
    ),
    'value' => array(
        'type'=>'longtext',
        'comment' => app::get('base')->_('setting存储值'),
    ),
  ),
  'engine' => 'MyISAM',
  'version' => '$Rev: 41137 $',
  'ignore_cache' => true,
  'comment' => app::get('base')->_('setting存储表'),
);
