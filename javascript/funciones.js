function campos(value){

    if( value== "Consultar"){
        document.getElementById("Consultar").style.display = "block";
        document.getElementById("Listar").style.display = "none";
        document.getElementById("Actualizar").style.display = "none";
        document.getElementById("Eliminar").style.display = "none";

    }


    else if( value== "Listar"){
        document.getElementById("Consultar").style.display = "none";
        document.getElementById("Listar").style.display = "block";
        document.getElementById("Actualizar").style.display = "none";
        document.getElementById("Eliminar").style.display = "none";
    }

    else if( value== "Actualizar"){
        document.getElementById("Consultar").style.display = "none";
        document.getElementById("Listar").style.display = "none";
        document.getElementById("Actualizar").style.display = "block";
        document.getElementById("Eliminar").style.display = "none";

    }

    else if( value== "Eliminar"){
        document.getElementById("Consultar").style.display = "none";
        document.getElementById("Listar").style.display = "none";
        document.getElementById("Actualizar").style.display = "none";
        document.getElementById("Eliminar").style.display = "block";

    }

}


function cerrar(){

    alert ("gracias, vuelvas prontos");



}