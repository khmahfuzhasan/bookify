let activeuserWidget = document.querySelector(".activeuser .body");


function ActiveUsers(){
	$.ajax({
		type: 'POST',
		url: 'classes/users.class.php',
		data: {activeusers: true},
		success: (response,status)=>{
			res = JSON.parse(response);
			if(res.status){
				result = "";
				res.data.forEach((user)=>{
					const oneDay 	= 24 * 60 * 60 * 1000; 
					const firstDate = new Date();
					const secondDate= new Date(`${user.userDateTime}`);
					const diffDays  = Math.round(Math.abs((firstDate - secondDate) / oneDay));
					let myuserName = document.querySelector("#myuserName").innerText.trim();
					if(diffDays <= 7){
						if(user.userName=== myuserName){
							result+=`<li><div class="active-user"></div>${user.userName} <span class="userTag newuser">New</span></li>`;
						}else{
							result+=`<li><div class="active-user"></div><a id="getuserName" href="#" onclick="finduser('${user.userName}');">${user.userName}</a> <span class="userTag newuser">New</span></li>`;
						}	
					}else{
						if(user.userName=== myuserName){
							result+=`<li><div class="active-user"></div>${user.userName} <span class="userTag">Varified</span></li>`;
						}else{
							result+=`<li><div class="active-user"></div><a id="getuserName" href="#" onclick="finduser('${user.userName}');">${user.userName}</a> <span class="userTag">Varified</span></li>`;
						}						
					}
				});
				//ActiveUsers();
			}else{
				result =`<li style="text-align:center;color:gray;border:none;">${res.message}</li>`;
			}
				activeuserWidget.innerHTML = `<ul>${result}</ul>>`;	
				const getuserNameBtn = document.querySelectorAll("#getuserName");
				getuserNameBtn.forEach((getUser)=>{
					getUser.addEventListener("click",function(event){
						event.preventDefault();
					});
				});

		}	
	});
} // close ActiveUsers function
ActiveUsers();

setInterval(function(){
	ActiveUsers();
},5000);

//function finduser(user){} // close finduser function 
