<?php include 'db.php';
session_start();

//Initializing the variables to empty string
$username = "";
$email    = "";
$errors = array(); 

//Connecting to the database
$db = mysqli_connect('sql301.epizy.com', 'epiz_30960597', 'MTYHj2muxW1', 'epiz_30960597_test');

//User Registration Form
//This will take in all input values from the form and store them as variables
if (isset($_POST['user_reg'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  //Form validation
  //The (array_push()) will push the error into the $errors array
  if (empty($username)) 
  { 
      array_push($errors, "REQUIRED! Please enter a username."); 
  }
  if (empty($email))
  { 
      array_push($errors, "REQUIRED! Please enter an email."); 
  }
  if (empty($password_1)) 
  { 
      array_push($errors, "REQUIRED! Please enter a password."); 
  }
  if ($password_1 != $password_2) 
  {
	array_push($errors, "ERROR! The two passwords do not match.");
  }

  //After making sure that all data is entered correctly in the form 
  // We need to make sure that a user does not already exist with the same username and/or email
  $user_check = "SELECT * FROM user_login WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check);
  $user = mysqli_fetch_assoc($result);
  
  //Checking if the username or email already exists
  if ($user) {
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists. Please enter a new username or login if you already have an account.");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists. Please enter a new email or login if you already have an account.");
    }
  }

  //If there are no errors in the form then the user will be registered 
  if (count($errors) == 0) {
    //Encrypt the password using md5
    //md5 will get the hash of the string
  	$password = md5($password_1);

  	$query = "INSERT INTO user_login (username, email, password, join_date) 
  	VALUES('$username', '$email', '$password', NOW())";

  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}


//Code for the Login Form
//Checks if the user exists or not 
if (isset($_POST['login_user'])) 
{
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM user_login WHERE username='$username' AND password='$password'";

  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Incorrect username/password. Please try again.");
  	}
  }
}

?>