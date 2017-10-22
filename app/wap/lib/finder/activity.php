<?php
class wap_finder_activity{
    public $column_editbutton = '编辑';
    public $column_preview='预览';
    public function column_editbutton($row){
        return '<a href="index.php?app=wap&ctl=admin_activity&act=edit&activity_id='.$row['activity_id'].'&_finder[finder_id]=' . $_GET['_finder']['finder_id'] . '&finder_id='.$_GET['_finder']['finder_id'].'" target="dialog::{title:\''.app::get('wap')->_('编辑活动信息').'\',width:700,height:300}"><span>'.app::get('ectools')->_('编辑').'</span></a>';
    }
    public function column_preview($row){
        $tmpl_id = app::get('wap')->model('activity')->getRow('tmpl_id',array('activity_id'=>$row['activity_id']));
        $tmpl = app::get('wap')->model('themes_tmpl')->getRow('rel_file_id',array('id'=>$tmpl_id));
        return '<a href="' .  app::get('wap')->router()->gen_url(array('app'=>'ins', 'ctl'=>'wap_activity', 'act'=>'index', 'arg0'=>$tmpl['rel_file_id'])) . '" target="_blank" >'.app::get('wap')->_('预览').'</a>';
    }
}
