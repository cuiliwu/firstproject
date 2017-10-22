<?php
class content_ctl_site_active extends content_controller
{
    public function index()
    {
        $nav_url = $_SERVER['HTTP_REFERER']?$_SERVER['HTTP_REFERER']:$this->gen_url(array('app'=>'site', 'ctl'=>'default','act'=>'index'));
        $this->begin($nav_url);
        $active_id = $this->_request->get_param(0);
        if($active_id > 0){
            $themes = app::get('content')->model('actives');
            $detail = $themes->getRow('*',array('active_id'=>$active_id));  
            if($detail['ifpub']=='true'){
                $aPath[] = array(
                                        'link'  => $this->app->router()->gen_url(array('app'=>'content', 'ctl'=>'site_active', 'act'=>'index', 'arg0'=>$active_id)),
                                        'title' => $detail['title']
                                    );
                $GLOBALS['runtime']['path'] = $aPath;
                $this->get_seo_info($detail);
                $this->_index1($detail);
            } else {
                $this->end(false, app::get('content')->_('活动未发布！'));
            }
        } else {
            $this->end(false, app::get('content')->_('访问出错！'));
        }
    }
    private function _index1($detail)
    {
        $this->pagedata['detail'] = $detail;
        $this->set_tmpl('active');
        $this->set_tmpl_file($detail['tmpl_path']);
        $this->page('site/active/index.html');
    }

    private function get_seo_info($aInfo) {
        is_array($info) or $info = array();
        //title keywords description
        $title = array();
        $title[] = $aInfo['seo_title'] ? $aInfo['seo_title'] : $aInfo['title'];
        if(!$aInfo['seo_title']) {
            $title[] = $this->site_name ? $this->site_name : app::get('site')->getConf('site.name');
        }
        $title = array_filter($title);

        $this->pagedata['title'] = implode('-', $title);
        $this->pagedata['description']  = $aInfo['seo_description'] ? $aInfo['seo_description'] : $this->pagedata['title'];
        if($aInfo['seo_keywords']) {
            $this->pagedata['keywords'] = $aInfo['seo_keywords'];
        } else {
            $this->pagedata['keywords'] = '活动-'.$aInfo['title'];
        }
    }
}
