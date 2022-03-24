let enviar = async function(){
    let peticion = await fetch("api.php");
    let json = await peticion.text();
    console.log(json);
}
enviar();