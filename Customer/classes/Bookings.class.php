<?php
class Bookings{
	function get_package_bookings($mid)
	{
		$result = array();
		$query = "SELECT pt.*,d.dest,pd.package_start_date,pd.total_days,pp.grand_total,pd.package_name  FROM pkg_package_traveller_information as pt
						JOIN pkg_package_details as pd ON pt.package_id=pd.package_id
						JOIN pkg_dest as d ON pd.dest_id=d.dest_id
						JOIN pkg_package_traveller_billing as pp ON pt.package_id=pp.package_id
						 where customer_mid='".$mid."' 
						 GROUP BY pd.package_id";
		$res = mysql_query($query);
		while($row = mysql_fetch_assoc($res)){
			$result[] = $row;
		}
		return $result;
	}
	function get_package_details($package_id)
	{
		$result = array();
		$query = "SELECT *  FROM pkg_package_details
						 where package_id='".$package_id."' ";
		$res = mysql_query($query);
		while($row = mysql_fetch_assoc($res)){
			$result[] = $row;
		}
		return $result;
	}
	function get_package_gallery($package_id)
	{
		$result = array();
		$query = "SELECT *  FROM pkg_package_gallery
						 where package_id='".$package_id."' ";
		$res = mysql_query($query);
		while($row = mysql_fetch_assoc($res)){
			$result[] = $row;
		}
		return $result;
	}
	function get_package_themes($package_id)
	{
		$result = array();
		$query = "SELECT pt.*,t.theme_name  FROM pkg_package_themes as pt
						JOIN pkg_themes as t ON pt.theme_id=t.theme_id
						 where pt.package_id='".$package_id."' ";
		$res = mysql_query($query);
		while($row = mysql_fetch_assoc($res)){
			$result[] = $row;
		}
		return $result;
	}
	function generatePassword($length = 8) {
	    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
	    $count = mb_strlen($chars);
	
	    for ($i = 0, $result = ''; $i < $length; $i++) {
	        $index = rand(0, $count - 1);
	        $result .= mb_substr($chars, $index, 1);
	    }
	    return $result;
	}
}