<?php 

require_once("vendor/autoload.php");//do composer para traser as dependencias 
//carrega as classes
use \Slim\Slim;
use \Hcode\Page;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {//qual as rotas estou chamando
    
    $page = new Page();

    $page->setTpl("index");
});

$app->run();//liga a ignição apos carregar faz rodar 

 ?>