<?php
$container = $app->getContainer();

/*
$container['errorHandler'] = function ($container) {
    return function ($request, $response, $exception) use ($container) {
        print('error');
        exit(1);
    };
};
$container['notFoundHandler'] = function ($container) {
    return function ($request, $response) use ($container) {
        print('not_found');
        exit(1);
    };
};
*/

$container['hello'] = function ($c) {
    return 'hello cuk!';
};

$container[App\Controller\KopetController::class] = function ($c) {
    return new App\Controller\KopetController($c->hello);
};
