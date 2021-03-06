<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>JavaScript视频教程_JavaScript基础教程-慕课网</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="77103107776157736375" />
    <meta property="wb:webmaster" content="c4f857219bfae3cb" />
    <meta http-equiv="Access-Control-Allow-Origin" content="*" />
    <meta http-equiv="Cache-Control" content="no-transform " />

    <meta name="Keywords" content="" />

    <meta name="Description" content="慕课网JavaScript视频教程,为用户提供全面的IT实战开发课程,包含JavaScript基础教程,JavaScript入门教程,JavaScript高级教程等,适合各个阶段开发人员,课程全面,制作精良,讲解通俗易懂,快速提升开发技能"/>


    <script src="/imooc/Public/Home/js/jquery.min.js"></script>

    <link rel="stylesheet" href="/imooc/Public/Home/style/list.css" type="text/css" />
</head>
<body  id="List_courseId">

    <div id="header">
        <div class="page-container" id="nav">
            <div id="logo" class="logo">
                <a href="/imooc/" target="_self" class="hide-text">慕课网</a>
            </div>

            <button type="button" class="navbar-toggle visible-xs-block js-show-menu" > <i class="icon-menu"></i>
            </button>
            <ul class="nav-item">
                <li class="set-btn visible-xs-block">
                    <a href="/user/newlogin" target="_self">登录</a>
                    /
                    <a href="/user/newsignup" target="_self">注册</a>
                </li>
                <li>
                    <a href="/imooc/" target="_self">首页</a>
                </li>
                <li>
                    <a href="http://coding.imooc.com" target="_self">实战</a>
                </li>
                <li>
                    <a href="/course/program"  target="_self">计划</a>
                </li>
                <li>
                    <a href="/wenda"  target="_self">猿问</a>
                </li>
                <li>
                    <a href="/article"  target="_self">手记</a>
                </li>

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
                            <img src="/static/img/index/QR-code.jpg"></div>
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
            <a href="/mobile/app"> <i class="header-app-icon"></i>
                慕课APP
            </a>
        </div>
        -->
        <div class='search-warp clearfix' style='min-width: 32px; height: 60px;'>
            <div class="search-area min" data-search="top-banner">
                <input class="search-input" data-suggest-trigger="suggest-trigger" placeholder="请输入想搜索的内容..." type="text" autocomplete="off">
                <input type='hidden' class='btn_search' data-search-btn="search-btn" />
                <ul class="search-area-result" data-suggest-result="suggest-result"></ul>
            </div>
            <div class='showhide-search' data-show='no'>
                <i class='icon-search'></i>
            </div>
        </div>
    </div>
</div>

<div id="main">

    <div class="container">
