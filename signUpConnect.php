<?php
	session_start();
	include_once 'connector.php';
	$count=0;
	$name=$email=$uname=$password=$course=$year="";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
	if(isset($_POST['btn-signup']))
	{
    	if(empty($_POST['inputName']))
    	{
        	echo '<script>alert("Name is required");</script>';
        	$count=$count+1;
    	}
    	else
    	{
        	$name= strip_tags($_POST['inputName']);
    	}
  if(empty($_POST['inputEmail'])||(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $_POST['inputEmail'])))
    	{
        	echo '<script>alert("Please enter a valid email address");</script>';
        	$count=$count+1;
    	}
    	else
    	{
        	$email=  strip_tags($_POST['inputEmail']);
    	}
    	if(empty($_POST['inputUsername']))
    	{
        	echo '<script>alert("Username is required");</script>';
        	$count=$count+1;
    	}
    	else
    	{
        	$uname=  strip_tags($_POST['inputUsername']);
    	}
    	if(empty($_POST['inputPassword'])&&empty($_POST['inputRePassword']))
    	{
        	echo '<script>alert("Please enter password");</script>';
        	$count=$count+1;
    	}
    	elseif (($_POST['inputPassword'])!=($_POST['inputRePassword']))
    	{
        	echo '<script>alert("Passwords do not match!");</script>';
        	$count=$count+1;
    	}
    	else
    	{
        	$password=  strip_tags($_POST['inputPassword']);
    	}
    	if(($_POST['course']!="btech")&&($_POST['course']!="mtech"))
    	{
        	echo '<script>alert("Please select course");</script>';
        	$count=$count+1;
    	}
    	else
    	{
        	$course= strip_tags($_POST['course']);
    	}
    	if(($_POST['year']!="firstyear")&&($_POST['year']!="secondyear")&&($_POST['year']!="thirdyear")&&($_POST['year']!="fourthyear"))
    	{
        	echo '<script>alert("Please select year");</script>';
        	$count=$count+1;
    	}
    	else
    	{
        	$year= strip_tags($_POST['year']);
    	}
    	if($count==0)
    	{
        	$signupdate= date('Y-m-d h:i:sa');
        	$strsql="INSERT INTO users (name, email, username, password, year, course, signupdate) VALUES ('$name', '$email', '$uname', '$password', '$year', '$course', '$signupdate')";
        	$query=mysqli_query($con, $strsql);
        	if($query)
        	{
            	header("location: sigin.php?success=1");
        	}
        	else
        	{
            	$error= mysqli_error($con);
            	echo "Sign up error! Email address/username is already in use. Please use an alternate email/username.";
        	}
    	}
    	else
		
    	{
        	echo '<script>alert("Sign up failed! Please go back and try again");</script>';
    	}
	}
}
