<?php exit()?>
2017-09-26 10:05:54	150639155459c9b602d6a0f	INFO	Scanning local Applications... 

2017-09-26 10:05:54	150639155459c9b602d6a0f	INFO	Scanning local Applications ok.

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Updating desktop_application_menu@desktop.

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Updating desktop_application_workground@desktop.

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Updating desktop_application_permission@desktop.

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing permission shopsetting

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing permission dashboardpre

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing permission setting

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing permission performance

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing permission users

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing permission other

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Updating desktop_application_panelgroup@desktop.

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing panelgroup setting

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing panelgroup user

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing panelgroup other

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Updating desktop_application_adminpanel@desktop.

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing adminpanel email:setting

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing adminpanel users:index

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing adminpanel roles:index

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing adminpanel pam:index

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing adminpanel adminpanel:index

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing adminpanel cachemgr:index

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing adminpanel cachemgr:status

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing adminpanel cachemgr:optimize

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing adminpanel cachemgr:clean

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing adminpanel appmgr:index

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing adminpanel setting:index

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Updating desktop_application_widgets@desktop.

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Updating base_application_dbtable@feixiang.

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	ALTER IGNORE TABLE `sdb_feixiang_orders` 
	ADD COLUMN `result312` varchar(10) default 'no' comment '记录312返回结果' AFTER push311,
	ADD COLUMN `result512` varchar(10) default 'no' comment '记录512返回结果' AFTER push511,
	ADD COLUMN `result622` varchar(10) default 'no' comment '记录622返回结果' AFTER push621;

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	ALTER IGNORE TABLE `sdb_feixiang_orders_item` 
	ADD COLUMN `sku` varchar(30) comment '商品货号' AFTER orderNo,
	DROP COLUMN `itemNo`;

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Updating base_application_cache_expires@feixiang.

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS_ITEM

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Updating desktop_application_menu@feixiang.

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing menu feixiang_ctl_admin_order

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing menu feixiang_ctl_admin_order

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing menu feixiang_ctl_admin_order

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing menu feixiang_ctl_admin_order

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing menu feixiang_ctl_admin_order

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing menu feixiang_ctl_admin_goods

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing menu feixiang_ctl_admin_goods

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing menu feixiang_ctl_admin_company

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Updating desktop_application_workground@feixiang.

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing workground fx_orders

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing workground fx_item

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing workground fx_ent

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Updating desktop_application_permission@feixiang.

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing permission orderManager

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing permission addManager

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing permission excelOrder

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing permission excelLogiNo

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing permission goodsList

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing permission addGoods

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing permission companyManager

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Installing permission addCompany

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Updating desktop_application_panelgroup@feixiang.

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Updating desktop_application_adminpanel@feixiang.

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Updating desktop_application_widgets@feixiang.

2017-09-26 10:05:55	150639155459c9b602d6a0f	INFO	Applications database and services is up-to-date, ok.

2017-09-26 10:07:30	150639165059c9b66214f0b	INFO	Scanning local Applications... 

2017-09-26 10:07:30	150639165059c9b66214f0b	INFO	Scanning local Applications ok.

2017-09-26 10:07:30	150639165059c9b66214f0b	INFO	Applications database and services is up-to-date, ok.

2017-09-26 10:09:12	150639175259c9b6c894046	INFO	Scanning local Applications... 

2017-09-26 10:09:12	150639175259c9b6c894046	INFO	Scanning local Applications ok.

2017-09-26 10:09:12	150639175259c9b6c894046	INFO	Updating desktop_application_menu@desktop.

2017-09-26 10:09:12	150639175259c9b6c894046	INFO	Installing menu desktop_ctl_dashboard

2017-09-26 10:09:12	150639175259c9b6c894046	INFO	Updating desktop_application_workground@desktop.

2017-09-26 10:09:12	150639175259c9b6c894046	INFO	Installing workground site.wrokground.dashboard

