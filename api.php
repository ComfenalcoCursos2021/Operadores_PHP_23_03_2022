<?php
    header('Access-Control-Allow-Origin: *');
    // header("Content-type: application/json;charset=utf-8");
    $obj = (object) [
        "server" => (string) $_SERVER["HTTP_HOST"],
        // "JS" => json_decode(file_get_contents("php://input")),
        "JS" => (object) ["num1" => (int) 5, "num2" => (int) 5]
    ];
                              //(int) 5      igial  //  (int) 5   true
    $obj->igualdad = (bool) ($obj->JS->num1 == $obj->JS->num2);
    $obj->identico = (bool) ($obj->JS->num1 === $obj->JS->num2);
    $obj->diferente = (bool) ($obj->JS->num1 != $obj->JS->num2);
    $obj->no_identico = (bool) ($obj->JS->num1 !== $obj->JS->num2);
    $obj->menor = (bool) ($obj->JS->num1 < $obj->JS->num2);
    $obj->mayor = (bool) ($obj->JS->num1 > $obj->JS->num2);
    $obj->menor_igual = (bool) ($obj->JS->num1 <= $obj->JS->num2);
    $obj->mayor_igual = (bool) ($obj->JS->num1 >= $obj->JS->num2);


    // var_dump(json_encode($obj, JSON_PRETTY_PRINT));

    var_dump((array) $obj);



?>