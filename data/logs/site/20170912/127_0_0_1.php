<?php exit()?>
2017-09-12 08:50:03	150517740259b72f3af2fd2	INFO	Scanning local Applications... 

2017-09-12 08:50:03	150517740259b72f3af2fd2	INFO	Scanning local Applications ok.

2017-09-12 08:50:03	150517740259b72f3af2fd2	INFO	Applications database and services is up-to-date, ok.

2017-09-12 08:50:16	150517741559b72f47f3107	INFO	Creating table sdb_feixiang_company

2017-09-12 08:50:16	150517741559b72f47f3107	ERR	CREATE TABLE `sdb_feixiang_company` (
	
)ENGINE = InnoDB DEFAULT CHARACTER SET utf8;:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')ENGINE = InnoDB DEFAULT CHARACTER SET utf8' at line 3

2017-09-12 08:50:16	150517741559b72f47f3107	WARNING	WARNING:512 @ CREATE TABLE `sdb_feixiang_company` (
	
)ENGINE = InnoDB DEFAULT CHARACTER SET utf8;:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')ENGINE = InnoDB DEFAULT CHARACTER SET utf8' at line 3 @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 08:50:16	150517741559b72f47f3107	INFO	Creating table sdb_feixiang_goods

2017-09-12 08:50:16	150517741559b72f47f3107	INFO	Installing Cache_Expires DB:FEIXIANG_ECOMPANY

2017-09-12 08:50:16	150517741559b72f47f3107	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 08:50:16	150517741559b72f47f3107	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-12 08:50:16	150517741559b72f47f3107	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 08:50:16	150517741559b72f47f3107	INFO	Application feixiang installed... ok.

2017-09-12 08:50:46	150517744659b72f664c63b	INFO	Scanning local Applications... 

2017-09-12 08:50:46	150517744659b72f664c63b	INFO	Scanning local Applications ok.

2017-09-12 08:50:46	150517744659b72f664c63b	INFO	Updating base_application_dbtable@feixiang.

2017-09-12 08:50:46	150517744659b72f664c63b	INFO	CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default '' comment '备案主体',
	`business_subject` enum('1','10','11') not null default '' comment '进出口类型',
	`record_area` varchar(40) default '' comment '备案地区',
	`regist_oversea` enum('0','1') not null default '' comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;

2017-09-12 08:50:46	150517744659b72f664c63b	ERR	CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default '' comment '备案主体',
	`business_subject` enum('1','10','11') not null default '' comment '进出口类型',
	`record_area` varchar(40) default '' comment '备案地区',
	`regist_oversea` enum('0','1') not null default '' comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;:Invalid default value for 'company_subject'

2017-09-12 08:50:46	150517744659b72f664c63b	WARNING	WARNING:512 @ CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default '' comment '备案主体',
	`business_subject` enum('1','10','11') not null default '' comment '进出口类型',
	`record_area` varchar(40) default '' comment '备案地区',
	`regist_oversea` enum('0','1') not null default '' comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;:Invalid default value for 'company_subject' @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 08:50:46	150517744659b72f664c63b	INFO	Updating base_application_cache_expires@feixiang.

2017-09-12 08:50:46	150517744659b72f664c63b	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-12 08:50:46	150517744659b72f664c63b	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 08:50:46	150517744659b72f664c63b	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-12 08:50:46	150517744659b72f664c63b	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 08:50:46	150517744659b72f664c63b	INFO	Applications database and services is up-to-date, ok.

2017-09-12 08:52:15	150517753559b72fbfc01e6	INFO	Scanning local Applications... 

2017-09-12 08:52:15	150517753559b72fbfc01e6	INFO	Scanning local Applications ok.

2017-09-12 08:52:15	150517753559b72fbfc01e6	INFO	Updating base_application_dbtable@feixiang.

2017-09-12 08:52:15	150517753559b72fbfc01e6	INFO	CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default '' comment '备案主体',
	`business_subject` enum('1','10','11') not null default '' comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default '' comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;

2017-09-12 08:52:15	150517753559b72fbfc01e6	ERR	CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default '' comment '备案主体',
	`business_subject` enum('1','10','11') not null default '' comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default '' comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;:Invalid default value for 'company_subject'

2017-09-12 08:52:15	150517753559b72fbfc01e6	WARNING	WARNING:512 @ CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default '' comment '备案主体',
	`business_subject` enum('1','10','11') not null default '' comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default '' comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;:Invalid default value for 'company_subject' @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 08:52:15	150517753559b72fbfc01e6	INFO	Updating base_application_cache_expires@feixiang.

2017-09-12 08:52:15	150517753559b72fbfc01e6	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-12 08:52:15	150517753559b72fbfc01e6	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 08:52:15	150517753559b72fbfc01e6	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-12 08:52:15	150517753559b72fbfc01e6	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 08:52:16	150517753559b72fbfc01e6	INFO	Applications database and services is up-to-date, ok.

2017-09-12 10:23:24	150518300459b7451c5b8f2	INFO	Scanning local Applications... 

2017-09-12 10:23:24	150518300459b7451c5b8f2	INFO	Scanning local Applications ok.

2017-09-12 10:23:24	150518300459b7451c5b8f2	INFO	Updating desktop_application_menu@feixiang.

2017-09-12 10:23:24	150518300459b7451c5b8f2	INFO	Installing menu feixiang_ctl_admin_order

2017-09-12 10:23:24	150518300459b7451c5b8f2	INFO	Updating desktop_application_workground@feixiang.

2017-09-12 10:23:24	150518300459b7451c5b8f2	INFO	Installing workground feixiang

2017-09-12 10:23:24	150518300459b7451c5b8f2	INFO	Updating desktop_application_permission@feixiang.

2017-09-12 10:23:24	150518300459b7451c5b8f2	INFO	Installing permission orderManager

2017-09-12 10:23:24	150518300459b7451c5b8f2	INFO	Updating desktop_application_panelgroup@feixiang.

2017-09-12 10:23:24	150518300459b7451c5b8f2	INFO	Updating desktop_application_adminpanel@feixiang.

2017-09-12 10:23:24	150518300459b7451c5b8f2	INFO	Updating desktop_application_widgets@feixiang.

2017-09-12 10:23:24	150518300459b7451c5b8f2	INFO	Applications database and services is up-to-date, ok.

2017-09-12 10:28:42	150518332259b7465a9d868	INFO	Scanning local Applications... 

2017-09-12 10:28:42	150518332259b7465a9d868	INFO	Scanning local Applications ok.

2017-09-12 10:28:42	150518332259b7465a9d868	INFO	Updating base_application_dbtable@feixiang.

2017-09-12 10:28:42	150518332259b7465a9d868	INFO	CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default '' comment '备案主体',
	`business_subject` enum('1','10','11') not null default '' comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default '' comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;

2017-09-12 10:28:42	150518332259b7465a9d868	ERR	CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default '' comment '备案主体',
	`business_subject` enum('1','10','11') not null default '' comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default '' comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;:Invalid default value for 'company_subject'

2017-09-12 10:28:42	150518332259b7465a9d868	WARNING	WARNING:512 @ CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default '' comment '备案主体',
	`business_subject` enum('1','10','11') not null default '' comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default '' comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;:Invalid default value for 'company_subject' @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:28:42	150518332259b7465a9d868	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;

