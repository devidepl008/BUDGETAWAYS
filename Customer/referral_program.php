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
		<div id="quotes">
		<div class="row-fluid">
                <div class="span12">
                    <h1 class="page-header">Referral Program</h1>
                </div>
                <!-- /.span12 -->
            </div>
		</div>
		<div class="row-fluid">
		<div class="referral-bg">
		<div class="span6">
		<p class="discr-cnt">By joining the BudGetaways Referral Program, you’ll receive $15 for every user who signs up based on your recommendation. No IT experience required, no systems to manage—just an interest in helping people experience a better way of working. </p>
		<p class="d-link">Your unique referral link <strong>http://www.budgetaways.com/referid=12434nvbdfj3</strong></p>
		<div>Share via<div>	<img src="images/fb.png" alt="fb" /> <img src="images/tw.png"alt="tw" /> <img src="images/gplus.png" alt="g+" /> <img src="images/in.png" alt="In" /></div>
</div>
		</div>
		<div class="span3">
		<div class="ref-right-border">
		Referral Points
		<h1>200</h1>
		</div>
		</div>
		<div class="clear"></div>
		</div>
		</div>
	</div>
	<?php include_once 'include/footer.php';?>
	
	<script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
$(document).ready(function(){
$(".OE_disc").hide();
	$(".quote_creation .OE_title").show();	
	$('.quote_creation .OE_title').click(function(){
	var parent=$(this).parent();
	$(this).parent().find(".OE_disc").slideToggle();
	$(this).parent().find(".arrow").toggleClass("fa-caret-right fa-caret-down");
	});
});
});//]]>  
</script>

	
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
	<!-- Accordian Panel Javascript -->

</body>
</html>
