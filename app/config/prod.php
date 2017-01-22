<?php
// Bootstrap
$app = new Silex\Application();

// Set the environment
$app['env'] = 'prod';

return $app;