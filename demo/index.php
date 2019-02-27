<?php
/**
 * lsf demo
 */

require_once __DIR__ . '/common.php';

echo "base path:" . App::basePath() . PHP_EOL;

//获取所有配置
var_export(Config::get());
echo PHP_EOL;


//获取db配置
var_export(Config::get('db'));
echo PHP_EOL;

//log level
echo Config::get('log.level') . PHP_EOL;


//获取对象
echo App::make('log')->say("jelly") . PHP_EOL;
