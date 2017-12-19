<?php
	$mysql_hostname = "localhost";
	$mysql_user = "inolas-irawit";
	$mysql_password = "qwerty";
	$mysql_database = "codelocale";
$con = mysqli_connect($mysql_hostname,$mysql_user,$mysql_password,$mysql_database);
  if (mysqli_connect_errno())
  { 
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
   ?>
