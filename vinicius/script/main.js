function validateRegisterUserPassword() {
  var password = document.forms['register']['inputPassword'].value;
  var passwordRetry = document.forms['register']['inputPasswordRetry'].value;
  if(password != passwordRetry) {
    showMessage("errorMessage", "Senhas não coincidem. Digite novamente.");
    document.forms['register']['inputPasswordRetry'].value = '';
    document.forms['register']['inputPasswordRetry'].focus();
    return false;
  }
  return true;
}

function showMessage(id, message) {
  document.getElementById(id).innerHTML = message;
}

function changeColor(id){
  document.getElementById(id).style.color = "#95dd07";
}