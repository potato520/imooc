<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>用户注册，验证邮箱</h1>

	<form action="/index.php/Admin/API/toSendMail" method="POST">
		用户名：<input type="text" name="username"> <br>
		密码：　<input type="password" name="password" > <br>
		邮箱：　<input type="text" name="email"> <br>
		<input type="submit" value="注册">
	</form>
	
</body>
</html>