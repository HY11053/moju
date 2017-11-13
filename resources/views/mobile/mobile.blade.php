<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta name="applicable-device" content="mobile">
    <meta name="csrf-token" content=" {{ csrf_token() }}">
    <title>@yield('title')-中国模具网</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <link rel="canonical" href="{{config('app.weburl')}}{{Request::getrequesturi()}}" >
    <link rel="stylesheet" href="/mobiles/css/style.css" />
    @yield('headlibs')
    <link href="/mobiles/css/bootstrap.min.css" rel="stylesheet">
    <link href="/mobiles/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body class="mCenter">
<div style="display: none">
    <h1>中国模具网</h1>
</div>
<div class="viewport">
    <div class="header">
        <div class="head_user" id="head_user"></div>
        <div class="head_search">
            <input type="text" id="head_plantsName" placeholder="请输入您需要的模具信息" value="" />
            <a class="h_searchBtn" href="javascript:;">搜索</a>
        </div>
        <div class="head_title">中国模具网</div>
        <div class="head_menu" id="head_menu">

        </div>
        @include('mobile.header')
    </div>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <a href="javascript:void(0)" onclick="openZoosUrl();return false;"><img class="center-block" src="/mobiles/images/1.jpg" alt="一良品铺子加盟"></a>
            </div>
            <div class="item">
                <a href="javascript:void(0)" onclick="openZoosUrl();return false;"><img class="center-block" src="/mobiles/images/1.jpg" alt="来伊份加盟"></a>
            </div>
            <div class="item">
                <a href="javascript:void(0)" onclick="openZoosUrl();return false;"><img class="center-block" src="/mobiles/images/1.jpg" alt="休闲食品加盟"></a>
            </div>
        </div>
    </div>
    @yield('maincontent')

    <!-- 底部 -->
    <div class="footer">
        <p><span>全国客服热线：400-6688-778</span></p>
        <p>邮箱：kefu@itaomiao.com</p>
        <p>爱淘苗-做更真实的苗木平台 </p>
    </div>
</div>
<script type="text/javascript" src="/mobiles/js/jquery-1.11.3.min.js" ></script>
<script type="text/javascript" src="/mobiles/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="/mobiles/js/index.js" ></script>

</body>
</html>