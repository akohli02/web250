<!DOCTYPE html>
<html lang = "en">
<head>
	
	<!-- Basic html info and file links -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	 <link href="default.css" rel="stylesheet" >
	 <script defer src="index.js"></script> 
	 
	<title>Aimy Kohli >> WEB250 >> Sweet Paradise >> Account Page</title>

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

.edit_link{
  width:100px;
  height:50px;
  border-radius:10px;
  background-color: #b3c8ff;
  text-align:center;
  display: inline-block;
  margin-left:500px;
}

.edit_link a{
  text-decoration:none;
  position:relative;
  top:7px;
}

.del_link{
  display:inline-block;
  width:100px;
  height:50px;
  border-radius:10px;
  background-color: #b3c8ff;
  text-align:center;
  margin-left:30px;

}

.del_link a{
  text-decoration:none;
  position:relative;
  top:7px;
}

.food_info{
   text-align:center;
}

.food_info img {
    border: 2px solid #40020a;
}
</style>

</head>

<body>
			<main>
			<section>
				<h3>Account Page</h3> 

                <?php include 'db.php';  include 'session.php'; ?>
                
                <?php if (isset($_SESSION['username'])) : ?>
                <h4><strong><?php echo $_SESSION['username']; ?></strong>'s Account Details</h4>

                <p>Username: <?php echo $_SESSION['username']; ?></p>

               <?php 

                    $my_db = mysqli_connect('sql301.epizy.com', 'epiz_30960597', 'MTYHj2muxW1', 'epiz_30960597_test');

                    $username = isset($_SESSION['username'])? $_SESSION['username'] : null;
                    $sql = "SELECT * FROM user_login WHERE username = '$username'";

                    $info = $my_db->query($sql);

                    while ($user_result = $info->fetch_assoc()) { 
                        //Display user information
                        $join_date = $user_result['join_date'];
                        $email = $user_result['email'];

                        echo "<p>"."Email: ". $email. "</p>";
                        echo "<p>"."Join Date: ". $join_date. "</p>";
                        
                    }
                    $my_db->close();
                ?>
                
                <h4>Other</h4>
                <h5>Sweet Paradise Bake Off Submissions</h5>

                <?php 
                    $db = mysqli_connect('sql301.epizy.com', 'epiz_30960597', 'MTYHj2muxW1', 'epiz_30960597_test');

                    $username = isset($_SESSION['username'])? $_SESSION['username'] : null;
                    $query = "SELECT * FROM user_food WHERE username = '$username'";

                    $result = $db->query($query);

                    //A var that will count and display the submission number
                    $counter = 1;

                    if(mysqli_num_rows($result)==0){
                        echo "<p>" . "No submissions for the Sweet Paradise Bake Off!" . "</p>";
                    }

                    else {
                        while ($result_ar = $result->fetch_assoc()) {
                            
                            

                            //store the values in variables
                            $image = $result_ar['image'];
                            $food_name = $result_ar['name'];
                            $description = $result_ar['description'];
                            $ingredients = $result_ar['ingredients'];
                            $ID = $result_ar['ID'];

                            //Display a divider with the submission number
                            echo "<div class='divider'>" . "<div class='dividermask'>" . "</div>"
                            . "<span>" . "<i>" . $counter. "</i>" . "</span>" . "</div>";

                            //Display name, description,image, and ingredients
                            echo "<div class = 'food_info'>" 
                            ."<img src= 'images/$image' style = height:200px; width:300px;>"."<br>"
                            ."Food Name: " . $food_name . "<br>"
                            ."Food Description: " . $description . "<br>"
                            ."Ingredients: " . $ingredients .  "</div>";

                            //Display edit and delete links
                            echo "<p class = 'edit_link'>" . "<a href='form_edit_food.php?ID=$ID'>Edit</a>" . "</p>";
                            echo "<p class = 'del_link'>" . "<a href='delete_food.php?ID=$ID' onClick=\"javascript: return confirm('Please confirm deletion!');\">Delete</a>" . "</p>";

                            //Increment the counter every time this loop runs
                            $counter++;
                        }

                    }

                    $db->close();
                    ?>
                    
                 <hr class = 'rounded'>
				 <p class = "logout-text"> <a href="index.php?logout='1'">Logout</a></p>
                 <?php endif ?>

				</section>
			</main>

</body>
</html>