<?php
class content_ctl_admin_active_detail extends content_admin_controller
{
    public function _editor() 
    {
        $sections = array(
            'basic'=>array(
                'label'=>app::get('content')->_('基本信息'),
                'options'=>'',
                'file'=>'admin/active/detail/basic.html',
            ),
            'seo'=>array(
                'label'=>app::get('content')->_('SEO设置'),
                'options'=>'',
                'file'=>'admin/active/detail/seo.html',
            ),
        );
        $this->pagedata['sections'] = $sections;
    }

    public function add() 
    {
        $this->_editor();
        $themes = app::get('site')->model('themes_tmpl');
        $activelist = array();
        $tmpl = $themes->getList('*',array('tmpl_type'=>'active'));
        foreach($tmpl as $row){
            $activelist[$row['tmpl_path']] = $row['tmpl_path'];
        }
        $this->pagedata['activelist'] = $activelist;
        header("Cache-Control:no-store");
        $this->singlepage('admin/active/detail/editor.html');
    }

    public function edit() 
    {

        $this->begin('index.php?app=content&ctl=admin_active');
        $active_id = $this->_request->get_get('active_id');
        
        $active = app::get('content')->model('actives')->dump($active_id, '*');
        if(empty($active)) $this->end(false, app::get('content')->_('错误请求'));
        $this->_editor();
        $this->pagedata['active'] = $active;
        $themes = app::get('site')->model('themes_tmpl');
        $activelist = array();
        $tmpl = $themes->getList('tmpl_path',array('tmpl_type'=>'active'));
        foreach($tmpl as $row){
            $activelist[$row['tmpl_path']] = $row['tmpl_path'];
        }
        $this->pagedata['activelist'] = $activelist;
        $this->pagedata['platform_options'] = $this->platforms;
        header("Cache-Control:no-store");
        $this->singlepage('admin/active/detail/editor.html');
    }

    public function save() 
    {
        $this->begin();
        $post = $this->_request->get_post('active');
        $active_id = $this->_request->get_post('active_id');
        if($active_id > 0){
            $res = app::get('content')->model('actives')->update($post, array('active_id'=>$active_id));
            if($res){
                $this->end(true, app::get('content')->_('保存成功'));
            }else{
                $this->end(false, app::get('content')->_('保存失败'));
            }
        }else{
            $res = app::get('content')->model('actives')->insert($post);
            if($res){
                $this->end(true, app::get('content')->_('添加成功'));
            }else{
                $this->end(false, app::get('content')->_('添加失败'));
            }
        }
    }
}