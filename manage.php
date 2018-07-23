<?php
include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Panel GJ2K17</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="text-center">
<h1>Welcome <?php echo $login_session; ?> to Admin panel</h1>
<h2>Kindly Click Pay Button only when payment recived</h2>
<h2><a href = "logout.php">Sign Out</a></h2>





<?php

$sql = "SELECT * from register where verify=0";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

        echo "
<strong> Name: </strong>" . $row["fname"]. "<strong> Email: </strong>" . $row["email"]. "<strong> Event: </strong>" . $row["event"]. "<strong> GJID: </strong>".$row["gjid"]. "
<a href='pay.php?id=".$row["gjid"]."' class='btn btn-primary'>Pay</a><br>";
    }
} else {
    echo "0 results";
}



?>



</div>


</body>

</html>