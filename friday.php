<?php
define('FRIDAY_DEBUG', true);

require(__DIR__ . '/vendor/autoload.php');
require(__DIR__ . '/vendor/indrig/friday/src/Friday.php');

$config = Friday\Helper\ArrayHelper::merge(
    require_once __DIR__ . '/common/config/main.php',
    require_once __DIR__ . '/console/config/main.php'
);

$application = new Friday\Console\Application($config);

$exitCode = $application->run();
exit($exitCode);
