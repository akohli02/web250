<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="default.css">
</head>
<body>
    <main>
        <section>
	<h3>Home Page</h3>

        <h4 style = text-align:center;>Sweet Paradise Specials</h4>
         <?php  if (isset($_SESSION['username'])) : ?>
    	<p style = text-align:center;>Welcome to Sweet Paradise, <strong><?php echo $_SESSION['username']; ?></strong>!</p>
         
			<?php 
				
				//String Function 1 and 2
				define("WELCOME", "New to Sweet Paradise and don't know what to buy? Check out our specials and bestsellers to get 
				a sweet deal!"); 
				print WELCOME;
				
				//String Function 3 and 4
				//Math Function 1
				$BestSeller = "Coconut Chocolate Cupcakes";
				echo "<h4 style = text-align:center;>"."Weekly Bestseller: " . $BestSeller . "</h4>"; 
				echo "<figure>"."<figcaption>"."Image courtesy of ".ucfirst('flickr')."</figcaption>".
				"<img src = 'images/coco_choco.jpg'>"."<figcaption>"."We have sold ".(rand(50,100)).
				" Coconut Chocolate Cupcakes in this month!"."</figcaption>"."</figure>"."<hr>";
				
				//Math Function 2
				//Date function 1
				echo "<h4 style = text-align:center;>".date("l") . " Special!". "</h4>";
				$num = 30;
				$num -= 5;
				echo "<figure>"."<figcaption>"."Image courtesy of Flickr"."</figcaption>".
				"<img src = 'images/mac_cake.jpg'>"."</figure>";
				echo"Our tasty Macaron Cakes are originally $30. This weeks Sweet Deal offers them for $".$num;
				
				//Math Function 3
				echo "<figure style = float:left;>"."<figcaption>"."Image courtesy of Flickr"."</figcaption>".
				"<img src = 'images/lemon_pie.jpg'>". "<figcaption>"."$5 Lemon Meringue Pie".
				"</figcaption>"."</figure>";
				
				echo "<figure style = float:left;>"."<figcaption>"."Image courtesy of Flickr"."</figcaption>".
				"<img src = 'images/apple_pie.jpg'>". "<figcaption>"."$7 Eggless Apple Pie".
				"</figcaption>". "</figure>";
				
				function addNumbers(int $a, int $b) {
					return $a + $b;
					}
				echo "<br>"."If you buy both pies, the price will be $" . addNumbers(5, 5)."<hr>";
				
				//Date function 2
				echo "<h4 style = text-align:center;>" . "New Updates!". "</h4>";
				echo "<figure>"."<figcaption>"."Image courtesy of Flickr"."</figcaption>".
				"<img src = 'images/spring_cake.jpg'>"."</figure>";
				echo "On " .date("l jS \of F Y h:i:s A") . " Sweet Paradise added in a new dessert: The Spring Basket Cake!";
				
				//Date Function 3 and 4
				$date=date_create_from_format("j-M-Y","12-May-2022");
				
				echo "<figure>"."<figcaption>"."Image courtesy of Flickr"."</figcaption>".
				"<img src = 'images/donut.jpg'>"."</figure>";
				echo "Our staff works to provide not only new tastes but also new designs and looks. On " .date_format($date,"Y/m/d").
				", Sweet Paradise will be adding in the Array of Colors. This special 
				set of donuts will be available till September.". "<hr>"; 
				 
				//Math Function 4 and 5
				echo "<h4 style = text-align:center;>" . "Dates of the Year to Remember!". "</h4>";
				echo "<figure>"."<figcaption>"."Image courtesy of Flickr"."</figcaption>".
				"<img src = 'images/pie_day.jpg'>"."</figure>";
				echo "Our next annual Pie Day Give-Away is on January 23. Remember to check you email for updates on a free slice of pie!
				A Quick Fun Fact: the rounded value of pi is " . round((pi()),8);
				
				//Date Function 5
				$d1 = new DateTime('2010-03');
				$d2 = new DateTime('2022-03');
				$diff = $d2->diff($d1);
				
				echo "<figure>"."<figcaption>"."Image courtesy of Flickr"."</figcaption>".
				"<img src = 'images/mac_day.jpg'>"."</figure>";
				echo "The first National Macaron Day was celebrated in March of 2010. It has been ".
				$diff->y. " years since then. This year, Sweet Paradise will take part in celebrating National Macaron Day on March 20th.
				We will be mailing a set of macarons to the first 100 customers
				that make a purchase in March." . "<br><br>";
				
				//String Function 5
				$name = "Thank you";
				echo str_replace("Thanks", $name, "Thanks for visiting our website!"). "<br/>";

				 ?> 

                 <p class = logout-text> <a href="welcome.php?logout='1'">Logout</a> </p>
                <?php endif ?>
    	
        </section>
	</main>	
</body>
</html>