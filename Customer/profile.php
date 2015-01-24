<?php
include 'include/connection.php';
include 'classes/CommonQueries.php';
include 'classes/CustomerInfo.class.php';
session_start();
	if (isset($_SESSION)&& $_SESSION != null)
  {
  	$customer_mid = $_SESSION['package_customer_mid'];
  	$customer_obj = new CustomerInfo();
  	$results = $customer_obj->get_customer_complete_data_by_mid($customer_mid);
  	unset($customer_obj);
  	echo "<pre>";print_r($results);echo "</pre>";
  }	 
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
<?php include_once 'include/headtags.php';?>
</head>
<body class="body">
	<?php include_once 'include/header.php';?>
	<div class="module_container">
		<?php include_once 'include/menu.php';?>
		<div id="profile">
			<div id="page-wrapper">
				<div class="row-fluid">
					<div class="col-md-12">
						<h1 class="page-header">Profile</h1>
					</div>
					<!-- /.col-md-12 -->
				</div>
							</div>
			<div class="row-fluid">
			<div class="profile-bg">
			
			<div class="span8">
			<br/>
			<p class="prfl-list-head">PERSONAL DETAILS <span class="prfl-list-edit"></span></p>
			<ul class="prfl-list">
			<li>
			<strong>Name</strong>
			<span><?php echo $results[0]['first_name']." ".$results[0]['last_name'];?></span>
			</li>
			<li><strong>Mobile</strong>
			<span>+91 <?php echo $results[0]['mobile_number'];?></span>
</li>
			<li><strong>Email</strong>
			<span><?php echo $results[0]['email'];?></span>
</li>
			<li><strong>Date Of Birth</strong>
			<span><?php echo date("d M, Y",$results[0]['dob']);?></span>
</li>
			<li><strong>Address</strong>
			<span>
			<?php echo $results[0]['address'];?>
			</span>
</li>


			</ul>
			<p class="prfl-list-head">Identity Details</p>
			<ul class="prfl-list">
			<li>
			<strong>Passport No</strong>
			<span><?php echo $results[0]['proof_id_number'];?></span>
			</li>
			<li><strong>issued by</strong>
			<span>India</span>
</li>


			</ul>



			</div>
			<div class="span4"><a class="prfl-edit-link" href="profile_edit.php"><i class="icon-edit" title="Edit"></i> Edit</a><div class="profile-img">
			<img alt="" height="164" src="../User/member_images/<?php echo $results[0]['customer_image'];?>" width="203">
			<span class="change">Change</span><span class="remove">Remove</span>
			</div>
			</div>
			<div class="clear"></div>
			</div>
			</div>				
		</div>
	</div>
	<?php include_once 'include/footer.php';?>
	<script type="text/javascript">
	$(function(){
		$("#loginContainer").click(function(){
			$("#loginBox").show();
		});
		$(document).mouseup(function (e){
		    var container = $("#loginBox");
		    if (!container.is(e.target) // if the target of the click isn't the container...
		        && container.has(e.target).length === 0) // ... nor a descendant of the container
		    {
		        container.hide();
		    }
		});
		$('#datetofbirth').datetimepicker({
			pickTime: false
		});
	});

	</script>
	<div style="clear:both; height:250px;"></div>
</body>
</html>