<form id="filterForm" name="form1" method="get" action="/imooc/index.php/Home/Course/index">
      <input id="id" type="hidden" value="" name="id" to="filter">
      <input id="cid" type="hidden" value="" name="cid" to="filter">
      <input id="status" type="hidden" value="" name="status" to="filter">
      <input id="day" type="hidden" value="" name="day" to="filter">
      <input id="type" type="hidden" value="" name="type" to="filter">
        <div class="course-content">
            <div class="course-nav-box">
                <div class="course-nav-hd">
                    <span>全部课程</span>
                    <a href="/about/recruit" class="for-teacher hide-text" title="应聘讲师" target="_blank">应聘讲师</a>
                </div>
                <div class="course-nav-row clearfix">
                    <span class="hd l">方向：</span>
                    <div class="bd">
                        <ul class="">
                            <li class="course-nav-item ">
                                <a href="javascript:Filter('id','0');">全部</a>
                            </li>
                           <?php if(is_array($currOne)): $i = 0; $__LIST__ = $currOne;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="course-nav-item 
                                 <?php if($v['id']==$_GET['id']){ echo "on"; } ?>
                            ">
                                <a href="javascript:Filter('id','<?php echo ($v["id"]); ?>');" data-id=7 data-ct=fe><?php echo ($v["name"]); ?></a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="course-nav-row clearfix">
                    <span class="hd l">分类：</span>
                    <div class="bd">
                        <ul class="">
                            <?php if(is_array($catList)): $i = 0; $__LIST__ = $catList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="course-nav-item 
                                 <?php if($v['id']==$_GET['cid']){ echo "on"; } ?>
                            ">
                                <a href="javascript:Filter('cid','<?php echo ($v["id"]); ?>');" data-id=7 data-ct=fe><?php echo ($v["name"]); ?></a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                          
                        </ul>
                    </div>
                </div>
                <div class="course-nav-row clearfix">
                    <span class="hd l">难度：</span>
                    <div class="bd">
                        <ul class="">
                            <?php foreach($slist as $k=>$v){ ?>
                            <li class="course-nav-item 
                                 <?php if($k == $_GET['status']){ echo "on"; } ?>
                            ">
                            <a href="javascript:Filter('status', <?php echo $k ?>);"><?php echo $v ?></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="course-tool-bar clearfix">
                <div class="tool-left l">
                    <a href="/course/list?c=javascript&sort=last" class="sort-item">最新</a>
                    <a href="/course/list?c=javascript&sort=pop" class="sort-item active">最热</a>
                </div>
                <div class="l">
                    <span class="tool-item" style="display: none;">
                        <a class="follow-learn tool-chk" href="javascript:void(0);">跟我学</a>
                    </span>
                </div>
                <div class="tool-right r">
                    <span class="tool-item total-num">
                        共 <b>70</b>
                        个课程
                    </span>
                    <span class="tool-item tool-pager">
                        <span class="pager-num"> <b class="pager-cur">1</b>
                            / <em class="pager-total">4</em>
                        </span>
                        <a href="javascript:void(0)" class="pager-action pager-prev hide-text disabled">上一页</a>

                        <a href="/course/list?c=javascript&page=2" class="pager-action pager-next hide-text">下一页</a>
                    </span>
                </div>
            </div>
            <div class="course-list">
                <div class="js-course-lists">
                    <ul>
                    <?php if(is_array($data2)): foreach($data2 as $k=>$vo): ?><li class="course-one">
                            <a target="_blank" href="/imooc/index.php/Home/CourseList/index/id/<?php echo ($vo["id"]); ?>" target="_self">
                                <div class="course-list-img">
                                    <img width="240" height="135" alt="JavaScript入门篇" src="/imooc/<?php echo ($vo["thumb"]); ?>"></div>
                                <h5>
                                    <span><?php echo ($vo["title"]); ?></span>
                                </h5>
                                <div class="tips">
                                    <p class="text-ellipsis"><?php echo ($vo["summary"]); ?></p>
                                    <span class="l ">更新完毕</span>

                                    <span class="l ml20">
                                        254923
                                人学习
                                    </span>
                                </div>
                                <span class="time-label">1小时35分钟 | 初级</span>
                                <b class="follow-label">跟我学</b>
                            </a>
                        </li><?php endforeach; endif; ?>
                    </ul>
                </div>
                <div class="page">
                    <span class="disabled_page">首页</span>
                    <span class="disabled_page">上一页</span>
                    <a href="javascript:void(0)" class="active">1</a>
                    <a href="/course/list?c=javascript&page=2">2</a>
                    <a href="/course/list?c=javascript&page=3">3</a>
                    <a href="/course/list?c=javascript&page=4">4</a>
                    <a href="/course/list?c=javascript&page=2">下一页</a>
                    <a href="/course/list?c=javascript&page=4">尾页</a>
                </div>
            </div>
        </div>
    </form>
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
                        <li>
                            <a href="http://www.imooc.com/" target="_blank">网站首页</a>
                        </li>
                        <li>
                            <a href="/about/job" target="_blank">人才招聘</a>
                        </li>
                        <li>
                            <a href="/about/contact" target="_blank">联系我们</a>
                        </li>
                        <li>
                            <a href="http://yun.imooc.com/" target="_blank">慕课云</a>
                        </li>
                        <li>
                            <a href="/corp/index" target="_blank">合作专区</a>
                        </li>
                        <li>
                            <a href="/about/us" target="_blank">关于我们</a>
                        </li>
                        <li>
                            <a href="/about/recruit" target="_blank">讲师招募</a>
                        </li>
                        <li>
                            <a href="/user/feedback" target="_blank">意见反馈</a>
                        </li>
                        <li>
                            <a href="/about/friendly" target="_blank">友情链接</a>
                        </li>
                    </ul>
                </div>
                <p>
                    Copyright © 2016 imooc.com All Rights Reserved | 京ICP备 13046642号-2
                </p>
            </div>
        </div>
    </div>
</div>

<div id="J_GotoTop" class="elevator">
    <a href="javascript:void(0)" class="elevator-top" style="display:none" title="返回顶部" id="backTop">
        <i class="icon-up2"></i>
    </a>
    <a href="/user/feedback" class="elevator-msg" title="意见反馈">
        <i class="icon-feedback"></i>
    </a>
    <a href="javascript:" class="elevator-app" title="app下载">
        <i class="icon-appdownload"></i>
        <div class="elevator-app-box"></div>
    </a>
    <a href="javascript:" class="elevator-weixin" title="官方微信">
        <i class="icon-wxgzh"></i>
        <div class="elevator-weixin-box"></div>
    </a>
</div>

<!--script-->
<script src="/passport/static/scripts/ssologin.js?v=2.0"></script>
<script type="text/javascript" src="/static/sea-modules/seajs/seajs/2.1.1/sea.js"></script>
<script type="text/javascript" src="/static/sea_config.js?v=201606221750"></script>
<script type="text/javascript">seajs.use("/static/page/"+OP_CONFIG.module+"/"+OP_CONFIG.page);</script>

<div style="display: none">
    <script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Ff0cfcccd7b1393990c78efdeebff3968' type='text/javascript'%3E%3C/script%3E"));
(function (d) {
window.bd_cpro_rtid="rHT4P1c";
var s = d.createElement("script");s.type = "text/javascript";s.async = true;s.src = location.protocol + "//cpro.baidu.com/cpro/ui/rt.js";
var s0 = d.getElementsByTagName("script")[0];s0.parentNode.insertBefore(s, s0);
})(document);
</script>
    <script>
(function(){
    var bp = document.createElement('script');
    bp.src = '//push.zhanzhang.baidu.com/push.js';
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>




  <script>
     $(function(){
       <?php
 if($_GET){ echo 'var obj='.json_encode($_GET).';'; } ?>
      if(typeof(obj)!='undefined'){
          for(k in obj){
            $("#"+k).val(obj[k]);
            $("a["+k+"="+obj[k]+"]").parent().addClass("in").siblings().removeClass("in");
          }
      }
     })
    </script>
    <script>
        function Filter(a,b){
          var $ = function(e){return document.getElementById(e);}
          var ipts = $('filterForm').getElementsByTagName('input'),result=[];
          for(var i=0,l=ipts.length;i<l;i++){
          if(ipts[i].getAttribute('to')=='filter'){
          result.push(ipts[i]);
          }
          }
          if($(a)){
          $(a).value = b;
          for(var j=0,len=result.length;j<len;j++){
          
            if(result[j].value=='' || result[j].value=='0'){
            result[j].parentNode.removeChild(result[j]);
            }
          }
            document.forms['filterForm'].submit();
          }
          return false;
          } 
    </script>




</div>
</body>
</html>