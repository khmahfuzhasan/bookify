jQuery('.chatnotificationmenu').on('click',function(event){
	event.preventDefault();
	jQuery('.chatnotificationmenu ul').slideToggle(300);
});
 	let widgetSlide = document.querySelectorAll(".dashboard-widget-area .widegt .title");
	jQuery(widgetSlide).click(function(){
		jQuery(this).parent('.widegt').children('.body').slideToggle(300);
	});



const loader = document.querySelector(".loader-section");
//const danger = document.querySelector(".danger");

function timeOut(){
	const success = document.querySelector(".success");
	const danger = document.querySelector(".danger");
	setTimeout(()=>{if(success !== null){success.style.display = 'none';}},3000);
	setTimeout(()=>{if(danger !== null){danger.style.display = 'none';}},3000);	
}
	const success = document.querySelector(".success.logged");
	setTimeout(()=>{if(success !== null){success.style.display = 'none';}},3000);
	setTimeout(()=>{if(loader !== null){loader.style.display = 'none';}},1000);