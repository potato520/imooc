<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>首页左侧导航</title>
	<link rel="stylesheet" type="text/css" href="/Public/Admin/css/public.css" />
	<script type="text/javascript" src="/Public/Admin/js/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/Admin/js/public.js"></script>
<head></head>

<body id="bg">
	<!-- 左边节点 -->
	<div class="container">

		<div class="leftsidebar_box">
			<a href="/index.php/Home/Index/index" target="_blank">
				<div class="line">
					<img src="/Public/Admin/img/coin01.png" />
					&nbsp;&nbsp;首页
				</div>
			</a>
			<!-- <dl class="system_log">
			<dt>
				<img class="icon1" src="/Public/Admin/img/coin01.png" />
				<img class="icon2"src="/Public/Admin/img/coin02.png" />
				首页
				<img class="icon3" src="/Public/Admin/img/coin19.png" />
				<img class="icon4" src="/Public/Admin/img/coin20.png" />
			</dt>
		</dl>
		-->
		<dl class="system_log">
			<dt>
				<img class="icon1" src="/Public/Admin/img/coin03.png" />
				<img class="icon2"
						src="/Public/Admin/img/coin04.png" />
				网站管理
				<img class="icon3"
						src="/Public/Admin/img/coin19.png" />
				<img class="icon4"
						src="/Public/Admin/img/coin20.png" />
			</dt>
			<dd>
				<img class="coin11" src="/Public/Admin/img/coin111.png" />
				<img class="coin22"
						src="/Public/Admin/img/coin222.png" />
				<a class="cks" href="/index.php/Admin/User/index"
						target="main">管理员管理</a>
				<img class="icon5" src="/Public/Admin/img/coin21.png" />
			</dd>
		</dl>
		<dl class="system_log">
			<dt>
				<img class="icon1" src="/Public/Admin/img/coin05.png" />
				<img class="icon2"
						src="/Public/Admin/img/coin06.png" />
				栏目管理
				<img class="icon3"
						src="/Public/Admin/img/coin19.png" />
				<img class="icon4"
						src="/Public/Admin/img/coin20.png" />
			</dt>

			<dd>
				<img class="coin11" src="/Public/Admin/img/coin111.png" />
				<img class="coin22"
						src="/Public/Admin/img/coin222.png" />
				<a class="cks" href="/index.php/Admin/Category/index"
						target="main">栏目列表</a>
				<img class="icon5" src="/Public/Admin/img/coin21.png" />
			</dd>
		</dl>

		<dl class="system_log">
			<dt>
				<img class="icon1" src="/Public/Admin/img/coin10.png" />
				<img class="icon2"
						src="/Public/Admin/img/coin09.png" />
				内容管理
				<img class="icon3"
						src="/Public/Admin/img/coin19.png" />
				<img class="icon4"
						src="/Public/Admin/img/coin20.png" />
			</dt>
			<dd>
				<img class="coin11" src="/Public/Admin/img/coin111.png" />
				<img class="coin22"
						src="/Public/Admin/img/coin222.png" />
				<a href="/index.php/Admin/Article/index"
						target="main" class="cks">内容管理</a>
				<img class="icon5"
						src="/Public/Admin/img/coin21.png" />
			</dd>
		</dl>

		<dl class="system_log">
			<dt>
				<img class="icon1" src="/Public/Admin/img/coin07.png" />
				<img class="icon2"
						src="/Public/Admin/img/coin08.png" />
				课程管理
				<img class="icon3"
						src="/Public/Admin/img/coin19.png" />
				<img class="icon4"
						src="/Public/Admin/img/coin20.png" />
			</dt>
			<dd>
				<img class="coin11" src="/Public/Admin/img/coin111.png" />
				<img class="coin22"
						src="/Public/Admin/img/coin222.png" />
				<a href="/index.php/Admin/Course/index" target="main"
						class="cks">课程管理</a>
				<img class="icon5" src="/Public/Admin/img/coin21.png" />
			</dd>
		</dl>

		<dl class="system_log">
			<dt>
				<img class="icon1" src="/Public/Admin/img/coin11.png" />
				<img class="icon2"
						src="/Public/Admin/img/coin12.png" />
				话题管理
				<img class="icon3"
						src="/Public/Admin/img/coin19.png" />
				<img class="icon4"
						src="/Public/Admin/img/coin20.png" />
			</dt>
			<dd>
				<img class="coin11" src="/Public/Admin/img/coin111.png" />
				<img class="coin22"
						src="/Public/Admin/img/coin222.png" />
				<a href="../topic.html" target="main"
						class="cks">话题管理</a>
				<img class="icon5" src="/Public/Admin/img/coin21.png" />
			</dd>
		</dl>
		<dl class="system_log">
			<dt>
				<img class="icon1" src="/Public/Admin/img/coin14.png" />
				<img class="icon2"
						src="/Public/Admin/img/coin13.png" />
				心愿管理
				<img class="icon3"
						src="/Public/Admin/img/coin19.png" />
				<img class="icon4"
						src="/Public/Admin/img/coin20.png" />
			</dt>
			<dd>
				<img class="coin11" src="/Public/Admin/img/coin111.png" />
				<img class="coin22"
						src="/Public/Admin/img/coin222.png" />
				<a href="../wish.html" target="main"
						class="cks">心愿管理</a>
				<img class="icon5" src="/Public/Admin/img/coin21.png" />
			</dd>
		</dl>
		<dl class="system_log">
			<dt>
				<img class="icon1" src="/Public/Admin/img/coin15.png" />
				<img class="icon2"
						src="/Public/Admin/img/coin16.png" />
				约见管理
				<img class="icon3"
						src="/Public/Admin/img/coin19.png" />
				<img class="icon4"
						src="/Public/Admin/img/coin20.png" />
			</dt>
			<dd>
				<img class="coin11" src="/Public/Admin/img/coin111.png" />
				<img class="coin22"
						src="/Public/Admin/img/coin222.png" />
				<a href="../appointment.html"
						target="main" class="cks">约见管理</a>
				<img class="icon5"
						src="/Public/Admin/img/coin21.png" />
			</dd>
		</dl>
		<dl class="system_log">
			<dt>
				<img class="icon1" src="/Public/Admin/img/coin17.png" />
				<img class="icon2"
						src="/Public/Admin/img/coin18.png" />
				收支管理
				<img class="icon3"
						src="/Public/Admin/img/coin19.png" />
				<img class="icon4"
						src="/Public/Admin/img/coin20.png" />
			</dt>
			<dd>
				<img class="coin11" src="/Public/Admin/img/coin111.png" />
				<img class="coin22"
						src="/Public/Admin/img/coin222.png" />
				<a href="../balance.html"
						target="main" class="cks">收支管理</a>
				<img class="icon5"
						src="/Public/Admin/img/coin21.png" />
			</dd>
		</dl>
		<dl class="system_log">
			<dt>
				<img class="icon1" src="/Public/Admin/img/coinL1.png" />
				<img class="icon2"
						src="/Public/Admin/img/coinL2.png" />
				系统管理
				<img class="icon3"
						src="/Public/Admin/img/coin19.png" />
				<img class="icon4"
						src="/Public/Admin/img/coin20.png" />
			</dt>
			<dd>
				<img class="coin11" src="/Public/Admin/img/coin111.png" />
				<img class="coin22"
						src="/Public/Admin/img/coin222.png" />
				<a href="../changepwd.html"
						target="main" class="cks">修改密码</a>
				<img class="icon5"
						src="/Public/Admin/img/coin21.png" />
			</dd>
			<dd>
				<img class="coin11" src="/Public/Admin/img/coin111.png" />
				<img class="coin22"
						src="/Public/Admin/img/coin222.png" />
				<a class="cks">退出</a>
				<img
						class="icon5" src="/Public/Admin/img/coin21.png" />
			</dd>
		</dl>

	</div>

</div>
</body>
</html>