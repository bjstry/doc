<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta http-equiv = "content-type" content = "text/html;charset=utf-8"/>	
		<link rel="stylesheet" type="text/css" href="/service__PUBLIC__/css/left.css">
		
	</head>
	<body>
		<ul>
			<li><a href = "__APP__/Apply/applyTip" target = "right">平台使用说明</a></li>
			<li><a href = "__APP__/User/infoManage/id/<?php echo ($_SESSION['uid']); ?>" target = "right">个人信息管理</a></li>

		    <?php if(($_SESSION['department'] == '业务部') and ($_SESSION['guid'] == '0') ): ?><li><a href = "__APP__/Apply/index" target = "right">售后申请</a></li>
			<li><a href = "__APP__/Apply/applyList" target = "right">申请列表</a></li>

		    <?php elseif(($_SESSION['department'] == '业务部') and ($_SESSION['guid'] == '1')): ?>
			<li><a href = "__APP__/Confirm/index" target = "right">申请确认列表</a></li>

		    <?php elseif(($_SESSION['department'] == '行政部') and ($_SESSION['guid'] == '1')): ?>
			<li><a href = "__APP__/Confirm/index" target = "right">申请确认列表</a></li>

         	    <?php elseif(($_SESSION['department'] == '财务部') and ($_SESSION['guid'] == '1')): ?>
			<li><a href = "__APP__/Confirm/index" target = "right">申请确认列表</a></li>

		    <?php elseif(($_SESSION['department'] == '技术部') and ($_SESSION['guid'] == 0)): ?>
			<li><a href = "__APP__/Tech/workList" target = "right">售后处理</a></li>

		    <?php elseif(($_SESSION['department'] == '技术部') and ($_SESSION['guid'] == 1)): ?>
			<li><a href = "__APP__/Tech/assignList" target = "right">售后指派</a></li><?php endif; ?>
		</ul>
	</body>
</html>