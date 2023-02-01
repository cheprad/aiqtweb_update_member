<?php 
    session_start();
    $uid = $_SESSION['uid'];
    require("connect.php");
    if(isset($_POST['edit_user'])){
        
        $email = mysql_real_escape_string($_POST['email']);
        $errors = array();
        $user_check_query = "SELECT * FROM user_pro WHERE email = '$email'";
        $query = mysql_query($user_check_query,$conn);
        $result = mysql_fetch_assoc($query);
        $uid_pro = mysql_real_escape_string($_POST['uid_pro']);
        $rpro_time= mysql_real_escape_string($_POST['rpro_time']);
        $etc= mysql_real_escape_string($_POST['etc']);
        $utype= mysql_real_escape_string($_POST['utype']);
        if (count($errors)==0){
            $sql = "UPDATE `user_pro` SET `email` = '$email', `uid_pro` = '$uid_pro'  , `etc` = '$etc' ,`utype`= '$utype' WHERE `user_pro`.`id` = $uid";
            $query = mysql_query($sql,$conn);
            $_SESSION['success'] = "เพิ่มสมาชิกสมัครรายเดือนใหม่สำเร็จ";
            header("location: userdetail.php?userid=$uid#");
        } else {
            header("location: userdetail.php?userid=$uid#");
        }
    }else{
        header("location: index.php");
    }
?>