2017-09-26 10:09:12	150639175259c9b6c894046	INFO	Updating desktop_application_permission@desktop.

2017-09-26 10:09:12	150639175259c9b6c894046	INFO	Installing permission shopsetting

2017-09-26 10:09:12	150639175259c9b6c894046	INFO	Installing permission dashboardpre

2017-09-26 10:09:12	150639175259c9b6c894046	INFO	Installing permission setting

2017-09-26 10:09:12	150639175259c9b6c894046	INFO	Installing permission performance

2017-09-26 10:09:12	150639175259c9b6c894046	INFO	Installing permission users

2017-09-26 10:09:12	150639175259c9b6c894046	INFO	Installing permission other

2017-09-26 10:09:12	150639175259c9b6c894046	INFO	Updating desktop_application_panelgroup@desktop.

2017-09-26 10:09:12	150639175259c9b6c894046	INFO	Installing panelgroup setting

2017-09-26 10:09:12	150639175259c9b6c894046	INFO	Installing panelgroup user

2017-09-26 10:09:12	150639175259c9b6c894046	INFO	Installing panelgroup other

2017-09-26 10:09:12	150639175259c9b6c894046	INFO	Updating desktop_application_adminpanel@desktop.

2017-09-26 10:09:12	150639175259c9b6c894046	INFO	Installing adminpanel email:setting

2017-09-26 10:09:12	150639175259c9b6c894046	INFO	Installing adminpanel users:index

2017-09-26 10:09:12	150639175259c9b6c894046	INFO	Installing adminpanel roles:index

2017-09-26 10:09:12	150639175259c9b6c894046	INFO	Installing adminpanel pam:index

2017-09-26 10:09:12	150639175259c9b6c894046	INFO	Installing adminpanel adminpanel:index

2017-09-26 10:09:12	150639175259c9b6c894046	INFO	Installing adminpanel cachemgr:index

2017-09-26 10:09:12	150639175259c9b6c894046	INFO	Installing adminpanel cachemgr:status

2017-09-26 10:09:12	150639175259c9b6c894046	INFO	Installing adminpanel cachemgr:optimize

2017-09-26 10:09:12	150639175259c9b6c894046	INFO	Installing adminpanel cachemgr:clean

2017-09-26 10:09:12	150639175259c9b6c894046	INFO	Installing adminpanel appmgr:index

2017-09-26 10:09:12	150639175259c9b6c894046	INFO	Installing adminpanel setting:index

2017-09-26 10:09:12	150639175259c9b6c894046	INFO	Updating desktop_application_widgets@desktop.

2017-09-26 10:09:13	150639175259c9b6c894046	INFO	Applications database and services is up-to-date, ok.

2017-09-26 10:14:15	150639205559c9b7f7a7493	INFO	Scanning local Applications... 

2017-09-26 10:14:15	150639205559c9b7f7a7493	INFO	Scanning local Applications ok.

2017-09-26 10:14:15	150639205559c9b7f7a7493	INFO	Updating desktop_application_menu@desktop.

2017-09-26 10:14:15	150639205559c9b7f7a7493	INFO	Updating desktop_application_workground@desktop.

2017-09-26 10:14:15	150639205559c9b7f7a7493	INFO	Updating desktop_application_permission@desktop.

2017-09-26 10:14:15	150639205559c9b7f7a7493	INFO	Installing permission shopsetting

2017-09-26 10:14:15	150639205559c9b7f7a7493	INFO	Installing permission dashboardpre

2017-09-26 10:14:15	150639205559c9b7f7a7493	INFO	Installing permission setting

2017-09-26 10:14:15	150639205559c9b7f7a7493	INFO	Installing permission performance

2017-09-26 10:14:15	150639205559c9b7f7a7493	INFO	Installing permission users

2017-09-26 10:14:15	150639205559c9b7f7a7493	INFO	Installing permission other

2017-09-26 10:14:15	150639205559c9b7f7a7493	INFO	Updating desktop_application_panelgroup@desktop.

