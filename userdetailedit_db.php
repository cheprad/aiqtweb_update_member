<?php 
    session_start();
    $uid = $_SESSION['uid'];
    echo $uid;
    require("connect.php");
    if(isset($_POST['edit_user'])){
        
        $email = mysql_real_escape_string($_POST['email']);
        $uid_pro = mysql_real_escape_string($_POST['uid_pro']);
        $rpro_time= mysql_real_escape_string($_POST['rpro_time']);
        $etc= mysql_real_escape_string($_POST['etc']);
        $utype= mysql_real_escape_string($_POST['utype']);

        $sql = "UPDATE `user_pro` SET `email` = '$email', `uid_pro` = '$uid_pro' ,`rpro_time` = '$rpro_time' , `etc` = '$etc' ,`utype`= '$utype' WHERE `user_pro`.`id` = $uid";
        $query = mysql_query($sql,$conn);

        // $result = mysql_fetch_assoc($query);
        // print_r($result);
        // header("location: userdetail.php");
    }else{
        echo "WTF";
    }
?>