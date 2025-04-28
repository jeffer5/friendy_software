// Función que muestra y oculta diferentes secciones del formulario dependiendo del valor seleccionado
function campos(value) {
    // Si se selecciona "Consultar", muestra la sección de consulta y oculta las demás
    if( value == "Consultar"){
        document.getElementById("Consultar").style.display = "block";  // Muestra la sección "Consultar"
        document.getElementById("Listar").style.display = "none";      // Oculta la sección "Listar"
        document.getElementById("Actualizar").style.display = "none";  // Oculta la sección "Actualizar"
        document.getElementById("Eliminar").style.display = "none";    // Oculta la sección "Eliminar"
    }
    // Si se selecciona "Listar", muestra la sección de lista y oculta las demás
    else if( value == "Listar"){
        document.getElementById("Consultar").style.display = "none";    // Oculta la sección "Consultar"
        document.getElementById("Listar").style.display = "block";     // Muestra la sección "Listar"
        document.getElementById("Actualizar").style.display = "none";  // Oculta la sección "Actualizar"
        document.getElementById("Eliminar").style.display = "none";    // Oculta la sección "Eliminar"
    }
    // Si se selecciona "Actualizar", muestra la sección de actualización y oculta las demás
    else if( value == "Actualizar"){
        document.getElementById("Consultar").style.display = "none";    // Oculta la sección "Consultar"
        document.getElementById("Listar").style.display = "none";      // Oculta la sección "Listar"
        document.getElementById("Actualizar").style.display = "block"; // Muestra la sección "Actualizar"
        document.getElementById("Eliminar").style.display = "none";    // Oculta la sección "Eliminar"
    }
    // Si se selecciona "Eliminar", muestra la sección de eliminación y oculta las demás
    else if( value == "Eliminar"){
        document.getElementById("Consultar").style.display = "none";    // Oculta la sección "Consultar"
        document.getElementById("Listar").style.display = "none";      // Oculta la sección "Listar"
        document.getElementById("Actualizar").style.display = "none";  // Oculta la sección "Actualizar"
        document.getElementById("Eliminar").style.display = "block";   // Muestra la sección "Eliminar"
    }
}

// Función para mostrar un mensaje de agradecimiento al cerrar sesión
function cerrar(){
    alert("Gracias, vuelve pronto");  // Muestra una alerta al usuario
}

// Función similar a 'campos', pero con las opciones para las órdenes
function camposu(value) {
    // Si se selecciona "registrar_orden", muestra la sección de registrar orden
    if( value == "registrar_orden"){
        document.getElementById("registrar_orden").style.display = "block";  // Muestra la sección "registrar_orden"
        document.getElementById("listar_orden").style.display = "none";     // Oculta la sección "listar_orden"
        document.getElementById("actualizar_orden").style.display = "none";  // Oculta la sección "actualizar_orden"
        document.getElementById("eliminar_orden").style.display = "none";    // Oculta la sección "eliminar_orden"
    }
    // Si se selecciona "listar_orden", muestra la sección de listar orden
    else if( value == "listar_orden"){
        document.getElementById("registrar_orden").style.display = "none";   // Oculta la sección "registrar_orden"
        document.getElementById("listar_orden").style.display = "block";    // Muestra la sección "listar_orden"
        document.getElementById("actualizar_orden").style.display = "none"; // Oculta la sección "actualizar_orden"
        document.getElementById("eliminar_orden").style.display = "none";   // Oculta la sección "eliminar_orden"
    }
    // Si se selecciona "actualizar_orden", muestra la sección de actualización de orden
    else if( value == "actualizar_orden"){
        document.getElementById("registrar_orden").style.display = "none";   // Oculta la sección "registrar_orden"
        document.getElementById("listar_orden").style.display = "none";     // Oculta la sección "listar_orden"
        document.getElementById("actualizar_orden").style.display = "block";// Muestra la sección "actualizar_orden"
        document.getElementById("eliminar_orden").style.display = "none";   // Oculta la sección "eliminar_orden"
    }
    // Si se selecciona "eliminar_orden", muestra la sección de eliminar orden
    else if( value == "eliminar_orden"){
        document.getElementById("registrar_orden").style.display = "none";   // Oculta la sección "registrar_orden"
        document.getElementById("listar_orden").style.display = "none";     // Oculta la sección "listar_orden"
        document.getElementById("actualizar_orden").style.display = "none"; // Oculta la sección "actualizar_orden"
        document.getElementById("eliminar_orden").style.display = "block";  // Muestra la sección "eliminar_orden"
    }
}

