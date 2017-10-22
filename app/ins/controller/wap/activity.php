<?php
    class ins_ctl_wap_activity extends wap_controller{

        public function __construct(&$app) {
            parent::__construct($app);
            $shopname = app::get('wap')->getConf('wap.name');
            $this->shopname = $shopname;
            if ( isset($shopname) ) {
                $this->title = app::get('wap')->_('活动页').'_'.$shopname;
                $this->keywords = app::get('wap')->_('活动页').'_'.$shopname;
                $this->description = app::get('wap')->_('活动页').'_'.$shopname;
            }
            $this->_response->set_header('Cache-Control', 'no-store, no-cache');
        }
        public function index($tmpl_id=0){
           $tmpl_name = app::get('wap')->model('themes_file')->getList('filename',array('id'=>$tmpl_id));
            $this->set_tmpl_file($tmpl_name[0]['filename']);
            $this->page('wap/activity/index.html');
        }
    }
