<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>学生信息管理系统</title>
</head>
<body>
	<!-- menu.html引用 通过stu.php实现的引入 -->
	<table width="600px" border='1px'>
		<tr>
			<th>ID</th>
			<th>姓名</th>
			<th>年龄</th>
			<th>性别</th>
			<th>班级</th>
			<th>操作</th>			
		</tr>
		<tr>
			<td><?php echo e($name); ?></td>
		</tr>
	</table>
	
</body>
</html>