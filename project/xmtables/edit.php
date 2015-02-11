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
			$sql = "select * from `gt_protablekp` where `cid`=$_GET[id]";
			$query=mysql_query($sql);
			if($query){
				while($row = mysql_fetch_array($query)){
					$srow[]=$row;
				}
				$view->assign('srow',$srow);
				$view->display('create_kp_list');
			}else{
				if(isset($_GET['type'])){
					if($_GET['type']=='add'){
						$_SESSION['kp']=1;
						include_once 'create_kp.html';
					}
					if($_GET['type']=='upd'){
						$_SESSION['kp_key']=$_GET['e'];
						$_SESSION['kp']=null;
						$sql = "select * from gt_protablekp where id=$_GET[e]";
						$query=mysql_query($sql);
						$row = mysql_fetch_array($query);
						include_once 'create_kp.html';
					}
				}
			}
			break;
		case 5:
			$sql = "select * from `gt_protablesk` where `cid`=$_GET[id]";
			$query=mysql_query($sql);
			if($query){
				while($row = mysql_fetch_array($query)){
					$srow[]=$row;
				}
				$view->assign('srow',$srow);
				$view->display('create_sk_list');
			}else{
				if(isset($_GET['type'])){
					if($_GET['type']=='add'){
						$_SESSION['sk']=1;
						include_once 'create_sk.html';
					}
					if($_GET['type']=='upd'){
						$_SESSION['sk_key']=$_GET['e'];
						$_SESSION['sk']=null;
						$sql = "select * from gt_protablesk where id=$_GET[e]";
						$query=mysql_query($sql);
						$row = mysql_fetch_array($query);
						include_once 'create_sk.html';
					}
				}
			}
			break;
	}
?>
