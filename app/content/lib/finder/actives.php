<?php
class content_finder_actives
{
    function __construct(&$app)
    {
        $this->app = $app;
    }

    public $column_edit='编辑';
    public $column_edit_width='150';
    public $column_edit_order = COLUMN_IN_HEAD;

    public function column_edit($row){
        $link ='<a href="index.php?app=content&ctl=admin_active_detail&act=edit&active_id=' . $row['active_id'] . '&finder_id=' . $_GET['_finder_id'] . '" target="_blank" >'.app::get('content')->_('编辑').'</a>';
        if($row['tmpl_path']){
            $data = app::get('site')->model('themes_tmpl')->getRow('*', array('tmpl_path'=>$row['tmpl_path']));
            $link.='|<a href="index.php?app=site&ctl=admin_theme_widget&act=editor&theme='.$data['theme'].'&file='.$row['tmpl_path']. '" target="_blank" >'.app::get('content')->_('可视化编辑').'</a>';
        }
        return $link;
    }

    public $column_preview='预览';
    public $column_preview_width='40';
    public $column_preview_order = COLUMN_IN_HEAD;

    public function column_preview($row){
        return '<a href="' . app::get('site')->router()->gen_url(array('app'=>'content', 'ctl'=>'site_active', 'act'=>'index', 'arg0'=>$row['active_id'])) . '" target="_blank" >'.app::get('content')->_('预览').'</a>';
    }
}