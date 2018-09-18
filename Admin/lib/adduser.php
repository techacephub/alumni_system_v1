<?php
include "includes/config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>add user</title>
</head>
<body>
	<?php
	include "adduser_action.php";
	?>
<form method="post" >
	<h2>user profile</h2>
	<div>
		<label>matric number</label>
		<input type="text" name="user_id" >
	</div>

	<div>
		<label>surname</label>
		<input type="text" name="surname">
	</div>

	<div>
		<label>othername</label>
		<input type="text" name="othername" >
	</div>
	<div>
		<label>gender</label>
		<select name="gender">
			 <?php 
				 $query = mysqli_query($conn, "SELECT * FROM `Gender`");
				 while ($row = mysqli_fetch_array($query)){
				?>
               <option value="<?php echo $row['Gender_id'] ?>"><?php echo $row['Gender'] ?>
               	
               </option>
           <?php } ?> 

		</select>
	</div>

	<div>
		<label>marital status</label>
		<select name="marital_status">
			 <?php 
				 $query = mysqli_query($conn, "SELECT * FROM `Marital_status`");
				 while ($row = mysqli_fetch_array($query)){
				?>
               <option value="<?php echo $row['Marital_status_id'] ?>"><?php echo $row['Marital_status'] ?>
               	
               </option>
           <?php } ?> 

		</select>
	</div>
	<div>
		<label>phone</label>
		<input type="number" name="phone" >
	</div>
	<div>
		<label>email</label>
		<input type="email" name="email" >
	</div>
	<div>
		<label>address </label>
		<input type="text" name="address" >
	</div>
	<div>
		<label>Date of birth</label>
		<input type="date" name="dob" >
	</div>
	<div>
		<label>fb_handle</label>
		<input type="text" name="fb_handle" >
	</div>
	<div>
		<label> tw_handle</label>
		<input type="text" name="tw_handle" >
	</div>
	<div>
		<label>insta_handle</label>
		<input type="text" name="insta_handle" >
	</div>
	<h2>user details</h2>
	<div>
		<label>username</label>
		<input type="text" name="username" >
	</div>
	<div>
		<label>password</label>
		<input type="password" name="password" >
	</div>
	<h2>academic details</h2>
	<div>
		<label>session</label>
		<select name="session">
			 <?php 
				 $query = mysqli_query($conn, "SELECT * FROM `Session`");
				 while ($row = mysqli_fetch_array($query)){
				?>
               <option value="<?php echo $row['Session_id'] ?>"><?php echo $row['Session'] ?>
               	
               </option>
           <?php } ?> 

		</select>
	</div>
	<div>
		<label>department</label>
		<select name="department">
			 <?php 
				 $query = mysqli_query($conn, "SELECT * FROM `Department`");
				 while ($row = mysqli_fetch_array($query)){
				?>
               <option value="<?php echo $row['Department_id'] ?>"><?php echo $row['Department'] ?>
               	
               </option>
           <?php } ?> 

		</select>
	</div>
	<div>
		<label>school</label>
		<select name="school">
			 <?php 
				 $query = mysqli_query($conn, "SELECT * FROM `School`");
				 while ($row = mysqli_fetch_array($query)){
				?>
               <option value="<?php echo $row['School_id'] ?>"><?php echo $row['School'] ?>
               	
               </option>
           <?php } ?> 


		</select>
	</div>
	<button name="submit">submit</button>

</form>
</body>
</html>