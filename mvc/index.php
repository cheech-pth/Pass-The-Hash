<?php

require_once __DIR__ . '/vendor/autoload.php';
use app\core\Application;

$app = new Application();

# if / (webroot) is accessed do this
$app->router->get('/', function() {
    return 'routed';
});

$app->run();














?>