<!DOCTYPE html>
<html lang = "en">
<head>
	
	<!-- Basic html info and file links -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	 <link href="styles/default.css" rel="stylesheet" >
	 <script defer src="scripts/index.js"></script> 
	 
	<title>Aimy Kohli >> WEB250 >> Sweet Paradise >> Module 6 Forms</title>

</head>

<body>
			<main>
				<h2>Module 6 Forms<br>
				Sweet Paradise Survey Forms</h2>
								
				<form action="" method="post" >
				  <label for="fname">First name:</label>
				  <input type="text" id="fname" name= "fname" ><br><br>
				  <label for="lname">Last name:</label>
				  <input type="text" id="lname" name="lname"><br><br>
				  <input type="submit" name = "submit1" value="Submit">
				</form>
				
				<!-- PHP that outputs the form results for the post method -->
				<?php 
					 if (isset($_POST["submit1"])) { 
					 $fname = $_POST["fname"]; 
					 $lname = $_POST["lname"]; 
					  
					 echo "Your first name is ". $fname  ."<br>"; 
					 echo "Your last name is ". $lname."<br>";  
					 	  
					} 
				 ?> 
				
				<hr/>
				<h2>Tell us about your favorites from Sweet Paradise</h2>
				<h3>This form will use the "get" attribute</h3>
				<form action="" method="get" >
				  <label for="fcandy">Favorite candy:</label>
				  <input type="text" id="fcandy" name= "fcandy" ><br><br>
				  <label for="ficream">Favorite ice cream flavor:</label>
				  <input type="text" id="ficream" name="ficream"><br><br>
				  <input type="submit" name = "submit" value="Submit">
				</form>
				
				<!-- PHP that outputs the form results for the get method -->
				<?php 
					 if (isset($_GET["submit"])) { 
					 $fcandy = $_GET["fcandy"]; 
					 $ficream = $_GET["ficream"]; 
					  
					 echo "Your favorite candy is ". $fcandy ."<br>"; 
					 echo "Your favorite ice cream flavor is ". $ficream."<br>";  
					 	  
					} 
				 ?> 
				
				<hr/>
				
				 <h2>Tell us about your favorites from Sweet Paradise</h2>
				 <h3>This form will use the "post" attribute</h3>
				<form action="" method="post" >
				  <label for="fcandy">Favorite candy:</label>
				  <input type="text" id="fcandy" name= "fcandy" ><br><br>
				  <label for="ficream">Favorite ice cream flavor:</label>
				  <input type="text" id="ficream" name="ficream"><br><br>
				  <input type="submit" name = "submit" value="Submit">
				</form>
				
				<!-- PHP that outputs the form results for the post method -->
				<?php 
					 if (isset($_POST["submit"])) { 
					 $fcandy = $_POST["fcandy"]; 
					 $ficream = $_POST["ficream"]; 
					  
					 echo "Your favorite candy is ". $fcandy ."<br>"; 
					 echo "Your favorite ice cream flavor is ". $ficream."<br>";  
					 	  
					} 
				 ?> 
				
				
				<hr/>
			</main>
</body>
</html>