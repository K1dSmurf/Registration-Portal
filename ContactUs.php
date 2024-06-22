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

	
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

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
		<div class="text-center">
<br><br><br>

<section>

<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label"> First Name</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Last Name</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-8">
    <label for="inputAddress2" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Parish</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-2">
  <textarea id="w3review" name="w3review" rows="4" cols="50" >

</textarea>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        We Will be in contact
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</section>

</body>

</html>