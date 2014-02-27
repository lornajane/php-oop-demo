<?php
require '../vendor/autoload.php';

spl_autoload_register(function ($classname) {
    require "../lib/" . str_replace('\\', DIRECTORY_SEPARATOR, $classname) . ".php";
});

// Prepare app
$app = new \Slim\Slim(array(
    'templates.path' => '../templates',
));

// Create monolog logger and store logger in container as singleton 
// (Singleton resources retrieve the same log resource definition each time)
$app->container->singleton('log', function () {
    $log = new \Monolog\Logger('slim-skeleton');
    $log->pushHandler(new \Monolog\Handler\StreamHandler('../logs/app.log', \Monolog\Logger::DEBUG));
    return $log;
});

// Prepare view
$app->view(new \Slim\Views\Twig());
$app->view->parserOptions = array(
    'charset' => 'utf-8',
    'auto_reload' => true,
    'strict_variables' => false,
    'autoescape' => true
);
$app->view->parserExtensions = array(new \Slim\Views\TwigExtension());

// Define routes
$app->get('/', function () use ($app) {
    // Sample log message
    $app->log->info("Slim-Skeleton '/' route");
    // Render index view
    $app->render('index.html');
});

$app->get('/hello', function() use ($app) {
    $app->render('hello.html', array("greeting" => "Hi there"));
});

$app->post('/hello', function() use ($app) {
    $user = new \MyProject\Person($app->request->post('name'));
    $app->render('hello.html', 
        array("greeting" => "Hi there",
        "user" => $user));
});

// Run app
$app->run();
