<?php

class wap_ctl_admin_activity extends desktop_controller{

    var $workground = 'wap_ctl_admin_activity';

    function index(){
        $params = array(
            'title'=>app::get('wap')->_('活动页管理'),
            'actions'=>array(
                array('label'=>app::get('wap')->_('新增'),'href'=>'index.php?app=wap&ctl=admin_activity&act=add'
                      ,'target'=>'dialog::{title:\''.app::get('wap')->_('新增').'\',width:500,height:290}')
                ),
            );
        $this->finder('wap_mdl_activity',$params);
    }
    function add(){
        $this->ui = new base_component_ui($this);
        $activity = $this->app->model('activity');
        if($_POST){

            $tmpl = $this->app->model('themes_tmpl')->getList('*', array('id'=>$_POST['tmpl_id']));
            $_POST['activity_url'] = 'activity-'.$tmpl[0]['rel_file_id'].'.html';
            $this->begin();
            $result = $activity->save($_POST); //使用save组织post的数据
            if (isset($_GET['action']) && $_GET['action'] && $_GET['action'] == 'edit'){
                $this->end($result, app::get('wap')->_('活动页修改成功！')); 
            }else{
                $this->end($result, app::get('wap')->_('活动页添加成功！'));
            }
        }else{
            $tmpl = $this->app->model('themes_tmpl')->getList('*', array('tmpl_type'=>'activity'));
            array_unshift($tmpl, array('tmpl_name'=>app::get('wap')->_('---请选择活动页---')));
            $this->pagedata['tmpl'] = $tmpl;
            $this->page("admin/activity/edit.html");
        }
    }
    function edit(){
        $activity = $this->app->model('activity');
        $rows = $activity->getList('*', array('activity_id'=>$_GET['activity_id']));
        $tmpl = $this->app->model('themes_tmpl')->getList('*', array('tmpl_type'=>'activity'));
        $this->pagedata['tmpl'] = $tmpl;
        $this->pagedata['activity_name'] = $rows[0]['activity_name'];
        $this->pagedata['tmpl_id'] = $rows[0]['tmpl_id'];
        $this->pagedata['activity_id'] = $rows[0]['activity_id'];
        $this->page("admin/activity/edit.html");
    }
}
