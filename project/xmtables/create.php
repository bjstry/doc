<?php
	include_once('./lib/config.php');
	if(!$_POST){
		die('非法访问！');
		exit();
	}else{
		if(isset($_POST['create_ht'])){
			$sql = "insert into `gt_protables` (`id`,`date`,`author`,`customer_a`,`customer_b`,`salesman`,`aom`,`mdate`,`ydate`,`paytype`,`cnum`,`onum`,`prjman`,`odate`,`subdate`) values ('','$_POST[date]','$_POST[author]','$_POST[customer_a]','$_POST[custome_b]','$_POST[salesman]','$_POST[aom]','$_POST[mdate]','$_POST[ydate]','$_POST[paytype]','$_POST[cnum]','$_POST[onum]','$_POST[prjman]','$_POST[odate]',".mktime().")";
			$resut = mysql_query($sql);
			if($resut){
				die('添加成功！');
			}else{
				echo 'SQL - '.$sql.'<br>';
				die('操作错误: '.mysql_error());
			}
		}
	}
?>
