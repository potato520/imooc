<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>搜索丨慕课网 只学有用的！</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="renderer" content="webkit">
<meta property="qc:admins" content="77103107776157736375" />
<meta property="wb:webmaster" content="c4f857219bfae3cb" />
<meta http-equiv="Access-Control-Allow-Origin" content="*" />
<meta http-equiv="Cache-Control" content="no-transform " />
<meta name="keywords" content="慕课网，慕课官网，MOOC，移动开发，IT技能培训，免费编程视频，php开发教程，web前端开发，在线编程学习，html5视频教程，css教程，ios开发培训，安卓开发教程" />
<meta name="description" content="慕课网（IMOOC）是学习编程最简单的免费平台。慕课网提供了丰富的移动端开发、php开发、web前端、html5教程以及css3视频教程等课程资源。它富有交互性及趣味性，并且你可以和朋友一起编程。" />



    <link rel="stylesheet" href="/imooc/Public/Home/style/search.css" type="text/css" />
    <!-- <link rel="stylesheet" href="http://static.mukewang.com/static/css/??base.css,common/common-less.css,search_common.css,wenda/wd_ques-less.css,common/article-list-less.css?v=1468222923" type="text/css" /> -->

</head>
<body >

<div id="header">
    <div class="page-container" id="nav">
        <div id="logo" class="logo"><a href="/" target="_self" class="hide-text">慕课网</a></div>


        <button type="button" class="navbar-toggle visible-xs-block js-show-menu" >
            <i class="icon-menu"></i>
        </button>
        <ul class="nav-item">
                        <li class="set-btn visible-xs-block"><a href="/user/newlogin" target="_self">登录</a> / <a href="/user/newsignup" target="_self">注册</a></li>
                        <li>
                 <a href="/" target="_self">首页</a>
            </li>
            <li>
                <a href="http://coding.imooc.com" target="_self">实战</a>
            </li>
            <li><a href="/course/program"  target="_self">路径</a></li>
            <li><a href="/wenda"  target="_self">猿问</a></li>
            <li><a href="/article"  target="_self">手记</a></li>
            
        </ul>

                <div id="login-area">
            <ul class="header-unlogin clearfix">
                <li class="header-app">
                    <a href="/mobile/app" >
                        <span class="icon-appdownload"></span>
                    </a>
                    <div class="QR-download">
                        <p id="app-text">慕课网APP下载</p>
                        <p id="app-type">iPhone / Android / iPad</p>
                        <img src="/static/img/index/QR-code.jpg">
                    </div>
                </li>
                <li class="header-signin">
                    <a href="#" id="js-signin-btn">登录</a>
                </li>
                <li class="header-signup">
                    <a href="#" id="js-signup-btn">注册</a>
                </li>
            </ul>
        </div>
                <!--
        <div class="app-down-area r">
            <a href="/mobile/app">
                <i class="header-app-icon"></i>慕课APP
            </a>
        </div>
        -->
        
        
        <div class='search-warp clearfix' style='min-width: 32px; height: 60px;'>
            <div class="search-area min" data-search="top-banner">
                <input class="search-input" data-suggest-trigger="suggest-trigger" placeholder="请输入想搜索的内容..." type="text" autocomplete="off">
                <input type='hidden' class='btn_search' data-search-btn="search-btn" />
                <ul class="search-area-result" data-suggest-result="suggest-result">
                </ul>
            </div>
            <div class='showhide-search' data-show='no'><i class='icon-search'></i></div>
        </div>
    </div>
</div>


<div id="main">

<div class="search-container">
    <script type="text/javascript">var _type=0;</script>
    <!--banner start-->
    <form action="/imooc/index.php/Home/Search/index" method="post">
    <div class="search-banner">
        <div class="search-box clearfix" data-search="search-page">
            <div class="suggest-input-box l">
                <input class="suggest-input J-suggest-input" data-suggest-trigger="suggest-trigger" placeholder="请输入想搜索的内容..." type="text" autocomplete="off" name="data" />
                <s class="btn-text-clear" data-clear-btn="clear-btn" title="清空">清空</s>
            </div>
            <input type="submit" class="btn-search" data-search-btn="search-btn" value="搜索" />
            <ul class="suggest-list" data-suggest-result="suggest-result">
            </ul>
        </div>
    </div>
    </form>
    <!--banner end-->

    <div class="search-main clearfix">
        <!--search result start-->
        <div class="search-result l">
            <ul class="type-list J-type-list clearfix">
                <li class="type-item    selected" data-type="课程">课程</li>
                <li class="type-item  " data-type="猿问">猿问</li>
                <li class="type-item  " data-type="手记">手记</li>
                <li class="type-item  " data-type="作品">作品</li>
                <li class="type-item     " data-type="Wiki">Wiki</li>
            </ul>
            <div class="result-list J-result-list">
                            
                                    <div class="result-header clearfix">
    为您找到相关<span>课程50</span>个
    <!--<span class="popular-sort J-popular-sort">最热排序</span>
    <span class="latest-sort J-latest-sort">最新排序</span>-->
