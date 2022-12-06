<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
	body{
            background-image: url('images/4.png');
            background-repeat: no-repeat;
			/* background-size: contain; */
            background-position-x:left;
            background-position-y: 20%;
            
        }
    </style>
	<link rel="stylesheet" href="main.css">


    <?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $email = mysqli_real_escape_string($db,$_POST['email']);      
      $sql = "SELECT id FROM college WHERE email = '$email'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("email");
         $_SESSION['login_user'] = $email;
         
         header("location: a.html");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

</head>
<body>
 
<div class="div_for_register">
		<h1>Sign In</h1>
		<form action="" method="post">			
            <p>
			    <input type="text" name="email" id="emailAddress" class="a" placeholder="Email address" required>
			</p>
			<input type="submit" onclick="myFunction()" class="b" value="Sign In">
		</form>
        <p>
            <a href="#">Google</a>
            <a href="#">Github</a>
        </p>
        <p>
            Don't have account? 
            <a href="signup.php">Sign Up</a>
        </p>

</div>
<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
</body>
</html>