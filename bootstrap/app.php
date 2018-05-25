<?php
use \Illuminate\Database\Capsule\Manager as Capsule;
use \Slim\Container as Container;

$configs['displayErrorDetails'] = DEBUG;

$configs['db'] = require_once ROOT_PATH.'/../config/databases.php';

$container = new Container(['settings'=>$configs]);
$app = new \Slim\App($container);

/**
 * 数据库连接升级，支持读写分离
 */
$capsule = new Capsule;
/**
 * 添加主数据库配置
 */
foreach ($container['settings']['db'] as $name=>$config){
    $capsule->addConnection($config,$name);
}
$capsule->setAsGlobal();
$capsule->bootEloquent();

$container['db'] = $capsule;

return $app;
