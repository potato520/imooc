<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>头部-有点</title>
<link rel="stylesheet" type="text/css" href="/Public/Admin/css/public.css" />
<script type="text/javascript" src="/Public/Admin/js/jquery.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/public.js"></script>
</head>

<body>
	<!-- 头部 -->
	<div class="head">
		<div class="headL">
			<img class="headLogo" src="/Public/Admin/img/headLogo.png" />
			<!-- <h1 style="color:#fff;font-size:50px;">Tom</h1> -->
		</div>
		<div class="headR">
			<p class="p1">
				欢迎，<?php echo $_SESSION['user']['username'] ?>
			</p>
			<p class="p2">
				<a href="/home.php" class="resetPWD" target="_blank">首页</a>&nbsp;&nbsp;<a
					href="/index.php/Admin/Login/loginOut" class="goOut">退出</a>
			</p>
		</div>
		<!-- onclick="{if(confirm(&quot;确定退出吗&quot;)){return true;}return false;}" -->
	</div>

	<div class="closeOut">
		<div class="coDiv">
			<p class="p1">
				<span>X</span>
			</p>
			<p class="p2">确定退出当前用户？</p>
			<P class="p3">
				<a class="ok yes" href="#">确定</a><a class="ok no" href="#">取消</a>
			</p>
		</div>
	</div>



</body>
</html>