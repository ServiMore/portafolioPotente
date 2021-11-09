function Login() {
  var done = 0;
  var usuario = document.login.usuario.value;
  var password = document.login.password.value;
  if (usuario == "admin" && password == "1234") {
    window.location = "portafolio_miguel/mainPage.html";
  }
  if (usuario == "admin2" && password == "pass2") {
    window.location = "registro.html";
  }
  else{
  }
}