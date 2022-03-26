<?php include 'session.php'; include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="default.css">
</head>
<body>
  	<main>
        <section>
            <form id = "regForm" method="post" action="">
            <h2>Login</h2>	 
            <?php include('errors.php'); ?>

                <label>Username</label>
                <input type="text" name="username" >

                <label>Password</label>
                <input type="password" name="password">

                <button type="submit" class="btn" name="login_user">Login</button>

            <p>
                Not a Sweet Paradise member? <a href="register.php">Sign up here!</a>
            </p>

            </form>
    </section>
  </main>
</body>
</html>