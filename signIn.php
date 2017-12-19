<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="favicon.ico">
<title>Sign In|CLoc.</title>
	<!-- Bootstrap core CSS -->
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
	<link href="signin.css" rel="stylesheet">
  </head>
<?php
	if ( isset($_GET['success']) && $_GET['success'] == 1 )
  {
	echo '<script type="text/javascript"> alert("Sign up successful! Sign in to continue");</script>';
  }
?>
<body>
<div class="container">
  	<form class="form-signin" action="connect-sign-in.php" method="POST">
    	<h2 class="form-signin-heading">Please sign in</h2>
    	<label for="inputEmail" class="sr-only">Email address</label>
    	<input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    	<label for="inputPassword" class="sr-only">Password</label>
    	<input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
    	<div class="checkbox">
      	<label>
        	<input type="checkbox" value="remember-me"> Remember me
      	</label>
    	</div>
    	<button class="btn btn-lg btn-primary btn-block" type="submit" name="btn-signin">Sign in</button>
  	</form>
</div> <!-- /container -->
<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
