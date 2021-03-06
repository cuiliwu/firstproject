<?php


$setting = array(
'wap.logo'      => array('type'=>SET_T_IMAGE, 'default'=>'', 'desc'=>app::get('wap')->_('手机商城Logo'), 'backend'=>'public', 'extends_attr'=>array('width'=>197,'height'=>56),'helpinfo'=>'<span style=\'line-height:30px;\'>'.app::get('wap')->_('Logo宽度标准为197px高度为56px,默认自带的为透明图标').'</span>'),
'wap.apple.desktop' =>array('type'=>SET_T_IMAGE,'default'=>'','desc'=>app::get('wap')->_('苹果桌面图标'),'helpinfo'=>'<span style=\'line-height:30px;\'>'.app::get('wap')->_('图片为正方形。可为苹果用户在桌面建立一个图标，是一个快速进入商城的途径。').'</span>'.'<table style="background:#E5E5E5;width:320px;"><tr><td style="font-size:15px;">'.app::get('wap')->_('注：').'</td></tr><tr><td style="vertical-align:initial">'.app::get('wap')->_('1.使用iOS Safari打开移动商城，点击屏幕下方的').'<img style="height:20px;width:20px;" src="'.kernel::base_url(true).'/public/app/wap/statics/images/ios1.png'.'"></td></tr><tr><td style="vertical-align:initial">'.app::get('wap')->_('2.在弹出的菜单中选择“添加到主屏幕”。').'</td></tr><tr><td style="vertical-align:initial">'.app::get('wap')->_('3.填写页面备注名称后，点击右上角的“添加”按钮。').'</td></tr><tr><td style="vertical-align:initial">'.app::get('wap')->_('4.此时退出浏览器，就可以在手机桌面中看到该快速链接。').'</td></tr></table>'),
'wap.shopname' => array('type'=>SET_T_STR, 'vtype'=>'maxLength','default'=>'', 'desc'=>app::get('wap')->_('手机商城名称'),'javascript'=>'validatorMap.set("maxLength",["最大长度32个字",function(el,v){return v.length < 33;}]);'),
'wap.status'   => array('type'=>SET_T_BOOL, 'default'=>'false', 'desc'=>app::get('wap')->_('是否开启手机商城：'), 'helpinfo'=>'<span class=\'notice-inline\' style=\'border:1px solid #FF9966;background:#FFFFCC;padding:10px;\'>'.app::get('b2c')->_('手机平台开启状态下，访客使用手机访问网站域名直接跳转至手机平台。手机平台关闭状态下，访客使用手机访问网站域名直接跳转至商城官网').'</span>'),
'wap.scanbuy'  => array('type'=>SET_T_BOOL, 'default'=>'false', 'desc'=>app::get('wap')->_('是否开启扫购模式：'), 'helpinfo'=>'<span class=\'notice-inline\'>'.app::get('wap')->_('该功能可以让客户在PC商城前台商品详情页中用手机的二维码扫一扫功能进行购物和支付').'</span>'),
//'wap.wxlogin'  => array('type'=>SET_T_BOOL, 'default'=>'false', 'desc'=>app::get('wap')->_('是否开启微信免登：'), 'helpinfo'=>'<span class=\'notice-inline\'>'.app::get('wap')->_('开启该功能，访问所有的wap端页面都进微信登录验证。').'</span>'),
'wap.register.license' => array('type'=>SET_T_TXT,'default'=>'','desc'=>app::get('wap')->_('注册协议')),
'wap.foot_edit' => array('type'=>SET_T_TXT, 'desc'=>app::get('wap')->_('网页底部信息'), 'default'=>'
    <p><b style="color:red;">'.app::get('wap')->_('修改本区域内容，请到').' '.app::get('wap')->_('商店管理后台').' &gt;&gt; '.app::get('wap')->_('触屏版').' &gt;&gt; '.app::get('wap')->_('基本配置').' '.app::get('wap')->_('进行编辑').'</b></p>
    <p>© 2013 All rights reserved.</p>
    <p>'.app::get('wap')->_('本商店顾客个人信息将不会被泄漏给其他任何机构和个人').'<br/>'.app::get('wap')->_('本商店logo和图片都已经申请保护，未经授权不得使用').'<br/>'.app::get('wap')->_('有任何购物问题请联系我们在线客服 | 电话：800-800-8000 | 工作时间：周一至周五 8:00－18:00').' </p>
    '),
);
