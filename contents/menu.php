<html>
<head>
<title></title>
</head>
<body>
	<main>
		<section>

<h3>Menu</h3>

<?php include 'db.php';

$ID = $_GET['ID'];
$query = "SELECT * FROM menu WHERE ID='$ID'";

/* Try to query the database */
if ($result = $mysqli->query($query)) {
   // Don't do anything if successful.
   //For now
   echo "It works!";
}
else
{
    echo "Sorry, a fodd with the ID of $ID cannot be found " . mysql_error()."<br>";
}

// Loop through all the rows returned by the query, creating a table row for each
while ($result_ar = mysqli_fetch_assoc($result)) {
    $image = $result_ar['Image'];
	$name = $result_ar['Name'];
    $description = $result_ar['Description'];
    $ingredients = $result_ar['Ingredients'];
    /**$color = $result_ar['EXT_COLOR'];
    $interior = $result_ar['INT_COLOR'];
    $mileage = $result_ar['MILEAGE']; 
    $transmission = $result_ar['TRANSMISSION']; 
    $price = $result_ar['ASKING_PRICE'];
	$image = $result_ar['PRIMARY_IMAGE'];*/
}

echo "<IMG src= 'images/$image'>";
echo "<p>$name $description $ingredients</p>";
echo "<p>Nutritional Facts" ."<span id='dots'>". "..." ."</span>".
"<span id='more'>"."Just some sample text"."</span>"."</p>";
echo "<button onclick='myFunction()' id='myBtn'>"."Read more"."</button>";
   
?>

$mysqli->close();
?>
		</section>
	</main>

<!-- Read More, Read Less Function that shows the nutrional facts-->
<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>

</body>

</html> 