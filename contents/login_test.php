<?php include 'session_test.php'; include 'db_test.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="styles/default.css">
</head>
<body>
  	<main>
        <section>
            <form id = "regForm" method="post" action="">
            <h2>Login</h2>	 
            <?php include('errors_test.php'); ?>

                <label>Username</label>
                <input type="text" name="username" >

                <label>Password</label>
                <input type="password" name="password">

                <button type="submit" class="btn" name="login_user">Login</button>


            </form>
    </section>
  </main>
</body>
</html>