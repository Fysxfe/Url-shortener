<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
 'id' => 'url-shortener',
 'basePath' => dirname(__DIR__),
 'bootstrap' => ['log'],
 'components' => [
  'request' => [
   'cookieValidationKey' => $params['cookieValidationKey'],
   'parsers' => [
    'application/json' => 'yii\web\JsonParser',
   ],
  ],
  'db' => $db,
  'log' => [
   'targets' => [
    [
     'class' => 'yii\log\FileTarget',
     'levels' => ['error', 'warning'],
    ],
   ],
  ],
  'urlManager' => [
   'enablePrettyUrl' => true,
   'showScriptName' => false,
   'rules' => [
    '/' => 'site/index',
    'POST api/shorten' => 'links/create',
    'GET api/stats/<code:[A-Za-z0-9]+>' => 'links/stats',
    'GET api/health' => 'health/check',
    'GET <code:[A-Za-z0-9]{4,10}>' => 'links/redirect',
   ],
  ],
 ],
 'params' => $params,
];

return $config;
