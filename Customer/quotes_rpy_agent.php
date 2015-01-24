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
		<?php
		$quote_obj = new Quotes();
		$quotes = $quote_obj->get_quotes_data_by_customer_mid($customer_mid);
		unset($quote_obj);
		echo "<pre>";print_r($quotes);echo "</pre>";
		?>
		<div class="row-fluid">
                <div class="span12">
                    <h1 class="page-header">
                    <label>My Quotes</label>
                     Goa <a class="booking-back" href="quotes_list.php">Back</a></h1>
                </div>
                <!-- /.span12 -->
            </div>
		<div class="row-fluid">
		<div class="create_quote">
	<div class="quote-panel">
	<?php for ($s=0;$s<count($quotes);$s++){
		$send_quote_id = $quotes[$s]['send_quote_id'];
		$quote_obj = new Quotes();
		$quote_themes = $quote_obj->get_quote_themes($send_quote_id);
		unset($quote_obj);
		echo "<pre>";print_r($quote_themes);echo "</pre>";
	?>
	<div class="quote_creation">
  <div class="OE_title"><div class="user_icon"><i class="icon-user_male3"></i> Me</div>  <span class="my_budget">
	  <strong>Days </strong>: <?php if ($quotes[$s]['number_days']<=9){ echo "0".$quotes[$s]['number_days'];}else{ echo $quotes[$s]['number_days'];};?></span> 
<!--	  <span class="my_budget"> <strong>Rooms </strong>: 02</span> -->
	  <span class="my_budget"><strong>Budget </strong>: <?php echo $quotes[$s]['total_budget'];?></span> <span class="rightCnt">Details<i class="arrow icon-up4"></i> </span><div class="clear"></div></div>
<div class="OE_disc" style="display: block;">
<table width="100%">
<tr>
<td width="170" rowspan="2">
<span class="headCnt">Total Budget</span>
<span class="rupee ttlBudget">R <?php echo $quotes[$s]['total_budget'];?></span>
</td>
<td width="158" rowspan="2">
<span class="headCnt">Travelrs <span class="cntCreagnt3">3</span></span>
<span class="cntCreagnt">Adult: <?php echo $quotes[$s]['number_adults'];?>, Childrean : <?php echo $quotes[$s]['number_child'];?> </span>

</td>
<td width="170"><span class="headCnt">Rooms :</span> <span class="cntCreagnt2">02 </span> </td>
<td style="width: 334px"><span class="headCnt">Hotel :</span><span class="cntCreagnt2">Stay in <?php echo $quotes[$s]['hotel_stars'];?> star Hotel</span> </td>
</tr>
<tr>
<td width="170"><span class="headCnt">Days :</span><span class="cntCreagnt2"><?php echo $quotes[$s]['number_days'];?></span></td>
<td style="width: 334px"><span class="headCnt">Class :</span><span class="cntCreagnt2"><?php echo $quotes[$s]['class'];?></span></td>
</tr>
<tr>
<td width="170">
<span class="headCnt">Travelers </span>
<span class="cntCreagnt2"><?php echo $quotes[$s]['transport_type'];?></span>

</td>
<td width="158">
<span class="headCnt">Style</span>
<span class="cntCreagnt2"><?php echo $quotes[$s]['style'];?></span>

</td>
<td width="170" colspan="2"><span class="headCnt">Theme : </span>
<span class="cntCreagnt2">Adventure, Backwater, Beach, Drive & Stay, Family, Heritage,</span>
</td>
</tr>
<tr>
<td width="170" colspan="4">
<span class="headCnt">Message</span><span>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc. </span>
</td>
</tr>

</table>
</div>
</div>
<?php }?>
<div class="quote_creation">
  <div class="OE_title"><div class="user_icon" style="background:#013e7f;"><i class="icon-administrator"></i> Agent&nbsp; GOI-01</div> <span class="my_budget">
	  <strong>Hotels : </strong><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span> <span class="my_budget">
	  <strong>Days</strong>: 05</span><span class="my_budget"><strong>Rooms
	  </strong>: 02</span> <span class="my_budget"><strong>Budget </strong>: <a class="rupee rupee-color">R</a>18,000</span> <span class="my_budget"><strong>Staus : </strong>Process</span> <span class="rightCnt">  <span class="rpy-date">11 Nov 2014</span><span class="rpy-alart" data-toggle="tooltip" title="2 Revised">2</span> Details<i class="arrow icon-up4"></i> </span><div class="clear"></div> </div>

