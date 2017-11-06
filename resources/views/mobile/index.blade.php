@extends('mobile.mobile')
@section('title') {{ config('app.webname', '中国模具网') }} @stop
@section('keywords') {{ config('app.keywords', '中国模具网') }} @stop
@section('description') {{ config('app.description', '中国模具网') }} @stop
@section('maincontent')
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
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="index_purchaseMore"><a href="/{{\App\AdminModel\Arctype::where('id',6)->value('real_path')}}/"><i>点击查看更多供求</i></a></div>

        </div>

    </div>


    <div class="module" style="margin-bottom: 0;">
        <div class="index_p_title"><em>产品中心</em></div>
        <div class="row">
            @foreach($jiaProductions as $jiaProduction)
                <div class="col-sm-6 col-xs-6 routes"> <a href="/{{$jiaProduction->arctype->real_path}}/{{$jiaProduction->id}}.shtml" ><img src="{{$jiaProduction->litpic}}" class="img-thumbnail img-responsive center-block " style=""></a>
                    <p class="text-center">{{$jiaProduction->title}}</p>
                </div>
            @endforeach

            @foreach($gangProductions as $gangProduction)
                <div class="col-sm-6 col-xs-6 routes"> <a href="/{{$gangProduction->arctype->real_path}}/{{$gangProduction->id}}.shtml" ><img src="{{$gangProduction->litpic}}" class="img-thumbnail img-responsive center-block " style=""></a>
                    <p class="text-center">{{$gangProduction->title}}</p>
                </div>
            @endforeach

        </div>
    </div>

    <div class="module" style="margin-bottom: 0;">
        <div class="index_p_title"><em>模具生产制造</em></div>
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
    <div class="module" style="margin-bottom: 0;">
        <div class="index_p_title"><em>模具展会信息</em></div>
        <div class="help_list">
            <ul>
                <li>
                    <div>
                        @foreach($zhanhuiNews as $zhanhuiNews)
                            <p><a href="/{{$zhanhuiNews->arctype->real_path}}/{{$zhanhuiNews->id}}.shtml">{{$zhanhuiNews->title}}</a></p>
                        @endforeach

                    </div>
                </li>
            </ul>

        </div>
    </div>
@stop