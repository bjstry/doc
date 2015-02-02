<?php
	class View{
		public function display($name=null){
			include_once('./templates/default/'.$name.'.html');
		}
	}
?>
