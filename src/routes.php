<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
$app->get('/users/get', function (Request $req, Response $res, array $args) {
   
   $usuarios=[["id"=>1,"nombre"=>"Juan"],["id"=>2,"nombre"=>"Pedro"]];
   $res->withStatus(200);
   $res->withHeader('Content-Type','application/Json');
	$body=$res->getBody();
	$body->write(json_encode($usuarios));

	$query=UsersQuery::create();
	echo $query->toString();
	die();
});