2017-09-12 10:28:42	150518332259b7465a9d868	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;:Incorrect table definition; there can be only one auto column and it must be defined as a key

2017-09-12 10:28:42	150518332259b7465a9d868	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;:Incorrect table definition; there can be only one auto column and it must be defined as a key @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:28:42	150518332259b7465a9d868	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`)

2017-09-12 10:28:42	150518332259b7465a9d868	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table

2017-09-12 10:28:42	150518332259b7465a9d868	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:28:42	150518332259b7465a9d868	INFO	CREATE TABLE `sdb_feixiang_orders` (
	`order_id` mediumint(8) unsigned not null auto_increment comment 'ID',
	`order_total_amount` decimal(20,3) comment '订单总金额',
	`i_e_flag` varchar(1) comment '进出口标志',
	`order_no` varchar(60) comment '订单号',
	`company_name` varchar(200) comment '电商平台名称',
	`company_code` varchar(20) comment '电商平台编码',
	`trade_time` int(10) unsigned comment '成交时间',
	`curr_code` varchar(3) comment '成交币式',
	`consignee_email` varchar(60) comment '收件人email地址',
	`consignee_tel` varchar(60) comment '收件人联系方式',
	`consignee` varchar(120) comment '收件人姓名',
	`consignee_address` varchar(255) comment '收件人地址',
	`total_count` mediumint(8) unsigned comment '总件数',
	`post_mode` varchar(20) comment '发货方式',
	`saler_country` varchar(5) comment '发件人国家',
	`addressor_name` varchar(50) comment '发件人姓名',
	`create_time` int(10) unsigned comment '创建日期',
	`logis_company_name` varchar(400) comment '物流企业名称',
	`logis_company_code` varchar(10) comment '物流企业编号',
	`goods_declar_check_id` varchar(32) comment '包裹物理主键id',
	`discount` decimal(20,3) comment '优惠减免金额',
	`tax_total` decimal(20,3) comment '订单商品税款',
	`actural_paid` decimal(20,3) comment '实际支付金额',
	`buyer_reg_no` varchar(60) comment '订购人注册号',
	`buyer_name` varchar(60) comment '订购人姓名',
	`buyer_id_type` varchar(1) comment '订购人证件类型',
	`buyer_id_number` varchar(60) comment '订购人证件号码',
	`batch_number` varchar(100) comment '商品批次号',
	`consignee_ditric` varchar(6) comment '收货人行政区划代码',
	`sender_city` varchar(40) comment '发件人城市',
	`buyer_id_tel` varchar(30) comment '订购人电话',
	`price_total_val` decimal(20,3) comment '订单商品货款',
	`freight` decimal(20,3) comment '订单商品运费',
	`logistics_no` varchar(60) comment '物流运单号',
	`main_wb_no` varchar(37) comment '总运单号',
	`insured_fee` decimal(20,3) comment '保价金额',
	`last_modify` int(10) unsigned comment '最后修改时间',
	primary key (`order_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;

2017-09-12 10:28:42	150518332259b7465a9d868	INFO	Updating base_application_cache_expires@feixiang.

2017-09-12 10:28:43	150518332259b7465a9d868	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-12 10:28:43	150518332259b7465a9d868	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:28:43	150518332259b7465a9d868	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-12 10:28:43	150518332259b7465a9d868	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:28:43	150518332259b7465a9d868	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-12 10:28:43	150518332259b7465a9d868	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:28:43	150518332259b7465a9d868	INFO	Updating desktop_application_menu@feixiang.

2017-09-12 10:28:43	150518332259b7465a9d868	INFO	Installing menu feixiang_ctl_admin_order

2017-09-12 10:28:43	150518332259b7465a9d868	INFO	Installing menu feixiang_ctl_admin_order

2017-09-12 10:28:43	150518332259b7465a9d868	INFO	Updating desktop_application_workground@feixiang.

2017-09-12 10:28:43	150518332259b7465a9d868	INFO	Installing workground feixiang

2017-09-12 10:28:43	150518332259b7465a9d868	INFO	Updating desktop_application_permission@feixiang.

2017-09-12 10:28:43	150518332259b7465a9d868	INFO	Installing permission orderManager

2017-09-12 10:28:43	150518332259b7465a9d868	INFO	Updating desktop_application_panelgroup@feixiang.

2017-09-12 10:28:43	150518332259b7465a9d868	INFO	Updating desktop_application_adminpanel@feixiang.

2017-09-12 10:28:43	150518332259b7465a9d868	INFO	Updating desktop_application_widgets@feixiang.

2017-09-12 10:28:43	150518332259b7465a9d868	INFO	Applications database and services is up-to-date, ok.

2017-09-12 10:29:42	150518338259b746963a811	INFO	Scanning local Applications... 

2017-09-12 10:29:42	150518338259b746963a811	INFO	Scanning local Applications ok.

2017-09-12 10:29:42	150518338259b746963a811	INFO	Applications database and services is up-to-date, ok.

2017-09-12 10:33:42	150518362259b74786327ba	INFO	Scanning local Applications... 

2017-09-12 10:33:42	150518362259b74786327ba	INFO	Scanning local Applications ok.

2017-09-12 10:33:42	150518362259b74786327ba	INFO	Updating desktop_application_menu@feixiang.

2017-09-12 10:33:42	150518362259b74786327ba	INFO	Installing menu feixiang_ctl_admin_order

2017-09-12 10:33:42	150518362259b74786327ba	INFO	Installing menu feixiang_ctl_admin_order

2017-09-12 10:33:42	150518362259b74786327ba	INFO	Updating desktop_application_workground@feixiang.

2017-09-12 10:33:42	150518362259b74786327ba	INFO	Installing workground feixiang

2017-09-12 10:33:42	150518362259b74786327ba	INFO	Updating desktop_application_permission@feixiang.

2017-09-12 10:33:42	150518362259b74786327ba	INFO	Installing permission orderManager

2017-09-12 10:33:42	150518362259b74786327ba	INFO	Installing permission companyManager

2017-09-12 10:33:42	150518362259b74786327ba	INFO	Updating desktop_application_panelgroup@feixiang.

2017-09-12 10:33:42	150518362259b74786327ba	INFO	Updating desktop_application_adminpanel@feixiang.

2017-09-12 10:33:42	150518362259b74786327ba	INFO	Updating desktop_application_widgets@feixiang.

2017-09-12 10:33:42	150518362259b74786327ba	INFO	Applications database and services is up-to-date, ok.

2017-09-12 10:34:23	150518366359b747af5edfb	INFO	Scanning local Applications... 

2017-09-12 10:34:23	150518366359b747af5edfb	INFO	Scanning local Applications ok.

2017-09-12 10:34:23	150518366359b747af5edfb	INFO	Updating desktop_application_menu@feixiang.

2017-09-12 10:34:23	150518366359b747af5edfb	INFO	Installing menu feixiang_ctl_admin_order

2017-09-12 10:34:23	150518366359b747af5edfb	INFO	Installing menu feixiang_ctl_admin_order

2017-09-12 10:34:23	150518366359b747af5edfb	INFO	Updating desktop_application_workground@feixiang.

2017-09-12 10:34:23	150518366359b747af5edfb	INFO	Installing workground feixiang

2017-09-12 10:34:23	150518366359b747af5edfb	INFO	Updating desktop_application_permission@feixiang.

