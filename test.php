<?php
error_reporting(0);
 include('db/db.php');
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
   


  <div class="row">
            <div class="col-lg-12">
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-md-4 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <div class="caption">
                        <h3>Technical Event</h3>
                        <p>Techno is a tool to get motive and enhance skill.</p>
                        <p>
                            <a href="eventsel.php?event=t" class="btn btn-primary">Select Event !</a>
                            <a href="images/rule/GJ2K17%20RULE%20GUIDE%20TECHNICAL.pdf" class="btn btn-default">Rule Guide </a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <div class="caption">
                        <h3>Cultural Event</h3>
                        <p>Culture is the arts elevated to a set of beliefs. </p>
                        <p>
                            <a href="eventsel.php?event=c" class="btn btn-primary">Select Event !</a>
                            <a href="images/rule/GJ2K17%20RULE%20GUIDE%20CULTURAL.pdf" class="btn btn-default">Rule Guide</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 hero-feature">
                <div class="thumbnail">

                    <div class="caption">
                        <h3>Fun & Games</h3>
                        <p>Just Play , Have Fun , Enjoy the game. </p>
                        <p>
                            <a href="eventsel.php?event=f" class="btn btn-primary">Select Event !</a>
                            <a href="images/rule/GJ2K17%20RULE%20GUIDE%20FUN&GAMES.pdf" class="btn btn-default">Rule Guide</a>
                        </p>
                    </div>
                </div>
            </div>

</div>
</div>
</section>
<center><button type="button" class="btn btn-default btn-lg"> Check Out Cart</button></center>
</div>







<footer id="footer">
    <div class="container">
        <div class="text-center">
            <p><br>&copy;2017 Developed by <a href="https://www.facebook.com/nnimish75">Nimish Vishnoi</a> </p>
        </div>
    </div>
</footer>
<!--/#footer-->








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