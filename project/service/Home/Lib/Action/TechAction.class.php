<?php
	class TechAction extends Action {
		public function assignList(){
			if($_SESSION["username"] == "") {
				$this->error("抱歉！你还没有登录！","__APP__/User/login");
			}
			$apply = M('apply');

			import('ORG.Util.Page');// 导入分页类
			
			$depart = $_SESSION["department"];
			//var_dump($_SESSION);
			
			// 构建查询数组
			$condition  = 'status=1 && (servicetype=1 || (adminstatus=1 && moneystatus=1 && busstatus=1))';
			
			//判断售后类型 未过质保期直接提交技术部 过质保期需要先经过三主管审批
		   		
		
			
			//$condition['terminate'] = 1;

			$count = $apply->where($condition)->count();// 查询满足要求的总记录数 $map表示查询条件

			$Page = new Page($count,6);// 实例化分页类 传入总记录数

			$show = $Page->show();// 分页显示输出

			$list = $apply->where($condition)->order('aid desc')->limit($Page->firstRow.','.$Page->listRows)->select();
			

			$this->assign('list',$list);		
	
			$this->assign('page',$show);// 赋值分页输出		
			$this->display();
		}
		
		public function assignCheck() {
			if($_SESSION["username"] == "") {
				$this->error("抱歉！你还没有登录！","__APP__/User/login");
			}
			$id = $_GET["aid"];
			$apply = M('apply');
			$result = $apply->where("aid = $id")->find();
			if($result) {
				//var_dump($result);
				if($result[0]["servicetype"] == 0) { 
					$this->assign('type','过质保期');
				}else if($result[0]["servicetype"] == 1){
					$this->assign('type','没过质保');
				}
				$this->assign('list',$result);
				$this->display();
			}else{
				$this->error("数据查询失败！");			
			}
		}

		public function workList(){
			if($_SESSION["username"] == "") {
				$this->error("抱歉！你还没有登录！","__APP__/User/login");
			}
			$apply = M('apply');

			import('ORG.Util.Page');// 导入分页类
			
			$depart = $_SESSION["department"];
			//var_dump($_SESSION);
			
			// 构建查询数组
			$condition['status'] = 1;
			$condition['assignstatus'] = 1;
			$condition['techreponsor'] = $_SESSION["username"];

			$count = $apply->where($condition)->count();// 查询满足要求的总记录数 $map表示查询条件

			$Page = new Page($count,6);// 实例化分页类 传入总记录数

			$show = $Page->show();// 分页显示输出

			$list = $apply->where($condition)->order('aid desc')->limit($Page->firstRow.','.$Page->listRows)->select();
			

			$this->assign('list',$list);		
	
			$this->assign('page',$show);// 赋值分页输出		
			$this->display();
		}

		public function workCheck() {
			if($_SESSION["username"] == "") {
				$this->error("抱歉！你还没有登录！","__APP__/User/login");
			}
			$id = $_GET["aid"];
			$apply = M('apply');
			$result = $apply->where("aid = $id")->find();
			if($result) {
				//var_dump($result);
				if($result[0]["servicetype"] == 0) { 
					$this->assign('type','过质保期');
				}else if($result[0]["servicetype"] == 1){
					$this->assign('type','没过质保');
				}
				$this->assign('list',$result);
				$this->display();
			}else{
				$this->error("数据查询失败！");			
			}
		}

		public function workAssign() {
			if($_SESSION["username"] == "") {
				$this->error("抱歉！你还没有登录！","__APP__/User/login");
			}
			$apply=M(apply);
			$apply->aid=$_GET['aid'];
			$apply->techreponsor=$_POST['techresponsor'];
			$apply->assignstatus = 1;
			$result = $apply->save();
			//var_dump($result);
			if($result){
				$this->success('恭喜你，工作指派成功！',"__URL__/assignList");
			}else{
				$this->error('指派失败，请稍后重试.');
			}
		}

		public function workFinish() {
			if($_SESSION["username"] == "") {
				$this->error("抱歉！你还没有登录！","__APP__/User/login");
			}
			$apply=M(apply);
			$apply->aid=$_GET['aid'];
			$apply->workdetail=$_POST['workdetail'];
			$apply->terminate = 1;
			$result = $apply->save();
			//var_dump($result);
			if($result){
				$this->success('恭喜你，工作完成了！',"__URL__/workList");
			}else{
				$this->error('工作提交失败，请稍后重试.');
			}
		}

	}





   

?>
