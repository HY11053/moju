@extends('frontend.frontend')
@section('title') {{$thisarticleinfos->title}} @stop
@section('keywords') {{$thisarticleinfos->keywords}} @stop
@section('description')  {{$thisarticleinfos->description}} @stop
@section('maincontent')
    <div class="main clearfix">
        @include('frontend.position')
        <div class="center_list clearfix">
            <div class="news_center">
                <dl class="company_hd act_reward msg_news">
                    <dt><img src="{{$thisarticleinfos->litpic}}" width="280" height="210" alt="{{$thisarticleinfos->title}}" data-bd-imgshare-binded="1"></dt>
                    <dd>
                        <h1 class="tit">{{$thisarticleinfos->title}}</h1>
                        <p><span>展会日期&nbsp;:{{date('Y-m-d',strtotime($thisarticleinfos->article->starttime))}} 至 {{date('Y-m-d',strtotime($thisarticleinfos->article->endtime))}}</span><span>联系人&nbsp;:&nbsp;曾城</span></p>
                        <p><span>展馆&nbsp;:&nbsp;{{$thisarticleinfos->article->zhanguan}}</span>
                            <span>地址：&nbsp;{{$thisarticleinfos->article->zhdz}}</span></p>
                        <p><span>门票&nbsp;:&nbsp;{{$thisarticleinfos->article->ticket}}</span></p>
                        <p class="btn">
                            <a href="#" class="yd_zwei" title="" target="_blank">展位预定</a>
                            <a href="#" class="yd_ticket" target="_blank">预订门票</a>
                            <a href="#" class="find_fws">找服务商</a>
                        </p>
                        <div class="active">
                            @if($thisarticleinfos->article->starttime > \Carbon\Carbon::now())
                                <div class="time"><span>未</span><span>开</span><span>始</span></div>
                                @elseif($thisarticleinfos->article->starttime < \Carbon\Carbon::now() && $thisarticleinfos->article->endtime > \Carbon\Carbon::now())
                                <div class="time"><span>进</span><span>行</span><span>中</span></div>
                                @else
                                <div class="time"><span>已</span><span>结</span><span>束</span></div>
                            @endif

                        </div>
                    </dd>
                </dl>
                <div class="body_tit clearfix">
                    {!! $thisarticleinfos->article->body !!}
                </div>
                <div class="fenxiang">
                    <div class="fenxiangdao">分享到：</div>
                    <div class="bdsharebuttonbox bdshare-button-style1-16" data-tag="share_1" data-bd-bind="1501728062734">
                        <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                        <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                        <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                    </div>
                    <div class="nr_biaoqian"><b>标签：</b>{{$thisarticleinfos->tags}}</div>
                </div>
                <script>
                    window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
                </script>
                <div class="shangxiapian">
                    <p>上一篇：@if(isset($prev_article)) <a href="/{{$prev_article->arctype->real_path}}/{{$prev_article->id}}.shtml" title="{{$prev_article->title}}">{{$prev_article->title}}</a> @else 没有了 @endif </p>
                    <p >下一篇：@if(isset($next_article)) <a href="/{{$next_article->arctype->real_path}}/{{$next_article->id}}.shtml" title="{{$next_article->title}}">{{$next_article->title}}</a> @else 没有了 @endif </p>
                </div>
                <div class="xg_news">
                    <div class="title"><strong>{{$thisarticleinfos->shorttitle}}资讯</strong></div>
                    <div class="xw">
                        <ul class="clearfix">
                            @foreach($xgnews as $xgnew)
                                <li><em>{{$xgnew->updated_at}}</em><a href="/{{$xgnew->arctype->real_path}}/{{$xgnew->id}}.shtml" title="{{$xgnew->title}}">{{$xgnew->title}} </a></li>
                            @endforeach </ul>
                    </div>
                </div>
            </div>
            <div class="new_right">
                <div class="new_bt">
                    <h3> <i></i> 模具厂排行榜 </h3>
                    <div class="rank_bd">
                        <ul>
                            @foreach($topbrands as $index=>$topbrand)
                                @if($index==0)
                                    <li class="top"> <a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml" target="_blank" title="{{$topbrand->shorttitle}}"><i class="num">{{$index+1}} </i> <img src="{{$topbrand->litpic}}" alt="{{$topbrand->shorttitle}}" ></a>
                                        <div class="cont">
                                            <p><a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml" target="_blank">{{$topbrand->shorttitle}}</a></p>
                                            <p><span>投资金额：</span><i>{{$topbrand->article->brandpay}}</i></p>
                                            <p class="btn"><a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml">查看详情</a></p>
                                        </div>
                                    </li>
                                @else

                                    <li class="top"> <i class="num">{{$index+1}}</i> <span class="name"><a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml" target="_blank" title="{{$topbrand->shorttitle}}">{{$topbrand->shorttitle}}</a></span> <span class="price">{{$topbrand->article->brandpay}}</span> </li>
                                @endif

                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="new_bt">
                    <h3> <i></i> 品牌新闻 </h3>
                    <div class="bts">
                        <div class="common">
                            <ul>
                                @foreach($brandnews as $brandnew)
                                    <li><a href="/{{$brandnew->arctype->real_path}}/{{$brandnew->id}}.shtml" target="_blank" title="{{$brandnew->title}}">{{$brandnew->title}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop