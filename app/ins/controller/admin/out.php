<?php
class ins_ctl_admin_out extends base_controller implements desktop_interface_controller_content{
	public function modify(&$html, &$obj){
	   $arr = "<a href=\"index.php?ctl=dashboard&act=index\">EC-OS</a>";
	   $html = str_replace($arr, "<a href=\"index.php?ctl=dashboard&act=index\">CBI跨境通</a>",$html);

	   $arrx = "管理控制后台";
	   $html = str_replace($arrx, "综合服务平台",$html);

	   
	}
}