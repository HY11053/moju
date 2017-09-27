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
                @endforeach </ul>
        </div>
        <div class="news_center">
            <div class="news_tj clearfix">
                <dl>
                    <dt><a href="/{{$cNews->arctype->real_path}}/{{$cNews->id}}.shtml"><img src="{{$cNews->litpic}}" alt="{{$cNews->title}}"></a></dt>
                    <dd>
                        <h3><a href="/{{$cNews->arctype->real_path}}/{{$cNews->id}}.shtml" target="_blank">{{$cNews->title}}</a></h3>
                        <p>{{$cNews->description}}...</p>
                    </dd>

                </dl>

                <div class="news_tj_r">
                    <b>{{$thisTypeinfos->typename}}特别推荐</b>
                    <div class="news_tj_r1">

                        <h3><a href="/{{$hNews->arctype->real_path}}/{{$hNews->id}}.shtml" target="_blank">{{$hNews->title}}</a></h3>
                        <p>{{$hNews->description}}..<a href="/{{$hNews->arctype->real_path}}/{{$hNews->id}}.shtml" target="_blank">详情&gt;&gt;</a></p>


                    </div>

                    <ul class="clearfix">
                        @foreach($sNews as $sNew)
                        <li><a href="/{{$sNew->arctype->real_path}}/{{$sNew->id}}.shtml" target="_blank">{{$sNew->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="ww_330">
                @foreach($pagelists as $pagelist)
                    <dl>
                        <dt><a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" target="_blank"><img src="{{$pagelist->litpic}}"  alt="{{$pagelist->title}}"/></a></dt>
                        <dd class="tit"><a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" target="_blank" title="{{$pagelist->title}}">{{$pagelist->title}}</a> </dd>
                        <dd class="desc">{{$pagelist->description}} </dd>
                        <dd class="date">发布于：<span>{{$pagelist->created_at}} </span> <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" title="{{$pagelist->title}}">阅读全文&gt;&gt;</a></dd>
                    </dl>
                @endforeach

            </div>
            <div class="page">  {!! preg_replace('/<a href=[\'\"]?([^\'\" ]+).*?>/','<a href="${1}/">',$pagelists->links()) !!}  </div>
        </div>
        <div class="new_right">
            <div class="new_bt2">
                <div class="search_bc">
                    <form method="get">
                        <input type="text" class="new_input" name="search">
                        <input type="submit" class="new_btn" value="搜索">
                    </form>
                </div>
            </div>
            <div class="new_bt2">
                <h3> <i></i> 本周热门 </h3>
                <div class="new_hotes">
                    <ul>
                        @foreach($topnews as $topnew)
                            <li > <a href="/{{$topnew->arctype->real_path}}/{{$topnew->id}}.shtml" target="_blank" title="{{$topnew->title}}"><img src="{{$topnew->litpic}}" alt="{{$topnew->title}}" ></a>
                                <p><a  href="/{{$topnew->arctype->real_path}}/{{$topnew->id}}.shtml" title="{{$topnew->title}}">{{$topnew->title}}</a></p>
                                <p>{{str_limit($topnew->description,15,'')}}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="new_bt2">
                <h3><i></i>热门磨具厂查询入口</h3>
                <div class="kuishurk">
                    @foreach($fastfinds as $fastfind)
                        <a href="/{{$fastfind->arctype->real_path}}/{{$fastfind->id}}.shtml">{{$fastfind->article->companyname}}</a>
                    @endforeach
                </div>
            </div>
            <div class="new_bt2">
                <h3> <i></i> 最新展会信息 </h3>
                <div class="bts">
                    <div class="common">
                        <ul>
                            @foreach($zhanhuiNews as $zhanhuiNew)
                                <li><a href="/{{$zhanhuiNew->arctype->real_path}}/{{$zhanhuiNew->id}}.shtml" target="_blank" title="{{$zhanhuiNew->title}}">{{$zhanhuiNew->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

@stop