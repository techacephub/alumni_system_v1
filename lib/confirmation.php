<?php
require("database_connection.php");
if(isset($_POST['submit'])){
	$code=filter_post($_POST['rrr_code']);
	$user_id=$_SESSION['user_id'];
	$query="SELECT * FROM invoice 	WHERE user_id='$user_id' AND status='paid'"; //retrieve invoice where status is paid
	$result=$db->query($query);
	$row=$result->row_nums;
	$row2=$result->fetch_assoc();
	if($row>0){
		$query1="UPDATE invoice SET status1='1' WHERE user_id='$user_id'"; //if status1=0 means the rrr is not yet confirmed
		$result1=$db->query($query1);
		if($result){
			echo "successful";
		}
	}
	else{
		echo "not paid yet"; //truncate if not found
	}
}
function filter_post($conn,$value)
{
	return mysqli_real_escape_string($conn,trim(htmlspecialchars($value)));
	
}