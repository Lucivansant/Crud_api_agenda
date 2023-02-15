<?php
header('content-type: application/json');
header('Access-Control-Allow-Origin: *');

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Routing\RouteCollectorProxy;

require __DIR__ . './vendor/autoload.php';
require_once './App/Config_conect/Conect.php';
require_once './App/Controllers/Controller.php';


$app = AppFactory::create();


$app->group('/v1', function (RouteCollectorProxy $group) {
    $group->get('/Recuperar_registros', function (Request $request, Response $response, $args) {

        // OK
        $conexao = new Conexao();
        $controller = new Controller_api($conexao);
        $Result = $controller->Recuperar();
        $Json_encode = json_encode($Result);

        $response->getBody()->write($Json_encode);
        return $response;
    });

    $group->post('/Adicionar_registros', function (Request $request, Response $response, $args) {

        // OK
        $Post = $request->getParsedBody();
        $nome = $Post['nome'];
        $email = $Post['email'];
        $numero = $Post['numero'];
        $descri = $Post['desc'];


        $conexao = new Conexao();
        $controller = new Controller_api($conexao);
        $controller->Adicionar($nome, $email, $numero, $descri);

        $response->getBody()->write("Adicionando os registros");
        return $response;
    });

    $group->any('/Atualizar_registros', function (Request $request, Response $response, $args) {
        // OK
        $New_Post = $request->getParsedBody();
        $new_number = $New_Post['new_number'];
        $id = $New_Post['id'];

        $conexao = new Conexao();
        $controller = new Controller_api($conexao);
        $controller->Atualizar($new_number, $id);
        $response->getBody()->write("Atualizando o registros");
        return $response;
    });

    $group->any('/Deletar_registros', function (Request $request, Response $response, $args) {
        // OK
        $id_delete = $request->getParsedBody();
        $id = $id_delete['delete'];

        $conexao = new Conexao();
        $controller = new Controller_api($conexao);
        $controller->Deletar($id);

        $response->getBody()->write("Deletando o registro de ID = " . $id);
        return $response;
    });
});


$app->run();
