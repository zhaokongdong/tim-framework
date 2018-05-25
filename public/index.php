<?php
/**
 * application root path
 */
define('ROOT_PATH', __DIR__);

/**
 * application start time
 */
define('TIM_START', microtime(true));

/**
 * 报错开关，生产环境设置为false
 */
define('DEBUG', true);

/**
 * 加载依赖
 */
require __DIR__ . '/../vendor/autoload.php';

/**
 * App 启动
 */
$app = require_once __DIR__ . '/../bootstrap/app.php';

/**
 * 加载路由
 */
require_once __DIR__ . '/../routers/web.php';

/**
 * 业务开始
 */
$app->run();
