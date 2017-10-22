<?php
/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2010 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 */
 
class site_desktop_widgets_systemInfo implements desktop_interface_widget{
    
    var $order = 1;
    function __construct($app){
        $this->app = $app; 
        $site = app::get('site');
        $this->render =  new base_render($site);
    }
    
    function get_title(){
            
        return app::get('site')->_("系统信息");
        
    }
    function get_html(){

        $render = $this->render;
        // 主机名 (IP：端口)：
        $render->pagedata['SERVER_NAME'] = $_SERVER['SERVER_ADDR'].':'.$_SERVER['SERVER_PORT'];
        // 程序目录
        $render->pagedata['FILE'] =  dirname(__FILE__);
        //服务器操作系统
        $render->pagedata['uname'] =   php_uname();
        $render->pagedata['remote_ip'] =  $_SERVER['REMOTE_ADDR'];
        // web服务器
        $render->pagedata['SERVER_SOFTWARE'] =  $_SERVER['SERVER_SOFTWARE'];
        // php运行方式
        $render->pagedata['PHP_SAPI'] =  PHP_SAPI;
        // php版本
        $render->pagedata['PHP_VERSION'] =  PHP_VERSION;
        // mysql版本
        if (function_exists("mysql_close")) {
            $MYSQL_VERSION = mysql_get_client_info();
        }else{
            $MYSQL_VERSION = '不支持';
        }
        $render->pagedata['MYSQL_VERSION'] =  $MYSQL_VERSION;
        // GD 库版本
        if(function_exists('gd_info')){
            $gd = gd_info();
            $GD_VERSION = $gd['GD Version'];
        }else{
            $GD_VERSION = "不支持";
        }
        $render->pagedata['GD_VERSION'] =  $GD_VERSION;
        // 最大上传限制
        if (ini_get('file_uploads')) {
            $filesize = ini_get('upload_max_filesize');
        }else{
            $filesize = '<span style="color:red">Disabled</span>';
        }
        $render->pagedata['filesize'] =  $filesize;
        // 最大执行时间
        $render->pagedata['max_execution_time'] = ini_get('max_execution_time');
        // 采集函数检测
        if (ini_get('allow_url_fopen')) {
            $allow_url_fopen = '支持';
        }else{
            $allow_url_fopen = '<span style="color:red">不支持</span>';
        }
        $render->pagedata['allow_url_fopen'] = $allow_url_fopen;
        


$online_log = ROOT_DIR."/data/man_count/"; //保存人数的文件,
$timeout = 30;//30秒内没动作者,认为掉线
$entries = file($online_log);

$temp = array();

for ($i=0;$i<count($entries);$i++) {
$entry = explode(",",trim($entries[$i]));
if (($entry[0] != $_SERVER["REMOTE_ADDR"]) && ($entry[1] > time())) {
array_push($temp,$entry[0].",".$entry[1]."\n"); //取出其他浏览者的信息,并去掉超时者,保存进$temp
}
}

array_push($temp,$_SERVER["REMOTE_ADDR"].",".(time() + ($timeout))."\n"); //更新浏览者的时间
$users_online = count($temp); //计算在线人数

$entries = implode("",$temp);
//写入文件
$fp = fopen($online_log,"w");
flock($fp,LOCK_EX); //flock() 不能在NFS以及其他的一些网络文件系统中正常工作
fputs($fp,$entries);
flock($fp,LOCK_UN);
fclose($fp);

$render->pagedata['users_online'] = $users_online;



        
        return $render->fetch('desktop/widgets/systemInfo.html');
    }
    function get_className(){
        
          return " valigntop exstatistics";
    }
    function get_width(){
          
          return "l-1";
        
    }
    
}

?>
