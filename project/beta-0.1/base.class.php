<?php
	class Base{
		public function addModel($name){
			require $name.'Model.class.php';
		}
		protected function start(){
		}
	}
?>
