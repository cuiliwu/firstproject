<?php
/**
 * ecclub licence
 *
 * @copyright  Copyright (c) 2005-2012 ecclub Technologies Inc. (http://www.ecclub.cn)
 * @license  http://www.ecclub.cn/ baidu
 */

class wap_widgets{

    private static $__last_modified = null;
    private static $_prefix = 'wap_widgets_';
    //数据对象对外名称
    private static $_widgets_conf = array(
        'Goods'         => 'goods',
        'Coupons'       => 'coupons',
    );

    static public function set_last_modify() {
        $last_modified = time();
        if (app::get('wap')->setConf('widgets_css_last_modify', $last_modified )){
            self::$__last_modified = $last_modified;
            return true;
        }
        return false;
    }

    static public function get_last_modify() {
        if (!isset(self::$__last_modified)) {
            self::$__last_modified = app::get('wap')->getConf('widgets_css_last_modify');
        }
        return self::$__last_modified;
    }

    static public function store_widgets_css($tmpl, $css){
        $last_modified = time();
        $data = array('last_modified' => $last_modified,
                      'css' => $css);
        return base_kvstore::instance('wap_themes')->store('wap_widgets_css_'.$tmpl , $data);
        
    }

    static public function fetch_widgets_css($tmpl, &$css, &$last_modified){
        if (base_kvstore::instance('wap_themes')->fetch('wap_widgets_css_'.$tmpl, $data)){
            $last_modified = $data['last_modified'];
            $css = $data['css'];
            return true;
        }
        return false;
    }

    /**
     * 获取某个数据对象
     * @param string $obj_name
     */
    public static function load($obj_name){
        if (!array_key_exists($obj_name, self::$_widgets_conf)) return false;
        return self::_get_obj($obj_name);
    }

    private static function _get_obj($obj_name){
        $_obj_name      = self::$_widgets_conf[$obj_name];
        $object_class   = self::$_prefix.$_obj_name;
        $object         = kernel::single($object_class);
        return $object;
    }
}
