// https://comfenalcocursos2022.000webhostapp.com/Operadores_php_23_03_2022/api.php

let enviar = async function(){
    let confi = {
        method: "POST", 
        body: JSON.stringify({
            num1 : 6,
            num2: 6
        })
    }
    let peticion = await fetch("api.php", confi);
    let json = await peticion.text();
    document.body.innerHTML = json;
}
enviar();