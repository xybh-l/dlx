<!--功能:留言板HTML代码-->
<!--修改时间:2019年5月25日20:12:32-->
<!--修改人:蓝旺-->
<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"-->
<!--        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->
<!--<html xmlns="http://www.w3.org/1999/xhtml">-->
<!--<head>-->


<!--</head>-->
<!--<body>-->
<!--<h3>留言列表</h3>-->
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<!--<![endif]-->
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0, maximum-scale=1.0,  user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <title>东理淘-交流天地</title>
    <!--设置图标-->
    <link rel="icon" href="image/favicon.ico" type="image/x-icon" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link type="text/css" rel="stylesheet" href="css/interflow.css">
    <link type="text/css" rel="stylesheet" href="Swiper/swiper-4.5.0/dist/css/swiper.min.css">
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css">
    <!-- Bootstrap中文字体版 -->
    <link href="css/index1.css" rel="stylesheet">
    <!-- 自定义样式 -->
    <link href="css/index2.css" rel="stylesheet">
    <script type="text/javascript" src="Swiper/swiper-4.5.0/dist/js/swiper.min.js"></script>
    <script>
        /*
            功能：这个是实现 留言窗口位置设置以及动画响应 的代码
            相关元素：它和  id = "form_box"  的HTML标签及相对应的CSS代码块有关
            代码编写者： 兰可易
            变量注释：
                Clint_X 			可视页面的高度
                Clint_Y 			可视页面的宽度
                FBH     			id = "form_box"的句柄
                FBHPB				id = "form_box"的子类id = "PushButton"的句柄
                WST_onclick			留言窗口点击伸缩变换
                WST_onmouseover		留言窗口伸缩触碰（进入）变换
                WST_onmouseover		留言窗口伸缩触碰（离开）变换
                flag    			监测窗口是否已经被点击
        */
        window.onload = function() {
            //声明对象
            //			var Clint_X = (document.documentElement.clientHeight == 0) ? document.body.clientHeight : document.documentElement.clientHeight;
            //			var Clint_Y = (document.documentElement.clientWidth == 0) ? document.body.clientWidth : document.documentElement.clientWidth;
            var FBH = document.getElementById("form_box");
            var FBHPB = document.getElementById("PushButton");
            var flag = 1;

            //定义各对象
            function WST_onclick() {
                if (flag == 1) {
                    document.getElementById("form_box").style.bottom = '-390px';
                    flag = 0;
                    return;
                }
                if (flag == 0) {
                    document.getElementById("form_box").style.bottom = '0px';
                    flag = 1;
                    return;
                }
            }

            function WST_onmouseover() {
                if (flag == 0) {
                    document.getElementById("form_box").style.bottom = '-390px';
                }
            }

            function WST_onmouseout() {
                if (flag == 0) {
                    document.getElementById("form_box").style.bottom = '-410px';
                }
            }

            //对象实例化
            FBHPB.onclick = WST_onclick;
            FBH.onmouseover = WST_onmouseover;
            FBH.onmouseout = WST_onmouseout;
        }
    </script>
    <script language="JavaScript">
        function InputCheck(form1) {
            if (form1.nickname.value == "") {
                alert("请输入您的昵称。");
                form1.nickname.focus();
                return (false);
            }
            if (form1.content.value == "") {
                alert("留言内容不可为空。");
                form1.content.focus();
                return (false);
            }
        }
    </script>
    <script>
        /*
            功能：这个是实现 X 的代码
            相关元素：它和 X 的HTML标签及相对应的CSS代码块有关
            代码编写者： 兰可易
            变量注释：
        */
        //		console.log();	检查专业函数
        window.onload = function() {

        }
    </script>
</head>

