<?php exit()?>
2017-09-18 11:28:35	150570531559bf3d63eb7ba	INFO	Scanning local Applications... 

2017-09-18 11:28:36	150570531559bf3d63eb7ba	INFO	Scanning local Applications ok.

2017-09-18 11:28:36	150570531559bf3d63eb7ba	INFO	Updating base_application_dbtable@feixiang.

2017-09-18 11:28:36	150570531559bf3d63eb7ba	INFO	ALTER IGNORE TABLE `sdb_feixiang_orders` 
	ADD COLUMN `orderNo` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	ADD COLUMN `ebpCode` varchar(18) comment '电商平台代码' AFTER orderNo,
	ADD COLUMN `ebpName` varchar(100) comment '电商平台名称' AFTER ebpCode,
	ADD COLUMN `ebcCode` varchar(18) comment '电商企业代码' AFTER ebpName,
	ADD COLUMN `ebcName` varchar(18) comment '电商企业名称' AFTER ebcCode,
	ADD COLUMN `goodsValue` decimal(20,3) comment '商品价格' AFTER ebcName,
	ADD COLUMN `taxTotal` decimal(20,3) comment '代扣税款' AFTER discount,
	ADD COLUMN `acturalPaid` decimal(20,3) comment '实际支付金额' AFTER taxTotal,
	ADD COLUMN `currency` varchar(3) comment '币制' AFTER acturalPaid,
	ADD COLUMN `buyerRegNo` varchar(60) comment '订购人注册号' AFTER currency,
	ADD COLUMN `buyerName` varchar(60) comment '订购人姓名' AFTER buyerRegNo,
	ADD COLUMN `buyerIdType` varchar(1) comment '订购人证件类型' AFTER buyerName,
	ADD COLUMN `buyerIdNumber` varchar(60) comment '订购人证件号码' AFTER buyerIdType,
	ADD COLUMN `payCode` varchar(18) comment '支付企业代码' AFTER buyerIdNumber,
	ADD COLUMN `payName` varchar(100) comment '支付企业名称' AFTER payCode,
	ADD COLUMN `payTransactionId` varchar(60) comment '支付交易编号' AFTER payName,
	ADD COLUMN `batchNumbers` varchar(100) comment '商品批次号' AFTER payTransactionId,
	MODIFY COLUMN `consignee` varchar(100) comment '收货人姓名',
	ADD COLUMN `consigneeTelephone` varchar(50) comment '收货人电话' AFTER consignee,
	ADD COLUMN `consigneeAddress` varchar(200) comment '收货地址' AFTER consigneeTelephone,
	ADD COLUMN `consigneeDitrict` varchar(6) comment '收货地址行政区划代码' AFTER consigneeAddress,
	ADD COLUMN `note` varchar(255) comment '备注' AFTER consigneeDitrict,
	DROP COLUMN `order_id`,
	DROP COLUMN `order_total_amount`,
	DROP COLUMN `i_e_flag`,
	DROP COLUMN `order_no`,
	DROP COLUMN `company_name`,
	DROP COLUMN `company_code`,
	DROP COLUMN `trade_time`,
	DROP COLUMN `curr_code`,
	DROP COLUMN `consignee_email`,
	DROP COLUMN `consignee_tel`,
	DROP COLUMN `consignee_address`,
	DROP COLUMN `total_count`,
	DROP COLUMN `post_mode`,
	DROP COLUMN `saler_country`,
	DROP COLUMN `addressor_name`,
	DROP COLUMN `create_time`,
	DROP COLUMN `logis_company_name`,
	DROP COLUMN `logis_company_code`,
	DROP COLUMN `goods_declar_check_id`,
	DROP COLUMN `tax_total`,
	DROP COLUMN `actural_paid`,
	DROP COLUMN `buyer_reg_no`,
	DROP COLUMN `buyer_name`,
	DROP COLUMN `buyer_id_type`,
	DROP COLUMN `buyer_id_number`,
	DROP COLUMN `batch_number`,
	DROP COLUMN `consignee_ditric`,
	DROP COLUMN `sender_city`,
	DROP COLUMN `buyer_id_tel`,
	DROP COLUMN `price_total_val`,
	DROP COLUMN `logistics_no`,
	DROP COLUMN `main_wb_no`,
	DROP COLUMN `insured_fee`;

2017-09-18 11:28:36	150570531559bf3d63eb7ba	ERR	ALTER IGNORE TABLE `sdb_feixiang_orders` 
	ADD COLUMN `orderNo` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	ADD COLUMN `ebpCode` varchar(18) comment '电商平台代码' AFTER orderNo,
	ADD COLUMN `ebpName` varchar(100) comment '电商平台名称' AFTER ebpCode,
	ADD COLUMN `ebcCode` varchar(18) comment '电商企业代码' AFTER ebpName,
	ADD COLUMN `ebcName` varchar(18) comment '电商企业名称' AFTER ebcCode,
	ADD COLUMN `goodsValue` decimal(20,3) comment '商品价格' AFTER ebcName,
	ADD COLUMN `taxTotal` decimal(20,3) comment '代扣税款' AFTER discount,
	ADD COLUMN `acturalPaid` decimal(20,3) comment '实际支付金额' AFTER taxTotal,
	ADD COLUMN `currency` varchar(3) comment '币制' AFTER acturalPaid,
	ADD COLUMN `buyerRegNo` varchar(60) comment '订购人注册号' AFTER currency,
	ADD COLUMN `buyerName` varchar(60) comment '订购人姓名' AFTER buyerRegNo,
	ADD COLUMN `buyerIdType` varchar(1) comment '订购人证件类型' AFTER buyerName,
	ADD COLUMN `buyerIdNumber` varchar(60) comment '订购人证件号码' AFTER buyerIdType,
	ADD COLUMN `payCode` varchar(18) comment '支付企业代码' AFTER buyerIdNumber,
	ADD COLUMN `payName` varchar(100) comment '支付企业名称' AFTER payCode,
	ADD COLUMN `payTransactionId` varchar(60) comment '支付交易编号' AFTER payName,
	ADD COLUMN `batchNumbers` varchar(100) comment '商品批次号' AFTER payTransactionId,
	MODIFY COLUMN `consignee` varchar(100) comment '收货人姓名',
	ADD COLUMN `consigneeTelephone` varchar(50) comment '收货人电话' AFTER consignee,
	ADD COLUMN `consigneeAddress` varchar(200) comment '收货地址' AFTER consigneeTelephone,
	ADD COLUMN `consigneeDitrict` varchar(6) comment '收货地址行政区划代码' AFTER consigneeAddress,
	ADD COLUMN `note` varchar(255) comment '备注' AFTER consigneeDitrict,
	DROP COLUMN `order_id`,
	DROP COLUMN `order_total_amount`,
	DROP COLUMN `i_e_flag`,
	DROP COLUMN `order_no`,
	DROP COLUMN `company_name`,
	DROP COLUMN `company_code`,
	DROP COLUMN `trade_time`,
	DROP COLUMN `curr_code`,
	DROP COLUMN `consignee_email`,
	DROP COLUMN `consignee_tel`,
	DROP COLUMN `consignee_address`,
	DROP COLUMN `total_count`,
	DROP COLUMN `post_mode`,
	DROP COLUMN `saler_country`,
	DROP COLUMN `addressor_name`,
	DROP COLUMN `create_time`,
	DROP COLUMN `logis_company_name`,
	DROP COLUMN `logis_company_code`,
	DROP COLUMN `goods_declar_check_id`,
	DROP COLUMN `tax_total`,
	DROP COLUMN `actural_paid`,
	DROP COLUMN `buyer_reg_no`,
	DROP COLUMN `buyer_name`,
	DROP COLUMN `buyer_id_type`,
	DROP COLUMN `buyer_id_number`,
	DROP COLUMN `batch_number`,
	DROP COLUMN `consignee_ditric`,
	DROP COLUMN `sender_city`,
	DROP COLUMN `buyer_id_tel`,
	DROP COLUMN `price_total_val`,
	DROP COLUMN `logistics_no`,
	DROP COLUMN `main_wb_no`,
	DROP COLUMN `insured_fee`;:Incorrect table definition; there can be only one auto column and it must be defined as a key

