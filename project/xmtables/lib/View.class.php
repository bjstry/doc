<?php
	class View{
		const baijinsong = '白劲松是好人';
		private $view;
		public function display($name='index'){
			include_once './lib/config.php';
			$view = $this->view;
			$viewname=$name;
			include_once './templates/default/display.html';
		}
		public function assign($name,$vla){
			$this->view[$name]=$vla;
		}
	}
?>
