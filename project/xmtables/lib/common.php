<?php
	function bdate($a){
		return date("Y-m-d H:i:s",$a);
	}
	function showlist($a=null){
		if($a==1){
			$sql = "select * from `gt_protables` where `htstatus`=1 and `xdstatus`=1 and `fhstatus`=1 and `kpstatus`=1 and `skstatus`=1 and `showstatus`=1 order by id desc";	
		}else{
			$sql = "select * from `gt_protables` where (`htstatus`=0 || `xdstatus`=0 || `fhstatus`=0 || `kpstatus`=0 || `skstatus`=0 || `showstatus`=0) && `showstatus`=1 order by id desc";
		}
		return mysql_query($sql);
	}
	function success($name=null,$url=null){
		//echo "<script>UIkit.notify('<i class=\'uk-icon-check\'></i> 操作成功，请<a href=\'index.php\'>返回</a>...');</script>";
		echo 'aaa';
	}
?>
