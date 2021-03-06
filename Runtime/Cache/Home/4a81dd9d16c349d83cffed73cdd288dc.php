<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?php echo ($title["title"]); ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <meta name="renderer" content="webkit">
  <meta property="qc:admins" content="77103107776157736375" />
  <meta property="wb:webmaster" content="c4f857219bfae3cb" />
  <meta http-equiv="Access-Control-Allow-Origin" content="*" />
  <meta http-equiv="Cache-Control" content="no-transform " />

  <meta name="Keywords" content="" />

  <meta name="description" content="课程将带领大家从0开始做一款真正的RPG的游戏，其中涉及到很多当下热门游戏所用到的技术。帧动画，待机动画，渲染 等等" />

  <!-- <link rel="stylesheet" href="style/css.css" type="text/css" />
  -->
  <link rel="stylesheet" href="/imooc/Public/Home/style/css2.css" type="text/css" />
    <link rel="stylesheet" href="/imooc/Public/Home/style/layer.css"/>
  
</head>
<body >

  <div id="header">
    <div class="page-container" id="nav">
      <div id="logo" class="logo">
        <a href="/" target="_self" class="hide-text">慕课网</a>
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
          <a href="/course/program"  target="_self">路径</a>
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

  <div class="course-infos">
    <div class="w pr">
      <div class="path">
        <a href="/course/list">课程</a>
        <i class="path-split">\</i>
        <a href="/course/list?c=mobile"><?php echo ($url['pname']); ?></a>
        <i class="path-split">\</i>
        <a href="/course/list?c=Cocos2d-x"><?php echo ($url['name']); ?></a>
        <i class="path-split">\</i>
        <a href="/view/472">
          <span><?php echo ($title["title"]); ?></a>
        </span>
      </div>
      <div class="hd">
        <h2 class="l"><?php echo ($title["title"]); ?></h2>
      </div>
      <div class="statics clearfix">
        <div class="static-item ">

          <span class="meta-value"> <strong>高级</strong>
          </span>
          <span class="meta">难度</span> <em></em>
        </div>
        <div class="static-item static-time">
          <span class="meta-value"> <strong>4</strong>
            小时
            <strong>32</strong>
            分
          </span>
          <span class="meta">时长</span> <em></em>
        </div>
        <div class="static-item">
          <span class="meta-value">
            <strong>21892</strong>
          </span>
          <span class="meta">学习人数</span>
          <em></em>
        </div>
        <!-- <div class="static-item">
        <span class="meta-value">
          <strong>4.8分</strong>
        </span>
        <span class="meta">
          <i class="meta-star"></i>
          <i class="meta-star"></i>
          <i class="meta-star"></i>
        </span>
        <em></em>
      </div>
      -->
    </div>
    <div class="extra">
      <!-- credit -->
      <div class="share-rl-tips share-posi js-share-statue">
        <span>分享即可 +</span>
        <strong>1积分</strong>
        <span class="rule-arrow"></span>
      </div>
      <!-- share -->
      <div class="share-action r bdsharebuttonbox">
        分享
        <a href="javascript:;" class="share wx js-share" data-cmd="weixin"></a>
        <a href="javascript:;" class="share qq js-share" data-cmd="qzone"></a>
        <a href="javascript:;" class="share sina js-share" data-cmd="tsina"></a>
      </div>
      <i class="split-line r"></i>
      <a href="javascript:;" data-cmd="follow" class="follow-action r js-follow-action" data-cid="472">关注</a>
    </div>
  </div>
  <div class="info-bg" id="js-info-bg">
    <div class="cover-img-wrap">
      <img data-src="http://img.mukewang.com/55c47a0a0001322906000338.jpg" alt="" style="display: none" id="js-cover-img"></div>
    <div class="cover-mask">
      <!-- <img src="images/lbt1.jpg" alt="" width="100%">--></div>
  </div>
