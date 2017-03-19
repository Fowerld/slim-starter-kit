<?php
require __DIR__.'/../vendor/autoload.php';

use \Slim\App;

$settings = require __DIR__.'/../app/settings.php';

$app = new App($settings);

require __DIR__ . '/../app/dependencies.php';

require  __DIR__ . '/../app/routes.php';

$app->run();