<div class="OE_disc" style="display: block;">
<table width="100%">
<tr>
<td width="170" rowspan="2">
<span class="headCnt">Total Budget</span>
<span class="rupee ttlBudget">R 15,000</span>
</td>
<td width="158" rowspan="2">
<span class="headCnt">Travelrs <span class="cntCreagnt3">3</span></span>
<span class="cntCreagnt">Adult: 02, Childrean : 01 </span>

</td>
<td width="170"><span class="headCnt">Rooms :</span> <span class="cntCreagnt2">02 </span> </td>
<td style="width: 334px"><span class="headCnt">Hotel :</span><span class="cntCreagnt2">Stay in 3 and 4star Hotel</span> </td>
</tr>
<tr>
<td width="170"><span class="headCnt">Days :</span><span class="cntCreagnt2">05</span></td>
<td style="width: 334px"><span class="headCnt">Class :</span><span class="cntCreagnt2">Standard</span></td>
</tr>
<tr>
<td width="170">
<span class="headCnt">Travelrs </span>
<span class="cntCreagnt2">Car / Coach</span>

</td>
<td width="158">
<span class="headCnt">Style</span>
<span class="cntCreagnt2">Family</span>

</td>
<td width="170" colspan="2"><span class="headCnt">Theme : </span>
<span class="cntCreagnt2">Adventure, Backwater, Beach, Drive & Stay, Family, Heritage,</span>
</td>
</tr>
<tr>
<td width="170" colspan="4">
<span class="headCnt">Sightseeing</span>
<ol class="cntstghtseeing">
<li><strong>Cochin : </strong>Pellentesque gravida sapien a massa vestibulum, sit amet porttitor nisi finibus.</li>
<li><strong>Alleeppy :</strong> how all this mistaken idea of denouncing pleasure and praising pain </li>
<li><strong>Munnar :</strong> how all this mistaken idea of denouncing pleasure and praising pain </li>
<li><strong>Tekhaddy :</strong> how all this mistaken idea of denouncing pleasure and praising pain </li>

</ol>
</td>
</tr>

</table>
<span class="edit-btn"><button type="button" class="showInfo" class="btn btn-primary btn-block">Reply</button></span>
<br class="clear"/>

<div class="replayPanel" style="display: none;">
<h2>Quote Reply</h2>
<ul class="user-rpy">
<li><span><label>Total Budget </label><input name="Text1" value="15000" type="text"/></span> <span><label>Travelrs </label>
<select name="Select1">
				<option>Adult</option>
				<option>01</option>
				<option>02</option>
				<option>03</option>
				<option>04</option>
				<option>05</option>
				<option>06</option>
				<option>07</option>
				<option>08</option>
				<option>09</option>
				<option>10</option>
</select>
<select name="Select1">
				<option>Chaild</option>
				<option>01</option>
				<option>02</option>
				<option>03</option>
				<option>04</option>
				<option>05</option>
</select>

</span></li>
<li><span><label>Rooms</label><select name="Select1">
				<option>Select Room</option>
				<option>01</option>
				<option>02</option>
				<option>03</option>
				<option>04</option>
				<option>05</option>
				<option>06</option>
				<option>07</option>
				<option>08</option>
				<option>09</option>
				<option>10</option>
</select>
</span> <span><label>Hotels </label>
<select name="Select1">
				<option>Select Hotel Type</option>
				<option>5 Star</option>
				<option>4 Star</option>
				<option>3 Star</option>
				<option>2 Star</option>
				<option>1 Star</option>
			
</select>

</span></li>

<li><span><label>Days</label><select name="Select1">
				<option>Select Days</option>
				<option>01</option>
				<option>02</option>
				<option>03</option>
				<option>04</option>
				<option>05</option>
				<option>06</option>
				<option>07</option>
				<option>08</option>
				<option>09</option>
				<option>10</option>
