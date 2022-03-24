<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json;charset=utf-8");
    $obj = (object) [
        "server" => (string) $_SERVER["HTTP_HOST"]
    ];
    $num1 = (int) rand(1,50);
    $num2 = (float) (mt_rand(1,50).".".mt_rand(100,999));


    $obj->resta = (float) number_format(($num1 - $num2), 3);

    $obj->num2 = $num2;

    $num2 -= $num1;
    // settype($num2, "int");


    $obj->num1 = $num1;
    // $obj->resta = (float) number_format($num2, 3);
    print_r(json_encode($obj, JSON_PRETTY_PRINT));


?>