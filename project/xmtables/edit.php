<?php
	include_once('./lib/config.php');
	$obj;
	if(!$_GET['id']==0){
		$_SESSION['gid']=$_GET['id'];
		$result = mysql_query("select * from `gt_protables` where `id`=$_GET[id]");
		if($result){
			$obj = mysql_fetch_array($result);
		}
	}else{
		//$_SESSION['gid']=null;	
	}
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
			$sql = "select `id` from `gt_protablekp` where `cid`=$_GET[id]";
			$query=mysql_query($sql);
			if($query){
				$_SESSION['kp']=1;
				$srow = mysql_fetch_array($query);
				$view = new View();
				$view->assign('srow',$srow);
				$view->display('create_kp_list.html');
			}else{
				include_once 'create_kp.html';
			}
			break;
		case 5:
			include_once('create_sk.html');
			break;
	}
	if(isset($_GET['e'])){
		
	}
?>
