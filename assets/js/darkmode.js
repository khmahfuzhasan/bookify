
// const whiteMode = document.querySelector('.whiteMode');
// const darkModeOn = document.querySelector('.darkMode');
// const body = document.querySelector('body');
// darkModeOn.addEventListener('click',function(){
// 	if (darkModeOn.checked == true){
// 	    $.ajax({
// 	    	url: 'classes/darkmode.php',
// 	    	type: 'POST',
// 	    	data:{bodyClass:'darkMode',darkmode: true},
// 	    	success:(data)=>{
// 	    		darkModeOn.classList.add("whiteMode");
// 	    		darkModeOn.classList.remove("darkMode");
// 				console.log(data);
// 				setTimeout(()=>{
// 					//location.reload();
// 				},300);
// 	    	}
// 	    });
	   
// 	 }
// });	

// whiteMode.addEventListener('click',function(){
// 	if (whiteMode.checked == true){
// 	    $.ajax({
// 	    	url: 'classes/darkmode.php',
// 	    	type: 'POST',
// 	    	data:{bodyClass:'darkMode',darkmode: false},
// 	    	success:(data)=>{
// 	    		whiteMode.classList.add("darkMode");
// 	    		whiteMode.classList.remove("whiteMode");
// 				console.log(data);
// 				setTimeout(()=>{
// 					//location.reload();
// 				},300);
// 	    	}
// 	    });
	   
// 	 }
// });