2017-09-18 11:28:36	150570531559bf3d63eb7ba	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_orders` 
	ADD COLUMN `orderNo` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	ADD COLUMN `ebpCode` varchar(18) comment '电商平台代码' AFTER orderNo,
	ADD COLUMN `ebpName` varchar(100) comment '电商平台名称' AFTER ebpCode,
	ADD COLUMN `ebcCode` varchar(18) comment '电商企业代码' AFTER ebpName,
	ADD COLUMN `ebcName` varchar(18) comment '电商企业名称' AFTER ebcCode,
	ADD COLUMN `goodsValue` decimal(20,3) comment '商品价格' AFTER ebcName,
	ADD COLUMN `taxTotal` decimal(20,3) comment '代扣税款' AFTER discount,
	ADD COLUMN `acturalPaid` decimal(20,3) comment '实际支付金额' AFTER taxTotal,
	ADD COLUMN `currency` varchar(3) comment '币制' AFTER acturalPaid,
	ADD COLUMN `buyerRegNo` varchar(60) comment '订购人注册号' AFTER currency,
	ADD COLUMN `buyerName` varchar(60) comment '订购人姓名' AFTER buyerRegNo,
	ADD COLUMN `buyerIdType` varchar(1) comment '订购人证件类型' AFTER buyerName,
	ADD COLUMN `buyerIdNumber` varchar(60) comment '订购人证件号码' AFTER buyerIdType,
	ADD COLUMN `payCode` varchar(18) comment '支付企业代码' AFTER buyerIdNumber,
	ADD COLUMN `payName` varchar(100) comment '支付企业名称' AFTER payCode,
	ADD COLUMN `payTransactionId` varchar(60) comment '支付交易编号' AFTER payName,
	ADD COLUMN `batchNumbers` varchar(100) comment '商品批次号' AFTER payTransactionId,
	MODIFY COLUMN `consignee` varchar(100) comment '收货人姓名',
	ADD COLUMN `consigneeTelephone` varchar(50) comment '收货人电话' AFTER consignee,
	ADD COLUMN `consigneeAddress` varchar(200) comment '收货地址' AFTER consigneeTelephone,
	ADD COLUMN `consigneeDitrict` varchar(6) comment '收货地址行政区划代码' AFTER consigneeAddress,
	ADD COLUMN `note` varchar(255) comment '备注' AFTER consigneeDitrict,
	DROP COLUMN `order_id`,
	DROP COLUMN `order_total_amount`,
	DROP COLUMN `i_e_flag`,
	DROP COLUMN `order_no`,
	DROP COLUMN `company_name`,
	DROP COLUMN `company_code`,
	DROP COLUMN `trade_time`,
	DROP COLUMN `curr_code`,
	DROP COLUMN `consignee_email`,
	DROP COLUMN `consignee_tel`,
	DROP COLUMN `consignee_address`,
	DROP COLUMN `total_count`,
	DROP COLUMN `post_mode`,
	DROP COLUMN `saler_country`,
	DROP COLUMN `addressor_name`,
	DROP COLUMN `create_time`,
	DROP COLUMN `logis_company_name`,
	DROP COLUMN `logis_company_code`,
	DROP COLUMN `goods_declar_check_id`,
	DROP COLUMN `tax_total`,
	DROP COLUMN `actural_paid`,
	DROP COLUMN `buyer_reg_no`,
	DROP COLUMN `buyer_name`,
	DROP COLUMN `buyer_id_type`,
	DROP COLUMN `buyer_id_number`,
	DROP COLUMN `batch_number`,
	DROP COLUMN `consignee_ditric`,
	DROP COLUMN `sender_city`,
	DROP COLUMN `buyer_id_tel`,
	DROP COLUMN `price_total_val`,
	DROP COLUMN `logistics_no`,
	DROP COLUMN `main_wb_no`,
	DROP COLUMN `insured_fee`;:Incorrect table definition; there can be only one auto column and it must be defined as a key @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-18 11:28:36	150570531559bf3d63eb7ba	INFO	ALTER IGNORE TABLE `sdb_feixiang_orders` DROP PRIMARY KEY, ADD primary key (`orderNo`)

2017-09-18 11:28:36	150570531559bf3d63eb7ba	ERR	ALTER IGNORE TABLE `sdb_feixiang_orders` DROP PRIMARY KEY, ADD primary key (`orderNo`):Key column 'orderNo' doesn't exist in table

2017-09-18 11:28:36	150570531559bf3d63eb7ba	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_orders` DROP PRIMARY KEY, ADD primary key (`orderNo`):Key column 'orderNo' doesn't exist in table @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-18 11:28:36	150570531559bf3d63eb7ba	INFO	ALTER IGNORE TABLE `sdb_feixiang_orders_item` 
	ADD COLUMN `gnum` varchar(4) comment '商品序号' AFTER order_item_id,
	ADD COLUMN `itemNo` varchar(30) comment '企业商品货号' AFTER gnum,
	ADD COLUMN `itemName` varchar(255) comment '企业商品名称' AFTER itemNo,
	ADD COLUMN `itemDescribe` varchar(255) comment '企业商品描述' AFTER itemName,
	ADD COLUMN `barCode` varchar(50) comment '条形码' AFTER itemDescribe,
	ADD COLUMN `unit` varchar(3) comment '单位' AFTER barCode,
	MODIFY COLUMN `qty` mediumint(8) unsigned comment '数量',
	MODIFY COLUMN `price` decimal(20,3) comment '单价',
	ADD COLUMN `totalPrice` decimal(20,3) comment '总价' AFTER price,
	ADD COLUMN `currency` varchar(3) comment '币制' AFTER totalPrice,
	ADD COLUMN `country` varchar(3) comment '原产国' AFTER currency,
	ADD COLUMN `note` varchar(255) comment '备注' AFTER country,
	DROP COLUMN `order_no`,
	DROP COLUMN `sku`,
	DROP COLUMN `qty2`,
	DROP COLUMN `item_price`,
	DROP COLUMN `consolidated_tax`,
	DROP COLUMN `total_Price`;

