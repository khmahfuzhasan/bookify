const myusername = document.querySelector("#myuserName").text;
function finduser(user){

	let receiverName = user;
	let senderName = myusername;
	const conversationBTW = senderName+"."+receiverName;
	const conversationBTWReverse = receiverName+"."+senderName;
	//console.log(conversationBTW,conversationBTWReverse);

	function ChatBox(){
		chatbox = document.querySelector(".chatbox");
		chatHead = document.querySelector(".chatHead");
		chatBody = document.querySelector(".chatBody");
		chatHead.innerHTML = `<h1><div class="active-user"></div><span id="chatingTitle">${receiverName}</span></h1><span id="chatmMnimize">-</span><span id="chatBoxClose">X</span>`;
		$.ajax({
			type: 'POST',
			url:'classes/chatbox.php',
			data: {
				chatbox: true,
				receiverName: receiverName,
				senderName: senderName
			},
			success: (response,status,object)=>{
				res = JSON.parse(response);
				if(res.status){
					conversations = "";
					chattext = "";
					chatbox.style.display="block";
					res.data.forEach((chat)=>{

						if(chat.conversationBTW===conversationBTW){

							conversations+= `<div id="me"><span>${chat.message}</span><img src="assets/img/me.png" alt=""></div>`;
						}else{
							conversations+= `<div id="friend"><img src="assets/img/firend.png" alt=""><span>${chat.message}</span></div>`;
						}

					});
					chattext = `<div class="chatBody">${conversations}<div id="NewTextAutoloader"><div></div></div></div>`;
					

				}else{
					chatbox = document.querySelector(".chatbox");
					chatbox.style.display="block";
					chattext = `<div class="chatBody"><span id="Noconversation">${res.message}</span><div id="NewTextAutoloader"><div></div></div></div><div class="chatFoot"><form id="chatform"><textarea id="chatArea" type="text"></textarea> <input id="chatSubmit" type="button" onclick="ChatformBtn('${senderName}','${receiverName}');" value="Send">
					</form>
				</div>`;
				}
				chatBody.innerHTML  = chattext;
			}
		}).fail((object,status, data)=>{
			//console.log(object,status, data);
		}); // close ajax fail
	}// close ChatBox Function

		setInterval(()=>{
			ChatBox();
		},1000);


} // close finduser function