</div>
<div class="course-info-main clearfix w">
  <div class="info-bar clearfix">
    <div class="info-bar-box">

      <a href="/learn/472" class="btn-red start-study-btn r">体验学习</a>
      <div class="score-info">
        <div class="satisfaction-degree-info">
          <h3>综合评分</h3>
          <h4>9.8</h4>
          <div class="star-box">
            <i class="icon-star2 active"></i>
            <i class="icon-star2 active"></i>
            <i class="icon-star2 active"></i>
            <i class="icon-star2 active"></i>
            <i class="icon-star2 active"></i>
          </div>
        </div>
        <!--satisfaction-degree-info end-->
        <div class="condition-box">
          <div class="condition">
            <h3>内容实用</h3>
            <p>9.7</p>
          </div>
          <div class="condition">
            <h3>简洁易懂</h3>
            <p>10.0</p>
          </div>
          <div class="condition">
            <h3>逻辑清晰</h3>
            <p>9.7</p>
          </div>
        </div>
        <!--condition-box end-->
        <p class="person-num noLogin">
          <a href="javascript:;" target="_blank">6人评价</a>
        </p>
      </div>
      <!--score-info end--> </div>
    <!--info-bar-box end--> </div>
  <div class="content-wrap">
    <div class="content">
      <div class="course-brief">
        <h3 class="ctit">课程介绍</h3>
        <p class="auto-wrap"><?php echo ($title["summary"]); ?></p>
      </div>
      <div class="course-outline">
        <div class="bar clearfix">
          <h3 class="ctit l">课程提纲</h3>
          <ul class="tools l">
            <li class="l">
              31
              <i class="icon-video"></i>
              <span>视频</span>
            </li>
            <li class="l">
              0
              <i class="icon-test"></i>
              <span>练习题</span>
            </li>
            <li class="l">
              0
              <i class="icon-code"></i>
              <span>编程练习</span>
            </li>
          </ul>
        </div>
        <div class="outline-list">
          <ul>
          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="chapter clearfix ">
              <i class="chapter-icon"></i>
              <div class="chapter-bd l">
                <h5 class="name"><a href="/imooc/index.php/Home/CourseList/video/id/<?php echo ($vo["id"]); ?>" target="_blank" style="cursor:pointer;"><?php echo ($vo["class_title"]); ?></a></h5>
                <p class="desc">课程章节,介绍正在更新中..</p>
              </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
        </div>
      </div>
      <div class="evaluation-list">
        <h3>课程评价</h3>
        <div class="evaluation-info clearfix">
          <p class="satisfaction">
            综合评分：
            <em>9.8</em>
          </p>
          <div class="star-box">
            <i class="icon-star2 active"></i>
            <i class="icon-star2 active"></i>
            <i class="icon-star2 active"></i>
            <i class="icon-star2 active"></i>
            <i class="icon-star2 active"></i>
          </div>
          <!--star-box end-->
          <p>内容实用：9.7</p>
          <p>简洁易懂：10.0</p>
          <p>逻辑清晰：9.7</p>
          <p class="person_num">
            <em>6</em>
            位同学参与评价
          </p>
        </div>
        <!--evaluation-info end-->
        <div class="evaluation">
          <div class="evaluation-con">
            <a href="/space/u/uid/1310469" class="img-box">
              <img src="http://img.mukewang.com/5458657e000125a302200220-100-100.jpg" alt="a361938516"/>
            </a>
            <div class="content-box">
              <div class="user-info clearfix">
                <a href="/space/u/uid/1310469" class="username">a361938516</a>
                <div class="star-box">

                  <i class="icon-star2 active"></i>
                  <i class="icon-star2 active"></i>
                  <i class="icon-star2 active"></i>
                  <i class="icon-star2 active"></i>
                  <i class="icon-star2"></i>
                </div>
              </div>
              <!--user-info end-->
              <p class="content"></p>
              <div class="info">
                <span class="time l">时间：2016-05-28 20:07:15</span>
                <a href="javascript:void(0)" class="list-praise r">
                  <span class="icon-thumb"></span>
                  <em>0</em>
                </a>
              </div>

            </div>
            <!--content end--> </div>
          <!--evaluation-con end--> </div>
        <!--evaluation end-->
        <div class="evaluation">
          <div class="evaluation-con">
            <a href="/space/u/uid/3138753" class="img-box">
              <img src="http://img.mukewang.com/573abe5b0001477508530640-100-100.jpg" alt="传说408崛起"/>
            </a>
            <div class="content-box">
              <div class="user-info clearfix">
                <a href="/space/u/uid/3138753" class="username">传说408崛起</a>
                <div class="star-box">

                  <i class="icon-star2 active"></i>
                  <i class="icon-star2 active"></i>
                  <i class="icon-star2 active"></i>
                  <i class="icon-star2 active"></i>
                  <i class="icon-star2 active"></i>
                </div>
              </div>
              <!--user-info end-->
              <p class="content">雷哥，你的教程代码能不能共享一下？虽然我很认真的跟你敲代码，但是程序还是没有正常跑起来。。。</p>
              <div class="info">
                <span class="time l">时间：2016-05-03 14:00:15</span>
                <a href="javascript:void(0)" class="list-praise r">
                  <span class="icon-thumb"></span>
                  <em>0</em>
                </a>
              </div>

            </div>
            <!--content end--> </div>
          <!--evaluation-con end--> </div>
        <!--evaluation end-->
        <div class="evaluation">
          <div class="evaluation-con">
            <a href="/space/u/uid/1869614" class="img-box">
              <img src="http://img.mukewang.com/54584d1d00015c0b02200220-100-100.jpg" alt="qq_云淡风轻_4"/>
            </a>
            <div class="content-box">
              <div class="user-info clearfix">
                <a href="/space/u/uid/1869614" class="username">qq_云淡风轻_4</a>
                <div class="star-box">

                  <i class="icon-star2 active"></i>
                  <i class="icon-star2 active"></i>
                  <i class="icon-star2 active"></i>
                  <i class="icon-star2 active"></i>
                  <i class="icon-star2 active"></i>
                </div>
              </div>
              <!--user-info end-->
              <p class="content">雷哥手速不得了</p>
              <div class="info">
                <span class="time l">时间：2016-04-06 17:00:49</span>
                <a href="javascript:void(0)" class="list-praise r">
                  <span class="icon-thumb"></span>
                  <em>0</em>
                </a>
              </div>

            </div>
            <!--content end--> </div>
          <!--evaluation-con end--> </div>
        <!--evaluation end-->
        <div class="evaluation">
          <div class="evaluation-con">
            <a href="/space/u/uid/2326455" class="img-box">
              <img src="http://img.mukewang.com/55ed3f0200011af301000100-100-100.jpg" alt="sunshinesunshine"/>
            </a>
            <div class="content-box">
              <div class="user-info clearfix">
                <a href="/space/u/uid/2326455" class="username">sunshinesunshine</a>
                <div class="star-box">

                  <i class="icon-star2 active"></i>
                  <i class="icon-star2 active"></i>
                  <i class="icon-star2 active"></i>
                  <i class="icon-star2 active"></i>
                  <i class="icon-star2 active"></i>
                </div>
              </div>
              <!--user-info end-->
              <p class="content"></p>
              <div class="info">
                <span class="time l">时间：2016-03-16 15:58:45</span>
                <a href="javascript:void(0)" class="list-praise r">
                  <span class="icon-thumb"></span>
                  <em>0</em>
                </a>
              </div>

            </div>
            <!--content end--> </div>
          <!--evaluation-con end--> </div>
        <!--evaluation end-->
        <div class="evaluation">
          <div class="evaluation-con">
            <a href="/space/u/uid/2659003" class="img-box">
              <img src="http://img.mukewang.com/54585094000184e602200220-100-100.jpg" alt="zhang321"/>
            </a>
            <div class="content-box">
              <div class="user-info clearfix">
                <a href="/space/u/uid/2659003" class="username">zhang321</a>
                <div class="star-box">

                  <i class="icon-star2 active"></i>
                  <i class="icon-star2 active"></i>
                  <i class="icon-star2 active"></i>
                  <i class="icon-star2 active"></i>
                  <i class="icon-star2 active"></i>
                </div>
              </div>
              <!--user-info end-->
              <p class="content">我是新手，这个视频对我帮助很大，谢谢雷哥！</p>
              <div class="info">
                <span class="time l">时间：2016-01-24 17:33:55</span>
                <a href="javascript:void(0)" class="list-praise r">
                  <span class="icon-thumb"></span>
                  <em>0</em>
                </a>
              </div>

            </div>
            <!--content end--> </div>
          <!--evaluation-con end--> </div>
        <!--evaluation end-->
        <div class="evaluation">
          <div class="evaluation-con">
            <a href="/space/u/uid/2455238" class="img-box">
              <img src="http://img.mukewang.com/561e620600010f9801000100-100-100.jpg" alt="黑色幽默012345"/>
            </a>
            <div class="content-box">
              <div class="user-info clearfix">
                <a href="/space/u/uid/2455238" class="username">黑色幽默012345</a>
                <div class="star-box">

                  <i class="icon-star2 active"></i>
                  <i class="icon-star2 active"></i>
                  <i class="icon-star2 active"></i>
                  <i class="icon-star2 active"></i>
                  <i class="icon-star2 active"></i>
                </div>
              </div>
              <!--user-info end-->
              <p class="content">雷哥  我是用VS做的，那个PList文件是怎么生成的呀？急急急！！！！！！！！！求解惑啊</p>
              <div class="info">
                <span class="time l">时间：2015-12-04 11:55:54</span>
                <a href="javascript:void(0)" class="list-praise r">
                  <span class="icon-thumb"></span>
                  <em>0</em>
                </a>
              </div>

            </div>
            <!--content end--> </div>
          <!--evaluation-con end-->

          <div class="teacher-reply">
            <span>[讲师回复]：</span>
            plist文件本来是Mac专属，虽然在windows下也有编辑工具，不过推荐你用csv文件
          </div>
          <!--teacher-reply end--> </div>
        <!--evaluation end--> </div>
      <!--evaluation-list end--> </div>
    <!--content end-->
    <div class="aside r">
      <div class="bd">

        <div class="box mb40">
          <h4>讲师提示</h4>
          <div class="teacher-info">
            <a href="/u/1975992/courses?sort=publish" target="_blank">
              <img src='http://img.mukewang.com/user/557a888d0001b8bb16001000-80-80.jpg' width='80' height='80' />
            </a>
            <span class="tit">
              <a href="/u/1975992/courses?sort=publish" target="_blank">雷过就跑</a>
              <i class="icon-imooc"></i>
            </span>
            <span class="job">移动开发工程师</span>
          </div>
          <div class="course-info-tip">
            <dl class="first">
              <dt>课程须知</dt>
              <dd class="autowrap">需要用cocos2d-x的基础和c++的基础</dd>
            </dl>
            <dl>
              <dt>老师告诉你能学到什么？</dt>
              <dd class="autowrap">
                帧动画
待机动
攻击算法
游戏整体逻辑思路
渲染
NPC的ai处理
              </dd>
            </dl>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="clear"></div>

</div>
<!-- 视频介绍 -->
<div id="js-video-wrap" class="video pop-video" style="display:none">
  <div class="video_box" id="js-video"></div>
  <a href="javascript:;" class="pop-close icon-close"></a>
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

<a href="/user/feedback" class="elevator-msg" title="意见反馈">
  <i class="icon-feedback"></i>
</a>
<a href="javascript:" class="elevator-app" title="app下载">
  <i class="icon-appdownload"></i>
  <div class="elevator-app-box"></div>
</a>
<a href="javascript:" class="elevator-weixin no-goto" id="js-elevator-weixin" title="官方微信">
  <i class="icon-wxgzh"></i>
  <div class="elevator-weixin-box"></div>
</a>
<a href="javascript:void(0)" class="elevator-top no-goto" style="display:none" title="返回顶部" id="backTop">
  <i class="icon-up2"></i>
</a>
</div>

</div>
</body>
</html>