</select>
</span> <span><label>Class</label>
<select name="Select1">
				<option>Select Class</option>
				<option>Luxury</option>
				<option>Delux</option>
				<option>Standard</option>
</select>

</span></li>

<li><span><label>Tranceport</label><select name="Select1">
				<option>Select Vehicle</option>
				<option>Car</option>
				<option>Bus</option>
				<option>Coch</option>
</select>
</span> <span><label>Style</label>
<select name="Select1">
				<option>Select Style</option>
				<option>Family</option>
				<option>Friends</option>
</select>

</span></li>
</ul>
<br class="clear"/>
<p class="rly-themes">
<strong>Theme</strong>
<span><input name="Checkbox3" type="checkbox">
Adventure</span>
<span><label><input name="Checkbox3" type="checkbox"> Backwater</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Beach</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Drive & Stay</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Family</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Heritage</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Hill Station</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Honeymoon</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Luxury</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Off Beat</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Pilgrimage</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Romantic</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Spa & Wellness</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Wildlife</label></span>

</p>
<br/>
<ul class="rly-sight-seeing">
<h2 class="rlyh2">Sightseeing</h2>
<li><strong>Cochin :</strong> Pellentesque gravida sapien a massa vestibulum, sit amet porttitor nisi finibus. <span class="removesight">X</span></li>
<li class="bgcolor"><strong>Munnar :</strong> how all this mistaken idea of denouncing pleasure and praising pain <span class="removesight">X</span></li>
<li><strong>Varkala :</strong> the actual teachings of the great explorer of the truth, the master-builder of <span class="removesight">X</span></li>
<li class="bgcolor"><strong>Alleppey :</strong> Nor again is there anyone who loves or pursues or desires to obtain pain of itself <span class="removesight">X</span></li>
<li><strong>Kumarakom :</strong> odio dign <span class="removesight">X</span></li>
<li class="bgcolor"><strong>Kovalam :</strong> saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.<span class="removesight">X</span></li>
<li><strong>Thekkady :</strong> is a vibrant city situated on the south-west coast of the Indian <span class="removesight">X</span></li>
</ul>
<br/>
<p><button type="button" class="addsight btn btn-primary btn-block">Add Sightseeing</button></p>
<br/>
<div class="sightPanel" style="display:none;">
<ul class="rly-sight-seeing">
<h2 class="rlyh2">Sightseeing</h2>
<li><strong>Delhi - Agra :</strong> Pellentesque gravida sapien a massa vestibulum, sit amet porttitor nisi finibus. <span class="addsight"><button type="button" class="btn btn-primary btn-block">Add</button></span></li>
<li class="bgcolor"><strong>Jaipur :</strong> how all this mistaken idea of denouncing pleasure and praising pain <span class="addsight"><button type="button" class="btn btn-primary btn-block">Add</button></span></li>
<li><strong>Gongtok :</strong> the actual teachings of the great explorer of the truth, the master-builder of <span class="addsight"><button type="button" class="btn btn-primary btn-block">Add</button></span></li>
<li class="bgcolor"><strong>Alleppey :</strong> Nor again is there anyone who loves or pursues or desires to obtain pain of itself <span class="addsight"><button type="button" class="btn btn-primary btn-block">Add</button></span></li>
<li><strong>Darjleeing :</strong> odio dign <span class="addsight"><button type="button" class="btn btn-primary btn-block">Add</button></span></li>
</ul>

</div>
</div>

<br class="clear"/>
</div>
</div>
<div class="quote_creation">
  <div class="OE_title"><div class="user_icon" style="background:#013e7f;"><i class="icon-administrator"></i> Agent&nbsp; GOI-02</div> <span class="my_budget">
	  <strong>Hotels : </strong><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span> <span class="my_budget">
	  <strong>Days</strong>: 05</span><span class="my_budget"><strong>Rooms
	  </strong>: 02</span> <span class="my_budget"><strong>Budget </strong>: <a class="rupee rupee-color">R</a>18,000</span>  <span class="my_budget"><strong>Staus : </strong>Close </span> <span class="rightCnt"><span class="rpy-date">12 Nov 2014</span><span class="rpy-alart" data-toggle="tooltip" title="3 Revised">3</span> Details<i class="arrow icon-up4"></i> </span><div class="clear"></div></div>