2017-09-12 10:34:23	150518366359b747af5edfb	INFO	Installing permission orderManager

2017-09-12 10:34:23	150518366359b747af5edfb	INFO	Installing permission companyManager

2017-09-12 10:34:23	150518366359b747af5edfb	INFO	Updating desktop_application_panelgroup@feixiang.

2017-09-12 10:34:23	150518366359b747af5edfb	INFO	Updating desktop_application_adminpanel@feixiang.

2017-09-12 10:34:23	150518366359b747af5edfb	INFO	Updating desktop_application_widgets@feixiang.

2017-09-12 10:34:23	150518366359b747af5edfb	INFO	Applications database and services is up-to-date, ok.

2017-09-12 10:36:47	150518380759b7483f0fef9	INFO	Scanning local Applications... 

2017-09-12 10:36:47	150518380759b7483f0fef9	INFO	Scanning local Applications ok.

2017-09-12 10:36:47	150518380759b7483f0fef9	INFO	Updating base_application_dbtable@feixiang.

2017-09-12 10:36:47	150518380759b7483f0fef9	INFO	CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default '' comment '备案主体',
	`business_subject` enum('1','10','11') not null default '' comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default '' comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(50) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;

2017-09-12 10:36:47	150518380759b7483f0fef9	ERR	CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default '' comment '备案主体',
	`business_subject` enum('1','10','11') not null default '' comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default '' comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(50) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;:Invalid default value for 'company_subject'

2017-09-12 10:36:47	150518380759b7483f0fef9	WARNING	WARNING:512 @ CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default '' comment '备案主体',
	`business_subject` enum('1','10','11') not null default '' comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default '' comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(50) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;:Invalid default value for 'company_subject' @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:36:47	150518380759b7483f0fef9	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;

2017-09-12 10:36:47	150518380759b7483f0fef9	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;:Incorrect table definition; there can be only one auto column and it must be defined as a key

2017-09-12 10:36:47	150518380759b7483f0fef9	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;:Incorrect table definition; there can be only one auto column and it must be defined as a key @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:36:47	150518380759b7483f0fef9	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`)

2017-09-12 10:36:47	150518380759b7483f0fef9	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table

2017-09-12 10:36:47	150518380759b7483f0fef9	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:36:47	150518380759b7483f0fef9	INFO	Updating base_application_cache_expires@feixiang.

2017-09-12 10:36:47	150518380759b7483f0fef9	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-12 10:36:47	150518380759b7483f0fef9	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:36:47	150518380759b7483f0fef9	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-12 10:36:47	150518380759b7483f0fef9	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:36:47	150518380759b7483f0fef9	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-12 10:36:47	150518380759b7483f0fef9	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:36:47	150518380759b7483f0fef9	INFO	Applications database and services is up-to-date, ok.

2017-09-12 10:38:22	150518390259b7489e96906	INFO	Scanning local Applications... 

2017-09-12 10:38:22	150518390259b7489e96906	INFO	Scanning local Applications ok.

2017-09-12 10:38:22	150518390259b7489e96906	INFO	Updating base_application_dbtable@feixiang.

2017-09-12 10:38:22	150518390259b7489e96906	INFO	CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default '0' comment '备案主体',
	`business_subject` enum('1','10','11') not null default '01' comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default '0' comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(50) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;

2017-09-12 10:38:22	150518390259b7489e96906	ERR	CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default '0' comment '备案主体',
	`business_subject` enum('1','10','11') not null default '01' comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default '0' comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(50) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;:Invalid default value for 'business_subject'

2017-09-12 10:38:22	150518390259b7489e96906	WARNING	WARNING:512 @ CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default '0' comment '备案主体',
	`business_subject` enum('1','10','11') not null default '01' comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default '0' comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(50) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;:Invalid default value for 'business_subject' @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:38:22	150518390259b7489e96906	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;

2017-09-12 10:38:22	150518390259b7489e96906	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;:Incorrect table definition; there can be only one auto column and it must be defined as a key

2017-09-12 10:38:22	150518390259b7489e96906	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;:Incorrect table definition; there can be only one auto column and it must be defined as a key @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:38:22	150518390259b7489e96906	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`)

2017-09-12 10:38:22	150518390259b7489e96906	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table

2017-09-12 10:38:22	150518390259b7489e96906	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:38:22	150518390259b7489e96906	INFO	Updating base_application_cache_expires@feixiang.

2017-09-12 10:38:22	150518390259b7489e96906	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-12 10:38:22	150518390259b7489e96906	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:38:22	150518390259b7489e96906	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-12 10:38:22	150518390259b7489e96906	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:38:22	150518390259b7489e96906	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-12 10:38:22	150518390259b7489e96906	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:38:23	150518390259b7489e96906	INFO	Applications database and services is up-to-date, ok.

2017-09-12 10:39:07	150518394759b748cb84c96	INFO	Scanning local Applications... 

2017-09-12 10:39:07	150518394759b748cb84c96	INFO	Scanning local Applications ok.

2017-09-12 10:39:07	150518394759b748cb84c96	INFO	Updating base_application_dbtable@feixiang.

2017-09-12 10:39:07	150518394759b748cb84c96	INFO	CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default '0' comment '备案主体',
	`business_subject` enum('1','10','11') not null default '01' comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default '0' comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;

2017-09-12 10:39:07	150518394759b748cb84c96	ERR	CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default '0' comment '备案主体',
	`business_subject` enum('1','10','11') not null default '01' comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default '0' comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;:Invalid default value for 'business_subject'

2017-09-12 10:39:07	150518394759b748cb84c96	WARNING	WARNING:512 @ CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default '0' comment '备案主体',
	`business_subject` enum('1','10','11') not null default '01' comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default '0' comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;:Invalid default value for 'business_subject' @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:39:07	150518394759b748cb84c96	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;

2017-09-12 10:39:07	150518394759b748cb84c96	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;:Incorrect table definition; there can be only one auto column and it must be defined as a key

2017-09-12 10:39:07	150518394759b748cb84c96	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;:Incorrect table definition; there can be only one auto column and it must be defined as a key @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:39:07	150518394759b748cb84c96	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`)

2017-09-12 10:39:07	150518394759b748cb84c96	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table

2017-09-12 10:39:07	150518394759b748cb84c96	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:39:07	150518394759b748cb84c96	INFO	Updating base_application_cache_expires@feixiang.

2017-09-12 10:39:07	150518394759b748cb84c96	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-12 10:39:07	150518394759b748cb84c96	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:39:07	150518394759b748cb84c96	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-12 10:39:07	150518394759b748cb84c96	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:39:07	150518394759b748cb84c96	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-12 10:39:07	150518394759b748cb84c96	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:39:07	150518394759b748cb84c96	INFO	Applications database and services is up-to-date, ok.

2017-09-12 10:39:40	150518398059b748ecea42b	INFO	Scanning local Applications... 

2017-09-12 10:39:41	150518398059b748ecea42b	INFO	Scanning local Applications ok.

2017-09-12 10:39:41	150518398059b748ecea42b	INFO	Updating base_application_dbtable@feixiang.

2017-09-12 10:39:41	150518398059b748ecea42b	INFO	CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default '0' comment '备案主体',
	`business_subject` enum('1','10','11') not null default '01' comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default '0' comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;

2017-09-12 10:39:41	150518398059b748ecea42b	ERR	CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default '0' comment '备案主体',
	`business_subject` enum('1','10','11') not null default '01' comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default '0' comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;:Invalid default value for 'business_subject'

2017-09-12 10:39:41	150518398059b748ecea42b	WARNING	WARNING:512 @ CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default '0' comment '备案主体',
	`business_subject` enum('1','10','11') not null default '01' comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default '0' comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;:Invalid default value for 'business_subject' @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:39:41	150518398059b748ecea42b	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;

2017-09-12 10:39:41	150518398059b748ecea42b	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;:Incorrect table definition; there can be only one auto column and it must be defined as a key

2017-09-12 10:39:41	150518398059b748ecea42b	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;:Incorrect table definition; there can be only one auto column and it must be defined as a key @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:39:41	150518398059b748ecea42b	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`)

