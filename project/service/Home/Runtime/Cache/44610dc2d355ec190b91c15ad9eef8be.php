<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta http-equiv = "content-type" content = "text/html;charset=utf-8"/>
	</head>
	<body>			
		<fieldset>
			<legend>申请表详情</legend>
			<p>
				项目名称：<?php echo ($list["projectname"]); ?>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;售后类型：<?php echo ($type); ?>	
			</p>
			<p>
				购买人姓名：<?php echo ($list["buyer"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;联系电话：<?php echo ($list["buyerphone"]); ?>		
			</p>
			<p>
				机器使用人姓名：<?php echo ($list["user"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;联系电话：<?php echo ($list["userphone"]); ?>			
			</p>
			<p>
				业务负责人：<?php echo ($list["business"]); ?>			
			</p>
			<p>
				机器生产时间：<?php echo ($list["producttime"]); ?>			
			</p>
			<p>
				售后详情：<br/><textarea readonly = "readonly"  cols = "40"/><?php echo ($list["detail"]); ?></textarea>			
			</p>
			<p>
				<form action = "__URL__/workAssign/aid/<?php echo ($list['aid']); ?>" method = "POST"> 
				技术负责人：<input type = "text" name= "techresponsor" value = "<?php echo ($list['techreponsor']); ?>"/>			
			</p>
			<p>
				<?php if($list['assignstatus'] == 0): ?><input type = "submit" name = "assign" value = "指派"/><?php endif; ?>
				<input type = "button" value = "返回列表" onclick = "history.go(-1)"/>			
				</from>
			</p>
		</fieldset>

	</body>
</html>