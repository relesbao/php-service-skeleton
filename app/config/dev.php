<?php

$app = require __DIR__ . '/prod.php';
$app['env'] = 'dev';
$app['debug'] = true;

return $app;