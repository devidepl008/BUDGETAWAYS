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
		<div id="cash_wallet">            
            <div id="page-wrapper">
		<div class="row-fluid">
                <div class="span12">
                    <h1 class="page-header">Cash Wallet</h1>
                </div>
                <!-- /.span12 -->
            </div>
		<div class="row-fluid">	<div class="data_module span4">
				<h2>&nbsp;</h2>
				<div class="data_box c_overview">
					<img width="50" height="50" src="images/user.jpg">
					<div class="c_info">
						<span class="3X_text">Mahesh G</span>  
					</div>
					<div class="hr_line"></div>
					<span class="2X_text balance-height">Balance
							:<strong class="rupee"> R 2,000 </strong> </span>
					<input style="width:98%;" class="form-control" placeholder="Enter Amount"> <br />
					<span class="add-balence-bg"><button class="btn btn-primary btn-block" type="button">Add Balance</button></span>
				</div>
				
				<div class="data_box">
				<div class="cash-wallet">
				<h2 class="cash-title">Benefits of Cash Wallet</h2>	
				<div class="clear"></div>
				<ul class="Cash-Wallet-tips">
				<li>Etiam luctus libero at sapien elementum, eget egestas sapien condimentum.</li>
				<li>Praesent in augue sit amet lorem dignissim facilisis eu eu risus.</li>
				<li>Aenean scelerisque leo ut velit ultricies, efficitur cursus lectus faucibus.</li>
				<li>Mauris porttitor arcu ac ligula faucibus scelerisque.</li>
				<li>Vivamus sodales neque vel urna aliquet, sed convallis massa ultrices.</li>
				</ul>			
				</div>
				
				</div>
			</div>
			<div class="data_module span8">
				<h2>Transaction History</h2>
				<div class="data_box profile">
				<div class="cash-wallet">
				<div class="cash-left-panel">
				<p class="date">Monday 26 Oct 2014 18:20:22</p>
				<h2 class="cash-title">Deposited by Cash </h2>
				<p class="Transaction">Transaction Id : <strong>BGAINV0012522</strong></p>
				<p class="Transaction">Booking Id : <strong>BGAPKG0012522</strong></p>
				</div>
				<div class="cash-right-panel">
				<span class="netamount rupee">+ R 2,000</span>
				<span class="status">SUCCESS</span>
				
				</div>
				<div class="clear"></div>
					</div>
				<div class="clear"></div>
				</div>

				<div class="data_box profile">
				<div class="cash-wallet">
				<div class="cash-left-panel">
				<p class="date">Monday 26 Oct 2014 18:20:22</p>
				<h2 class="cash-title">Deposited by Cheque</h2>
				<p class="Transaction">Transaction Id : <strong>BGAINV0012522</strong></p>
				<p class="Transaction">Booking Id : <strong>BGAPKG0012522</strong></p>
				</div>
				<div class="cash-right-panel">
				<span class="netamount rupee">+ R 2,000</span>
				<span class="status">SUCCESS</span>
				
				</div>
				<div class="clear"></div>
				<p class="discrption">Andaman 2 Days Package booked for Sun, 26 Oct 2014 for 10 Passengers by using net banking. 
Payment was paid partially. </p>				</div>
				<div class="clear"></div>
				</div>
				<div class="data_box profile">
				<div class="cash-wallet">
				<div class="cash-left-panel">
				<p class="date">Monday 26 Oct 2014 18:20:22</p>
				<h2 class="cash-title">Transver by Net Bank</h2>
				<p class="Transaction">Transaction Id : <strong>BGAINV0012522</strong></p>
				<p class="Transaction">Booking Id : <strong>BGAPKG0012522</strong></p>
				
				</div>
				<div class="cash-right-panel">
				<span class="netamount rupee"> R 18,000</span>
				<span class="status cancel">FAILED</span>
				
				</div>
				<div class="clear"></div>
				<p class="discrption">Andaman 2 Days Package booked for Sun, 26 Oct 2014 for 10 Passengers by using net banking. 
Payment was paid partially. </p>				</div>
				<div class="clear"></div>
				</div>
<div class="data_box profile">
				<div class="cash-wallet">
				<div class="cash-left-panel">
				<p class="date">Monday 26 Oct 2014 18:20:22</p>
				<h2 class="cash-title">Transever By Credit Card</h2>
				<p class="Transaction">Transaction Id : <strong>BGAINV0012522</strong></p>
				
				</div>
				<div class="cash-right-panel">
				<span class="netamount rupee">+ R 33,000</span>
				<span class="status ">SUCCESS</span>
				
				</div>
				<div class="clear"></div>
				<p class="discrption">Andaman 2 Days Package booked for Sun, 26 Oct 2014 for 10 Passengers by using net banking. 
Payment was paid partially. </p>				</div>
				<div class="clear"></div>
				</div>

				
				
								
							</div>
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
