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
						<h1 class="page-header">Create Co Traveler</h1>
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
			<li><select style="width:100px;"  name="Select1">
				<option value="1">Mr</option>
<option value="2">Mrs</option>
<option value="3">Ms</option>
<option value="4">Master</option>
			</select>
				<input name="Text1" type="text" placeholder="First Name"><input name="Text1" placeholder="Last Name" type="text">
				</li>
			<li><input name="Text1" class="ph-pin" placeholder="+91" type="text" /><input name="Text1" type="text" placeholder="Mobile No"><input name="Text1" placeholder="Email" type="text">
				</li>
		<li><input name="Text1" placeholder="Date Of Birth" type="text"> <select name="Select1">
				<option>Category</option>
				<option>Family</option>
<option>Friends</option>
<option>Colleagues</option>
			</select>
				</li>
			</ul>
				<br/>
							<h2 class="pkg-title">Passport Details</h2><br/>
<ul class="prf-form-panel">
			
<li><input name="Text1" type="text" placeholder="Passport Number"><input name="Text1" placeholder="Issued Country" type="text"></li>
<li><input name="Text1" type="text" placeholder="Issued Date"><input name="Text1" placeholder="Expiry Date" type="text"></li>
			</ul>

			<h2 class="pkg-title">Identity Details</h2><br/>
<ul class="prf-form-panel">
			
<li>
<select name="Select1">
				<option>ID Type</option>
				<option>Voter identity card </option>
<option>Passport</option>
<option>PAN Card </option>
<option>Driving Licence </option>
<option>Student Identity Card</option>
<option>AAdhaar</option>
			</select><input name="Text1" placeholder="Expiry Date" type="text">
</li>
			</ul>
			<ul class="prf-form-panel">
			
<li><div class="profil-btn"><a href="co_travelers.php"><button type="button" class="btn btn-primary btn-block">Update</button></a></div>
<div class="profil-btn"><button type="button" class="btn btn-primary btn-block">Cancel</button></div></li>
			</ul>


			</div>
			</div>
			<div class="span4"><div class="profile-img"><img alt="" height="164" src="images/profile_icon.jpg" width="203">
			<span class="change"><label>Upload Image</label>
			<input name="File1" type="file" /></span>
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
