function validar_alta() {
  // Valido el nombre de usuario
  var username = document.getElementById("user").value;
  if(username == null || username.length == 0) {
    alert("ERROR: Nombre de usuario no introducido");
    return false;
  }
  if(username.length > 15) {
      alert("ERROR: Nombre de usuario demasiado largo");
      return false;
  }
  // Evito ataques de inyección de código SQL al introducir el nombre de usuario
  // comprobando que no se introducen sentencias SQL
  var exp1 = new RegExp(";");
  var exp2 = new RegExp("=");
  var exp3 = new RegExp("'");
  if(exp1.test(username) || exp2.test(username) || exp3.test(username)) {
      alert("ERROR: Nombre de usuario no válido");
      return false;
  }

  // Valido el nombre
  var name = document.getElementById("nombre").value;
  if(name == null || name.length == 0) {
    alert("ERROR: Nombre no introducido");
    return false;
  }
  if(name.length > 20) {
      alert("ERROR: Nombre demasiado largo");
      return false;
  }

  // Valido los apellidos
  var surname = document.getElementById("apellidos").value;
  if(surname == null || surname.length == 0) {
    alert("ERROR: Apellidos no introducidos");
    return false;
  }
  if(surname.length > 25) {
      alert("ERROR: Apellidos demasiados largos");
      return false;
  }

  // Valido el email
  var email = document.getElementById("correo").value;
  if(email == null || email.length == 0) {
    alert("ERROR: Email no introducido");
    return false;
  }
  if(email.length > 35) {
      alert("ERROR: Email demasiado largo");
      return false;
  }
  if(!(/\w+@+\w+\.+[a-z]/.test(email))) {
      alert("ERROR: Formato de email no válido");
      return false;
  }

  // Valido la contraseña
  var password = document.getElementById("pass").value;
  if(password == null || password.length == 0) {
    alert("ERROR: Contraseña no introducida");
    return false;
  }
  if(password.length > 15) {
      alert("ERROR: Contraseña demasiado larga");
      return false;
  }

  // Compruebo que la contraseña repetida es igual a la original
  var password1 = document.getElementById("contra1").value;
  if(password1 != password) {
    alert("ERROR: Las contraseñas no coinciden");
    return false;
  }

  // Valido la fecha de nacimiento
  var fecha_nac = document.getElementById("fechanac").value;
  if(fecha_nac == null || fecha_nac.length == 0) {
    alert("ERROR: Fecha de nacimiento no introducida");
    return false;
  }
  else {
    var datos = fecha_nac.split("-");
    var anio = parseInt(datos[0]);
    if(anio < 1900 || anio > 2000) {
      alert("ERROR: No se pueden registrar en el centro deportivo personas nacidas antes de 1900 o después del año 2000");
      return false;
    }
  }

  // Valido la foto
  var photo = document.getElementById("foto").value;
  if(photo == null || photo.length == 0) {
    alert("ERROR: Foto no introducida");
    return false;
  }
  var expr1 = new RegExp(".gif","i");
  var expr2 = new RegExp(".jpeg","i");
  var expr3 = new RegExp(".jpg","i");
  var expr4 = new RegExp(".png","i");
  var expr5 = new RegExp(".bmp","i");
  if(!(expr1.test(photo)) && !(expr2.test(photo)) && !(expr3.test(photo)) && !(expr4.test(photo)) && !(expr5.test(photo)) ) {
      alert("ERROR: Foto no válida");
      return false;
  }

  return true;
}

