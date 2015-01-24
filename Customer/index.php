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
		
		<div id="overview">
		
		
		<div id="page-wrapper">
		<div class="row-fluid">
                <div class="span12">
                    <h1 class="page-header">Overview</h1>
                </div>
                <!-- /.span12 -->
            </div>
			
			<div class="row-fluid">
			<div class="data_module span4">
				<h2>Profile</h2>
				<div class="data_box c_overview">
					<img width="50" height="50" src="images/user.jpg">
					<div class="c_info">
						<span class="3X_text"><?php echo $results[0]['first_name']." ".$results[0]['last_name'];?></span>  <a class="link">Change Password</a>
					</div>
					<div class="hr_line"></div>
					<span class="2X_text balance-height">Balance
							:<strong class="rupee"> R 2,000 </strong> </span>
					<input style="width:98%;" class="form-control" placeholder="Enter Amount"> <br />
					<span class="add-balence-bg"><button class="btn btn-primary btn-block" type="button">Add Balance</button></span>
				</div>
				<h2>Reward Summary</h2>
				<div class="data_box">
					<div class="3X_text">
						Total Points : <span class="member_ribbon silver">500</span>
					</div>
					<span class="X_text">(Silver Membership)</span>

					<h3>Connect With</h3>
					<div class="social-share">
					<i class="icon-facebook"></i>
					<i class="icon-tumblr"></i>
					<i class="icon-googleplus"></i>
					<i class="icon-linkedin"></i>					
						
					</div>
				</div>
			</div>
			<div class="data_module span8">
				<h2>Personal</h2>
				<div class="data_box profile">
					<a href="profile_edit.php" class="fa fa-pencil edit_icon"></a>
					<table width="100%">
						<tr>
							<td><span class="help-block">Email ID.</span></td>
							<td><span class="help-block">Mobile Number</span></td>
							<td><span class="help-block">Gender</span></td>
						</tr>
						<tr>
							<td><span class="text-block"><?php echo $results[0]['email'];?></span></td>
							<td><span class="text-block"><?php echo $results[0]['mobile_number'];?></span></td>
							<td><span class="text-block"><?php 
							if ($results[0]['title'] == 1)
							{
								$gender = "Male";
							}
							else 
							{
								$gender = "Female";
							}
							echo $gender;?></span></td>
						</tr>
						<tr>
							<td colspan="3"><br /> <span class="help-block">Address</span></td>
						</tr>
						<tr>
							<td colspan="3"><span class="text-block"><?php echo $results[0]['address'];?></span></td>
						</tr>
					</table>
				</div>
				<h2>Bookings</h2>
				<div class="data_box bookings">
					<div class="booking">
						<div class="pkg">
							<img src="images/1.jpg" class="thumbnail" />
							<div class="details">
								<h3 class="name">
									Andaman Islands <span>4 days</span>
								</h3>
								<div class="destinations">Destinations: 
									<span>Andaman Nicobar</span> <span>Maldives</span>
								</div>
								<div class="date"><strong>Travel Date :</strong> Monday 26 Oct 2014 | 
									<strong>Travelers:</strong> 10  </div>
								<a href="broucher.php"><button class="btn btn-primary">View Package</button></a>
								<a href="bookings_detail.php"><button class="btn btn-primary">View Booking</button></a>
							</div>
							
						</div>
						<p class="tips more"><strong>Travel Tips :</strong> Contact Tourist Information Centres/Tourist
							Police personnel for any assistance required. Treat the National
							Parks as they are sanctum sanctorum of India's natural
							heritage.Obtain permits from the Chief Wildlife Warden for
							photography/ videography inside a sanctuary or a Marine National
							Park . Make use of the service of authorized tourist guides.Carry
							legal documents like driving licence, permit, passport
							etc.Consult life guards before entering the sea. Swim in safe
							areas only.</p>
					</div>
				</div>
				<div class="data_box bookings">
					<div class="booking">
						<div class="pkg">
							<img src="images/3.jpg" class="thumbnail" />
							<div class="details">
								<h3 class="name">
									Explore India's Tigerland<span>8 days</span>
								</h3>
								<div class="destinations">Destinations: 
									<span>Bandhavgarh National Park Khajuraho, Orchha and Agra, Delhi</span>
								</div>
								<div class="date"><strong>Travel Date :</strong> Monday 26 Oct 2014 | 
									<strong>Travelers:</strong> 10  </div>
								<a href="broucher.php"><button class="btn btn-primary">View Package</button></a>
								<a href="bookings_detail.php"><button class="btn btn-primary">View Booking</button></a>
							</div>
						</div>
						<p class="tips more"><strong>Travel Tips :</strong> Contact Tourist Information Centres/Tourist
							Police personnel for any assistance required. Treat the National
							Parks as they are sanctum sanctorum of India's natural
							heritage.Obtain permits from the Chief Wildlife Warden for
							photography/ videography inside a sanctuary or a Marine National
							Park . Make use of the service of authorized tourist guides.Carry
							legal documents like driving licence, permit, passport
							etc.Consult life guards before entering the sea. Swim in safe
							areas only.</p>
					</div>
				</div>

							</div>
							</div>
		</div>
	</div>
	<?php include_once 'include/footer.php';?>
	<script type="text/javascript">
	$(function(){
		var showChar = 400;
	    var ellipsestext = "...";
	    var moretext = "more &gt;";
	    var lesstext = "&lt; less";
	    $('.more').each(function() {
	        var content = $(this).html();
	 
	        if(content.length > showChar) {
	 
	            var c = content.substr(0, showChar);
	            var h = content.substr(showChar, content.length - showChar);
	 
	            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span style="display:none;">' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
	 
	            $(this).html(html);
	        }
	 
	    });
	 
	    $(".morelink").click(function(){
	        if($(this).hasClass("less")) {
	            $(this).removeClass("less");
	            $(this).html(moretext);
	        } else {
	            $(this).addClass("less");
	            $(this).html(lesstext);
	        }
	        $(this).parent().prev().toggle();
	        $(this).prev().toggle();
	        return false;
	    });


		
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
	});

	</script>
		<div style="height:250px; clear:both;"></div>

</body>
</html>
