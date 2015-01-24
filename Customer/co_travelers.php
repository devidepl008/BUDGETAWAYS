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
		<div id="co_travelers">
		<div class="row-fluid">
		<br class="clear"/><br/>
          <div class="con-friend">Connect with co-traveler(s) on budgetaways 
			  <span><strong><img src="images/google_194x50.png"></strong>	<strong><img src="images/yahoo_194x50.png"></strong>		 </span> 
			  <div class="clear"></div>
			  </div>    
                <!-- /.span12 -->
            </div>
<br/>
<div class="row-fluid">
<h1 class="page-header">Co-Travellers</h1>
<div class="btn-group co-sort">
                <button data-toggle="dropdown" class="btn btn-inverse dropdown-toggle">Sort By <span class="caret"></span></button>
                <ul class="dropdown-menu sort-place">
                  <li><a href="#">Friends</a></li>
                  <li><a href="#">Family</a></li>
                  <li><a href="#">Colleagues</a></li>              
                </ul>
              </div>

<ul class="co-travelere-link">
<li><a class="create" href="create_traveler.php">CREATE CO-TRAVELER</a></li>
<li><a class="invitations" href="#invitation-modal" data-toggle="modal">SEND INVITATION</a></li>
</ul>

<div class="clear"></div>

                <div class="span6">
                <div class="co-traveller-bg">
                
                <div class="left-side"><img alt="" height="77" src="images/traveler_1.jpg" width="93"></div>
                <div class="right-side">
                <div class="co-trvellers-edit"><span><i class="icon-trash2" title="Delete"></i></span><span><i class="icon-edit" title="Edit"></i></span></div>                <p class="NameCnt">Mahesh Babu G <span class="co-t-friend">Friend</span></p><span class="emailCnt">katrina@email.com</span><span class="emailCnt">+91 9856321470 </span></div>
                <div class="clear"></div>
                </div>
                </div>
                <div class="span6">
                <div class="co-traveller-bg">
                
                <div class="left-side"><img alt="" height="77" src="images/traveler_2.jpg" width="93"></div>
                <div class="right-side">
                <div class="co-trvellers-edit"><span><i class="icon-trash2" title="Delete"></i></span><span><i class="icon-edit" title="Edit"></i></span></div>                <p class="NameCnt">Katrina kaif <span class="co-t-friend">Colleagues</span></p><span class="emailCnt">katrina@email.com</span><span class="emailCnt">+91 9856321470 </span></div>
                <div class="clear"></div>
                </div>

                </div>
                <div class="span6">
                <div class="co-traveller-bg">
                
                <div class="left-side"><img alt="" height="77" src="images/traveler_3.jpg" width="93"></div>
                <div class="right-side">
                <div class="co-trvellers-edit"><span><i class="icon-trash2" title="Delete"></i></span><span><i class="icon-edit" title="Edit"></i></span></div>                <p class="NameCnt">Depika Padukone <span class="co-t-friend">Family</span></p><span class="emailCnt">katrina@email.com</span><span class="emailCnt">+91 9856321470 </span></div>
                <div class="clear"></div>
                </div>

                </div>
<div class="span6">
                <div class="co-traveller-bg">
                
                <div class="left-side"><img alt="" height="77" src="images/traveler_4.jpg" width="93"></div>
                <div class="right-side">
                <div class="co-trvellers-edit"><span><i class="icon-trash2" title="Delete"></i></span><span><i class="icon-edit" title="Edit"></i></span></div>                <p class="NameCnt">Aishswarya Rai <span class="co-t-friend">Friend</span></p><span class="emailCnt">katrina@email.com</span><span class="emailCnt">+91 9856321470 </span></div>
                <div class="clear"></div>
                </div>

                </div>
<div class="span6">
                <div class="co-traveller-bg">
                
                <div class="left-side"><img alt="" height="77" src="images/traveler_2.jpg" width="93"></div>
                <div class="right-side">
                <div class="co-trvellers-edit"><span><i class="icon-trash2" title="Delete"></i></span><span><i class="icon-edit" title="Edit"></i></span></div>
                <p class="NameCnt">Katrina kaif <span class="co-t-friend">Family</span></p><span class="emailCnt">katrina@email.com</span><span class="emailCnt">+91 9856321470 </span></div>
                <div class="clear"></div>
                </div>

                </div>
<div class="span6">
                <div class="co-traveller-bg">
                
                <div class="left-side"><img alt="" height="77" src="images/traveler_3.jpg" width="93"></div>
                <div class="right-side">
                <div class="co-trvellers-edit"><span><i class="icon-trash2" title="Delete"></i></span><span><i class="icon-edit" title="Edit"></i></span></div>                <p class="NameCnt">Depika padukone <span class="co-t-friend">Colleagues</span></p><span class="emailCnt">katrina@email.com</span><span class="emailCnt">+91 9856321470 </span></div>
                <div class="clear"></div>
                </div>

                </div>

            </div>

		</div>
		<div id="invitation-modal" class="modal hide" role="dialog">
		<div class="modal-header">
		<button class="close" data-dismiss="modal" type="button"><i class="icon-cancel"></i></button>
		<h3>Send Invitation</h3>
		</div>
	<div class="modal-body">
	<div class="sned-invi-in"><input type="text" placeholder="Enter Email id"/></div>
	<div class="sned-invi-btn"><button type="button" class="btn btn-primary btn-block">Send</button></div>
	
		
		</div>	</div>

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
	});

	</script>
</body>
</html>
