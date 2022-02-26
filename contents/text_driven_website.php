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
		<section>
		<h2> Our Top 10 Employees of the Month</h2>
		
	
	 <?php
		$myFile =  fopen("staff.txt", "r") or die("can't open file");
		$employee = array();

		while (!feof($myFile)) {
		   $file_content = file_get_contents("staff.txt");
		   $employee  = explode("\n", $file_content);
		}

		fclose($myFile);
		
		echo $employee[1];
	 ?> 
	 </section>
	</main>
</body>
</html>