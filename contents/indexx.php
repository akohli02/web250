<!DOCTYPE html>
<html lang = "en">
<head>
	
	<!-- Basic html info and file links -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	 <link href="styles/default.css" rel="stylesheet" >
	 <script src="index.js"></script> 
	 
	<title>Aimy Kohli >> WEB250 >> Dynamic Index</title>

</head>

<body>
	<div class="wrapper">
		<!-- Header with JS Clock, Class Name, and Brand logo -->
		<header class="items">
			 
			<img id ="logo" alt = "Logo" src="images/logo.png" />
			<div id="clock"></div>
			<h1>Aimy Kohli WEB250</h1>
			
			<nav class = "links">
				<ul>
					<li><a href = "?p=toc.php">Table of Contents</a></li> 
					<li><a href = "?p=introduction.php">Introduction</a> </li>
					<li><a href = "?p=contract.php">Contract</a></li>
					<li><a href = "?p=brand.php">Brand</a></li>
				</ul>
			</nav>
			
		</header>
		
		<!-- dynamic content goes here -->

		<?php
			$sPage = $_GET["p"] ?? "";
			//echo ("You picked the page: " . $sPage); 
			
			if($sPage == "") {  $sPage = "toc.php"; }
			include($sPage);
		?>
	 
	 
		<footer class="items">
			<nav class="links">
				<ul>
			   
					<li> <a href="https://github.com/akohli02"> Github Account</a> </li>
					<li><a href="https://akohli02.github.io/">Github.io</a></li>
					<li><a href="https://akohli02.github.io/web250/">Github WEB250 Repo</a></li>
					<li><a href="https://www.freecodecamp.org/akohli02">Free Code Camp</a></li> 
					<li><a href="https://www.codecademy.com/profiles/akohli02">Codecademy </a></li>
					<li><a href="https://jsfiddle.net/user/akohli02/">JSFiddle </a></li>
					<li><a href="https://www.linkedin.com/in/aimy-kohli-30912322b/">LinkedIn </a></li>
				
				</ul>
			</nav>
			
			<!-- you may need to change the name of your image link to match the one you 
				   uploaded -->
			<div class = "row">
				<div class = "column">
				<a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Faimykohli.infinityfreeapp.com%2Fweb250%2Fcontents%2Findexx.php" 
				style = "text-decoration: none; width: 100%">
				<img src="images/button_validation_html5.png" alt="Validate HTML" />
				</a>
				</div>
			
			<div class = "column">
				<a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Faimykohli.infinityfreeapp.com%2Fweb250%2Fcontents%2Findexx.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en" 
				style = "text-decoration: none; width: 100%">
				<img src="images/button_validation_css.png" alt="Validate CSS" />
				</a>
				</div>
			</div>
			
			Designed by Sweet Paradise &copy;2022
		   <br/>
		   Delight in Every Bite 
		   <br/>
		   
		
		</footer>
	</div>
</body>
</html>