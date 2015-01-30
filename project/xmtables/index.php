<html>
<head>
<meta charset=utf8>
<style type='text/css'>
table{
	border-top:1px solid #000;
}
td{
	border-top:1px solid #666;
	border-right:1px solid #333;
}
</style>
</head>

<body>


<?php
    include_once('./lib/config.php');
    if($_SESSION['user']){
        switch ($_SESSION['id']){
            case 1:
                $well = "Well come! 合同".$_SESSION['user'];
                break;
            case 2:
                $well = "Well come! 下单".$_SESSION['user'];
                break;
            case 3:
                $well = "Well come! 发货".$_SESSION['user'];
                break;
            case 4:
                $well = "Well come! 开票".$_SESSION['user'];
                break;
            case 5:
                $well = "Well come! 收款".$_SESSION['user'];
                break;
            case 0:
                $well = "Well come! 管理员".$_SESSION['user'];
                break;
            default:
                $well = "<script>alert('非法用户!');</script>";
        }   
        echo $well." <a href='logout.php'>注销</a>";
    }else{
        die("请先<a href='login.html'>登录</a>!");
    }   
?>


	<table cellpadding='5' frame='hsides'>
		<caption>项目管理汇总表</caption>
		<tr>
			<th>客户</th>
			<th>业务员</th>
			<th>合同签订日期</th>
			<th>下单日期</th>
			<th>合同总金额</th>
			<th>发货日期</th>
			<th>开票日期</th>
			<th>开票金额</th>
			<th>付款日期</th>
			<th>付款金额</th>
			<th>应收账款</th>
		</tr>
<?php
    $id=$_SESSION['id'];
	$val = showlist();
	while($row=mysql_fetch_array($val)){
?>	

		<tr>
			<?php if(!$_SESSION['id']==0){  ?>
			<td><a href="edit.php?id=<?php echo $row['id']?>"><?php echo $row['customer_a'].$row['customer_b']; ?></a> &nbsp;</td>
			<?php }else{?>
			<td><?php echo $row['customer_a'].$row['customer_b']; ?> &nbsp;</td>
			<?php
			}
			?>
			<td><?php if($id==0 or $id==1) echo $row['salesman']; ?> &nbsp;</td>
			<td><?php if($id==0 or $id==1) echo $row['cdate']; ?> &nbsp;</td>
			<td><?php if($id==0 or $id==2) echo $row['odate']; ?> &nbsp;</td>
			<td><?php if($id==0 or $id==1) echo $row['aom']; ?> &nbsp;</td>
			<td><?php if($id==0 or $id==3) echo $row['sdate']; ?> &nbsp;</td>
			<td><?php if($id==0 or $id==4) echo $row['kdate']; ?> &nbsp;</td>
			<td><?php if($id==0 or $id==4) echo $row['kom']; ?> &nbsp;</td>
			<td><?php if($id==0 or $id==5) echo $row['gdate']; ?> &nbsp;</td>
			<td><?php if($id==0 or $id==5) echo $row['gom']; ?> &nbsp;</td>
			<td><?php if($id==0 or $id==5) echo $row['shom']; ?>&nbsp;</td>
		</tr>
<?php
	}

?>

	</table>
	<br>
<?php
switch ($_SESSION['id']){
	case 1:
		echo "<a href='create_ht.html'>合同</a>";
		break;
	case 2:
		echo "<a href='create_xd.html'>下单</a>";
		break;
	case 3:
		echo "<a href='create_fh.html'>发货</a>";
		break;
	case 4:
		echo "<a href='create_kp.html'>开票</a>";
		break;
	case 5:
		echo "<a href='create_sk.html'>收款</a>";
		break;
}
?>
</body>
</html>
