<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json;charset=utf-8");
    $obj = (object) [
        "server" => (string) $_SERVER["HTTP_HOST"],
        "formulario" => json_decode(file_get_contents("php://input"))
    ];

    switch (strtoupper($obj->formulario->opcion)) {
        case 'SUMA':
            $obj->Suma = (int) ($obj->formulario->num1 + $obj->formulario->num2);
            break;
        case 'RESTA':
            $obj->Resta = (int) ($obj->formulario->num1 - $obj->formulario->num2);
            break;
        case 'MULTIPLICACION':
            $obj->Multiplicacion = (int) ($obj->formulario->num1 * $obj->formulario->num2);
            break;
        case 'EXPONENCIALIZACION':
            $obj->Exponencializacion = (int) ($obj->formulario->num1 ** $obj->formulario->num2);
            break;
        case 'DIVISION':
            $obj->Division = (float) ($obj->formulario->num1 / $obj->formulario->num2);
            break;
        case 'MODULO':
            $obj->Modulo = (int) ($obj->formulario->num1 % $obj->formulario->num2);
            break;
        default:
            $obj->No = (string) " encontrada :(";
            break;
    }



    print_r(json_encode($obj, JSON_PRETTY_PRINT));




?>