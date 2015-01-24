<?php 
//include_once '../include/connection.php';
//include 'classes/CommonQueries.php';

/**
	 * By Srikanth Mallela on 14-07-2014
	 * Function For Inserting Utility Logs Information Into The utility_log table...
	 * 
	 */

class Utility{
	
	function insert_utility($mid,$now_in,$function,$ip,$status,$desc)
	{
//			echo $mid."<br />".$now_in."<br />".$function.
//			"<br />".$ip."<br />".$status."<br />".$desc;
//			exit;
		$mysql=new CommonQueries();
    	$ctime = mktime();
		$insert = array(
                             'mid'=>mysql_real_escape_string($mid), 
                        	 'now_in'=>mysql_real_escape_string($now_in),
                       		 'function'=>mysql_real_escape_string($function),
							 'ip_address'=>mysql_real_escape_string($ip),
                             'current_status'=>mysql_real_escape_string($status),
                        	 'description'=>mysql_real_escape_string($desc),
							 'ctime'=>$ctime,
                        );
                        
                        
                        $data = $mysql->insert('utility_log',$insert);
	}
	function get_utility_details()
	{
		$result = array();
		$query = "SELECT a.first_name,a.last_name,a.user_type,a.user_role,a.user_group,u.*  FROM pkg_users as a JOIN utility_log as u ON a.mid=u.mid ORDER BY u.id desc LIMIT 0,50";
		$res = mysql_query($query);
		while($row = mysql_fetch_assoc($res)){
			$result[] = $row;
		}
		return $result;
	}
	
	
	function get_utility_details_without_reload()
	{
		$result = array();
		$query = "SELECT a.first_name,a.last_name,a.user_type,a.user_role,a.user_group,u.*  FROM pkg_users as a JOIN utility_log as u ON a.mid=u.mid ORDER BY u.id desc ";
		$res = mysql_query($query);
		while($row = mysql_fetch_assoc($res)){
			$result[] = $row;
		}
		return $result;
	}
	/*
	 *  to get utility logs without auto reload 
	 *  15th June 2014 by madhu
	 */
	
	
}
	?>