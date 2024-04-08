<?php
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/controllers/AlunniController.php';

$app = AppFactory::create();

$app->get('/alunni', "AlunniController:getAlunni");
$app->get('/alunni/{id}', "AlunniController:getAlunniPerID");
$app->post('/alunni', "AlunniController:postAggiungiAlunno");
$app->put('/alunni/{id}', "AlunniController:putAlunniPerId");
$app->delete('/alunni/{id}', "AlunniController:deleteAlunni");

$app->run();
