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
<?php
//    if(isset($_REQUEST['sid']))
//        session_id($_REQUEST['sid']);
session_start();
setcookie('username', $_SESSION['username']);
?>
<!DOCTYPE html>
<html class="no-js lt-ie9 lt-ie8 lt-ie7">
<![endif]-->
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<html class="no-js lt-ie9"> <![endif]-->
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width,height=device-height,initial-scale=1.0, maximum-scale=1.0,  user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <title>东理淘-交流天地</title>
    <!--设置图标-->
    <link rel="icon" href="image/favicon.ico" type="image/x-icon"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="description" content="">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link type="text/css" rel="stylesheet" href="css/interflow.css">
    <link type="text/css" rel="stylesheet" href="Swiper/swiper-4.5.0/dist/css/swiper.min.css">
    <link type="text/css" rel="stylesheet" charset="UTF-8"
          href="https://translate.googleapis.com/translate_static/css/translateelement.css">
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
        window.onload = function () {
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
        window.onload = function () {
            $('#nickname').val(<?php echo "'", $_SESSION['username'], "'" ?>);
        }
    </script>
    <style>
        * {
            text-decoration: none;
        }
    </style>
</head>

<body>
<div id="body">
    <!-- 整站通用的头部及导航条 -->
    <?php require 'header.php' ?>
    <!-- 整站通用的头部及导航条 -->
    <div id="Notice">
        <h1>公告栏</h1>
        <div class="swiper-container">
            <!--图片-->
            <div class="swiper-wrapper" style="transform: translate3d(-121px, 0px, 0px); transition-duration: 0ms;">
                <div class="swiper-slide"
                     style="background-image: url(image/1.jpg); font-size:50px; line-height: 400PX;background-size: 100% 100%; transform: translate3d(0px, 0px, -200px) rotateX(0deg) rotateY(100deg); z-index: -1; transition-duration: 0ms;">
                    平台基本建设完成
                    <div class="swiper-slide-shadow-left" style="opacity: 2; transition-duration: 0ms;"></div>
                    <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
                </div>
                <div class="swiper-slide swiper-slide-prev"
                     style="background-image: url(image/1.jpg); font-size:50px; line-height: 400PX;background-size: 100% 100%; transform: translate3d(0px, 0px, -100px) rotateX(0deg) rotateY(50deg); z-index: 0; transition-duration: 0ms;">
                    2019年12月2日
                    <div class="swiper-slide-shadow-left" style="opacity: 1; transition-duration: 0ms;"></div>
                    <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
                </div>
                <div class="swiper-slide swiper-slide-active"
                     style="background-image: url(image/1.jpg); font-size:50px; line-height: 400PX;background-size: 100% 100%; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg); z-index: 1; transition-duration: 0ms;">
                    1:01
                    <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
                    <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
                </div>
                <div class="swiper-slide swiper-slide-next"
                     style="background-image: url(image/1.jpg);font-size:50px; line-height: 400PX; background-size: 100% 100%; transform: translate3d(0px, 0px, -100px) rotateX(0deg) rotateY(-50deg); z-index: 0; transition-duration: 0ms;">
                    星期一
                    <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
                    <div class="swiper-slide-shadow-right" style="opacity: 1; transition-duration: 0ms;"></div>
                </div>
                <div class="swiper-slide"
                     style="background-image: url(image/1.jpg);font-size:50px; line-height: 400PX; background-size: 100% 100%; transform: translate3d(0px, 0px, -200px) rotateX(0deg) rotateY(-100deg); z-index: -1; transition-duration: 0ms;">
                    蓝旺
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
            <?php
            if (!isset($_SESSION['username'])) {
                echo "<a href=LoginAndSignup.php>登录<a/>";
            } else {
                echo '<a href="#">' . $_SESSION['username'] . '<a/>';
                echo '<a href="#" style="text-decoration: none" onclick="loginout()">&nbsp;&nbsp;注销</a>';
            }
            ?>
        </div>

        <div id="ListBody">
            <?php
            session_start();
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
                if (isset($_SESSION['auth']) and $_SESSION['auth'] == 0)
                    echo '<p style="float:right;"><a id="deleteMessage" onclick="deleteMessage(' . $gb_array["id"] . ');">删除</a></p>';
                echo '<div style="float: left;height: 120px;width: 120px;"><img style="width: 120px;height: 120px;" src="image/head.png" alt=""></div>';
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
                        echo '&nbsp;<a href="notice.php?p=', $i, '&sid=', $_COOKIE[session_name()], '">' . $i . '</a>';
                    }
                }
            }
            echo '</div>';
            ?>
            <br><br><br>
            <!--            <form action="submiting.php" method="post" onsubmit="InputCheck(this)">-->
            <!--            onsubmit="submitMessage(this)"-->
            <form>
                <input id="nickname" name="nickname" value="" type="hidden">
                <div class="form-group">
                    <label for="exampleInputWords">留言内容</label>
                    <textarea class="form-control" name="content" rows="4" placeholder="请输入留言信息"></textarea>
                </div>
                <center>
                    <button name="submit"
                            class="btn btn-default btn-lg" onclick="submitMessage()"
                            onsubmit="submitMessage()">发布
                    </button>
                </center>
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
                    <a target="_blank" href="#"
                       style="display:inline-block;text-decoration:none;height:20px;line-height:20px;">
                        <img src="http://www.clantrip.com/static/images/ghs.png" style="float:left;"/>
                        <p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#fafafa;">
                            赣ICP备18008511号</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    function deleteMessage($mid) {
        if(confirm("是否确定删除?")){
            $.ajax({
                type:"post",
                url:"deleteMessage.php",
                data:{
                    messageID: $mid
                },
                success:function() {
                    location.reload();
                }
            })
        }
    }

    function submitMessage() {
        if(document.cookie.indexOf('username=')){
            $.ajax({
                url:"submiting.php",
                type:"post",
                data:{
                    content: $('form-control').val(),
                    submit: 'post',
                    nickname: $('#nikename').val()
                },
                success: function (data) {
                    data = JSON.parse(data);
                    if(data.status_code == 200 && data.message == '留言成功'){
                        alert(1);
                        // location.reload();
                    }
                }
            })
        }else {
            alert("请先登录!");
            return false;
        }
    }
</script>
</html>