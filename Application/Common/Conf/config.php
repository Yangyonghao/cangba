<?php

$local=[
    // 添加数据库配置信息
    'DB_TYPE'=>'mysql',// 数据库类型
    'DB_HOST'=>'127.0.0.1',// 服务器地址
    'DB_NAME'=>'cba',// 数据库名
    'DB_USER'=>'root',// 用户名
    'DB_PWD'=>'',// 密码
    'DB_PORT'=>3306,// 端口
    'DB_PREFIX'=>'cba_',// 数据库表前缀
    'DB_CHARSET'=>'utf8',// 数据库字符集
];
$new_dev=[
    // 添加数据库配置信息
    'DB_TYPE'=>'mysql',// 数据库类型
    'DB_HOST'=>'127.0.0.1',// 服务器地址
    'DB_NAME'=>'new_dev',// 数据库名
    'DB_USER'=>'root',// 用户名
    'DB_PWD'=>'',// 密码
    'DB_PORT'=>3306,// 端口
    'DB_PREFIX'=>'y1_',// 数据库表前缀
    'DB_CHARSET'=>'utf8',// 数据库字符集
];

//return $local;
return $new_dev;