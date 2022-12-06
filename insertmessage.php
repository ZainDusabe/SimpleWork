<!DOCTYPE html>
<html>

<head>
	<title>ITG</title>
</head>

<body>
	<center>
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
		
		// Taking all 3 values from the form data(input)
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$message = $_REQUEST['message'];		
		// Performing insert query execution
		// here our table name is message
		$sql = "INSERT INTO message ('name','email','message',) VALUES ('$name',
			'$email','$message')";
		
		if(mysqli_query($conn, $sql)){
			// echo "<h3>data stored in a database successfully."
			// 	. " Please browse your localhost php my admin"
			// 	. " to view the updated data</h3>";

			// echo nl2br("\n$first_name\n $last_name\n "
			// 	. "$gender\n $address\n $email");
			echo '<script>alert("Dear $first_name your data sent successful !")</script>';


		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>

	</center>


</body>

</html>
