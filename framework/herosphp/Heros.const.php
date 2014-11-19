<?php
/*---------------------------------------------------------------------
 * 系统常量定义
 * ---------------------------------------------------------------------
 * Copyright (c) 2013-now http://blog518.com All rights reserved.
 * ---------------------------------------------------------------------
 * Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
 * ---------------------------------------------------------------------
 * Author: <yangjian102621@gmail.com>
 *-----------------------------------------------------------------------*/


! defined('DEFAULT_APP') && define('DEFAULT_APP', 'admin');       //默认访问的应用名称

//定义请求访问模式
define('__PATH_INFO_REQUEST__', 1);       //pathinfo 访问模式
define('__NORMAL_REQUEST__', 2);      //常规访问模式
define('__CLIENT_REQUEST__', 3);    //客户端请求模式
define('__REQUEST_MODE__', __PATH_INFO_REQUEST__);

//定义编译路径
define('APP_RUNTIME_PATH', APP_ROOT.'runtime/');
//定义配置文档路径
define('APP_CONFIG_PATH', APP_ROOT.'configs/');

//定义时区
define('TIME_ZONE', 'PRC');

//定义import加载类的类别
define('IMPORT_APP', 1);    //加载应用模块中的class
define('IMPORT_FRAME', 2);  //加载框架中的class
define('IMPORT_CUSTOM', 3); //加载自定义路径中的class

define('EXT_PHP', '.class.php');   //加载php文件
define('EXT_HTML', '.html');    //加载html文件

define('URI_EXT', '.html');     //uri 伪静态路径后缀

/**
 * 以下订制数据库访问策略，提供单台服务器访问和读写分离集群访问模式
 * 如果采用集群访问模式请在 /config/db/host.config.php文件中设置好你的数据库集群配置
 */
define('DB_ACCESS_SINGLE', 1);  //单台服务器访问模式
define('DB_ACCESS_CLUSTERS', 2);  //数据库服务器集群调度访问模式
define('DB_ACCESS', DB_ACCESS_SINGLE);
?>