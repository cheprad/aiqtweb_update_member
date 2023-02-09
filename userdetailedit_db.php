<?php 
    session_start();
    $uid = $_SESSION['uid'];
    require("connect.php");
    $errors = array();
    if(isset($_POST['edit_user'])){
        $s_id = mysql_real_escape_string($_POST['s_id']);
        $email = mysql_real_escape_string($_POST['email']);
        $errors = array();
        $user_check_query = "SELECT * FROM user_pro WHERE email = '$email'";
        $query = mysql_query($user_check_query,$conn);
        $result = mysql_fetch_assoc($query);
        $uid_pro = mysql_real_escape_string($_POST['uid_pro']);
        $rpro_time= mysql_real_escape_string($_POST['rpro_time']);
        $etc= mysql_real_escape_string($_POST['etc']);
        $utype= mysql_real_escape_string($_POST['utype']);
        if(strlen($s_id) !== 3 ) {
            array_push($errors,'staff id ต้องมี 3 ตัว');
            echo "if";
        } else {
            // pointer
            $split_uid_pro = str_split($uid_pro);
            $new_uid_pro = "$split_uid_pro[0]$split_uid_pro[1]$split_uid_pro[2]$s_id$split_uid_pro[6]$split_uid_pro[7]$split_uid_pro[8]$split_uid_pro[9]$split_uid_pro[10]$split_uid_pro[11]$split_uid_pro[12]$split_uid_pro[13]$split_uid_pro[14]$split_uid_pro[15]";
            
            // echo "$new_uid_pro";
        }

        if (count($errors)==0){
            $sql = "UPDATE `user_pro` SET `s_id` = '$s_id',`email` = '$email', `uid_pro` = '$new_uid_pro'  , `etc` = '$etc' ,`utype`= '$utype' WHERE `user_pro`.`id` = $uid";
            $query = mysql_query($sql,$conn);
            $_SESSION['success'] = "แก้ไขสมาชิกสมัครรายเดือนใหม่สำเร็จ";
            // echo "sql error";
            header("location: userdetail.php?userid=$uid#");
        } else {
            header("location: userdetail.php?userid=$uid#");
        }
    }else{
        header("location: index.php");
    }
?>