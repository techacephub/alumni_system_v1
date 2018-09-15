<?php
include "includes/config.php";
?>
<?php

	$get = $_GET['id'];
	// echo $get;
	$query = $conn->query("SELECT * FROM user_profile join user_details on user_profile.User_id= user_details.User_id join user_academic on user_profile.User_id=user_academic.User_id join gender on user_profile.Gender_id = gender.Gender_id join marital_status on user_profile.Marital_status_id = marital_status.Marital_status_id where user_profile.User_id = '$get' ");

		$row = $query->fetch_array();
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>add user</title>
</head>
<body>
	
	
<form method="post">

	<?php
	include "updateuser_action.php";
	?>

	

	<h2>user profile</h2>
	<div>
		<label>surname</label>
		<input type="text" name="surname"  value="<?php echo $row['Surname']; ?>">
	</div>

	<div>
		<label>othername</label>
		<input type="text" name="othername"   value="<?php echo $row['Othername']; ?>">
	</div>
	
	<div>
		<label>phone</label>
		<input type="number" name="phone" value="<?php echo $row['Phone']; ?>">
	</div>
	<div>
		<label>email</label>
		<input type="email" name="email"  value="<?php echo $row['Email']; ?>" >
	</div>
	<div>
		<label>address </label>
		<input type="text" name="address"  value="<?php echo $row['Address']; ?>" >
	</div>
	<div>
		<label>Date of birth</label>
		<input type="date" name="dob"  value="<?php echo $row['Dob']; ?>">
	</div>
	<div>
		<label>fb_handle</label>
		<input type="text" name="fb_handle"   value="<?php echo $row['Fb_handle']; ?>">
	</div>
	<div>
		<label> tw_handle</label>
		<input type="text" name="tw_handle"  value="<?php echo $row['Tw_handle']; ?>">
	</div>
	<div>
		<label>insta_handle</label>
		<input type="text" name="insta_handle"  value="<?php echo $row['Insta_handle']; ?>">
	</div>

	<div>
		<label>gender</label>
		<select name="gender">
               <option value="<?php echo $row['Gender_id'] ?>"><?php echo $row['Gender'] ?>
			 <?php 
				 $query = mysqli_query($conn, "SELECT * FROM `Gender`");
				 while ($Genderrow = mysqli_fetch_array($query)){
				?>
               <option value="<?php echo $row['Gender_id'] ?>"><?php echo $Genderrow['Gender'] ?>
               	
               </option>
           <?php } ?> 

		</select>
	</div>

	<div>
		<label>marital status</label>
		<select name="marital_status">
               <option value="<?php echo $row['Marital_status_id'] ?>"><?php echo $row['Marital_status'] ?>
			 <?php 
				 $query = mysqli_query($conn, "SELECT * FROM `Marital_status`");
				 while ($marital_row = mysqli_fetch_array($query)){
				?>
               <option value="<?php echo $row['Marital_status_id'] ?>"><?php echo $marital_row['Marital_status'] ?>
               	
               </option>
           <?php } ?> 

		</select>
	</div>

	<h2>user details</h2>
	<div>
		<label>username</label>
		<input type="text" name="username" value="<?php echo $row['User_id'] ?>" >
	</div>

<!-- 
	<h2>academic details</h2>
	<div>
		<label>session</label>
		<select name="session">
               <option value="<?php echo $row['Session_id'] ?>"><?php echo $row['Session'] ?>
			 <?php 
				 $query = mysqli_query($conn, "SELECT * FROM `Session`");
				 while ($session_row = mysqli_fetch_array($query)){
				?>
               <option value="<?php echo $row['Session_id'] ?>"><?php echo $session_row['Session'] ?>
               	
               </option>
           <?php } ?> 

		</select>
	</div>
	<div>
		<label>department</label>
		<select name="department">
			
               <option value="<?php echo $row['Department_id'] ?>"><?php echo $row['Department'] ?>
			 <?php 
				 $query = mysqli_query($conn, "SELECT * FROM `Department`");
				 while ($department_row = mysqli_fetch_array($query)){
				?>
               <option value="<?php echo $row['Department_id'] ?>"><?php echo $department_row['Department'] ?>
               	
               </option>
           <?php } ?> 

		</select>
	</div>
	<div>
		<label>school</label>
		<select name="school">
               <option value="<?php echo $row['School_id'] ?>"><?php echo $row[1] ?>
			 <?php 
				 $query = mysqli_query($conn, "SELECT * FROM `School`");
				 while ($school_row = mysqli_fetch_array($query)){
				?>
               <option value="<?php echo $row['School_id'] ?>"><?php echo $school_row['School'] ?>
               	
               </option>
           <?php } ?> 
		</select>
	</div> -->

	<button name="update">update</button>
<?php #}} ?>
</form>
</body>
</html>