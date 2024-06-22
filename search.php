<?php

$conn = new mysqli('localhost', 'root', '', 'mangaworld') or die($conn->connect_error);

if(isset($_POST['search']))
{
    $select = $_POST['search'];


    $query = mysqli_query($conn,"Select * from browse WHERE p_name like '%$select%' OR p_description like '%$select%'") or die("Could not search");

    $count = mysqli_num_rows($query);
    if($count == 0 || $select == NULL){
        $output = 'There was no match';
    }
    else{
        while($row = mysqli_fetch_array($query))
        {
            $p_name   = $row['p_name'];
            $p_cost   = $row['p_cost'];
            $p_description   = $row['p_description'];
          

            $output .= "<br/>"."<br/>".
            "<div>".
            "<table>".
            "<tr>"
            ."<th>"."Productname"."</th>".
            "<th>"."Productcost"."</th>".
            "<th>"."Productdescrption"."</th>".
            "</tr>".
            "<tr>"
            ."<td>".$p_name."</td>".
            "<td>".$p_cost."</td>".
            "<td>".$p_description."</td>".
            "</tr>"
            ."</table>"
            ."</div>";
        }
    }


}


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

		<div class="text-center">
			<h1>Manga World</h1>
			
			
		</div>
	</div>

    <form action ="search.php"  method ="post">
        <input type="text" name="search" placeholder="Search...">
        <input type="submit" value="Search for Manga info">
        
        <?php

        echo($output);

        ?>
    </form>
</body>
</html>

