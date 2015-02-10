<?php
	class LOAD{
		static function loadClass($cname){
			$filename = $cname.".class.php";
			if(is_file($filename)) return include($filename);
		}
	}
	spl_autoload_register(array('LOAD','loadClass'));
	$a = new Jin();
	$jin = 10;
	$bai = 5;
	$song = 0;
	$bai < $jin or $song = 1;
	echo $song;

?>
