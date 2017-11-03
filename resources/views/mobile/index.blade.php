<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>爱淘苗-在线苗木交易网,买卖苗木网,就上爱淘苗！</title>
    <meta name="keywords" content="苗木,苗木网,买卖苗木网" >
    <meta name="description" content="爱淘苗」上市苗木公司联手打造中国真实苗木网在线交易平台,爱淘苗苗木网为您提供近期苗木报价,苗木供应,苗木求购信息.买卖苗木,就上爱淘苗！Tel: 400-6688-778" >
    <link rel="stylesheet" href="/mobiles/css/style.css" />
    <link rel="stylesheet" href="/mobiles/css/slider.css" />
    <script type="text/javascript" src="/mobiles/js/jquery-1.11.3.min.js" ></script>
    <script type="text/javascript" src="/mobiles/js/jquery.flexslider-min.js" ></script>
    <style type="text/css">
        .container .flexslider{ width: 100%; height: auto; min-width: initial; }
        .container .slides li{ width: 100%; height: auto; }
        .container .slides li img{ width: 100%; min-height: 110px; }
        .container .flex-direction-nav{ margin-top: -42px; }
        .container .flex-control-nav li{ margin: 0 1px; width:10px; }
        .container .flex-control-nav a{display:inline-block;width:10px;height:14px;line-height:40px;overflow:hidden;background:url(http://m.itaomiao.com:80/images/slider/dot.png) right 0 no-repeat;cursor:pointer; background-size: 20px 10px; }
        .container .flex-control-nav .flex-active{background-position:0 0;}
        .container .flex-direction-nav{ display: none; }
        .index_news{ border-top: 1px solid #ddd; padding: 8px 10px 8px 75px; background: url(http://m.itaomiao.com:80/images/newIndex.png) no-repeat 7px 15px #fff; background-size: 110px 550px; }
        .index_news p{ border-left: 1px dashed #ddd; padding-left: 8px; width: 100%; box-sizing: border-box; height: 30px; line-height: 30px; font-size: 14px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }
        .index_news p em{ border: 1px solid #43c56f; color: #43c56f; padding: 0 5px; margin-right: 3px; border-radius: 3px; }
        .index_news p a{ color: #515151; }
        .index_news p a:hover{ text-decoration: underline; color: #ff6c00; }
        .index_title{ height: 42px; line-height: 42px; background: #f5f5f5; font-size: 15px; color: #333; box-sizing: border-box; padding-left: 12px; border-top: 1px solid #dfdfdf; border-bottom: 1px solid #dfdfdf; position: relative; }
        .index_title span{ font-size: 12px; color: #999; border: 1px solid #ccc; padding: 1px 6px; border-radius: 2px; margin-left: 10px; }
        .index_notice{ border-top: 1px solid #ddd; background: #f5f5f5; padding-top: 10px; }
        .index_settled{ background: #fff; border-top: 1px solid #ddd; border-bottom: 1px solid #ddd; }
        .settled_box{ padding: 5px 10px 5px 120px; background: url(http://m.itaomiao.com:80/images/newIndex.png) no-repeat; background-size: 80px 400px; position: relative; }
        .index_notice .settled_box{ background-position: -42px -129px; }
        .index_bid .settled_box{ background-position: -42px -200px; }
        .settled_list{ height: 35px; overflow: hidden; }
        .settled_list li{ height: 35px; line-height: 35px; width: 100%; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }
        .settled_list li a{ color: #333; font-size: 14px; }
        .settled_box span{ position: absolute; left: 43px; display: block; height: 35px; line-height: 35px; top: 5px; font-size: 14px; color: #515151; border-right: 1px dashed #ccc; width: 67px; }
        .index_bid{ margin-top: 10px; background: #fff;	border-top: 1px solid #ddd; }
        .index_imgs{ width: 100%; height: auto; position: relative; }
        .ii_btn{ position: absolute; bottom: 7%; left: 0; width: 100%; text-align: center; }
        .ii_btn img{ margin: 0 2%; width: 39%; }
        .help_list{ margin-top: 0; border-top: none; }
        .help_list li div{ display: block; background: #fff; }
        .help_list li div a{ padding-left: 15px; }
        .help_list li div p:last-child a{ border-bottom: none; }
        .notice_title h5{ font-size: 16px; }
        .index_p_title{ height: 36px; line-height: 36px; border-bottom: 1px solid #ddd; border-top: 1px solid #ddd; padding-left: 10px; font-size: 15px; color: #333; }
        .index_p_title em{ border-left: 4px solid #fb7513; padding-left: 5px; }
    </style>
</head>

<body class="mCenter">
<div style="display: none">
    <h1>中国模具网</h1>
</div>
<div class="viewport">
    <!-- 头部搜索 -->
    <div class="header">
        <div class="head_user" id="head_user"></div>

        <div class="head_search">
            <input type="text" id="head_plantsName" placeholder="请输入您需要的苗木或苗木标签" value="" />
            <a class="h_searchBtn" href="javascript:;">搜索</a>
        </div>
        <div class="head_title">中国模具网</div>
        <div class="head_menu" id="head_menu"></div>
    </div>
    <!-- 图片切换 -->
    <div>
        <div class="container">

            <div class="flexslider">
                <ul class="slides">
                    <li><a href=""><img src="http://m.itaomiao.com/img/nursery/2017/10/27/09/1509068791668MjZk.jpg" /></a></li>
                </ul>
            </div>

        </div>
    </div>

    <div class="module" style="margin-bottom: 0;">
        <div class="index_headBtn clear">
            @foreach($allTypes as $index=>$allType)
            <div><a href="/{{$allType->real_path}}/"><img src="/mobiles/images/indexIcos/icon{{$index+1}}.png" /><span>{{$allType->typename}}</span></a></div>
            @endforeach

        </div>

        <div class="index_news" style="position: relative;">
            <a href="/{{\App\AdminModel\Arctype::where('id',7)->value('real_path')}}/" style="width: 75px;height: 75px;position: absolute;left: 0;top: 0;"></a>
            @foreach($newsLists as $newsList)
            <p><em>新闻</em><a href="/{{$newsList->arctype->real_path}}/{{$newsList->id}}.shtml" title="{{$newsList->title}}">{{$newsList->title}}</a></p>
            @endforeach
        </div>

        <div>
            <a href="javascript:;" onclick="openApp();" class="index_toDLApp">
                <h6>中国模具网</h6>
                <p>让更有需求的人找到你</p>
                <em>询单</em>
            </a>
        </div>

        <div class="index_notice">

            <div class="index_settled">
                <div class="settled_box">
                    <span>最新入驻</span>
                    <div class="settled_list">
                        <ul>
                            @foreach($mjCompany1s as $mjCompany1)
                                <li><a href="/{{$mjCompany1->arctype->real_path}}/{{$mjCompany1->id}}.shtml" target="_blank">{{$mjCompany1->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="index_bid">
                <div class="settled_box">
                    <span>实力厂家</span>
                    <div class="settled_list">
                        <ul id="indexNoticeList" ></ul>
                            @foreach($Mjcompanys as $mjCompany)
                                <li><a href="/{{$mjCompany->arctype->real_path}}/{{$mjCompany->id}}.shtml" target="_blank">{{$mjCompany->title}}</a></li>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>


        <!-- 采购动态 -->
        <div class="index_purchase">
            <div class="index_title">模具生产厂家<a href="http://m.itaomiao.com:80/index/help/helpMenuDetail.itm?menuid=75" class="module_help">快速入门</a></div>
            <div class="index_imgs">
                <img src="http://m.itaomiao.com:80/images/pics/newIndexPic1.png" />
                <div class="ii_btn">
                    <a href="http://m.itaomiao.com:80/jsp/index/help/pc/4/help4_1.jsp"><img src="http://m.itaomiao.com:80/images/pics/newIndexBtn1.png" /></a>
                    <a href="http://m.itaomiao.com:80/news/newsList.itm?module=5"><img src="http://m.itaomiao.com:80/images/pics/newIndexBtn2.png" /></a>
                </div>
            </div>

            <div class="index_p_title"><em>推荐厂家</em></div>
            <div class="index_purchaseList">
                <ul>
                    <div id="twoQuotePurchaseList"></div>
                    @foreach($hotMjcompanys as $hotMjcompany)
                    <li class="index_purchaseOrder purchase_payAndSel">
                        <a href="/{{$hotMjcompany->arctype->real_path}}/{{$hotMjcompany->id}}.shtml" >
                            <div class="ipl_info">
                                <h4 class="ipl_title">
                                    <i class="purchaseTag1">生产</i>
                                    <em>{{$hotMjcompany->article->companyname}}</em>
                                </h4>
                                <p>推荐指数：{{$hotMjcompany->click}}</p>
                                <p>经营范围：{{$hotMjcompany->article->companyarea}}</p>
                                <p class="ipl_addr">地址：{{$hotMjcompany->article->companyaddr}}</p>
                                <p class="ipl_plantsName">
										<span class="clear">
										<em>美丽异木棉</em>
										<em>凤凰木特型</em>
										<em>凤凰木A</em>
										<em>凤凰木B</em>
										<em>凤凰木C</em>
										</span>
                                </p>
                            </div>
                        </a>
                    </li>
                    @endforeach

                </ul>
            </div>
            <div class="module" style="border-top: 1px solid #dfdfdf; margin-bottom: 0;">
                <a href="http://m.itaomiao.com:80/jsp/index/brand/treeBrand.jsp">
                    <img src="http://m.itaomiao.com:80/images/pics/indexTreeBrand.png" style="width: 100%;" />
                </a>
            </div>
            <div class="index_purchaseMore"><a href="/{{\App\AdminModel\Arctype::where('id',1)->value('real_path')}}/"><i>点击查看更多模具生产厂家</i></a></div>

            <div class="index_p_title"><em>供求信息</em></div>
            <div class="index_purchaseList">
                <ul>
                    <div id="twoQuoteAskPurchaseList"></div>
                    @foreach($gongqiuNews as $gongqiuNew)
                    <li class="index_purchaseOrder purchase_ask">
                        <a href="/{{$gongqiuNew->arctype->real_path}}/" >
                            <div class="ipl_info">
                                <h4 class="ipl_title">
                                    <i class="purchaseTag1">供求</i>
                                    <em>{{$gongqiuNew->title}}</em>
                                </h4>
                                <p>
                                    {{$gongqiuNew->description}}
                                </p>
                                <p>
                                    {{$gongqiuNew->article->syfw}}
                                </p>
                                <p class="ipl_addr">模具类型：{{$gongqiuNew->article->mjlx}}</p>
                                <p class="ipl_plantsName">
										<span class="clear">
										<em>乔木樱</em>
										<em>广州樱A</em>
										<em>广州樱B</em>
										<em>广州樱C</em>
										<em>选型秋枫</em>
										</span>
                                </p>
                            </div>
                        </a>
                    </li>
                @endforeach
                </ul>
            </div>
            <div class="index_purchaseMore"><a href="/{{\App\AdminModel\Arctype::where('id',6)->value('real_path')}}/"><i>点击查看更多供求</i></a></div>

        </div>

    </div>

    <!-- 购买树牌 -->


    <div class="module" style="margin-bottom: 0;">
        <div class="index_title">模具生产制造</div>
        <div class="help_list">
            <ul>
                <li>
                    <div>
                        @foreach($hyNews as $hyNew)
                        <p><a href="/{{$hyNew->arctype->real_path}}/{{$hyNew->id}}.shtml">{{$hyNew->title}}</a></p>
                        @endforeach

                    </div>
                </li>
            </ul>

        </div>
    </div>

    <!-- 底部 -->
    <div class="footer">
        <p><span>全国客服热线：400-6688-778</span></p>
        <p>邮箱：kefu@itaomiao.com</p>
        <p>爱淘苗-做更真实的苗木平台 </p>
    </div>
</div>
</body>
</html>
