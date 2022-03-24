<?php
    header("Content-type: application/json");
    $obj = (object) [
        "num" => (int) rand(1, 50)
    ];
    $obj->resultado = $obj->num;

    // $num = (int) 23;
    // $num = (int) rand(1, 50);
    // $resultado = (int) $num;



    print_r(json_encode($obj, JSON_PRETTY_PRINT));
    // print_r($obj);

?>