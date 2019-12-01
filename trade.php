<?php session_start()?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>东理淘-交易平台</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/trade.css">
    <!-- Bootstrap中文字体版 -->
    <link href="css/index1.css" rel="stylesheet">
    <!-- 自定义样式 -->
    <link href="css/index2.css" rel="stylesheet">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/tools.js"></script>
    <link rel="icon" href="image/favicon.ico" type="image/x-icon"/>
    <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
</head>
<script>
    var tim = null;
    window.onload = function () {
        var tim = null;

        var oDivsb = document.getElementById('ad_bottom');
        var oBtn = oDivsb.getElementsByTagName('span');
        var oDivst = document.getElementById('ad_top')
        var oDiv1 = oDivst.getElementsByTagName('li');
        for (var i = 0; i < oBtn.length; i++) {
            oBtn[i].index = i;
            oBtn[i].onmouseover = function () {
                for (var i = 0; i < oBtn.length; i++) {
                    oBtn[i].className = '';
                    oDiv1[i].style.display = 'none';
                    oDiv1[i].style.filter = 'alpha(opacity:' + 0 + ')';
                    oDiv1[i].style.opacity = 0;
                }
                this.className = 'active';
                oDiv1[this.index].style.display = 'block';
                changec(100, this.index);

            }
        }

        var Hbt = document.getElementById('hot_body_top');
        var Hbtdiv = Hbt.getElementsByTagName('div');
        var Hbb = document.getElementById('hot_body_bottom');
        var Hbbdiv = Hbb.getElementsByTagName('div');
        var Hbbdivli1 = Hbbdiv[0].getElementsByTagName('li');
        var Hbbdivli2 = Hbbdiv[1].getElementsByTagName('li');
        var Hbbdivli3 = Hbbdiv[2].getElementsByTagName('li');
        var Hbbdivli4 = Hbbdiv[3].getElementsByTagName('li');
        for (var i = 0; i < Hbtdiv.length; i++) {
            Hbtdiv[i].index = i;
            Hbtdiv[i].onmouseover = function () {
                for (var i = 0; i < Hbtdiv.length; i++) {
                    Hbtdiv[i].className = '';
                    Hbbdiv[i].style.display = 'none';
                }
                this.className = 'active';
                Hbbdiv[this.index].style.display = "block";
            }
        }
        for (var i = 0; i < Hbbdivli1.length; i++) {
            Hbbdivli1[i].onmouseover = function () {

                for (var i = 0; i < Hbbdivli1.length; i++) {
                    Hbbdivli1[i].className = '';
                }
                this.className = 'active1';
            }
        }
        for (var i = 0; i < Hbbdivli2.length; i++) {
            Hbbdivli2[i].onmouseover = function () {

                for (var i = 0; i < Hbbdivli2.length; i++) {
                    Hbbdivli2[i].className = '';
                }
                this.className = 'active1';
            }
        }
        for (var i = 0; i < Hbbdivli3.length; i++) {
            Hbbdivli3[i].onmouseover = function () {

                for (var i = 0; i < Hbbdivli3.length; i++) {
                    Hbbdivli3[i].className = '';
                }
                this.className = 'active1';
            }
        }
        for (var i = 0; i < Hbbdivli4.length; i++) {
            Hbbdivli4[i].onmouseover = function () {

                for (var i = 0; i < Hbbdivli4.length; i++) {
                    Hbbdivli4[i].className = '';
                }
                this.className = 'active1';
            }
        }
    }
    window.onload = function () {
        document.getElementById('l3').setAttribute('class', 'active');
        document.getElementById('l6').removeAttribute('class');
    };



    function changec(iTarget, x) {
        var oDivst = document.getElementById('ad_top')
        var oDiv1 = oDivst.getElementsByTagName('li');
        var alpha = 0;
        clearInterval(tim);
        tim = setInterval(function () {
            var speed = 0;
            if (alpha < iTarget) {
                speed = 4;
            } else {
                speed = -4;
            }
            if (alpha == iTarget) {
                clearInterval(tim);
            } else {
                alpha += speed;
                oDiv1[x].style.filter = 'alpha(opacity:' + alpha + ')';
                oDiv1[x].style.opacity = alpha / 100;
            }
        }, 30)
    }
</script>

<body>
<!-- 整站通用的头部及导航条 -->
<?php require 'header.php'; ?>
<!-- 整站通用的头部及导航条 -->
<!--头部-->
<div id="header_1">
    <!--顶部-->
    <div class="header_top">
        <!--版心-->
        <div class="header_top_center">
            <!--中部左侧-->
            <div class="h_top_left">
                欢迎来到东理淘!
            </div>
            <div class="h_top_right">
                <?php
                if (!isset($_SESSION['username'])) {
                    echo "<a href=LoginAndSignup.php>登录<a/>";
                } else {
                    echo '<a>' . $_SESSION['username'] . '<a/>';
                    echo '&nbsp;&nbsp;<a class="loginout" onclick="loginout()">注销</a>';
                }
                ?>

