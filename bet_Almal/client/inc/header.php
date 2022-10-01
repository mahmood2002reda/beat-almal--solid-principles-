
<?php

if (isset($_POST['submit']))
{

  $name =$_POST['name'];
  $email =$_POST['email'];
  $password =$_POST['password'];

  if (checkEmpty($name) AND checkEmpty($email) AND checkEmpty($password)){
    if(ValidEmail($email))
    {
      $hashedPassword= password_hash($password,PASSWORD_DEFAULT);
      $sql = "INSERT INTO admins (`admin_name`,`admin_email`,`admin_password`) /* query Sentence  will be paramter in db_insert  */
            VALUES ('$name','$email','$hashedPassword') ";
                        $success_message = db_insert($sql);   // function in db.php
    }

    
    else {
      $error_message= "please correct email";
    }
  }
  else{
    $error_message= "please fill all filde";
  }
  require_once '../../function/messages.php' ;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://localhost/m25r/bet_Almal/assets/js/bootstrap.min.js" >
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=C:\wamp64\www\m25r\bet_Almal\assets\css\style.css >

    <title>Dashboard | Home Page</title>
  </head>
  <body style= "background-image: url(<?php echo "../assets/images/bg-1.jpg" ;?>)" >



  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href=""> <img src="http://localhost/m25r/bet_Almal/assets/images/logo.png" width="70" alt="LOGO"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cities
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="  ">Add</a>
                        <a class="dropdown-item" href="">View All</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="">Add</a>
                        <a class="dropdown-item" href="">View All</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Orders
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="">View All</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Admins
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="http://localhost/m25r/bet_Almal/client/clients/add.php">Add</a>
                        <a class="dropdown-item" href="">View All</a>
                    </div>
                </li>


                <li class="nav-item ">
                    <a class="nav-link" href="" target="_blank">View Site</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"  href="?>"stule="border:1" >Logout</a>
                </li>

            </ul>

            
        </div>
    </nav>


    <div class="container-fluid mt-5 mb-5">
        <div class="row"> 
</body>