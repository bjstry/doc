<?php
class IndexControl extends Control{
    function index() {
		$con = '<b>欢迎使用SpeekFramework!';
		$this->assign('con',$con);
		$this->assign('title','Wellcome to SpeekFramwork!');
		$this->display();
    }
}
?>
