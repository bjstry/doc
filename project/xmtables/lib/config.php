<?php
	session_start();
	include_once('common.php');
	function my_autoload($class_name){
		include_once './lib/'.$class_name.'.class.php';
	}
	spl_autoload_register('my_autoload');
	$config = array(
		'host'   =>  'localhost',
		'user'   =>  'root',
		'pass'   =>  'gentai',
		'db'     =>  'gentai'
	);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	$mysql = new Mysql();
	$mysql->connect($config['host'],$config['user'],$config['pass'],$config['db']);
	$view = new View();
?>
