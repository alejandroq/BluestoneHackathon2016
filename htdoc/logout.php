<?php 
session_start();
session_destroy(); 
?>
<!DOCTYPE html>

<html class="no-js" lang="">
	<head>
	    <title>coffee - logged out</title>
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
		<header class="container-fluid nav_buttons">
				<h1 id="branding_logo" class="fa fa-coffee col-md-6 logo">&nbsp;Coffee</h1>
				<nav>
					<li><a class="fa fa-home" href="login.php"><p>Login</p></a></li>
				</nav>
		</header>
		<!-- END HEADER -->
		<div class="alert alert-success">You have logged out! Visit us again!</div>
