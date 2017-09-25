@extends('frontend.frontend')
@section('title') {{ config('app.webname', '中国模具网') }} @stop
@section('keywords') {{ config('app.keywords', '中国模具网') }} @stop
@section('description') {{ config('app.description', '中国模具网') }} @stop
@section('maincontent')
    <div class="main clearfix">

        <div class="cate_sort">
            <dl>
                <dt>已经筛选条件：</dt>
                <dd></dd>
            </dl>
            <dl>
                <dt>项目分类</dt>
                <dd><a class="hover" target="_self" href="#">全部</a></dd>
                @foreach($tradeTypes as $tradeType)
                    <dd><a target="_self" href="/{{$tradeType->real_path}}/">{{$tradeType->typename}}</a></dd>
                @endforeach

            </dl>
            <dl>
                <dt>适用范围</dt>
                <dd><a class="hover" target="_self" href="#">全部</a></dd>
                <dd><a target="_self" href="/project/0-1~5-0-0.shtml">1-5万元</a></dd>
                <dd><a target="_self" href="/project/0-5~10-0-0.shtml">5-10万元</a></dd>
                <dd><a target="_self" href="/project/0-10~20-0-0.shtml">10-20万元</a></dd>
                <dd><a target="_self" href="/project/0-20~30-0-0.shtml">20-30万元</a></dd>
                <dd><a target="_self" href="/project/0-30~50-0-0.shtml">30-50万元</a></dd>
                <dd><a target="_self" href="/project/0-50~100-0-0.shtml">50-100万元</a></dd>
            </dl>
            <dl>
                <dt>作用对象</dt>
                <dd><a class="hover" target="_self" href="#">分类</a></dd>
                <dd><a target="_self" href="/project/0-0-1~10-0.shtml">10平米以下</a></dd>
                <dd><a target="_self" href="/project/0-0-10~30-0.shtml">10-30平米</a></dd>
                <dd><a target="_self" href="/project/0-0-30~50-0.shtml">30-50平米</a></dd>
                <dd><a target="_self" href="/project/0-0-50~80-0.shtml">50-80平米</a></dd>
                <dd><a target="_self" href="/project/0-0-100-0.shtml">100平米以上</a></dd>
            </dl>
            <dl>
                <dt>所在地区</dt>
                <dd><a class="hover" target="_self" href="#">地区</a></dd>
                <dd><a target="_self" href="/project/0-0-0-1.shtml">北京</a></dd>
                <dd><a target="_self" href="/project/0-0-0-125.shtml">济南</a></dd>
                <dd><a target="_self" href="/project/0-0-0-71.shtml">广州</a></dd>
                <dd><a target="_self" href="/project/0-0-0-281.shtml">合肥</a></dd>
                <dd><a target="_self" href="/project/0-0-0-401.shtml">上海</a></dd>
                <dd><a target="_self" href="/project/0-0-0-282.shtml">芜湖</a></dd>
                <dd><a target="_self" href="/project/0-0-0-195.shtml">武汉</a></dd>
                <dd><a target="_self" href="/project/0-0-0-112.shtml">南京</a></dd>
                <dd><a target="_self" href="/project/0-0-0-296.shtml">长沙</a></dd>
                <dd><a target="_self" href="/project/0-0-0-126.shtml">青岛</a></dd>
                <dd><a target="_self" href="/project/0-0-0-72.shtml">深圳</a></dd>
                <dd><a target="_self" href="/project/0-0-0-164.shtml">成都</a></dd>
                <dd><a target="_self" href="/project/0-0-0-139.shtml">沈阳</a></dd>
                <dd><a target="_self" href="/project/0-0-0-29.shtml">重庆</a></dd>
                <dd><a target="_self" href="/project/0-0-0-212.shtml">郑州</a></dd>
                <dd><a target="_self" href="/project/0-0-0-101.shtml">杭州</a></dd>
                <dd><a target="_self" href="/project/0-0-0-83.shtml">佛山</a></dd>
            </dl>
        </div>
        <div class="rec_brand_list">
            <ul>
                @foreach($topbrands as $topbrand)
                <li><a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml" target="_blank" title="{{$topbrand->article->companyname}}" class="pic"><img src="{{$topbrand->litpic}}" alt="{{$topbrand->article->companyname}}"><em>{{$topbrand->article->companyname}}</em></a></li>
                @endforeach
            </ul>
        </div>

        <div class="w910">
            <div class="order_item">
                <div class="order_item_l">
                    <a class="cur" href="#">默认排序</a>
                    <a href="#">金额排序<i class="up"></i><!--<i class="down"></i>--></a>
                </div>
                <div class="order_item_r">共找到<span>{{$pagelists->total()}}</span>个模具厂家</div>
            </div>

            <div class="brand_list" id="productBox">
                @foreach($pagelists as $pagelist)
                    <div class="brand_list_item">
                        <div class="pro-Img fl">
                            <a target="_blank" href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" class="pp-pic-name" title="{{$pagelist->article->companyname}}"><img src="{{$pagelist->litpic}}" alt="{{$pagelist->article->companyname}}"></a>
                            <p class="pro_p">{!! strip_tags($pagelist->description) !!}</p>
                        </div>
                        <div class="indrouce-r fl">
                            <div class="list list-one">
                                <a target="_blank" href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" title="{{$pagelist->article->companyname}}"><h3 class="list-Name fl">{{$pagelist->article->companyname}}</h3></a>
                                <span class="money fr h4">经营范围：&nbsp;<em class="red">{{$pagelist->article->companyarea}}</em>&nbsp;&nbsp;&nbsp;所在地区：&nbsp;<em class="red">{{$pagelist->country}}</em>&nbsp;&nbsp;</span>
                            </div>
                            <div class="list list-two">
                                <div class="biao_h clearfix fl"> <i class="jianIco fl"></i> <i class="shenIco fl"></i> <i class="huiIco fl"></i> <i class="baoIco fl"></i> </div>
                                <div class="jibie fl"><span>投资星级：<em class="xing">★★★★★</em></span></div>
                                <span class="money fr h4">综合指数：&nbsp;<em class="red">{{$pagelist->article->brandattch}}</em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;最近咨询：&nbsp;<em class="red">{{$pagelist->article->brandchat}}</em>&nbsp;&nbsp;</span>
                            </div>
                            <div class="list-three">
                                <a href="#" target="_blank" class="squaer tell fl">免费通话</a>
                                <a href="#" target="_blank" class="squaer liuyan fl">马上留言</a>
                                <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" target="_blank" class="squaer xiangqing fl">项目详情</a>
                                <span class="byb_btn"><label><input type="checkbox" id="Db_64806" cid="64806" class="checkbox" data-pro='{"pid":{{$pagelist->id}},"name":"{{$pagelist->shorttitle}}","pic":"{{$pagelist->litpic}}","url":"{{env('app_url')}}/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml"}'>
						项目比一比</label></span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="page">
                {!! preg_replace('/<a href=[\'\"]?([^\'\" ]+).*?>/','<a href="${1}/">',$pagelists->links()) !!}
            </div>
        </div>

        <div class="w260">

            <div class="new_bt">
                <h3> <i></i> 磨具厂排行榜 </h3>
                <div class="rank_bd">
                    <ul>
                        @foreach($phBrands as $index=>$topbrand)
                            @if($index==0)
                                <li class="top"> <a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml" target="_blank" title="{{$topbrand->article->companyname}}"><i class="num">{{$index+1}} </i> <img src="{{$topbrand->litpic}}" alt="{{$topbrand->article->companyname}}" ></a>
                                    <div class="cont">
                                        <p><a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml" target="_blank">{{$topbrand->article->companyname}}</a></p>
                                        <p><span>投资金额：</span><i>{{$topbrand->article->brandpay}}</i></p>
                                        <p class="btn"><a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml">查看详情</a></p>
                                    </div>
                                </li>
                            @else

                                <li class="top"> <i class="num">{{$index+1}}</i> <span class="name"><a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml" target="_blank" title="{{$topbrand->article->companyname}}">{{$topbrand->article->companyname}}</a></span> <span class="price">{{$topbrand->article->brandpay}}</span> </li>
                            @endif

                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="bn260"><a href="/lingshidianpp/91.shtml" target="_blank"><img src="/reception/images/temp/bn6.jpg" width="260" height="295" alt=""></a></div>

            <div class="side_news">
                <div class="common_bt">
                    <div class="tit">推荐文章</div>
                </div>
                <div class="common_list">
                    <ul>
                        @foreach($newsbrands as $newsbrand)
                            <li><a href="/{{$newsbrand->arctype->real_path}}/{{$newsbrand->id}}.shtml" target="_blank" title="{{$newsbrand->title}}">{{$newsbrand->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop