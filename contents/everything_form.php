 <!DOCTYPE html>
<html lang = "en">
<head>
	
	<!-- Basic html info and file links -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	 <link href="styles/default.css" rel="stylesheet" >
	 <script defer src="scripts/index.js"></script> 
	 
	<title>Aimy Kohli >> WEB250 >> Sweet Paradise >> Everything Form</title>
	
<style>
* {
  box-sizing: border-box;
}

#regForm {
  background-color: #fdebff;
  margin: 80px auto;
  width: 80%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

input[type = "button"], input[type = "reset"]{
  background-color: #b3c8ff;
  color: #40020a;
  border: none;
  font-size: 17px;
  cursor: pointer;
  height:45px;
  width:100px;

}

input[type = "submit"] {
  display: block;
  background-color: #b3c8ff;
  color: #40020a;
  border: none;
  font-size: 17px;
  cursor: pointer;
  height:45px;
  margin:0px auto;
}

input[type = "button"]:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #b3c8ff;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #b3c8ff;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}

#frost1 , #frost2, #frost3, #frost4{
	width:10px;
}
#allergy1 , #allergy2, #allergy3{
	width:10px;
}

input[type = "color"] {
	padding: 20px 10px; 
	line-height: 28px;
}

#topping1 , #topping2, #topping3, #topping4, #topping5, #topping6{
	width:10px;
}

#myFile, #memcard, #myFile{
	width:20px;
}
#memcard{
	width: 35px;
    height: 35px;
    border-radius: 50%;
	font-size:25px;
	text-align:center;
	padding:5px;
}

</style>
</head>

