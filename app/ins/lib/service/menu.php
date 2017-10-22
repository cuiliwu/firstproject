<?php
/**
 * ecclub licence
 *
 * @copyright  Copyright (c) 2005-2010 ecclub Technologies Inc. (http://www.ecclub.cn)
 * @license  http://www.ecclub.cn/ ecclub License
 */
 
class ins_service_menu{
    function function_menu(){
        $shop_base = app::get('site')->router()->gen_url(array('app'=>'site', 'ctl'=>'default'));
        $html[] = "<a href='$shop_base' target='_blank'>".app::get('b2c')->_('浏览前台')."</a>";
        return $html;
    
    }
}