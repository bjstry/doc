<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta http-equiv = "content-type" content = "text/html;charset=utf-8"/>
		<link rel = "stylesheet" type = "text/css" href = "/service__PUBLIC__/css/common_table.css">
	</head>
	<body>	
		<table class = "bordered">
			<tr>
				<th>项目名称</th><th>售后类型</th><th>业务负责人</th><th>查看</th><th>操作</th>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><tr>
				<td><?php echo ($li['projectname']); ?></td>
				<td>已过质保期</td>
				<td><?php echo ($li['business']); ?></td>
				<td><a href = "__URL__/confirmCheck/aid/<?php echo ($li['aid']); ?>">查看详情</a></td>
				<td>
					<?php if(($_SESSION['department'] == '业务部') and ($li['busstatus'] == 0)): ?><a href = "__URL__/confirmPass/aid/<?php echo ($li['aid']); ?>">同意</a>
					<?php elseif(($_SESSION['department'] == '行政部') and ($li['adminstatus'] == 0)): ?>	<a href = "__URL__/confirmPass/aid/<?php echo ($li['aid']); ?>">同意</a>
					<?php elseif(($_SESSION['department'] == '财务部') and ($li['moneystatus'] == 0)): ?>	<a href = "__URL__/confirmPass/aid/<?php echo ($li['aid']); ?>">同意</a>
					<?php else: ?>已同意<?php endif; ?>
				</td>				
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			<tr>
				<td colspan = "7"><?php echo ($page); ?></td>
			</tr>
		</table>
	</body>
</html>