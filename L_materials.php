<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>东理淘-学习资料</title>
    <!-- <link type="text/css" rel ="stylesheet" href="Swiper/swiper-4.5.0/dist/css/swiper.min.css"> -->
    <!-- <link type="text/css" rel ="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css"> -->
    <link rel="stylesheet" href="css/L_materials.css">
    <link rel="icon" href="image/favicon.ico" type="image/x-icon" />
    <link href="css/index1.css" rel="stylesheet">
    <!-- 自定义样式 -->
    <link href="css/index2.css" rel="stylesheet">
    <!-- <script src="Swiper/swiper-4.5.0/dist/js/swiper.min.js"></script> -->
    <script src="js/move2.js"></script>
    <script>
        window.onload = function () {
            document.getElementById('l5').setAttribute('class','active');
            document.getElementById('l6').removeAttribute('class');
        };
        window.onload = function () {
            var oDiv = document.getElementById('bbc_second_center');
            var oBtn = oDiv.getElementsByTagName('span');
            var oUl = oDiv.getElementsByTagName('ul')[0];
            //var nowZindex=2;
            //var spanZindex=3;
            var now=0;
            var tim=null;
            var speed=0;
            for (var i = 0; i < oBtn.length; i++) {
                oBtn[i].index = i;
                oBtn[i].onmouseover = function () {
                    for (var i = 0; i < oBtn.length; i++) {
                        now=this.index;
                        tab();
                        this.className = 'active';
                    }
            }
        }
            function tab()
        {
            for(var i=0;i<oBtn.length;i++)
            {
                oBtn[i].className='';
            }
            oBtn[now].className='active';
            startMove(oUl,{top: -400*now});
        }
        function next()
        {
            now++;
            if(now==oBtn.length)
            {
                now=0;
            }
            tab();
        }
        var timer=setInterval(next, 4000)
        {
            oDiv.onmouseover=function()
            {
                clearInterval(timer);
            }
            oDiv.onmouseout=function()
            {
                timer=setInterval(next, 4000);
            }
        }
        }
    
    </script>
