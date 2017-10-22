<?php exit()?>
2017-09-23 09:48:07	150613128759c5bd57d466c	INFO	Scanning local Applications... 

2017-09-23 09:48:08	150613128759c5bd57d466c	INFO	Scanning local Applications ok.

2017-09-23 09:48:08	150613128759c5bd57d466c	INFO	Updating base_application_dbtable@feixiang.

2017-09-23 09:48:08	150613128759c5bd57d466c	INFO	ALTER IGNORE TABLE `sdb_feixiang_company` 
	ADD COLUMN `dxpId` varchar(100) default '' comment '报文传输编号' AFTER website_url,
	ADD COLUMN `ebpCode` varchar(18) default '' comment '电商平台代码' AFTER dxpId,
	ADD COLUMN `ebpName` varchar(100) default '' comment '电商平台名称' AFTER ebpCode,
	ADD COLUMN `ebcCode` varchar(18) default '' comment '电商企业代码' AFTER ebpName,
	ADD COLUMN `ebcName` varchar(100) default '' comment '电商企业名称' AFTER ebcCode,
	ADD COLUMN `copCode` varchar(18) default '' comment '推送报文的企业代码' AFTER ebcName,
	ADD COLUMN `copName` varchar(100) default '' comment '推送报文的企业代码' AFTER copCode,
	DROP COLUMN `company_declare_code`,
	DROP COLUMN `company_subject`,
	DROP COLUMN `business_subject`,
	DROP COLUMN `record_area`,
	DROP COLUMN `regist_oversea`,
	DROP COLUMN `business_mode`,
	DROP COLUMN `country_region`,
	DROP COLUMN `org_code`,
	DROP COLUMN `tax_payer_nature`,
	DROP COLUMN `tax_payer_no`,
	DROP COLUMN `company_type`,
	DROP COLUMN `legal_person`,
	DROP COLUMN `contact_name`,
	DROP COLUMN `contact_info`,
	DROP COLUMN `EMail`,
	DROP COLUMN `fax_no`,
	DROP COLUMN `zip_code`,
	DROP COLUMN `company_address`,
	DROP COLUMN `business_scope`,
	DROP COLUMN `company_intro`,
	DROP COLUMN `declare`,
	DROP COLUMN `plat_name`,
	DROP COLUMN `plat_website`,
	DROP COLUMN `ciq_reg_code`,
	DROP COLUMN `ent_quality`,
	DROP COLUMN `ent_reg_place_code`,
	DROP COLUMN `ent_reg_place_name`,
	DROP COLUMN `ent_type`,
	DROP COLUMN `createtime`;

2017-09-23 09:48:08	150613128759c5bd57d466c	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `hs_code` varchar(20) comment 'HS编码' AFTER good_code,
	ADD COLUMN `price` varchar(30) comment '单价' AFTER sku,
	ADD COLUMN `weight` varchar(30) comment '毛重' AFTER price,
	ADD COLUMN `netWeight` varchar(30) comment '净重' AFTER weight,
	ADD COLUMN `unit` varchar(30) comment '国检需要，可以为空' AFTER netWeight,
	ADD COLUMN `product_record_no` varchar(30) comment '国检需要，可以为空' AFTER unit,
	DROP COLUMN `company_code`,
	DROP COLUMN `company_name`,
	DROP COLUMN `goods_no`,
	DROP COLUMN `category_coding`,
	DROP COLUMN `product_validity`,
	DROP COLUMN `main_ingredients`,
	DROP COLUMN `product_use`,
	DROP COLUMN `product_license`,
	DROP COLUMN `declare_time`,
	DROP COLUMN `monitor_org_code`,
	DROP COLUMN `monitor_org_name`,
	DROP COLUMN `TRADE_MODE`,
	DROP COLUMN `per_index`,
	DROP COLUMN `auth_info`,
	DROP COLUMN `abroad_supplier`,
	DROP COLUMN `enter_out_flag`;

2017-09-23 09:48:08	150613128759c5bd57d466c	INFO	ALTER IGNORE TABLE `sdb_feixiang_orders` 
	ADD COLUMN `push511` enum('no','yes') default 'no' comment '推送511' AFTER push311,
	DROP COLUMN `ebpCode`,
	DROP COLUMN `ebpName`,
	DROP COLUMN `ebcCode`,
	DROP COLUMN `ebcName`,
	DROP COLUMN `copName`,
	DROP COLUMN `copCode`,
	DROP COLUMN `dxpMode`,
	DROP COLUMN `dxpId`;

2017-09-23 09:48:08	150613128759c5bd57d466c	INFO	ALTER IGNORE TABLE `sdb_feixiang_orders_item` 
	DROP COLUMN `gnum`,
	DROP COLUMN `unit`,
	DROP COLUMN `currency`,
	DROP COLUMN `country`;

2017-09-23 09:48:08	150613128759c5bd57d466c	INFO	Updating base_application_cache_expires@feixiang.

