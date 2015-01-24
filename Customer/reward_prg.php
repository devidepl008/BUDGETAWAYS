<!DOCTYPE html>
<style type="text/css">
.auto-style1 {
	font-weight: normal;
}
</style>
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
		<div id="reward_prg">
		<div class="row-fluid">
                <div class="span12">
                    <h1 class="page-header">My Rewards Points</h1>
                </div>
                <!-- /.span12 -->
            </div>

		<div class="row-fluid">
		<div class="referral-bg">
		<div class="span9">
		<p class="discr-cnt">By joining the BudGetaways Referral Program, youâ€™ll receive $15 for every user who signs up based on your recommendation. No IT experience required, no systems to manageâ€”just an interest in helping people experience a better way of working. </p>
		<p class="d-link">Your unique referral link <strong>http://www.budgetaways.com/referid=12434nvbdfj3</strong></p>
		<br/>
		
		<div><p class="socialCnt">Share via social media and earn points</p>
		
		<ul class="ref-share">
		<li class="ref-share-fb">&nbsp;</li>
		<li class="ref-share-in">&nbsp;</li>
		<li class="ref-share-tw">&nbsp;</li>
		<li class="ref-share-gp">&nbsp;</li>
		<li class="ref-share-pin">&nbsp;</li>
		<li class="ref-share-yh">&nbsp;</li>
		</ul>		
</div>
		</div>
		<div class="span3">
		<div class="ref-right-border">
		Referral Points
		<h1>200</h1>
		Purchaise Points
		<h1>200</h1>
		<br/>
		<h1 class="total-ponts"><span class="auto-style1"><strong>Total</strong></span> 400</h1>
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
	});

	</script>
</body>
</html>
