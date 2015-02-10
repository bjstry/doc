<?php
	
	class ConfirmAction extends Action {

		public function index(){
			if($_SESSION["username"] == "") {
				$this->error("抱歉！你还没有登录！","__APP__/User/login");
			}
			$apply = M('apply');

			import('ORG.Util.Page');// 导入分页类
			
			$depart = $_SESSION["department"];
			//var_dump($_SESSION);
			if($depart == '行政部'){
				$status = "adminstatus";		
			}elseif($depart == '财务部'){
				$status = "moneystatus";
			}elseif($depart == '业务部'){
				$status = "busstatus";
			}
		
			// 构建查询数组
			$condition['status'] = 1;
			//$condition['$status'] = 0;
			$condition['servicetype'] = 0;

			$count = $apply->where($condition)->count();// 查询满足要求的总记录数 $map表示查询条件

			$Page = new Page($count,6);// 实例化分页类 传入总记录数

			$show = $Page->show();// 分页显示输出

			$list = $apply->where($condition)->order('aid desc')->limit($Page->firstRow.','.$Page->listRows)->select();
			
			$this->assign('ustatus',$ustatus);
			$this->assign('list',$list);		
			$this->assign('page',$show);// 赋值分页输出
			$this->display();
		}

		public function confirmCheck() {
			if($_SESSION["username"] == "") {
				$this->error("抱歉！你还没有登录！","__APP__/User/login");
			}
			$id = $_GET["aid"];
			$apply = M('apply');
			$result = $apply->where("aid = $id")->find();
			
			if($_SESSION["department"] == '业务部') {
				$ustatus = $apply->busstatus;
			}elseif ($_SESSION["department"] == '行政部') {
				$ustatus = $apply->adminstatus;
			}elseif ($_SESSION["department"] == '财务部') {
				$ustatus = $apply->moneystatus;
			}

			if($result) {
				//var_dump($result);
				/*if($result[0]["servicetype"] == 0) { 
					$this->assign('type','过质保期');
				}else if($result[0]["servicetype"] == 1){
					$this->assign('type','没过质保');
				}*/
				$this->assign('ustatus',$ustatus);
				$this->assign('list',$result);
				$this->display();
			}else{
				$this->error("数据查询失败！");			
			}
		}

		public function confirmDeny() {
			if($_SESSION["username"] == "") {
				$this->error("抱歉！你还没有登录！","__APP__/User/login");
			}
			$depart = $_SESSION["department"];
			if($depart == '行政部'){
				$advice = "aadvice";		
			}elseif($depart == '财务部'){
				$advice = "cadvice";
			}elseif($depart == '业务部'){
				$advice = "badvice";
			}

			$aid = $_GET["id"];
			//dump($aid);
			$apply = M('apply');
			$data["$advice"] = $_POST["advice"];
			$data["status"] = 2 ;
			//dump($data);			
			$result = $apply->where("aid = $aid")->save($data);
			//dump($result);
			if($result) {
				$this->success('意见已经返回！','__URL__/index');			
			}else{
				$this->error('意见返回失败！');			
			}
		}

		public function confirmPass() {
			if($_SESSION["username"] == "") {
				$this->error("抱歉！你还没有登录！","__APP__/User/login");
			}
			$aid = $_GET["aid"];
			$uid = $_SESSION["uid"];
			
	
			$depart = $_SESSION["department"];
			if($depart == '行政部'){
				$data["adminstatus"] = 1;		
			}elseif($depart == '财务部'){
				$data["moneystatus"] = 1;
			}elseif($depart == '业务部'){
				$data["busstatus"] = 1;
			}		
			
			
			//var_dump($data);
			//echo "ok";
			$apply = M('apply');

			$result = $apply->where("aid = $aid")->save($data);
			var_dump($result);
			if($result) {
				$this->success('已经同意！','__URL__/index');			
		        }else{
				$this->error('操作失败！');			
			}






		
		}

		
		
}
	
