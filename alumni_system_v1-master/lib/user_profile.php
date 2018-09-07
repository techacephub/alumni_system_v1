<?php
	$db = mysqli_connect('localhost','root','','alumni_system');

	$user_id = ($_GET['id']);

	//get all user data and Gender
	$sql = "SELECT * FROM `user_profile` INNER JOIN gender ON gender.Gender_id = user_profile.Gender_id WHERE user_profile.User_id = '$user_id'";
	$res = $db->query($sql);
	$fetch = mysqli_fetch_assoc($res);


	//get marital status
	$marital_status_id = $fetch['Marital_status_id'];
	$fetch_marital_status = "SELECT Marital_status FROM marital_status WHERE Marital_status_id = $marital_status_id ";
	$marital_res = $db->query($fetch_marital_status);
	$marital_status = mysqli_fetch_assoc($marital_res);

	//Get School
	$sql1 = "SELECT * FROM user_academic JOIN school ON school.School_id = user_academic.School_id WHERE user_academic.user_id = '$user_id'";
	$res1 = $db->query($sql1);
	$sch = mysqli_fetch_assoc($res1);

	//Get Department
	$sql2 = "SELECT * FROM user_academic JOIN department ON Department.Department_id = user_academic.Department_id WHERE user_academic.user_id = '$user_id'";
	$res2 = $db->query($sql2);
	$dept = mysqli_fetch_assoc($res2);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?= $fetch['Surname'] ?>
	<?= $fetch['Othername'] ?>
	<?= $fetch['Gender'] ?>
	<?= $sch['School'] ?>
	<?= $dept['Department'] ?>
</body>
</html>
