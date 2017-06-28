<?php

if (file_exists(__DIR__.'/../vendor/autoload.php')) {
    require_once __DIR__.'/../vendor/autoload.php';
} else {
    echo "Can't load autoload.php";
    exit();
}

$config = [];

if (file_exists(__DIR__.'/../config/ApplicationConfig.php')) {
    $config = array_merge_recursive($config, include __DIR__.'/../config/ApplicationConfig.php');
} else {
    echo "Can't load application config";
    exit();
}

if (file_exists(__DIR__.'/../config/ModuleConfig.php')) {
    $config = array_merge_recursive($config, include __DIR__.'/../config/ModuleConfig.php');
} else {
    echo "Can't load main module config";
    exit();
}

if (class_exists('\IVAgafonov\System\Application')) {
    try {
        \IVAgafonov\System\Application::init($config);
        \IVAgafonov\System\Application::run('MyModule');
    } catch (\Exception $ex) {
        echo $ex->getMessage();
    }

} else {
    echo "Can't init application";
    exit();
}