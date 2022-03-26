<!DOCTYPE html>
<html lang = "en">
<head>
	
	<!-- Basic html info and file links -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	 <link href="default.css" rel="stylesheet" >
	 <script defer src="index.js"></script> 
	 
	<title>Aimy Kohli >> WEB250 >> Sweet Paradise >> Bake Off Page</title>
<style>
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted #b3c8ff;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: #b3c8ff;
  color: #40020a;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  
  /* Position the tooltip */
  position: absolute;
  z-index: 1;
  top: -5px;
  right: 105%;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}
</style>

</head>

<body>
		<main>
			<section>
				
                <h3>Sweet Paradise Bake Off</h3>
                <form id = "regForm" action="" method="post"  enctype='multipart/form-data'>
                
                <p>Sweet Paradise is holding a Bake Off this year for our customers. You can bake anything from cupcakes to candies. The winner will be gifted a $250
                Sweet Paradise Gift Card. Join our Bake Off now by filling out the simple form below. </p>

                    <label for="name">Food name: </label>
                    <input name="name" type="text" required /><br />

                    <label for="description">Food Description: </label> 
                    <input name="description" type="text" required/><br />
 
                    <label for="ingredients">Ingredients: </label>
                    <input name="ingredients" type="text" required /><br />

                    <div class="tooltip">
                        <label for="image">Upload an image of your food.</label>
                        <input name="file" id = "file" type="file" accept=".jpg,.jpeg,.png" required /><br /><br />
                        <span class="tooltiptext">Acceptable file types: .jpg .jpeg .png</span>
                    </div>
                    
                    <input name="submit_food" type="submit" value="Submit" /><br />
                </form>
               
				 <p class = "logout-text"> <a href="index.php? logout='1'">Logout</a></p>
                 
                 <?php 
                include 'db.php'; include 'session.php';
                $db = mysqli_connect('sql301.epizy.com', 'epiz_30960597', 'MTYHj2muxW1', 'epiz_30960597_test');

                // getting the values from the form
                if (isset($_POST['submit_food'])) {
                    $name = mysqli_real_escape_string($db, $_POST['name']);
                    $description = mysqli_real_escape_string($db, $_POST['description']);
                    //$image = mysqli_real_escape_string($db, $_POST['image']);
                    $ingredients =  mysqli_real_escape_string($db, $_POST['ingredients']);
                    $username = isset($_SESSION['username'])? $_SESSION['username'] : null;
                    
                    $img_name = $_FILES['file']['name'];
                    $target_dir = "images/";
                    $target_file = $target_dir . basename($_FILES["file"]["name"]);
                  
                    //Build a SQL Query using the values from above
                     if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$img_name)){
                        
                        $query = "INSERT INTO user_food (username, image, name, description, ingredients)
                        VALUES ('$username',  '$img_name', '$name', '$description', '$ingredients')";
                     }
                    
                    if ($db->query($query) === TRUE) {
                        //dont do anything successful
                    }

                }
                
                $db->close();

                ?>

			</section>
		</main>
</body>
</html>