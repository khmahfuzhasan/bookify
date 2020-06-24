const registerform 				= document.querySelector('#registerForm');
const name 				= document.querySelector('#name');
const username 				= document.querySelector('#username');
const email 			= document.querySelector('#email');
const password 			= document.querySelector('#password');
const signup 			= document.querySelector('#signup');

const nameError 		= document.querySelector('.nameError');
const usernameError 	= document.querySelector('.usernameError');
const emailError 		= document.querySelector('.emailError');
const passwordError 	= document.querySelector('.passwordError');

let   nameStatus		= true;	
let   usernameStatus	= true;	
let   emailStatus		= true;	
let   passwordStatus	= true;	

const alertSuccess 		= document.querySelector('.success');
const alertDanger 		= document.querySelector('.danger');

// Set EventListener

if(registerform !== null){

registerform.addEventListener('submit',function(event){
	event.preventDefault();

	// Name Field Validations
	if (Empty(name,"Name",nameError)) {
		if (NotInt(name,"Full Name",nameError)) {
				if(Minchar(name,"Full Name", nameError, 3)){
					nameStatus	= false;
					
				//Minchar function close
				}else{
					nameStatus	= true;
				}
		// NotInt function close			
		}else{
			nameStatus	= true;
		}
	//Emptyfunction close
	}else{
		nameStatus	= true;	
	}
	// User Name Field Validations
	if (Empty(username,"Username",usernameError)) {
			if(Minchar(username,"username", usernameError, 5)){
				if(userValidation(username,"username", usernameError)){
					usernameStatus	= false;		
				}else{
					usernameStatus	= true;	
				}
			//Minchar function close
			}else{
				usernameStatus	= true;
			}
	//Emptyfunction close
	}else{
		usernameStatus	= true;	
	}
	// Email Field Validations
	if (Empty(email,"Email",emailError)) {
		if (invalidEmail(email,"Email", emailError)) {
			emailStatus	= false;
		// invalit fucntion close
		}else{
			emailStatus	= true;	
		}
	//empty function close
	}else{
		emailStatus	= true;	
	}

	// Password Field Validations
	if (Empty(password,"Password",passwordError)) {
		passwordStatus	= false;
	//empty function close
	}else{
		passwordStatus	= true;	
	}
if(nameStatus || emailStatus || passwordStatus || usernameStatus){
	alertSuccess.style.display = "none";
	alertDanger.style.display = "inherit";
	alertDanger.innerHTML ="<strong>Error!</strong> One or more Fields are empty!";
}else{
	Register(name,username,email,password,alertSuccess,alertDanger,signup);
}

});

} //form exist check close