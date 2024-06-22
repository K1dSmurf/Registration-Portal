<?php


    $firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
    $address = $_POST['address'];
	$items = $_POST['items'];


    $conn = new mysqli('localhost','root','','mangaworld');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        $stmt = $conn->prepare("insert into tbl_payment(firstname, lastname, email, address, items) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $firstname, $lastname, $email, $address, $items);
		$execval = $stmt->execute();
		echo $execval;
        echo "Item Successfully Added!!";
		header('Location:Payment.php');
		$stmt->close();
		$conn->close();
		

}

?>


