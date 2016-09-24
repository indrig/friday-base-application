<?php
/**
 * Created by PhpStorm.
 * User: igor.bubnevich
 * Date: 12.09.2016
 * Time: 12:00
 */
error_reporting(E_ALL);
define('FRIDAY_DEBUG', true);

require_once __DIR__ . '/vendor/indrig/friday/src/Friday.php';


$application = new \Friday\Web\Application([
    'id' => 'Test Application',
    'basePath' => __DIR__,
    'bootstrap' => ['log'],
    'components' => [
        'urlManager' => [
            'rules'               => [
                '/'  => '/index/index',
            ]
        ],
        'cache' => [
            'class' => 'Friday\Cache\FileCache'
        ],
        'log' => [
              'targets' => [
                  'file' => [
                      'class' => 'Friday\Log\FileTarget',
                      'levels' => ['trace', 'info'],
                  ],
                  'console' => [
                      'class' => 'Friday\Log\ConsoleTarget',
                      'levels' => ['error', 'warning', 'trace', 'info', 'profile'],
                  ],
              ],
        ],
        'db' => [
            'class' => 'Friday\Db\Adapter',
            'username' => 'root',
            'password' => '',
            'database' => 'test',

        ]
    ]
]);
$application->run();