2017-09-18 11:28:36	150570531559bf3d63eb7ba	INFO	Updating base_application_cache_expires@feixiang.

2017-09-18 11:28:36	150570531559bf3d63eb7ba	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-18 11:28:36	150570531559bf3d63eb7ba	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-18 11:28:36	150570531559bf3d63eb7ba	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-18 11:28:36	150570531559bf3d63eb7ba	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-18 11:28:36	150570531559bf3d63eb7ba	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-18 11:28:36	150570531559bf3d63eb7ba	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-18 11:28:36	150570531559bf3d63eb7ba	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS_ITEM

2017-09-18 11:28:36	150570531559bf3d63eb7ba	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-18 11:28:36	150570531559bf3d63eb7ba	INFO	Applications database and services is up-to-date, ok.

2017-09-18 11:30:12	150570541259bf3dc423632	INFO	Scanning local Applications... 

2017-09-18 11:30:12	150570541259bf3dc423632	INFO	Scanning local Applications ok.

2017-09-18 11:30:12	150570541259bf3dc423632	INFO	Updating base_application_dbtable@feixiang.

2017-09-18 11:30:12	150570541259bf3dc423632	INFO	ALTER IGNORE TABLE `sdb_feixiang_orders` 
	ADD COLUMN `orderNo` varchar(18) comment '订单号' AFTER order_id,
	ADD COLUMN `ebpCode` varchar(18) comment '电商平台代码' AFTER orderNo,
	ADD COLUMN `ebpName` varchar(100) comment '电商平台名称' AFTER ebpCode,
	ADD COLUMN `ebcCode` varchar(18) comment '电商企业代码' AFTER ebpName,
	ADD COLUMN `ebcName` varchar(18) comment '电商企业名称' AFTER ebcCode,
	ADD COLUMN `goodsValue` decimal(20,3) comment '商品价格' AFTER ebcName,
	ADD COLUMN `taxTotal` decimal(20,3) comment '代扣税款' AFTER discount,
	ADD COLUMN `acturalPaid` decimal(20,3) comment '实际支付金额' AFTER taxTotal,
	ADD COLUMN `currency` varchar(3) comment '币制' AFTER acturalPaid,
	ADD COLUMN `buyerRegNo` varchar(60) comment '订购人注册号' AFTER currency,
	ADD COLUMN `buyerName` varchar(60) comment '订购人姓名' AFTER buyerRegNo,
	ADD COLUMN `buyerIdType` varchar(1) comment '订购人证件类型' AFTER buyerName,
	ADD COLUMN `buyerIdNumber` varchar(60) comment '订购人证件号码' AFTER buyerIdType,
	ADD COLUMN `payCode` varchar(18) comment '支付企业代码' AFTER buyerIdNumber,
	ADD COLUMN `payName` varchar(100) comment '支付企业名称' AFTER payCode,
	ADD COLUMN `payTransactionId` varchar(60) comment '支付交易编号' AFTER payName,
	ADD COLUMN `batchNumbers` varchar(100) comment '商品批次号' AFTER payTransactionId,
	MODIFY COLUMN `consignee` varchar(100) comment '收货人姓名',
	ADD COLUMN `consigneeTelephone` varchar(50) comment '收货人电话' AFTER consignee,
	ADD COLUMN `consigneeAddress` varchar(200) comment '收货地址' AFTER consigneeTelephone,
	ADD COLUMN `consigneeDitrict` varchar(6) comment '收货地址行政区划代码' AFTER consigneeAddress,
	ADD COLUMN `note` varchar(255) comment '备注' AFTER consigneeDitrict,
	DROP COLUMN `order_total_amount`,
	DROP COLUMN `i_e_flag`,
	DROP COLUMN `order_no`,
	DROP COLUMN `company_name`,
	DROP COLUMN `company_code`,
	DROP COLUMN `trade_time`,
	DROP COLUMN `curr_code`,
	DROP COLUMN `consignee_email`,
	DROP COLUMN `consignee_tel`,
	DROP COLUMN `consignee_address`,
	DROP COLUMN `total_count`,
	DROP COLUMN `post_mode`,
	DROP COLUMN `saler_country`,
	DROP COLUMN `addressor_name`,
	DROP COLUMN `create_time`,
	DROP COLUMN `logis_company_name`,
	DROP COLUMN `logis_company_code`,
	DROP COLUMN `goods_declar_check_id`,
	DROP COLUMN `tax_total`,
	DROP COLUMN `actural_paid`,
	DROP COLUMN `buyer_reg_no`,
	DROP COLUMN `buyer_name`,
	DROP COLUMN `buyer_id_type`,
	DROP COLUMN `buyer_id_number`,
	DROP COLUMN `batch_number`,
	DROP COLUMN `consignee_ditric`,
	DROP COLUMN `sender_city`,
	DROP COLUMN `buyer_id_tel`,
	DROP COLUMN `price_total_val`,
	DROP COLUMN `logistics_no`,
	DROP COLUMN `main_wb_no`,
	DROP COLUMN `insured_fee`;

2017-09-18 11:30:12	150570541259bf3dc423632	INFO	Updating base_application_cache_expires@feixiang.

2017-09-18 11:30:12	150570541259bf3dc423632	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-18 11:30:12	150570541259bf3dc423632	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-18 11:30:12	150570541259bf3dc423632	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-18 11:30:12	150570541259bf3dc423632	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-18 11:30:12	150570541259bf3dc423632	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-18 11:30:12	150570541259bf3dc423632	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-18 11:30:12	150570541259bf3dc423632	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS_ITEM

2017-09-18 11:30:12	150570541259bf3dc423632	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-18 11:30:12	150570541259bf3dc423632	INFO	Applications database and services is up-to-date, ok.

