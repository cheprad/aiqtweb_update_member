<?php
// เครื่องออฟฟิศ
	// date_default_timezone_set('Asia/Bangkok');
	// $hostdb = "localhost";
	// $userdb = "root";
	// $dbname = "aiqt_user_pro";
	// $passwddb = "";
	// @$conn = mysql_connect($hostdb, $userdb, $passwddb);
	// if (!$conn) { echo "Cannot connect to mysql database"; }
	// mysql_query("SET NAMES 'utf8' COLLATE 'utf8_unicode_ci';");
	// mysql_query("SET SET CHARACTER SET utf8;");
	// mysql_select_db($dbname,$conn);

// // เครื่องที่ห้อง
// 	date_default_timezone_set('Asia/Bangkok');
// 	$hostdb = "localhost";
// 	$userdb = "root";
// 	$dbname = "member_pro";
// 	$passwddb = "123456";
// 	@$conn = mysql_connect($hostdb, $userdb, $passwddb);
// 	if (!$conn) { echo "Cannot connect to mysql database"; }
// 	mysql_query("SET NAMES 'utf8' COLLATE 'utf8_unicode_ci';");
// 	mysql_query("SET SET CHARACTER SET utf8;");
// 	mysql_select_db($dbname,$conn);

// ห้อง 0 เครื่อง 3
	date_default_timezone_set('Asia/Bangkok');
	$hostdb = "localhost";
	$userdb = "root";
	$dbname = "member_pro";
	$passwddb = "";
	@$conn = mysql_connect($hostdb, $userdb, $passwddb);
	if (!$conn) { echo "Cannot connect to mysql database"; }
	mysql_query("SET NAMES 'utf8' COLLATE 'utf8_unicode_ci';");
	mysql_query("SET SET CHARACTER SET utf8;");
	mysql_select_db($dbname,$conn);


// case PHP version > 5.3
	/*
$servername = "localhost";
$username = "root";
$password = "";
$database = "forimageupload";
$conn = mysqli_connect(
    $servername,
    $username,
    $password,
    $database
    );
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }*/
?>