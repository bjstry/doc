<?php
	include_once('./lib/config.php');
	switch($_SESSION['id']){
		case 2:
			include_once('create_xd.html');
			break;
		case 3:
			include_once('create_fh.html');
			break;
		case 4:
			include_once('create_kp.html');
			break;
		case 5:
			include_once('create_fk.html');
			break;
	}
	$_SESSION['gid']=$_GET['id'];
	print_r($_SESSION);
?>