2017-09-18 11:32:47	150570556759bf3e5fb6f71	INFO	Scanning local Applications... 

2017-09-18 11:32:47	150570556759bf3e5fb6f71	INFO	Scanning local Applications ok.

2017-09-18 11:32:47	150570556759bf3e5fb6f71	INFO	Updating base_application_dbtable@feixiang.

2017-09-18 11:32:48	150570556759bf3e5fb6f71	INFO	Updating base_application_cache_expires@feixiang.

2017-09-18 11:32:48	150570556759bf3e5fb6f71	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-18 11:32:48	150570556759bf3e5fb6f71	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-18 11:32:48	150570556759bf3e5fb6f71	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-18 11:32:48	150570556759bf3e5fb6f71	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-18 11:32:48	150570556759bf3e5fb6f71	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-18 11:32:48	150570556759bf3e5fb6f71	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-18 11:32:48	150570556759bf3e5fb6f71	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS_ITEM

2017-09-18 11:32:48	150570556759bf3e5fb6f71	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-18 11:32:48	150570556759bf3e5fb6f71	INFO	Applications database and services is up-to-date, ok.

2017-09-18 14:42:46	150571696659bf6ae649250	INFO	Scanning local Applications... 

2017-09-18 14:42:46	150571696659bf6ae649250	INFO	Scanning local Applications ok.

2017-09-18 14:42:46	150571696659bf6ae649250	INFO	Updating desktop_application_menu@feixiang.

2017-09-18 14:42:46	150571696659bf6ae649250	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:42:46	150571696659bf6ae649250	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:42:46	150571696659bf6ae649250	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:42:46	150571696659bf6ae649250	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:42:46	150571696659bf6ae649250	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:42:46	150571696659bf6ae649250	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:42:46	150571696659bf6ae649250	INFO	Updating desktop_application_workground@feixiang.

2017-09-18 14:42:46	150571696659bf6ae649250	INFO	Installing workground feixiang

2017-09-18 14:42:46	150571696659bf6ae649250	INFO	Updating desktop_application_permission@feixiang.

2017-09-18 14:42:46	150571696659bf6ae649250	INFO	Installing permission orderManager

2017-09-18 14:42:46	150571696659bf6ae649250	INFO	Installing permission addManager

2017-09-18 14:42:46	150571696659bf6ae649250	INFO	Installing permission excelOrder

2017-09-18 14:42:46	150571696659bf6ae649250	INFO	Installing permission excelLogiNo

2017-09-18 14:42:46	150571696659bf6ae649250	INFO	Installing permission companyManager

2017-09-18 14:42:46	150571696659bf6ae649250	INFO	Installing permission companyItem

2017-09-18 14:42:46	150571696659bf6ae649250	INFO	Updating desktop_application_panelgroup@feixiang.

2017-09-18 14:42:46	150571696659bf6ae649250	INFO	Updating desktop_application_adminpanel@feixiang.

2017-09-18 14:42:46	150571696659bf6ae649250	INFO	Updating desktop_application_widgets@feixiang.

2017-09-18 14:42:46	150571696659bf6ae649250	INFO	Applications database and services is up-to-date, ok.

2017-09-18 14:48:59	150571733959bf6c5b997e9	INFO	Scanning local Applications... 

2017-09-18 14:48:59	150571733959bf6c5b997e9	INFO	Scanning local Applications ok.

2017-09-18 14:48:59	150571733959bf6c5b997e9	INFO	Updating desktop_application_menu@feixiang.

2017-09-18 14:48:59	150571733959bf6c5b997e9	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:48:59	150571733959bf6c5b997e9	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:48:59	150571733959bf6c5b997e9	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:48:59	150571733959bf6c5b997e9	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:48:59	150571733959bf6c5b997e9	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:48:59	150571733959bf6c5b997e9	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:48:59	150571733959bf6c5b997e9	INFO	Updating desktop_application_workground@feixiang.

2017-09-18 14:48:59	150571733959bf6c5b997e9	INFO	Installing workground feixiang

2017-09-18 14:48:59	150571733959bf6c5b997e9	INFO	Updating desktop_application_permission@feixiang.

2017-09-18 14:48:59	150571733959bf6c5b997e9	INFO	Installing permission orderManager

2017-09-18 14:48:59	150571733959bf6c5b997e9	INFO	Installing permission addManager

2017-09-18 14:48:59	150571733959bf6c5b997e9	INFO	Installing permission excelOrder

2017-09-18 14:48:59	150571733959bf6c5b997e9	INFO	Installing permission excelLogiNo

2017-09-18 14:48:59	150571733959bf6c5b997e9	INFO	Installing permission companyManager

2017-09-18 14:48:59	150571733959bf6c5b997e9	INFO	Installing permission companyItem

2017-09-18 14:48:59	150571733959bf6c5b997e9	INFO	Updating desktop_application_panelgroup@feixiang.

2017-09-18 14:48:59	150571733959bf6c5b997e9	INFO	Updating desktop_application_adminpanel@feixiang.

2017-09-18 14:48:59	150571733959bf6c5b997e9	INFO	Updating desktop_application_widgets@feixiang.

2017-09-18 14:49:00	150571733959bf6c5b997e9	INFO	Applications database and services is up-to-date, ok.

2017-09-18 14:58:56	150571793659bf6eb030872	INFO	Scanning local Applications... 

2017-09-18 14:58:56	150571793659bf6eb030872	INFO	Scanning local Applications ok.

2017-09-18 14:58:56	150571793659bf6eb030872	INFO	Updating desktop_application_menu@feixiang.

2017-09-18 14:58:56	150571793659bf6eb030872	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:58:56	150571793659bf6eb030872	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:58:56	150571793659bf6eb030872	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:58:56	150571793659bf6eb030872	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:58:56	150571793659bf6eb030872	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:58:56	150571793659bf6eb030872	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:58:56	150571793659bf6eb030872	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:58:56	150571793659bf6eb030872	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:58:56	150571793659bf6eb030872	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:58:56	150571793659bf6eb030872	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:58:56	150571793659bf6eb030872	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:58:56	150571793659bf6eb030872	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:58:56	150571793659bf6eb030872	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:58:56	150571793659bf6eb030872	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:58:56	150571793659bf6eb030872	INFO	Updating desktop_application_workground@feixiang.

2017-09-18 14:58:56	150571793659bf6eb030872	INFO	Installing workground feixiang

2017-09-18 14:58:56	150571793659bf6eb030872	INFO	Installing workground feixiang

2017-09-18 14:58:56	150571793659bf6eb030872	INFO	Installing workground feixiang

2017-09-18 14:58:56	150571793659bf6eb030872	INFO	Updating desktop_application_permission@feixiang.

