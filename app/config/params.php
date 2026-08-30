<?php

return [
 'cookieValidationKey' => getenv('COOKIE_KEY') ?: 'dev-insecure-key-change-me',
 'redisHost' => getenv('REDIS_HOST') ?: 'redis',
 'redisPort' => (int)(getenv('REDIS_PORT') ?: 6379),
 'baseUrl' => getenv('BASE_URL') ?: 'http://localhost:8090',
 'rateLimit' => [
  'requests' => 30,
  'windowSeconds' => 60,
 ],
];
