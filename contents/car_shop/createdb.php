<html>
<head>
	<meta charset = "utf-8">
	<title>Sam's Used Cars</title>
</head>

<body>
<h1>Sam's Used Cars</h1>
<h3>Complete Inventory</h3>
<?php
include 'db.php';
$query = " SELECT * FROM INVENTORY";
/*Query the database */
if ($result = $mysqli->query($query)) {
    //Don't do anything
}
else
{
    echo "Error getting cars from database: " .mysql_error()."<br>";
}

//Create the table headers
echo "<table id='Grid' style='width:80%'><tr>";
echo "<th style='width:50px'>Make<th>";
echo "<th style='width:50px'>Model<th>";
echo "<th style='width:50px'>Asking Price<th>";
echo "</tr>\n";

$class ="odd"; //keeping track of odd/even rows for styling later

//Loop through rows returned by query, create a table row for each
while($result_ar = mysqli_fetch_assoc($result)){
	echo "<tr class=\"$class\">";
	echo "<td>" .$result_ar['Make']. "</td>";
	echo "<td>".$result_ar['Model']."</td>";
	echo "<td>".$result_ar['ASKING_PRICE']."</td>";
	echo "</td></tr>\n";
	
	//if last row is even, make the next odd and vice-versa
	if($class=="odd"){
		$class="even";
	}
	else
	{
		$class ="odd";
	}
}
echo "</table>";
$mysqli->close();
?>
</body>

</html>