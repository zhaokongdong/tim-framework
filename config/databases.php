<?php
/**
 * 参考Laravel Eloquent database 配置
 * 返回一个数组
 */
return [
    'default' => [
        'driver' => 'mysql',
        'read' => [
            'host' => '',
        ],
        'write' => [
            'host' => '',
        ],
        'username' => '',
        'password' => '',
        'database' => '',
        'port' => '',
        'charset' => 'utf8',
        'collation' => 'utf8_general_ci',
        'prefix' => '',
    ],
    'master' => [
        'driver' => 'mysql',
        'host' => '',
        'username' => '',
        'password' => '',
        'database' => '',
        'port' => '',
        'charset' => 'utf8',
        'collation' => 'utf8_general_ci',
        'prefix' => '',
    ],
];