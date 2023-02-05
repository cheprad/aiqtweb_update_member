<?php 
    require("connect.php");

    $errors = array();
    if(isset($_POST['add_shop'])){
        // $shopname = mysql_real_escape_string($_POST['addshop_shopname']);
        // $shopdetail = mysql_real_escape_string($_POST['addshop_shopdetail']);
        // for email
        $email = mysql_real_escape_string($_POST['email']);
        $user_check_query = "SELECT * FROM user_pro WHERE email = '$email'";
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
        $user_check_query = "SELECT * FROM user_pro ORDER BY uid_pro DESC LIMIT 1";
        $query = mysql_query($user_check_query,$conn);
        $result = mysql_fetch_assoc($query);
        $numResults = mysql_num_rows($query);
        if ($numResults > 0) {
            $nums = str_split($result['uid_pro']);
            $numf = "$nums[9]$nums[10]$nums[11]$nums[12]";
            $numi = (int)"$numf";
            $sumn = $numi;
            $alpha = "$nums[7]$nums[8]";
            if ($numi+1 === 10000) {
                $alpha=++$alpha;
            }else{
                $sumn = $numi + 1;
            };
            $numr = str_pad($sumn,4,"0",STR_PAD_LEFT);
            $uid_pro = "AQT$b[1]$k[1]$alpha$numr";
         }else{
            $uid_pro = "AQT$b[1]$k[1]AA0301";
         };
        // end uid_pro
        $rpro_time = date('Y-m-d H:i:s');
        $etc = mysql_real_escape_string($_POST['etc']);
        $utype = $_POST['utype'];
        // $userid =  $_SESSION['userid'] ;
        if (count($errors)==0){
            $sql = "INSERT INTO `aiqtdealer`.`shop` (`shopid`, `userid`, `shopname`, `shopdetail`) VALUES (NULL, '$userid', '$shopname', '$shopdetail');";
            $newsql = "INSERT INTO `user_pro` (
                `id` ,
                `email` ,
                `uid_pro` ,
                `rpro_time` ,
                `etc` ,
                `utype`
                )
                VALUES (
                NULL , '$email', '$uid_pro', '$rpro_time', ' $etc', '$utype'
                );
                ";
            $query = mysql_query($newsql,$conn);
            $_SESSION['success'] = "เพิ่มสมาชิกสมัครรายเดือนใหม่สำเร็จ";
            header("location: adduserpro.php");
            // header("location: addshop_success.php?shopname=$shopname&shopdetail=$shopdetail");
        }else {
            // echo "we have the error";
            $_SESSION['errors'] = $errors;
            header("location: adduserpro.php");
        }
    }
    // echo "test";
    // $sql = "INSERT INTO `aiqtdealer`.`test` (`tid`, `tname`, `tsomething`) VALUES (NULL, '165165', '165');";
    // $result = mysql_query($sql, $db_conn);
?>