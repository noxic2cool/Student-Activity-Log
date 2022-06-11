<?php
require('config.php');

function getUsersData($id)
{
	$array = array();
	$q = mysql_query("SELECT * FROM 'users' WHERE 'id'=.$id");
	while($r = mysql_fetch_assoc($q))
	{
		$array['id'] = $row['id'];
		$array['firstname'] = $r['firstname'];
		$array['lastname'] = $r['lastname'];
	}
	return $array;
}

?>