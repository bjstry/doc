<?php
include_once('./lib/config.php');
if(isset($_GET['vid'])){
	$jsql = "select * from `gt_protables` where `id`=$_GET[vid] limit 1";
	$query=mysql_query($jsql);
	if(!$query){
		echo '<script>alert(\'非法访问\');</script>';
	}else{
		$row = mysql_fetch_array($query);
		$view->assign('row',$row);
		$view->display('view');
	}
}else{
    if(isset($_SESSION['user'])){
        switch ($_SESSION['id']){
            case 1:
                $well = '合同';
                break;
            case 2:
                $well = '下单';
                break;
            case 3:
                $well = '发货';
                break;
            case 4:
                $well = '开票';
                break;
            case 5:
                $well = '收款';
                break;
            case 0:
                $well = '管理员';
                break;
            default:
                $well = "<script>alert('非法用户!');</script>";
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
		if($_SESSION['id']==1){
			 $addht="<a class='uk-button uk-button-primary' href='edit.php?id=0'>添加合同</a>";
		}
        $logout=" <a href='logout.php'>注销</a>";
		$view->assign('job',$well);
		$view->assign('user',$_SESSION['user']);
		$view->assign('logout',$logout);
		$view->assign('addht',$addht);
		$view->assign('row',$brow);
		$view->display('index');
    }else{
		$view->display('url','success');
    }   
}
?>
