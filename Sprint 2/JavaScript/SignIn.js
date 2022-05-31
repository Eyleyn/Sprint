//variables
var pass = document.getElementById("myPassword");
var confirmP = document.getElementById("confirmPassword");
var username = document.getElementById("user");
var emailadd = document.getElementById("email");

function signUp(){
	if(confirmP.value === pass.value && username.value != "" && emailadd.value != ""){
		window.location.href='file:///C:/Users/leonila/Desktop/KOMSAI/UP202004905/2ND%20YEAR%20NOTES/2nd%20SEM/CMSC%20126%20Sec%20%201/LABORATORY/SPRINT%202/Dashboard.html' ;
	}
	else{
		alert("Invalid try again...");
		pass.value = null;
		confirmP.value = null;
		username.value = null;
		emailadd.value = null;
	}
}

function goDash(){
	window.location.href='file:///C:/Users/leonila/Desktop/KOMSAI/UP202004905/2ND%20YEAR%20NOTES/2nd%20SEM/CMSC%20126%20Sec%20%201/LABORATORY/SPRINT%202/Dashboard.html' ;
}

function AboutUs(){
	window.location.href='file:///C:/Users/leonila/Desktop/KOMSAI/UP202004905/2ND%20YEAR%20NOTES/2nd%20SEM/CMSC%20126%20Sec%20%201/LABORATORY/SPRINT%202/AboutUs.html' ;
}

function password() {
  var x = document.getElementById("myPassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}