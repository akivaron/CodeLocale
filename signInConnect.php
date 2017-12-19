<?php
 include_once 'connector.php';
 session_start();
 if(isset($_POST['btn-signin']))
 {
	 $email=  strip_tags($_POST['inputEmail']);
	 $password=  strip_tags($_POST['inputPassword']);
	 $strsql= "SELECT * FROM users WHERE email='$email' AND password='$password' ";
	 $query1= "SELECT username FROM users WHERE email='$email'";
	 $result= mysqli_query($con, $strsql);
	 $forusername= mysqli_query($con, $query1);
	 $check= mysqli_num_rows($result);
	 if($check==1)
	 {
		 $_SESSION['usersession']=$forusername;
		 header("location: home.php");
	 }
	 else
	 {
		 echo '<script>alert("Email or password incorrect! Please go back and try again");</script>';
	 }
  }
?>
