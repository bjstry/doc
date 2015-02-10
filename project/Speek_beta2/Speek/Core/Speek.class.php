<?php
class Speek{
	public static function Run(){
		Speek::LoadConf();
		Speek::CreateDir();
		Speek::GetCm();
		echo $_GET['c'].'<br>'.$_GET['m'];
	}
	private static function CreateDir(){
		if(!file_exists(PRJ)) mkdir(PRJ);
		if(!file_exists(PRJ_CDIR)) mkdir(PRJ_CDIR);
		if(!file_exists(PRJ_MDIR)) mkdir(PRJ_MDIR);
		if(!file_exists(PRJ_VDIR)) mkdir(PRJ_VDIR);
		if(!file_exists(PRJ_VCDIR)) mkdir(PRJ_VCDIR);
		if(!file_exists(PRJ_COM)) mkdir(PRJ_COM);
		if(!file_exists(PRJ_CONF)) mkdir(PRJ_CONF);
	}
	private static function GetCm(){
		if(C('DT_URLTYPE')==1){
			$_GET['c']?$_GET['c']:C('DT_CONTROLLER');
			$_GET['m']?$_GET['m']:C('DT_ACTION');
			echo 'abcabacvadasf';
		}else if(C('DT_URLTYPE')==2){
			
		}
	}
	private static function LoadConf(){
		if(is_file(SYS_LIB.'functions'.EXT)){
			include_once SYS_LIB.'functions'.EXT;
		}
		if(is_file(SYS_CONF.'Config'.EXT))
			C(SYS_CONF.'Config'.EXT);
	}
}
?>
