<?php

return [
 'class' => 'yii\db\Connection',
 'dsn' => sprintf(
  'mysql:host=%s;dbname=%s',
  getenv('DB_HOST') ?: 'db',
  getenv('DB_NAME') ?: 'url_shortener'
 ),
 'username' => getenv('DB_USER') ?: 'app',
 'password' => getenv('DB_PASSWORD') ?: 'secret',
 'charset' => 'utf8mb4',
 'enableSchemaCache' => !YII_DEBUG,
 'schemaCacheDuration' => 3600,
];
