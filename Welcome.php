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

	<title>Welcome | MANGA WORLD</title>
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
		<div class="text-center">
			<h1>Manga World</h1>
			
			
		</div>
	</div>


	<div class="box">
	<div id="carouselx" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/Manga1.jpg" alt="Los Angeles" class="d-block w-500" width="900" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/Manga2.jpg" alt="Chicago" class="d-block w-500" width="900" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/Manga3.jpeg" alt="New York" class="d-block w-500" width="900" height="500">
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
</div>


<div class="box1">
<p>
	Manga World, officially managed by the Japanese manga magazine Weekly Shonen Jump’s company, started its service in 2019. Weekly Shonen Jump is one of the most
	 popular Japanese manga magazine around the world and has published many famous manga such as One Piece, Naruto, Dragon Ball, Demon Slayer: Kimetsu no Yaiba and so on.
<br>
Manga World by Adrian Smith offers online manga of the latest Weekly Shonen Jump for free at the same time as the magazine is published in Japan. They are translated into English and Spanish. In addition 
to the recent manga, you can read popular completed series including Naruto, Dragon Ball, Tokyo Ghoul, etc. That is why Manga World
 by Adrian Smith is the most recommended manga site all over the globe.



</p>

</div>

</body>

</html>