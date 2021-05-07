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
    <link rel="stylesheet" href="kite.css">

</head>

<body >
<div class="container-fluid p-0">
<header>
<div class="jumbotron text-white jumbotron-image shadow" id="top" >
    <nav class="navbar navbar-expand-md navbar-dark">
<a class="navbar-brand btn btn-dark btn-lg" href="#" ><h1>BMS</h1></a>
<a class="navbar-brand ml-auto btn btn-dark btn-lg" href="menu.php" ><h1>MilkShakes</h1></a>
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

        <div id="demo" class="container mx-auto carousel slide mt-2 p-2" data-ride="carousel">

            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
            </ul>

            <div class="carousel-inner mx-auto">
                <div class="carousel-item active">
                    <img class="img-fluid rounded img_click" src="https://static.pexels.com/photos/52500/horse-herd-fog-nature-52500.jpeg" alt="Horse">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid rounded img_click" src="https://static.pexels.com/photos/66898/elephant-cub-tsavo-kenya-66898.jpeg" alt="Elephant">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid rounded img_click" src="https://static.pexels.com/photos/158471/ibis-bird-red-animals-158471.jpeg" alt="Bird">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid rounded img_click" src="https://static.pexels.com/photos/50988/ape-berber-monkeys-mammal-affchen-50988.jpeg" alt="Monkeys">
                </div>
                
            </div>

            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>

        <div class='row'>
            <div class='col-lg-3 col-md-4 col-sm-6 mt-3 p-1'>
                <img class='img-fluid rounded img_click' src='img/chappathi.jpg'>
            </div>
            <div class='col-lg-3 col-md-4 col-sm-6 mt-3 p-1 '>
                <img class='img-fluid rounded img_click' src='img/dosa.jpg'>
            </div>
            <div class='col-lg-3 col-md-4 col-sm-6 mt-3 p-1'>
                <img class='img-fluid rounded img_click' src='img/pongal.jpg'>
            </div>
            <div class='col-lg-3 col-md-4 col-sm-6 mt-3 p-1 '>
                <img class='img-fluid rounded img_click' src='img/meals.jpg'>
            </div>
        </div >
    </div>
</div>

<div class="modal" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">View Image</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <img id='modalImg' width='100%' class='img-fluid rounded'>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>


<footer class="mt-4">
<div class="jumbotron text-center bg-dark text-light" style="margin-bottom:0" id="contact-us">
    <div class="row">
        <div class="col">
            <h3>Pranava Raman BMS</h3>
            <p>2019103555, <br>B.E., CSE (2nd year).<br><br>
                <span class="material-icons" style="font-size: 16px;">call</span> <a href="callto:+919443501317" >+91 94435 01317</a><br>
                <span class="material-icons" style="font-size: 16px;">email</span><a href="mailto: bmspr1502@gmail.com" >bmspr1502@gmail.com</a><br>

            </p>
        </div>
    </div>
</div>
</footer>
    <button onclick="topFunction()" id="myBtn" class="btn btn-danger"  title="Go to top"><i class="fa fa-arrow-up"></i> </button>

</div>
<script>
    
$(document).ready(function() {
    $(".img_click").click(function(){
        var src = $(this).attr('src');
        $("#myModal").modal();
        $("#modalImg").attr("src", src);

    })
});
</script>
<script src="main.js">
</script>
</body>
</html>
