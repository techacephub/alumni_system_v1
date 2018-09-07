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
	$Title = filter_value('Academic Conference');
	$Message = filter_value('Kalkula');
	$Location = filter_value('Ogun State');
	$Status = filter_value('1');
	$Stat = filter_value('1');
	

	$check_query = db_query();
	// var_dump($check_query);
	if($check_query == True)
	{
		echo "Event Information Saved Successfully";
	}
	else
	{
		echo "Event Information not Saved";
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
	GLOBAL $Title;
	GLOBAL $Message;
	GLOBAL $Location;
	GLOBAL $Status;
	GLOBAL $Stat;
	
	Global $db; //Make DB Global

	$select_UP = mysqli_query($db, "SELECT * FROM `event` WHERE `Message`='$Message'");
	$UP_num = mysqli_num_rows($select_UP);
	echo $UP_num;
	if($UP_num==0)
	{
// INSERT INTO `event`(`Event_id`, `User_id`, `Title`, `Message`, `Status`, `stat`, `location`, `Created_at`, `Updated_at`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])
		$check_Event_query = mysqli_query($db, "INSERT INTO `event`(`User_id`, `Title`, `Message`, `Status`, `stat`, `location`, `Created_at`, `Updated_at`) VALUES ('$User_id','$Title','$Message','$Status','$Stat','$Location',NOW(),NOW())");

		

		if($check_Event_query)
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