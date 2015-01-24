<?php
include_once 'include/connection.php'; 
include_once 'classes/CommonQueries.php';

class Register
{
	function get_user_types()
	{
		$result = array();
		$query = "SELECT *  FROM pkg_user_type where user_type_id<>1";
		$res = mysql_query($query);
		while($row = mysql_fetch_assoc($res)){
			$result[] = $row;
		}
		return $result;
	}
//	function insert_user_details($data)
//	{
//		$query = "INSERT INTO pkg_users (mid,
//		 											title,
//		 											first_name,
//		 											mobile,
//		 											email,
//		 											user_type,
//		 											registered_on,
//		 											verification_code
//		 											)
//				  VALUES (
//				  '".$data['mid']."',
//				  '".$data['title']."',
//				  '".$data['first_name']."',
//				  '".$data['mobile']."',
//				  '".$data['email']."',
//				  ".$data['user_type'].",
//				  ".$data['registered_on'].",
//				  '".$data['verification_code']."'
//				   )"; 
//		
//		 $res = mysql_query($query);
//		 $result = mysql_insert_id();
//		return $result;
//	}
}
/**
 * by madhukar on 23rd Dec 2014
 * To get the partner verification details to resending verification link...
 * @param $email
 */

function get_partner_verification_link_for_resending($email)
{
	$result = array();
	$query = "SELECT mid,first_name,last_name,verification_code FROM pkg_users where email='".$email."' ";
	$res = mysql_query($query);
	while($row = mysql_fetch_assoc($res)){
		$result = $row;
	}
	return $result;
}