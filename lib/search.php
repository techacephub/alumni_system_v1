<?php
	
	$db = mysqli_connect('localhost','root','','alumni_system');

	//get input from form
	$query = $_GET['search'];
	$query = htmlspecialchars($query);
	$query = mysqli_real_escape_string($db,$query);

	$sql = "(SELECT User_id FROM user_profile  WHERE `User_id` LIKE '%".$query."%' OR `Surname` LIKE '%".$query."%' OR `Othername` LIKE '%".$query."%') UNION (SELECT user_id FROM session JOIN user_academic ON user_academic.Session_id = session.Session_id WHERE session.Session LIKE '%".$query."%' GROUP BY user_academic.user_id )";

	$res = $db->query($sql);
	$count = mysqli_num_rows($res);

	if ($count < 1) {
		echo "no user found";
	}else{
	while ($row = mysqli_fetch_assoc($res)) {
		$id = $row['User_id'];
		$user_id = explode(",", $id);
		$output ="";

	foreach ($user_id as $ids) {
	 	$sql1 = "SELECT * FROM user_profile WHERE User_id = '$ids'";
	 	$res1 = $db->query($sql1);
	 	$output = mysqli_fetch_assoc($res1);
	 }
	 //output search result
	 print_r($output);
	}
}
?>