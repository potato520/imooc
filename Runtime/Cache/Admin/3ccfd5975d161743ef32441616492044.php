<?php if (!defined('THINK_PATH')) exit();?>	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>首页 - 素材火 Admin</title>

	<meta name="description" content="overview &amp; stats" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- basic styles -->

	<link href="/imooc/Public/Admin/Ace/assets/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="/imooc/Public/Admin/Ace/assets/css/font-awesome.min.css" />

	<!--[if IE 7]>
	<link rel="stylesheet" href="/imooc/Public/Admin/Ace/assets/css/font-awesome-ie7.min.css" />
	<![endif]-->

	<!-- page specific plugin styles -->

	<!-- fonts -->

	<link rel="stylesheet" href="/imooc/Public/Admin/Ace/assets/css/ace-fonts.css" />

	<!-- ace styles -->

	<link rel="stylesheet" href="/imooc/Public/Admin/Ace/assets/css/ace.min.css" />
	<link rel="stylesheet" href="/imooc/Public/Admin/Ace/assets/css/ace-rtl.min.css" />
	<link rel="stylesheet" href="/imooc/Public/Admin/Ace/assets/css/ace-skins.min.css" />
	<style>
			#iframe{border:solid red 1px; width: 100%; height: 1000px; padding-bottom: 50px; background: #fff;}
			*{font-size: 14px; font-family: 微软雅黑;}
		</style>

	<!--[if lte IE 8]>
	<link rel="stylesheet" href="/imooc/Public/Admin/Ace/assets/css/ace-ie.min.css" />
	<![endif]-->

	<!-- inline styles related to this page -->

	<!-- ace settings handler -->

	<script src="/imooc/Public/Admin/Ace/assets/js/ace-extra.min.js"></script>
	<script src="/imooc/Public/Admin/Ace/assets/js/jquery-2.0.3.min.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

	<!--[if lt IE 9]>
	<script src="/imooc/Public/Admin/Ace/assets/js/html5shiv.js"></script>
	<script src="/imooc/Public/Admin/Ace/assets/js/respond.min.js"></script>
	<![endif]-->



</head>

<body>
	<style>body{background: #fff;}</style>

	<!-- 位置区域 -->	
	<div class="breadcrumbs" id="breadcrumbs">
		<script type="text/javascript">try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}</script>

		<ul class="breadcrumb">
			<li> <i class="icon-home home-icon"></i>
				<a href="#">Home</a>
			</li>

			<li>
				<a href="#">Tables</a>
			</li>
			<li class="active">Simple &amp; Dynamic</li>
		</ul>
		<!-- .breadcrumb -->	

		<div class="nav-search" id="nav-search">
			<form class="form-search">
				<span class="input-icon">
					<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" /> <i class="icon-search nav-search-icon"></i>
				</span>
			</form>
		</div>
		<!-- #nav-search -->	
	</div>

	<!-- 位置区域结束 -->	

	

	<style>
		#wrap{width: 94;height: auto;overflow: hidden;margin: 20px auto; padding: 10px 20px;border:solid #ccc 1px;}
		#wrap .add-app{display: block;width: 100px;height: 28px;line-height: 28px;text-align: center;line-height: 28px;background: #670768;color: #fff;border-radius: 4px;}
		#wrap .app{padding: 10px;margin-top: 20px;border:solid 1px #f6f6f6;}
		#wrap .app p{height: 30px;line-height: 30px;}
		#wrap .app p strong{height: 30px;line-height: 30px; font-size: 20px; color: #0b99d8;}
		#wrap .app dl{margin: 10px 0;border:solid #dcdcdc 1px; height: auto;overflow: hidden;}
		#wrap .app dl dt{display: block; height: 36px;line-height: 36px;background: #e6e6fa;text-indent: 10px;}
		#wrap .app dl dd{float: left;padding: 10px;}
		#wrap .app dl dd strong{font-size: 16px;color: #61a1fa;}
	</style>

	<!-- 内容区域 -->	
	<form action="<?php echo U('Rbac/setAccess');?>" method="post">
		<div class="page-content">
			<div class="row">
				<div class="col-xs-12">
					<div class="table-responsive">
						<div id="wrap">
							<a href="<?php echo U('Admin/Rbac/addNode');?>" class="add-app">添加应用</a>
							<div class="app">
								<?php if(is_array($node)): $i = 0; $__LIST__ = $node;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$app): $mod = ($i % 2 );++$i;?><p> <strong><?php echo ($app["title"]); ?></strong>
										<input type="checkbox" name="access[]" value="<?php echo ($app["id"]); ?>_1" <?php if($app['access']): ?>checked='checked'<?php endif; ?>
									>
								</p>

								<?php if(is_array($app["child"])): $i = 0; $__LIST__ = $app["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$action): $mod = ($i % 2 );++$i;?><dl>
										<dt> <strong><?php echo ($action["title"]); ?></strong>
											<input type="checkbox" name="access[]" value="<?php echo ($action["id"]); ?>_2"  <?php if($action['access']): ?>checked='checked'<?php endif; ?>
										>
									</dt>
									<?php if(is_array($action["child"])): $i = 0; $__LIST__ = $action["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$method): $mod = ($i % 2 );++$i;?><dd>
											<span><?php echo ($method["title"]); ?></span>
											<input type="checkbox" name="access[]" value="<?php echo ($method["id"]); ?>_3"  <?php if($method['access']): ?>checked='checked'<?php endif; ?>
										>
									</dd><?php endforeach; endif; else: echo "" ;endif; ?>
							</dl><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
				</div>
				<!-- 属于哪一个用户组的 -->	
				<input type="hidden" name="rid" value="<?php echo ($rid); ?>">	
				<input type="submit" value="保存修改"></div>
		</div>
		<!-- /.table-responsive -->	
	</div>
	<!-- /span -->	
	</div>
	</div>
	</form>