<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta http-equiv = "content-type" content = "text/html;charset=utf-8"/>	
		<style>
			*{
				margin:0px;
				padding:0px;	
			}
			body{
				background:#2E2E2E;

			}
			.top {
				height:30px;
				width:100%;
				/*background: -moz-linear-gradient(top, #143352, #79C3D2);
				background:#163A5E;   */
   				background-color: rgb(20, 51, 82);
  				box-shadow: 0px 1px 8px rgba(0, 0, 0, 0.6);
  				color: white;
  				line-height: 30px;
  				padding-left: 25px;

			}
			.info{
				margin-top:30px;
				margin-left:60px;
				font-size:24px;
				color: white;
			}
			a:link { text-decoration: none;color: white}
			a:active { text-decoration:none;color: white}
			a:hover { text-decoration:none;color: white}
			a:visited { text-decoration: none;color: white}

			.logout{
				float:right;
				margin-right:70px;
				box-shadow: 0px 1px 8px rgba(0, 0, 0, 0.6);
			}	
			.border{
				margin-top: 0px;
				height: 3px;
				width: 100%;
				background: #3D70A3;
			}
			.userinfo{
				box-shadow: 0px 1px 8px rgba(0, 0, 0, 0.6);
			}
				
		</style>
			
	</head>
	<body>
		<div class="border"></div>
		<div class = "top">上海艮泰</div>
		<div class = "info">
			<span class = "userinfo">
				<?php if(isset($_SESSION['username'])): ?><b><?php echo ($_SESSION['username']); ?> 你好！</b><?php endif; ?>
			</span> 
			<span class = "logout">
				<a href="__URL__/logout" target = "_parent"><b>安全退出</b></a>
			</span>
		</div>
	</body>
</html>