<?php 
    require("connect.php");
    // require("authen.php");
	// checkadmin();
	// if (isset($_GET['page'])){
	// 	$page = $_GET['page'];
	// }else{
	// 	$page = 1 ;
	// }
	// if (isset($_REQUEST['search']) && isset($_GET['stype'])){
	// 	$search = $_REQUEST['search'];
	// 	$stype = $_REQUEST['stype'];
	// }
	// $perpage = 25;
	// $start = ($page - 1) * $perpage;
	// $sql2 = "SELECT * FROM aiqtdealer.user";
	// $query2 = mysql_query($sql2,$conn);
	// $total_record = mysql_num_rows($query2);
	// $total_page = ceil($total_record / $perpage);
    // include("admin_db.php");
    $query = mysql_query($sql,$conn);
    $result = mysql_fetch_assoc($query);
    print_r($result);
?>