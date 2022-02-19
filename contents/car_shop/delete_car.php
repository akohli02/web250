<html>
<head>
<link rel="stylesheet" href="styles/car_styles.css">
<title>Sam's Used Cars</title>
</head>

<body>

<h1>Sam's Used Cars</h1>

<ul class = "nav">
  <li id = "nav_link"><a href="sams_used_cars.html">Home</a></li>
  <li id = "nav_link"><a href="car_form.htm">Add a Car</a></li>
  <li id = "nav_link"><a href="basic_view_cars.php">View Cars with Basic Formatting</a></li>
  <li id = "nav_link"><a href="view_cars_with_style.php">View Cars with Style</a> </li>
  <li id = "nav_link"><a href="view_cars_with_style_two.php">View Cars with Edit/Delete Links</a></li>
  <li id = "nav_link"><a href="view_cars_add_image.php">Add Images to Cars</a></li>
</ul>

<?php 
include 'db.php';
$vin = $_GET['VIN'] ?? "";
$query = "DELETE FROM INVENTORY WHERE VIN='$vin'";
echo "$query <BR>";

if ($result = $mysqli->query($query)) {
   Echo "The vehicle with VIN $vin has been deleted.";
}
else
{
    echo "Sorry, a vehicle with VIN of $vin cannot be found " . mysql_error()."<br>";
}

$mysqli->close();
   
?>

</body>

</html>
