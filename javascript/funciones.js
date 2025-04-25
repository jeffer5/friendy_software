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



function camposu(value){

    if( value== "registrar_orden"){
        document.getElementById("registrar_orden").style.display = "block";
        document.getElementById("listar_orden").style.display = "none";
        document.getElementById("actualizar_orden").style.display = "none";
        document.getElementById("eliminar_orden").style.display = "none";
    }


    else if( value== "listar_orden"){
        document.getElementById("registrar_orden").style.display = "none";
        document.getElementById("listar_orden").style.display = "block";
        document.getElementById("actualizar_orden").style.display = "none";
        document.getElementById("eliminar_orden").style.display = "none";
    }

    else if( value== "actualizar_orden"){
        document.getElementById("registrar_orden").style.display = "none";
        document.getElementById("listar_orden").style.display = "none";
        document.getElementById("actualizar_orden").style.display = "block";
        document.getElementById("eliminar_orden").style.display = "none";

    }

    else if( value== "eliminar_orden"){
        document.getElementById("registrar_orden").style.display = "none";
        document.getElementById("listar_orden").style.display = "none";
        document.getElementById("actualizar_orden").style.display = "none";
        document.getElementById("eliminar_orden").style.display = "block";

    }

}

function campose(value){

    if( value== "registrar_estandar"){
        document.getElementById("registrar_estandar").style.display = "block";
        document.getElementById("listar_estandar").style.display = "none";
        document.getElementById("actualizar_estandar").style.display = "none";
        document.getElementById("eliminar_estandar").style.display = "none";
    }


    else if( value== "listar_estandar"){
        document.getElementById("registrar_estandar").style.display = "none";
        document.getElementById("listar_estandar").style.display = "block";
        document.getElementById("actualizar_estandar").style.display = "none";
        document.getElementById("eliminar_estandar").style.display = "none";
    }

    else if( value== "actualizar_estandar"){
        document.getElementById("registrar_estandar").style.display = "none";
        document.getElementById("listar_estandar").style.display = "none";
        document.getElementById("actualizar_estandar").style.display = "block";
        document.getElementById("eliminar_estandar").style.display = "none";

    }

    else if( value== "eliminar_estandar"){
        document.getElementById("registrar_estandar").style.display = "none";
        document.getElementById("listar_estandar").style.display = "none";
        document.getElementById("actualizar_estandar").style.display = "none";
        document.getElementById("eliminar_estandar").style.display = "block";

    }

}