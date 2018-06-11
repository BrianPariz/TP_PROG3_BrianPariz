<?php

require './Clases/Helado.php';
require './Clases/IApiUsable.php';
require './Token.php';    

class HeladoApi extends Helado implements IApiUsable
{
    public function TraerUno($request, $response, $args) {
        //se trae de la base

        $token = MostrarToken();
        $response->getBody()->write($token);
        
        return $response;
    }
}