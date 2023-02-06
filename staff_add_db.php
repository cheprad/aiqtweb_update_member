<?php 
    require("connect.php");
    session_start();

    $errors = array();
    print_r($_POST);
    if(isset($_POST['add_staff'])){
        $s_id = mysql_real_escape_string($_POST['s_id']);
        $user_check_query = "SELECT * FROM staff WHERE s_id = '$s_id'";
        $query = mysql_query($user_check_query,$conn);
        $result = mysql_fetch_assoc($query);
        if($result) {
            if($result['s_id'] === $s_id) {
                array_push($errors,'s_id already exists');
            }
        }
        // for email
        $email = mysql_real_escape_string($_POST['email']);
        $user_check_query = "SELECT * FROM staff WHERE email = '$email'";
        $query = mysql_query($user_check_query,$conn);
        $result = mysql_fetch_assoc($query);
        if($result) {
            if($result['email'] === $email) {
                array_push($errors,'Email already exists');
            }
        }
        // end email
        $s_fname = mysql_real_escape_string($_POST['s_fname']);
        $s_lname = mysql_real_escape_string($_POST['s_lname']);
        $s_telnum = mysql_real_escape_string($_POST['s_telnum']);

        // for sid
        
        // end uid_pro
        $s_regtime = date('Y-m-d H:i:s');
        $s_flag = $_POST['s_flag'];
        $s_etc = mysql_real_escape_string($_POST['s_etc']);
        // $userid =  $_SESSION['userid'] ;
        if (count($errors)==0){

            $sql="INSERT INTO `staff` (
                `s_id`
                , `email`
                , `s_fname`
                , `s_lname`
                , `s_telnum`
                , `s_regtime`
                , `s_flag`
                , `s_etc`) 
            VALUES (
                '$s_id'
                , '$email'
                , '$s_fname'
                , '$s_lname'
                , '$s_telnum'
                , '$s_regtime'
                , '$s_flag'
                , '$s_etc');";
            $query = mysql_query($sql,$conn);
            $_SESSION['success'] = "เพิ่ม staff ใหม่สำเร็จ";
            header("location: staff_add.php");
            // header("location: addshop_success.php?shopname=$shopname&shopdetail=$shopdetail");
            // echo "Yaaa";
        }else {
            // echo "we have the error";
            $_SESSION['errors'] = $errors;
            header("location: staff_add.php");
        }
    }
    // echo "test";
    // $sql = "INSERT INTO `aiqtdealer`.`test` (`tid`, `tname`, `tsomething`) VALUES (NULL, '165165', '165');";
    // $result = mysql_query($sql, $db_conn);
?>