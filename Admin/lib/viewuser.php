<!DOCTYPE html>
<html>
<head>
	<title>view user</title>
</head>
<body>
	<form>
		<table border="2" cellpadding="2" cellspacing="2">
			<tr>
			<th>userid</th>
			<th>surname</th>
			<th>othername</th>
			<th>gender</th>
			<th>phone number</th>
			<th>email</th>
			<th>address</th>
			<th></th>
			<th></th>
			</tr>
	<tr>
		<?php
		include "includes/config.php";
		$query = $conn->query("SELECT * FROM `user_profile`join user_details on user_profile.User_id= user_details.User_id join user_academic on user_profile.User_id=user_academic.User_id join gender on user_profile.Gender_id = gender.Gender_id join marital_status on user_profile.Marital_status_id = marital_status.Marital_status_id ");
		 
         while($row = $query->fetch_assoc())
             {
        ?>
		<td><?php echo $row['User_id']; ?></td>
		<td><?php echo $row['Surname']; ?></td>
		<td><?php echo $row['Othername']; ?></td>
		<td><?php echo $row['Gender']; ?></td>
		<td><?php echo $row['Phone']; ?></td>
		<td><?php echo $row['Email']; ?></td>
		<td><?php echo $row['Address']; ?></td>
		<td><a  href="updateuser.php?id=<?php echo $row['User_id']; ?>">Update</a></td>
        <td><a  href="deleteuser.php?id=<?php echo $row['User_id']; ?>">Delete</a></td>
	</tr>

    <?php } ?>

	<td></td>

		</table>
	</form>

</body>
</html>