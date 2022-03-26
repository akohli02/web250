<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	 <link href="default.css" rel="stylesheet" >
	 <script defer src="index.js"></script> 
	 
	<title>Aimy Kohli >> WEB250 >> Sweet Paradise >> Menu</title>

<style>

.first{
    display: inline-block;
    width: 400px;
    height: 550px;
    text-align:center;
    float:left;
}

.second{
    display: inline-block;
    width: 400px;
    height: 550px;
    text-align:center;
    float:center;
    }

.third{
    display: inline-block;
    width: 400px;
    height: 550px;
    text-align:center;
    float:right;
}

</style>

</head>
<body>
	<main>
		<section>

<h3>Menu</h3>

<?php include 'db.php';

$ID = $_GET['ID'];
$query = "SELECT * FROM menu ORDER BY Name";

/* Try to query the database */
if ($result = $mysqli->query($query)) {
   // Don't do anything if successful

}
else
{
    echo "Sorry, a food with the ID of $ID cannot be found " . mysql_error()."<br>";
}

$class ="first";

// Loop through all the rows returned by the query
while ($result_ar = mysqli_fetch_assoc($result)) {
    //Display food image and image source
    $image = $result_ar['Image'];
     echo "<div class = \"$class\">" . $result_ar['Image_Source'] . "<br>".
    "<IMG src= 'images/$image' style = height:200px; width:300px;>"."<br>"

    //Display name, description, and ingredients
      ."Name: ".$result_ar['Name'] . "<br>"
      ."Price: $".$result_ar['Price'] . "<br>"
      ."Description: " .$result_ar['Description'] . "<br>"
      ."Ingredients: " .$result_ar['Ingredients'] . "</div>";

    // If the last row was even, make the next one odd and vice-versa
    if ($class=="first"){
        $class="second";
    }
    else if($class=="second")
    {
        $class="third";
    }
    else
    {
        $class="first";
    }
  
}
$mysqli->close();
?>
         <p class = "logout-text"> <a href="index.php?logout='1'">Logout</a></p>

		</section>
	</main>


</body>

</html> 