2017-09-26 10:14:15	150639205559c9b7f7a7493	INFO	Installing panelgroup setting

2017-09-26 10:14:15	150639205559c9b7f7a7493	INFO	Installing panelgroup user

2017-09-26 10:14:15	150639205559c9b7f7a7493	INFO	Installing panelgroup other

2017-09-26 10:14:15	150639205559c9b7f7a7493	INFO	Updating desktop_application_adminpanel@desktop.

2017-09-26 10:14:15	150639205559c9b7f7a7493	INFO	Installing adminpanel email:setting

2017-09-26 10:14:15	150639205559c9b7f7a7493	INFO	Installing adminpanel users:index

2017-09-26 10:14:15	150639205559c9b7f7a7493	INFO	Installing adminpanel roles:index

2017-09-26 10:14:15	150639205559c9b7f7a7493	INFO	Installing adminpanel pam:index

2017-09-26 10:14:15	150639205559c9b7f7a7493	INFO	Installing adminpanel adminpanel:index

2017-09-26 10:14:15	150639205559c9b7f7a7493	INFO	Installing adminpanel cachemgr:index

2017-09-26 10:14:15	150639205559c9b7f7a7493	INFO	Installing adminpanel cachemgr:status

2017-09-26 10:14:15	150639205559c9b7f7a7493	INFO	Installing adminpanel cachemgr:optimize

2017-09-26 10:14:15	150639205559c9b7f7a7493	INFO	Installing adminpanel cachemgr:clean

2017-09-26 10:14:15	150639205559c9b7f7a7493	INFO	Installing adminpanel appmgr:index

2017-09-26 10:14:15	150639205559c9b7f7a7493	INFO	Installing adminpanel setting:index

2017-09-26 10:14:15	150639205559c9b7f7a7493	INFO	Updating desktop_application_widgets@desktop.

2017-09-26 10:14:16	150639205559c9b7f7a7493	INFO	Updating desktop_application_menu@feixiang.

2017-09-26 10:14:16	150639205559c9b7f7a7493	INFO	Installing menu feixiang_ctl_admin_order

2017-09-26 10:14:16	150639205559c9b7f7a7493	INFO	Installing menu feixiang_ctl_admin_order

2017-09-26 10:14:16	150639205559c9b7f7a7493	INFO	Installing menu feixiang_ctl_admin_order

2017-09-26 10:14:16	150639205559c9b7f7a7493	INFO	Installing menu feixiang_ctl_admin_order

2017-09-26 10:14:16	150639205559c9b7f7a7493	INFO	Installing menu feixiang_ctl_admin_order

2017-09-26 10:14:16	150639205559c9b7f7a7493	INFO	Installing menu feixiang_ctl_admin_goods

2017-09-26 10:14:16	150639205559c9b7f7a7493	INFO	Installing menu feixiang_ctl_admin_goods

2017-09-26 10:14:16	150639205559c9b7f7a7493	INFO	Installing menu feixiang_ctl_admin_company

2017-09-26 10:14:16	150639205559c9b7f7a7493	INFO	Updating desktop_application_workground@feixiang.

2017-09-26 10:14:16	150639205559c9b7f7a7493	INFO	Installing workground fx_orders

2017-09-26 10:14:16	150639205559c9b7f7a7493	INFO	Installing workground fx_item

2017-09-26 10:14:16	150639205559c9b7f7a7493	INFO	Installing workground fx_ent

2017-09-26 10:14:16	150639205559c9b7f7a7493	INFO	Updating desktop_application_permission@feixiang.

2017-09-26 10:14:16	150639205559c9b7f7a7493	INFO	Installing permission orderManager

2017-09-26 10:14:16	150639205559c9b7f7a7493	INFO	Installing permission addManager

2017-09-26 10:14:16	150639205559c9b7f7a7493	INFO	Installing permission excelOrder

2017-09-26 10:14:16	150639205559c9b7f7a7493	INFO	Installing permission excelLogiNo

