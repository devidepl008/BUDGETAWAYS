<?php
include 'include/connection.php';
include 'classes/CommonQueries.php';
include 'classes/CustomerInfo.class.php';
session_start();
  if (isset($_POST['submit'])&&$_POST['submit'] == "Submit")
  {
//  	echo "<pre>";print_r($_FILES);echo "</pre>";
//  	echo "<pre>";print_r($_POST);echo "</pre>";exit;
  	$title = $_POST['title'];
  	$first_name = $_POST['first_name'];
  	$last_name = $_POST['last_name'];
  	$date_of_birth_arr = explode("/",$_POST['date_of_birth']);
  	$date_of_birth = mktime(0,0,0,$date_of_birth_arr[0],$date_of_birth_arr[1],$date_of_birth_arr[2]);
  	$mobile_number = $_POST['mobile_number'];
  	$email = $_POST['email'];
  	$address = $_POST['address'];
  	
  	$passport_number = $_POST['passport_number'];
  	$expiry_date_arr = explode("/", $_POST['expiry_date']);
  	$expiry_date = mktime(0,0,0,$expiry_date_arr[0],$expiry_date_arr[1],$expiry_date_arr[2]);
  	$issue_date_arr = explode("/",$_POST['issue_date']);
  	$issue_date = mktime(0,0,0,$issue_date_arr[0],$issue_date_arr[1],$issue_date_arr[2]);
  	$issue_country = $_POST['issue_country'];
//  	$nationality = $_POST['nationality'];
  	
  	$proof_id_type = $_POST['proof_id_type'];
  	$proof_id_number = $_POST['proof_id_number'];
  	
  	$mid = $_POST['hid_mid'];
  	$created_on = mktime();
  	$status = 1;
  	
	function getExtension($str)
	{
		$i = strrpos($str,".");
	    if (!$i) { return ""; }
	    $l = strlen($str) - $i;
	    $ext = substr($str,$i+1,$l);
	    return $ext;
	}
	$iname = $_POST['hid_image'];
    if($_FILES["customer_image"]["name"]!=NULL)
	{
		$file = $_FILES['customer_image']['name'];
		$iext = getExtension($file);
		$ctime = mktime();
		$iname = "cust_".$ctime.".".$iext;
		if(getExtension($file)=='jpg' || getExtension($file)=='gif' || getExtension($file)=='png')
		{
			move_uploaded_file($_FILES['customer_image']['tmp_name'],"../User/member_images/".$iname);
		}
	}
	$mysql = new CommonQueries();
	$update_cust_1 = array(
						'title'=>$title,
						'first_name'=>$first_name,
						'last_name'=>$last_name,
						'email'=>$email,
						'mobile_number'=>$mobile_number,
						'updated_on'=>$created_on,
					);
//					echo "<pre>";print_r($update_cust_1);echo "</pre>";
					$update_customers = $mysql->update('pkg_customers', $update_cust_1, array('customer_mid'=>$mid));
	$update_cust_2 = array(
						
						'dob'=>$date_of_birth,
						'address'=>$address,
						'customer_image'=>$iname,
					);
//					echo "<pre>";print_r($update_cust_2);echo "</pre>";
					$update_customer_details = $mysql->update('pkg_customer_details', $update_cust_2, array('customer_mid'=>$mid));
	$update_cust_3 = array(
						
						'proof_type_id'=>$proof_id_type,
						'proof_id_number'=>$proof_id_number,
					);
					$update_customer_proofs = $mysql->update('pkg_user_id_proofs', $update_cust_3, array('mid'=>$mid));
	$is_exist = $mysql->select('pkg_passport_details', array('mid'=>$mid));
	$count = count($is_exist);
	if ($count == 0)
	{
		$insert_passport_details = array(
							'mid'=>$mid,
//							'user_type'=>2,
							'passport_number'=>$passport_number,
							'expiry_date'=>$expiry_date,
							'issue_date'=>$issue_date,
							'issue_country'=>$issue_country,
//							'nationality'=>$nationality,
							'created_on'=>$created_on,
							'status'=>$status,
						);
//					echo "<pre>";print_r($insert_passport_details);echo "</pre>";exit;
						$insert_passport = $mysql->insert('pkg_passport_details', $insert_passport_details);
	}
	else 
	{
		$insert_passport_details = array(
							'passport_number'=>$passport_number,
							'expiry_date'=>$expiry_date,
							'issue_date'=>$issue_date,
							'issue_country'=>$issue_country,
							'nationality'=>$nationality,
							'updated_on'=>$created_on,
						);
						echo "<pre>";print_r($insert_passport_details);echo "</pre>";exit;
						$insert_passport = $mysql->update('pkg_passport_details', $insert_passport_details, array('mid'=>$mid));
	}
					
					unset($mysql);
	header("Location:profile_edit.php");
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
		<?php
		$customer_mid = "";
		if (isset($_SESSION)&& $_SESSION != null)
		  {
		  	$customer_mid = $_SESSION['package_customer_mid'];
		  }
		  	$customer_obj = new CustomerInfo();
		  	$results = $customer_obj->get_customer_complete_data_by_mid($customer_mid);
		  	$results_idproof = $customer_obj->get_customer_idproof_data_by_mid($customer_mid);
		  	echo "<pre>";print_r($results_idproof);echo "</pre>";
		  	unset($customer_obj);
		  if (!empty($results))
		  {
		  	$title = $results[0]['title'];
		  	$first_name = $results[0]['first_name'];
		  	$last_name = $results[0]['last_name'];
		  	$mobile_number = $results[0]['mobile_number'];
		  	$address = $results[0]['address'];
		  	$email = $results[0]['email'];
		  	$dob = $results[0]['dob'];
		  	$proof_type = $results[0]['proof_type_id'];
		  	$id_number = $results[0]['proof_id_number'];
		  	$customer_image = $results[0]['customer_image']; 
		  }
		  if (!empty($results_idproof))
		  {
		  	$passport_number = $results_idproof[0]['passport_number'];
		  	$expiry_date = $results_idproof[0]['expiry_date'];
		  	$issue_date = $results_idproof[0]['issue_date'];
		  	$issue_country = $results_idproof[0]['issue_country'];
		  }
		  	 
		?>
		<form action="profile_edit.php" class="form-horizontal" method="post" enctype="multipart/form-data">
		<div id="profile">
			<div id="page-wrapper">
				<div class="row-fluid">
					<div class="col-md-12">
						<h1 class="page-header">Profile <a class="changePsswrd" href="#changepassword" data-toggle="modal">Change Password</a></h1>
					</div>
					
					<!-- /.col-md-12 -->
				</div>
							</div>
			<div class="row-fluid">
			<div class="profile-bg">
			
			<div class="span8">
			<div class="profile-panel">
			<h2 class="pkg-title">PERSONAL DETAILS</h2><br/>
			<ul class="prf-form-panel">
			<li><select style="width:100px;"  name="title" id="title">
				<option value="1" <?php if ($title==1){?>selected="selected"<?php }?>>Mr</option>
				<option value="2" <?php if ($title==2){?>selected="selected"<?php }?>>Mrs</option>
				<option value="3" <?php if ($title==3){?>selected="selected"<?php }?>>Ms</option>
				<option value="4" <?php if ($title==4){?>selected="selected"<?php }?>>Master</option>
			</select>
				<input type="hidden" id="hid_mid" name="hid_mid" value="<?php echo $customer_mid;?>"/>
				<input type="hidden" id="hid_image" name="hid_image" value="<?php echo $customer_image;?>" />
				<input id="first_name" name="first_name" type="text" placeholder="First Name" value="<?php echo $first_name;?>" />
				<input id="last_name" name="last_name" placeholder="Last Name" type="text" value="<?php echo $last_name;?>" />
				</li>
			<li><input id="code" name="code" class="ph-pin" placeholder="+91" type="text" />
			<input id="mobile_number" name="mobile_number" type="text" placeholder="Mobile No" value="<?php echo $mobile_number;?>" />
			<input id="email" name="email" placeholder="Email" type="text" value="<?php echo $email;?>" />
				</li>
		<li><input id="date_of_birth" name="date_of_birth" placeholder="Date Of Birth" type="text" value="<?php echo date("m/d/Y",$dob);?>">
				</li>
		<li>
			<textarea id="address" name="address" style="max-width:350px;"><?php echo $address;?></textarea>
<!--			<input name="Text1" type="text" placeholder="Address line 1">
			<input name="Text1" placeholder="Address line 2" type="text">-->
		</li>
		<!--<li>
			<input name="Text1" type="text" placeholder="City / District">
			<input name="Text1" placeholder="State" type="text">
		</li>
		<li>
			<input name="Text1" type="text" placeholder="Country">
			<input name="Text1" placeholder="ZIP Code" type="text">
		</li>-->
			</ul>
			<h2 class="pkg-title">Passport Details</h2><br/>
	<ul class="prf-form-panel">
				
		<li>
			<input id="passport_number" name="passport_number" type="text" value="<?php echo $passport_number;?>" placeholder="Passport Number">
			<input id="issue_country" name="issue_country" value="<?php echo $issue_country;?>" placeholder="Issued Country" type="text">
		</li>
		<li>
			<input id="issue_date" name="issue_date" type="text" value="<?php echo $issue_date;?>" placeholder="Issued Date">
			<input id="expiry_date" name="expiry_date" value="<?php echo $expiry_date;?>" placeholder="Expiry Date" type="text">
		</li>
	</ul>
	<h2 class="pkg-title">Identity Details</h2><br/>
	<ul class="prf-form-panel">
			
<li>
<select id="proof_id_type" name="proof_id_type">
	<option value="0" <?php if ($proof_type==0){?>selected="selected"<?php }?>>Select ID Type</option>
	<option value="1" <?php if ($proof_type==1){?>selected="selected"<?php }?>>Voter identity card </option>
	<option value="2" <?php if ($proof_type==2){?>selected="selected"<?php }?>>Passport</option>
	<option value="3" <?php if ($proof_type==3){?>selected="selected"<?php }?>>PAN Card </option>
	<option value="4" <?php if ($proof_type==4){?>selected="selected"<?php }?>>Driving Licence </option>
	<option value="5" <?php if ($proof_type==5){?>selected="selected"<?php }?>>Student Identity Card</option>
	<option value="6" <?php if ($proof_type==6){?>selected="selected"<?php }?>>AAdhaar</option>
</select>
<input name="proof_id_number" id="proof_id_number" placeholder="Expiry Date" type="text">
</li>
			</ul>
			<ul class="prf-form-panel">
			
<li><div class="profil-btn">
<input type="submit" id="submit" name="submit" value="Submit" class="btn btn-primary btn-block" />
<!--<button type="button" class="btn btn-primary btn-block">Update</button>-->
</div>
<div class="profil-btn"><button type="button" class="btn btn-primary btn-block">Cancel</button></div></li>
			</ul>


			</div>
			</div>
			<div class="span4"><div class="profile-img">
			<img alt="" height="164" src="<?php if ($customer_image !=""){echo "../User/member_images/".$results[0]['customer_image'];}else{?>images/profile_icon.jpg<?php }?>" width="203">
			<span class="change"><label>Upload Image</label>
			<input id="customer_image" name="customer_image" type="file" /></span>
			</div>
			</div>
			<div class="clear"></div>
			</div>
			</div>				
		</div>
	</form>
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
	
	
	<div id="changepassword" class="modal hide" role="dialog">
		<div class="modal-header">
		<button class="close" data-dismiss="modal" type="button"><i class="icon-cancel"></i></button>
		<h3>Chage Password</h3>
		</div>
	<ul class="password-panel">
	<li><label>Old Password</label><input name="Password1" type="password"></li>
	<li><label>New</label><input name="Password1" type="password"></li>
	<li><label>Conform Password</label><input name="Password1" type="password"></li>
	<li><button class="btn btn-primary updatebtn" type="button" data-dismiss="modal">Update</button></li>
	</ul>
	<div class="clear"></div>
	<br/>
	</div>

	
</body>
</html>
