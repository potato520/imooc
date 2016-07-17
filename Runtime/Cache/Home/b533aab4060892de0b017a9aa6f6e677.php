<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
		<?php if(is_array($content)): $i = 0; $__LIST__ = $content;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul>
			<li>
				<a href="<?php echo ($vo["class_content"]); ?>" target="_blank"><?php echo ($vo["class_title"]); ?></a>
			</li>
		</ul><?php endforeach; endif; else: echo "" ;endif; ?>
	
</body>
</html>