2017-09-18 14:58:56	150571793659bf6eb030872	INFO	Installing permission orderManager

2017-09-18 14:58:56	150571793659bf6eb030872	INFO	Installing permission addManager

2017-09-18 14:58:56	150571793659bf6eb030872	INFO	Installing permission excelOrder

2017-09-18 14:58:56	150571793659bf6eb030872	INFO	Installing permission excelLogiNo

2017-09-18 14:58:56	150571793659bf6eb030872	INFO	Installing permission companyManager

2017-09-18 14:58:56	150571793659bf6eb030872	INFO	Installing permission companyItem

2017-09-18 14:58:56	150571793659bf6eb030872	INFO	Updating desktop_application_panelgroup@feixiang.

2017-09-18 14:58:56	150571793659bf6eb030872	INFO	Updating desktop_application_adminpanel@feixiang.

2017-09-18 14:58:56	150571793659bf6eb030872	INFO	Updating desktop_application_widgets@feixiang.

2017-09-18 14:58:56	150571793659bf6eb030872	INFO	Applications database and services is up-to-date, ok.

2017-09-18 14:59:46	150571798659bf6ee27dda6	INFO	Scanning local Applications... 

2017-09-18 14:59:46	150571798659bf6ee27dda6	INFO	Scanning local Applications ok.

2017-09-18 14:59:46	150571798659bf6ee27dda6	INFO	Updating desktop_application_menu@feixiang.

2017-09-18 14:59:46	150571798659bf6ee27dda6	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:59:46	150571798659bf6ee27dda6	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:59:46	150571798659bf6ee27dda6	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:59:46	150571798659bf6ee27dda6	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:59:46	150571798659bf6ee27dda6	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:59:46	150571798659bf6ee27dda6	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:59:46	150571798659bf6ee27dda6	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:59:46	150571798659bf6ee27dda6	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:59:46	150571798659bf6ee27dda6	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:59:46	150571798659bf6ee27dda6	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 14:59:46	150571798659bf6ee27dda6	INFO	Updating desktop_application_workground@feixiang.

2017-09-18 14:59:46	150571798659bf6ee27dda6	INFO	Installing workground fx_orders

2017-09-18 14:59:46	150571798659bf6ee27dda6	INFO	Installing workground fx_item

2017-09-18 14:59:46	150571798659bf6ee27dda6	INFO	Installing workground fx_ent

2017-09-18 14:59:46	150571798659bf6ee27dda6	INFO	Updating desktop_application_permission@feixiang.

2017-09-18 14:59:46	150571798659bf6ee27dda6	INFO	Installing permission orderManager

2017-09-18 14:59:46	150571798659bf6ee27dda6	INFO	Installing permission addManager

2017-09-18 14:59:46	150571798659bf6ee27dda6	INFO	Installing permission excelOrder

2017-09-18 14:59:46	150571798659bf6ee27dda6	INFO	Installing permission excelLogiNo

2017-09-18 14:59:46	150571798659bf6ee27dda6	INFO	Installing permission companyManager

2017-09-18 14:59:46	150571798659bf6ee27dda6	INFO	Installing permission companyItem

2017-09-18 14:59:46	150571798659bf6ee27dda6	INFO	Updating desktop_application_panelgroup@feixiang.

2017-09-18 14:59:46	150571798659bf6ee27dda6	INFO	Updating desktop_application_adminpanel@feixiang.

2017-09-18 14:59:46	150571798659bf6ee27dda6	INFO	Updating desktop_application_widgets@feixiang.

2017-09-18 14:59:46	150571798659bf6ee27dda6	INFO	Applications database and services is up-to-date, ok.

2017-09-18 15:00:31	150571803159bf6f0fc1958	INFO	Scanning local Applications... 

2017-09-18 15:00:31	150571803159bf6f0fc1958	INFO	Scanning local Applications ok.

2017-09-18 15:00:32	150571803159bf6f0fc1958	INFO	Updating desktop_application_menu@feixiang.

2017-09-18 15:00:32	150571803159bf6f0fc1958	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 15:00:32	150571803159bf6f0fc1958	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 15:00:32	150571803159bf6f0fc1958	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 15:00:32	150571803159bf6f0fc1958	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 15:00:32	150571803159bf6f0fc1958	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 15:00:32	150571803159bf6f0fc1958	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 15:00:32	150571803159bf6f0fc1958	INFO	Installing menu feixiang_ctl_admin_goods

2017-09-18 15:00:32	150571803159bf6f0fc1958	INFO	Installing menu feixiang_ctl_admin_goods

2017-09-18 15:00:32	150571803159bf6f0fc1958	INFO	Installing menu feixiang_ctl_admin_company

2017-09-18 15:00:32	150571803159bf6f0fc1958	INFO	Updating desktop_application_workground@feixiang.

2017-09-18 15:00:32	150571803159bf6f0fc1958	INFO	Installing workground fx_orders

2017-09-18 15:00:32	150571803159bf6f0fc1958	INFO	Installing workground fx_item

2017-09-18 15:00:32	150571803159bf6f0fc1958	INFO	Installing workground fx_ent

2017-09-18 15:00:32	150571803159bf6f0fc1958	INFO	Updating desktop_application_permission@feixiang.

2017-09-18 15:00:32	150571803159bf6f0fc1958	INFO	Installing permission orderManager

2017-09-18 15:00:32	150571803159bf6f0fc1958	INFO	Installing permission addManager

2017-09-18 15:00:32	150571803159bf6f0fc1958	INFO	Installing permission excelOrder

2017-09-18 15:00:32	150571803159bf6f0fc1958	INFO	Installing permission excelLogiNo

2017-09-18 15:00:32	150571803159bf6f0fc1958	INFO	Installing permission companyManager

2017-09-18 15:00:32	150571803159bf6f0fc1958	INFO	Installing permission companyItem

2017-09-18 15:00:32	150571803159bf6f0fc1958	INFO	Updating desktop_application_panelgroup@feixiang.

2017-09-18 15:00:32	150571803159bf6f0fc1958	INFO	Updating desktop_application_adminpanel@feixiang.

2017-09-18 15:00:32	150571803159bf6f0fc1958	INFO	Updating desktop_application_widgets@feixiang.

2017-09-18 15:00:32	150571803159bf6f0fc1958	INFO	Applications database and services is up-to-date, ok.

2017-09-18 15:01:26	150571808659bf6f465c8f2	INFO	Scanning local Applications... 

2017-09-18 15:01:26	150571808659bf6f465c8f2	INFO	Scanning local Applications ok.

2017-09-18 15:01:26	150571808659bf6f465c8f2	INFO	Updating desktop_application_menu@feixiang.

