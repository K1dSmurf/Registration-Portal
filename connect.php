<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
    $address = $_POST['address'];
	$username = $_POST['username'];
	$password = $_POST['password'];
    $c_password = $_POST['c_password'];

	// Database connection
	$conn = new mysqli('localhost','root','','mangaworld');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into tbl_users(firstName, lastName, email, address, username, password, c_password) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssss", $firstName, $lastName, $email, $address, $username, $password, $c_password);
		$execval = $stmt->execute();
		echo $execval;
        echo "Success!!!!!";
		header('Location:index.php');
       
		$stmt->close();
		$conn->close();
	}
?>