2017-09-12 10:39:41	150518398059b748ecea42b	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table

2017-09-12 10:39:41	150518398059b748ecea42b	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:39:41	150518398059b748ecea42b	INFO	Updating base_application_cache_expires@feixiang.

2017-09-12 10:39:41	150518398059b748ecea42b	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-12 10:39:41	150518398059b748ecea42b	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:39:41	150518398059b748ecea42b	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-12 10:39:41	150518398059b748ecea42b	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:39:41	150518398059b748ecea42b	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-12 10:39:41	150518398059b748ecea42b	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:39:41	150518398059b748ecea42b	INFO	Applications database and services is up-to-date, ok.

2017-09-12 10:40:41	150518404159b749295df58	INFO	Scanning local Applications... 

2017-09-12 10:40:41	150518404159b749295df58	INFO	Scanning local Applications ok.

2017-09-12 10:40:41	150518404159b749295df58	INFO	Updating base_application_dbtable@feixiang.

2017-09-12 10:40:41	150518404159b749295df58	INFO	CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default 0 comment '备案主体',
	`business_subject` enum('1','10','11') not null default 1 comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default 0 comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;

2017-09-12 10:40:41	150518404159b749295df58	ERR	CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default 0 comment '备案主体',
	`business_subject` enum('1','10','11') not null default 1 comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default 0 comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;:Invalid default value for 'company_subject'

2017-09-12 10:40:41	150518404159b749295df58	WARNING	WARNING:512 @ CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default 0 comment '备案主体',
	`business_subject` enum('1','10','11') not null default 1 comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default 0 comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;:Invalid default value for 'company_subject' @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:40:41	150518404159b749295df58	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;

2017-09-12 10:40:41	150518404159b749295df58	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;:Incorrect table definition; there can be only one auto column and it must be defined as a key

2017-09-12 10:40:41	150518404159b749295df58	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;:Incorrect table definition; there can be only one auto column and it must be defined as a key @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:40:41	150518404159b749295df58	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`)

2017-09-12 10:40:41	150518404159b749295df58	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table

2017-09-12 10:40:41	150518404159b749295df58	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:40:41	150518404159b749295df58	INFO	Updating base_application_cache_expires@feixiang.

2017-09-12 10:40:41	150518404159b749295df58	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-12 10:40:41	150518404159b749295df58	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:40:41	150518404159b749295df58	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-12 10:40:41	150518404159b749295df58	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:40:41	150518404159b749295df58	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-12 10:40:41	150518404159b749295df58	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:40:41	150518404159b749295df58	INFO	Applications database and services is up-to-date, ok.

2017-09-12 10:40:51	150518405159b74933d26b9	INFO	Scanning local Applications... 

2017-09-12 10:40:51	150518405159b74933d26b9	INFO	Scanning local Applications ok.

2017-09-12 10:40:51	150518405159b74933d26b9	INFO	Updating base_application_dbtable@feixiang.

2017-09-12 10:40:52	150518405159b74933d26b9	INFO	CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default 0 comment '备案主体',
	`business_subject` enum('1','10','11') not null default 1 comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default 0 comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;

2017-09-12 10:40:52	150518405159b74933d26b9	ERR	CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default 0 comment '备案主体',
	`business_subject` enum('1','10','11') not null default 1 comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default 0 comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;:Invalid default value for 'company_subject'

2017-09-12 10:40:52	150518405159b74933d26b9	WARNING	WARNING:512 @ CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default 0 comment '备案主体',
	`business_subject` enum('1','10','11') not null default 1 comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default 0 comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;:Invalid default value for 'company_subject' @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:40:52	150518405159b74933d26b9	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;

2017-09-12 10:40:52	150518405159b74933d26b9	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;:Incorrect table definition; there can be only one auto column and it must be defined as a key

2017-09-12 10:40:52	150518405159b74933d26b9	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;:Incorrect table definition; there can be only one auto column and it must be defined as a key @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:40:52	150518405159b74933d26b9	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`)

2017-09-12 10:40:52	150518405159b74933d26b9	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table

2017-09-12 10:40:52	150518405159b74933d26b9	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:40:52	150518405159b74933d26b9	INFO	Updating base_application_cache_expires@feixiang.

2017-09-12 10:40:52	150518405159b74933d26b9	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-12 10:40:52	150518405159b74933d26b9	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:40:52	150518405159b74933d26b9	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-12 10:40:52	150518405159b74933d26b9	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:40:52	150518405159b74933d26b9	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-12 10:40:52	150518405159b74933d26b9	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:40:52	150518405159b74933d26b9	INFO	Applications database and services is up-to-date, ok.

2017-09-12 10:40:56	150518405659b74938d758c	INFO	Scanning local Applications... 

2017-09-12 10:40:56	150518405659b74938d758c	INFO	Scanning local Applications ok.

2017-09-12 10:40:56	150518405659b74938d758c	INFO	Updating base_application_dbtable@feixiang.

2017-09-12 10:40:57	150518405659b74938d758c	INFO	CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default 0 comment '备案主体',
	`business_subject` enum('1','10','11') not null default 1 comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default 0 comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;

2017-09-12 10:40:57	150518405659b74938d758c	ERR	CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default 0 comment '备案主体',
	`business_subject` enum('1','10','11') not null default 1 comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default 0 comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;:Invalid default value for 'company_subject'

2017-09-12 10:40:57	150518405659b74938d758c	WARNING	WARNING:512 @ CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default 0 comment '备案主体',
	`business_subject` enum('1','10','11') not null default 1 comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default 0 comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;:Invalid default value for 'company_subject' @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:40:57	150518405659b74938d758c	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;

2017-09-12 10:40:57	150518405659b74938d758c	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;:Incorrect table definition; there can be only one auto column and it must be defined as a key