<!--                <a href="regist.html">注册</a>-->
            </div>
        </div>
        <div class="h_c_search">
            <form action="#">
                <input type="text" placeholder="请输入要查询的内容:" class="t_input">
                <input type="submit" class="t_button" value="查询">
            </form>
            <div class="hot">
                <a href="blank.html">显示屏</a>
                <a href="blank.html">手机</a>
                <a href="blank.html">电脑</a>
            </div>
        </div>
    </div>

</div>
<!--广告-->
<div id="ad">
    <div id="ad_title">
        <h1>今日精品</h1>
    </div>
    <div id="ad_top">
        <ul>
            <li style="display: block"><a href="#"><img src="image/pic_wxh/commodity3.jpg"
                                                        width="100%" height="400px"></a></li>
            <li><a href="#"><img src="image/pic_wxh/commodity2.jpg" width="100%"
                                 height="400px"></a></li>
            <li><a href="#"><img src="image/pic_wxh/commodity1.jpg" width="100%"
                                 height="400px"></a></li>
            <li><a href="#"><img src="image/pic_wxh/commodity4.jpg" width="100%"
                                 height="400px"></a></li>
            <li><a href="#"><img src="image/pic_wxh/commodity5.jpg" width="100%"
                                 height="400px"></a></li>
            <li><a href="http://study.lanwang.online"><img src="image/pic_wxh/commodity6.jpg" width="100%"
                                                           height="400px"></a></li>
        </ul>
    </div>
    <div id="ad_bottom">
        <span class="active"></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!--推送-->

<div id="Separate"></div>
<!--用来分隔排版-->

<div id="ms">
    <div class="ms_top">
        <ul>
            <li><a href="blank.html">高价回收</a></li>
            <li><a href="blank.html">热门交易</a></li>
            <li><a href="blank.html">低价甩卖</a></li>
        </ul>
    </div>
    <div class="ms_body">
        <div class="news">
            <?php
            require("./conn.php");
            $query_sql = "SELECT * FROM goods ORDER BY id DESC LIMIT  0 , 18";
            $result = mysql_query($query_sql);
            // 如果出现错误并退出
            if (!$result) exit('查询数据错误：' . mysql_error());

            // 循环输出
            $result = mysql_query($query_sql);
            for ($i = 0; $i < 3; $i++) {
                echo "<ul>";
                for ($j = 0; $j < 6; $j++) {
                        $gb_array = mysql_fetch_array($result);
                        $namesql = "SELECT * FROM user where id=".$gb_array['uid'];
                        $res = mysql_query($namesql);
                        $name = mysql_fetch_array($res)['username'];
                        echo '<li class="box">
                        <a href="blank.html">
                            <img src="good_img/', $gb_array['url'], '" alt="">
                        </a>
                        <a href="blank.html">
                            <p>', $gb_array['gname'], '</p>
                        </a>
                        <i class="yuan">¥</i><span class="price">', $gb_array['price'], '</span><span class="want">', $gb_array['views'], '人想要</span><br>
                        <img src="image/1.jpg" class="UserHead" alt="">
                        
                        <a href="blank.html" class="UserName">', $name, '</a>
                        <br><img src="image/credit.png" class="CreditMark" alt="">
                    </li>';
                    }
                echo "</ul>";
            }
            ?>
        </div>
    </div>
</div>

<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-2 footer-item">
                <div class="footer-list">
                    <h4>常用工具</h4>
                    <ul>
                        <li><a href="#">交易平台</a></li>
                        <li><a href="#">图片下载</a></li>
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
                        <li><a href="javascript:AddFavorite('东篱下-校园综合服务平台','http://study.lanwang.com/');">收藏本站</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 footer-item">
                <div class="footer-wechat">
                    <img class="img-responsive" src="image/index/LW_WX.jpg">
                    <p>微信
                        <sapn class="hidden-sm">号:</sapn>
                        dlx
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 footer-item footer-item-last">
                <div class="footer-contact">
                    <h2><img src="http://www.clantrip.com/static/images/icons/pc-footer-phone.png">17687974147</h2>
                    <h2><img src="http://www.clantrip.com/static/images/icons/pc-footer-qq.png">1353433900</h2>
                    <h2><img src="http://www.clantrip.com/static/images/icons/pc-footer-mob.png">17687974147</h2>
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
                <p>Copyright © 2019 dlt.com All Rights Reversed. 东篱下 <a target="_blank" href="#">赣ICP备18008511号</a>
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
</html>