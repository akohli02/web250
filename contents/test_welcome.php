<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login_test.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login_test.php");
  }
?>


<!DOCTYPE html>

<html lang = "en">

<head>

	<!-- Basic html info and file links -->

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	 <link href="styles/default.css" rel="stylesheet" >

	 <script defer src="index.js"></script> 

	<title>Aimy Kohli >> WEB250 >> Sweet Paradise >> Login Test Welcome Page</title>
</head>

<body>
			<main>

			<section>
				<p>You are logged in </p>
				<p> A simple page that tests to see if the login works </p>
				
				<p> <a href="test_welcome.php? logout='1'">Logout</a></p>
			</section>

			</main>

</body>

</html>