<?php
	class View{
		const baijinsong = '白劲松是好人';
		private $view;
		public function display($name='index',$moban=null,$info=null,$url=null){
			include_once './lib/config.php';
			$view = $this->view;
			$viewname=$name;
			if(!is_null($moban) && !is_null($info) && !is_null($url)){
				include_once './templates/default/'.$name.'/'.$moban.'.html';
			}else{
				$info = $info;
				$url = $url;
				include_once './templates/default/display.html';
			}
		}
		public function assign($name,$vla){
			$this->view[$name]=$vla;
		}
	}
?>
