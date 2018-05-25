<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| reference slim route
| https://www.slimframework.com/docs/v3/objects/request.html#route-object
|
*/
/**
 * 首页路由
 */
$app->get('/', '\App\Controllers\IndexController:index');