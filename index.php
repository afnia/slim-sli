<?php
/**
 * Slim CLI
 */
require __DIR__ . '/vendor/autoload.php';


if (PHP_SAPI == 'cli') {

    /**
     * Mocking Router
     */
    $argv = $GLOBALS['argv'];
    array_shift($argv);
    $pathInfo = implode('/', $argv);
    $env = \Slim\Http\Environment::mock(['REQUEST_URI' => '/' . $pathInfo]);
    $settings['environment'] = $env;

    $app = new \Slim\App($settings);

    require __DIR__ . '/app/dependencies.php';
    require __DIR__ . '/app/router.php';

    $app->run();
}
