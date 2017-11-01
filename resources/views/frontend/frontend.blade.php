@inject('headers',App\Header')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="applicable-device" content="pc" />
    <meta name="csrf-token" content=" {{csrf_token()}}">
    <title> @yield('title')_中国模具网</title>
    <meta name="keywords" content=" @yield('keywords') "/>
    <meta name="description" content=" @yield('description') "/>
    <link href="/reception/css/style.css" rel="stylesheet" type="text/css" />
    <meta name="Copyright" content="中国模具网-{{config('app.url')}}"/>
    <meta name="author" content="中国模具网" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',config('app.url'))}}{{Request::getrequesturi()}}" >
    <link rel="canonical" href="{{config('app.url')}}{{Request::getrequesturi()}}"/>
    <meta property="og:image" content="/reception/images/logo.jpg"/>
    <script type="text/javascript" src="/reception/js/jquery.min.js"></script>
    <script type="text/javascript" src="/reception/js/roll.js"></script>
    <script type="text/javascript" src="/reception/js/main.js"></script>
    <script type="text/javascript" src="/reception/js/index.js"></script>
    @yield('headlibs')
</head>
<body>

<div class="header">
    <div class="top">
        <div class="inner">
            <div class="top_l">您好，欢迎访问中国模具网！</div>
            <div class="top_r">
                <div class="tel">7*24小时免费直拨 400-8896-216</div>
                <div class="add_wx" id="js_add_wx">
                    <img src="/reception/images/wx_link.jpg" width="76" height="22" alt="官方微信">
                    <div class="wx_drop_down">
                        <img src="/reception/images/wx_qrcode.png" alt="微信二维码">
                    </div>
                </div>
                <div class="add_wb">
                </div>
            </div>
        </div>
    </div>
    <div class="header_box_wrap">
        <div class="header_box">
            <div class="logo"><a href="/" target="_blank"><img src="/reception/images/logo.jpg" alt="零食加盟网"></a></div>
            <div class="search">
                <div class="search_tab">
                    <ul>
                        <li class="cur">找商机</li>
                        <li><a href="/project/0-1~5-0-0.shtml" target="_blank">5万以下</a></li>
                        <li><a href="/project/0-5~10-0-0.shtml" target="_blank">5-10万</a></li>
                        <li><a href="/project/0-10~20-0-0.shtml" target="_blank">10-20万</a></li>
                        <li><a href="/project/0-20~50-0-0.shtml" target="_blank">20-50万</a></li>
                    </ul>
                </div>
                <div class="search_box">
                    <form action="" method="get">
                        <input type="text" onblur="if (this.value == '') {this.value = this.attributes['def'].value;this.className='search_input';}" onfocus="if (this.value == this.attributes['def'].value) {this.value='';this.className='search_input1';}" def="想找什么项目？" class="search_input" value="想找什么项目？" name="search">
                        <input type="submit" class="search_btn" value="搜索">
                    </form>
                </div>
            </div>
            <div class="quick_btn">
                <ul>
                    <li>
                        <a href="/paihangbang/"><i class="icon1"></i><span class="tit">排行榜</span></a>
                    </li>
                    <li>
                        <a href="" rel="nofollow"><i class="icon2"></i><span class="tit">项目搜索</span></a>
                    </li>

                    <li>
                        <a href="/pinpai/"><i class="icon3"></i><span class="tit">品牌大全</span></a>
                    </li>
                    <li>
                        <a href="/ask/"><i class="icon4"></i><span class="tit">加盟问答</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="nav">
        <div class="inner">
            <ul class="nav_list">
                <li class="cur" style="width:188px; text-align:center;"><a href="/">行业频道</a></li>
                <li><a href="/">首页</a></li>
                @foreach($headers->HeaderLists() as $real_path=>$header)

                    <li><a href="/{{$real_path}}/" >{{$header}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<!--/hearer-->
@yield('maincontent')
<div class="footer">
    <div class="footer_nav"><a href="/about/" rel="nofollow">关于我们</a>　|　企业服务　|　人才招聘　|　<a href="/contact/" rel="nofollow">联系我们</a>　|　合作客户　|　<a href="/law/" rel="nofollow">法律声明</a>　|　友情链接　|　服务导航　|　<a href="/sitemap.xml" rel="nofollow">网站地图</a>　　|　加盟导航 sitemap</div>

    <div class="copyright">
        <p>中国模具网友情提示：多打电话、多咨询、实地考察，可降低投资风险！</p>
        <p>Copyright © 2017 www.58lingshi.com Corporation, All Rights Reserved 上海莫卡网络科技有限公司 版权所有</p>
        <p><a href="http://www.miitbeian.gov.cn/" rel="nofollow"> 沪ICP备16055116号-11</a></p>
    </div>
    <div class="footernew footheight" style="width:1000px;" bosszone="footer">
        <div style="width:960px;">
            <p>
                <span class="fl"><a href="http://www.cyberpolice.cn/wfjb/" target="_blank" rel="nofollow"><img width="36" height="43" border="0" alt="上海网警网络110" src="/reception/images/816587.gif"></a></span>
                <span class="fr"><a href="http://www.cyberpolice.cn/wfjb/" target="_blank" rel="nofollow">上海网警网络110<br>
	报警平台</a></span>
            </p>
            <p>
                <span class="fl"><a href="http://www.police.sh.cn/shga/ygjw" target="_blank" rel="nofollow"><img width="36" height="42" border="0" alt="公共信息安全网络监察" src="/reception/images/6743671.jpg"></a></span>
                <span class="fr"><a href="http://www.police.sh.cn/shga/ygjw" target="_blank" rel="nofollow">公共信息安<br>
	全网络监察</a></span>
            </p>

            <p>
                <span class="fl"><a href="http://www.miitbeian.gov.cn" target="_blank" rel="nofollow"><img width="35" height="43" border="0" alt="经营性网站备案信息" src="/reception/images/ind36.gif"></a></span>
                <span class="fr"><a target="_blank" class="lcblack" href="http://www.miitbeian.gov.cn" rel="nofollow">经营性网站<br>
	备案信息</a></span>
            </p>
            <p>
                <span style="width:44px;" class="fl"><a href="http://www.12377.cn/" target="_blank" rel="nofollow"><img width="44" height="44" border="0" alt="中国互联网举报中心" src="/reception/images/buliang.png"></a></span>
                <span style="width:64px;" class="fr"><a class="lcblack" href="http://www.12377.cn/" target="_blank" rel="nofollow">中国互联网<br>
	举报中心</a></span>
            </p>
            <p>
                <span style="width:44px;" class="fl"><a href="http://www.wenming.cn" target="_blank" rel="nofollow"><img width="44" height="42" border="0" alt="中国文明网传播文明" src="/reception/images/wmlogo.gif"></a></span>
                <span style="width:64px;" class="fr"><a class="lcblack" href="http://www.wenming.cn" target="_blank" rel="nofollow">中国文明网<br>传播文明</a></span>
            </p>
            <p style="width:128px;height:52px;border:0;">
                <span style="padding:0;" class="fl"><a href="http://t.knet.cn/index_new.jsp" target="_blank" rel="nofollow"><img border="0" alt="诚信网站" src="/reception/images/cxrz5.png"></a></span>
            </p>
            <p>
                <span style="width:44px;" class="fl"><a href="http://www.sgs.gov.cn/shaic/" target="_blank" rel="nofollow"><img src="http://mat1.gtimg.com/www/images/qq2012/gswj2015.jpg" title="深圳市市场监督管理局企业主体身份公示" alt="深圳市市场监督管理局企业主体身份公示"></a></span>
                <span style="width:64px;" class="fr"><a class="lcblack" href="http://www.sgs.gov.cn/shaic/" target="_blank" rel="nofollow">工商网监<br>电子标识</a></span>
            </p>
        </div>
    </div>
    <div class="wx"><img src="/reception/images/logo_wx.jpg" alt="微信"></div>
</div>
</body>
</html>