<body>
			<main>
                    <section>
			 <form id="regForm" name = "cakeForm" action="" method="post" >
			  <h1>Build a Cake:</h1>
              <h5>fields marked with an asterisk (*) are required</h5>
			  <!-- One "tab" for each step in the form: -->
			  <div class="tab">Your Name*
				<p><input placeholder="First name" oninput="this.className = ''" name="fname" required></p>
				<p><input placeholder="Last name" oninput="this.className = ''" name="lname" required></p>
					Your Contact Info*
				<p><input type="email" id="email" placeholder="sample@mail.com" oninput="this.className = ''" name="email" required></p>
				<p><input type="tel" id="phone" name="phone" placeholder="123-456-789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" oninput="this.className = ''" required></p>
			  </div>
			  
			  <div class="tab">Frosting:
				<p><input type="radio" id="frost1" name="frosting" value="Buttercream Frosting" oninput="this.className = ''" >
				<label for="frost1">Buttercream Frosting</label></p>
				<p><input type="radio" id="frost2" name="frosting" value="Whipped Cream Frosting"  oninput="this.className = ''" >
				 <label for="frost2">Whipped Cream Frosting</label></p>
				<p><input type="radio" id="frost3" name="frosting" value="Cream Cheese Frosting"  oninput="this.className = ''" >
				<label for="frost3">Cream Cheese Frosting</label></p>
				<p><input type="radio" id="frost4" name="frosting" value="Swiss Meringue Buttercream"  oninput="this.className = ''" >
				<label for="frost4">Swiss Meringue Buttercream</label></p>
				<div id="msg"></div>
						<br>Select Any Allergies:
				<p><input type="checkbox" id="allergy1" name="allergy[]" value="Peanuts">
				<label for="allergy1">Peanuts</label></p>
				<p><input type="checkbox" id="allergy2" name="allergy[]" value="Milk">
				<label for="allergy2">Milk</label></p>
				<p><input type="checkbox" id="allergy3" name="allergy[]" value="Eggs">
				<label for="allergy3">Eggs</label></p>
				<p><label for="fname">Other*</label>
				<input type="text" id="fname" name="moreAllergy" 
				placeholder="List any other allergies or simple type &quot;No other allergies&quot;" required></p>
			  </div>
			  
			  <div class="tab">Size:
				<p><input type="range" id="size" name="size" step ="2" value = "6" min="6" max="12" oninput="this.className = ''" >
				<img style ="float: left" src ="images/cake_size.png" alt = "cake size"/> </p> <br>
  
				<br> Select your cake color:
				<p><input type="color" id="color" name="color" value="#6f47ff" oninput="this.className = ''" ></p>
				
				<br>Toppings:
				<p><input type="checkbox" id="topping1" name="topping[]" value="Mini Chocolates">
				<label for="topping1">Mini Chocolates</label></p>
				<p><input type="checkbox" id="topping2" name="topping[]" value="Fresh Fruit">
				<label for="topping2">Fresh Fruit</label></p>
				<p><input type="checkbox" id="topping3" name="topping[]" value="Sprinkles">
				<label for="topping3">Sprinkles</label></p>
				<p><input type="checkbox" id="topping4" name="topping[]" value="Sugar Spun Flowers">
				<label for="topping4">Sugar Spun Flowers</label></p>
				<p><input type="checkbox" id="topping5" name="topping[]" value="Marshmallows">
				<label for="topping5">Marshmallows</label></p>
				<p><input type="checkbox" id="topping6" name="topping[]" value="None">
				<label for="topping6">None</label></p>
				
				<p><label for="city">Cake Topper*</label>
				<select name="topper" id="topper" required>
					<option>Happy Birthday </option>
					<option>Mr. and Mrs. Forever</option>
					<option>Happy New Year</option>
					<option>Merry Christmas</option>
					<option>Happy Valentine's Day</option>
					<option>Birthday Girl</option>
					<option>Birthday Boy</option>
					<option>Happy July 4th</option>
					<option>None</option>
				</select></p>
				
				<p><label for="message">Cake Message*</label>
				<input type="text" id="message" name="message" 
				placeholder="Type the exact text you would like on the cake or type &quot;None&quot;" oninput="this.className = ''" required></p>
			  </div>
			  
			  <div class="tab">Mailing Address:
				<p><label for="fullname">Full Name*</label>
				<input type="text" id="fullname" name="fullname" placeholder="John M. Doe" oninput="this.className = ''" required></p>
				<p><label for="address">Full Address*</label>
				<input type="text" id="adr" name="address" placeholder="542 W. 15th Street, New York City, NY, 100001" oninput="this.className = ''" required></p>

				<br>Card Information:<br>
				<p><label for="fname">Accepted Cards</label><br>
				<img style ="float: left" src ="images/cards.png" alt = "accepted cards"/><br><br></p>
           
				<p><label for="cardname">Name on Card*</label>
				<input type="text" id="cardname" name="cardname" placeholder="John Doe" required></p>
				<p><label for="cardnum">Credit card number*</label>
				<input type="text" id="cardnum" name="cardnum" placeholder="1111-2222-3333-4444" required></p>
				<p><label for="expmonth">Exp Month*</label>
				<input type="text" id="expmonth" name="expmonth" placeholder="September" required></p>
				<p><label for="expyear">Exp Year*</label>
				<input type="text" id="expyear" name="expyear" placeholder="2018" required></p>
				<p><label for="cvv">CVV*</label>
				<input type="text" id="cvv" name="cvv" placeholder="352" required></p>
				<p><label  for="myfile">Sweet Deal Coupon:</label>
				<input type="button" id ="memcard" value="?" onClick="showMessage()" >
				<input type="file" id="myfile" name="myfile"></p>
				<input type ="submit" name="Submit" value ="Submit" id="btnsubmit" onClick="document.getElementById('regForm').submit();"> <br>

			  </div>
			  
            
			  <!-- PHP that outputs the form results with the post method -->
				<?php 

					 if (isset($_POST["Submit"])) { 
					 $fname = $_POST["fname"]; 
					 $lname = $_POST["lname"];
					 $email = $_POST["email"];
					 $phone = $_POST["phone"]; 
					 $frosting = $_POST["frosting"]; 
					 $allergy = $_POST["allergy"]; 
					 $moreAllergy = $_POST["moreAllergy"];
					 $cakeSize = $_POST["size"];
					 $cakeColor = $_POST["color"];
					 $topping = $_POST["topping"];
					 $topper = $_POST["topper"]; 
					 $message = $_POST["message"]; 
					 $fullName = $_POST["fullname"]; 
					 $address = $_POST["address"];
					 $cardName = $_POST["cardname"];
					 $cardNum = $_POST["cardnum"]; 
					 $expMonth = $_POST["expmonth"]; 
					 $expYear = $_POST["expyear"];
					 $cvv = $_POST["cvv"];
					 $file = $_POST["myfile"];
					 
						
					 //Get the Cake Size function
					if($cakeSize == 6){
						$cakeSize = "16 servings";
					}
					
					else if($cakeSize == 8){
						$cakeSize = "18 servings";
					}
					
					else if($cakeSize == 10){
						$cakeSize = "24 servings";
					}
					
					else if($cakeSize == 12){
						$cakeSize = "32 servings";
					}
					
					$allergyList = implode(', ', $allergy);
					$toppingList = implode(', ', $topping);

						
					 $output = "<hr>"."Form Results:" . "<br>".
					 "First name: ". $fname ."<br>".
					 "Last name: ". $lname ."<br>".
					 "Email: ". $email ."<br>".
					 "Phone: ". $phone ."<br>".
					 "Frosting: ". $frosting ."<br>".
					 "Allergy: ". " ". $allergyList ." ". $moreAllergy ."<br>".
					 "Cake size: " . $cakeSize. "<br>".
					 "Cake color: ". $cakeColor ."<br>".
					 "Cake topping(s): " . $toppingList. "<br>".
					 "Cake topper: ". $topper ."<br>".
					 "Cake message: ". $message ."<br>".
					 "Mailing Details ". "<br>".
					 "Full name: ". $fullName ."<br>".
					 "Address: ". $address ."<br>".
					 "Name on card: ". $cardName ."<br>".
					 "Credit card number: ". $cardNum."<br>".
					 "Exp month: ". $expMonth ."<br>".
					 "Exp year: ". $expYear ."<br>".
					 "Cvv: ". $cvv ."<br>".
					 "File attached: ". $file ."<br>";
					 
					 echo $output;
					 
					 }
                     
				 ?> 
				 
			   <div style="overflow:auto;">
			  <input type="reset" value="Reset">
				<div style="float:right;">
				  <input type="button" id="prevBtn" onclick="nextPrev(-1)" value = "Previous">
				  <input type="button" id="nextBtn" onclick="nextPrev(1)"  value = "Next">
				 
				</div>
			  </div>
			  <!-- Circles which indicates the steps of the form: -->
			  <div style="text-align:center;margin-top:40px;">
				<span class="step"></span>
				<span class="step"></span>
				<span class="step"></span>
				<span class="step"></span>
			  </div>
			</form>
                </section>
			</main>			  	  
			 
<script>

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
	document.getElementById("nextBtn");
	document.getElementById("nextBtn").style.display = "none";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
	document.getElementById("nextBtn").style.display = "inline";
  }
  //run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

			
//show coupon message
 function showMessage() {
    alert("Have a sweet paradise coupon? Attach it below and get a sweet deal!");
}
			
</script>

</body>
</html>