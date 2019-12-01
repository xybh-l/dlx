<!--
 * @描述: 
 * @版本: 2.0
 * @作者: wxh
 * @Date: 2019-08-09 14:24:10
 * @最后修改人: wxh
 * @LastEditTime: 2019-08-09 14:24:34
 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="image/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/con_service.css">
    <!-- Bootstrap中文字体版 -->
    <link href="css/index1.css" rel="stylesheet">
    <!-- 自定义样式 -->
    <link href="css/index2.css" rel="stylesheet">
    <title>便民服务</title>
    <script>
        window.onload = function () {
            var oCCtr = document.getElementById('cct_right');
            var oCCtl = document.getElementById('cct_left');
            var oCCt = document.getElementById('center_center_bottom');
            var oIMg = oCCtl.getElementsByTagName('img');
            var oCCtrli = oCCtr.getElementsByTagName('li');
            var oCCbl = document.getElementById('ccb_left');
            var oIMg2 = oCCbl.getElementsByTagName('img');
            var oCCbr = document.getElementById('ccb_right');
            var oIMg3 = oCCbr.getElementsByTagName('img');
            oCCtl.onmouseover = function () {
                oCCtl.className = '';
                oCCtr.className = '';
                oCCbl.className = '';
                oCCbr.className = '';
                oCCtl.className = 'active';
            }
            oCCtl.onmouseout = function () {
                oCCtl.className = '';
                oCCtr.className = '';
                oCCbl.className = '';
                oCCbr.className = '';
            }
            oCCtr.onmouseover = function () {
                oCCtl.className = '';
                oCCtr.className = '';
                oCCbl.className = '';
                oCCbr.className = '';
                oCCtr.className = 'active';
            }
            oCCtr.onmouseout = function () {
                oCCtl.className = '';
                oCCtr.className = '';
                oCCbl.className = '';
                oCCbr.className = '';
            }
            oCCbl.onmouseover = function () {
                oCCtl.className = '';
                oCCtr.className = '';
                oCCbl.className = '';
                oCCbr.className = '';
                oCCbl.className = 'active';
            }
            oCCbl.onmouseout = function () {
                oCCtl.className = '';
                oCCtr.className = '';
                oCCbl.className = '';
                oCCbr.className = '';
            }
            oCCbr.onmouseover = function () {
                oCCtl.className = '';
                oCCtr.className = '';
                oCCbl.className = '';
                oCCbr.className = '';
                oCCbr.className = 'active';
            }
            oCCbr.onmouseout = function () {
                oCCtl.className = '';
                oCCtr.className = '';
                oCCbl.className = '';
                oCCbr.className = '';
            }
        }
        window.onload = function () {
            document.getElementById('l4').setAttribute('class','active');
            document.getElementById('l6').removeAttribute('class');
        };
    </script>
</head>

