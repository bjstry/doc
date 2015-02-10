<?php
	include_once('./lib/config.php');
//	function login_check(){
		if(isset($_POST['login'])){
			$sql = "select * from `gt_users` where `uname`='$_POST[uname]'";
			$val = mysql_query($sql);
			$val = mysql_fetch_array($val);
			if(is_array($val)){
				$pass = md5($_POST['upass']);
				if($pass == $val['upass']){
					$_SESSION['user']=$val['uname'];
					$_SESSION['id']=$val['gid'];
					echo "<script>alert('succes');</script>";
					echo "<script>location.href='index.php'</script>";
				}else{
					$_SESSION['user']=null;
					$_SESSION['id']=null;
					echo "<script>alert('密码错误!');</script>";
					echo "<script>javascript:history.back(-1);</script>";
				}
			}else{
				$_SESSION['user']=null;
				$_SESSION['id']=null;
				echo "<script>alert('用户名不存在！');</script>";
				echo "<script>javascript:history.back(-1);</script>";
			}
		}
//	}
//	login_check();
?>
