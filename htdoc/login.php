<!DOCTYPE html>

<html class="no-js" lang="">
	<head>
	    <title>coffee - login</title>
	    <meta charset="utf-8"/>
	    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
	    <meta name="description" content="Drinking Coffee since 1993."/>
	    <meta name="viewport" content="width=device-width, initial-scale=1"/>

	    <!-- FAVICON (include in Root directory) -->
	    <link rel="shortcut icon" type="image/png" href="favicon.ico"/>
	    <!-- END FAVICON -->

	   	<!-- STYLESHEETS -->
	    <link rel="stylesheet" type="text/css" href="css/normalize.min.css" />
	    <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css" />
	    <!-- Latest compiled and minified CSS -->
	    <link rel="stylesheet/less" type="text/css" href="css/main.less" />
	    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	    <!-- END STYLESHEETS -->

	    <!-- JAVASCRIPT -->
	    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
	    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
	    <!-- END JAVASCRIPT -->
	</head>
	<body>
		<!-- HEADER -->
		<header class="container-fluid">
			<h1 id="branding_logo" class="fa fa-coffee col-md-6 logo">&nbsp;Coffee</h1>
			<nav>
				<li><i class="fa fa-home"><p>Home</p></i></li>
				<li><i class="fa fa-envelope-o"><p>Email</p></i></li>
				<li><i class="fa fa-cog"><p>Settings</p></i></li>
			</nav>
		</header>
		<!-- END HEADER -->
		<div class="container">
			<form class="form-signin" action="" method="post">
				<?php 
					include "functions.php";
					login(); 
				?>
				<h2 class="form-signin-heading">Please sign in</h2>
				<label for="username" class="sr-only">Email Address</label>
				<input type="text" id="email" name="email" class="form-control" placeholder="Your Email" required autofocus>
				<label for="password" class="sr-only">Password</label>
				<input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
				<div class="checkbox">
					<label>
					<input type="checkbox" value="remember-me">Remember me</input>
					</label>
				</div>
				<button name="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
			</form>
		</div>

	<?php include 'footer.php' ?>