</head>
<body>
     <!-- 整站通用的头部及导航条 -->
     <?php require 'header.php' ?>
    <!-- 整站通用的头部及导航条 -->
     <!-- 网站中间部分 -->
     <div id='body_center'>
          <div id='body_center_center'>
    <!-- 中间第一段 --> <div id='bcc_first'>
                            <div id='bcc_first_icon'>
                                </div>
                                <p>
                                     东理淘校园综合平台即将上线，我们将提供书籍资料等资源分享渠道，敬请大家关注！
                                </p>
                        </div>
    <!--中间第二段  --> <div id='bbc_second'>
                             <div id='bbc_second_left'>
                                 <div><img src="image/pic_wxh/new_len1.png" height="70px" width="90%"></div>
                                 <div><img src="image/pic_wxh/new_len2.png" height="70px" width="90%" ></div>
                                 <div><img src="image/pic_wxh/new_len3.png" height="70px" width="90%" ></div>
                                 <div><img src="image/pic_wxh/new_len4.png" height="70px" width="90%" ></div>
                                 <div><img src="image/pic_wxh/new_len5.jpg" height="70px" width="90%" ></div>
                             </div>
                             <div id='bbc_second_center'>
                                <ul id='bbcsc_top'>
                                        <li style="display: block"><a href="#"><img src="image/pic_wxh/new_len1.png" width="100%" height="400px"></a></li> 
                                        <li><a href="#"><img src="image/pic_wxh/newlen6.jpg" width="100%" height="400px"></a></li> 
                                        <li><a href="#"><img src="image/pic_wxh/newlen8.jpg" width="100%" height="400px"></a></li> 
                                        <li><a href="#"><img src="image/pic_wxh/new_len4.png" width="100%" height="400px"></a></li> 
                                        <li><a href="#"><img src="image/pic_wxh/new_len5.jpg" width="100%" height="400px"></a></li> 
                                        <li><a href="#"><img src="image/pic_wxh/commodity6.jpg" width="100%" height="400px"></li> 
                                        </ul>
                                <div id='bbcsc_bottom'>
                                    <span class="active"></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                             </div>
                             <div id='bbc_second_right'>
                                 <div id='bbcsr_first'> 
                                   <div><img src="image/pic_wxh/tubiao1.png" height="50px" width="100%"></div>
                                   <div><img src="image/pic_wxh/tubiao2.png"  height="50px" width="100%"></div>
                                   <div><img src="image/pic_wxh/tubiao3.png" height="50px" width="100%"></div>
                                   <div><img src="image/pic_wxh/tubiao4.png"  height="50px" width="100%"></div>
                                   <div><img src="image/pic_wxh/tubiao5.png"  height="50px" width="100%"></div>
                                 </div>
                                 <div id='bbcsr_second'>
                                     <div id='bbcsr_second_top'>
                                         邮件订阅
                                     </div>
                                     <div id='bbcsr_second_bottom'>
                                         订阅精彩内容
                                         <div>
                                                <input  type="text" placeholder="your@email.com" style="width: 80%">
                                                <input class="button" type="button" value="订阅" style="width: 18%">
                                         </div>
                                     </div>
                                 </div>
                                 <div id="bbcsr_tird">
                                     <div id="bbcsr_tird_top">
                                         热门标签
                                     </div>
                                     <div id="bbcsr_tird_bottom">
                                        <div id="bbcsrtb_left">
                                            <div style="background: rgb(199,237,233)">织梦模板（20）</div>
                                            <div style="background: rgb(175,215,237)">dedecms模板（113）</div>
                                            <div style="background: rgb(92,167,186)">网络游戏源码（95）</div>
                                            <div style="background: rgb(255,66,93)">dececms（63）</div>
                                            <div style="background: rgb(147,224,255)">网页游戏源码（52）</div>
                                            <div style="background: rgb(199,237,233)">帝国cms源码（46）</div>
                                            <div style="background: rgb(175,215,237)">dedecms源码（37）</div>
                                            <div style="background: rgb(92,167,186)">Discuz（31）</div>
                                            <div style="background: rgb(255,66,93)">帝国源码（30）</div>
                                            <div style="background: rgb(147,224,255)">棋牌游戏源码（30）</div>
                                        </div>
                                        <div id="bbcsrtb_right">
                                                <div style="background:rgb(147,224,255)">破解版（115）</div>
                                                <div style="background: rgb(255,66,93)">游戏源码（103）</div>
                                                <div style="background: rgb(92,167,186)">微信源码（67）</div>
                                                <div style="background: rgb(175,215,237)">92GAME源码（53）</div>
                                                <div style="background: rgb(199,237,233)">织梦源码（48）</div>
                                                <div  style="background: rgb(147,224,255)">安卓（41）</div>
                                                <div style="background: rgb(255,66,93)">源码（34）</div>
                                                <div style="background:rgb(92,167,186)">手机游戏源码（31）</div>
                                                <div style="background:rgb(175,215,237)">手游源码（30）</div>
                                                <div style="background: rgb(199,237,233)">小程序源码（29）</div>
                                        </div>
                                     </div>
                                 </div>
                             </div>
                        </div>
        <!-- 中间第三段 -->
           <div id='bbc_tird'>
               <div id='bbc_trid_left'>
                  <div id='bbctl_1'>
                      <div id="bbctl_1_top">
                          热门排行
                        </div>
                      <div id="bbctl_1_bottom">
                         <ul>
                             <li><p>1. 2018最新小姐威客程序源码附带完整安装视频教程   评论(26) 319赞</p></li>
                             <li><p>2. 2017最新PHP版站群全自动泛解析群程序附6000W关键词  评论(6) 74赞</p></li>
                             <li><p>3. 南方CSS软件 初学入门精通 有声视频教程大全  评论(16) 77赞</p></li>
                             <li><p>4. 2017最新PHP版站群全自动泛解析群程序附6000W关键词  评论(6) 74赞</p></li>
                             <li><p>5. 2017最新PHP版站群全自动泛解析群程序附6000W关键词  评论(6) 74赞</p></li>
                             <li><p>6. 百万淘客站群4.0商业破解版下载，淘金点模式，泛目录模式  评论(4) 32赞</p></li>
                             <li><p>7. 代理IP提取网站源码，DEDECMS内核，代理自助提取系统  评论(2) 45赞</p></li>
                         </ul>
                      </div>
                  </div>
                  <div id="bbctl_2">
                        <div id="bbctl_1_top">
                                最新文章
                              </div>
                            <div id="bbctl_1_bottom">
                               <ul>
                                   <li><p><a>1.2018最新小姐威客程序源码附带完整安装视频教程</a></p></li>
                                   <li><p><a>2. 2017最新PHP版站群全自动泛解析群程序附6000W关键词</a></p></li>
                                   <li><p><a>3. 南方CSS软件 初学入门精通 有声视频教程大全</a></p></li>
                                   <li><p><a>4. 2017最新PHP版站群全自动泛解析群程序附6000W关键词</a></p></li>
                                   <li><p><a>5. 2017最新PHP版站群全自动泛解析群程序附6000W关键词</a></p></li>
                                   <li><p><a>6. 百万淘客站群4.0商业破解版下载，淘金点模式，泛目录模式</a></p></li>
                                   <li><p><a>7. 代理IP提取网站源码，DEDECMS内核，代理自助提取系统</a></p></li>
                               </ul>
                            </div>
                  </div>
                  <div id="bbctl_3">
                        <div id="bbctl_3_top">
                                热门书籍
                              </div>
                            <div id="bbctl_3_bottom">
                               <div id="bbctl_3b_top">
                                   <div><a href="#"><img src="image/pic_wxh/wenyi.jpg" width="100%" height="160px"></a>
                                   <p></p>
                                </div>
                                   <div><a href="#"><img src="image/pic_wxh/wenyi2.jpg" width="100%" height="160px"></a></div>
                                   <div><a href="#"><img src="image/pic_wxh/wenyi3.jpg" width="100%" height="160px"></a></div>
                                   <div><a href="#"><img src="image/pic_wxh/wenyi4.jpg" width="100%" height="160px"></a></div>
                                   <div><a href="#"><img src="image/pic_wxh/wenyi5.jpg" width="100%" height="160px"></a></div>
                                   <div><a href="#"><img src="image/pic_wxh/wenyi6.jpg" width="100%" height="160px"></a></div>
                               </div>
                               <div id="bbctl_3b_bottom">
                                    <div><a href="#"><img src="image/pic_wxh/wenyi7.jpg" width="100%" height="160px"></a></div>
                                   <div><a href="#"><img src="image/pic_wxh/wenyi8.png" width="100%" height="160px"></a></div>
                                   <div><a href="#"><img src="image/pic_wxh/wenyi9.jpg" width="100%" height="160px"></a></div>
                                   <div><a href="#"><img src="image/pic_wxh/wenyi10.png" width="100%" height="160px"></a></div>
                                   <div><a href="#"><img src="image/pic_wxh/article4.jpg" width="100%" height="160px"></a></div>
                                   <div><a href="#"><img src="image/pic_wxh/article3.jpg" width="100%" height="160px"></a></div>
                               </div>
                            </div>
                  </div>
                  
               </div>
               <div id='bbc_trid_right'>
                    <div id="bbc_trid_right_1">
                        <div id="bbctr1_top">
                            <p>猜你喜欢</p>
                        </div>
                        <div id="bbctr1_bottom">
                          <div>
                              <a>微信小程序观看视频打赏源码 2018-06-08</a>
                          </div>    
                          <div>
                                <a>微信小程序观看视频打赏源码 2018-06-08</a>
                          </div>    
                          <div>
                                <a>微信小程序观看视频打赏源码 2018-06-08</a>
                          </div>    
                          <div>
                                <a>微信小程序观看视频打赏源码 2018-06-08</a>
                          </div>    
                          <div>
                                <a>微信小程序观看视频打赏源码 2018-06-08</a>
                          </div>    
                          <div>
                                <a>微信小程序观看视频打赏源码 2018-06-08</a>
                          </div>    
                        </div>
                    </div>
                    <div id='bbc_trid_right_2'>
                        <div id="bbctr2_top">
                            网站统计
                        </div>
                        <div id="bbctr2_bottom">
                            <p>文章总数：2888 篇</p>
                            <p>评论数目：2902条</p>
                            <p>建站时间：2018-3-20</p>
                            <p>最后更新：2019-5-29</p>
                        </div>
                    </div>
               </div>
           </div>
          </div>
          
    </div>
      <!-- 网站中间部分 -->
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
        <!-- 通用页脚 -->
</body>