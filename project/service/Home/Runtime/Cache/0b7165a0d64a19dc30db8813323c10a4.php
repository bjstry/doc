<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta http-equiv = "content-type" content = "text/html;charset=utf-8"/>
		<link rel = "stylesheet" type = "text/css" href = "/service__PUBLIC__/css/common_table.css">
		<style type="text/css">
			a {
				text-decoration: none;
			}
			* {
				font-weight: bold;
			}
		</style>
	</head>
	<body>	
		<table class = "bordered">
			<tr>
				<th>项目名称</th><th>售后类型</th><th>业务负责人</th><th>机器生产时间</th><th>查看</th><th>操作</th><th>申请提交</th><th>业务主管</th><th>行政部</th><th>财务部</th><th>售后进度</th>
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
				<td><a href = "__URL__/applyCheck/aid/<?php echo ($vo['aid']); ?>">查看详情</a></td>
				<td>
					<?php if($vo['status'] != 1): ?><a href ="__URL__/applyMod/aid/<?php echo ($vo['aid']); ?>">编辑/</a><a href ="__URL__/applyDel/id/<?php echo ($vo['aid']); ?>">删除</a>
					<?php else: ?>
						不可操作<?php endif; ?>
				</td>				
				<td>
					<?php if($vo['status'] != 1): ?><a href = "__URL__/applyConfirm/aid/<?php echo ($vo['aid']); ?>">确认提交</a>
					<?php else: ?>
						申请已提交<?php endif; ?>
				</td>
				<td>
					<?php if($vo['busstatus'] == 1): ?>同意
					<?php elseif($vo['busstatus'] == 2): ?>
						不同意
					<?php elseif($vo['busstatus'] == 0): ?>
						未审核<?php endif; ?>
				</td>
				<td>
					<?php if($vo['adminstatus'] == 1): ?>同意
					<?php elseif($vo['adminstatus'] == 2): ?>
						不同意
					<?php elseif($vo['adminstatus'] == 0): ?>
						未审核<?php endif; ?>
				</td>
				<td>
					<?php if($vo['moneystatus'] == 1): ?>同意
					<?php elseif($vo['moneystatus'] == 2): ?>
						不同意
					<?php elseif($vo['moneystatus'] == 0): ?>
						未审核<?php endif; ?>					
				</td>
				<td>
					<?php if($vo['terminate'] == 0): ?>未完成
					<?php else: ?>完成<?php endif; ?>					
				</td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			<tr>
				<td colspan = "11"><?php echo ($page); ?></td>
			</tr>
		</table>
	</body>
</html>