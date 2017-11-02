<?php
    
    session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Login Form</title>
<meta charset="UTF-8" />
<meta name="Designer" content="PremiumPixels.com">
<meta name="Author" content="$hekh@r d-Ziner, CSSJUNTION.com">
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/structure.css">
</head>

<body>
<form class="box login" method="post" action="login.php">
	<fieldset class="boxBody">
	  <label>Email</label>
	  <input type="text" name="email" tabindex="1"  required>
	  <label>Password</label>
	  <input type="password" name="password" tabindex="2" required>
	</fieldset>

	<footer>
	  <input type="submit" name="login" class="btnLogin" value="Login" tabindex="4">
	</footer>
</form>

</body>
</html>

<?php 

    include '../libs/database.php';
    include '../libs/config.php';
    include '../functions.php';

    // Creating Database Object

    $db = new database();


    if(isset($_POST['login'])){
        
        $email    = mysqli_real_escape_string($db->link, $_POST['email']);
        $password = mysqli_real_escape_string($db->link, $_POST['password']);

        $query = "SELECT * FROM admin WHERE email = '$email' AND pass = '$password'";

        $run = $db->select($query);

        if($run->num_rows > 0){
           $_SESSION['email'] = $email;
           header('location: index.php');
        }else{
           echo "Email and Password is not correct";
        }
    }
?>