</div>
<ul class="search-course">
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="course-item border-btm">
        <div class="course-item-content clearfix">
            <div class="thumbnail">
                <div class="thumbnail-inner">
                    <a href="/imooc/index.php/Home/CourseList/index/id/<?php echo ($vo["id"]); ?>" target="_blank"><img src="/imooc/<?php echo ($vo["thumb"]); ?>" /></a>
                </div>
            </div>
            <div class="introduction">
                <h2 class="title autowrap"><a href="/imooc/index.php/Home/CourseList/index/id/<?php echo ($vo["id"]); ?>" target="_blank"><?php echo ($vo["title"]); ?></h2>
                <div class="description autowrap">课程简介：<?php echo ($vo["summary"]); ?></div>
            </div>
        </div>
    </li><?php endforeach; endif; else: echo "" ;endif; ?>
     
    </ul>
<div class="page js-page"><span class="disabled_page">首页</span><span class="disabled_page">上一页</span><a href="javascript:void(0)" class="active">1</a><a href="javascript:void(0)" data-page="2">2</a><a href="javascript:void(0)" data-page="3">3</a><a href="javascript:void(0)" data-page="4">4</a><a href="javascript:void(0)" data-page="5">5</a><a href="javascript:void(0)" data-page="2">下一页</a><a href="javascript:void(0)" data-page="5">尾页</a></div>
                            
            </div>
        </div>
        <!--search result end-->

        <!--hot-search start-->
        <dl class="hot-search r">
            <dt>热门搜索</dt>
            <dd>
                                                <a title="AngularJS" href="/index/search?words=AngularJS">
                    AngularJS                </a>
                                <a title="mysql" href="/index/search?words=mysql">
                    mysql                </a>
                                <a title="java" href="/index/search?words=java">
                    java                </a>
                                <a title="android" href="/index/search?words=android">
                    android                </a>
                                <a title="C" href="/index/search?words=C">
                    C                </a>
                                <a title="php" href="/index/search?words=php">
                    php                </a>
                                <a title="javascript" href="/index/search?words=javascript">
                    javascript                </a>
                                <a title="ajax" href="/index/search?words=ajax">
                    ajax                </a>
                                <a title="python" href="/index/search?words=python">
                    python                </a>
                                <a title="bootstrap" href="/index/search?words=bootstrap">
                    bootstrap                </a>
                                <a title="linux" href="/index/search?words=linux">
                    linux                </a>
                                <a title="html5" href="/index/search?words=html5">
                    html5                </a>
                                <a title="html" href="/index/search?words=html">
                    html                </a>
                                <a title="c++" href="/index/search?words=c%2B%2B">
                    c++                </a>
                                <a title="c#" href="/index/search?words=c%23">
                    c#                </a>
                                            </dd>
        </dl>
        <!--hot-search end-->
    </div>
</div>

</div>

<div id="footer" >
    <div class="waper">
        <div class="footerwaper clearfix">
            <div class="followus r">
                <a class="followus-weixin" href="javascript:;"  target="_blank" title="微信">
                    <div class="flw-weixin-box"></div>
                </a>
                <a class="followus-weibo" href="http://weibo.com/u/3306361973"  target="_blank" title="新浪微博"></a>
                <a class="followus-qzone" href="http://user.qzone.qq.com/1059809142/" target="_blank" title="QQ空间"></a>
            </div>
            <div class="footer_intro l">
                <div class="footer_link">
                    <ul>
                        <li><a href="http://www.imooc.com/" target="_blank">网站首页</a></li>
                        <li><a href="/about/job" target="_blank">人才招聘</a></li>
                        <li> <a href="/about/contact" target="_blank">联系我们</a></li>
                        <li><a href="http://yun.imooc.com/" target="_blank">慕课云</a></li>
                        <li><a href="/corp/index" target="_blank">合作专区</a></li>
                        <li><a href="/about/us" target="_blank">关于我们</a></li>
                        <li> <a href="/about/recruit" target="_blank">讲师招募</a></li>
                        <li> <a href="/user/feedback" target="_blank">意见反馈</a></li>
                        <li> <a href="/about/friendly" target="_blank">友情链接</a></li>
                    </ul>
                </div>
                <p>Copyright © 2016 imooc.com All Rights Reserved | 京ICP备 13046642号-2</p>
            </div>
        </div>
    </div>
</div>


<div id="J_GotoTop" class="elevator">
       
    <a href="/user/feedback" class="elevator-msg" title="意见反馈"><i class="icon-feedback"></i></a>  
    <a href="javascript:" class="elevator-app" title="app下载">
      <i class="icon-appdownload"></i>
      <div class="elevator-app-box"></div>
    </a>
    <a href="javascript:" class="elevator-weixin no-goto" id="js-elevator-weixin" title="官方微信">
      <i class="icon-wxgzh"></i>
      <div class="elevator-weixin-box"></div>
    </a>
    <a href="javascript:void(0)" class="elevator-top no-goto" style="display:none" title="返回顶部" id="backTop"><i class="icon-up2"></i></a>    
</div>






</body>
</html>