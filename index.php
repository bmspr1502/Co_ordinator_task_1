<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pranava Raman's Site</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <link href="logo.jpg" rel="icon">
    <link rel="stylesheet" href="kite.css">

</head>

<body >
<div class="container-fluid p-0">
<header>
<div class="jumbotron text-white jumbotron-image shadow" id="top" >
    <nav class="navbar navbar-expand-md navbar-dark">
<a class="navbar-brand btn btn-dark btn-lg" href="#" ><h1>BMS</h1></a>
<a class="navbar-brand ml-auto btn btn-dark btn-lg" href="shop.php" ><h1>MilkShakes</h1></a>
</nav>
    <!--nav class="navbar navbar-expand-md navbar-dark">

        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto pd-2">
                <li class="nav-item">
                    <a class="nav-link btn btn-dark btn-lg" href="menu.php">Menu</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link btn btn-dark btn-lg" href="cart.php"><?php/*
                        if(isset($_SESSION['username'])){
                            echo $_SESSION['username']."'s ";
                        }*/
                    ?>Cart</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link btn btn-dark btn-lg" href="#contact-us">Contact Us</a>
                </li>


                <li class="nav-item">
                    <?php/*
                    if(isset($_SESSION['username'])){*/
                        ?>
                        <a class="nav-link btn btn-dark btn-lg" href="logout.php">Logout</a>

                        <?php/*
                    }else{*/
                        ?>
                        <a class="nav-link btn btn-dark btn-lg" href="login.php">Login</a>

                        <?php/*
                    }*/
                    ?>
                </li>
            </ul>
        </div>
    </nav-->

    <h1 class="display-3 text-center" id="hmb">
        Pranava Raman BMS
    </h1>
    <p class="push-spaces"></p>
</div>
</header>

<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col mt-3">
            <h2 class='text-center text-white'>Kite Flying</h2>
            <div class="card text-light p-4 " id="kite_container">     
            <div class="kite"> 
                <div class="tail"></div>
            </div>
            </div>
        </div>
    </div>
    <p class="push-spaces"></p>
</div>


<div class="container text-center text-light p-2" >
    <h2>Gallery</h2>
    <div class="text-center" id='gallery'>
    <!--div class="row">
        <div class="col">
            <img src="wedding.jpg">
            <img src="rocks.jpg">
            <img src="falls2.jpg">
            <img src="paris.jpg">
            <img src="nature.jpg">
            <img src="mist.jpg">
            <img src="paris.jpg">
        </div>
        <div class="col">
            <img src="underwater.jpg">
            <img src="ocean.jpg">
            <img src="wedding.jpg">
            <img src="mountainskies.jpg">
            <img src="rocks.jpg">
            <img src="underwater.jpg">
        </div>
        <div class="col">
            <img src="wedding.jpg">
            <img src="rocks.jpg">
            <img src="falls2.jpg">
            <img src="paris.jpg">
            <img src="nature.jpg">
            <img src="mist.jpg">
            <img src="paris.jpg">
        </div>
        <div class="column">
            <img src="underwater.jpg">
            <img src="ocean.jpg">
            <img src="wedding.jpg">
            <img src="mountainskies.jpg">
            <img src="rocks.jpg">
            <img src="underwater.jpg">
        </div>
    </div-->

    <div class='row'>
        <div class='col-lg-3 col-md-4 col-sm-6 mt-3'>
            <img class='img-fluid rounded' src='img/chappathi.jpg'>
        </div>
        <div class='col-lg-3 col-md-4 col-sm-6 mt-3'>
        <img class='img-fluid rounded' src='img/chappathi.jpg'>
        </div>
        <div class='col-lg-3 col-md-4 col-sm-6 mt-3'>
        <img class='img-fluid rounded' src='img/chappathi.jpg'>
        </div>
    </div>

        <!--div id="demo" class="container mx-auto carousel slide mt-2 p-2" data-ride="carousel">

            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
                <li data-target="#demo" data-slide-to="4"></li>
            </ul>

            <div class="carousel-inner mx-auto">
                <div class="carousel-item active">
                    <img class="img-fluid" src="idli.jpg" alt=Idli">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="dosa.jpg" alt="Dosa">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="meals.jpg" alt="Meals">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="pongal.jpg" alt="Pongal">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="chappathi.jpg" alt="Chappathi">
                </div>
            </div>

            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div-->
    </div>
</div>
<footer class="mt-4">
<div class="jumbotron text-center bg-dark text-light" style="margin-bottom:0" id="contact-us">
    <div class="row">
        <div class="col-lg-6">
            <h3>Hotel Muruga Bhavan</h3>
            <p>35, Adyar Main Road,<br>Madhya Kailash, <br> Chennai.<br><br>
                <span class="material-icons" style="font-size: 16px;">call</span> <a href="callto:+919432112345" >+91 94321 12345</a><br>
                <span class="material-icons" style="font-size: 16px;">email</span><a href="mailto: hmb@email.com" >hmb@email.com</a><br>
            </p>
        </div>
        <div class="col-lg-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3887.478094832939!2d80.24905!3d13.005198000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x16f41d10f57949e9!2sKasthurba%20Nagar!5e0!3m2!1sen!2sus!4v1613743064308!5m2!1sen!2sus" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</div>
</footer>
    <button onclick="topFunction()" id="myBtn" class="btn btn-danger"  title="Go to top"><i class="fa fa-arrow-up"></i> </button>

</div>
<script src="main.js">
</script>
</body>
</html>
