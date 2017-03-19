<?php
/**
 * Inject application dependencies (database, logger, ...)
 *
 * Example :
 * $container['myService'] = function ($container) {
 *     $myService = new MyService();
 *     return $myService;
 * };
 *
 * @link https://www.slimframework.com/docs/concepts/di.html
**/

$container = $app->getContainer();
