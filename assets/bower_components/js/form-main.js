$(document).ready(function() {

	var password = document.getElementById("new-password")
  , confirm_password = document.getElementById("confirm-new-password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Password doesn't match.");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;



});

function signupEye() {
	var abc = document.getElementById("new-password");

	if (abc.type === "password"){
		abc.type = "text";}

	else{
	abc.type = "password";}
}


function loginEye() {
	var abc = document.getElementById("user-password");

	if (abc.type === "password"){
		abc.type = "text";}

	else{
	abc.type = "password";}
}
