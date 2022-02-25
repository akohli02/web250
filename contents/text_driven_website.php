<!DOCTYPE html>
<html lang = "en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	 <link href="styles/default.css" rel="stylesheet" >
	 <script defer src="scripts/index.js"></script> 
	 
	<title>Aimy Kohli >> WEB250 >> Sweet Paradise >> Text Driven Website</title>
</head>

<body>
	<main>
		<h2> Our Top 10 Employees of the Month</h2>
	</main>
	
	 <?php
		$myFile =  fopen("staff.txt", "r") or die("can't open file");
		$employee = array();

		while (!feof($myFile)) {
		   $employee[] = fgets($myFile);
		}

		fclose($myFile);

		echo "<p>" .$employee[0] . "<br>". $employee[1] . "<br>". $employee[2] . "<br>". $employee[3]. "<br>". $employee[4] ."</p>";
		/**echo  "<br>". $employee[5] . "<br>". $employee[6] . "<br>". $employee[7] ;
		echo $employee[8] . "<br>". $employee[9] . "<br>". $employee[10] . "<br>". $employee[11] ;
		echo $employee[12] . "<br>". $employee[13] . "<br>". $employee[14] . "<br>". $employee[15] ;*/
	 ?> 
	 
</body>
</html>