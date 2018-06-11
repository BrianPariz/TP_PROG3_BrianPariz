<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Firebase\JWT\JWT;

require './vendor/autoload.php';
require './Clases/HeladoApi.php';

try {
    $app = new \Slim\App;

    //get: trae
    //post: inserta
    //put: modifica
    //delete: borra

    $app->group('/helado', function() {

        $this->get('[/]', \HeladoApi::class . ':TraerUno');//si se pone entre [] es opcional

    });
    $app->run();

}
catch(Exception $exception) {
    echo("Ocurrió un error: ".$exception->getMessage());
}
?>