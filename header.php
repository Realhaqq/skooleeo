<?php 
session_start();
extract($_SESSION);
 include 'db/config.php';

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>skooleeo</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">


	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

	<!-- Stylesheets -->

	<link href="common-css/bootstrap.css" rel="stylesheet">
	<link href="common-css/ionicons.css" rel="stylesheet">
	<link href="layout-1/css/styles.css" rel="stylesheet">
	<link href="layout-1/css/responsive.css" rel="stylesheet">

</head>
<body >

	<header>
		<div class="container-fluid position-relative no-side-padding">
			<a href="index" class="logo"><b>skooleeo</b></a>
			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

			<ul class="main-menu visible-on-click" id="main-menu">
				<li><a href="index">Home</a></li>
				<li><a href="login">My Account</a></li>

			</ul><!-- main-menu -->

			<div class="src-area">
			</div>

		</div><!-- conatiner -->
	</header>