<div class="OE_disc" style="display: block;">
<table width="100%">
<tr>
<td width="170" rowspan="2">
<span class="headCnt">Total Budget</span>
<span class="rupee ttlBudget">R 15,000</span>
</td>
<td width="158" rowspan="2">
<span class="headCnt">Travelrs <span class="cntCreagnt3">3</span></span>
<span class="cntCreagnt">Adult: 02, Childrean : 01 </span>

</td>
<td width="170"><span class="headCnt">Rooms :</span> <span class="cntCreagnt2">02 </span> </td>
<td style="width: 334px"><span class="headCnt">Hotel :</span><span class="cntCreagnt2">Stay in 3 and 4star Hotel</span> </td>
</tr>
<tr>
<td width="170"><span class="headCnt">Days :</span><span class="cntCreagnt2">05</span></td>
<td style="width: 334px"><span class="headCnt">Class :</span><span class="cntCreagnt2">Standard</span></td>
</tr>
<tr>
<td width="170">
<span class="headCnt">Travelrs </span>
<span class="cntCreagnt2">Car / Coach</span>

</td>
<td width="158">
<span class="headCnt">Style</span>
<span class="cntCreagnt2">Family</span>

</td>
<td width="170" colspan="2"><span class="headCnt">Theme : </span>
<span class="cntCreagnt2">Adventure, Backwater, Beach, Drive & Stay, Family, Heritage,</span>
</td>
</tr>
<tr>
<td width="170" colspan="4">
<span class="headCnt">Sightseeing</span>
<ol class="cntstghtseeing">
<li><strong>Cochin : </strong>Pellentesque gravida sapien a massa vestibulum, sit amet porttitor nisi finibus.</li>
<li><strong>Alleeppy :</strong> how all this mistaken idea of denouncing pleasure and praising pain </li>
<li><strong>Munnar :</strong> how all this mistaken idea of denouncing pleasure and praising pain </li>
<li><strong>Tekhaddy :</strong> how all this mistaken idea of denouncing pleasure and praising pain </li>

</ol>
</td>
</tr>

</table>
<span class="edit-btn"><button type="button" class="showInfo" class="btn btn-primary btn-block">Reply</button></span>
<br class="clear"/>

<div class="replayPanel" style="display: none;">
<h2>Quote Reply</h2>
<ul class="user-rpy">
<li><span><label>Total Budget </label><input name="Text1" value="15000" type="text"/></span> <span><label>Travelrs </label>
<select name="Select1">
				<option>Adult</option>
				<option>01</option>
				<option>02</option>
				<option>03</option>
				<option>04</option>
				<option>05</option>
				<option>06</option>
				<option>07</option>
				<option>08</option>
				<option>09</option>
				<option>10</option>
</select>
<select name="Select1">
				<option>Chaild</option>
				<option>01</option>
				<option>02</option>
				<option>03</option>
				<option>04</option>
				<option>05</option>
</select>

</span></li>
<li><span><label>Rooms</label><select name="Select1">
				<option>Select Room</option>
				<option>01</option>
				<option>02</option>
				<option>03</option>
				<option>04</option>
				<option>05</option>
				<option>06</option>
				<option>07</option>
				<option>08</option>
				<option>09</option>
				<option>10</option>
</select>
</span> <span><label>Hotels </label>
<select name="Select1">
				<option>Select Hotel Type</option>
				<option>5 Star</option>
				<option>4 Star</option>
				<option>3 Star</option>
				<option>2 Star</option>
				<option>1 Star</option>
			
</select>

</span></li>

<li><span><label>Days</label><select name="Select1">
				<option>Select Days</option>
				<option>01</option>
				<option>02</option>
				<option>03</option>
				<option>04</option>
				<option>05</option>
				<option>06</option>
				<option>07</option>
				<option>08</option>
				<option>09</option>
				<option>10</option>