2017-09-26 10:14:16	150639205559c9b7f7a7493	INFO	Installing permission goodsList

2017-09-26 10:14:16	150639205559c9b7f7a7493	INFO	Installing permission addGoods

2017-09-26 10:14:16	150639205559c9b7f7a7493	INFO	Installing permission companyManager

2017-09-26 10:14:16	150639205559c9b7f7a7493	INFO	Installing permission addCompany

2017-09-26 10:14:16	150639205559c9b7f7a7493	INFO	Updating desktop_application_panelgroup@feixiang.

2017-09-26 10:14:16	150639205559c9b7f7a7493	INFO	Updating desktop_application_adminpanel@feixiang.

2017-09-26 10:14:16	150639205559c9b7f7a7493	INFO	Updating desktop_application_widgets@feixiang.

2017-09-26 10:14:16	150639205559c9b7f7a7493	INFO	Applications database and services is up-to-date, ok.

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Scanning local Applications... 

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Scanning local Applications ok.

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Updating base_application_dbtable@feixiang.

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	ALTER IGNORE TABLE `sdb_feixiang_orders` 
	ADD COLUMN `pay_status` enum('no','yes') default 'no' comment '订单支付状态' AFTER result622;

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Updating base_application_cache_expires@feixiang.

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS_ITEM

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Updating desktop_application_menu@feixiang.

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Installing menu feixiang_ctl_admin_order

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Installing menu feixiang_ctl_admin_order

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Installing menu feixiang_ctl_admin_order

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Installing menu feixiang_ctl_admin_order

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Installing menu feixiang_ctl_admin_order

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Installing menu feixiang_ctl_admin_order

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Installing menu feixiang_ctl_admin_order

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Installing menu feixiang_ctl_admin_goods

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Installing menu feixiang_ctl_admin_goods

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Installing menu feixiang_ctl_admin_company

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Updating desktop_application_workground@feixiang.

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Installing workground fx_orders

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Installing workground fx_item

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Installing workground fx_ent

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Updating desktop_application_permission@feixiang.

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Installing permission orderManager

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Installing permission addManager

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Installing permission excelOrder

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Installing permission excelLogiNo

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Installing permission goodsList

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Installing permission addGoods

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Installing permission companyManager

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Installing permission addCompany

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Updating desktop_application_panelgroup@feixiang.

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Updating desktop_application_adminpanel@feixiang.

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Updating desktop_application_widgets@feixiang.

2017-09-26 14:11:59	150640631959c9efaf1588e	INFO	Applications database and services is up-to-date, ok.

2017-09-26 15:23:04	150641058459ca00584ebd9	INFO	Scanning local Applications... 

2017-09-26 15:23:04	150641058459ca00584ebd9	INFO	Scanning local Applications ok.

2017-09-26 15:23:04	150641058459ca00584ebd9	INFO	Updating desktop_application_menu@site.

2017-09-26 15:23:04	150641058459ca00584ebd9	INFO	Installing menu site_ctl_admin_module

2017-09-26 15:23:04	150641058459ca00584ebd9	INFO	Installing menu site_ctl_admin_module

2017-09-26 15:23:04	150641058459ca00584ebd9	INFO	Installing menu site_ctl_admin_module

2017-09-26 15:23:04	150641058459ca00584ebd9	INFO	Installing menu site_ctl_admin_module

2017-09-26 15:23:04	150641058459ca00584ebd9	INFO	Installing menu site_ctl_admin_module

2017-09-26 15:23:04	150641058459ca00584ebd9	INFO	Installing menu site_ctl_admin_module

2017-09-26 15:23:04	150641058459ca00584ebd9	INFO	Installing menu site_ctl_admin_module

2017-09-26 15:23:04	150641058459ca00584ebd9	INFO	Installing menu site_ctl_admin_module

2017-09-26 15:23:04	150641058459ca00584ebd9	INFO	Installing menu site_ctl_admin_module

2017-09-26 15:23:04	150641058459ca00584ebd9	INFO	Installing menu site_ctl_admin_module

