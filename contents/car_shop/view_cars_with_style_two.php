<!-- Creating a view_cars_with_styles_two page that includes the edit and delete buttons --> 

<html>
<head>
    <meta charset="utf-8">
    <title>Sam's Used Cars</title>
	<link rel="stylesheet" href="styles/car_styles.css">
    
    <style>
 /* The grid is used to format a table instead of a grid control on the list of Notes */
#Grid
{
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
width:80%;
border-collapse:collapse;
margin-left: auto;
margin-right: auto;
}
#Grid td, #Grid th 
{
font-size:1em;
border:1px solid #61ADD7;
padding:3px 7px 2px 7px;
}
#Grid th 
{
font-size:1.1em;
text-align:left;
padding-top:5px;
padding-bottom:4px;
background-color:#C2D9FE;
color: lightslategray;

}
#Grid tr.odd td 
{
color:#000000;
background-color: #F2F5A9;
}

#Grid tr.even  
{
color:#000000;
background-color: white;
}
#Grid head 
{
color:#000000;
background-color:teal;
}

</style>
 
</head> 

<h1 class="auto-style1">Sam's Used Cars</h1>

<ul class = "nav">
  <li id = "nav_link"><a href="sams_used_cars.html">Home</a></li>
  <li id = "nav_link"><a href="car_form.htm">Add a Car</a></li>
  <li id = "nav_link"><a href="basic_view_cars.php">View Cars with Basic Formatting</a></li>
  <li id = "nav_link"><a href="view_cars_with_style.php">View Cars with Style</a> </li>
  <li id = "nav_link"><a href="view_cars_with_style_two.php">View Cars with Edit/Delete Links</a></li>
  <li id = "nav_link"><a href="view_cars_add_image.php">Add Images to Cars</a></li>
</ul>

<h3>Current Inventory</h3>
<h3>This page allows you to view the current inventory with links to edit and delete the car</h3>
 <div class="auto-style1">
 <?php
include 'db.php';
$query = "SELECT * FROM inventory";
/* Try to query the database */
if ($result = $mysqli->query($query)) {
   // Don't do anything if successful.
}
else
{
    echo "Error getting cars from the database: " . mysql_error()."<br>";
}

// Create the table headers
echo "<table id='Grid' style='width: 80%'>\n";
echo "<tr>";
echo "<th style='width: 50px'>Make</th>";
echo "<th style='width: 50px'>Model</th>";
echo "<th style='width: 50px'>Asking Price</th>";
echo "<th style='width: 50px'>Action</th>";
echo "</tr>\n";

$class ="odd";  // Keep track of whether a row was even or odd, so we can style it later

// Loop through all the rows returned by the query, creating a table row for each
while ($result_ar = mysqli_fetch_assoc($result)) {
    echo "<tr class=\"$class\">";
    echo "<td><a href='view_car_backup.php?VIN=".$result_ar['VIN']."'>" . $result_ar['Make'] . "</a></td>";
    echo "<td>" . $result_ar['Model'] . "</td>";
       echo "<td>" . $result_ar['ASKING_PRICE'] . "</td>";
        echo "<td><a href='form_edit_car.php?VIN=".$result_ar['VIN']."'>Edit</a>  <a href='delete_car.php?VIN=".$result_ar['VIN']."'>Delete</a></td>";
   echo "</tr>\n";
   
   // If the last row was even, make the next one odd and vice-versa
    if ($class=="odd"){
        $class="even";
    }
    else
    {
        $class="odd";
    }
}
echo "</table>";
$mysqli->close();
?>
	 
 </body>
 
</html>