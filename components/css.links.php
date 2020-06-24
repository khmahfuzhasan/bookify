	

	<!-- Link CSS file -->
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/lightbox/dist/css/lightbox.min.css">
	<!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet"> -->
	<?php 
	if (isset($_SESSION['darkmode']))
	{
		if($_SESSION['darkmode'])
		{
			echo '<link rel="stylesheet" href="assets/css/style.darkmode.css">';
		}
	} 
	?>

	<link rel="stylesheet" href="assets/css/style.responsive.css">