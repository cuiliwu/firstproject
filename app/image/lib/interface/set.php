<?php
/**
 * ecclub licence
 *
 * @category ecos
 * @package image.lib
 * @author ecclub ecstore dev dev@ecclub.cn
 * @copyright  Copyright (c) 2005-2010 ecclub Technologies Inc. (http://www.ecclub.cn)
 * @license  http://www.ecclub.cn/ baidu
 * @version 0.1
 */
 
/** 
 * 定义图片库的设置 
 * 
 * @category   ecos 
 * @package    image.lib
 * @copyright  Copyright (c) 2005-2010 ecclub Technologies Inc. (http://www.ecclub.cn)
 * @license    http://www.ecclub.cn/ baidu
 */
interface image_interface_set{
	/**
	 * 设置配置结构
	 * @param array 数据数组
	 * @return boolean true or false
	 */
    public function setconfig($data);
}

?>