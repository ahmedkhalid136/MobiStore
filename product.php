<?php
  session_start();
  $_SESSION['cart']=array();
  $conn = new mysqli("localhost","root","","webroject");
  $pid=$_GET['pid'];
  $sql = "SELECT * FROM products where `pid`= '$pid' ";
  $result = mysqli_query($conn,$sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mobi Store</title>
  <!-- FONT AWSOME CDN -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <header>
 
    <nav style="margin-top: -10px; border-bottom: 1px solid #8b0000; text-align: center;min-height: 20%; padding: 2%;"
      class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand nav-logo" href="index.php"><span style="color: blue;font-size: 30px;">Mobi</span> <span
          style="color: red;font-size: 30px;">store</span></a>
      <button style="margin-right: 29%;" class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto mt-lg-0">
       
          <li class="nav-item">
            <a class="nav-link" style="font-size: 20px;" href="index.php"> Welcome </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" style="font-size: 20px;" href="#" id="navbarDropdownMenuLink"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Phone
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="iphone.php">Iphone</a>
              <a class="dropdown-item" href="samsung.php">Samsung</a>

            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="font-size: 20px;" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="font-size: 20px;" href="signup.php">signup</a>
          </li>

          <li class="nav-item">
            <a href="cart.php"> <i class="fa fa-2x fa-shopping-cart" style="margin-right:20px;margin-top: 10px ;"
                aria-hidden="true"></i> </a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
  </header>    
  <section>
    <?php
     while($row=mysqli_fetch_array($result)){ 
      echo '<div class="container-fluid"><div class="row">';
      echo     ' <div style="padding:0 5%" class="col-lg-6 left-side">';
      echo        "<img src='images/".$row['images']."' >";
      echo       '</div>';
      echo    '  <div style="background-color:#f4f4f2; padding-left:1%;" class="col-lg-6 right-side">' ;
      echo       ' <br> <h1>'.$row['Name'].'</h1>';
       echo         '<h6>Rs '.$row['Price'].'</h6>';
       echo       '  <hr>';
        echo       ' <ul>';
          echo        '  <li>6GB RAM</li>';
          echo         ' <li>64GB ROM</li>';
          echo      '</ul>';
          echo         '<p class="container"> Description: <br><br> '.$row['Description'].'</p>';
           echo    ' <br><a href=cart.php?pid='.$row['pid'].'><button class="btn btn-outline-warning"  href="admin.php"  style="display: block;"><i';
           echo    '  class="fas fa-shopping-cart"></i>&nbsp Add To';
           echo        ' Cart</button></a>';
          echo'  </div>';
       echo '</div></div>';
     }
      ?>
    </section>

    <footer style="margin-top: 3%">
    
    <br />
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3 style="color: grey;">Get in Touch</h3>
          <br />
          <p style="color: grey;"><i class="far fa-envelope"></i>&nbsp customercare@mobistore.com</p>
          <p style="color: grey;"><img src="./images/phone-alt-solid.svg" style="height: 17px" alt="" />&nbsp
            +92-337-9871230</p>
          <p style="color: grey;"><i class="fab fa-facebook fa-lg"></i>&nbsp <i class="fab fa-instagram fa-lg"></i>
          </p>
        </div>
        <div class="col-lg-6" style="color: grey;">
          <h3 style="color: grey;">Our Company</h3>
          <br />
          <a href="status.php"><p style="color: grey;">Track Your Order</p></a>
          <p style="color: grey;">Terms & Condition</p>
        </div>
     
        </div>
      </div>
    </div>
    <br />
    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


    <script type="text/javascript" src="js/bootstrap/bootstrap-dropdown.js"></script>
    <script>
      $(document).ready(function () {
        $('.dropdown-toggle').dropdown()
      });
    </script>
</body>

</html>