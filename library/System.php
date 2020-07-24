<?php

// 框架开始运行时间
defined('START_TIME') or define('START_TIME', microtime(true));
// 核心文件目录
defined('LIBRARY_PATH') or define('LIBRARY_PATH', __DIR__.DIRECTORY_SEPARATOR);
// 应用目录
defined('APP_PATH') or define('APP_PATH', dirname(__DIR__).DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR);
// 入口目录
defined('PUBLIC_PATH') or define('PUBLIC_PATH', dirname(__DIR__).DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR);
