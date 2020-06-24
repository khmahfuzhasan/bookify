<?php

 $host = "localhost";
 $user = "root";
 $pass = "";
 $dbName   = "bookify";

 $db = NEW PDO("mysql:host=".  $host. ";dbName=". $dbName , $user , $pass);
