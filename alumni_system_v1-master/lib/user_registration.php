<?php 
/*
	@Author : Habeeb Amode Oluwadamilare
	@Date : September 4, 2018

*/
require("database_connection.php");




	// $User_id = filter_value($_POST['User_id']);
	// $Surname = filter_value($_POST['Surname']);
	// $Othername = filter_value($_POST['Othername']);
	// $Gender_id = filter_value($_POST['Gender_id']);
	// $Marital_status_id = filter_value($_POST['Marital_status_id']);
	// $Phone = filter_value($_POST['Phone']);
	// $Email = filter_value($_POST['Email']);
	// $Address = filter_value($_POST['Address']);
	// $Dob = filter_value($_POST['Dob']);
	// $Username = filter_value($_POST['Username']);
	// $Password = filter_value($_POST['Password']);
	// $Session_id = filter_value($_POST['Session_id']);
	// $Department_id = filter_value($_POST['Department_id']);
	// $School_id = filter_value($_POST['School_id']);

	$User_id = filter_value('HCS160307');
	$Surname = filter_value('Draco');
	$Othername = filter_value('Kalkula');
	$Gender_id = filter_value('1');
	$Marital_status_id = filter_value('1');
	$Phone = filter_value('08128391219');
	$Email = filter_value('dracocalcula@gmail.com');
	$Address = filter_value('Targae');
	$Dob = filter_value('12-12-1991');
	$Username = filter_value('onlynorthking');
	$Password = filter_value('wolfshed19');
	$Session_id = filter_value('1');
	$Department_id = filter_value('1');
	$School_id = filter_value('1');

	$check_query = db_query();
	// var_dump($check_query);
	if($check_query == True)
	{
		echo "Information Saved Successfully";
	}
	else
	{
		echo "Information not Saved";
	}





function filter_value($_value)
{
	Global $db;
	$post_value  = mysqli_escape_string($db, trim(htmlspecialchars($_value)));
	return $post_value;
}

function db_query()
{
	GLOBAL $User_id;
	GLOBAL $Surname;
	GLOBAL $Othername;
	GLOBAL $Gender_id;
	GLOBAL $Marital_status_id;
	GLOBAL $Phone;
	GLOBAL $Email;
	GLOBAL $Address;
	GLOBAL $Dob;
	GLOBAL $Username;
	GLOBAL $Password;
	GLOBAL $Session_id;
	GLOBAL $Department_id;
	GLOBAL $School_id;
	Global $db; //Make DB Global

	$select_UP = mysqli_query($db, "SELECT * FROM `user_profile` WHERE `User_id`='$User_id'");
	$UP_num = mysqli_num_rows($select_UP);
	echo $UP_num;
	if($UP_num==0)
	{

		$check_UP_query = mysqli_query($db, "INSERT INTO `user_profile`(`User_id`, `Surname`, `Othername`, `Gender_id`, `Marital_status_id`, `Phone`, `Email`, `Address`, `Dob`,`Created_at`, `Updated_at`) VALUES ('$User_id','$Surname','$Othername','$Gender_id','$Marital_status_id','$Phone','$Email','$Address','$Dob',NOW(),NOW())");

		//insertion query for User Academic record
		$check_UA_query = mysqli_query($db, "INSERT INTO `user_academic`(`user_id`, `Session_id`, `Department_id`, `School_id`, `Created_at`, `Updated_at`) VALUES ('$User_id','$Session_id','$Department_id','$School_id',NOW(),NOW())");

		$check_UD_query = mysqli_query($db, "INSERT INTO `user_details`( `User_id`, `Username`, `Password`, `Created_at`, `Updated_at`) VALUES ('$User_id','$Username','$Password',NOW(),NOW())");

		if($check_UP_query && $check_UA_query)
		{
			return True;
		}
		else
		{
			// echo  mysqli_error($db);
			return False;
		}
		
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