2017-09-26 15:23:04	150641058459ca00584ebd9	INFO	Installing menu site_ctl_admin_module

2017-09-26 15:23:04	150641058459ca00584ebd9	INFO	Installing menu site_ctl_admin_module

2017-09-26 15:23:04	150641058459ca00584ebd9	INFO	Installing menu site_ctl_admin_module

2017-09-26 15:23:04	150641058459ca00584ebd9	INFO	Installing menu site_ctl_admin_module

2017-09-26 15:23:04	150641058459ca00584ebd9	INFO	Updating desktop_application_workground@site.

2017-09-26 15:23:04	150641058459ca00584ebd9	INFO	Installing workground site.wrokground.theme

2017-09-26 15:23:04	150641058459ca00584ebd9	INFO	Installing workground site.wrokground.theme

2017-09-26 15:23:04	150641058459ca00584ebd9	INFO	Updating desktop_application_permission@site.

2017-09-26 15:23:04	150641058459ca00584ebd9	INFO	Installing permission site

2017-09-26 15:23:04	150641058459ca00584ebd9	INFO	Installing permission theme

2017-09-26 15:23:04	150641058459ca00584ebd9	INFO	Installing permission seo

2017-09-26 15:23:04	150641058459ca00584ebd9	INFO	Installing permission secure

2017-09-26 15:23:04	150641058459ca00584ebd9	INFO	Installing permission link

2017-09-26 15:23:04	150641058459ca00584ebd9	INFO	Updating desktop_application_panelgroup@site.

2017-09-26 15:23:04	150641058459ca00584ebd9	INFO	Updating desktop_application_adminpanel@site.

2017-09-26 15:23:04	150641058459ca00584ebd9	INFO	Updating desktop_application_widgets@site.

2017-09-26 15:23:04	150641058459ca00584ebd9	INFO	Installing widgets site_desktop_widgets_systemInfo

2017-09-26 15:23:04	150641058459ca00584ebd9	INFO	Applications database and services is up-to-date, ok.

2017-09-26 15:24:16	150641065659ca00a010846	INFO	Scanning local Applications... 

2017-09-26 15:24:16	150641065659ca00a010846	INFO	Scanning local Applications ok.

2017-09-26 15:24:16	150641065659ca00a010846	INFO	Applications database and services is up-to-date, ok.

2017-09-26 15:34:31	150641127159ca0307bfef7	INFO	Scanning local Applications... 

2017-09-26 15:34:31	150641127159ca0307bfef7	INFO	Scanning local Applications ok.

2017-09-26 15:34:32	150641127159ca0307bfef7	INFO	Updating desktop_application_menu@site.

2017-09-26 15:34:32	150641127159ca0307bfef7	INFO	Updating desktop_application_workground@site.

2017-09-26 15:34:32	150641127159ca0307bfef7	INFO	Updating desktop_application_permission@site.

2017-09-26 15:34:32	150641127159ca0307bfef7	INFO	Installing permission site

2017-09-26 15:34:32	150641127159ca0307bfef7	INFO	Installing permission theme

2017-09-26 15:34:32	150641127159ca0307bfef7	INFO	Installing permission seo

2017-09-26 15:34:32	150641127159ca0307bfef7	INFO	Installing permission secure

2017-09-26 15:34:32	150641127159ca0307bfef7	INFO	Installing permission link

2017-09-26 15:34:32	150641127159ca0307bfef7	INFO	Updating desktop_application_panelgroup@site.

2017-09-26 15:34:32	150641127159ca0307bfef7	INFO	Updating desktop_application_adminpanel@site.

2017-09-26 15:34:32	150641127159ca0307bfef7	INFO	Updating desktop_application_widgets@site.

2017-09-26 15:34:32	150641127159ca0307bfef7	INFO	Installing widgets site_desktop_widgets_systemInfo

2017-09-26 15:34:32	150641127159ca0307bfef7	INFO	Applications database and services is up-to-date, ok.

