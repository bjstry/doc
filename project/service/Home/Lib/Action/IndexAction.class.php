<?php
	class IndexAction extends Action {
		public function index(){
			if($_SESSION["username"] == "") {
				$this->Redirect("__APP__/User/login");
			}
			/*if(($_SESSION["guid"] == 1) && ($_SESSION["department"] != '技术部')) {
				$apply = M('apply');
				$condition["status"] = 1;
				$depart = $_SESSION["department"];
				//var_dump($_SESSION);
				if($depart == '行政部'){
					$status = "adminstatus";		
				}elseif($depart == '财务部'){
					$status = "moneystatus";
				}elseif($depart == '业务部'){
					$status = "busstatus";
				}
				$condition["$depart"] = 0;
				$count = $apply->where($condition)->count();
				if($count) {
					$this->assign('workNum',$count);
				}else{
					$this->assign('workNum',0);				
				}
			}
			//查询未完成任务量，返回给用户
			$this->assign('workNum',0);*/
			$this->display();
		}

		//安全退出
		public function logout() {
			session('uid',null);
			session('verify',null);
			session('username',null);
			session('department',null);
			session('guid',null);
			$this->success("安全退出成功！",'__APP__/User/login');
		}
}
