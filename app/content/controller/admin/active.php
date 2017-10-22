<?php
class content_ctl_admin_active extends content_admin_controller 
{
    
    var $workground = 'site.wrokground.theme';
    var $platforms = array('pc'=>'电脑端','wap'=>'移动端');

    public function index() 
    {
        $this->finder('content_mdl_actives', array(
            'title'=>app::get('content')->_('活动页列表'),
            'use_buildin_filter' => true,
            'actions'=>array(
                            array('label'=>app::get('content')->_('新增活动页'),'icon'=>'add.gif','href'=>'index.php?app=content&ctl=admin_active_detail&act=add','target'=>'_blank'),
                        )
            ));
    }
}//End Class
