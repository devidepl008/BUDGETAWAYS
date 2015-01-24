<?php
include 'include/connection.php';
include 'classes/CommonQueries.php';
include 'classes/CustomerInfo.class.php';
include 'classes/Quote.class.php';
session_start();
$customer_mid = $_SESSION['package_customer_mid']; 
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
		<div id="quotes">
		<div class="row-fluid">
                <div class="span12">
                    <table width="100%">
						<tr class="tr-bg">
	                    	<td>
	                    		<h1 class="page-header">Quotes</h1>
	                    	</td>
							<td align="center">
								<a href="quotes.php"><div class="view-quote" style="width:120px;">Send Quotes</div></a>
							</td>
						</tr>
					</table>
                </div>
                <!-- /.span12 -->
            </div>
		<div class="row-fluid">
		<div class="create_quote">
		<?php
		$mysql = new CommonQueries();
		$quotes = $mysql->select('pkg_send_quote', array('customer_mid'=>$customer_mid));
		unset($mysql);
//		echo "<pre>";print_r($quotes);echo "</pre>";
		?>
	<table width="100%">
		<tr class="tr-bg">
			<th width="40">S.NO</th>
			<th width="100">Destination</th>			
			<th width="100">Traveler</th>
			<th width="60">date</th>
			<th width="90">My budget</th>
			<th width="85">Proces</th>
			<th width="100">Responces</th>
			<th width="72">View Quotes</th>
		</tr>
		<?php for ($s=0;$s<count($quotes);$s++){?>
		<tr class="tr-bg">
			<td width="40"><?php echo ($s+1);?></td>
			<td width="120"><?php echo $quotes[$s]['destination'];?></td>			
			<td width="100">Adults : <?php echo $quotes[$s]['number_adults']?>, Children : <?php echo $quotes[$s]['number_child'];?></td>
			<td width="60"><?php echo date("M, d Y",$quotes[$s]['travel_date']);?></td>
			
			<td width="90"><span class="price"><span class="rupee price">R</span> <?php echo $quotes[$s]['total_budget'];?></span></td>
			<td width="85"><span class="travel-date"><?php echo date("M, d Y",$quotes[$s]['created_on']);?></span>
			<span class="daysAgo">3 Days ago</span>
			</td>
			<td width="100"><span class="Agents">1 Agents</span>
			<div class="hide-panel">
			
			
			</div>
			</td>
			<td align="center" width="72"><a href="quotes_rpy_agent.php?send_quote_id=<?php echo $quotes[$s]['send_quote_id'];?>"><div class="view-quote">View</div></a></td>
		</tr>
		<?php }?>
		</table>
	
</div>
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
