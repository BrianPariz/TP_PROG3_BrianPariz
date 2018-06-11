<?php

use firebase\JWT\JWT;

function MostrarToken() {
    $key = "clave1234";
    $token = array(
        "iss" => "http://example.org",
        "aud" => "http://example.com",
        "iat" => 1356999524,
        "nbf" => 1357000000
    );
    
    return JWT::encode($token, $key);
    //$decoded = JWT::decode($jwt, $key, array('HS256'));
}