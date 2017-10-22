<?php exit()?>
2017-09-25 09:32:59	150630317959c85ccb68eed	INFO	Scanning local Applications... 

2017-09-25 09:32:59	150630317959c85ccb68eed	INFO	Scanning local Applications ok.

2017-09-25 09:32:59	150630317959c85ccb68eed	INFO	Updating base_application_dbtable@feixiang.

2017-09-25 09:32:59	150630317959c85ccb68eed	INFO	ALTER IGNORE TABLE `sdb_feixiang_orders` 
	ADD COLUMN `pushOrder` enum('no','yes') default 'no' comment '推送国检订单' AFTER push311,
	ADD COLUMN `pushLogisti` enum('no','yes') default 'no' comment '推送国检运单' AFTER push511;

2017-09-25 09:32:59	150630317959c85ccb68eed	INFO	Updating base_application_cache_expires@feixiang.

2017-09-25 09:32:59	150630317959c85ccb68eed	INFO	Installing Cache_Expires DB:FEIXIANG_COMPANY

2017-09-25 09:32:59	150630317959c85ccb68eed	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-25 09:32:59	150630317959c85ccb68eed	INFO	Installing Cache_Expires DB:FEIXIANG_GOODS

2017-09-25 09:32:59	150630317959c85ccb68eed	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-25 09:32:59	150630317959c85ccb68eed	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS

2017-09-25 09:32:59	150630317959c85ccb68eed	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-25 09:32:59	150630317959c85ccb68eed	INFO	Installing Cache_Expires DB:FEIXIANG_ORDERS_ITEM

2017-09-25 09:32:59	150630317959c85ccb68eed	INFO	UPDATE CACHE EXPIRES KV DATA

2017-09-25 09:33:00	150630317959c85ccb68eed	INFO	Applications database and services is up-to-date, ok.

2017-09-25 09:34:31	150630327159c85d27db650	INFO	Scanning local Applications... 

2017-09-25 09:34:31	150630327159c85d27db650	INFO	Scanning local Applications ok.

2017-09-25 09:34:32	150630327159c85d27db650	INFO	Applications database and services is up-to-date, ok.

