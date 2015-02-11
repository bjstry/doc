<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta http-equiv = "content-type" content = "text/html;charset=utf-8"/>
		<script language="javascript" type="text/javascript" src="/service__PUBLIC__/My97DatePicker/WdatePicker.js"></script>
		<script language="javascript" type="text/javascript" src="/service__PUBLIC__/js/jquery-1.9.1.min.js"></script>
		<link rel="stylesheet" type="text/css" href="/service__PUBLIC__/css/bootstrap.min.css">
		<style type="text/css">
			label {
				font-weight: bold;
			}

			.main {
				margin-left: 50px;
			}
		</style>
	</head>
	<body>	
		<form action = "__URL__/apply" method = "POST">	
			<h3 style="margin-left:30px;"><img src="/service__PUBLIC__/images/apply.jpg" height="50px" width="50px">&nbsp;&nbsp;&nbsp;申请表</h3><hr/>

		<div class="main">

			<label for = "projectname">项目名称：</label><input type = "text" class="input-medium" name = "projectname" id = "projectname"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<label for = "stype">售后类型：</label>
			<select name = "servicetype" id = "stype">
				<option>--请选择--</option>
				<option value = "0">过质保期</option>
				<option value = "1">没过质保</option>
			</select>			
			<label for = "buyer">购买人：</label><input type = "text" id = "buyer" name = "buyer" />	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;					
			<label for = "bphone">联系电话：</label><input type = "text" name = "buyerphone" id = "bphone"/>
						
			<label for = "username">使用者：</label><input type = "text" id = "username" name = "user"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<label for = "userphone">使用者电话：</label><input type = "text" id = "userphone" name = "userphone" />
							
			<label for = "business">业务负责人：</label><input type = "text" id = "business" name = "business" value = "<?php echo ($_SESSION['username']); ?>" readonly = "readonly"/>
							
			<label for = "birthText">机器生产时间：</label><input type = "text"  id="birthText" name = "producttime" onClick="WdatePicker()" readonly = "readonly"/>
			<label for = "detail">售后详情：</label>
			<textarea id = "detail" name = "detail"></textarea>					
							
			<input type = "submit" value = "保存申请" class="btn btn-primary" />
		</div>

		</form>	
	</body>
</html>