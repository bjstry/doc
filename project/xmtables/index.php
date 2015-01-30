<?php
	include_once('./lib/config.php');
	if($_SESSION['user']){
		echo 'Well come! '.$_SESSION['user'];
		switch ($_SESSION['id']){
			case 1:
				echo "<br>合同";
				break;
			case 2:
				echo "<br>下单";
				break;
			case 3:
				echo "<br>发货";
				break;
			case 4:
				echo "<br>开票";
				break;
			case 5:
				echo "<br>收款";
				break;
			case 0:
				echo "<br>管理员";
				break;
			default:
				echo "<script>alert('非法用户!');</script>";
		}
	}
?>
