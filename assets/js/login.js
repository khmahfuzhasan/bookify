//select input

const loginForm 		= document.getElementById('login');
const user			= document.getElementById('user');
const password 			= document.getElementById('password');

// Select error Class
const userError 		= document.querySelector('.userError');
const passwordError 	= document.querySelector('.passwordError');

const alertDanger 		= document.querySelector('.danger');
//const alertsuccess		= document.querySelector('.success');
const signIn = document.getElementById('signin');
// status
let emailStatus = true;
let passwordStatus = true;

loginForm.addEventListener('submit', (event)=>{
	event.preventDefault();
	//Email Validations
	if(Empty(user,'username or Email',userError)){
		if(loginuserValidation(user,'User',userError)){
			emailStatus = false;
		}else{
			emailStatus = true;
		}
	}else{
		emailStatus = true;
	}
	//Password Validations
	if(Empty(password,'Password',passwordError)){
		passwordStatus = false;
	}else{
		passwordStatus = true;
	}	

if(emailStatus || passwordStatus){
	alertDanger.style.display = "block";
	alertDanger.querySelector("p").innerHTML ="<strong>Error!</strong> Fields are empty!";
}else{
	exist(user,password,alertDanger,signIn);
}

}); //End Event