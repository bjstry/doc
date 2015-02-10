<?php
	class ApplyAction extends Action{
	
		public function index() {
			if($_SESSION["username"] == "") {
				$this->error("抱歉！你还没有登录！","__APP__/User/login");}
			$this->display();
		}
		
		public function apply() {
			if($_SESSION["username"] == "") {
				$this->error("抱歉！你还没有登录！","__APP__/User/login");
			}
			$apply = M("apply");
			
			$data = $apply->create();
			if($data){
				if($apply->add()) {
					$this->success('申请成功！','applyList');

					//ajax通知主管有新的售后申请需要审批
														
				}else{
					$this->error('申请失败！');				
				}		
			}else{
				$this->error('数据提交失败');			
			}		
		}
		
		public function applyList() {
			if($_SESSION["username"] == "") {
				$this->error("抱歉！你还没有登录！","__APP__/User/login");
			}
			$apply = M('apply');
			$whereString = "business = '".$_SESSION['username']."'";
			import('ORG.Util.Page');// 导入分页类

			$count = $apply->where($whereString)->count();// 查询满足要求的总记录数 $map表示查询条件

			$Page = new Page($count,6);// 实例化分页类 传入总记录数

			$show = $Page->show();// 分页显示输出

			
			$list = $apply->order('aid desc')->where($whereString)->limit($Page->firstRow.','.$Page->listRows)->select();

			$this->assign('list',$list);		
	
			$this->assign('page',$show);// 赋值分页输出	

			$this->display();
		}

		public function applyCheck() {
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
		
		public function applyMod() {
			if($_SESSION["username"] == "") {
				$this->error("抱歉！你还没有登录！","__APP__/User/login");
			}
			$id = $_GET["aid"];
			
			$apply = M('apply');
			$result = $apply->where("aid = $id")->find();
			if($result) {
				//var_dump($result);
				$this->assign('list',$result);
				$this->display();
			}else{
				$this->error("数据查询失败！");			
			}			
												
		}

		public function applyUpdate() {
			if($_SESSION["username"] == "") {
				$this->error("抱歉！你还没有登录！","__APP__/User/login");
			}
			$apply = M('apply');
			$data['aid'] = $_POST["id"];
			$data['projectname'] = $_POST["projectname"];
			$data['servicetype'] = $_POST["stype"];
			$data['buyer'] = $_POST["buyer"];
			$data['buyerphone'] = $_POST["buyerphone"];
			$data['user'] = $_POST["user"];
			$data['userphone'] = $_POST["userphone"];
			$data['business'] = $_POST["business"];
			$data['producttime'] = $_POST["producttime"];
			$data['detail'] = $_POST["detail"];
			
			$result = $apply->save($data);
			//var_dump($result);
			if($result){
				$this->success('恭喜你，更新成功！',"__URL__/applyList");
			}else{
				$this->error('更新失败，请稍后重试.');
			}
		}
		
		public function applyDel() {
			if($_SESSION["username"] == "") {
				$this->error("抱歉！你还没有登录！","__APP__/User/login");
			}
			$apply = M('apply');
			$id = $_GET["id"];
			
			$result = $apply->delete("$id");
			if($result){
				$this->success('恭喜你，删除成功！');
			}else{
				$this->error('删除失败，请稍后重试.');
			}			
			
		}
		
		public function applyConfirm() {
			if($_SESSION["username"] == "") {
				$this->error("抱歉！你还没有登录！","__APP__/User/login");
			}
			$apply = M('apply');	
			$apply ->aid= $_GET["aid"];
			$apply ->status=1;
			$result = $apply->save();		
			if($result) {
				$this->success('已确认！');		
			}else{
				$this->error('确认失败，请稍候重试！');			
			}
		}
	}
