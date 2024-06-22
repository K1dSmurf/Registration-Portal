

<?php


$conn = new mysqli('localhost', 'root', '', 'mangaworld') or die($conn->connect_error);

    if(isset($_POST['submit'])){
        session_start(); 

        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['password'] = htmlentities($_POST['password']);

        $name = $_POST['name'];
        $password = $_POST['password'];


        $sql = "SELECT * FROM tbl_users WHERE username = ? AND password = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $name, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();


        if ($result->num_rows == 1) {

      header('Location:Welcome.php');
        }
        else{
            echo "Incorrect Credentials";
        }

        $stmt->close();
        $conn->close();
    }








$username_err = ""; // Declaring variable for username error,
$password_err = ""; // Declaring variable for password error.

// checking if variable is set



if (isset($_POST['submit'])) { // If statement to give the submit button instructions to carry out before you are directed to the other pages.

	if (empty($_POST["name"])) { // 

		$username_err = "*Please enter username";
		
	}

	if (empty($_POST["password"])) {

		$password_err = "*Password field empty";
	}

	

	if (!empty($_POST["name"]) && (!empty($_POST["password"] ))) {

		$_SESSION['name'] = htmlentities($_POST['name']);
		 // Redirected to the Welcome page after the requirements are made
	} 
	

	
}


?>

<?php // naming the cookie and giving it a expire time
$cookie_name = "Manga";
$cookie_value = "86400";
setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/"); // 86400 = 1 day
?>

<!DOCTYPE html>
<html>
<head>
    <title> lOGIN </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
	<link href="style.css" rel="stylesheet" />
</head>


<body>

<?php // Lets you know if the cookie is active or not 
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
}
?>












<div class="container-sm"> 
		<h2>MANGA WORLD</h2>
		<br />
		<h3>Login</h3>
		<br /> 
		
		<form method="POST" action="<?php echo htmlentities( $_SERVER['PHP_SELF']); ?>">	
		<div class="form-group row">
				<div class="col-md-4">
					<input type="text" name="name" class="form-control" placeholder="Enter Username">
					<span class="help-block text-danger"><?php echo $username_err; ?></span>
					<br><br>
					<input type="password" name="password" class="form-control" placeholder="Enter Password">
					<span class="help-block text-danger"><?php echo $password_err; ?></span>
					<br /><br />
					<input type="submit" class="btn btn-primary btn-lg" name="submit" value="Login">
					<br><br>
					<p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
				</div>
			</div>
		</form>
	</div>
	
</body>
</html>