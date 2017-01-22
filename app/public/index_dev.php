<?php
// Composer autoload
require_once __DIR__.'/../vendor/autoload.php';

// App
$app = require __DIR__.'/../config/dev.php';

// Routes
require __DIR__.'/../config/routes.php';

// Run Forest, Run!
$app->run();