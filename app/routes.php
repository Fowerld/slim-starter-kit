<?php
/**
 * Define application routes
 * @link https://www.slimframework.com/docs/objects/router.html
 */

$app->get('/', App\Controller\IndexController::class.':helloworld');
$app->get('/{name}', App\Controller\IndexController::class.':welcome');
