<?php 
    require("connect.php");
    // require("authen.php");
	// checkadmin();
	if (isset($_GET['page'])){
		$page = $_GET['page'];
	}else{
		$page = 1 ;
	}
	if (isset($_REQUEST['search']) && isset($_GET['stype'])){
		$search = $_REQUEST['search'];
		$stype = $_REQUEST['stype'];
		
	}
	$perpage = 50;
	$start = ($page - 1) * $perpage;
	$sql2 = "SELECT * FROM staff";
	$query2 = mysql_query($sql2,$conn);
	$total_record = mysql_num_rows($query2);
	$total_page = ceil($total_record / $perpage);
    include("staffdb.php");
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
    
    
    <div class="app-wrapper">
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <div class="row g-3 mb-4 align-items-center justify-content-between">

				    <div class="col-auto">
					     <div class="page-utilities">
						    <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
							    <div class="col-auto">
								    <form action="staff.php" medthod="post" class="table-search-form row gx-1 align-items-center">
					                    <div class="col-auto">
					                        <input type="text" id="search-orders" name="search" class="form-control search-orders" placeholder="Search">
										
					                    </div>
										<div class='col-auto'>
											<select class="form-select" name="stype" id="search">
												<option value="s_id">staff id</option>
												<option value="email">email</option>
												<option value="s_fname">ชื่อ</option>
												<option value="s_lname">นามสกุล</option>
												<option value="s_telnum">เบอร์ติดต่อ</option>
												<option value="s_etc">หมายเหตุ</option>
												<option value="s_flag">flag</option>
											</select>
										</div>
					                    <div class="col-auto">
					                        <button type="submit" class="btn app-btn-secondary">Search</button>
					                    </div>
										
										<!--  -->
										<div class="col-auto">
											<div class="page-utilities">
												<div class="row g-2 justify-content-start justify-content-md-end align-items-center">
	
													<div class="col-auto">						    
														<a class="btn app-btn-secondary" href="staff_add.php">
															<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"></path>
															<path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"></path>
															</svg>
															เพิ่มร้าน
														</a>
													</div>
												</div><!--//row-->
											</div><!--//table-utilities-->
										</div>
										<!--  -->
										
					                </form>
							    </div>

						    </div><!--//row-->
					    </div><!--//table-utilities-->
				    </div><!--//col-auto-->
			    </div><!--//row-->
	
				<div class="tab-content" id="orders-table-tab-content">
			        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					    <div class="app-card app-card-orders-table shadow-sm mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
							        <table class="table app-table-hover mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">No.</th>
												<th class="cell">staff id</th>
												<th class="cell">email</th>
												<th class="cell">ชื่อ staff</th>
												<th class="cell">นามสกุล staff</th>
												<th class="cell">เบอร์ติดต่อ</th>
                                                <th class="cell">เวลาที่ขึ้นทะเบียน</th>
												<th class="cell">หมายเหตุ</th>
												<th class="cell">flag</th>
												<th class="cell"></th>
												<!-- <th class="cell"></th> -->
											</tr>
										</thead>
										<tbody>

											<?php 
												$i = 0 ;
												foreach ($rows as $value) {
														$i = $i + 1;
														echo"<tr>";
														echo "<td class='cell'> ". $i . "</td>";
														echo "<td style=' color:black'>" . $value['s_id'] . "</td>";
														echo "<td style=' color:black'>" . $value['email'] . "</td>";
                                                        echo "<td style=' color:black'>" . $value['s_fname'] . "</td>";
														echo "<td style=' color:black'>" . $value['s_lname'] . "</td>";
                                                        echo "<td style=' color:black'>" . $value['s_telnum'] . "</td>";
														echo "<td style=' color:black'>" . $value['s_regtime'] . "</td>";
														echo "<td style=' color:black'>" . $value['s_etc'] . "</td>";
														echo "<td style=' color:black'>" . $value['s_flag'] . "</td>";
														echo "<td style=' color:black'><a class='btn-sm app-btn-secondary' href='userdetail.php?userid=" .$value['id']."#'>View</a></td>";
														echo"</tr>";
													}
                                                    ?>
											<!-- <tr>
												<td class="cell">#15344</td>
												<td class="cell"><span class="truncate">Pellentesque diam imperdiet</span></td>
												<td class="cell">Teresa Holland</td>
												<td class="cell"><span class="cell-data">16 Oct</span><span class="note">01:16 AM</span></td>
												<td class="cell"><span class="badge bg-success">Paid</span></td>
												<td class="cell">$123.00</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
											</tr>
											
											<tr>
												<td class="cell">#15343</td>
												<td class="cell"><span class="truncate">Vestibulum a accumsan lectus sed mollis ipsum</span></td>
												<td class="cell">Jayden Massey</td>
												<td class="cell"><span class="cell-data">15 Oct</span><span class="note">8:07 PM</span></td>
												<td class="cell"><span class="badge bg-success">Paid</span></td>
												<td class="cell">$199.00</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
											</tr>
											
											<tr>
												<td class="cell">#15342</td>
												<td class="cell"><span class="truncate">Justo feugiat neque</span></td>
												<td class="cell">Reina Brooks</td>
												<td class="cell"><span class="cell-data">12 Oct</span><span class="note">04:23 PM</span></td>
												<td class="cell"><span class="badge bg-danger">Cancelled</span></td>
												<td class="cell">$59.00</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
											</tr>
											
											<tr>
												<td class="cell">#15341</td>
												<td class="cell"><span class="truncate">Morbi vulputate lacinia neque et sollicitudin</span></td>
												<td class="cell">Raymond Atkins</td>
												<td class="cell"><span class="cell-data">11 Oct</span><span class="note">11:18 AM</span></td>
												<td class="cell"><span class="badge bg-success">Paid</span></td>
												<td class="cell">$678.26</td>
												<td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
											</tr>
		 -->
										</tbody>
									</table>
						        </div><!--//table-responsive-->
						       
						    </div><!--//app-card-body-->		
						</div><!--//app-card-->

						<nav class="app-pagination">
							<ul class="pagination justify-content-center">
								<?php 
									for($i=1;$i<=$total_page;$i++){ 
										echo '<li class="page-item"><a class="page-link" href="index.php?page='.$i.'">'.$i.'</a></li>';
									}
								?>
								</li>
							</ul>
						</nav><!--//app-pagination-->
						
			        </div><!--//tab-pane-->
			        
				</div><!--//tab-content-->
				
				
			    
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