</select>
</span> <span><label>Class</label>
<select name="Select1">
				<option>Select Class</option>
				<option>Luxury</option>
				<option>Delux</option>
				<option>Standard</option>
</select>

</span></li>

<li><span><label>Tranceport</label><select name="Select1">
				<option>Select Vehicle</option>
				<option>Car</option>
				<option>Bus</option>
				<option>Coch</option>
</select>
</span> <span><label>Style</label>
<select name="Select1">
				<option>Select Style</option>
				<option>Family</option>
				<option>Friends</option>
</select>

</span></li>
</ul>
<br class="clear"/>
<p class="rly-themes">
<strong>Theme</strong>
<span><input name="Checkbox3" type="checkbox">
Adventure</span>
<span><label><input name="Checkbox3" type="checkbox"> Backwater</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Beach</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Drive & Stay</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Family</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Heritage</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Hill Station</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Honeymoon</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Luxury</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Off Beat</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Pilgrimage</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Romantic</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Spa & Wellness</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Wildlife</label></span>

</p>
<br/>
<ul class="rly-sight-seeing">
<h2 class="rlyh2">Sightseeing</h2>
<li><strong>Cochin :</strong> Pellentesque gravida sapien a massa vestibulum, sit amet porttitor nisi finibus. <span class="removesight">X</span></li>
<li class="bgcolor"><strong>Munnar :</strong> how all this mistaken idea of denouncing pleasure and praising pain <span class="removesight">X</span></li>
<li><strong>Varkala :</strong> the actual teachings of the great explorer of the truth, the master-builder of <span class="removesight">X</span></li>
<li class="bgcolor"><strong>Alleppey :</strong> Nor again is there anyone who loves or pursues or desires to obtain pain of itself <span class="removesight">X</span></li>
<li><strong>Kumarakom :</strong> odio dign <span class="removesight">X</span></li>
<li class="bgcolor"><strong>Kovalam :</strong> saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.<span class="removesight">X</span></li>
<li><strong>Thekkady :</strong> is a vibrant city situated on the south-west coast of the Indian <span class="removesight">X</span></li>
</ul>
</div>

<br class="clear"/>
</div>
</div>
<div class="quote_creation">
  <div class="OE_title"><div class="user_icon" style="background:#013e7f;"><i class="icon-administrator"></i> Agent&nbsp; GOI-03</div> <span class="my_budget">
	  <strong>Hotels : </strong><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span> <span class="my_budget">
	  <strong>Days</strong>: 05</span><span class="my_budget"><strong>Rooms
	  </strong>: 02</span> <span class="my_budget"><strong>Budget </strong>: <a class="rupee rupee-color">R</a>18,000</span> <span class="my_budget"><strong>Staus : </strong>Close </span> <span class="rightCnt"><span class="rpy-date">13 Nov 2014</span><span class="rpy-alart" data-toggle="tooltip" title="2 Revised">2</span> Details<i class="arrow icon-up4"></i> </span><div class="clear"></div></div>

<div class="OE_disc" style="display: block;">
<table width="100%">
<tr>
<td width="170" rowspan="2">
<span class="headCnt">Total Budget</span>
<span class="rupee ttlBudget">R 15,000</span>
</td>
<td width="158" rowspan="2">
<span class="headCnt">Travelrs <span class="cntCreagnt3">3</span></span>
<span class="cntCreagnt">Adult: 02, Childrean : 01 </span>

</td>
<td width="170"><span class="headCnt">Rooms :</span> <span class="cntCreagnt2">02 </span> </td>
<td style="width: 334px"><span class="headCnt">Hotel :</span><span class="cntCreagnt2">Stay in 3 and 4star Hotel</span> </td>
</tr>
<tr>
<td width="170"><span class="headCnt">Days :</span><span class="cntCreagnt2">05</span></td>
<td style="width: 334px"><span class="headCnt">Class :</span><span class="cntCreagnt2">Standard</span></td>
</tr>
<tr>
<td width="170">
<span class="headCnt">Travelrs </span>
<span class="cntCreagnt2">Car / Coach</span>

