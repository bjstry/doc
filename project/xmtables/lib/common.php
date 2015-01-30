<?php
	function bdate($a){
		return date("Y-m-d H:i:s",$a);
	}
	function showlist(){
		$sql = "select * from `gt_protables` where `htstatus`=1 and `xdstatus`=1 and `fhstatus`=1 and `kpstatus`=1 and `skstatus`=1 and `showstatus`=1";	
		return mysql_query($sql);
	}
?>
