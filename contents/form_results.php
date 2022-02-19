<!DOCTYPE html>
<html lang = "en">
<head>
	
	<!-- Basic html info and file links -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	 <link href="styles/default.css" rel="stylesheet" >
	 <script src="scripts/index.js"></script> 
	 
	<title>Aimy Kohli >> WEB250 >> Module 6 Forms</title>

</head>

<body>
	<div class="wrapper">
		
		<div class="items contents">
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
					 if (isset($_GET["submit1"])) { 
					 $FNAME = $_GET["fname"]; 
					 $LNAME = $_GET["lname"]; 
					  
					 echo "Your first name is ". $FNAME  ."<br>"; 
					 echo "Your last name is ". $LNAME."<br>";  
					 	  
					} 
				 ?> 
				
				<hr/>
				<h2>Tell us about your favorites from Sweet Paradise</h2>

				<h3>This form will use the "get" attribute</h3>
				<form action="" method="get">
				  <label for="fcandy">Favorite candy:</label>
				  <input type="text" id="fcandy" name= "fcandy" ><br><br>
				  <label for="ficream">Favorite ice cream flavor:</label>
				  <input type="text" id="ficream" name="ficream"><br><br>
				  <input type="submit" name = "submit" value="Submit">
				</form>
				
				<!-- PHP that outputs the form results for the get method -->
				<?php 
					 if (isset($_GET["submit"])) { 
					 $FCANDY = $_GET["fcandy"]; 
					 $FICREAM = $_GET["ficream"]; 
					  
					 echo "Your favorite candy is ". $FCANDY ."<br>"; 
					 echo "Your favorite ice cream flavor is ". $FICREAM."<br>";  
					 	  
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
					 $FCANDY = $_POST["fcandy"]; 
					 $FICREAM = $_POST["ficream"]; 
					  
					 echo "Your favorite candy is ". $FCANDY ."<br>"; 
					 echo "Your favorite ice cream flavor is ". $FICREAM."<br>";  
					 	  
					} 
				 ?> 
				
				
				<hr/>
			</main>
		</div>
	 
	</div>
</body>
</html>