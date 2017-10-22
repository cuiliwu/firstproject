<?php
/**
 * ecclub licence
 *
 * @copyright  Copyright (c) 2005-2010 ecclub Technologies Inc. (http://www.ecclub.cn)
 * @license  http://ecos.ecclub.com/license/gpl GPL License
 */

class desktop_cert_certcheck
{
	function __construct($app)
        {
		$this->app = $app;
	}
    function check($params)
    {
        return;
        if($this->is_internal_ip()){
            return;
        }else{
			$ecclub_auth_code = $this->app->getConf('ecclub_auth_code');
			if(empty($ecclub_auth_code)){
				if( $params ){
	                unset($_SESSION['account'][$params['type']]);
	            }
	            $url = $this->app->base_url(1);
	            $code_url = $url.'index.php?app=desktop&ctl=code&act=error_view';
	            echo "<script>location.href='".$code_url."'</script>";exit;
			}
		}
		return;
	  
    }

	function  get_mac_code()
	{
		$get_string = "ASDFWEHUIOJHJHPF";//加密参与字符
		@exec("ipconfig /all",$array);
		for($Tmpa;$Tmpa<count($array);$Tmpa++)
		{
		    if(eregi("Physical",$array[$Tmpa]))
		    {
		        $mac=explode(":",$array[$Tmpa]);
		        $macstr = trim($mac[1]);
		    }
		}
		$macmd5str = substr($this->strtomd5_pass($macstr),0,24);
		$macmd5str = strtoupper($macmd5str);
		$robotstr = substr($macmd5str,0,6)."-".substr($macmd5str,4,6)."-".substr($macmd5str,8,6)."-".substr($macmd5str,12,6);

		$macmd5towstr = substr($this->strtomd5_pass($robotstr),0,24);
		$macmd5towstr = strtoupper($macmd5towstr);
		$robotwostr = substr($macmd5towstr,0,6)."-".substr($macmd5towstr,4,6)."-".substr($macmd5towstr,8,6)."-".substr($macmd5towstr,12,6);
		return $robotwostr;

	}
	function strtomd5_pass($str)
	{
	    global $get_string;
	    return md5(md5($str.$get_string).$get_string);
	}

    function error_view($auth_error_msg=null)
    {
		$render = $this->app->render();
        $ecclubIdUrl = app::get('base')->getConf('certificate_code_url');
        if( $ecclubIdUrl && $ecclubIdUrl != kernel::base_url(1) ){
		    $render->pagedata['url'] = $ecclubIdUrl;
        }
        $url = $this->app->base_url(1);
        $render->pagedata['post_url'] = $url.'index.php?app=desktop&ctl=code&act=codecheck';
		$render->pagedata['res_url'] = $this->app->res_url;
		$render->pagedata['auth_error_msg'] = $auth_error_msg;
		return $render->display('active_code.html');
	}
	/**
	  *		ocs :
	  * 	$method = 'active.do_active'
	  *		$ac = 'ecclub_ACTIVE'
	  *
	  *		其它产品默认
	  */
	function check_code($code=null,$method='oem.do_active',$ac = 'ecclub_OEM')
	{

		return true;
	}

	function check_certid()
	{
		return true;
	}
	function listener_login($params)
	{
        $this->check($params);
		$opencheck = false;
		$objCertchecks = kernel::servicelist("desktop.cert.check");
        foreach ($objCertchecks as $objCertcheck)
        {
            if(method_exists($objCertcheck , 'certcheck') && $objCertcheck->certcheck()){
				$opencheck = true;
				break;
			}
        }
	    if(!$opencheck || $this->is_internal_ip() || $this->is_demosite()) return ;
	$kvstore = base_kvstore::instance('ecos');

        $kvstore->fetch('chk_certid_lasttime', $chk_certid_lasttime);
        if($chk_certid_lasttime && (time()-$chk_certid_lasttime)<86400*7){
            return ;
        }
		if($params['type'] === pam_account::get_account_type('desktop')) {
        }
	}

    function check_error_info($error_code){
        if( $error_code == 'RegUrlError' ){
            $regurl = app::get('desktop')->getConf('activation_code_regurl');
        }
    }

    /*
     * 检测当环境是外网demo站点时的跳过激活检测
     */
    function is_demosite(){
        if(defined('DEV_CHECKDEMO') && DEV_CHECKDEMO){
            return true;
        }
    }

	function is_internal_ip()
	{
        $ip = $this->remote_addr();
        if($ip=='127.0.0.1' || $ip=='::1'){
            return true;
        }

		$ip = ip2long($ip);
		$net_a = ip2long('10.255.255.255') >> 24; //A类网预留ip的网络地址
		$net_b = ip2long('172.31.255.255') >> 20; //B类网预留ip的网络地址
		$net_c = ip2long('192.168.255.255') >> 16; //C类网预留ip的网络地址
		return $ip >> 24 === $net_a || $ip >> 20 === $net_b || $ip >> 16 === $net_c;
    }


	function remote_addr()
	{
		if(!isset($GLOBALS['_REMOTE_ADDR_'])){
			$addrs = array();

			if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
				foreach( array_reverse( explode( ',',  $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) as $x_f )
				{
					$x_f = trim($x_f);

					if ( preg_match( '/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$/', $x_f ) )
					{
						$addrs[] = $x_f;
					}
				}
			}

			$GLOBALS['_REMOTE_ADDR_'] = isset($addrs[0])?$addrs[0]:$_SERVER['REMOTE_ADDR'];
		}
		return $GLOBALS['_REMOTE_ADDR_'];
	}
}
