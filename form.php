<?php
session_start();
?>
<?php
require ("db/db.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $conn->real_escape_string($_POST['fname']);
    $email = $conn->real_escape_string($_POST['email']);
    $college = $conn->real_escape_string($_POST['college']);
    $roll = $conn->real_escape_string($_POST['roll']);
    $phone = $conn->real_escape_string($_POST['phone']);

   // $gjid=substr($email,0,4).floor(RAND()*9999);
    $gjid=substr($email,0,5).md5(uniqid());

    $sqlreg = "INSERT INTO register(fname, email, college, roll, phone, gjid) VALUES('$fname','$email','$college',$roll,$phone,'$gjid')";

    if ($conn->query($sqlreg) === TRUE) {
        echo "<h1>Sucessfully Registered</h1><meta http-equiv=\"refresh\" content=\"1; URL=./\" />";
    } else {
        echo "Error: " . $sqlreg . "<br>" . $conn->error;
    }



}


session_unset();
session_destroy();

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



<div class="container nimi form ">
    <div class="col-sm-4"></div>
    <div class="col-sm-4" style="color: black;">

            <form method="post" action="form.php">

                <h3>Register For Events</h3>

                    <input type="text" name="fname" required="required" placeholder="Name"><br>

                    <input type="email" name="email" required="required" placeholder="Email ID"><br>

                    <input type="text" name="college" required="required" placeholder="Enter Your College Name"><br>

                    <input type="text" name="roll" required="required" placeholder="Full Roll No."><br>

                    <input type="tel" name="phone" required="required" placeholder="Enter 10 Digit Mobile Number"><br>

                    <button type="submit" name="submit" value="submit">Submit</button>

            </form>
    </div>

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