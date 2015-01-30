<?php
	include_once('./lib/config.php');
	$val = mysql_query("select * from `gt_users` limit 1");
	$val = mysql_fetch_array($val);
	print_r($val);
?>
