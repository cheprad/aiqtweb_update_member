<?php 
	require("connect.php");
	session_start();
	$userid = $_SESSION['userid'];
	if(isset($search)){
		$query = "SELECT * FROM staff WHERE 1 AND $stype LIKE '%$search%' ";
		$result = mysql_query($query,$conn);
		while ($row = mysql_fetch_assoc($result)) { 
			$rows[] = $row; 
		} 
	} else {
    	$query = "SELECT * FROM staff WHERE 1 LIMIT $start,$perpage";
		$result = mysql_query($query,$conn);
		while ($row = mysql_fetch_assoc($result)) { 
			$rows[] = $row; 
		} 
	}
?>