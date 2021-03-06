<?php
	include("functions.inc.php");


	if (!empty($_POST)) {
        //er is verzonden!
        $username = $_POST['email'];
        $password = $_POST['password']; 
        if (canLogin($username,$password)){
        
            //login
            session_start();
			$_SESSION['username'] = $username;
            header('Location: index.php');
    
        } else {
    
            $error = true;
        }
    }
	
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div id="header">
		<div class="logo"></div>
	</div>
	<div id="main">
		<h1>Log in</h1>
		<div class="loginfb"></div>
		<div class="linel"></div>
		<div class="liner"></div>
		<div id="form">
			<form method="post" action>
				<input name="email" placeholder="Email" type="email" required autofocus /><input name="password" placeholder="Password" type="password" required />
				<h5>
					Remember
				</h5>
				<input class="btn-toggle btn-toggle-round" id="btn-toggle-1" name="remember" type="checkbox" /><label for="btn-toggle-1"></label><input name="login" type="submit" value="Log in" />
				<p>Don't have an account yet?</p>
				<a href="register.php">Register here.</a>
			</form>
		</div>
		
	</div>

	<?php if(isset($error)): ?>
		<div class="user-messages-area">
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<ul>
					<li>Unable to login</li>
				</ul>
			</div>
		</div>
	<?php endif; ?>
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>