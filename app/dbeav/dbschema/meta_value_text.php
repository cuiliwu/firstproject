<?php

 
$db['meta_value_text']=array (
  'columns' => 
  array (
    'mr_id' => 
    array (
      'type' => 'number',
      'required' => true,
      'pkey' => true,
      'comment' => app::get('dbeav')->_('meta注册主表id'),
    ),
    'pk' => 
    array (
      'type' => 'number',
      'required' => true, 
      'pkey' => true,
      'comment' => app::get('dbeav')->_('对应数据行的主键值'), 
    ),
    'value' => 
    array (
      'type' => 'text NOT NULL',
      'required' => true,
      'comment' => app::get('dbeav')->_('meta值'),
    ),
  ),
  'engine' => 'innodb',
  'version' => '$Rev: 40912 $',
  'comment' => app::get('dbeav')->_('meta具体类型表(text类型)'),  
);
