<?php

 
$db['hasrole']=array (
  'columns' => 
  array (
    'user_id' => 
    array (
      'type' => 'table:users',
      'required' => true,
      'pkey' => true,
      'comment' => app::get('desktop')->_('后台用户ID'),
    ),
    'role_id' => 
    array (
      'type' => 'table:roles',
      'required' => true,
      'pkey' => true,
      'comment' => app::get('desktop')->_('角色ID'),
    ),
  ),
  'version' => '$Rev: 40654 $',
  'comment' => app::get('desktop')->_('后台权限, 角色和用户关联表'),
);

