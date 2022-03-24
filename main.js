// https://comfenalcocursos2022.000webhostapp.com/Operadores_php_23_03_2022/api.php
let enviar = async function(){
    let peticion = await fetch("https://comfenalcocursos2022.000webhostapp.com/Operadores_php_23_03_2022/api.php");
    let json = await peticion.text();
    console.log(json);
    
}
enviar();