2017-09-12 10:40:57	150518405659b74938d758c	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;:Incorrect table definition; there can be only one auto column and it must be defined as a key @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:40:57	150518405659b74938d758c	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`)

2017-09-12 10:40:57	150518405659b74938d758c	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table

2017-09-12 10:40:57	150518405659b74938d758c	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:40:57	150518405659b74938d758c	INFO	Updating base_application_cache_expires@feixiang.

2017-09-12 10:40:57	150518405659b74938d758c	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-12 10:40:57	150518405659b74938d758c	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:40:57	150518405659b74938d758c	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-12 10:40:57	150518405659b74938d758c	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:40:57	150518405659b74938d758c	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-12 10:40:57	150518405659b74938d758c	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:40:57	150518405659b74938d758c	INFO	Applications database and services is up-to-date, ok.

2017-09-12 10:41:00	150518406059b7493ce585c	INFO	Scanning local Applications... 

2017-09-12 10:41:00	150518406059b7493ce585c	INFO	Scanning local Applications ok.

2017-09-12 10:41:01	150518406059b7493ce585c	INFO	Applications database and services is up-to-date, ok.

2017-09-12 10:41:08	150518406859b74944c618c	INFO	Scanning local Applications... 

2017-09-12 10:41:08	150518406859b74944c618c	INFO	Scanning local Applications ok.

2017-09-12 10:41:08	150518406859b74944c618c	INFO	Applications database and services is up-to-date, ok.

2017-09-12 10:41:49	150518410959b7496d48c75	INFO	Scanning local Applications... 

2017-09-12 10:41:49	150518410959b7496d48c75	INFO	Scanning local Applications ok.

2017-09-12 10:41:49	150518410959b7496d48c75	INFO	Updating base_application_dbtable@feixiang.

2017-09-12 10:41:49	150518410959b7496d48c75	INFO	CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`business_subject` enum('1','10','11') not null default 1 comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default 0 comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;

2017-09-12 10:41:49	150518410959b7496d48c75	ERR	CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`business_subject` enum('1','10','11') not null default 1 comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default 0 comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;:Invalid default value for 'regist_oversea'

2017-09-12 10:41:49	150518410959b7496d48c75	WARNING	WARNING:512 @ CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`business_subject` enum('1','10','11') not null default 1 comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default 0 comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;:Invalid default value for 'regist_oversea' @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:41:49	150518410959b7496d48c75	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;

2017-09-12 10:41:49	150518410959b7496d48c75	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;:Incorrect table definition; there can be only one auto column and it must be defined as a key

2017-09-12 10:41:49	150518410959b7496d48c75	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;:Incorrect table definition; there can be only one auto column and it must be defined as a key @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:41:49	150518410959b7496d48c75	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`)

2017-09-12 10:41:49	150518410959b7496d48c75	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table

2017-09-12 10:41:49	150518410959b7496d48c75	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:41:49	150518410959b7496d48c75	INFO	Updating base_application_cache_expires@feixiang.

2017-09-12 10:41:49	150518410959b7496d48c75	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-12 10:41:49	150518410959b7496d48c75	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:41:49	150518410959b7496d48c75	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-12 10:41:49	150518410959b7496d48c75	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:41:49	150518410959b7496d48c75	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-12 10:41:49	150518410959b7496d48c75	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:41:49	150518410959b7496d48c75	INFO	Applications database and services is up-to-date, ok.

2017-09-12 10:42:59	150518417959b749b34f317	INFO	Scanning local Applications... 

2017-09-12 10:42:59	150518417959b749b34f317	INFO	Scanning local Applications ok.

2017-09-12 10:42:59	150518417959b749b34f317	INFO	Updating base_application_dbtable@feixiang.

2017-09-12 10:42:59	150518417959b749b34f317	INFO	CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default '0' comment '备案主体',
	`business_subject` enum('01','10','11') not null default '01' comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default '0' comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;

2017-09-12 10:42:59	150518417959b749b34f317	ERR	CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default '0' comment '备案主体',
	`business_subject` enum('01','10','11') not null default '01' comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default '0' comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;:Invalid default value for 'declare'

2017-09-12 10:42:59	150518417959b749b34f317	WARNING	WARNING:512 @ CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default '0' comment '备案主体',
	`business_subject` enum('01','10','11') not null default '01' comment '进出口类型',
	`record_area` varchar(40) comment '备案地区',
	`regist_oversea` enum('0','1') not null default '0' comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;:Invalid default value for 'declare' @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:42:59	150518417959b749b34f317	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;

2017-09-12 10:42:59	150518417959b749b34f317	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;:Incorrect table definition; there can be only one auto column and it must be defined as a key

2017-09-12 10:42:59	150518417959b749b34f317	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;:Incorrect table definition; there can be only one auto column and it must be defined as a key @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:42:59	150518417959b749b34f317	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`)

2017-09-12 10:42:59	150518417959b749b34f317	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table

2017-09-12 10:42:59	150518417959b749b34f317	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:42:59	150518417959b749b34f317	INFO	Updating base_application_cache_expires@feixiang.

2017-09-12 10:42:59	150518417959b749b34f317	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-12 10:42:59	150518417959b749b34f317	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:42:59	150518417959b749b34f317	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-12 10:42:59	150518417959b749b34f317	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:42:59	150518417959b749b34f317	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-12 10:42:59	150518417959b749b34f317	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:42:59	150518417959b749b34f317	INFO	Applications database and services is up-to-date, ok.

2017-09-12 10:43:52	150518423259b749e83425d	INFO	Scanning local Applications... 

2017-09-12 10:43:52	150518423259b749e83425d	INFO	Scanning local Applications ok.

2017-09-12 10:43:52	150518423259b749e83425d	INFO	Updating base_application_dbtable@feixiang.

2017-09-12 10:43:52	150518423259b749e83425d	INFO	CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default '0' comment '备案主体',
	`business_subject` enum('01','10','11') not null default '01' comment '进出口类型',
	`record_area` varchar(40) default '' comment '备案地区',
	`regist_oversea` enum('0','1') not null default '0' comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;

2017-09-12 10:43:52	150518423259b749e83425d	ERR	CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default '0' comment '备案主体',
	`business_subject` enum('01','10','11') not null default '01' comment '进出口类型',
	`record_area` varchar(40) default '' comment '备案地区',
	`regist_oversea` enum('0','1') not null default '0' comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;:Invalid default value for 'declare'

2017-09-12 10:43:52	150518423259b749e83425d	WARNING	WARNING:512 @ CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default '0' comment '备案主体',
	`business_subject` enum('01','10','11') not null default '01' comment '进出口类型',
	`record_area` varchar(40) default '' comment '备案地区',
	`regist_oversea` enum('0','1') not null default '0' comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned default '' comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;:Invalid default value for 'declare' @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:43:52	150518423259b749e83425d	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;

2017-09-12 10:43:52	150518423259b749e83425d	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;:Incorrect table definition; there can be only one auto column and it must be defined as a key

2017-09-12 10:43:52	150518423259b749e83425d	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;:Incorrect table definition; there can be only one auto column and it must be defined as a key @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:43:52	150518423259b749e83425d	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`)

2017-09-12 10:43:52	150518423259b749e83425d	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table

2017-09-12 10:43:52	150518423259b749e83425d	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:43:52	150518423259b749e83425d	INFO	Updating base_application_cache_expires@feixiang.

2017-09-12 10:43:52	150518423259b749e83425d	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-12 10:43:52	150518423259b749e83425d	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:43:52	150518423259b749e83425d	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-12 10:43:52	150518423259b749e83425d	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:43:52	150518423259b749e83425d	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-12 10:43:52	150518423259b749e83425d	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:43:52	150518423259b749e83425d	INFO	Applications database and services is up-to-date, ok.

2017-09-12 10:46:22	150518438259b74a7e5f2c4	INFO	Scanning local Applications... 

2017-09-12 10:46:22	150518438259b74a7e5f2c4	INFO	Scanning local Applications ok.

2017-09-12 10:46:22	150518438259b74a7e5f2c4	INFO	Updating base_application_dbtable@feixiang.

