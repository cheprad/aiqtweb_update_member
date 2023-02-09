<?php
	require("connect.php");
	// require("authen.php");
	// checkadmin();
	
	isset($_GET['userid'])? $userid = $_GET['userid'] : $userid = '';
	if(!empty($userid)){
		$sql = "SELECT * FROM `user_pro` WHERE `id` = $userid";
		$result = mysql_query($sql,$conn);
        session_start();
        $_SESSION['uid'] = $userid;
		if (mysql_num_rows($result)==1){
			$fetch_result = mysql_fetch_assoc($result);
			$email = $fetch_result["email"];
			$s_id = $fetch_result["s_id"];
			$uid_pro = $fetch_result["uid_pro"];
            $etc = $fetch_result["etc"];
            $utype = $fetch_result["utype"];
		} else {
			header("location: index.php");
		}
		// ดึง codegen เพื่อใช้งาน 
		$todate = date("Y-m-d");

        


		// $sid = 6;
	
		// $queryCode = "SELECT * FROM aiqtdealer.gencode WHERE codedate = '$todate' AND shopid = '$sid' ";
		// $result_queryCode = mysql_query($queryCode,$conn);
		// while ($row = mysql_fetch_assoc($result_queryCode)) { 
		// 	$data[] = $row; 
		// } 

	}
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Dealer - Admin dashboard</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Dealer - Admin dashboard">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

</head> 

<body class="app">   	
    <?php 
		// include("header.php"); 
	?>

    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">			    
			    <h1 class="app-page-title">ข้อมูลสมาชิกที่จ่ายเงิน</h1>
				<?php 
					include('success.php');
					check_text_success();
				?>
			    <hr class="mb-4">
                <div class="row g-4 settings-section">
	                <div class="col-12 col-md-4">
		                <h3 class="section-title">General</h3>
		                <div class="section-intro">
							ใช้จัดการข้อมูลสมาชิก แก้ไข ปรับสถานะของ user
						</div>
						<br>
	                </div>
	                <div class="col-12 col-md-8">
						
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
								
							    <form class="settings-form" action="userdetailedit.php" method="post">
									<div class="mb-3">
									    <label for="setting-input-1" class="form-label">รหัส staff ที่เพิ่ม</label>
										<?php 
											echo '<input name="s_id" type="email" class="form-control" id="setting-input-1" value="'.$s_id.'" readonly>';
										?>
									</div>

								    <div class="mb-3">
									    <label for="setting-input-1" class="form-label">email</label>
										<?php 
											echo '<input name="email" type="email" class="form-control" id="setting-input-1" value="'.$email.'" readonly>';
										?>
										
									</div>
									<div class="mb-3 ">
									    <label for="setting-input-2" class="form-label">รหัสผู้ใช้งานแบบจ่ายเงิน</label>
									    <?php 
											echo '<input name="uid_pro" type="text" class="form-control" id="setting-input-1" value="'.$uid_pro.'" readonly>'
										?>
									</div>
									<div class="mb-3 ">
									    <label for="setting-input-2" class="form-label">หมายเหตุ</label>
									    <?php 
											echo '<input name="etc" type="text" class="form-control signin-email"   value="'.$etc.'" readonly>'
										?>
									</div>
									<div class="mb-3 ">
									    <label for="setting-input-2" class="form-label">โปรโมชั่นที่สมัคร</label>
									    <?php 
											echo '<input name="utype" type="text" class="form-control" id="setting-input-1" value="'.$utype.'" readonly>'
										?>
									</div>
									
									<button name="edit_user" type="submit" class="btn app-btn-primary" >แก้ไข</button>
									<a class="btn app-btn-primary" style="background: red;}"href="index.php" >กลับ</a>
							    </form>
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
						
	                </div>
                </div><!--//row-->
                
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
	    
	    <footer class="app-footer">
		    <div class="container text-center py-3">
		         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
		    </div>
	    </footer><!--//app-footer-->
    </div><!--//app-wrapper-->    					
    <!-- Javascript -->          
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  
    
    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script> 

</body>
</html> 

