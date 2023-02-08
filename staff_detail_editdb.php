<?php 
    session_start();
    $s_id = $_SESSION['s_id'];
    require("connect.php");
    if(isset($_POST['edit_staff'])){
        
        $s_id = mysql_real_escape_string($_POST['s_id']);
        $errors = array();
        // $user_check_query = "SELECT * FROM staff WHERE s_id = '$s_id'";
        
        // $query = mysql_query($user_check_query,$conn);
        // $result = mysql_fetch_assoc($query);
        // if($result) {
        //     if($result['s_id'] === $s_id) {
        //         array_push($errors,'id already exists');
        //     }
        // }
        $email = mysql_real_escape_string($_POST['email']);
        $s_fname = mysql_real_escape_string($_POST['s_fname']);
        $s_lname = mysql_real_escape_string($_POST['s_lname']);
        $s_telnum = mysql_real_escape_string($_POST['s_telnum']);
        // $s_regtime = mysql_real_escape_string($_POST['s_regtime']);
        $s_flag = mysql_real_escape_string($_POST['s_flag']);
        $s_etc = mysql_real_escape_string($_POST['s_etc']);
        if (count($errors)==0){
            $sql = "UPDATE `staff` SET `s_id` = '$s_id', `email` = '$email'  , `s_fname` = '$s_fname' ,`s_lname`= '$s_lname' ,`s_telnum`= '$s_telnum' ,`s_flag`= '$s_flag' ,`s_etc`= '$s_etc' WHERE `staff`.`s_id` = '$s_id'";
            $query = mysql_query($sql,$conn);
            $_SESSION['success'] = "เพิ่มสมาชิกสมัครรายเดือนใหม่สำเร็จ";
            header("location: staff_detail.php?s_id=$s_id#");
            // echo('O');
            // print_r($_POST);
            // print_r($errors);
        } else {
            // echo('mai o');
            // print_r($_POST);
            // print_r($errors);
            header("location: staff_detail.php?s_id=$s_id#");
        }
    }else{
        // header("location: index.php");
        print_r($_POST);
    }
?>