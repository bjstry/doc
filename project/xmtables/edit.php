<?php
	include_once('./lib/config.php');
	switch($_SESSION['id']){
		case 1:
			include_once('create_ht.html');
			break;
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
	if(!$_GET['id']==0){
		$_SESSION['gid']=$_GET['id'];
	}else{
		$_SESSION['gid']=null;	
	}
?>
