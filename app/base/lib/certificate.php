<?php

 
class base_certificate{

    static $certi= null;

    static function register($data=null){
        return true;
    }
    

    /**
     * 获取证书的版权信息
     * @param string app id
     * @return string key_type
     */
    static function certi_info($app_id='b2c')
    {
        $certi_info = app::get($app_id)->getConf('certi_info');
        $certi_info = json_decode($certi_info, 1);
        
        return $certi_info['key_type'];
    }

    static function get($code='certificate_id'){
        
        if(!function_exists('get_certificate')){
            if(self::$certi===null){
				if(ECAE_MODE){
					self::$certi = app::get('base')->getConf('certificate');
				}else{
					if(file_exists(ROOT_DIR.'/config/certi.php')){
						require(ROOT_DIR.'/config/certi.php');
						self::$certi = $certificate;
					}
				}
            }
        }else{
            self::$certi = get_certificate();
        }
        
        return self::$certi[$code];
    }
    
    static function active(){
        if(self::get()){
            logger::info('Using exists certificate: config/certi.php');
        }else{
            logger::info('Request new certificate');
            self::register();
        }
    }
    
    
    static function set_certificate($certificate){
        if(!function_exists('set_certificate')){
			if(ECAE_MODE){
				app::get('base')->setConf('certificate',$certificate);
			}else{
				return file_put_contents(ROOT_DIR.'/config/certi.php'
					,'<?php $certificate='.var_export($certificate,1).';');
			}
        }else{
            return set_certificate($certificate);
        }
    }
    static function del_certificate(){
        if(is_file(ROOT_DIR.'/config/certi.php'))        
            unlink(ROOT_DIR.'/config/certi.php');
    }
    static function gen_sign($params){
        return strtoupper(md5(strtoupper(md5(self::assemble($params))).self::token()));
    }
    
    static function assemble($params) 
    {
        if(!is_array($params))  return null;
        ksort($params, SORT_STRING);
        $sign = '';
        foreach($params AS $key=>$val){
            if(is_null($val))   continue;
            if(is_bool($val))   $val = ($val) ? 1 : 0;
            $sign .= $key . (is_array($val) ? self::assemble($val) : $val);
        }
        return $sign;
    }//End Function

    static function certi_id(){ return self::get('certificate_id'); }
    
    static function token(){ return self::get('token'); }

    static function get_certi_logo_url(){
        return $image_url;
    }
}
