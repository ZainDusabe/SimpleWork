<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "staff");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$gender = $_REQUEST['gender'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
		$password = $_REQUEST['pwd'];

		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO college (first_name,last_name,gender,address,email,password) VALUES ('$first_name',
			'$last_name','$gender','$address','$email','$password')";
		
		if(mysqli_query($conn, $sql)){
			// echo "<h3>data stored in a database successfully."
			// 	. " Please browse your localhost php my admin"
			// 	. " to view the updated data</h3>";

			// echo nl2br("\n$first_name\n $last_name\n "
			// 	. "$gender\n $address\n $email");
			// echo '<script>alert("Dear $first_name your data sent successful !")</script>';
			function function_alert($message) {
			echo "<script>alert('Dear $message your data sent successful');</script>";
			}
			function_alert($first_name);


		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>





<!DOCTYPE html>
<html lang="en">
<head>
	<title>GFG- Store Data</title>
	<style>
			body{
            background-image: url('images/2.png');
            background-repeat: no-repeat;
            background-position-x: left;
            /* background-position-y: -10%; */
			background-size: contain;
        }


		/* The snackbar - position it at the bottom and in the middle of the screen */
#snackbar {
  visibility: hidden; /* Hidden by default. Visible on click */
  min-width: 250px; /* Set a default minimum width */
  margin-left: -125px; /* Divide value of min-width by 2 */
  background-color: green; /* green background color */
  color: #fff; /* White text color */
  text-align: center; /* Centered text */
  border-radius: 2px; /* Rounded borders */
  padding: 10px; /* Padding */
  position: fixed; /* Sit on top of the screen */
  z-index: 1; /* Add a z-index if needed */
  left: 75%; /* Center the snackbar */
  bottom: 92%; /* 30px from the bottom */
}

/* Show the snackbar when clicking on a button (class added with JavaScript) */
#snackbar.show {
  visibility: visible; /* Show the snackbar */
  /* Add animation: Take 0.5 seconds to fade in and out the snackbar.
  However, delay the fade out process for 2.5 seconds */
  -webkit-animation: fadein 0.9s, fadeout 0.5s 2.5s;
  animation: fadein 0.9s, fadeout 0.5s 2.5s;
}

/* Animations to fade the snackbar in and out */
/* @-webkit-keyframes fadein {
  from {top: 0; opacity: 0;}
  to {bottom: 90%; opacity: 1;}
}

@keyframes fadein {
  from {top: 0; opacity: 0;}
  to {bottom: 90%; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
} */
	</style>
	<link rel="stylesheet" href="main.css">
</head>
<body>

	<div class="div_for_register">
		<h1>Sign Up</h1>
		<form action="" method="post">
			
<p>
			<!-- <label for="firstName">First Name:</label> -->
			<input type="text" name="first_name" id="firstName" class="a" placeholder="First Name" required>
			</p>

			
<p>
			<!-- <label for="lastName">Last Name:</label> -->
			<input type="text" name="last_name" id="lastName" class="a" placeholder="Last Name" required> 
			</p>

			
<p>
			<!-- <label for="Gender">Gender:</label> -->
			<input type="text" name="gender" id="Gender" class="a" placeholder="Gender" required>
			</p>

			
<p>
			<!-- <label for="Address">Address:</label> -->
			<input type="text" name="address" id="Address" class="a" placeholder="Address" required>
			</p>

			
<p>
			<!-- <label for="emailAddress">Email Address:</label> -->
			<input type="text" name="email" id="emailAddress" class="a" placeholder="Email address" required>
			</p>
<p>
			<!-- <label for="emailAddress">Email Address:</label> -->
			<input type="password" name="pwd" id="pwd" class="a" placeholder="Email password" required>
			</p>

			<input type="submit" class="b" value="Submit">
			<input type="reset" class="b" value="reset">
			<!-- <button>Submit</button> -->

		</form>
<p>Already have account? <a href="signin.php">Sign In</a></p>
		<!-- <a href="users.php">all users</a> -->
</div>
<!-- Use a button to open the snackbar -->
<!-- <button onclick="myFunction()">Show Snackbar</button> -->

<!-- The actual snackbar -->
<div id="snackbar">Dear <? $message ?> you have successful registered !! </div>
<script src="main.js"></script>
</body>
</html>
