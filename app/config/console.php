<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

return [
 'id' => 'url-shortener-console',
 'basePath' => dirname(__DIR__),
 'bootstrap' => ['log'],
 'controllerNamespace' => 'app\commands',
 'aliases' => [
  '@app' => dirname(__DIR__),
 ],
 'components' => [
  'db' => $db,
  'log' => [
   'targets' => [
    [
     'class' => 'yii\log\FileTarget',
     'levels' => ['error', 'warning'],
    ],
   ],
  ],
 ],
 'params' => $params,
];
