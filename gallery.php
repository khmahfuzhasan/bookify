<?php 

$title = "Bookify Gallery";
require_once("components/header.php");
if (isset($_SESSION['user'])){?>

<div class="model-container">
		<div class="model">
			<div class="model-header">
				<h3 class="heading">Add Book</h3>
				</div>
			<form action="" method="POST">
				<div class="group">
					<input type="text"  id="" class="control" placeholder="Book Name...">
				</div>
				<!-- Close group -->
				<div class="group">
					<input type="text"  id="" class="control" placeholder="Author Name...">
				</div>
				<!-- Close group -->
				<div class="group">
					<input type="number"  id="" class="control" placeholder="Book Price...">
				</div>
				<!-- Close group -->
				<div class="group">
					<input type="submit"  id="" class="btn btn-sweet" value="Add book &rarr;">
				</div>
				<!-- Close group -->
			</form>
			<!-- Close form -->
		</div>
		<!-- Close model -->

	</div>
	<!-- Close model-container -->


	<?php require_once("components/menu.main.php") ?>

	<!-- Close nav -->

<div class="container">
	<div class="row">
		<div class="col-9">
			<div class="gallery-section">
				<form action="" enctype="multipart/form-data">
					<label for="imageInput" id="custom-label"></label>
					<input type="file" name="" id="imageInput" class="img-input" onchange = "imageName();">
				</form>
				<div class="gallery">
					<div class="col">
						<a href="assets/img/1.jpg" data-lightbox="roadtrip"><img src="assets/img/1.jpg" alt="" class="gallery-img"></a>
						<span class="delete">&times;</span>
					</div><!-- Close col -->

					<div class="col">
						<a href="assets/img/2.jpg" data-lightbox="roadtrip"><img src="assets/img/2.jpg" alt="" class="gallery-img"></a>
						<span class="delete">&times;</span>
					</div><!-- Close col -->

					<div class="col">
						<a href="assets/img/3.jpg" data-lightbox="roadtrip"><img src="assets/img/3.jpg" alt="" class="gallery-img"></a>
						<span class="delete">&times;</span>
					</div><!-- Close col -->

					<div class="col">
						<a href="assets/img/4.jpg" data-lightbox="roadtrip"><img src="assets/img/4.jpg" alt="" class="gallery-img"></a>
						<span class="delete">&times;</span>
					</div><!-- Close col -->

					<div class="col">
						<a href="assets/img/5.jpg" data-lightbox="roadtrip"><img src="assets/img/5.jpg" alt="" class="gallery-img"></a>
						<span class="delete">&times;</span>
					</div><!-- Close col -->

					<div class="col">
						<a href="assets/img/6.jpg" data-lightbox="roadtrip"><img src="assets/img/6.jpg" alt="" class="gallery-img"></a>
						<span class="delete">&times;</span>
					</div><!-- Close col -->

					<div class="col">
						<a href="assets/img/7.jpg" data-lightbox="roadtrip"><img src="assets/img/7.jpg" alt="" class="gallery-img"></a>
						<span class="delete">&times;</span>
					</div><!-- Close col -->

					<div class="col">
						<a href="assets/img/8.jpg" data-lightbox="roadtrip"><img src="assets/img/8.jpg" alt="" class="gallery-img"></a>
						<span class="delete">&times;</span>
					</div><!-- Close col -->
				</div><!-- Close gallery -->
			</div><!-- Close gallery-section -->
		</div> <!--Close Col-9  -->
		<div class="col-3 mt-40">
				<?php require_once 'components/dashboardWidget.php'; ?>
		</div><!--Close Col-3  -->
	</div> <!--Close Row  -->
</div>
<!-- Close container  -->



<?php 

require_once("components/jslinks.php");
echo '<script src="assets/js/app.js"></script><script src="assets/lightbox/dist/js/lightbox-plus-jquery.min.js"></script>';
require_once("components/footer.php");

$_SESSION['accountNotice'] = null;
}else{
	
	header("Location:http://localhost/learnphp/bookify/login.php");header("Location:http://localhost/learnphp/bookify/login.php");
}
 ?>
