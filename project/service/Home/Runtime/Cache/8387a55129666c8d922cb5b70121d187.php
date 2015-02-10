<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta http-equiv = "content-type" content = "text/html;charset=utf-8"/>
		<link rel = "stylesheet" type = "text/css" href = "/service__PUBLIC__/css/common_table.css">
	</head>
	<body>	
		<table class = "bordered">
			<tr>
				<th>项目名称</th><th>售后类型</th><th>业务负责人</th><th>机器生产时间</th><th>查看详情</th>
			</tr>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
				<td><?php echo ($vo['projectname']); ?></td>
				<td>
					<?php if($vo['servicetype'] == 0): ?>已过质保
					<?php else: ?>
						未过质保<?php endif; ?>
				</td>
				<td><?php echo ($vo['business']); ?></td>
				<td><?php echo ($vo['producttime']); ?></td>
				<td>
					<?php if(($vo['terminate'] == 0)): ?><a href = "__URL__/workCheck/aid/<?php echo ($vo['aid']); ?>">查看详情</a>
					<?php elseif(($vo['terminate'] == 1)): ?>
						已解决<?php endif; ?>
				</td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			<tr>
				<td colspan = "6"><?php echo ($page); ?></td>
			</tr>
		</table>
	</body>
</html>