2017-09-12 10:46:22	150518438259b74a7e5f2c4	INFO	CREATE TABLE `sdb_feixiang_company` (
	`company_id` mediumint(8) unsigned auto_increment comment '企业 ID',
	`company_name` varchar(400) not null default '' comment '企业名称',
	`company_declare_code` varchar(200) not null default '' comment '申请编号',
	`company_subject` enum('0','1') not null default '0' comment '备案主体',
	`business_subject` enum('01','10','11') not null default '01' comment '进出口类型',
	`record_area` varchar(40) default '' comment '备案地区',
	`regist_oversea` enum('0','1') not null default '0' comment '境内外标志',
	`business_mode` varchar(4) default '' comment '贸易方式',
	`country_region` varchar(4) default '' comment '国家地区',
	`org_code` varchar(30) not null default '' comment '统一社会信用代码',
	`tax_payer_nature` varchar(30) default '' comment '纳税人性质',
	`tax_payer_no` varchar(30) default '' comment '纳税人识别号',
	`company_type` varchar(10) not null default '' comment '企业类型',
	`legal_person` varchar(40) not null default '' comment '法人代表',
	`contact_name` varchar(20) not null default '' comment '企业联系人姓名',
	`contact_info` varchar(20) not null default '' comment '企业联系人电话',
	`website_url` varchar(100) not null default '' comment '网址',
	`E-Mail` varchar(255) default '' comment 'E-Mail',
	`fax_no` varchar(40) comment '传真号码',
	`zip_code` varchar(16) comment '邮编',
	`company_address` varchar(1000) comment '企业地址',
	`business_scope` varchar(200) default '' comment '主要商品类别',
	`company_intro` varchar(2000) default '' comment '企业介绍',
	`declare` int(10) unsigned comment '申请日期',
	`monitor_org_code` varchar(40) not null default '' comment '监管机构代码',
	`monitor_org_name` varchar(40) not null default '' comment '监管机构名称',
	`plat_name` varchar(100) not null default '' comment '平台名称',
	`plat_website` varchar(200) not null default '' comment '平台网址',
	`ciq_reg_code` varchar(10) default '' comment '检验检疫注册代码',
	`ent_quality` varchar(4) not null default '' comment '企业性质',
	`ent_reg_place_code` varchar(8) not null default '' comment '注册地代码',
	`ent_reg_place_name` varchar(100) not null default '' comment '注册地代码',
	`ent_type` varchar(4) not null default '' comment '企业类别',
	`createtime` int(10) unsigned not null comment '创建时间',
	primary key (`company_id`)
)ENGINE = innodb DEFAULT CHARACTER SET utf8;

2017-09-12 10:46:22	150518438259b74a7e5f2c4	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;

2017-09-12 10:46:22	150518438259b74a7e5f2c4	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;:Incorrect table definition; there can be only one auto column and it must be defined as a key

2017-09-12 10:46:22	150518438259b74a7e5f2c4	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	DROP COLUMN `goods_id`;:Incorrect table definition; there can be only one auto column and it must be defined as a key @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:46:22	150518438259b74a7e5f2c4	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`)

2017-09-12 10:46:22	150518438259b74a7e5f2c4	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table

2017-09-12 10:46:22	150518438259b74a7e5f2c4	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY, ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:46:22	150518438259b74a7e5f2c4	INFO	Updating base_application_cache_expires@feixiang.

2017-09-12 10:46:22	150518438259b74a7e5f2c4	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-12 10:46:22	150518438259b74a7e5f2c4	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:46:22	150518438259b74a7e5f2c4	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-12 10:46:22	150518438259b74a7e5f2c4	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:46:22	150518438259b74a7e5f2c4	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-12 10:46:22	150518438259b74a7e5f2c4	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:46:22	150518438259b74a7e5f2c4	INFO	Applications database and services is up-to-date, ok.

2017-09-12 10:50:24	150518462459b74b7009af2	INFO	Scanning local Applications... 

2017-09-12 10:50:24	150518462459b74b7009af2	INFO	Scanning local Applications ok.

2017-09-12 10:50:24	150518462459b74b7009af2	INFO	Updating base_application_dbtable@feixiang.

2017-09-12 10:50:24	150518462459b74b7009af2	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	DROP COLUMN `goods_id`;

2017-09-12 10:50:24	150518462459b74b7009af2	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY

2017-09-12 10:50:24	150518462459b74b7009af2	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY:Can't DROP 'PRIMARY'; check that column/key exists

2017-09-12 10:50:24	150518462459b74b7009af2	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` DROP PRIMARY KEY:Can't DROP 'PRIMARY'; check that column/key exists @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:50:24	150518462459b74b7009af2	INFO	Updating base_application_cache_expires@feixiang.

2017-09-12 10:50:24	150518462459b74b7009af2	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-12 10:50:24	150518462459b74b7009af2	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:50:24	150518462459b74b7009af2	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-12 10:50:24	150518462459b74b7009af2	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:50:24	150518462459b74b7009af2	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-12 10:50:24	150518462459b74b7009af2	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:50:24	150518462459b74b7009af2	INFO	Applications database and services is up-to-date, ok.

2017-09-12 10:50:35	150518463559b74b7bdea4a	INFO	Scanning local Applications... 

2017-09-12 10:50:35	150518463559b74b7bdea4a	INFO	Scanning local Applications ok.

2017-09-12 10:50:36	150518463559b74b7bdea4a	INFO	Updating base_application_dbtable@feixiang.

2017-09-12 10:50:36	150518463559b74b7bdea4a	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST;

2017-09-12 10:50:36	150518463559b74b7bdea4a	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST;:Incorrect table definition; there can be only one auto column and it must be defined as a key

2017-09-12 10:50:36	150518463559b74b7bdea4a	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST;:Incorrect table definition; there can be only one auto column and it must be defined as a key @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:50:36	150518463559b74b7bdea4a	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` ADD primary key (`good_id`)

2017-09-12 10:50:36	150518463559b74b7bdea4a	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table

2017-09-12 10:50:36	150518463559b74b7bdea4a	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:50:36	150518463559b74b7bdea4a	INFO	Updating base_application_cache_expires@feixiang.

2017-09-12 10:50:36	150518463559b74b7bdea4a	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-12 10:50:36	150518463559b74b7bdea4a	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:50:36	150518463559b74b7bdea4a	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-12 10:50:36	150518463559b74b7bdea4a	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:50:36	150518463559b74b7bdea4a	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-12 10:50:36	150518463559b74b7bdea4a	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:50:36	150518463559b74b7bdea4a	INFO	Applications database and services is up-to-date, ok.

2017-09-12 10:51:14	150518467459b74ba24f620	INFO	Scanning local Applications... 

2017-09-12 10:51:14	150518467459b74ba24f620	INFO	Scanning local Applications ok.

2017-09-12 10:51:14	150518467459b74ba24f620	INFO	Updating base_application_dbtable@feixiang.

2017-09-12 10:51:14	150518467459b74ba24f620	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	ADD COLUMN `ID` varchar(32) comment '申请编号' AFTER good_id,
	DROP COLUMN `id`;

2017-09-12 10:51:14	150518467459b74ba24f620	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	ADD COLUMN `ID` varchar(32) comment '申请编号' AFTER good_id,
	DROP COLUMN `id`;:Incorrect table definition; there can be only one auto column and it must be defined as a key

2017-09-12 10:51:14	150518467459b74ba24f620	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST,
	ADD COLUMN `ID` varchar(32) comment '申请编号' AFTER good_id,
	DROP COLUMN `id`;:Incorrect table definition; there can be only one auto column and it must be defined as a key @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:51:14	150518467459b74ba24f620	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` ADD primary key (`good_id`)

