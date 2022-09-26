<?php

use LVI\Fabbrica;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Http\Environment;
use Slim\Http\Uri;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

// Register component on container
$twig = Twig::create(__DIR__ . '/../templates', [
    'cache' => __DIR__ . '/../var/cache',
]);
$app->add(TwigMiddleware::create($app, $twig));

$app->get('/', function (Request $request, Response $response) {
    $view = Twig::fromRequest($request);

    return $view->render($response, 'index.html.twig');
})->setName('homepage');

$app->post('/', function (Request $request, Response $response) {
    $view = Twig::fromRequest($request);

    $body = $request->getParsedBody();
    if (isset($body['testo'])) {
        $fabbrica = new Fabbrica();
        $tradvttore = $fabbrica->costrvisci();

        $testo = $tradvttore->tradvci($body['testo']);
    } else {
        $testo = null;
    }

    return $view->render($response, 'index.html.twig', [
        'testo' => $testo,
    ]);
})->setName('homepage');

$app->run();