2017-09-18 15:01:26	150571808659bf6f465c8f2	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 15:01:26	150571808659bf6f465c8f2	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 15:01:26	150571808659bf6f465c8f2	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 15:01:26	150571808659bf6f465c8f2	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 15:01:26	150571808659bf6f465c8f2	INFO	Installing menu feixiang_ctl_admin_goods

2017-09-18 15:01:26	150571808659bf6f465c8f2	INFO	Installing menu feixiang_ctl_admin_goods

2017-09-18 15:01:26	150571808659bf6f465c8f2	INFO	Installing menu feixiang_ctl_admin_company

2017-09-18 15:01:26	150571808659bf6f465c8f2	INFO	Updating desktop_application_workground@feixiang.

2017-09-18 15:01:26	150571808659bf6f465c8f2	INFO	Installing workground fx_orders

2017-09-18 15:01:26	150571808659bf6f465c8f2	INFO	Installing workground fx_item

2017-09-18 15:01:26	150571808659bf6f465c8f2	INFO	Installing workground fx_ent

2017-09-18 15:01:26	150571808659bf6f465c8f2	INFO	Updating desktop_application_permission@feixiang.

2017-09-18 15:01:26	150571808659bf6f465c8f2	INFO	Installing permission orderManager

2017-09-18 15:01:26	150571808659bf6f465c8f2	INFO	Installing permission addManager

2017-09-18 15:01:26	150571808659bf6f465c8f2	INFO	Installing permission excelOrder

2017-09-18 15:01:26	150571808659bf6f465c8f2	INFO	Installing permission excelLogiNo

2017-09-18 15:01:26	150571808659bf6f465c8f2	INFO	Installing permission companyManager

2017-09-18 15:01:26	150571808659bf6f465c8f2	INFO	Installing permission companyItem

2017-09-18 15:01:26	150571808659bf6f465c8f2	INFO	Updating desktop_application_panelgroup@feixiang.

2017-09-18 15:01:26	150571808659bf6f465c8f2	INFO	Updating desktop_application_adminpanel@feixiang.

2017-09-18 15:01:26	150571808659bf6f465c8f2	INFO	Updating desktop_application_widgets@feixiang.

2017-09-18 15:01:26	150571808659bf6f465c8f2	INFO	Applications database and services is up-to-date, ok.

2017-09-18 15:04:33	150571827359bf7001e2003	INFO	Scanning local Applications... 

2017-09-18 15:04:33	150571827359bf7001e2003	INFO	Scanning local Applications ok.

2017-09-18 15:04:34	150571827359bf7001e2003	INFO	Updating desktop_application_menu@feixiang.

2017-09-18 15:04:34	150571827359bf7001e2003	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 15:04:34	150571827359bf7001e2003	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 15:04:34	150571827359bf7001e2003	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 15:04:34	150571827359bf7001e2003	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 15:04:34	150571827359bf7001e2003	INFO	Installing menu feixiang_ctl_admin_goods

2017-09-18 15:04:34	150571827359bf7001e2003	INFO	Installing menu feixiang_ctl_admin_goods

2017-09-18 15:04:34	150571827359bf7001e2003	INFO	Installing menu feixiang_ctl_admin_company

2017-09-18 15:04:34	150571827359bf7001e2003	INFO	Installing menu feixiang_ctl_admin_company

2017-09-18 15:04:34	150571827359bf7001e2003	INFO	Updating desktop_application_workground@feixiang.

2017-09-18 15:04:34	150571827359bf7001e2003	INFO	Installing workground fx_orders

2017-09-18 15:04:34	150571827359bf7001e2003	INFO	Installing workground fx_item

2017-09-18 15:04:34	150571827359bf7001e2003	INFO	Installing workground fx_ent

2017-09-18 15:04:34	150571827359bf7001e2003	INFO	Updating desktop_application_permission@feixiang.

2017-09-18 15:04:34	150571827359bf7001e2003	INFO	Installing permission orderManager

2017-09-18 15:04:34	150571827359bf7001e2003	INFO	Installing permission addManager

2017-09-18 15:04:34	150571827359bf7001e2003	INFO	Installing permission excelOrder

2017-09-18 15:04:34	150571827359bf7001e2003	INFO	Installing permission excelLogiNo

2017-09-18 15:04:34	150571827359bf7001e2003	INFO	Installing permission goodsList

2017-09-18 15:04:34	150571827359bf7001e2003	INFO	Installing permission addGoods

2017-09-18 15:04:34	150571827359bf7001e2003	INFO	Installing permission companyManager

2017-09-18 15:04:34	150571827359bf7001e2003	INFO	Installing permission addCompany

2017-09-18 15:04:34	150571827359bf7001e2003	INFO	Updating desktop_application_panelgroup@feixiang.

2017-09-18 15:04:34	150571827359bf7001e2003	INFO	Updating desktop_application_adminpanel@feixiang.

2017-09-18 15:04:34	150571827359bf7001e2003	INFO	Updating desktop_application_widgets@feixiang.

2017-09-18 15:04:34	150571827359bf7001e2003	INFO	Applications database and services is up-to-date, ok.

2017-09-18 15:09:52	150571859259bf71408e396	INFO	Scanning local Applications... 

2017-09-18 15:09:52	150571859259bf71408e396	INFO	Scanning local Applications ok.

2017-09-18 15:09:52	150571859259bf71408e396	INFO	Updating desktop_application_menu@feixiang.

2017-09-18 15:09:52	150571859259bf71408e396	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 15:09:52	150571859259bf71408e396	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 15:09:52	150571859259bf71408e396	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 15:09:52	150571859259bf71408e396	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 15:09:52	150571859259bf71408e396	INFO	Installing menu feixiang_ctl_admin_goods

2017-09-18 15:09:52	150571859259bf71408e396	INFO	Installing menu feixiang_ctl_admin_goods

2017-09-18 15:09:52	150571859259bf71408e396	INFO	Installing menu feixiang_ctl_admin_company

2017-09-18 15:09:52	150571859259bf71408e396	INFO	Installing menu feixiang_ctl_admin_company

2017-09-18 15:09:52	150571859259bf71408e396	INFO	Updating desktop_application_workground@feixiang.

2017-09-18 15:09:52	150571859259bf71408e396	INFO	Installing workground fx_orders

2017-09-18 15:09:52	150571859259bf71408e396	INFO	Installing workground fx_item

2017-09-18 15:09:52	150571859259bf71408e396	INFO	Installing workground fx_ent

2017-09-18 15:09:52	150571859259bf71408e396	INFO	Updating desktop_application_permission@feixiang.

2017-09-18 15:09:52	150571859259bf71408e396	INFO	Installing permission orderManager

