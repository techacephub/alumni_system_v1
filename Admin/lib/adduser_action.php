<?php
include "config.php";
?>
<?php
if (isset($_POST['submit'])){
	$user_id = mysqli_real_escape_string($conn,$_POST['user_id']);
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
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	// user academic
	$session = mysqli_real_escape_string($conn, $_POST['session']);
	$department = mysqli_real_escape_string($conn,$_POST['department']);
	$school = mysqli_real_escape_string($conn,$_POST['school']);


	$query1 = $conn->query("INSERT INTO `user_profile`(`User_id`, `Surname`, `Othername`, `Gender_id`, `Marital_status_id`, `Phone`, `Email`, `Address`, `Dob`, `Fb_handle`, `Tw_handle`, `Insta_handle`, `Created_at`, `Updated_at`) VALUES ('$user_id','$surname','$othername','$gender','$marital','$phone','$email','$address','$dob','$fb_handle','$tw_handle','$insta_handle',NOW(),NOW())");
	$query2 = $conn->query("INSERT INTO `user_details`(`User_id`, `Username`, `Password`, `Created_at`, `Updated_at`) VALUES ('$user_id','$username','$password ',NOW(),NOW())");
	$query3 = $conn->query("INSERT INTO `user_academic`(`user_id`, `Session_id`, `Department_id`, `School_id`, `Created_at`, `Updated_at`) VALUES ('$user_id','$session','$department','$school',NOW(),NOW())");

 if(!$query1 || !$query2 || !$query3){
        die('Could not enter data: ' . $conn->error);
    }
    else{
        echo "Entered data successfully\n";
    }

}




?>