<?php
class desktop_ctl_setting extends desktop_controller{

    var $workground = 'desktop_ctl_system';
    var $certcheck = false;
    var $require_super_op = true;

    public function __construct($app){
        parent::__construct($app);
        $this->ui = new base_component_ui($this);
        $this->app = $app;
        header("cache-control: no-store, no-cache, must-revalidate");
    }

    public function index(){
        $this->basic();
    }

    function basic(){
        $all_settings = array(
            app::get('desktop')->_('基本设置')=>array(
                'system.certtext',
                'desktop.banner',
            ),
        );
        $html= $this->_process($all_settings);
        echo $html;
    }

    function _process($all_settings){
        $setting = new base_setting($this->app);
        $setlib = $setting->source();
        $typemap = array(
            SET_T_STR=>'text',
            SET_T_INT=>'number',
            SET_T_ENUM=>'select',
            SET_T_BOOL=>'bool',
            SET_T_TXT=>'text',
            SET_T_FILE=>'file',
            SET_T_IMAGE=>'image',
            SET_T_DIGITS=>'number',
        );
        $tabs = array_keys($all_settings);
        $html = $this->ui->form_start(array('tabs'=>$tabs,'method'=>'POST','id'=>'setting_form'));
        $input_style = false;
        $arr_js = array();
        foreach($tabs as $tab=>$tab_name){
            foreach($all_settings[$tab_name] as $set){
                $current_set = $pre_set = $this->app->getConf($set);
                if($set == 'system.shopname'){
                    $current_set = app::get('site')->getConf('site.name');
                }
                if($_POST['set'] && array_key_exists($set,$_POST['set'])){

                    if($current_set!==$_POST['set'][$set]){
                        $current_set = $_POST['set'][$set];
                        $this->app->setConf($set,$_POST['set'][$set]);
                        #↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓记录管理员操作日志@lujy↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
                        if($obj_operatorlogs = kernel::service('operatorlog.system')){
                            if(method_exists($obj_operatorlogs,'logSystemConfigInfo')){
                                $obj_operatorlogs->logSystemConfigInfo($setlib[$set]['desc'], $pre_set, $_POST['set'][$set]);
                            }
                        }
                        #↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑记录管理员操作日志@lujy↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑
                    }
                }


                $input_type = $typemap[$setlib[$set]['type']];

                $form_input = array(
                    'title'=>$setlib[$set]['desc'],
                    'type'=>$input_type,
                    'name'=>"set[".$set."]",
                    'tab'=>$tab,
                    'helpinfo'=>$setlib[$set]['helpinfo'],
                    'value'=>$current_set,
                    'options'=>$setlib[$set]['options'],
                    'vtype' => $setlib[$set]['vtype'],
                    'class' => $setlib[$set]['class'],
                    'id' => $setlib[$set]['id'],
                    'default' => $setlib[$set]['default'],
                );
                if ($input_type=='select')
                    $form_input['required'] = true;
                if($cnt>0){
                    if($form_input['name']=="set[system.goods.freez.time]"){
                        if($current_set!='1'){
                            $current_set=1;
                        }
                        if($current_set=='1'){
                            $form_input['disabled'] ="disabled";
                        }
                    }
                }
                if (isset($setlib[$set]['extends_attr']) && $setlib[$set]['extends_attr'] && is_array($setlib[$set]['extends_attr']))
                {
                    foreach ($setlib[$set]['extends_attr'] as $_key=>$extends_attr)
                    {
                        $form_input[$_key] = $extends_attr;
                    }
                }

                $arr_js[] = $setlib[$set]['javascript'];

                $html.=$this->ui->form_input($form_input);
            }
        }

        if (!$_POST)
        {
            $this->pagedata['_PAGE_CONTENT'] = $html .= $this->ui->form_end() . '<script type="text/javascript">window.addEvent(\'domready\',function(){';

            $str_js = '';
            if (is_array($arr_js) && $arr_js)
            {
                foreach ($arr_js as $str_javascript)
                {
                    $str_js .= $str_javascript;
                }
            }

            $str_js .= '$("main").addEvent("click",function(el){
                el = el.target || el;
                if ($(el).get("id")){
                    var _id = $(el).get("id");
                    var _class_name = "";
                    if (_id.indexOf("-t") > -1){
                        _class_name = _id.substr(0, _id.indexOf("-t"));
                        $$("."+_class_name).getParent("tr").show();
                    }
                    if (_id.indexOf("-f") > -1){
                        _class_name = _id.substr(0, _id.indexOf("-f"));
                        var _destination_node = $$("."+_class_name);
                        _destination_node.getParent("tr").hide();
                        _destination_node.each(function(item){if (item.getNext(".caution") && item.getNext(".caution").hasClass("error")) item.getNext(".caution").remove();});
                    }
                }
            });
            $$("[name=set[site.sms_valide]]").addEvent("click",function(){
                var that = this;
                if(that.value=="false"){
                    if(!confirm("取消该项会使网站易受到短信轰炸")){
                        that.checked = "";
                        that.getSiblings("[name=set[site.sms_valide]]")[0].checked = "checked";
                    }
                }
            });';

            $this->pagedata['_PAGE_CONTENT'] .= $str_js . '});</script>';
            $this->page();
        }
        else
        {
            $this->begin();
            $setting->set_conf('banner',$_POST['set']['desktop.banner']);
            $setting->set_conf('logo',$_POST['set']['desktop.banner']);
            //app::get('desktop')->setConf('desktop.banner',$_POST['set']['desktop.banner']);
            $this->end(true, app::get('desktop')->_('当前配置修改成功！'));
        }
    }

    function licence(){
        $this->sidePanel();
        echo '<iframe width="100%" height="100%" src="'.constant('URL_VIEW_LICENCE').'" ></iframe>';
    }

    function imageset(){
        $ctl = new image_ctl_admin_manage($this->app);
        $ctl->imageset();
    }

}
