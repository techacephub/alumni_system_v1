<?php
require("database_connection.php");
if(isset($_POST['submit'])){
				$fname=filter_post($_POST['fname']);
				$email=filter_post($_POST['email']);
				$phone=filter_post($_POST['phone']);
				$matric_no=filter_post($_POST['matric_no']);
				$dept=filter_post($_POST['dept']);
			if(empty($email) || empty($password) || empty($c_password) || empty($c_password) || empty($dept) || empty($phone)){
				echo '<script>alert("Some field are empty")</script>';
			}
			else{
					$query='SELECT rrr_code FROM gen_invoice ORDER BY id DESC'; //retrieve last generated ID
					$result=$conn->query($query);
					$row=$result->fetch_assoc();
					if(($row['rrr_code'])==''){
						$id=1;
						$r_id='ALUM00'.$id;
						$query1="INSERT INTO gen_invoice VALUES (null,'$id')"; //updating the first generated invoice to 1
						$result1=$conn->query($query1);
						$query2="INSERT INTO invoice VALUES (NULL,'$r_id','$user_id','not paid','0',NOW())"; //updating invoice table for the first time
						$result2=$conn->query($query2);
							if($result){
								$_SESSION['name']=$name;
								$_SESSION['email']=$email;
								$_SESSION['phone']=$phone;
								$_SESSION['matric_no']=$matric_no;
								$_SESSION['dept']=$dept;
								header("location:print_inv.php")
							}
							else{
								echo 'something went wrong';
							}
					}
					else{
						$id=$row['rrr_code']+1;
						$r_id='ALUM00'.$id;
						$query1="INSERT INTO gen_invoice VALUES (null,'$id')";
						$query2="INSERT INTO user VALUES (NULL,'$r_id','$user_id','not paid','0',NOW())";
						$result1=$conn->query($query1);
						$result2=$conn->query($query2);
							if($result1){
								echo '<script>alert("")</script>';
								$_SESSION['name']=$name;
								$_SESSION['email']=$email;
								$_SESSION['phone']=$phone;
								$_SESSION['matric_no']=$matric_no;
								$_SESSION['dept']=$dept;
								header("location:print_inv.php")
							}
					}
					}
			}
function filter_post($conn,$value)
{
	return mysqli_real_escape_string($conn,trim(htmlspecialchars($value)));
	
}
?>