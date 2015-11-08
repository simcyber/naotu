<?php
return array(
	//'配置项'=>'配置值'
	'MULTI_MODULE'          =>  false,
	'URL_MODEL'          =>  2,
	'DEFAULT_MODULE'        =>  'Home',
	'URL_HTML_SUFFIX'=>'jsp',
	'URL_DENY_SUFFIX' => 'pdf|ico|png|gif|jpg',
	'URL_CASE_INSENSITIVE'  =>  true,
	//数据库配置信息
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址
	'DB_NAME'   => 'dbname', // 数据库名
	'DB_USER'   => 'dbuser', // 用户名
	'DB_PWD'    => 'dbpassword', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => '', // 数据库表前缀 
	'DB_CHARSET'=> 'utf8', // 字符集
	'DB_DEBUG'  =>  FALSE, // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增

);