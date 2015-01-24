<?php
class CustomerInfo{
	function get_customer_details_by_mid($mid)
	{
		$result = array();
		$query = "SELECT *  FROM pkg_customers
						 where customer_mid='".$mid."' ";
		$res = mysql_query($query);
		while($row = mysql_fetch_assoc($res)){
			$result[] = $row;
		}
		return $result;
	}
	function get_customer_session_data($user_name,$pwd)
	{
		$result = array();
		$query = "SELECT c.customer_mid,c.first_name,c.last_name,c.email,c.mobile_number,c.is_email_verified,c.is_mobile_verified,c.status,
								 cd.destination,cd.customer_image FROM pkg_customers AS c 
							JOIN pkg_customer_details AS cd ON c.customer_mid=cd.customer_mid
							WHERE c.email='".$user_name."' AND c.password='".$pwd."'";
		$res = mysql_query($query);
		while($row = mysql_fetch_assoc($res)){
			$result[] = $row;
		}
		return $result;
	}
	function get_customer_complete_data_by_mid($customer_mid)
	{
		$result = array();
		$query = "SELECT c.*,cd.*,up.proof_type_id,up.proof_id_number FROM pkg_customers AS c 
							JOIN pkg_customer_details AS cd ON c.customer_mid=cd.customer_mid
							LEFT JOIN pkg_user_id_proofs as up ON c.customer_mid=up.mid
							WHERE c.customer_mid='".$customer_mid."'";
		$res = mysql_query($query);
		while($row = mysql_fetch_assoc($res)){
			$result[] = $row;
		}
		return $result;
	}
	function get_customer_idproof_data_by_mid($customer_mid)
	{
		$result = array();
		$query = "SELECT * FROM pkg_passport_details
							WHERE mid='".$customer_mid."'";
		$res = mysql_query($query);
		while($row = mysql_fetch_assoc($res)){
			$result[] = $row;
		}
		return $result;
	}
}