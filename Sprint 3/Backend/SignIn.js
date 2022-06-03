//variables
var pass = document.getElementById("myPassword");
var confirmP = document.getElementById("confirmPassword");
var username = document.getElementById("user");
var emailadd = document.getElementById("email");

function signUp(){
	if(confirmP.value === pass.value && username.value != "" && emailadd.value != ""){
		window.location.href='http://localhost/sample/Dashboard.php' ;
	}
	else{
		alert("Invalid try again...");
		pass.value = null;
		confirmP.value = null;
		username.value = null;
		emailadd.value = null;
	}
}

function password() {
  var x = document.getElementById("myPassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
