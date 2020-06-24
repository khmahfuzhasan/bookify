<?php 

session_start();

session_destroy();

header("Location:http://localhost/learnphp/bookify/login.php");