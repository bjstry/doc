<?php
	//用户模块：主要包括用户注册、用户登录、用户个人信息修改功能

	class UserAction extends Action {
		//用户注册主页显示
		public function reg() {
			$user=M('user');
			$list=$user->select();	
			$this->assign('alist',$list);
			$this->display();
		}
		
		//用户添加
		public function userAdd() {
			//加载扩展用于验证码功能
		//	Load('extend');
			
			//判断是否注册过
			if(!isset($_POST["submite"])){
				
				echo "<script>alert('sorry,you have not registe yet！');<script>";
				//$this->error('sorry,you have not registe yet！');
			}

			//判断验证码是否正确
			/*if(session('verify') != md5($_POST['verify'])) {
			   $this->error('验证码错误！');
			}*/

			//判断两次输入密码是否一致
			if($_POST["password"] != $_POST["repassword"]){
				$this->error('sorry,password confirm failed!');
			}
			//过滤注册信息
			$username = trim($_POST["username"]);
			$password = md5(trim($_POST["password"]));
			$department = $_POST["department"];
			
			//mysql_query("SET NAMES UTF8");
			
			//插入用户信息
			$user = M('user');
			$user->uname = $username;
			$user->upasswd = $password;
			$user->depart = $department;
/*
			switch ($department)
			{
			case '行政部':
			  $guid = 1;
			  break;
			case '财务部':
			   $guid = 2;
			  break;
			case '技术部':
			   $guid = 0;
			  break;
			case '业务部':
			   $guid = 3;
			  break;
			}
			$user->guid = $guid;*/
			//判断插入数据库结果
			if($user->add()) {
				$this->success('congraduation！reg successful！','login');
			}else{
				$this->error('reg failed!');
			}
		}
		
		public function login() {
			$this->display();
		}

		public function logincheck() {
			//加载扩展用于验证码功能
			//Load('extend');

			//判断验证码是否正确
			/*if(session('verify') != md5($_POST['verify'])) {
			   $this->error('验证码错误！');
			}*/

			//过滤接收数据
			$username = trim($_POST["username"]);
			$password = md5(trim($_POST["password"]));

			//mysql_query("SET NAMES UTF8");

			//查询密码用户是否匹配
			$user = M('user');
			$result = $user->where("uname='$username'")->find();



			//判断是否有记录
			if($result){
				//有用户信息记录
				if($user->upasswd == $password){
				//登录信息正确，加入session信息，跳转前台主页
					/*if ($user->depart == "财务部") {
						session('ustatus','moneystatus');
					}elseif ($user->depart == "行政部") {
						session('ustatus','adminstatus');
					}elseif ($user->depart == "业务部") {
						session('ustatus','busstatus');
					}
					*/
					session('username',$username);
					session('uid',$user->id);
					session('guid',$user->guid);
					session('department',$user->depart);
	
					$this->Redirect('__APP__/Index/index');
				}else{
				//登录信息错误
					$this->error('login failed！');
				}
			}else{
				$this->error('login failed....');
			}
			
		}
		
		//用户个人信息修改
		public function infoManage() {
			if($_SESSION["username"] == "") {
				$this->error("抱歉！你还没有登录！","__APP__/User/login");
			}
			$id = $_GET["id"];

			$user = M('user');
			$data = $user->where("id=$id")->find();
			if(!$data){
				$this->error('数据库查询失败！');
			}
			$this->assign('data',$data);
			//dump($data);
			$this->display();
		}
		
		//用户个人信息更新
		public function infoUpdate() {
			if($_SESSION["username"] == "") {
				$this->error("抱歉！你还没有登录！","__APP__/User/login");
			}
			$user = M('user');
			$data['id'] = $_POST["id"];
			$data['uname'] = trim($_POST["username"]);
			$data['unpasswd'] = md5(trim($_POST["password"]));
			$data['depart'] = trim($_POST["department"]);
			$result = $user->data($data)->save();
			if($result){
				$this->success('恭喜你，更新成功！');
			}else{
				$this->error('更新失败，请稍后重试.');
			}
		}
	}
