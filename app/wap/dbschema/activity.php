<?php
$db['activity']=array (
  'columns' => 
  array (
    'activity_id' => 
    array (
      'type' => 'int unsigned',
      'required' => true,
      'pkey' => true,
      'extra' => 'auto_increment',
      'editable' => false,
      'comment' => app::get('wap')->_('活动页ID'),
    ),
    'activity_name' =>
    array (
      'type' => 'varchar(50)',
      'default' => '',
      'comment' => app::get('wap')->_('活动名称'),
      'label' => app::get('wap')->_('活动名称'),
      'editable' => true,
      'in_list' => true,
      'default_in_list' => true,
    ),
    'tmpl_id' => 
    array (
      'type' => 'varchar(50)',
      'comment' => app::get('wap')->_('对应活动页'),
      'label' => app::get('wap')->_('对应活动页'),
      'editable' => true,
    ),
    'activity_url' => 
    array (
      'type' => 'varchar(50)',
      'comment' => app::get('wap')->_('活动页地址'),
      'label' => app::get('wap')->_('活动页地址'),
      'editable' => true,
      'in_list' => true,
      'default_in_list' => true,
    ),
  ),
  'version' => '$Rev: 40654 $',
  'comment' => app::get('wap')->_('活动页表'),
);
