<?php 
	require("connect.php");
	// session_start();
	// $userid = $_SESSION['userid'];
	// if(isset($search)){
	// 	$query = "SELECT * FROM aiqtdealer.user WHERE userrole != 'admin' AND $stype LIKE '%$search%' ";
	// 	$result = mysql_query($query,$conn);
	// 	while ($row = mysql_fetch_assoc($result)) { 
	// 		$rows[] = $row; 
	// 	} 
	// } else {
	// 	$query = "SELECT * FROM aiqtdealer.user WHERE userrole != 'admin' LIMIT $start,$perpage";	
	// 	$result = mysql_query($query,$conn);
	// 	while ($row = mysql_fetch_assoc($result)) { 
	// 		$rows[] = $row; 
	// 	} 
	// }	
    $query = "SELECT * FROM user_pro WHERE 1 ";
		$result = mysql_query($query,$conn);
		while ($row = mysql_fetch_assoc($result)) { 
			$rows[] = $row; 
		} 
?>