2017-09-12 10:51:14	150518467459b74ba24f620	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table

2017-09-12 10:51:14	150518467459b74ba24f620	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:51:14	150518467459b74ba24f620	INFO	Updating base_application_cache_expires@feixiang.

2017-09-12 10:51:14	150518467459b74ba24f620	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-12 10:51:14	150518467459b74ba24f620	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:51:14	150518467459b74ba24f620	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-12 10:51:14	150518467459b74ba24f620	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:51:14	150518467459b74ba24f620	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-12 10:51:14	150518467459b74ba24f620	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:51:14	150518467459b74ba24f620	INFO	Applications database and services is up-to-date, ok.

2017-09-12 10:51:37	150518469759b74bb9bf3a8	INFO	Scanning local Applications... 

2017-09-12 10:51:37	150518469759b74bb9bf3a8	INFO	Scanning local Applications ok.

2017-09-12 10:51:37	150518469759b74bb9bf3a8	INFO	Updating base_application_dbtable@feixiang.

2017-09-12 10:51:38	150518469759b74bb9bf3a8	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST;

2017-09-12 10:51:38	150518469759b74bb9bf3a8	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST;:Incorrect table definition; there can be only one auto column and it must be defined as a key

2017-09-12 10:51:38	150518469759b74bb9bf3a8	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST;:Incorrect table definition; there can be only one auto column and it must be defined as a key @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:51:38	150518469759b74bb9bf3a8	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` ADD primary key (`good_id`)

2017-09-12 10:51:38	150518469759b74bb9bf3a8	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table

2017-09-12 10:51:38	150518469759b74bb9bf3a8	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:51:38	150518469759b74bb9bf3a8	INFO	Updating base_application_cache_expires@feixiang.

2017-09-12 10:51:38	150518469759b74bb9bf3a8	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-12 10:51:38	150518469759b74bb9bf3a8	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:51:38	150518469759b74bb9bf3a8	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-12 10:51:38	150518469759b74bb9bf3a8	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:51:38	150518469759b74bb9bf3a8	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-12 10:51:38	150518469759b74bb9bf3a8	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:51:38	150518469759b74bb9bf3a8	INFO	Applications database and services is up-to-date, ok.

2017-09-12 10:55:26	150518492659b74c9eee604	INFO	Scanning local Applications... 

2017-09-12 10:55:27	150518492659b74c9eee604	INFO	Scanning local Applications ok.

2017-09-12 10:55:27	150518492659b74c9eee604	INFO	Updating base_application_dbtable@feixiang.

2017-09-12 10:55:27	150518492659b74c9eee604	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST;

2017-09-12 10:55:27	150518492659b74c9eee604	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST;:Incorrect table definition; there can be only one auto column and it must be defined as a key

2017-09-12 10:55:27	150518492659b74c9eee604	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST;:Incorrect table definition; there can be only one auto column and it must be defined as a key @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:55:27	150518492659b74c9eee604	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` ADD primary key (`good_id`)

2017-09-12 10:55:27	150518492659b74c9eee604	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table

2017-09-12 10:55:27	150518492659b74c9eee604	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:55:27	150518492659b74c9eee604	INFO	Updating base_application_cache_expires@feixiang.

2017-09-12 10:55:27	150518492659b74c9eee604	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-12 10:55:27	150518492659b74c9eee604	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:55:27	150518492659b74c9eee604	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-12 10:55:27	150518492659b74c9eee604	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:55:27	150518492659b74c9eee604	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-12 10:55:27	150518492659b74c9eee604	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:55:27	150518492659b74c9eee604	INFO	Applications database and services is up-to-date, ok.

2017-09-12 10:55:53	150518495359b74cb9ce486	INFO	Scanning local Applications... 

2017-09-12 10:55:53	150518495359b74cb9ce486	INFO	Scanning local Applications ok.

2017-09-12 10:55:53	150518495359b74cb9ce486	INFO	Updating base_application_dbtable@feixiang.

2017-09-12 10:55:54	150518495359b74cb9ce486	INFO	Updating base_application_cache_expires@feixiang.

2017-09-12 10:55:54	150518495359b74cb9ce486	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-12 10:55:54	150518495359b74cb9ce486	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:55:54	150518495359b74cb9ce486	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-12 10:55:54	150518495359b74cb9ce486	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:55:54	150518495359b74cb9ce486	INFO	Applications database and services is up-to-date, ok.

2017-09-12 10:56:22	150518498259b74cd69d628	INFO	Scanning local Applications... 

2017-09-12 10:56:22	150518498259b74cd69d628	INFO	Scanning local Applications ok.

2017-09-12 10:56:22	150518498259b74cd69d628	INFO	Updating base_application_dbtable@feixiang.

2017-09-12 10:56:22	150518498259b74cd69d628	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST;

2017-09-12 10:56:22	150518498259b74cd69d628	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST;:Incorrect table definition; there can be only one auto column and it must be defined as a key

2017-09-12 10:56:22	150518498259b74cd69d628	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_id` mediumint(8) unsigned not null auto_increment comment 'ID' FIRST;:Incorrect table definition; there can be only one auto column and it must be defined as a key @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:56:22	150518498259b74cd69d628	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` ADD primary key (`good_id`)

2017-09-12 10:56:22	150518498259b74cd69d628	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table

2017-09-12 10:56:22	150518498259b74cd69d628	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` ADD primary key (`good_id`):Key column 'good_id' doesn't exist in table @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:56:22	150518498259b74cd69d628	INFO	Updating base_application_cache_expires@feixiang.

2017-09-12 10:56:22	150518498259b74cd69d628	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-12 10:56:22	150518498259b74cd69d628	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:56:22	150518498259b74cd69d628	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-12 10:56:22	150518498259b74cd69d628	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:56:22	150518498259b74cd69d628	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-12 10:56:22	150518498259b74cd69d628	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:56:22	150518498259b74cd69d628	INFO	Applications database and services is up-to-date, ok.

2017-09-12 10:57:39	150518505959b74d2386214	INFO	Scanning local Applications... 

2017-09-12 10:57:39	150518505959b74d2386214	INFO	Scanning local Applications ok.

2017-09-12 10:57:39	150518505959b74d2386214	INFO	Updating base_application_dbtable@feixiang.

2017-09-12 10:57:39	150518505959b74d2386214	INFO	update sdb_feixiang_goods set `id`='' where `id`=null;


2017-09-12 10:57:39	150518505959b74d2386214	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	MODIFY COLUMN `id` mediumint(8) unsigned not null auto_increment comment 'ID',
	ADD COLUMN `goods_id` varchar(32) comment '申请编号' AFTER id;

2017-09-12 10:57:39	150518505959b74d2386214	ERR	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	MODIFY COLUMN `id` mediumint(8) unsigned not null auto_increment comment 'ID',
	ADD COLUMN `goods_id` varchar(32) comment '申请编号' AFTER id;:Incorrect table definition; there can be only one auto column and it must be defined as a key

2017-09-12 10:57:39	150518505959b74d2386214	WARNING	WARNING:512 @ ALTER IGNORE TABLE `sdb_feixiang_goods` 
	MODIFY COLUMN `id` mediumint(8) unsigned not null auto_increment comment 'ID',
	ADD COLUMN `goods_id` varchar(32) comment '申请编号' AFTER id;:Incorrect table definition; there can be only one auto column and it must be defined as a key @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 10:57:39	150518505959b74d2386214	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` ADD primary key (`id`)

