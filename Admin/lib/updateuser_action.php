<?php 

if (isset($_POST['update'])) {
	# code...

	$surname = mysqli_real_escape_string($conn, $_POST['surname']);
	$othername = mysqli_real_escape_string($conn, $_POST['othername']);
	$gender = mysqli_real_escape_string($conn,$_POST['gender']);
	$marital = mysqli_real_escape_string($conn,$_POST['marital_status']);
	$phone = mysqli_real_escape_string($conn, $_POST['phone']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$dob = mysqli_real_escape_string($conn, $_POST['dob']);
	$fb_handle = mysqli_real_escape_string($conn, $_POST['fb_handle']);
	$tw_handle = mysqli_real_escape_string($conn, $_POST['tw_handle']);
	$insta_handle = mysqli_real_escape_string($conn, $_POST['insta_handle']);
	// user details
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	
	$query1 = $conn->query("UPDATE `user_profile` set `Surname` = '$surname' , `Othername` = '$othername', `Gender_id` = '$gender', `Marital_status_id` = '$marital', `Phone` = '$phone', `Email` = '$email', `Address` = '$address', `Dob` = '$dob', `Fb_handle` = '$fb_handle', `Tw_handle` = '$tw_handle', `Insta_handle` = '$insta_handle' where User_id = '$get' ");


 if(!$query1 ){
        die('Could not enter data: ' . $conn->error);
    }
    else{
        echo "Updated data successfully\n";
    }
}


?>