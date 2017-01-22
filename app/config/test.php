<?php

$app = require __DIR__ . '/dev.php';
$app['env'] = 'test';

return $app;