<?php include 'session_test.php'; include 'db_test.php';
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: login_test.php");
exit;
?>