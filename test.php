<?php
/**
 * Created by PhpStorm.
 * User: igor.bubnevich
 * Date: 12.09.2016
 * Time: 12:00
 */
error_reporting(E_ALL);
require_once __DIR__ . '/vendor/indrig/friday/Friday.php';

$application = new \Friday\Web\Application([
    'id' => 'Test Application',
    'basePath' => __DIR__
]);
$application->run();