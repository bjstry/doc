<?php
    include_once('./lib/config.php');
if(isset($_GET['vid'])){
	$jsql = "select * from `gt_protables` where `id`=$_GET[vid] limit 1";
	$query=mysql_query($jsql);
	$row = mysql_fetch_array($query);
	$jin = new View();
	$jin->assign('row',$row);
	$jin->display('table');
}else{
    if(isset($_SESSION['user'])){
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
        die("请先<a href='login.php'>登录</a>!");
    }   
    $id=$_SESSION['id'];
	if($id==0){
		$val = showlist(1);
	}else{
		$val = showlist();
	}
	while($row=mysql_fetch_array($val)){
		$brow[]=$row;
	}
	$view = new View();
	$view->assign('row',$brow);
	$view->display('list');
if($_SESSION['id']==1){
	echo "<a href='edit.php?id=0'>添加合同</a>";
}
}
?>
