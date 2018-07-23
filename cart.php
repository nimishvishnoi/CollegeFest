<?php
error_reporting(0);
session_start();
include ('db/db.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>GyanJyoti17 | Annual Fest HCST</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <link href="css/nimi.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/favicon/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon-precomposed" sizes="192x192" href="images/favicon/android-chrome-192x192.png">
    <link rel="apple-touch-icon-precomposed" sizes="512x512" href="images/favicon/android-chrome-512x512.png">
    <link rel="apple-touch-icon-precomposed" href="images/favicon/favicon-32x32.png">
</head><!--/head-->

<body>
<header id="header" role="banner">
    <div class="fix main-nav">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img class="img-responsive" src="images/logogj.png" alt="logo">
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="no-scroll" href="./">Home</a></li>
                        <li class="scroll"><a href="index.php#events">Event</a></li>
                        <li class="scroll"><a href="index.php#about">About</a></li>
                        <li class="scroll"><a href="index.php#contact">Contact</a></li>
                        <li class="active"><a class="scroll" href="#form">Register</a></li>
                        <li><a class="no-scroll" href="gallery.php">Gallery</a></li>
                        <li><a class="no-scroll" href="live.php">Live</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!--/#header-->

<div class="form">
    <section id="form" style="margin-top: 150px;margin-bottom: 50px">
        <div class="container">


            <a href='form.php' class='btn btn-default'> Register Selected Events >></a>

            <a href='test.php'  class='btn btn-default'> Select More Events</a>
        <hr/>
            <div class="row">
                <div class="col-lg-12">
                </div>
            </div>
            <!-- /.row -->
            <!-- Page Features -->
            <div class="row text-center">




<?php


if($_SESSION['cart']) {


    foreach($_SESSION['cart'] as $event_id => $quntity) {

        echo  '  <br/>  '.$event_id.' ' ;

        $eve = "SELECT evename from event where id= '$event_id'";
        $ever = $conn->query($eve);
        if ($ever->num_rows > 0) {
            // output data of each row
            while($row = $ever->fetch_assoc()) {
                echo "Event Name: " . $row["evename"]."<br>";
            }
        } else {
            echo "0 results";
        }
    }
}


?>




</div></div>


    </section>
</div>

<footer id="footer">
    <div class="container">
        <div class="text-center">
            <p><br>&copy;2017 Developed by <a href="https://www.facebook.com/nnimish75">Nimish Vishnoi</a> </p>
        </div>
    </div>
</footer>
<!--/#footer-->







<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="js/gmaps.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/jquery.parallax.js"></script>
<script type="text/javascript" src="js/coundown-timer.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo.js"></script>
<script type="text/javascript" src="js/jquery.nav.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>

