<!DOCTYPE html>
<html lang = "en">
<head>
	
	<!-- Basic html info and file links -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	 <link href="default.css" rel="stylesheet" >
	 <script defer src="index.js"></script> 
	 
	<title>Aimy Kohli >> WEB250 >> Sweet Paradise >> Delete Food Form</title>

</head>

<body>
		<main>
			<section>
				<h3>Delete Form</h3> 

                <?php include 'db.php';  include 'session.php'; ?>

                <script>
                //Will get the parameter value passed in through the url
                function getParameterByName(name, url) {
                if (!url) url = window.location.href;
                name = name.replace(/[\[\]]/g, '\\$&');
                var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
                    results = regex.exec(url);
                if (!results) return null;
                if (!results[2]) return '';
                return decodeURIComponent(results[2].replace(/\+/g, ' '));
                }

                var ID = getParameterByName('ID');
                </script>

                <?php 
                    $db = mysqli_connect('sql301.epizy.com', 'epiz_30960597', 'MTYHj2muxW1', 'epiz_30960597_test');
                    
                    //getting the ID from the Javascript function
                    $ID = $_GET['ID'];

                    //getting the username from the current active session
                    $username = isset($_SESSION['username'])? $_SESSION['username'] : null;
                    $query = "DELETE FROM user_food WHERE username = '$username' AND ID = '$ID' ";
                    
                    if ($result = $db->query($query)) {
                        echo "Deleted submission successfully!";
                    }
                    else
                    {
                        echo "Error! Please try again!";
                    }

                    $db->close();
                    ?>

                 <hr>
				 <p class = "logout-text"> <a href="index.php?logout='1'">Logout</a></p>

                 <p class = "logout-text" style = "float:right; position:relative; bottom:126px;"> <a href="index.php">Home</a></p>

			</section>
		</main>

</body>
</html>

