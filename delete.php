
<?php


        $conn = new mysqli('localhost', 'root', '', 'mangaworld') or die($conn->connect_error);

        if (isset($_GET['delete'])){
            $id = $_GET['id'];
            mysqli_query($conn, "DELETE FROM tbl_payment WHERE tp_id=$id");
            header('Location:Payment.php');


        }
        ?>




<?php
session_start();

$name = $_SESSION['name'];
?>

<?php
$cookie_name = "Manga";
$cookie_value = "86400";
setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/"); // 86400 = 1 day
?>

<!DOCTYPE html>
<html>

<head>

	
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<link href="style.css" rel="stylesheet" />

	<title>Welcome | My_Site</title>
	<SCRIPT LANGUAGE="JavaScript">
		history.forward()
	</SCRIPT>



</head>

<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

<br> <br>
<nav class="navbar navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Manga World</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Manga World</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Welcome.php">Welcome</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Products.php">Products</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="ContactUs.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="delete.php">Delete Item</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Payment.php">Payment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="search.php">Search</a>
          </li>
		  <form action="Logout.php" method="POST">
        <button type="submit" name="logout_btn" class="btn-primary"> Logout </button>
      </form>
         
        </ul>
      </div>
    </div>
  </div>
</nav>
<br> <br> <br>
<h6>Welcome <?php echo $name; ?></h6>


<form action="" method="Get">

     <input type="text" name="id" placeholder="Payment ID">
    
     <br> <br>

	 <input type="submit" name="delete" value="Delete">
	</form>
</body>
</html>