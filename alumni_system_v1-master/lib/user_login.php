<?php 
/*
	@Author : Habeeb Amode Oluwadamilare
	@Date : September 4, 2018

*/
require("database_connection.php");


	$Username = filter_value('onlynorthking');
	$Password = filter_value('wolfshed19');
	
	

	$check_query = login();
	// var_dump($check_query);
	if($check_query == True)
	{
		echo "Login Successful";
		// header('location: ')
	}
	else
	{
		echo "Login Not Successful";
	}





function filter_value($_value)
{
	Global $db;
	$post_value  = mysqli_escape_string($db, trim(htmlspecialchars($_value)));
	return $post_value;
}

function login()
{
	GLOBAL $Username;
	GLOBAL $Password;
	
	
	Global $db; //Make DB Global

	$select_UP = mysqli_query($db, "SELECT * FROM `user_details` WHERE `Username`='$Username' and `Password`='$Password'");
	$UP_num = mysqli_num_rows($select_UP);
	// echo $UP_num;
	if($UP_num > 0)
	{
		return True;
		
	}
	else
	{
		return False;
	}
	
	
}



 ?>
<!-- `User_id` varchar(255) NOT NULL,
  `Surname` varchar(255) NOT NULL,
  `Othername` varchar(255) NOT NULL,
  `Gender_id` varchar(255) NOT NULL,
  `Marital_status_id` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` text NOT NULL,
  `Dob` varchar(255) NOT NULL,
  `Fb_handle` varchar(255) NOT NULL,
  `Tw_handle` varchar(255) NOT NULL,
  `Insta_handle` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,

   `Session_id` varchar(255) NOT NULL,
  `Department_id` varchar(255) NOT NULL,
  `School_id` varchar(255) NOT NULL,
 -->