// Función similar a las anteriores pero para los estándares
function campose(value) {
    // Si se selecciona "registrar_estandar", muestra la sección de registrar estándar
    if( value == "registrar_estandar"){
        document.getElementById("registrar_estandar").style.display = "block";  // Muestra la sección "registrar_estandar"
        document.getElementById("listar_estandar").style.display = "none";     // Oculta la sección "listar_estandar"
        document.getElementById("actualizar_estandar").style.display = "none";  // Oculta la sección "actualizar_estandar"
        document.getElementById("eliminar_estandar").style.display = "none";    // Oculta la sección "eliminar_estandar"
    }
    // Si se selecciona "listar_estandar", muestra la sección de listar estándar
    else if( value == "listar_estandar"){
        document.getElementById("registrar_estandar").style.display = "none";   // Oculta la sección "registrar_estandar"
        document.getElementById("listar_estandar").style.display = "block";    // Muestra la sección "listar_estandar"
        document.getElementById("actualizar_estandar").style.display = "none"; // Oculta la sección "actualizar_estandar"
        document.getElementById("eliminar_estandar").style.display = "none";   // Oculta la sección "eliminar_estandar"
    }
    // Si se selecciona "actualizar_estandar", muestra la sección de actualización de estándar
    else if( value == "actualizar_estandar"){
        document.getElementById("registrar_estandar").style.display = "none";   // Oculta la sección "registrar_estandar"
        document.getElementById("listar_estandar").style.display = "none";     // Oculta la sección "listar_estandar"
        document.getElementById("actualizar_estandar").style.display = "block";// Muestra la sección "actualizar_estandar"
        document.getElementById("eliminar_estandar").style.display = "none";   // Oculta la sección "eliminar_estandar"
    }
    // Si se selecciona "eliminar_estandar", muestra la sección de eliminar estándar
    else if( value == "eliminar_estandar"){
        document.getElementById("registrar_estandar").style.display = "none";   // Oculta la sección "registrar_estandar"
        document.getElementById("listar_estandar").style.display = "none";     // Oculta la sección "listar_estandar"
        document.getElementById("actualizar_estandar").style.display = "none"; // Oculta la sección "actualizar_estandar"
        document.getElementById("eliminar_estandar").style.display = "block";  // Muestra la sección "eliminar_estandar"
    }
}

// Función para llenar los campos de la orden automáticamente cuando se selecciona un id
function llenarInputs(){
    // Obtiene el id de la orden seleccionada
    const id = document.getElementById('orden').value;

    // Si existen datos para el id seleccionado, los llena en los campos
    if (datos[id]) {
        document.getElementById('nro_ord').value = datos[id]['nro_ord'];
        document.getElementById('fec_ent').value = datos[id]['fec_ent'];
        document.getElementById('nom_pro').value = datos[id]['nom_pro'];
        document.getElementById('can_tot').value = datos[id]['can_tot'];
        document.getElementById('pro_ord').value = datos[id]['pro_ord'];
    } else {
        // Si no hay datos, vacía los campos
        document.getElementById('nro_ord').value = '';
        document.getElementById('fec_ent').value = '';
        document.getElementById('nom_pro').value = '';
        document.getElementById('can_tot').value = '';
        document.getElementById('pro_ord').value = '';
    }
}

// Función similar para llenar los campos del estándar cuando se selecciona un id
function llenarInputsp(){
    const id = document.getElementById('estandar').value;

    if (dat[id]) {
        document.getElementById('pro_pro').value = dat[id]['pro_pro'];
        document.getElementById('act_pro').value = dat[id]['act_pro'];
    } else {
        // Si no hay datos, vacía los campos
        document.getElementById('pro_pro').value = '';
        document.getElementById('act_pro').value = '';
    }
}
