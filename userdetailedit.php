<?php
	require("connect.php");
	// require("authen.php");
	// checkadmin();
	
    if(isset($_POST['edit_user'])){
        $email = mysql_real_escape_string($_POST['email']);
        $uid_pro = mysql_real_escape_string($_POST['uid_pro']);
        $etc = mysql_real_escape_string($_POST['etc']);
        // $telnum= mysql_real_escape_string($_POST['telnum']);
        $utype = mysql_real_escape_string($_POST['utype']);
	} else {
		$email = $_SESSION['foo'];
		$uid_pro = $_SESSION['foo'];
		$etc = $_SESSION['foo'];
		$utype = $_SESSION['foo'];
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
		include("header.php"); 
	?>

    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">			    
			    <h1 class="app-page-title">แก้ไขข้อมูลสมาชิกที่จ่ายเงิน</h1>
			    <hr class="mb-4">
                <div class="row g-4 settings-section">
	                <div class="col-12 col-md-4">
		                <h3 class="section-title">General</h3>
		                <div class="section-intro">
							ทำการแก้ไขข้อมูลร้านโดย กรอกข้อมูลที่ต้องการแก้ไขใหม่ แล้วกดปุ่ม แก้ไข
						</div>
						<br>

	                </div>
	                <div class="col-12 col-md-8">
						
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
								
							    <form class="settings-form" action="userdetailedit_db.php" method="post">
								
								    <div class="mb-3">
									    <label for="setting-input-1" class="form-label">email</label>
										<?php 
											echo '<input name="email" type="email" class="form-control" id="setting-input-1" value="'.$email.'" readonly>';
										?>
										
									</div>
									<div class="mb-3 ">
									    <label for="setting-input-2" class="form-label">รหัสผู้ใช้งานแบบจ่ายเงิน</label>
									    <?php 
											echo '<input name="uid_pro" type="text" class="form-control" id="setting-input-1" value="'.$uid_pro.'" >'
										?>
									</div>
									<div class="mb-3 ">
									    <label for="setting-input-2" class="form-label">หมายเหตุ</label>
									    <?php 
											echo '<input name="etc" type="text" class="form-control signin-email" placeholder="Email address"  value="'.$etc.'" >'
										?>
									</div>
									<div class="mb-3 ">
									    <label for="setting-input-2" class="form-label">โปรโมชั่นที่สมัคร</label>
									    <?php 
											// echo '<input name="userrole" type="text" class="form-control" id="setting-input-1" value="'.$userrole.'" >';
                                            echo '<select id="utype" name="utype">';
                                            echo '<option value="'.$utype.'">'.$utype.'</option>';
                                            echo '<option value="1M">1M</option>';
                                            echo '<option value="3M">3M</option>';
                                            echo '<option value="6M">6M</option>';
                                            echo '<option value="1Y">1Y</option>';
                                            echo '</select>';
										?>
									</div>
									
									<button name="edit_user" type="submit" class="btn app-btn-primary" >แก้ไข</button>
									<!-- <button name="add_shop" type="submit" class="btn app-btn-primary" >บันทึก</button> -->
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

