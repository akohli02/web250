<!DOCTYPE html>
<html lang = "en">
<head>
	
	<!-- Basic html info and file links -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	 <link href="default.css" rel="stylesheet" >
	 <script defer src="index.js"></script> 
	 
	<title>Aimy Kohli >> WEB250 >> Sweet Paradise >> Edit Food Form</title>

<style>
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted #b3c8ff;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 130px;
  background-color: #b3c8ff;
  color: #40020a;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  
  /* Position the tooltip */
  position: absolute;
  z-index: 1;
  top: -5px;
  right: 102%;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}
</style>

</head>

<body>
		<main>
			<section>
				<h3>Edit Form</h3>

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

                <?php include 'db.php';
                //getting the ID from the Javascript function
                    $ID = $_GET['ID'];

                    //getting the username from the current active session
                    $username = isset($_SESSION['username'])? $_SESSION['username'] : null;
                    $query = "SELECT * FROM user_food WHERE username = '$username' AND ID = '$ID' ";
                    
                    $result = $db->query($query);

                    while ($result_ar = $result->fetch_assoc()) {
                        
                        //store the values in variables
                        $image = $result_ar['image'];
                        $food_name = $result_ar['name'];
                        $description = $result_ar['description'];
                        $ingredients = $result_ar['ingredients'];

                    }

                    $db->close();
                    ?>
                            <form id = 'regForm' name = 'regForm' action = '' method= 'post'>
                                
                                <label for='name'>Food name: </label> <br />
                                <input name='name' type='text' value= '<?php print $food_name ?>' required/> <br />

                                <label for='description'>Food Description: </label> <br />
                                <input name='description' type='text' value= '<?php print $description ?>' required/> <br />
            
                                <label for='ingredients'>Ingredients: </label> <br />
                                <input name='ingredients' type='text' value= '<?php print $ingredients ?>' required/> <br />

                                <div class='tooltip'>
                                    <label for='image'>Upload an image of your food.</label>
                                    <input name='file' id = 'file' type='file' accept='.jpg,.jpeg,.png'  /> <br /> <br />
                                    <span class='tooltiptext'>Current Food Image: <?php print $image ?>
                                        Acceptable file types: .jpg .jpeg .png</span>
                                </div>
                            
                                <input name='update_food' type='submit' value='Submit' /> <br />

                            </form>
                    <?php 
                        $db = mysqli_connect('localhost', 'root', '', 'epiz_30960597_test');

                        $username = isset($_SESSION['username'])? $_SESSION['username'] : null;

                        // getting the values from the Edit Food Form
                        if (isset($_POST['update_food'])) {
                            $name = mysqli_real_escape_string($db, $_POST['name']);
                            $description = mysqli_real_escape_string($db, $_POST['description']);
                            //$image = mysqli_real_escape_string($db, $_POST['image']);
                            $ingredients =  mysqli_real_escape_string($db, $_POST['ingredients']);
                            $username = isset($_SESSION['username'])? $_SESSION['username'] : null;                      
                            
                            //if an image is selected then it will replace the previous image
                            if (!empty($_FILES['file']['name'])){
                                $img_name = $_FILES['file']['name'];
                                $target_dir = "images/";
                                $target_file = $target_dir . basename($_FILES["file"]["name"]);
                            
                                //Build a SQL Query using the values from above
                                if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$img_name)){
                                    
                                $edit = "UPDATE user_food SET name='$name', description = '$description',
                                ingredients = '$ingredients', image = '$img_name' WHERE username = '$username' AND ID = '$ID'";
                                }
                            }

                            //If the form is updated correctly
                            if ($db->query($edit) === TRUE) {
                               echo "Form updated successfully! Navigate to your account page to see the updates!". "img" . $img_name;
                            }

                            //if the form is not updated
                            else {
                                echo "Error submitting the form! Please try again.";
                            }

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