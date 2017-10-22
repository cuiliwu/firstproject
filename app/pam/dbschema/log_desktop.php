<?php


$db['log_desktop'] = array(
    'columns'=>array(
        'event_id'=>array('type'=>'number','pkey'=>true,'extra' => 'auto_increment',),
        'event_time'=>array('type'=>'varchar(50)'),
        'event_data'=>array('type'=>'varchar(500)'),
        'event_type'=>array('type'=>'text'),
    ),
    'comment' => app::get('pam')->_('后端用户登录记录'),
);
