<?php
include_once("include/connection.php"); 
include_once("classes/CommonQueries.php");

if(isset($_POST['type']) && $_POST['type'] == "getdestination")							
{
	$destination = $_POST['destination'];
	$result = array();
	$query = "SELECT dest FROM pkg_dest
						WHERE dest LIKE '%".$destination."%'";
	$res = mysql_query($query);
	while($row = mysql_fetch_assoc($res)){
		$result = $row['dest'];
	}
	echo $result;
}