2017-09-18 15:09:52	150571859259bf71408e396	INFO	Installing permission addManager

2017-09-18 15:09:52	150571859259bf71408e396	INFO	Installing permission excelOrder

2017-09-18 15:09:52	150571859259bf71408e396	INFO	Installing permission excelLogiNo

2017-09-18 15:09:52	150571859259bf71408e396	INFO	Installing permission goodsList

2017-09-18 15:09:52	150571859259bf71408e396	INFO	Installing permission addGoods

2017-09-18 15:09:52	150571859259bf71408e396	INFO	Installing permission companyManager

2017-09-18 15:09:52	150571859259bf71408e396	INFO	Installing permission addCompany

2017-09-18 15:09:52	150571859259bf71408e396	INFO	Updating desktop_application_panelgroup@feixiang.

2017-09-18 15:09:52	150571859259bf71408e396	INFO	Updating desktop_application_adminpanel@feixiang.

2017-09-18 15:09:52	150571859259bf71408e396	INFO	Updating desktop_application_widgets@feixiang.

2017-09-18 15:09:53	150571859259bf71408e396	INFO	Applications database and services is up-to-date, ok.

2017-09-18 15:15:59	150571895959bf72afeddaa	INFO	Scanning local Applications... 

2017-09-18 15:16:00	150571895959bf72afeddaa	INFO	Scanning local Applications ok.

2017-09-18 15:16:00	150571895959bf72afeddaa	INFO	Updating desktop_application_menu@feixiang.

2017-09-18 15:16:00	150571895959bf72afeddaa	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 15:16:00	150571895959bf72afeddaa	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 15:16:00	150571895959bf72afeddaa	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 15:16:00	150571895959bf72afeddaa	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 15:16:00	150571895959bf72afeddaa	INFO	Installing menu feixiang_ctl_admin_goods

2017-09-18 15:16:00	150571895959bf72afeddaa	INFO	Installing menu feixiang_ctl_admin_goods

2017-09-18 15:16:00	150571895959bf72afeddaa	INFO	Installing menu feixiang_ctl_admin_company

2017-09-18 15:16:00	150571895959bf72afeddaa	INFO	Installing menu feixiang_ctl_admin_company

2017-09-18 15:16:00	150571895959bf72afeddaa	INFO	Updating desktop_application_workground@feixiang.

2017-09-18 15:16:00	150571895959bf72afeddaa	INFO	Installing workground fx_orders

2017-09-18 15:16:00	150571895959bf72afeddaa	INFO	Installing workground fx_item

2017-09-18 15:16:00	150571895959bf72afeddaa	INFO	Installing workground fx_ent

2017-09-18 15:16:00	150571895959bf72afeddaa	INFO	Updating desktop_application_permission@feixiang.

2017-09-18 15:16:00	150571895959bf72afeddaa	INFO	Installing permission orderManager

2017-09-18 15:16:00	150571895959bf72afeddaa	INFO	Installing permission addManager

2017-09-18 15:16:00	150571895959bf72afeddaa	INFO	Installing permission excelOrder

2017-09-18 15:16:00	150571895959bf72afeddaa	INFO	Installing permission excelLogiNo

2017-09-18 15:16:00	150571895959bf72afeddaa	INFO	Installing permission goodsList

2017-09-18 15:16:00	150571895959bf72afeddaa	INFO	Installing permission addGoods

2017-09-18 15:16:00	150571895959bf72afeddaa	INFO	Installing permission companyManager

2017-09-18 15:16:00	150571895959bf72afeddaa	INFO	Installing permission addCompany

2017-09-18 15:16:00	150571895959bf72afeddaa	INFO	Updating desktop_application_panelgroup@feixiang.

2017-09-18 15:16:00	150571895959bf72afeddaa	INFO	Updating desktop_application_adminpanel@feixiang.

2017-09-18 15:16:00	150571895959bf72afeddaa	INFO	Updating desktop_application_widgets@feixiang.

2017-09-18 15:16:00	150571895959bf72afeddaa	INFO	Applications database and services is up-to-date, ok.

2017-09-18 15:16:44	150571900459bf72dc9b47e	INFO	Scanning local Applications... 

2017-09-18 15:16:44	150571900459bf72dc9b47e	INFO	Scanning local Applications ok.

2017-09-18 15:16:44	150571900459bf72dc9b47e	INFO	Updating desktop_application_menu@feixiang.

2017-09-18 15:16:44	150571900459bf72dc9b47e	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 15:16:44	150571900459bf72dc9b47e	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 15:16:44	150571900459bf72dc9b47e	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 15:16:44	150571900459bf72dc9b47e	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 15:16:44	150571900459bf72dc9b47e	INFO	Installing menu feixiang_ctl_admin_goods

2017-09-18 15:16:44	150571900459bf72dc9b47e	INFO	Installing menu feixiang_ctl_admin_goods

2017-09-18 15:16:44	150571900459bf72dc9b47e	INFO	Installing menu feixiang_ctl_admin_company

2017-09-18 15:16:44	150571900459bf72dc9b47e	INFO	Installing menu feixiang_ctl_admin_company

2017-09-18 15:16:44	150571900459bf72dc9b47e	INFO	Updating desktop_application_workground@feixiang.

2017-09-18 15:16:44	150571900459bf72dc9b47e	INFO	Installing workground fx_orders

2017-09-18 15:16:44	150571900459bf72dc9b47e	INFO	Installing workground fx_item

2017-09-18 15:16:44	150571900459bf72dc9b47e	INFO	Installing workground fx_ent

2017-09-18 15:16:44	150571900459bf72dc9b47e	INFO	Updating desktop_application_permission@feixiang.

2017-09-18 15:16:44	150571900459bf72dc9b47e	INFO	Installing permission orderManager

2017-09-18 15:16:44	150571900459bf72dc9b47e	INFO	Installing permission addManager

2017-09-18 15:16:44	150571900459bf72dc9b47e	INFO	Installing permission excelOrder

2017-09-18 15:16:44	150571900459bf72dc9b47e	INFO	Installing permission excelLogiNo

2017-09-18 15:16:44	150571900459bf72dc9b47e	INFO	Installing permission goodsList

2017-09-18 15:16:44	150571900459bf72dc9b47e	INFO	Installing permission addGoods

2017-09-18 15:16:44	150571900459bf72dc9b47e	INFO	Installing permission companyManager

2017-09-18 15:16:44	150571900459bf72dc9b47e	INFO	Installing permission addCompany

2017-09-18 15:16:44	150571900459bf72dc9b47e	INFO	Updating desktop_application_panelgroup@feixiang.

2017-09-18 15:16:44	150571900459bf72dc9b47e	INFO	Updating desktop_application_adminpanel@feixiang.

