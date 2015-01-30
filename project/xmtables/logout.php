<?php
	include_once('./lib/config.php');
	$_SESSION['user']=null;
	$_SESSION['id']=null;
	echo "<script>javascript:history.back(-1);</script>";
?>
