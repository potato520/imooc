<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>行家添加-有点</title>
<link rel="stylesheet" type="text/css" href="/video/Public/Admin/css/css.css" />
<script type="text/javascript" src="/video/Public/Admin/js/jquery.min.js"></script>

  <!-- 时间控件star -->
  <script src="/video/Public/Admin/laydate/laydate.js"></script>
  <!-- 时间控件end -->

</head>
<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="/video/Public/Admin/img/coin02.png" /><span><a href="#">首页</a>&nbsp;-&nbsp;<a
					href="#">公共管理</a>&nbsp;-</span>&nbsp;内容添加
			</div>
		</div>
		<div class="page ">
			<!-- 上传广告页面样式 -->
			<div class="banneradd bor">
				<div class="baTopNo">
					<span>内容添加</span>
				</div>
  	  <form action="/video/index.php/Admin/Course/add" enctype="multipart/form-data"  method="post">
				<div class="baBody">

					<div class="bbD">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;标题：　　<input type="text"
							class="input7" name="title" />
					</div>
					<div class="bbD">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;摘要：　　<textarea name="summary"   class="input8"></textarea>
					</div>
					<div class="bbD">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;来源：　　<input type="text"
							class="input5" name="infoFrom" />
					</div>

					<div class="bbD">
						<div id="localImag" style="width:600px; height:100px;">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;缩略图：　　<input type="file"
							name="thumb" id="doc"  onchange="javascript:setImagePreview();" />
							<img src="" alt="" id="preview" style="float:right;" />
						</div>
							<!-- <img src="http://127.0.0.1/video/Public/thumb/2016-06-23/576abda022cf8.jpg" alt="" width="70" /> -->
					</div>
					<div class="clear"></div>
					
					<div class="bbD">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;作者：　　<input type="text"
						class="input5" name="author" value="<?php echo $_SESSION['user']['username'] ?>" />
					</div>

					<div class="bbD">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发布日期：<input class="input5"  id="demo" name="published_date" onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})" value="<?php echo date("Y-m-d H:i:s",time()) ?>">
						<span style="color:orange;font-size:12px;">*点击input自定义时间</span>
					</div>

 <script>
;!function(){

//laydate.skin('molv');

laydate({
   elem: '#demo'
})

}();
</script>

					<div class="bbD">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;所属栏目：<select name="category_id"  class="input3" >
							<option value="0">顶级栏目</option>
							<?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ca): $mod = ($i % 2 );++$i;?><option value="<?php echo ($ca["id"]); ?>">
									<?php echo (str_repeat("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$ca["level"])); echo ($ca["name"]); ?>
								</option><?php endforeach; endif; else: echo "" ;endif; ?>
						</select>
　　　
						置顶：<input type="radio" name="top" value="1" />　
						不置顶：<input type="radio" name="top" value="0" checked="checked" />

						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;课程难度：<select name="status"  class="input3" >
							<option value="1">初级</option>
							<option value="2">中级</option>
							<option value="3">高级</option>
						</select>
					</div>	

					<div class="bbD" style="border:solid #ccc 1px; width:680px; margin-left:100px;" id="fath">
						<ul id="ul1">
                            <li id="up">
                                课程标题：<input type="text" name="class_title[]"/>
                                <br>
                                课程内容：<input type="text" name="class_content[]"/>

                                <span class="addBtn" onclick="addUploadForm()">+</span>
                            </li>
                        </ul>

					</div>

					    <script type="text/javascript">
    //添加上传表单
    function addUploadForm(){
        var li='<li> \
        			课程标题：<input type="text" name="class_title[]"/> \
                     <br> \
                    课程内容：<input type="text" name="class_content[]"/> \
                    <span class="addBtn" \
                    onclick="delUploadForm(this)">-</span></li>' 
                    $("ul").append(li);
    }
    //删除上传表单
    function delUploadForm(obj){
        $(obj).parent().remove();
    }
    </script>

					<script type="text/javascript">
						
						$(function(){
							$("#as1").click(function(){
								$('<div>123</div>').prepend("#prependTo");
							})
						})
					</script>
					<div class="bbD">
						<p class="bbDP">
							<button class="btn_ok btn_yes" href="#">提交</button>
							<a class="btn_ok btn_no" href="#">取消</a>
						</p>
					</div>

				</div>
			</form>
			</div>
			<!-- 上传广告页面样式end -->
		</div>
	</div>

<script>
	
	$(function(){
		$(".btn_yes").click(function(){
			if($('input[name="name"]').val()==""){
				alert("标题不能为空");return false;
			}
		
		})
			
	})
</script>
<script type="text/javascript" src="/video/Public/Admin/js/showPic.js"></script>

</body>
</html>