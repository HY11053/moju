@extends('frontend.frontend')
@section('title') {{ config('app.webname', '中国模具网') }} @stop
@section('keywords') {{ config('app.keywords', '中国模具网') }} @stop
@section('description') {{ config('app.description', '中国模具网') }} @stop
@section('headlibs') <script src="/reception/js/jquery.flexslider-min.js"></script>@stop
@section('maincontent')
    <div class="main clearfix">

        <div class="w1190 lanmu clearfix">
            <div class="lmbanner fl">
                <div class="w1920">
                    <!-- 幻灯片 Start -->
                    <div class="flexslider">
                        <ul class="slides">
                            @foreach(explode(',',$thistypeinfo->typeimages) as $pic)
                            <li><a href="#" style="background:url({{$pic}}) no-repeat center top;"></a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- 幻灯片 End -->
                </div>
                <script>
                    $(function(){
                        $('.w1920 .flexslider').flexslider({
                            directionNav: true,
                            pauseOnAction: false
                        });
                    });
                </script>
            </div>
            <div class="lmright fr">
                <h1 style="font-size:20px">{{$thistypeinfo->typename}}</h1>
                <p>{!! str_limit(strip_tags($thistypeinfo->contents),540,'...') !!}</p>
                <p>
                <div class="bshare-custom"><div class="bsPromo bsPromo2"></div><a title="分享到微信" class="bshare-weixin" href="javascript:void(0);"></a><a title="分享到QQ好友" class="bshare-qqim" href="javascript:void(0);"></a><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到腾讯微博" class="bshare-qqmb" href="javascript:void(0);"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a><span class="BSHARE_COUNT bshare-share-count" style="float: none;">52.1K</span></div><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
                </p>
            </div>
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