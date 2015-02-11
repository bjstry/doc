<?php
	class View{
		const baijinsong = '白劲松是好人';
		private $view;
		public function display($name='index',$moban=null,$info=null,$url=null){
			include_once './lib/config.php';
			$view = $this->view;
			$viewname=$name;
			if(!is_null($moban)){
				$info = $info;
				if(is_null($url)) $url = 'index.php';
				include_once './templates/default/'.$name.'/'.$moban.'.html';
			}else{
				include_once './templates/default/display.html';
			}
		}
		public function assign($name,$vla){
			$this->view[$name]=$vla;
		}
	}
?>
