<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json;charset=utf-8");
    $_DATA = (object) json_decode(file_get_contents("php://input"));
    // true                   false
    //  1  infinite             0
    // -1  infinite
    // " "                      ""
    // "Palabras o letras"              
    //  [""]                    []
    // new stdClass();
    // (object) []
    $_DATA->SERVER = (string) $_SERVER["HTTP_HOST"];
    $_DATA->A_AND_B = (int) ($_DATA->A and $_DATA->B) ? 1 : 0;


    echo(json_encode($_DATA, JSON_PRETTY_PRINT));



?>