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
		<h3> Our Top 10 Employees of the Month</h3>
		
	 <?php
		$myFile =  fopen("staff.txt", "r") or die("can't open file");
		$lines_of_file = file("staff.txt");
		$file_content = file_get_contents("staff.txt");
		$employee  = explode("\n", $file_content);
		fclose($myFile);
		
		//getting the images
		$img_one = $employee[0];
		$img_two = $employee[6];
		$img_three = $employee[12];
		$img_four = $employee[18];
		$img_five = $employee[24];
		$img_six = $employee[30];
		$img_seven = $employee[36];
		$img_eight = $employee[42];
		$img_nine = $employee[48];
		$img_ten = $employee[54];
		
		//employee 1
		echo "<figure>"."<figcaption>"."Image courtesy of Flickr"."</figcaption>".
		"<img src = 'images/$img_one'>". "<figcaption>"."An amazing mountain drive"."</figcaption>"."</figure>".
		$employee[1]. "<br>".$employee[2]. "<br>". $employee[3]."<br>".$employee[4]."<br>";
		
		//employee 2
		echo "<figure>"."<figcaption>"."Image courtesy of Flickr"."</figcaption>".
		"<img src = 'images/$img_two'>". "<figcaption>"."Self Portrait"."</figure>"."</figcaption>".
		$employee[7]. "<br>". $employee[8]."<br>".$employee[9]."<br>".$employee[10]."<br>";
		
		//employee 3
		echo "<figure>"."<figcaption>"."Image courtesy of Flickr"."</figcaption>".
		"<img src = 'images/$img_three'>". "<figcaption>"."My new house that I'm quite proud of"."</figcaption>"."</figure>".
		$employee[13]. "<br>".$employee[14]. "<br>". $employee[15]."<br>".$employee[16]."<br>";
		
		//employee 4
		echo "<figure>"."<figcaption>"."Image courtesy of Flickr"."</figcaption>".
		"<img src = 'images/$img_four'>". "<figcaption>"."Thinking about what to make for dinner"."</figcaption>"."</figure>"
		.$employee[19]. "<br>". $employee[20]."<br>".$employee[21]."<br>".$employee[22]."<br>";
		
		//employee 5
		echo "<figure>"."<figcaption>"."Image courtesy of Flickr"."</figcaption>".
		"<img src = 'images/$img_five'>". "<figcaption>"."At a special event"."</figcaption>"."</figure>".
		$employee[25]. "<br>".$employee[26]. "<br>". $employee[27]."<br>".$employee[28]."<br>";
		
		//employee 6
		echo "<figure>"."<figcaption>"."Image courtesy of Flickr"."</figcaption>".
		"<img src = 'images/$img_six'>". "<figcaption>"."In the middle of nowhere"."</figcaption>"."</figure>".
		$employee[31]. "<br>". $employee[32]."<br>".$employee[33]."<br>".$employee[34]."<br>";
		
		//employee 7
		echo "<figure>"."<figcaption>"."Image courtesy of Flickr"."</figcaption>".
		"<img src = 'images/$img_seven'>". "<figcaption>"."My sweet kitten Momo"."</figcaption>"."</figure>".
		$employee[37]. "<br>".$employee[38]. "<br>". $employee[39]."<br>".$employee[40]."<br>";
		
		//employee 8
		echo "<figure>"."<figcaption>"."Image courtesy of Flickr"."</figcaption>".
		"<img src = 'images/$img_eight'>". "<figcaption>"."My 2021 Halloween outfit"."</figcaption>"."</figure>".
		$employee[43]. "<br>". $employee[44]."<br>".$employee[45]."<br>".$employee[46]."<br>";
		
		//employee 9
		echo "<figure>"."<figcaption>"."Image courtesy of Flickr"."</figcaption>".
		"<img src = 'images/$img_nine'>". "<figcaption>"."I'm the third one from the left"."</figcaption>"."</figure>".
		$employee[49]. "<br>".$employee[50]. "<br>". $employee[51]."<br>".$employee[52]."<br>";
		
		//employee 10
		echo "<figure>"."<figcaption>"."Image courtesy of Flickr"."</figcaption>".
		"<img src = 'images/$img_ten'>". "<figcaption>"."Boxing time!"."</figcaption>"."</figure>".
		$employee[55]. "<br>". $employee[56]."<br>".$employee[57]."<br>".$employee[58]."<br>";
	 ?> 
	 </section>
	</main>
</body>
</html>