<?php
include 'include/connection.php';
include 'classes/CommonQueries.php';
include 'classes/CustomerInfo.class.php';
include 'classes/Quote.class.php';
session_start();
$customer_mid = $_SESSION['package_customer_mid'];
if (isset($_POST['submit'])&&$_POST['submit']=="Send Quote")
{
//	echo "<pre>";print_r($_POST);echo "</pre>";exit;
	$total_budget = $_POST['total_budget'];
	$destination = $_POST['destination'];
	$date = $_POST['date'];
	$date_split = explode("/", trim($date));
	$travel_date = mktime(0,0,0,$date_split[0],$date_split[1],$date_split[2]);
	$hotel_stars = $_POST['hotel_stars'];
	$number_adults = $_POST['number_adults'];
	$number_child = $_POST['number_child'];
	$number_days = $_POST['number_days'];
	$class = $_POST['class'];
	$transport_type = $_POST['transport_type'];
	$style = $_POST['style'];
	$theme = $_POST['theme'];
	$insert_data = array(
		'customer_mid' => $customer_mid,
		'destination' => $destination,
		'travel_date' => $travel_date,
		'total_budget' => $total_budget,
		'hotel_stars' => $hotel_stars,
		'number_adults' => $number_adults,
		'number_child' => $number_child,
		'number_days' => $number_days,
		'class' => $class,
		'transport_type' => $transport_type,
		'style' => $style,
	);
	$quote_obj = new Quotes();
	$mysql = new CommonQueries();
	$send_quote_id = $quote_obj->send_quote_insertion($insert_data);
//	echo $send_quote_id;exit;
	unset($quote_obj);
	for ($td=0;$td<count($theme);$td++)
	{
		$theme_data = array(
			'send_quote_id' => $send_quote_id,
			'theme_id' => $theme[$td],
		);
//		echo "<pre>";print_r($theme_data);echo "</pre>";
		$insert = $mysql->insert('pkg_send_quote_theme', $theme_data);
	}
	$track_data = array(
		'send_quote_id' => $send_quote_id,
		'action' => "Send Quote Creation",
		'created_on' => mktime(),
	);
	$insert = $mysql->insert('pkg_send_quote_track', $track_data);
//	echo "<pre>";print_r($insert_data);echo "</pre>";exit;
	unset($mysql);
	header("Location:quotes.php");
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
		<div id="quotes">
		<div class="row-fluid">
		<div class="create_quote">
	<div class="quote-panel">

<div class="replayPanel">
<form action="quotes.php" class="form-horizontal" method="post" enctype="multipart/form-data">
<h2>Quote Reply</h2>
<ul class="user-rpy">
<li><span><label>Destination </label><input id="destination" name="destination" value="" type="text" onkeypress="getDestination(this);" style="height:20px;" /></span> 
</li>
<li><span><label>Travel Date </label><input id="date" name="date" value="" type="text" style="height:20px;" /></span> 
</li>
<li><span><label>Total Budget </label><input id="total_budget" name="total_budget" value="15000" type="text"/ style="height:20px;"></span> 
<span><label>Hotels </label>
<select name="hotel_stars" id="hotel_stars">
				<option value="0">Select Hotel Type</option>
				<?php for ($h=5;$h>=1;$h--){?>
				<option value="<?php echo $h;?>"><?php echo $h;?> Star</option>
				<?php }?>
			
</select>

</span>
</li>
<li>
<span><label>Travelrs </label>
<select name="number_adults" id="number_adults">
				<option value="0">Number Of Adult</option>
				<?php for ($a=1;$a<=10;$a++){?>
				<option value="<?php echo $a;?>"><?php if ($a<=9){echo "0".$a;}else {echo $a;}?></option>
				<?php }?>
</select>
<select name="number_child" id="number_child">
				<option value="0">Number Of Chaild</option>
				<?php for ($c=1;$c<=5;$c++){?>
				<option value="<?php echo $c;?>"><?php if ($c<=9){echo "0".$c;}else {echo $c;}?></option>
				<?php }?>
</select>

</span>
</li>

<li><span><label>Days</label>
<select name="number_days" id="number_days">
				<option value="0">Select Days</option>
				<?php for ($d=1;$d<=10;$d++){?>
				<option value="<?php echo $d;?>"><?php if ($d<=9){echo "0".$d;}else {echo $d;}?></option>
				<?php }?>
</select>
</span> <span><label>Class</label>
<select name="class" id="class">
				<option value="0">Select Class</option>
				<option value="Luxury">Luxury</option>
				<option value="Delux">Delux</option>
				<option value="Standard">Standard</option>
</select>

</span></li>

<li><span><label>Tranceport</label>
<select name="transport_type" id="transport_type">
				<option value="0">Select Vehicle</option>
				<option value="1">Car</option>
				<option value="2">Bus</option>
				<option value="3">Coch</option>
</select>
</span> <span><label>Style</label>
<select name="style" id="style">
				<option value="0">Select Style</option>
				<option value="Family">Family</option>
				<option value="Friends">Friends</option>
</select>

</span></li>
</ul>
<br class="clear"/>
<?php
$mysql = new CommonQueries();
$themes = $mysql->select_all_records('pkg_themes');
//echo "<pre>";print_r($themes);echo "</pre>";
unset($mysql); 
?>
<p class="rly-themes">
<strong>Theme</strong>
<?php
for ($t=0;$t<count($themes);$t++){
?>
<span><label><input name="theme[]" type="checkbox" value="<?php echo $themes[$t]['theme_id'];?>" /> &nbsp;<?php echo $themes[$t]['theme_name'];?></label></span>
<?php }?>
</p>
<br/>

<br/>
<!--<p>-->
<input type="submit" class="addsight btn btn-primary btn-block" style="width:20%;" name="submit" id="submit" value="Send Quote" />
<!--<button type="button" class="addsight btn btn-primary btn-block">Send Quote</button>-->
<!--</p>-->
<br/>
<br />
</form>
</div>
	</div>
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
	$(this).parent().find(".arrow").toggleClass("icon-up4 icon-down4");
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
	function getDestination(t)
	{
		var destination = $("#destination").val();
		if(destination == "")
		{
			return false;
		}
		var dataString = 'destination='+destination+'&type=getdestination';
//		alert(dataString);return false;
		$.ajax
		({ 
			type: "POST",
			url: "ajax_dest.php",
			data: dataString,
			success: function(aval)
			{
//				alert(aval);return false;
				$("#destination").val(aval);
			}
		});
	}
	</script>
	<!-- Accordian Panel Javascript -->
<div style="clear:both; height:250px;"></div>
</body>
</html>