<body>
    <!-- 整站通用的头部及导航条 -->
    <?php require 'header.php' ?>
    <!-- 整站通用的头部及导航条 -->
    <!--中部-->
    <div id="center">
        <div id="center_center">
            <div class="function">快递代取<a href="express.html"><img src="image/pic_wxh/kuaididaina.jpg" alt=""></a></div>
            <div class="function">失物招领<a href="lostthing.html"><img src="image/pic_wxh/shiwuzhaoling.jpg" alt=""></a></div>
            <div class="function">意见反馈<a href="notice.php"><img src="image/pic_wxh/fankui.jpg" alt=""></a></div>
        </div>

        <!-- <a href="express.html"><img src="image/pic_wxh/kuaididaina.jpg" height="400px" width="100%"></a> -->
        <!-- <div id="center_margin">
                <div id="center_center">
                        <div id="center_center_top"> -->
        <!-- <div id="cct_left">
                            
                            </div>
                            <div id="cct_right">
                                <ul>
                                    <li>校园便民服务开始啦！</li>
                                    <li>无论您有什么烦恼，都可以让东理淘帮您解决</li>
                                    <li>如果您没有时间去拿快递或者不想在拿快递的时候排队浪费时间，你可以选</li>
                                    <li>择东理淘代拿快递服务</li>
                                    <li>如果您的手机、校园一卡通、水卡等物品在校园内丢失或者您捡到了物品，</li>
                                    <li>都可以在挂失或者上传至东理淘上。</li>
                                    <li>其次，您还可以进行意见反馈，给我们提出您宝贵的意见，我们的目标就是</li>
                                    <li>让我们大学校园生活更便捷</li>
                                    <li>您的快乐心情就是我们东理淘的初衷！</li>
                                </ul>
                            </div>
                        </div>
                        <div id="center_center_bottom">
                            <div id="ccb_left">
                                <a href="lostthing.html" ><img src="image/pic_wxh/shiwuzhaoling.jpg" width="100%" height="400px"></a>
                            </div>
                            <div id="ccb_right">
                                <a href="blank.html"><img src="image/pic_wxh/fankui.jpg" width="100%" height="400px"></a>
                            </div>
                        </div> -->
        <!-- </div>
        </div>
           -->
    </div>

    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-2 footer-item">
                    <div class="footer-list">
                        <h4>常用工具</h4>
                        <ul>
                            <li><a href="#"">交易平台</a></li>
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
                            <li><a href="javascript:AddFavorite('东篱下-校园综合服务平台','http://study.lanwang.com/');">收藏本站</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-2 footer-item">
                    <div class="footer-wechat">
                        <img class="img-responsive" src="image/index/LW_WX.jpg">
                        <p>微信<sapn class="hidden-sm">号:</sapn>dlx</p>
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
                            <img src="http://www.clantrip.com/static/images/ghs.png" style="float:left;" />
                            <p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#fafafa;">
                                赣ICP备18008511号</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var fnTextPopup = function (arr, options) {
            // arr参数是必须的
            if (!arr || !arr.length) {
                return;
            }
            // 主逻辑
            var index = 0;
            document.documentElement.addEventListener('click', function (event) {
                var x = event.pageX,
                    y = event.pageY;
                var eleText = document.createElement('span');
                eleText.className = 'text-popup';
                this.appendChild(eleText);
                if (arr[index]) {
                    eleText.innerHTML = arr[index];
                } else {
                    index = 0;
                    eleText.innerHTML = arr[0];
                }
                // 动画结束后删除自己
                eleText.addEventListener('animationend', function () {
                    eleText.parentNode.removeChild(eleText);
                });
                // 位置
                eleText.style.left = (x - eleText.clientWidth / 2) + 'px';
                eleText.style.top = (y - eleText.clientHeight) + 'px';
                // index递增
                index++;
            });
        };

        fnTextPopup(['富强', '民主', '文明', '和谐', '自由', '平等', '公正', '法治', '爱国', '敬业', '诚信', '友善']);

        ! function () {

            function n(n, e, t) {

                return n.getAttribute(e) || t

            }



            function e(n) {

                return document.getElementsByTagName(n)

            }



            function t() {

                var t = e("script"),

                    o = t.length,

                    i = t[o - 1];

                return {

                    l: o,

                    z: n(i, "zIndex", -1),

                    o: n(i, "opacity", .5),

                    c: n(i, "color", "0,0,0"),

                    n: n(i, "count", 99)

                }

            }



            function o() {

                a = m.width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth,
                    c = m.height = window.innerHeight || document.documentElement.clientHeight || document.body
                    .clientHeight

            }



            function i() {

                r.clearRect(0, 0, a, c);

                var n, e, t, o, m, l;

                s.forEach(function (i, x) {

                    for (i.x += i.xa, i.y += i.ya, i.xa *= i.x > a || i.x < 0 ? -1 : 1, i.ya *= i.y > c || i.y <
                        0 ? -1 : 1, r.fillRect(i.x - .5, i.y - .5, 1, 1), e = x + 1; e < u.length; e++) n = u[
                        e], null !== n.x && null !== n.y && (o = i.x - n.x, m = i.y - n.y, l = o * o + m *
                        m,
                        l < n.max && (n === y && l >= n.max / 2 && (i.x -= .03 * o, i.y -= .03 * m), t = (n
                                .max - l) / n.max, r.beginPath(), r.lineWidth = t / 2, r.strokeStyle =
                            "rgba(" + d.c + "," + (t + .2) + ")", r.moveTo(i.x, i.y), r.lineTo(n.x, n.y), r
                            .stroke()))

                }), x(i)

            }

            var a, c, u, m = document.createElement("canvas"),

                d = t(),

                l = "c_n" + d.l,

                r = m.getContext("2d"),

                x = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window
                .mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame ||
                function (n) {

                    window.setTimeout(n, 1e3 / 45)

                },

                w = Math.random,

                y = {

                    x: null,

                    y: null,

                    max: 2e4

                };

            m.id = l, m.style.cssText = "position:fixed;top:0;left:0;z-index:" + d.z + ";opacity:" + d.o, e("body")[0]
                .appendChild(m), o(), window.onresize = o, window.onmousemove = function (n) {

                    n = n || window.event, y.x = n.clientX, y.y = n.clientY

                }, window.onmouseout = function () {

                    y.x = null, y.y = null

                };

            for (var s = [], f = 0; d.n > f; f++) {

                var h = w() * a,

                    g = w() * c,

                    v = 2 * w() - 1,

                    p = 2 * w() - 1;

                s.push({

                    x: h,

                    y: g,

                    xa: v,

                    ya: p,

                    max: 6e3

                })

            }

            u = s.concat([y]), setTimeout(function () {

                i()

            }, 100)

        }();
    </script>
    <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?54a553e5465b6608228037bd7ebfb10c";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</body>

</html>