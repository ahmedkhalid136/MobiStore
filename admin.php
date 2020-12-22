<?php

$servername = "localhost";
 $username = "username";
 $Email ="Email";
 $password = "password";
 $DB= "webroject";
 $conn = new mysqli("localhost","root","",$DB);
if (!$conn) {
     die("Connection failed: " . $con->connect_error);
}


if(isset($_REQUEST['submit']))
{  
  if(($_REQUEST['username'] == "")||($_REQUEST['Email'] == "")||($_REQUEST['Password']== "")){
          echo "Fill all the fields";
         }
         else{
          $mobilename= $_POST['mobilename'];
          $RAM = $_POST['RAM'];
          $description =$_POST['description'];
          $ROM=$_POST['ROM'];
          $RAM=$_POST['RAM'];
          $sql = "INSERT INTO `products`(`ProductID`, `Name`, `Description`, `Brand`, `RAM`, `ROM`, `images`) VALUES ('$mobilename','$RAM','$description','$ROM')";
          //inserting into database
          if ($conn->query($sql) === TRUE) {
           
            header("Location: http://localhost/Project 1/index.php");
            exit;
                     } else {
                       echo "Error Entering database: " . $conn->error;
                     }       
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/admin.css">
</head>

<body>
    <header>
        <nav style="text-align: center; font-size: 3rem; background-color: grey; color: white;">
            <h1>WELCOME TO ADMINISTRATOR</h1>
        </nav>
    </header>

    <section id="Add" style="border:2px solid black; background-color: beige;">
        <h1 style="text-align: center; font-size: 2rem;">Add Mobile</h1>
        <form action="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="name">Mobile Name: &nbsp</label><input type="text" name="mobilename">
                    </div>
                    <div class="col-lg-6">
                        <label for="name">RAM: &nbsp</label><input type="int" name="RAM">
                    </div>
                    <div class="col-lg-6">
                        <label for="name">Description: &nbsp&nbsp&nbsp</label><input type="text" name="description">
                    </div>
                    <div class="col-lg-6">
                        <label for="name">ROM: &nbsp</label><input type="text" name="ROM">
                    </div>
                    <div class="col-lg-6">
                        <label for="mob-type">
                            Mobile-Type: &nbsp&nbsp
                        </label>
                        <select name="mob-type" id="">
                            <option name="samsung" value="samsung">Samsung</option>
                            <option name="iphone"value="iphone">Iphone</option>
                        </select>
                    </div>
                    <div class="col-lg-12">
                        <label for="image">Select Image</label>
                        <input name="image" type="file">
                    </div>
                </div>
                <button class="btn btn-md btn-outline-dark" type="submit">Submit</button>
            </div>
        </form>
        <br>
    </section>
    <br>
    <section id="delete" style="border:2px solid black;background-color:beige;">
        <h1 style="text-align: center; font-size: 2rem;">Delete Mobile</h1>
        <form action="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="name">Enter Product ID: &nbsp</label><input type="text" name="name">
                    </div>
                </div>
                <button class="btn btn-md btn-outline-dark" type="submit">Submit</button>
            </div>
        </form>
        <br>
    </section>
    <br>
    <section id="delete" style="border:2px solid black; background-color: beige;">
        <h1 style="text-align: center; font-size: 2rem;">Update Mobile</h1>
        <form action="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <label for="name">Enter Product ID: &nbsp</label><input type="text" name="name">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="name">Mobile Name: &nbsp</label><input type="text" name="name">
                            </div>
                            <div class="col-lg-6">
                                <label for="name">RAM: &nbsp</label><input type="text" name="name">
                            </div>
                            <div class="col-lg-6">
                                <label for="name">Description: &nbsp&nbsp&nbsp&nbsp</label><input type="text"
                                    name="name">
                            </div>
                            <div class="col-lg-6">
                                <label for="name">ROM: &nbsp</label><input type="text" name="name">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-md btn-outline-dark" type="submit">Submit</button>
            </div>
        </form>
        <br>
    </section>
</body>

</html>