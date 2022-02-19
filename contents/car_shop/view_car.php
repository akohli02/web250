<!-- Creating a view_car page that lets you upload an image for the car --> 

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

<h3>Upload Car Image</h3>
<?php include 'db.php';
$vin = $_GET['VIN'];
$query = "SELECT * FROM INVENTORY WHERE VIN='$vin'";
/* Try to query the database */
if ($result = $mysqli->query($query)) {
   // Don't do anything if successful.
}
else
{
    echo "Sorry, a vehicle with VIN of $vin cannot be found " . mysql_error()."<br>";
}
// Loop through all the rows returned by the query, creating a table row for each
while ($result_ar = mysqli_fetch_assoc($result)) {
    $year = $result_ar['YEAR'];
	$make = $result_ar['Make'];
    $model = $result_ar['Model'];
    $trim = $result_ar['TRIM'];
    $color = $result_ar['EXT_COLOR'];
    $interior = $result_ar['INT_COLOR'];
    $mileage = $result_ar['MILEAGE']; 
    $transmission = $result_ar['TRANSMISSION']; 
    $price = $result_ar['ASKING_PRICE'];
	$image = $result_ar['PRIMARY_IMAGE'];
}
echo "<p>$color $year $make $model <br>VIN: $vin</p>";
echo "<p>Asking Price: $".number_format($price,0) ."</p>";
echo "<IMG src= 'images/$image'>";
   
?>

<br/><br/>
<form action="upload_file.php" method="post" enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input name="VIN" type="hidden" value= "<?php echo "$vin" ?>" />
<input type="submit" name="submit" value="Submit">
</form>
<br/><br/>

<?php
$query = "SELECT * FROM images WHERE VIN='$vin'";
/* Try to query the database */
if ($result = $mysqli->query($query)) {
   // Got some results
   // Loop through all the rows returned by the query, creating a table row for each
while ($result_ar = mysqli_fetch_assoc($result)) {
    $image = $result_ar['ImageFile'];
    echo "<img src='images/$image'>  " ;
}
}
$mysqli->close();
?>
</body>

</html> 