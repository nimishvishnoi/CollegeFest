<?php session_start(); ?>
<?php
include ('db/db.php') ;
?>
<?php
	$event_id = $_GET['id'];

	$event_name = $_GET['evename'];

	$action = $_GET['action'];
	$sel=$_GET['type'];
	if($event_id == "") {
		die("Error. Product Event Exist");
	}
	switch($action) {
	
		case "add":
			$_SESSION['cart'][$event_id]++; 
		break;
		
		case "remove":
			$_SESSION['cart'][$event_id]--;
			if($_SESSION['cart'][$event_id] == 0) unset($_SESSION['cart'][$event_id]); 
		break;
		
		case "empty":
			unset($_SESSION['cart']); 
		break;
	}
?>
<?php
header("Location: eventsel.php?event=".$sel."");
die();
?>

