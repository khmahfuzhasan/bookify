<nav id="nav" class="menu-register">
	<ul class="left">
<?php
if ($publicMenu ==="login"){
	echo '<li class="right"><a href="index.php" class="btn btn-default">Register</a></li>';
}else{
	echo '<li class="right"><a href="login.php" class="btn btn-default">Login</a></li>';
}

?>
	</ul>
</nav>