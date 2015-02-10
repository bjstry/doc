<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>注册</title>
		<meta http-equiv = "content-type" content = "text/html;charset=utf-8"/>
		<link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet">
		<script language="JavaScript">
			 function fleshVerify(){ 
				//重载验证码
				var time = new Date().getTime();
					document.getElementById('verifyImg').src= '__APP__/Public/verify/'+time;
			 }
		 </script>
		 <style type="text/css">
		 .top{
		 	line-height: 30px;
		 	background:black;
		 	height: 30px;
		 	width: 100%;
		 	margin-bottom: 60px;
		 	color: white;
		 }
      body {
      	margin: 0px;
        padding-top: 0px;
        padding-bottom: 40px;
        /*background-color: #f5f5f5;*/
         background-color:#2E3A47;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
     <link href="__PUBLIC__/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//cdnjs.bootcss.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
   
	</head>
	<body>
		<div class="top">上海艮泰</div>
	    <div class="container">
	     	 <form class="form-signin" action="__URL__/userAdd" method="POST">
		        <h2 class="form-signin-heading"><i>--用户注册--</i></h2>

		        <input type="text" class="input-block-level" placeholder="用户名" name = "username">
		        <input type="password" class="input-block-level" placeholder="密码" name = "password">
		        <input type="password" class="input-block-level" placeholder="再一次输入密码" name = "repassword">
		        <select name = "department">
					<option value ="技术部">技术部</option>
					<option value ="行政部">行政部</option>
					<option value ="业务部">业务部</option>
					<option value ="财务部">财务部</option>
				</select><br/>
		        <img id="verifyImg" src='__APP__/Public/verify/' onclick="fleshVerify()" width="60px" height="20px" style = "margin:0px;"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		        <input type = "text" name = "verify" style="padding:0px;margin-buttom:10px;" class="input-small" placeholder="输入验证码"/>
		        <br/>
		        <button class="btn btn-large btn-primary" type="submit" style="margin-right:30px;" name="submit"/>注册</button>
		        <button class="btn btn-large btn-primary" type="reset">重填</button>&nbsp;&nbsp;
			<a href = "http://www.shgentai.com">返回主页</a>
	      	</form>
	    </div> <!-- /container -->
	    <!-- Le javascript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src="__PUBLIC__/js/jquery-1.9.1.min.js"></script>
	    <script src="__PUBLIC__/js/bootstrap.min.js"></script>
	</body>
</html>