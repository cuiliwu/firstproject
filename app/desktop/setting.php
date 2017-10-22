<?php

 
$setting = array(
'banner'=>array('type'=>SET_T_STR,'default'=>'ECOS System'),

'format.date'=>array('type'=>SET_T_STR,'default'=>'Y-m-d','desc'=>app::get('desktop')->_('日期格式')),
'format.time'=>array('type'=>SET_T_STR,'default'=>'Y-m-d H:i:s','desc'=>app::get('desktop')->_('日期时间格式')),

'finder.thead.default.width' =>array('type'=>SET_T_STR,'default'=>'105','desc'=>app::get('desktop')->_('finder默认表头的宽度')),
'desktop.banner'=>array('type'=>SET_T_STR,'vtype'=>'maxLength','default'=>app::get('desktop')->_('点此设置您系统的名称'),'desc'=>app::get('desktop')->_('系统名称'),'javascript'=>'validatorMap.set("maxLength",["最大长度32个字",function(el,v){return v.length < 33;}]);'),
'system.shopurl'=>array('type'=>SET_T_STR,'default'=>''),
'system.loginlogo'=>array('type'=>SET_T_IMAGE,'default'=>'','desc'=>app::get('desktop')->_('登录注册页左侧大图'),'backend'=>'public','extends_attr'=>array('width'=>200,'height'=>95),'helpinfo'=>'<span class=\'notice-inline\'>'.app::get('desktop')->_('图片标准宽度为256*256').'</span>'),
'system.certtext'=>array('type'=>SET_T_STR,'default'=>'','desc'=>app::get('desktop')->_('备案号')),
);
