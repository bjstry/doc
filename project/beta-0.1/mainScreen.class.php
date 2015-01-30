<?php
require 'base.class.php';
class MainScreen extends Base{
	private function say(){
		echo '<script>alert(\'i am say !\');</script>';
	}
	private function loadModel(){
		$Conf = include ('config.inc.php');
		foreach ($Conf['Mlist'] as $value){
			$this->addModel($value);
		}
	}
	public function run(){
		$this->loadModel();
		$this->start();
		$show = new ShowModel();
		$show->show();
		$test = new TestModel();
		$test->alert();
	}
}

?>