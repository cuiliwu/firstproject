<?php
/**
 * ecclub licence
 *
 * @copyright  Copyright (c) 2005-2013 ecclub Technologies Inc. (http://www.ecclub.cn)
 * @license  http://www.ecclub.cn/ ecclub License
 */

function theme_widget_logo($setting,&$smarty){
    $logo_id = app::get('wap')->getConf('wap.logo');
    $result['logo_image'] = base_storager::image_path($logo_id);
    return $result;
}
?>
