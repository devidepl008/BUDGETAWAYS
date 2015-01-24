<?php
class Quotes
{
	function send_quote_insertion($data)
	{
		$query = "INSERT INTO pkg_send_quote (customer_mid,
												destination,
												travel_date,
												total_budget,
												hotel_stars,
												number_adults,
												number_child,
												number_days,
												class,
												transport_type,
												style,
												created_on
		 											)
				  VALUES ('".$data['customer_mid']."',
				  		  '".$data['destination']."',
				  		  ".$data['travel_date'].",
				  		  ".$data['total_budget'].",
				  		  ".$data['hotel_stars'].",
						  ".$data['number_adults'].",
						  ".$data['number_child'].",
						  ".$data['number_days'].",
						  '".$data['class']."',
						  ".$data['transport_type'].",
						  '".$data['style']."',
						  ".mktime()."
				   )"; 
		 $res = mysql_query($query);
		 $result = mysql_insert_id();
		 return $result;
	}
	function get_quotes_data_by_customer_mid($customer_mid)
	{
		$result = array();
		$query = "SELECT dest FROM pkg_send_quote
							WHERE customer_id=".$customer_mid."";
		$res = mysql_query($query);
		while($row = mysql_fetch_assoc($res)){
			$result[] = $row;
		}
		echo $result;
	}
	function get_quote_themes($send_quote_id)
	{
		$result = array();
		$query = "SELECT * FROM pkg_send_quote_theme
							WHERE send_quote_id=".$send_quote_id."";
		$res = mysql_query($query);
		while($row = mysql_fetch_assoc($res)){
			$result[] = $row;
		}
		return $result;
	}
}