</td>
<td width="158">
<span class="headCnt">Style</span>
<span class="cntCreagnt2">Family</span>

</td>
<td width="170" colspan="2"><span class="headCnt">Theme : </span>
<span class="cntCreagnt2">Adventure, Backwater, Beach, Drive & Stay, Family, Heritage,</span>
</td>
</tr>
<tr>
<td width="170" colspan="4">
<span class="headCnt">Sightseeing</span>
<ol class="cntstghtseeing">
<li><strong>Cochin : </strong>Pellentesque gravida sapien a massa vestibulum, sit amet porttitor nisi finibus.</li>
<li><strong>Alleeppy :</strong> how all this mistaken idea of denouncing pleasure and praising pain </li>
<li><strong>Munnar :</strong> how all this mistaken idea of denouncing pleasure and praising pain </li>
<li><strong>Tekhaddy :</strong> how all this mistaken idea of denouncing pleasure and praising pain </li>

</ol>
</td>
</tr>

</table>
<span class="edit-btn"><button type="button" class="showInfo" class="btn btn-primary btn-block">Reply</button></span>
<br class="clear"/>

<div class="replayPanel" style="display: none;">
<h2>Quote Reply</h2>
<ul class="user-rpy">
<li><span><label>Total Budget </label><input name="Text1" value="15000" type="text"/></span> <span><label>Travelrs </label>
<select name="Select1">
				<option>Adult</option>
				<option>01</option>
				<option>02</option>
				<option>03</option>
				<option>04</option>
				<option>05</option>
				<option>06</option>
				<option>07</option>
				<option>08</option>
				<option>09</option>
				<option>10</option>
</select>
<select name="Select1">
				<option>Chaild</option>
				<option>01</option>
				<option>02</option>
				<option>03</option>
				<option>04</option>
				<option>05</option>
</select>

</span></li>
<li><span><label>Rooms</label><select name="Select1">
				<option>Select Room</option>
				<option>01</option>
				<option>02</option>
				<option>03</option>
				<option>04</option>
				<option>05</option>
				<option>06</option>
				<option>07</option>
				<option>08</option>
				<option>09</option>
				<option>10</option>
</select>
</span> <span><label>Hotels </label>
<select name="Select1">
				<option>Select Hotel Type</option>
				<option>5 Star</option>
				<option>4 Star</option>
				<option>3 Star</option>
				<option>2 Star</option>
				<option>1 Star</option>
			
</select>

</span></li>

<li><span><label>Days</label><select name="Select1">
				<option>Select Days</option>
				<option>01</option>
				<option>02</option>
				<option>03</option>
				<option>04</option>
				<option>05</option>
				<option>06</option>
				<option>07</option>
				<option>08</option>
				<option>09</option>
				<option>10</option>
</select>
</span> <span><label>Class</label>
<select name="Select1">
				<option>Select Class</option>
				<option>Luxury</option>
				<option>Delux</option>
				<option>Standard</option>
</select>

</span></li>

<li><span><label>Tranceport</label><select name="Select1">
				<option>Select Vehicle</option>
				<option>Car</option>
				<option>Bus</option>
				<option>Coch</option>
</select>
</span> <span><label>Style</label>
<select name="Select1">
				<option>Select Style</option>
				<option>Family</option>
				<option>Friends</option>
</select>

</span></li>
</ul>
<br class="clear"/>
<p class="rly-themes">
<strong>Theme</strong>
<span><input name="Checkbox3" type="checkbox">
Adventure</span>
<span><label><input name="Checkbox3" type="checkbox"> Backwater</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Beach</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Drive & Stay</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Family</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Heritage</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Hill Station</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Honeymoon</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Luxury</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Off Beat</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Pilgrimage</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Romantic</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Spa & Wellness</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Wildlife</label></span>

