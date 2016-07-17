<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php if(is_array($topCate)): $i = 0; $__LIST__ = $topCate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul>
			<li>
			<img src="/video/<?php echo ($vo["thumb"]); ?>" alt="">
			<a href="/video/index.php/Home/Index/cat/id/<?php echo ($vo["id"]); ?>" target="_blank"><?php echo ($vo["name"]); ?></a>
				
			</li>
		</ul><?php endforeach; endif; else: echo "" ;endif; ?>

	<hr>

	<?php if(is_array($content)): $i = 0; $__LIST__ = $content;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul>
			<li>
			<img src="/video/<?php echo ($vo["thumb"]); ?>" alt="">
			<a href="/video/index.php/Home/Index/main/id/<?php echo ($vo["id"]); ?>" target="_blank"><?php echo ($vo["title"]); ?></a>
				
			</li>
		</ul><?php endforeach; endif; else: echo "" ;endif; ?>
	
</body>
</html>