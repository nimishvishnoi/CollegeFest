<?php

include ('session.php');
include ('db/db.php');


$gjid=$_GET['id'];
echo $gjid;

$sql="select gjid from register where gjid='$gjid''";
//$sql="update register set verify=1 WHERE gjid=$gjid";
$ever=$conn->query($sql);

if ($ever->num_rows > 0) {
    // output data of each row
    while($row = $ever->fetch_assoc()) {
        echo "GJID: " . $row["gjid"]."<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
//header("location: manage.php");

?>
