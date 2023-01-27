<?php 
    require("connect.php");
    $date = date('Y-m-d');
    strlen($date);
    $k = explode("-",$date);
    $b = explode("0",$k[0]);
    $user_check_query = "SELECT * FROM aiqt_user_pro.user_pro ORDER BY uid_pro DESC LIMIT 1";
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
    echo $uid_pro ;
?>