<?php 

include "includes/config.php";
session_start();

$idd=$_GET['id'];

$sql = $conn->query("DELETE FROM user_profile  WHERE User_id='$idd' ");

$sql2 = $conn->query("DELETE FROM user_academic  WHERE User_id='$idd' ");
$sql3 = $conn->query("DELETE FROM user_details  WHERE User_id='$idd' ");
if (!$sql || !$sql2 || $sql3) {

	echo "error deleting record".$conn->error;
	header("Location: viewuser.php");
}

else {
	echo "record successfully deleted";
	header("Location: viewuser.php");
}

 ?>