2017-09-18 15:16:44	150571900459bf72dc9b47e	INFO	Updating desktop_application_widgets@feixiang.

2017-09-18 15:16:44	150571900459bf72dc9b47e	INFO	Applications database and services is up-to-date, ok.

2017-09-18 18:03:35	150572901559bf99f7a6583	INFO	Scanning local Applications... 

2017-09-18 18:03:35	150572901559bf99f7a6583	INFO	Scanning local Applications ok.

2017-09-18 18:03:35	150572901559bf99f7a6583	INFO	Updating base_application_dbtable@feixiang.

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	ALTER IGNORE TABLE `sdb_feixiang_orders` 
	ADD COLUMN `copName` varchar(18) comment '物流企业名称' AFTER ebcName,
	ADD COLUMN `copCode` varchar(18) comment '物流企业代码' AFTER copName;

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	Updating base_application_cache_expires@feixiang.

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS_ITEM

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	Updating desktop_application_menu@feixiang.

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	Installing menu feixiang_ctl_admin_order

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	Installing menu feixiang_ctl_admin_goods

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	Installing menu feixiang_ctl_admin_goods

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	Installing menu feixiang_ctl_admin_company

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	Installing menu feixiang_ctl_admin_company

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	Updating desktop_application_workground@feixiang.

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	Installing workground fx_orders

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	Installing workground fx_item

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	Installing workground fx_ent

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	Updating desktop_application_permission@feixiang.

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	Installing permission orderManager

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	Installing permission addManager

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	Installing permission excelOrder

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	Installing permission excelLogiNo

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	Installing permission goodsList

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	Installing permission addGoods

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	Installing permission companyManager

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	Installing permission addCompany

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	Updating desktop_application_panelgroup@feixiang.

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	Updating desktop_application_adminpanel@feixiang.

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	Updating desktop_application_widgets@feixiang.

2017-09-18 18:03:36	150572901559bf99f7a6583	INFO	Applications database and services is up-to-date, ok.

2017-09-18 18:19:53	150572999359bf9dc99a0d6	INFO	Scanning local Applications... 

2017-09-18 18:19:53	150572999359bf9dc99a0d6	INFO	Scanning local Applications ok.

2017-09-18 18:19:53	150572999359bf9dc99a0d6	INFO	Updating base_application_dbtable@feixiang.

2017-09-18 18:19:54	150572999359bf9dc99a0d6	INFO	ALTER IGNORE TABLE `sdb_feixiang_orders` 
	MODIFY COLUMN `ebcName` varchar(100) comment '电商企业名称',
	MODIFY COLUMN `copName` varchar(100) comment '物流企业名称',
	ADD COLUMN `dxpMode` varchar(18) comment '报文传输模式' AFTER copCode,
	ADD COLUMN `dxpId` varchar(18) comment '报文传输编号' AFTER dxpMode;

2017-09-18 18:19:54	150572999359bf9dc99a0d6	INFO	Updating base_application_cache_expires@feixiang.

2017-09-18 18:19:54	150572999359bf9dc99a0d6	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-18 18:19:54	150572999359bf9dc99a0d6	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-18 18:19:54	150572999359bf9dc99a0d6	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-18 18:19:54	150572999359bf9dc99a0d6	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-18 18:19:54	150572999359bf9dc99a0d6	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-18 18:19:54	150572999359bf9dc99a0d6	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-18 18:19:54	150572999359bf9dc99a0d6	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS_ITEM

2017-09-18 18:19:54	150572999359bf9dc99a0d6	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-18 18:19:54	150572999359bf9dc99a0d6	INFO	Applications database and services is up-to-date, ok.

2017-09-18 18:36:45	150573100559bfa1bd97706	INFO	Scanning local Applications... 

2017-09-18 18:36:45	150573100559bfa1bd97706	INFO	Scanning local Applications ok.

2017-09-18 18:36:45	150573100559bfa1bd97706	INFO	Updating base_application_dbtable@feixiang.

2017-09-18 18:36:46	150573100559bfa1bd97706	INFO	ALTER IGNORE TABLE `sdb_feixiang_orders_item` 
	ADD COLUMN `orderNo` varchar(18) comment '订单号' AFTER order_item_id;

2017-09-18 18:36:46	150573100559bfa1bd97706	INFO	Updating base_application_cache_expires@feixiang.

2017-09-18 18:36:46	150573100559bfa1bd97706	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-18 18:36:46	150573100559bfa1bd97706	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-18 18:36:46	150573100559bfa1bd97706	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-18 18:36:46	150573100559bfa1bd97706	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-18 18:36:46	150573100559bfa1bd97706	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-18 18:36:46	150573100559bfa1bd97706	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-18 18:36:46	150573100559bfa1bd97706	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS_ITEM

2017-09-18 18:36:46	150573100559bfa1bd97706	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-18 18:36:46	150573100559bfa1bd97706	INFO	Applications database and services is up-to-date, ok.

2017-09-18 18:40:11	150573121159bfa28bc3e64	INFO	Scanning local Applications... 

2017-09-18 18:40:11	150573121159bfa28bc3e64	INFO	Scanning local Applications ok.

2017-09-18 18:40:12	150573121159bfa28bc3e64	INFO	Applications database and services is up-to-date, ok.

2017-09-18 19:40:10	150573481059bfb09a97dde	INFO	Scanning local Applications... 

2017-09-18 19:40:10	150573481059bfb09a97dde	INFO	Scanning local Applications ok.

2017-09-18 19:40:10	150573481059bfb09a97dde	INFO	Updating base_application_dbtable@feixiang.

2017-09-18 19:40:11	150573481059bfb09a97dde	INFO	ALTER IGNORE TABLE `sdb_feixiang_orders` 
	ADD COLUMN `logisticsNo` varchar(50) comment '运单号' AFTER consigneeDitrict,
	ADD COLUMN `billNo` varchar(50) comment '提运单号' AFTER logisticsNo;

2017-09-18 19:40:11	150573481059bfb09a97dde	INFO	Updating base_application_cache_expires@feixiang.

2017-09-18 19:40:11	150573481059bfb09a97dde	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-18 19:40:11	150573481059bfb09a97dde	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-18 19:40:11	150573481059bfb09a97dde	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-18 19:40:11	150573481059bfb09a97dde	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-18 19:40:11	150573481059bfb09a97dde	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-18 19:40:11	150573481059bfb09a97dde	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-18 19:40:11	150573481059bfb09a97dde	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS_ITEM

2017-09-18 19:40:11	150573481059bfb09a97dde	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-18 19:40:11	150573481059bfb09a97dde	INFO	Applications database and services is up-to-date, ok.

