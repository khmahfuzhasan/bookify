<?php 

$title = "Bookify Dashboard";

require_once("components/header.php");
require_once("components/menu.main.php");
if (isset($_SESSION['user'])){?>

<?php if(isset($_SESSION['loader'])): ?>
<div class="loader-section">
	<div class="loader">
		<div class="load">
			<span class="element"></span>
		</div> 
	</div>
</div>
<?php endif;unset($_SESSION['loader']); ?>






<div class="container">
<div class="row mt-40">
	<div class="col-9">
		<div class="alert success"></div>
		<!-- Close alert -->
		<div class="alert danger"></div>
			<!-- Close alert -->

		<?php require_once 'components/modalbox.php' ?>





	<!-- Close nav -->
	<?php require_once 'components/table.php'; ?>
	<div class="welcome-to-bookify">
		<?php 
	if(isset($_SESSION['hits'])){
		$_SESSION['hits']++;
		echo "<h2>BOOKIFY</h2>";
	}else{
		$_SESSION['hits'] = 1;
		echo "<h2>WELCOME TO BOOKIFY</h2>";
	} 
?>

	</div>
</div>
<!-- Close table-section -->
</div>
<!-- Close col-9 -->
<div class="col-3">
	<?php require_once 'components/dashboardWidget.php'; ?>	
	<div class="countSection">
		<div class="counting">
         <div id="totalBooksBtn" class="count"></div>
		</div>
		<!-- Close counting -->
		<div class="counting mt-20">
			<div id="totalAmount" class="count"></div>
		</div><!-- Close counting -->
	</div>
	<!-- Close countSection -->
		
</div>
<!-- Close col-3 -->
</div>
<!-- Close row -->
</div>
<!-- Close container  -->

<?php 

require_once("components/jslinks.php");
echo ' <script src="assets/js/app.js"></script><script src="assets/js/books.js"></script>';
require_once("components/footer.php");

$_SESSION['accountNotice'] = null;
}else{
	header("Location:http://localhost/learnphp/bookify/login.php");
}

 ?>

 <script>
 	const chatBoxClose = document.querySelectorAll("#chatBoxClose");
 	jQuery(chatBoxClose).on('click',function(event){
		event.preventDefault();
		jQuery(this).parent().parent('.chatbox').slideUp(300);
	});
	
	jQuery('.chatHead').on('click',function(event){
		event.preventDefault();
		jQuery(this).parent('.chatbox').toggleClass("minimized");
	});	


 </script>
