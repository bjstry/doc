<?php
	include_once('./lib/config.php');
	session_destroy();
	echo "<script>javascript:history.back(-1);</script>";
?>
