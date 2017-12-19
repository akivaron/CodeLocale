<!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sign Up|CLoc.</title>
  <meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="favicon.ico">
	<!-- Bootstrap core CSS -->
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
	<link href="signup.css" rel="stylesheet">
</head>
<body>
    
  <div class="container">
	<form class="form-signup" name="signup" action="connect-sign-up.php" method="POST">
  	<h2 class="form-signup-heading"> Sign Up to be a part of the Cloc. community@SNIST</h2>
  	<label for="inputName" class="sr-only">Name:</label>
  	<input type="text" name="inputName" id="inputName" class="form-control" placeholder="Enter name" required autofocus>
  	<label for="inputEmail" class="sr-only">Email address:</label>
  	<input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Enter email address" required>
  	<label for="inputUsername" class="sr-only">Username:</label>
  	<input type="text" name="inputUsername" id="inputUsername" class="form-control" placeholder="Pick a username" required>
  	<label for="inputPassword" class="sr-only">Password:</label>
  	<input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Enter password" required minlength="6" maxlength="15">
  	<label for="inputRePassword" class="sr-only">Re-enter Password:</label>
  	<input type="password" name="inputRePassword" id="inputRePassword" class="form-control" placeholder="Re-enter password" required minlength="6" maxlength="15">
<div class="select-course" name="course">
    	<select name="course">
      	<option selected>Select course</option>
      	<option value="btech">BTech</option>
      	<option value="mtech">MTech</option>
    	</select>
    	</div>    
  	<div class="select-year" name="year">
    	<select name="year">
      	<option selected>Select year</option>
      	<option value="firstyear">First</option>
      	<option value="secondyear">Second</option>
      	<option value="thirdyear">Third</option>
      	<option value="fourthyear">Fourth</option>
    	</select>
  	</div>
<button class="btn btn-lg btn-primary btn-block" type="submit" name="btn-signup">Sign up!</button>
	</form>
  </div>
 <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
