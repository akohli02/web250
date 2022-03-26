 <?php
$mysqli = new mysqli('sql301.epizy.com', 'epiz_30960597', 'MTYHj2muxW1', 'epiz_30960597_test' );
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//select a database to work with
$mysqli->select_db("epiz_30960597_test");
 
?>