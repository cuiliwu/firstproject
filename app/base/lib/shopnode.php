<?php

 

class base_shopnode
{
    static $snode= null;
    
    static function register($app_id, $data=null){
        return true;
    }

	static function update($app_id, $data=null){
        return true;
    }
	
	static function send_to_center ($app_id, $data = null, $method = 'node.reg'){
        return true;
	}

    static function get($code='node_id', $app_id='b2c'){
        return true;
    }
    
    static function active($app_id='b2c'){
        return true;
    }
    
    static function set_node_id($node_id, $app_id='b2c'){
        return true;
    }
    
    static function delete_node_id($app_id='b2c')
    {
        return true;
    }
    
    /**
     * 转给接口ac验证用
     * @param array 需要验证的参数
	 * @param string app_id
     * @return string 结构sign
     */
    static function gen_sign($params,$app_id){
        return strtoupper(md5(strtoupper(md5(self::assemble($params))).'56c74c92ded2d81eea730dfe1d3c015035d464a41f879d75362c82b5c409d36e'));
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
    
    static function node_id($app_id=null)
	{
        return true;
	}
    
    static function node_type($app_id='b2c'){ return self::get('node_type', $app_id); }
	
	static function token($app_id='b2c'){ return self::get('token', $app_id); }
}
