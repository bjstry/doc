<?php
	function C($name,$value=null){
		static $_config = array();
		if(!empty($value)){
			$_config[$name] = $value;
			return;
		}
		echo '$config["'.$name."\"]=".$_config[$name].'<br>';
	}
	C('name','jinsong');
	C('name');
	C();
?>
