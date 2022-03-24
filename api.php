<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json");
    $obj = (object) [
        "server" => (string) $_SERVER["HTTP_HOST"]
    ];
    $num1 = (int) rand(1,50);
    $num2 = (float) 5.332;

    // $obj->suma = (int) ($num1 + $num2);

    $obj->num2 = $num2;

    $num2 += $num1;
    settype($num2, "int");


    $obj->num1 = $num1;
    $obj->suma = $num2;
    print_r(json_encode($obj, JSON_PRETTY_PRINT));


?>