2017-09-23 09:48:08	150613128759c5bd57d466c	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-23 09:48:08	150613128759c5bd57d466c	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-23 09:48:08	150613128759c5bd57d466c	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-23 09:48:08	150613128759c5bd57d466c	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-23 09:48:08	150613128759c5bd57d466c	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-23 09:48:08	150613128759c5bd57d466c	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-23 09:48:08	150613128759c5bd57d466c	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS_ITEM

2017-09-23 09:48:08	150613128759c5bd57d466c	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-23 09:48:08	150613128759c5bd57d466c	INFO	Applications database and services is up-to-date, ok.

2017-09-23 10:21:08	150613326859c5c51471fe5	INFO	Scanning local Applications... 

2017-09-23 10:21:08	150613326859c5c51471fe5	INFO	Scanning local Applications ok.

2017-09-23 10:21:08	150613326859c5c51471fe5	INFO	Updating base_application_dbtable@feixiang.

2017-09-23 10:21:08	150613326859c5c51471fe5	INFO	ALTER IGNORE TABLE `sdb_feixiang_company` 
	ADD COLUMN `createtime` int(10) unsigned not null comment '创建时间' AFTER copName,
	ADD COLUMN `last_modify` int(10) unsigned comment '最后修改时间' AFTER createtime;

2017-09-23 10:21:08	150613326859c5c51471fe5	INFO	Updating base_application_cache_expires@feixiang.

2017-09-23 10:21:08	150613326859c5c51471fe5	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-23 10:21:08	150613326859c5c51471fe5	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-23 10:21:08	150613326859c5c51471fe5	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-23 10:21:08	150613326859c5c51471fe5	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-23 10:21:08	150613326859c5c51471fe5	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-23 10:21:08	150613326859c5c51471fe5	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-23 10:21:08	150613326859c5c51471fe5	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS_ITEM

2017-09-23 10:21:08	150613326859c5c51471fe5	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-23 10:21:09	150613326859c5c51471fe5	INFO	Applications database and services is up-to-date, ok.

2017-09-23 15:18:52	150615113259c60adc413a8	INFO	Scanning local Applications... 

2017-09-23 15:18:52	150615113259c60adc413a8	INFO	Scanning local Applications ok.

2017-09-23 15:18:52	150615113259c60adc413a8	INFO	Updating desktop_application_menu@feixiang.

2017-09-23 15:18:52	150615113259c60adc413a8	INFO	Installing menu feixiang_ctl_admin_order

2017-09-23 15:18:52	150615113259c60adc413a8	INFO	Installing menu feixiang_ctl_admin_order

2017-09-23 15:18:52	150615113259c60adc413a8	INFO	Installing menu feixiang_ctl_admin_order

2017-09-23 15:18:52	150615113259c60adc413a8	INFO	Installing menu feixiang_ctl_admin_order

2017-09-23 15:18:52	150615113259c60adc413a8	INFO	Installing menu feixiang_ctl_admin_order

2017-09-23 15:18:52	150615113259c60adc413a8	INFO	Installing menu feixiang_ctl_admin_goods

2017-09-23 15:18:52	150615113259c60adc413a8	INFO	Installing menu feixiang_ctl_admin_goods

2017-09-23 15:18:52	150615113259c60adc413a8	INFO	Installing menu feixiang_ctl_admin_company

2017-09-23 15:18:52	150615113259c60adc413a8	INFO	Updating desktop_application_workground@feixiang.

2017-09-23 15:18:52	150615113259c60adc413a8	INFO	Installing workground fx_orders

2017-09-23 15:18:52	150615113259c60adc413a8	INFO	Installing workground fx_item

2017-09-23 15:18:52	150615113259c60adc413a8	INFO	Installing workground fx_ent

2017-09-23 15:18:52	150615113259c60adc413a8	INFO	Updating desktop_application_permission@feixiang.

2017-09-23 15:18:52	150615113259c60adc413a8	INFO	Installing permission orderManager

2017-09-23 15:18:52	150615113259c60adc413a8	INFO	Installing permission addManager

2017-09-23 15:18:52	150615113259c60adc413a8	INFO	Installing permission excelOrder

2017-09-23 15:18:52	150615113259c60adc413a8	INFO	Installing permission excelLogiNo

2017-09-23 15:18:52	150615113259c60adc413a8	INFO	Installing permission goodsList

2017-09-23 15:18:52	150615113259c60adc413a8	INFO	Installing permission addGoods

2017-09-23 15:18:52	150615113259c60adc413a8	INFO	Installing permission companyManager

2017-09-23 15:18:52	150615113259c60adc413a8	INFO	Installing permission addCompany

2017-09-23 15:18:52	150615113259c60adc413a8	INFO	Updating desktop_application_panelgroup@feixiang.

2017-09-23 15:18:52	150615113259c60adc413a8	INFO	Updating desktop_application_adminpanel@feixiang.