</p>
<br/>
<ul class="rly-sight-seeing">
<h2 class="rlyh2">Sightseeing</h2>
<li><strong>Cochin :</strong> Pellentesque gravida sapien a massa vestibulum, sit amet porttitor nisi finibus. <span class="removesight">X</span></li>
<li class="bgcolor"><strong>Munnar :</strong> how all this mistaken idea of denouncing pleasure and praising pain <span class="removesight">X</span></li>
<li><strong>Varkala :</strong> the actual teachings of the great explorer of the truth, the master-builder of <span class="removesight">X</span></li>
<li class="bgcolor"><strong>Alleppey :</strong> Nor again is there anyone who loves or pursues or desires to obtain pain of itself <span class="removesight">X</span></li>
<li><strong>Kumarakom :</strong> odio dign <span class="removesight">X</span></li>
<li class="bgcolor"><strong>Kovalam :</strong> saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.<span class="removesight">X</span></li>
<li><strong>Thekkady :</strong> is a vibrant city situated on the south-west coast of the Indian <span class="removesight">X</span></li>
</ul>
</div>

<br class="clear"/>
</div>
</div>
<div class="quote_creation">
  <div class="OE_title"><div class="user_icon" style="background:#013e7f;"><i class="icon-administrator"></i> Agent&nbsp; GOI-04</div> <span class="my_budget">
	  <strong>Hotels : </strong><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span> <span class="my_budget">
	  <strong>Days</strong>: 05</span><span class="my_budget"><strong>Rooms
	  </strong>: 02</span> <span class="my_budget"><strong>Budget </strong>: <a class="rupee rupee-color">R</a>18,000</span> <span class="my_budget"><strong>Staus : </strong>Close </span><span class="rightCnt"><span class="rpy-date">15 Nov 2014</span><span class="rpy-alart" data-toggle="tooltip" title="1 Revised">1</span> Details<i class="arrow icon-up4"></i> </span><div class="clear"></div></div>

<div class="OE_disc" style="display: block;">
<table width="100%">
<tr>
<td width="170" rowspan="2">
<span class="headCnt">Total Budget</span>
<span class="rupee ttlBudget">R 15,000</span>
</td>
<td width="158" rowspan="2">
<span class="headCnt">Travelrs <span class="cntCreagnt3">3</span></span>
<span class="cntCreagnt">Adult: 02, Childrean : 01 </span>

</td>
<td width="170"><span class="headCnt">Rooms :</span> <span class="cntCreagnt2">02 </span> </td>
<td style="width: 334px"><span class="headCnt">Hotel :</span><span class="cntCreagnt2">Stay in 3 and 4star Hotel</span> </td>
</tr>
<tr>
<td width="170"><span class="headCnt">Days :</span><span class="cntCreagnt2">05</span></td>
<td style="width: 334px"><span class="headCnt">Class :</span><span class="cntCreagnt2">Standard</span></td>
</tr>
<tr>
<td width="170">
<span class="headCnt">Travelrs </span>
<span class="cntCreagnt2">Car / Coach</span>

</td>
<td width="158">
<span class="headCnt">Style</span>
<span class="cntCreagnt2">Family</span>

</td>
<td width="170" colspan="2"><span class="headCnt">Theme : </span>
<span class="cntCreagnt2">Adventure, Backwater, Beach, Drive & Stay, Family, Heritage,</span>
</td>
</tr>
<tr>
<td width="170" colspan="4">
<span class="headCnt">Sightseeing</span>
<ol class="cntstghtseeing">
<li><strong>Cochin : </strong>Pellentesque gravida sapien a massa vestibulum, sit amet porttitor nisi finibus.</li>
<li><strong>Alleeppy :</strong> how all this mistaken idea of denouncing pleasure and praising pain </li>
<li><strong>Munnar :</strong> how all this mistaken idea of denouncing pleasure and praising pain </li>
<li><strong>Tekhaddy :</strong> how all this mistaken idea of denouncing pleasure and praising pain </li>

</ol>
</td>
</tr>

</table>
<span class="edit-btn"><button type="button" class="showInfo" class="btn btn-primary btn-block">Reply</button></span>
<br class="clear"/>