function validar_perfil() {
  // Valido el nombre
  var name = document.getElementById("nombre").value;
  if(name == null || name.length == 0) {
    alert("ERROR: Nombre no introducido");
    return false;
  }
  if(name.length > 20) {
      alert("ERROR: Nombre demasiado largo");
      return false;
  }

  // Valido los apellidos
  var surname = document.getElementById("apellidos").value;
  if(surname == null || surname.length == 0) {
    alert("ERROR: Apellidos no introducidos");
    return false;
  }
  if(surname.length > 25) {
      alert("ERROR: Apellidos demasiados largos");
      return false;
  }

  // Valido el email
  var email = document.getElementById("correo").value;
  if(email == null || email.length == 0) {
    alert("ERROR: Email no introducido");
    return false;
  }
  if(email.length > 35) {
      alert("ERROR: Email demasiado largo");
      return false;
  }
  if(!(/\w+@+\w+\.+[a-z]/.test(email))) {
      alert("ERROR: Formato de email no válido");
      return false;
  }

  // Valido la contraseña
  var password = document.getElementById("contra").value;
  if(password.length > 15) {
      alert("ERROR: Contraseña demasiado larga");
      return false;
  }

  // Compruebo que la contraseña repetida es igual a la original
  var password1 = document.getElementById("contra1").value;
  if(password1 != password) {
    alert("ERROR: Las contraseñas no coinciden");
    return false;
  }

  // Valido la fecha de nacimiento
  var fecha_nac = document.getElementById("fechanac").value;
  if(fecha_nac == null || fecha_nac.length == 0) {
    alert("ERROR: Fecha de nacimiento no introducida");
    return false;
  }
  else {
    var datos = fecha_nac.split("-");
    var anio = parseInt(datos[0]);
    if(anio < 1900 || anio > 2000) {
      alert("ERROR: No se pueden registrar en el centro deportivo personas nacidas antes de 1900 o después del año 2000");
      return false;
    }
  }

  // Valido la foto
  var photo = document.getElementById("photo").value;
  if(photo != null && photo.length != 0) {
    var expr1 = new RegExp(".gif","i");
    var expr2 = new RegExp(".jpeg","i");
    var expr3 = new RegExp(".jpg","i");
    var expr4 = new RegExp(".png","i");
    var expr5 = new RegExp(".bmp","i");
    if(!(expr1.test(photo)) && !(expr2.test(photo)) && !(expr3.test(photo)) && !(expr4.test(photo)) && !(expr5.test(photo)) ) {
        alert("ERROR: Foto no válida");
        return false;
    }
  }

  return true;
}

function validar_sesion() {
  // Valido el username
  var username = document.getElementById("username").value;
  if(username == null || username.length == 0) {
    alert("ERROR: Nombre de usuario no introducido");
    return false;
  }
  if(username.length > 15) {
      alert("ERROR: Nombre de usuario demasiado largo");
      return false;
  }
  // Evito ataques de inyección de código SQL al introducir el nombre de usuario
  // comprobando que no se introducen sentencias SQL
  var exp1 = new RegExp(";");
  var exp2 = new RegExp("=");
  var exp3 = new RegExp("'");
  if(exp1.test(username) || exp2.test(username) || exp3.test(username)) {
      alert("ERROR: Nombre de usuario no válido");
      return false;
  }

  // Valido la contraseña
  var password = document.getElementById("contra").value;
  if(password == null || password.length == 0) {
    alert("ERROR: Contraseña no introducida");
    return false;
  }
  if(password.length > 15) {
      alert("ERROR: Contraseña demasiado larga");
      return false;
  }

  return true;
}

function validar_hilo() {
  // Validar el título
  var title = document.getElementById("titulo").value;
  if(title == null || title.length == 0) {
    alert("ERROR: Título no introducido");
    return false;
  }
  if(title.length > 50) {
      alert("ERROR: Título demasiado largo");
      return false;
  }

  // Validar la descripción
  var descripcion = document.getElementById("description").value;
  if(descripcion == null || descripcion.length == 0 || !/[a-z]|[0-9]/i.test(descripcion)) {
    alert("ERROR: Descripción no introducida");
    return false;
  }
  if(descripcion.length > 100) {
      alert("ERROR: Descripción demasiado larga");
      return false;
  }

  return true;
}

function validar_entrada(n){
  // Valido la descripción
  var elem = "respuesta" + n;
  var descripcion = document.getElementById(elem).value;
  if(descripcion == null || descripcion.length == 0 || !/[a-z]|[0-9]/i.test(descripcion)) {
    alert("ERROR: Descripción no introducida");
    return false;
  }
  if(descripcion.length > 100) {
      alert("ERROR: Descripción demasiado larga");
      return false;
  }

  return true;
}