2017-09-23 15:18:52	150615113259c60adc413a8	INFO	Updating desktop_application_widgets@feixiang.

2017-09-23 15:18:52	150615113259c60adc413a8	INFO	Applications database and services is up-to-date, ok.

2017-09-23 17:04:48	150615748859c623b089218	INFO	Scanning local Applications... 

2017-09-23 17:04:48	150615748859c623b089218	INFO	Scanning local Applications ok.

2017-09-23 17:04:48	150615748859c623b089218	INFO	Updating base_application_dbtable@feixiang.

2017-09-23 17:04:49	150615748859c623b089218	INFO	ALTER IGNORE TABLE `sdb_feixiang_orders` 
	ADD COLUMN `buyerTelephone` varchar(60) comment '订购人电话' AFTER buyerName;

2017-09-23 17:04:49	150615748859c623b089218	INFO	Updating base_application_cache_expires@feixiang.

2017-09-23 17:04:49	150615748859c623b089218	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-23 17:04:49	150615748859c623b089218	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-23 17:04:49	150615748859c623b089218	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-23 17:04:49	150615748859c623b089218	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-23 17:04:49	150615748859c623b089218	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-23 17:04:49	150615748859c623b089218	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-23 17:04:49	150615748859c623b089218	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS_ITEM

2017-09-23 17:04:49	150615748859c623b089218	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-23 17:04:49	150615748859c623b089218	INFO	Applications database and services is up-to-date, ok.

2017-09-23 18:05:15	150616111559c631db10caf	INFO	Scanning local Applications... 

2017-09-23 18:05:15	150616111559c631db10caf	INFO	Scanning local Applications ok.

2017-09-23 18:05:15	150616111559c631db10caf	INFO	Updating base_application_dbtable@feixiang.

2017-09-23 18:05:15	150616111559c631db10caf	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `prod_country_code` varchar(8) comment '生产国代码' AFTER applicable_standards,
	ADD COLUMN `remark` varchar(500) comment '备注(其它)' AFTER prod_country_code,
	DROP COLUMN `PROD_COUNTRY_CODE`,
	DROP COLUMN `REMARK`;

2017-09-23 18:05:15	150616111559c631db10caf	INFO	ALTER IGNORE TABLE `sdb_feixiang_orders` 
	ADD COLUMN `push621` enum('xml','no','yes') default 'xml' comment '推送621' AFTER push511;

2017-09-23 18:05:15	150616111559c631db10caf	INFO	Updating base_application_cache_expires@feixiang.

2017-09-23 18:05:15	150616111559c631db10caf	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-23 18:05:15	150616111559c631db10caf	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-23 18:05:15	150616111559c631db10caf	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-23 18:05:15	150616111559c631db10caf	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-23 18:05:15	150616111559c631db10caf	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-23 18:05:15	150616111559c631db10caf	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-23 18:05:15	150616111559c631db10caf	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS_ITEM

2017-09-23 18:05:15	150616111559c631db10caf	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-23 18:05:15	150616111559c631db10caf	INFO	Updating base_application_crontab@feixiang.

2017-09-23 18:31:39	150616269959c6380bb4c79	INFO	Scanning local Applications... 

2017-09-23 18:31:39	150616269959c6380bb4c79	INFO	Scanning local Applications ok.

2017-09-23 18:31:39	150616269959c6380bb4c79	INFO	Updating base_application_crontab@feixiang.

2017-09-23 18:31:39	150616269959c6380bb4c79	INFO	Installing crontab feixiang_tasks_order_customs

2017-09-23 18:31:40	150616269959c6380bb4c79	INFO	Applications database and services is up-to-date, ok.

2017-09-23 19:06:13	150616477359c64025cebe9	INFO	Scanning local Applications... 

2017-09-23 19:06:13	150616477359c64025cebe9	INFO	Scanning local Applications ok.

2017-09-23 19:06:14	150616477359c64025cebe9	INFO	Updating base_application_dbtable@feixiang.

2017-09-23 19:06:14	150616477359c64025cebe9	INFO	ALTER IGNORE TABLE `sdb_feixiang_orders` 
	MODIFY COLUMN `order_id` varchar(20) not null comment 'ID';

2017-09-23 19:06:14	150616477359c64025cebe9	INFO	Updating base_application_cache_expires@feixiang.

2017-09-23 19:06:14	150616477359c64025cebe9	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-23 19:06:14	150616477359c64025cebe9	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-23 19:06:14	150616477359c64025cebe9	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-23 19:06:14	150616477359c64025cebe9	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-23 19:06:14	150616477359c64025cebe9	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-23 19:06:14	150616477359c64025cebe9	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-23 19:06:14	150616477359c64025cebe9	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS_ITEM

2017-09-23 19:06:14	150616477359c64025cebe9	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-23 19:06:14	150616477359c64025cebe9	INFO	Applications database and services is up-to-date, ok.

