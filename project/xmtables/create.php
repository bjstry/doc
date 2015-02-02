<?php
	include_once('./lib/config.php');
	if(!$_POST or !$_SESSION['user']){
		//print_r($_POST);
		die('非法访问！');
		exit();
	}else{
		if(isset($_POST['create_ht']) and $_SESSION['id']==1){
			if(isset($_SESSION['gid'])){
				$sql = "update `gt_protables` set `date`='$_POST[date]',`author`='$_POST[author]',`customer_a`='$_POST[customer_a]',`customer_b`='$_POST[customer_b]',`salesman`='$_POST[salesman]',`aom`='$_POST[aom]',`mdate`='$_POST[mdate]',`ydate`='$_POST[ydate]',`cdate`='$_POST[cdate]',`paytype`='$_POST[paytype]',`cnum`='$_POST[cnum]',`onum`='$_POST[onum]',`prjman`='$_POST[prjman]',`htstatus`=$_POST[htstatus] where `id`=$_SESSION[gid]";
				$resut = mysql_query($sql);
				if($resut){
					die('提交成功,<a href='index.php'>返回</a>');
				}else{
					echo 'SQL - '.$sql.'<br>';
					die('操作错误: '.mysql_error());
				}
			}else{
				$sql = "insert into `gt_protables` (`id`,`date`,`author`,`customer_a`,`customer_b`,`salesman`,`aom`,`mdate`,`ydate`,`cdate`,`paytype`,`cnum`,`onum`,`prjman`,`subdate`,`htstatus`,`showstatus`) values ('','$_POST[date]','$_POST[author]','$_POST[customer_a]','$_POST[customer_b]','$_POST[salesman]','$_POST[aom]','$_POST[mdate]','$_POST[ydate]','$_POST[cdate]','$_POST[paytype]','$_POST[cnum]','$_POST[onum]','$_POST[prjman]',".mktime().",$_POST[htstatus],1)";
				$resut = mysql_query($sql);
				if($resut){
					die('添加成功,<a href='index.php'>返回</a>');
				}else{
					echo 'SQL - '.$sql.'<br>';
					die('操作错误: '.mysql_error());
				}
			}
		}else if(isset($_POST['create_xd']) and $_SESSION['id']==2){
			$sql = "update `gt_protables` set `odate`='$_POST[odate]',`cpu`='$_POST[cpu]',`memery`='$_POST[memery]',`board`='$_POST[board]',`other`='$_POST[other]',`xdstatus`=$_POST[xdstatus]  where `id`=$_SESSION[gid]";
			$resut = mysql_query($sql);
			if($resut){
				die("提交成功,<a href='index.php'>返回</a>");
			}else {
				die('操作错误： '.mysql_error());
			}
		}else if(isset($_POST['create_fh']) and $_SESSION['id']==3){
			$sql = "update `gt_protables` set `sdate`='$_POST[sdate]',`stype`='$_POST[stype]',`techman`='$_POST[techman]',`tdate`='$_POST[tdate]',`checkdate`='$_POST[checkdate]',`checkman`='$_POST[checkman]',`fhstatus`=$_POST[fhstatus] where `id`=$_SESSION[gid]";
			$resut = mysql_query($sql);
			if($resut){
				die("提交成功,<a href='index.php'>返回</a>");
			}else{
				die('操作错误： '.mysql_error());
			}
		}else if(isset($_POST['create_kp']) and $_SESSION['id']==4){
			$sql = "update `gt_protables` set `kdate`='$_POST[kdate]',`kom`=$_POST[kom],`vtax`=$_POST[vtax],`ohtertax`=$_POST[othertax],`salescost`=$_POST[salescost],`sentcost`=$_POST[sentcost],`mancost`=$_POST[mancost],`cost`=$_POST[cost],`kpstatus`=$_POST[kpstatus] where `id`=$_SESSION[gid]";
			$resut = mysql_query($sql);
			if($resut){
				die("提交成功,<a href='index.php'>返回</a>");
			}else{
				die('操作错误： '.mysql_error());
			}
		}else if(isset($_POST['create_sk']) and $_SESSION['id']==5){
			$sql = "update `gt_protables` set `gdate`='$_POST[gdate]',`gom`=$_POST[gom],`shom`=$_POST[shom],`skstatus`=$_POST[skstatus] where `id`=$_SESSION[gid]";
			$resut = mysql_query($sql);
			if($resut){
				die("提交成功,<a href='index.php'>返回</a>");
			}else{
				die('操作错误： '.mysql_error());
			}
		}else{
			die('非法访问，请<a href=\'index.php\'>返回</a>');
		}
	}
?>
