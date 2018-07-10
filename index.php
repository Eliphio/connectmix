<?php

require __DIR__ . '/vendor/autoload.php';

use connectmix\entidades\Task;
use connectmix\controle\TaskController;

$app = new \Slim\Slim();

$taskCtrl = new TaskController();

$app->get('/', function() {
	echo json_encode ( [
			"api" => "Chamados",
			"version" => "1.0.0"
	] );
} );

$app->get('/task(/(:id))', function ($id = null) use  ($taskCtrl){
    echo json_encode($taskCtrl->get($id));
});

$app->post('/', function () use  ($taskCtrl){
	$app = \Slim\Slim::getInstance();
	$json = json_decode($app->request()->getBody());
	echo json_encode($taskCtrl->insert($json));
} );

$app->put('/', function () {
	$app = \Slim\Slim::getInstance();
	$json = json_decode($app->request()->getBody());
	echo json_encode($taskCtrl->update($json));
} );

$app->delete('/:id', function () {
	echo "DELETE\n";
} );

$app->run ();

?>
