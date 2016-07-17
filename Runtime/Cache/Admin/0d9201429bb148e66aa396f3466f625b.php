<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>管理员管理-有点</title>
	<link rel="stylesheet" type="text/css" href="/video/Public/Admin/css/css.css" />
	<script type="text/javascript" src="/video/Public/Admin/js/jquery.min.js"></script>
	<!-- <script type="text/javascript" src="/video/Public/Admin/js/page.js" ></script>
-->
</head>

<body>
<style>
   /*分页*/
 .current{background-color:rgba(0,255,150,0.5);}
 .prev,.num,.next,.current{width:auto;height:auto;margin:4px;padding:1px 2px;box-shadow:0 0 2px rgba(0,0,0,0.2);background-color:rgba(255,255,255,0.1); display: inline-block;}
 .pagination li{float: left;}
 .pagination li a{margin-top: 15px; display: inline-block; margin-right: 10px;}
 /*分页结束*/
</style>

<div id="pageAll">
	<div class="pageTop">
		<div class="page">
			<img src="/video/Public/Admin/img/coin02.png" />
			<span>
				<a href="#">首页</a>
				&nbsp;-&nbsp;-
			</span>
			&nbsp;管理员管理
		</div>
	</div>

	<div class="page">
		<!-- user页面样式 -->
		<div class="connoisseur">
			<div class="conform">
				<form>
					<div class="cfD">
						<input class="userinput" type="text" placeholder="输入用户名" />
						&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;
						<input class="userinput vpr" type="text" placeholder="输入用户密码" />
						<input type="button" class="userbtn" id="addBtn" value="添加" />
					</div>
				</form>
			</div>
<!-- 添加的js代码 -->
<script>
	$(function(){
		$("#addBtn").click(function(){
			window.location.href="/video/index.php/Admin/Category/add";
		})
	})
</script>


<!-- 添加的js 代码结束 -->

			<!-- user 表格 显示 -->
			<div class="conShow">
				<table border="1" cellspacing="0" cellpadding="0">
					<tr>
						<td width="66px" class="tdColor tdC">序号</td>
						<td width="435px" class="tdColor">分类名称</td>
						<td width="400px" class="tdColor">别名</td>
						<td width="400px" class="tdColor">排序</td>
						<td width="400px" class="tdColor">上级分类</td>
						<td width="130px" class="tdColor">操作</td>
					</tr>
					<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr height="40px">
							<td align="center"><?php echo ($vo["id"]); ?></td>
							<td style="text-align:left; "> <?php echo (str_repeat("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$vo["level"])); echo ($vo["name"]); ?></td>
							<td align="center">
								<?php echo ($vo["nickname"]); ?>
							</td>
							<td align="center"><?php echo ($vo["sort"]); ?></td>
							<td align="center">
							 <?php if($vo['parent_id']==0): ?>顶级栏目
                 				 <?php else: ?>
                 				 <?php echo ($vo["parentName"]); endif; ?>
							</td>
							<td>
								<a href="javascript:;" id="modBtn" ids="<?php echo ($vo["id"]); ?>">
									<img class="operation"
									src="/video/Public/Admin/img/update.png"></a>
									
								<img class="operation delban"
								src="/video/Public/Admin/img/delete.png" data-id="<?php echo ($vo["id"]); ?>">

								</td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</table>
				<div class="paging">
     			 <?php echo ($page); ?>
				</div>
			</div>
			<!-- user 表格 显示 end-->
		</div>
		<!-- user页面样式end -->
	</div>

<!-- 获取要修改的id值  [ 尤开利 ] -->
	<script>
	$(function(){
		$("tr #modBtn").click(function(){
    		var id = $(this).attr("ids");
    		// alert(id);
    		window.location.href="/video/index.php/Admin/Category/mod/id/" + id;
		})
		
	})
	</script>

	<!-- 删除跳转 -->

		<script>
	$(function(){
		$("tr #delBtn").click(function(){
    		var id = $(this).attr("ids");
    		// alert(id);
    		window.location.href="/video/index.php/Admin/Category/del/id/" + id;
		})
		
	})
	</script>

</div>

<!-- 删除弹出框 -->
<div class="banDel">
	<div class="delete">
		<div class="close">
			<a>
				<img src="/video/Public/Admin/img/shanchu.png" />
			</a>
		</div>
		<p class="delP1">你确定要删除此条记录吗？</p>
		<p class="delP2">
			<a href="/video/index.php/Admin/Category/del/id/123" class="ok yes">确定</a>
			<a class="ok no">取消</a>
		</p>
	</div>
</div>
<!-- 删除弹出框  end-->
</body>

<script type="text/javascript">
// 广告弹出框
$(".delban").click(function(){
	var id = $(this).attr("data-id");
	$(".yes").attr("href", "/video/index.php/Admin/Category/del/id/" + id);
  $(".banDel").show();
});
$(".close").click(function(){
  $(".banDel").hide();
});
$(".no").click(function(){
  $(".banDel").hide();
});
// 广告弹出框 end
</script>
</html>