<body>
    <div id="body">
        <!-- 整站通用的头部及导航条 -->
        <div id="header">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" style="padding:0 0 0 15px;" href="http://study.lanwang.online"><img alt="Brand" style="max-width:130px;" src="image/logo4.png"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="http://study.lanwang.online">首页 </a>
                            </li>
                            <li><a href="schoolnews.html">校园新闻</a></li>
                            <li><a href="trade.html">交易平台</a></li>
                            <li><a href="con_service.html">便民服务</a></li>
                            <li><a href="L_materials.html">学习资料</a></li>
                            <li class="active"><a href="#">交流天地<span class="sr-only">(current)</span></a>
                                <p class="line-top hidden-xs"></p>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>
        <!-- 整站通用的头部及导航条 -->
        <div id="Notice">
            <h1>公告栏</h1>
            <div class="swiper-container">
                <!--图片-->
                <div class="swiper-wrapper" style="transform: translate3d(-121px, 0px, 0px); transition-duration: 0ms;">
                    <div class="swiper-slide" style="background-image: url(image/1.jpg); background-size: 100% 100%; transform: translate3d(0px, 0px, -200px) rotateX(0deg) rotateY(100deg); z-index: -1; transition-duration: 0ms;">
                        <div class="swiper-slide-shadow-left" style="opacity: 2; transition-duration: 0ms;"></div>
                        <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
                    </div>
                    <div class="swiper-slide swiper-slide-prev" style="background-image: url(image/1.jpg); background-size: 100% 100%; transform: translate3d(0px, 0px, -100px) rotateX(0deg) rotateY(50deg); z-index: 0; transition-duration: 0ms;">
                        <div class="swiper-slide-shadow-left" style="opacity: 1; transition-duration: 0ms;"></div>
                        <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
                    </div>
                    <div class="swiper-slide swiper-slide-active" style="background-image: url(image/1.jpg); background-size: 100% 100%; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg); z-index: 1; transition-duration: 0ms;">
                        <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
                        <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
                    </div>
                    <div class="swiper-slide swiper-slide-next" style="background-image: url(image/1.jpg); background-size: 100% 100%; transform: translate3d(0px, 0px, -100px) rotateX(0deg) rotateY(-50deg); z-index: 0; transition-duration: 0ms;">
                        <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
                        <div class="swiper-slide-shadow-right" style="opacity: 1; transition-duration: 0ms;"></div>
                    </div>
                    <div class="swiper-slide" style="background-image: url(image/1.jpg); background-size: 100% 100%; transform: translate3d(0px, 0px, -200px) rotateX(0deg) rotateY(-100deg); z-index: -1; transition-duration: 0ms;">
                        <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
                        <div class="swiper-slide-shadow-right" style="opacity: 2; transition-duration: 0ms;"></div>
                    </div>
                </div>
                <!-- 分页按钮 -->
                <div class="swiper-pagination swiper-pagination-bullets">
                    <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
                    <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
                    <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
                    <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
                    <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
                </div>
            </div>
            <script src="Swiper/swiper-4.5.0/dist/js/swiper.min.js"></script>
            <script>
                var swiper = new Swiper('.swiper-container', {
                    pagination: '.swiper-pagination',
                    effect: 'coverflow',
                    grabCursor: true,
                    centeredSlides: true,
                    slidesPerView: 'auto',
                    coverflow: {
                        rotate: 50,
                        stretch: 0,
                        depth: 100,
                        modifier: 1,
                        slideShadows: true
                    }
                });
            </script>
        </div>

        <div id="MessageBoard">
            <div id="MessageBoardTitle">
                <h1>留言栏</h1>
            </div>

            <div id="ListBody">
                <?php
                error_reporting(0);
                /*****************************
                 *notice.php 主页面文件
                 *****************************/
                // 引用相关文件
                require("./conn.php");
                require("./config.php");
                error_reporting(E_ALL ^ E_NOTICE);
                // 确定当前页数 $p 参数
                $p = $_GET['p'] ? $_GET['p'] : 1;
                // 数据指针
                $offset = ($p - 1) * $pagesize;

                $query_sql = "SELECT * FROM guestbook ORDER BY id DESC LIMIT  $offset , $pagesize";
                $result = mysql_query($query_sql);
                // 如果出现错误并退出
                if (!$result) exit('查询数据错误：' . mysql_error());

                // 循环输出
                while ($gb_array = mysql_fetch_array($result)) {
                    //    功能:显示留言内容(昵称,时间,内容),可使用js代码替换
                    //            echo可使用js替换内容,可将其作为div修改内容
                    //    修改时间:2019年5月25日20:15:40
                    //    修改人:蓝旺
                    $content = nl2br($gb_array['content']);
                    echo '<div style="height: 160px;font-size: 20px;">';
                    echo '<div style="float: left;height: 120px;width: 120px;"><img style="width: 120px;height: 120px;" src="image/head.png"></div>';
                    echo '<div style="float:left; width: 400px;height: 180px;">';
                    echo '<p style="font-size: 25px;margin: 0 0;">';
                    echo $gb_array['nickname'], '&nbsp;';
                    echo '</p>';
                    echo '<p style="font-size: 10px;margin: 0 0;">';
                    echo date("Y-m-d H:i", $gb_array['createtime']);
                    echo '</p>';
                    echo '<p style="font-size: 18px;margin: 0 0; width: 800px;">';
                    echo '', nl2br($gb_array['content']);
                    echo '</p>';
                    echo '</div>';
                    echo '<div style="float: right; margin-top:140px;font-size: 10px;">';
                    echo '<a href="#">点赞</a>';
                    echo '&nbsp&nbsp&nbsp&nbsp';
                    echo '<a href="#">评论</a>';
                    echo '</div>';
                    if (!empty($gb_array['replytime'])) {
                        echo '----------------------------<br />';
                        echo '管理员回复于：', date("Y-m-d H:i", $gb_array['replytime']), '<br />';
                        echo nl2br($gb_array['reply']), '<br /><br />';
                    }
                    echo '</div>';
                    echo '<hr />';
                }

                //计算留言页数
                $count_result = mysql_query("SELECT count(*) FROM guestbook");
                $count_array = mysql_fetch_array($count_result);
                $pagenum = ceil($count_array['count(*)'] / $pagesize);
                echo '<div style="text-align: center;width: 100%">';
                echo '共 ', $count_array['count(*)'], ' 条留言';
                echo '</div>';
                echo '<div style="text-align: center;width: 100%">';
                if ($pagenum > 1) {
                    for ($i = 1; $i <= $pagenum; $i++) {
                        if ($i == $p) {
                            echo '&nbsp;[', $i, ']';
                        } else {
                            echo '&nbsp;<a href="notice.php?p=', $i, '">' . $i . '</a>';
                        }
                    }
                }
                echo '</div>';
                ?>
                <br><br><br>
                <form action="submiting.php" method="post" onsubmit="InputCheck(this)">
                    <div class="form-group">
                        <label for="exampleInputID">昵称</label>
                        <input type="text" name="nickname" class="form-control" id="exampleInputID" placeholder="输入昵称">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">电子邮箱</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="输入邮箱">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputWords">留言内容</label>
                        <textarea class="form-control" name="content" rows="4" placeholder="请输入留言信息"></textarea>
                    </div>
                    <center><button type="submit" name="submit" class="btn btn-default btn-lg">发布</button></center>
                </form>
            </div>
        </div>
        <!--功能:留言板PHP代码,动态显示留言内容-->
        <!--修改时间:2019年5月25日20:13:25-->
        <!--修改人:蓝旺-->
    </div>
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-2 footer-item">
                    <div class="footer-list">
                        <h4>常用工具</h4>
                        <ul>
                            <li><a href="#">交易平台</a></li>
                            <li><a href=" #">图片下载</a></li>
                            <li><a href="#">资料下载</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-2 footer-item">
                    <div class="footer-list">
                        <h4>快速链接</h4>
                        <ul>
                            <li><a href="express.html">快递代取</a></li>
                            <li><a href="#">留言板</a></li>
                            <li><a href="#">公告栏</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-2 footer-item">
                    <div class="footer-list">
                        <h4>关于我们</h4>
                        <ul>
                            <li><a href="#">关于我们</a></li>
                            <li><a href="#">服务协议</a></li>
                            <li>
                                <a href="javascript:AddFavorite('东篱下-校园综合服务平台','http://study.lanwang.com/');">收藏本站</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-2 footer-item">
                    <div class="footer-wechat">
                        <img class="img-responsive" src="image/index/LW_WX.jpg">
                        <p>微信
                            <span class="hidden-sm">号:</span>
                            dlx
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 footer-item footer-item-last">
                    <div class="footer-contact">
                        <h2><img src="http://www.clantrip.com/static/images/icons/pc-footer-phone.png">17687974147
                        </h2>
                        <h2><img src="http://www.clantrip.com/static/images/icons/pc-footer-qq.png">1353433900</h2>
                        <h2><img src="http://www.clantrip.com/static/images/icons/pc-footer-mob.png">17687974147
                        </h2>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p>Copyright 2019 dlt.com All Rights Reversed. 东篱下 <a target="_blank" href="#">赣ICP备18008511号</a>
                    </p>

                    <div style="width:300px;margin:0 auto; padding:20px 0; text-align: center;">
                        <a target="_blank" href="#" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;">
                            <img src="http://www.clantrip.com/static/images/ghs.png" style="float:left;" />
                            <p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#fafafa;">
                                赣ICP备18008511号</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>