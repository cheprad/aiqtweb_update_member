<?php 
    session_start();
    require("connect.php");

    $errors = array();
    if(isset($_POST['add_shop'])){
        $shopname = mysql_real_escape_string($_POST['addshop_shopname']);
        $shopdetail = mysql_real_escape_string($_POST['addshop_shopdetail']);
        // for email
        $email = mysql_real_escape_string($_POST['email']);
        $user_check_query = "SELECT * FROM aiqt_user_pro.user_pro WHERE email = '$email'";
        $query = mysql_query($user_check_query,$conn);
        $result = mysql_fetch_assoc($query);
        if($result) {
            if($result['email'] === $email) {
                array_push($errors,'Email already exists');
            }
        }
        // end email
        // for uid_pro
        $date = date('Y-m-d');
        strlen($date);
        $k = explode("-",$date);
        $b = explode("0",$k[0]);
        $user_check_query = "SELECT * FROM aiqt_user_pro.user_pro ORDER BY uid_pro DESC LIMIT 1";
        $query = mysql_query($user_check_query,$conn);
        $result = mysql_fetch_assoc($query);
        $uid_pro = "AQT$b[1]$k[1]";
        // end uid_pro


   
        // $userid =  $_SESSION['userid'] ;
        if (count($errors)==0){
            $sql = "INSERT INTO `aiqtdealer`.`shop` (`shopid`, `userid`, `shopname`, `shopdetail`) VALUES (NULL, '$userid', '$shopname', '$shopdetail');";
            $newsql = "INSERT INTO `aiqt_user_pro`.`user_pro` (
                `id` ,
                `$email` ,
                `uid_pro` ,
                `rpro_time` ,
                `etc` ,
                `utype`
                )
                VALUES (
                NULL , 'pradprad@gmail.com', 'AQT2301AA0001', '2023-01-12 16:00:35', 'บลาๆๆๆ', '1M'
                );
                ";
            $query = mysql_query($newsql,$conn);
            // header("location: addshop_success.php?shopname=$shopname&shopdetail=$shopdetail");
        }
    }
    // echo "test";
    // $sql = "INSERT INTO `aiqtdealer`.`test` (`tid`, `tname`, `tsomething`) VALUES (NULL, '165165', '165');";
    // $result = mysql_query($sql, $db_conn);
?>