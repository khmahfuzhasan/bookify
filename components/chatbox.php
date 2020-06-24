<?php 
if(isset($_SESSION['logged'])):
if($_SESSION['logged']):
?>

<div class="chatbox second">
	<div class="chatHead"><h1><div class="active-user"></div><span id="chatingTitle"></span></h1><span id="chatmMnimize">-</span><span id="chatBoxClose">X</span></div>
	<div class="chatBody"></div>
	<div class="chatFoot">
		<form id="chatform">
			<textarea id="chatArea" type="text"></textarea> <input id="chatSubmit" type="submit" value="Send">
		</form>
	</div>
</div>

<?php endif; ?>
<?php endif; ?>