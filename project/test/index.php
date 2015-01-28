<?php
	class LOAD{
		static function loadClass($cname){
			$filename = $cname.".class.php";
			if(is_file($filename)) return include($filename);
		}
	}
	spl_autoload_register(array('LOAD','loadClass'));
	$a = new Jin();
?>
