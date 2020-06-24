function Empty(inputName,label,errorClass){
	const fieldValue = inputName.value.trim();
	if (fieldValue == '') {		
		errorClass.innerHTML = label + " is required!";
		inputName.classList.add('borderRed');
		return false;
	}else{
		errorClass.innerHTML = "";
		inputName.classList.remove('borderRed');
		return true;	
	}

}

function NotInt(inputName,label,errorClass){
	const pregmatch = /^[a-zA-Z ]+$/;
	if (pregmatch.test(inputName.value.trim())) {
		errorClass.innerHTML = "";
		inputName.classList.remove('borderRed');
		return true;
	}else{
		errorClass.innerHTML = label + " required only alphabetical!";
		inputName.classList.add('borderRed');
		return false;
	}
}	


function Minchar(inputName, label, errorClass, min){
	const inpputValue = inputName.value.trim();
	if (inpputValue.length <min) {
		errorClass.innerHTML = label + " required minimum "+ min + " characters.";
		inputName.classList.add('borderRed');
		return false;
	}else{
		errorClass.innerHTML = "";
		inputName.classList.remove('borderRed');
		return true;
	}
}

function invalidEmail(inputName,label,errorClass){
	const inpputValue = inputName.value.trim();
	// khandaker_12345.stop@gmail.com
	const pregmatch = /^[a-zA-Z]+[0-9a-zA-Z_\.]*@[a-zA-Z]+\.[a-z]+$/;
	if (pregmatch.test(inpputValue)) {
		errorClass.innerHTML = "";
		inputName.classList.remove('borderRed');
		return true;
	}else{
		errorClass.innerHTML = label + " format invalid!";
		inputName.classList.add('borderRed');
		return false;
	}
}

function userValidation(userClass, label, errorClass){
	const userNameValue = userClass.value.trim();
	const userPreg = /^[a-z]+[a-z_0-9_.]*[a-z]+$/;
	if(userPreg.test(userNameValue)){
		errorClass.innerHTML = "";
		userClass.classList.remove('borderRed');
		return true;
	}else{
		errorClass.innerHTML = label + " must be alphabetical, lowercase and you can use only these characters[@_.]";
		userClass.classList.add('borderRed');
		return false;
	}
}

function loginuserValidation(userClass, label, errorClass){
	const userNameValue = userClass.value.trim();
	const userPreg = /^[a-z]+[a-z_0-9_.@]*[a-z]+$/;
	if(userPreg.test(userNameValue)){
		errorClass.innerHTML = "";
		userClass.classList.remove('borderRed');
		return true;
	}else{
		errorClass.innerHTML = label + " must be alphabetical, lowercase and you can use only these characters[@_.]";
		userClass.classList.add('borderRed');
		return false;
	}
}


// Register Account
function Register(name,username,email,password,alertSuccess,alertDanger,signup){
	const nameVal = name.value.trim();
	const userNameValue = username.value.trim();
	const emailVal = email.value.trim();
	const passwordVal = password.value.trim();
	$.ajax({
		type: 'POST',
		url: 'classes/register.class.php',
		data: {name:nameVal,userName:userNameValue,email:emailVal,password:passwordVal},
		beforeSend: ()=>{
			signup.value ="Processing...";
		},
		success: (response, status, object)=>{
			let res = JSON.parse(response);
			if(res.status){
				alertDanger.style.display="none";
				alertSuccess.style.display="block";
				signup.value="success ›";
				alertSuccess.innerHTML ='<div class="alert-icon"><div class="alertIcon">&check;</div></div>'+ res.message;
				signup.innerHTML ='<div class="alert-icon"><div class="alertIcon">&check;</div></div>'+ res.message;
				window.location = "login.php";
				timeOut();
			}else{
				alertSuccess.style.display="none";
				alertDanger.style.display="block";
				signup.value="Create account ›";
				alertDanger.innerHTML ='<div class="alert-icon"><div class="alertIcon">&times;</div></div>'+ res.message;
				timeOut();
			}
		}
	}).fail((object,status, error)=>{
	});
}

// Login User

function exist(user,password,alertDanger,signIn){
	const userVal		=  user.value.trim();
	const passwordVal	=  password.value.trim();
	$.ajax({
		type: 'POST',
		url: 'classes/login.class.php',
		beforeSend: ()=>{
			signIn.value = "loading...";
		},
		data:{
			user: userVal,
			password: passwordVal
		},
		success:(res,status,object)=>{
			let response = JSON.parse(res);
			

			if(response.status){
				alertDanger.style.display = "none";
				signIn.value = "success >";
				window.location = "dashboard.php";
				timeOut();
			}else{
				alertDanger.style.display = "block";
				alertDanger.querySelector("p").innerHTML = response.message;
				//signIn.value = "Login >";
				timeOut();
			}
			
		}

	}).fail((object,status, error)=>{
	});
}


function BookChar(input,label,errorClass){
		const inputVal = input.value.trim();
		const bookPreg = /^[a-zA-Z]+[a-zA-Z ]*$/;
		if(bookPreg.test(inputVal)){
			errorClass.innerHTML = "";
			input.classList.remove('borderRed');
			return true;
		}else{
			errorClass.innerHTML = label + " must not be integer!";
			input.classList.add('borderRed');
			return false;
		}
}
function BookPrice(input,label,errorClass){
		const inputVal = input.value.trim();
		const bookPreg = /^[0-9]+[0-9]*$/;
		if(bookPreg.test(inputVal)){
			if(inputVal <1){
				errorClass.innerHTML = label + " must be greater than 0!";
				input.classList.add('borderRed');
				return false;				
			}else{
				errorClass.innerHTML = "";
				input.classList.remove('borderRed');
				return true;				
			}

		}else{
			errorClass.innerHTML = label + " is only integer!";
			input.classList.add('borderRed');
			return false;
		}
}

function InsertBook(bookform,bookname,bookauth,bookprice,booksuccess,bookdanger,modalContainer){
	const booknameval = bookname.value.trim();
	const bookauthval = bookauth.value.trim();
	const bookpriceval = parseInt(bookprice.value.trim());
	$.ajax({
		type: 'POST',
		url: 'classes/books.class.php',
		beforeSend: ()=>{

		},
		data:{
			bookName:booknameval,
			bookAtuth:bookauthval,
			bookPrice:bookpriceval
		},
		success: (response,status,object) =>{
			let res = JSON.parse(response);
			if(res.status){
				modalContainer.style.display = 'none';
				booksuccess.style.display = 'block';
				booksuccess.innerHTML = "<div class='alert-icon'><div class='alertIcon'>&check;</div></div><p>"+res.message+"</p>"; 
				FetchBooks();
				bookform.reset();
				timeOut();
			}
			
		}
	}).fail((object,status,response)=>{
	});
}