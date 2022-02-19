<html>
<head>
<link rel="stylesheet" href="styles/car_styles.css">
<title>Car Saved</title>
</head>
<body bgcolor="#FFFFFF" text="#000000" >
<ul class = "nav">
  <li id = "nav_link"><a href="sams_used_cars.html">Home</a></li>
  <li id = "nav_link"><a href="car_form.htm">Add a Car</a></li>
  <li id = "nav_link"><a href="basic_view_cars.php">View Cars with Basic Formatting</a></li>
  <li id = "nav_link"><a href="view_cars_with_style.php">View Cars with Style</a> </li>
  <li id = "nav_link"><a href="view_cars_with_style_two.php">View Cars with Edit/Delete Links</a></li>
  <li id = "nav_link"><a href="view_cars_add_image.php">Add Images to Cars</a></li>
</ul>

<?php
// Capture the values posted to this php program from the text fields in the form

$VIN = $_REQUEST['VIN'] ?? "";
$Make = $_REQUEST['Make'] ?? "";
$Model = $_REQUEST['Model'] ?? "";
$Price = $_REQUEST['Asking_Price'] ?? "";

//Build a SQL Query using the values from above

$query = "UPDATE inventory SET 

VIN='$VIN', 
Make='$Make', 
Model='$Model', 
ASKING_PRICE='$Price'

WHERE

VIN='$VIN'"; 

// Print the query to the browser so you can see it
echo ($query. "<br>");

include 'db.php';
/* check connection */
if (mysqli_connect_errno()) {
 echo ("Connection failed: ". $mysqli->error."<br>");
 exit();
}

 echo 'Connected successfully to mySQL. <BR>';

//select a database to work with
$mysqli->select_db("Cars");
 Echo ("Selected the Cars database. <br>");

/* Try to insert the new car into the database */
if ($result = $mysqli->query($query)) {
 echo "<p>You have successfully entered $Make $Model into the database.</P>";
}
else
{
 echo "Error entering $VIN into database: " . mysql_error()."<br>";
}
$mysqli->close();
?>

</body>
</html>