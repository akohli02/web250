<?php include 'session.php'; include 'db.php';?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
   <link rel="stylesheet" type="text/css" href="default.css">

</head>
<body>
  <main>
    <section>
  		
  <form id = "regForm" method="post" action="">
    <h2>Register</h2>
  	<?php include('errors.php'); ?>

  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">

  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">

  	  <label>Password</label>
  	  <input type="password" name="password_1">

  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">

  	  <button type="submit" class="btn" name="user_reg">Register</button>

  	<p>
  		Already a Sweet Paradise member? <a href="login.php">Log in here</a>
  	</p>
  </form>

    </section>
  </main>
</body>
</html>