2017-09-12 10:57:39	150518505959b74d2386214	INFO	Updating base_application_cache_expires@feixiang.

2017-09-12 10:57:39	150518505959b74d2386214	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-12 10:57:39	150518505959b74d2386214	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:57:39	150518505959b74d2386214	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-12 10:57:39	150518505959b74d2386214	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:57:39	150518505959b74d2386214	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-12 10:57:39	150518505959b74d2386214	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:57:39	150518505959b74d2386214	INFO	Applications database and services is up-to-date, ok.

2017-09-12 10:58:21	150518510159b74d4daedfd	INFO	Scanning local Applications... 

2017-09-12 10:58:21	150518510159b74d4daedfd	INFO	Scanning local Applications ok.

2017-09-12 10:58:21	150518510159b74d4daedfd	INFO	Updating base_application_dbtable@feixiang.

2017-09-12 10:58:21	150518510159b74d4daedfd	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	MODIFY COLUMN `id` mediumint(8) unsigned not null auto_increment comment 'ID',
	ADD COLUMN `goods_code` varchar(32) comment '申请编号' AFTER id;

2017-09-12 10:58:21	150518510159b74d4daedfd	INFO	Updating base_application_cache_expires@feixiang.

2017-09-12 10:58:21	150518510159b74d4daedfd	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-12 10:58:21	150518510159b74d4daedfd	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:58:21	150518510159b74d4daedfd	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-12 10:58:21	150518510159b74d4daedfd	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:58:21	150518510159b74d4daedfd	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-12 10:58:21	150518510159b74d4daedfd	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:58:22	150518510159b74d4daedfd	INFO	Applications database and services is up-to-date, ok.

2017-09-12 10:59:46	150518518659b74da21d676	INFO	Scanning local Applications... 

2017-09-12 10:59:46	150518518659b74da21d676	INFO	Scanning local Applications ok.

2017-09-12 10:59:46	150518518659b74da21d676	INFO	Updating base_application_dbtable@feixiang.

2017-09-12 10:59:46	150518518659b74da21d676	INFO	ALTER IGNORE TABLE `sdb_feixiang_goods` 
	ADD COLUMN `good_code` varchar(32) comment '申请编号' AFTER id,
	DROP COLUMN `goods_code`;

2017-09-12 10:59:46	150518518659b74da21d676	INFO	Updating base_application_cache_expires@feixiang.

2017-09-12 10:59:46	150518518659b74da21d676	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-12 10:59:46	150518518659b74da21d676	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:59:46	150518518659b74da21d676	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-12 10:59:46	150518518659b74da21d676	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:59:46	150518518659b74da21d676	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-12 10:59:46	150518518659b74da21d676	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 10:59:46	150518518659b74da21d676	INFO	Applications database and services is up-to-date, ok.

2017-09-12 11:03:08	150518538859b74e6c1e26d	INFO	Scanning local Applications... 

2017-09-12 11:03:08	150518538859b74e6c1e26d	INFO	Scanning local Applications ok.

2017-09-12 11:03:08	150518538859b74e6c1e26d	INFO	Updating base_application_dbtable@feixiang.

2017-09-12 11:03:08	150518538859b74e6c1e26d	INFO	CREATE TABLE `sdb_feixiang_orders_item` (
	
)ENGINE = InnoDB DEFAULT CHARACTER SET utf8;

2017-09-12 11:03:08	150518538859b74e6c1e26d	ERR	CREATE TABLE `sdb_feixiang_orders_item` (
	
)ENGINE = InnoDB DEFAULT CHARACTER SET utf8;:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')ENGINE = InnoDB DEFAULT CHARACTER SET utf8' at line 3

2017-09-12 11:03:08	150518538859b74e6c1e26d	WARNING	WARNING:512 @ CREATE TABLE `sdb_feixiang_orders_item` (
	
)ENGINE = InnoDB DEFAULT CHARACTER SET utf8;:You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')ENGINE = InnoDB DEFAULT CHARACTER SET utf8' at line 3 @ file:/Applications/MAMP/htdocs/feixiang/app/base/lib/db/connections.php @ line:76

2017-09-12 11:03:08	150518538859b74e6c1e26d	INFO	Updating base_application_cache_expires@feixiang.

2017-09-12 11:03:08	150518538859b74e6c1e26d	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-12 11:03:08	150518538859b74e6c1e26d	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 11:03:08	150518538859b74e6c1e26d	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-12 11:03:08	150518538859b74e6c1e26d	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 11:03:08	150518538859b74e6c1e26d	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-12 11:03:08	150518538859b74e6c1e26d	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 11:03:08	150518538859b74e6c1e26d	INFO	Installing Cache_Expires DB:FEIXIANG_ORDER_ITEM

2017-09-12 11:03:08	150518538859b74e6c1e26d	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 11:03:08	150518538859b74e6c1e26d	INFO	Applications database and services is up-to-date, ok.

2017-09-12 11:04:29	150518546959b74ebd7e5c7	INFO	Scanning local Applications... 

2017-09-12 11:04:29	150518546959b74ebd7e5c7	INFO	Scanning local Applications ok.

2017-09-12 11:04:29	150518546959b74ebd7e5c7	INFO	Updating base_application_dbtable@feixiang.

2017-09-12 11:04:29	150518546959b74ebd7e5c7	INFO	CREATE TABLE `sdb_feixiang_orders_item` (
	`order_item_id` mediumint(8) unsigned not null auto_increment comment '订单明细ID',
	`order_id` mediumint(8) unsigned not null default 0 comment '订单表ID',
	`sku` varchar(20) not null default 0 comment 'sku码',
	`price` decimal(10,3) not null default '0.000' comment '单价',
	`qty` int(11) not null default '0.000' comment '法定数量',
	`qty2` decimal(10,3) not null default '0.000' comment '第二数量',
	`item_price` decimal(10,3) not null default '0.000' comment '总价(不含税)',
	`consolidated_tax` decimal(10,3) not null default '0.000' comment '综合税',
	`total_Price` decimal(10,3) not null default '0.000' comment '总价(含税)',
	primary key (`order_item_id`)
)ENGINE = InnoDB DEFAULT CHARACTER SET utf8;

2017-09-12 11:04:29	150518546959b74ebd7e5c7	INFO	Updating base_application_cache_expires@feixiang.

2017-09-12 11:04:29	150518546959b74ebd7e5c7	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-12 11:04:29	150518546959b74ebd7e5c7	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 11:04:29	150518546959b74ebd7e5c7	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-12 11:04:29	150518546959b74ebd7e5c7	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 11:04:29	150518546959b74ebd7e5c7	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-12 11:04:29	150518546959b74ebd7e5c7	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 11:04:29	150518546959b74ebd7e5c7	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS_ITEM

2017-09-12 11:04:29	150518546959b74ebd7e5c7	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-12 11:04:29	150518546959b74ebd7e5c7	INFO	Applications database and services is up-to-date, ok.

