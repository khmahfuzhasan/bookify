	const chatingform = document.getElementById('chatSubmit');
	chatingform.addEventListener('click',(event)=>{
			event.preventDefault();
	});



	function ChatformBtn(sender,receiver){
		const conversationBTW = sender+"."+receiver;
		const conversationBTWReverse = receiver+"."+sender;
		const chatArea = document.getElementById('chatArea');
		const conversations = chatArea.value.trim();
			$.ajax({
				type: 'POST',
				url: 'classes/chat.php',
				data: {
					chat: true,
					sender: sender,
					receiver: receiver,
					message: conversations
				},
				success:(response, status, object)=>{
					const res = JSON.parse(response);
					if(res.status){
						ChatBox();
					}
				}
			});
}// Close function ChatformBtn()

