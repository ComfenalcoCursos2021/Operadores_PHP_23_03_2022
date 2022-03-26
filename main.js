// https://comfenalcocursos2022.000webhostapp.com/Operadores_php_23_03_2022/api.php
let solicitar = async function(){
    let peticion = await fetch("api.php");
    let json = await peticion.text();
    console.log(json);
}
let mensaje = document.querySelector(".mensaje");
let enviar = async function(json, metodo){
    let confi = {
        method: metodo, 
        body: JSON.stringify(json)
    }
    let peticion = await fetch("api.php", confi);
    let res = await peticion.json();
    let keys = Object.keys(res);
    let plantilla = `El ${keys[0]} : '${res[keys[0]]}' realizo la siguiente operacion ${keys[2]} : ${res[keys[2]]}`;
    mensaje.insertAdjacentText("beforeend", plantilla);
}
let formulario = document.querySelector("#Myform");
let botones = document.querySelector("#procesos");

botones.addEventListener("click", function(e){
    if(e.target.dataset.opcion != undefined){
        mensaje.innerHTML = "";
        let form = Array.from(formulario);
        form.pop();
        let json = {};
        form.forEach(input => {
            if(input.type == "number"){
                json[input.id] = parseInt(input.value);
            }
        });
        json.opcion = e.target.dataset.opcion;
        enviar(json, formulario.method);
    }
    e.preventDefault();
})