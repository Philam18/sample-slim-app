<?php

require __DIR__ . '/vendor/autoload.php';

$app = new Slim\App;

$container = $app->getContainer();
$container['view'] = function ($container) {
    $templates = __DIR__ . '/templates/';
    // $cache = __DIR__ . '/tmp/views/';
		$cache = false;
    $view = new Slim\Views\Twig($templates, compact('cache'));

    return $view;
};

$app->get('/', function ($request, $response) {

		$title = 'This is my first application';
		$author = 'Philip Lam';
		$text = 'It uses the Slim framework with Twig-view templating engine';
		$steps = array(
			'An instance of Twig was injected in Slim\' dependency container to be used as a View Manager',
			'GET requests made to the application are served a template by Twig',
			'Twig is passed text-content from the Slim application itself; Twig handles purely the View templating'
		);

    return $this->view->render($response, 'home.twig',[
		 	'title' => $title,
			'author' => $author,
			'text' => $text,
			'steps' => $steps
		]);
});

$app->run();

$app->post('/', function($request, $response){
	return 'hello world from POST';
});



?>
