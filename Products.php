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


		
		<div class="card-group">
  <div class="card">
    <img src="img/cover1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Naruto Shippuden</h5>
      <p class="card-text">Naruto Uzumaki wants to be the best ninja in the land. He's done well so far, but with the looming danger posed by the mysterious Akatsuki organization, Naruto knows he must train harder than ever and leaves his village for intense exercises that will push him to his limits.</p>
      <a href="Payment.php">
      <button type="button" class="btn btn-secondary btn-lg">Purchase</button>
      </a>
    </div>
  </div>
  <div class="card">
    <img src="img/cover2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">One Piece</h5>
      <p class="card-text">Monkey. D. Luffy refuses to let anyone or anything stand in the way of his quest to become the king of all pirates. With a course charted for the treacherous waters of the Grand Line and beyond, this is one captain who'll never give up until he's claimed the greatest treasure on Earth: the Legendary One Piece!</p>
      <a href="Payment.php">
      <button type="button" class="btn btn-secondary btn-lg">Purchase</button>
      </a>
    </div>
  </div>
  <div class="card">
    <img src="img/cover3.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"> Hitman Reborn</h5>
      <p class="card-text">Tsuna, a timid junior high student, is a failure at school, sports, and social life. But everything around Tsuna has been completely changed when a baby called Reborn, who claims to be an Italian hit man from Vongola family shows up! Reborn was sent to groom Tsuna for his future life as a mafia boss of the family!</p>
	  <a href="Payment.php">
      <button type="button" class="btn btn-secondary btn-lg">Purchase</button>
    </a>
    </div>
  </div>
</div>

<br>


<div class="card-group">
  <div class="card">
    <img src="img/cover4.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Fire Force</h5>
      <p class="card-text">Tokyo is burning, and citizens are mysteriously suffering from spontaneous human combustion all throughout the city! Responsible for snuffing out this inferno is the Fire Force, and Shinra is ready to join their fight. Now, as part of Company 8, he’ll use his devil’s footprints to help keep the city from turning to ash! But his past and a burning secret behind the scenes could set everything ablaze.</p>
      <a href="Payment.php">
      <button type="button" class="btn btn-secondary btn-lg">Purchase</button>
    </a>
    </div>
  </div>
  <div class="card">
    <img src="img/cover5.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Dragon Ball Super</h5>
      <p class="card-text">After 18 years, we have the newest Dragon Ball story from creator Akira Toriyama.
With Majin Buu defeated, Goku has taken a completely new role as...a radish farmer?! With Earth at peace, our heroes have settled into normal lives. But they can’t get too comfortable. Far away, the powerful God of Destruction, Beerus, awakens to a prophecy revealing his demise at the hands of an even more formidable being. When his search for the Saiyan God brings him to Earth, can Goku and his friends take on their strongest foe yet?</p>
<a href="Payment.php">
      <button type="button" class="btn btn-secondary btn-lg">Purchase</button>
    </a>
    </div>
  </div>
  <div class="card">
    <img src="img/cover6.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">One Punch Man</h5>
      <p class="card-text">One-Punch Man's one of the most beloved action manga and anime series, and while fans are appreciative of the work from original series creator ONE, much of the series' popularity stems from its Shonen Jump adaptation with notable illustrator Yusuke Murata.</p>
      <a href="Payment.php">
      <button type="button" class="btn btn-secondary btn-lg">Purchase</button>
    </a>
    </div>
  </div>
</div>


</body>

</html>