<div class="replayPanel" style="display: none;">
<h2>Quote Reply</h2>
<ul class="user-rpy">
<li><span><label>Total Budget </label><input name="Text1" value="15000" type="text"/></span> <span><label>Travelrs </label>
<select name="Select1">
				<option>Adult</option>
				<option>01</option>
				<option>02</option>
				<option>03</option>
				<option>04</option>
				<option>05</option>
				<option>06</option>
				<option>07</option>
				<option>08</option>
				<option>09</option>
				<option>10</option>
</select>
<select name="Select1">
				<option>Chaild</option>
				<option>01</option>
				<option>02</option>
				<option>03</option>
				<option>04</option>
				<option>05</option>
</select>

</span></li>
<li><span><label>Rooms</label><select name="Select1">
				<option>Select Room</option>
				<option>01</option>
				<option>02</option>
				<option>03</option>
				<option>04</option>
				<option>05</option>
				<option>06</option>
				<option>07</option>
				<option>08</option>
				<option>09</option>
				<option>10</option>
</select>
</span> <span><label>Hotels </label>
<select name="Select1">
				<option>Select Hotel Type</option>
				<option>5 Star</option>
				<option>4 Star</option>
				<option>3 Star</option>
				<option>2 Star</option>
				<option>1 Star</option>
			
</select>

</span></li>

<li><span><label>Days</label><select name="Select1">
				<option>Select Days</option>
				<option>01</option>
				<option>02</option>
				<option>03</option>
				<option>04</option>
				<option>05</option>
				<option>06</option>
				<option>07</option>
				<option>08</option>
				<option>09</option>
				<option>10</option>
</select>
</span> <span><label>Class</label>
<select name="Select1">
				<option>Select Class</option>
				<option>Luxury</option>
				<option>Delux</option>
				<option>Standard</option>
</select>

</span></li>

<li><span><label>Tranceport</label><select name="Select1">
				<option>Select Vehicle</option>
				<option>Car</option>
				<option>Bus</option>
				<option>Coch</option>
</select>
</span> <span><label>Style</label>
<select name="Select1">
				<option>Select Style</option>
				<option>Family</option>
				<option>Friends</option>
</select>

</span></li>
</ul>
<br class="clear"/>
<p class="rly-themes">
<strong>Theme</strong>
<span><input name="Checkbox3" type="checkbox">
Adventure</span>
<span><label><input name="Checkbox3" type="checkbox"> Backwater</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Beach</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Drive & Stay</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Family</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Heritage</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Hill Station</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Honeymoon</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Luxury</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Off Beat</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Pilgrimage</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Romantic</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Spa & Wellness</label></span>
<span><label><input name="Checkbox3" type="checkbox"> Wildlife</label></span>

</p>
<br/>
<ul class="rly-sight-seeing">
<h2 class="rlyh2">Sightseeing</h2>
<li><strong>Cochin :</strong> Pellentesque gravida sapien a massa vestibulum, sit amet porttitor nisi finibus. <span class="removesight">X</span></li>
<li class="bgcolor"><strong>Munnar :</strong> how all this mistaken idea of denouncing pleasure and praising pain <span class="removesight">X</span></li>
<li><strong>Varkala :</strong> the actual teachings of the great explorer of the truth, the master-builder of <span class="removesight">X</span></li>
<li class="bgcolor"><strong>Alleppey :</strong> Nor again is there anyone who loves or pursues or desires to obtain pain of itself <span class="removesight">X</span></li>
<li><strong>Kumarakom :</strong> odio dign <span class="removesight">X</span></li>
<li class="bgcolor"><strong>Kovalam :</strong> saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.<span class="removesight">X</span></li>
<li><strong>Thekkady :</strong> is a vibrant city situated on the south-west coast of the Indian <span class="removesight">X</span></li>
</ul>
</div>
				
				
</div>
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

	</script>
	<script>

	$(document).ready(function() {
        $('.showInfo').click(function() {
                $('.replayPanel').slideToggle("fast");
        
		});
    });
    	$(document).ready(function() {
        $('.addsight').click(function() {
                $('.sightPanel').slideToggle("fast");
        
		});
    });

    
    
    
</script>

	<!-- Accordian Panel Javascript -->
<div style="clear:both; height:250px;"></div>
</body>
</html>
