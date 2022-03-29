// https://comfenalcocursos2022.000webhostapp.com/Operadores_php_23_03_2022/api.php

let from = document.querySelector("#OperadorLogicoAND");
from.addEventListener("submit", (e)=>{
    let input = Array.from(e.target);
    input.pop();
    let data = {};
    input.forEach(element => {
        data[element.id] = Number(element.value);
    });
    console.log(data);
    let confi = {
        method: from.method, 
        body: JSON.stringify(data)
    }
    enviar([from.action,confi]);
    e.preventDefault();
})

let enviar = async(confi)=>{
    let peticion = await fetch(...confi);
    let json = await peticion.text();
    document.querySelector(".mensaje").insertAdjacentHTML("beforeend", `${json} <br>`);
}


