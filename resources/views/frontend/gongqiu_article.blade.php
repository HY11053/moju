@extends('frontend.frontend')
@section('title') {{$thisarticleinfos->title}} @stop
@section('keywords') {{$thisarticleinfos->keywords}} @stop
@section('description')  {{$thisarticleinfos->description}} @stop
@section('maincontent')
    <div class="main clearfix">
        <div class="center_list clearfix">
            <div class="news_center">
                <div class="ny_message" style="    border-bottom: 1px dotted #C0C0C0; color: #333333;">
                    <h1> {{$thisarticleinfos->title}}</h1>
                    <div class="ny_message-js"> 时间：{{$thisarticleinfos->created_at}} <span>来源：中国模具网</span> <span>浏览：{{$thisarticleinfos->click}}</span> </div>
                </div>
                <div id="Business-a">
                    <div class="productdata">
                        <div class="productimg" onmouseover="jq('.bigimg').hide();" onmouseout="jq('.bigimg').show();">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tbody><tr><td width="327" height="278" align="center" valign="middle"><div id="wrap" style="top:0px;z-index:1;position:relative;"><a href="http://www.uggd.com/d/file/2017/11/01/smallcd9af29a458430f6726e4d4a8ff95912.jpg" class="cloud-zoom" target="_blank" style="position: relative; display: block; width: 320px; height: 270px;"><img src="http://www.uggd.com/d/file/2017/11/01/smallcd9af29a458430f6726e4d4a8ff95912.jpg" alt="【景德镇可行性研究报告】价格、案例、多少钱、summer" align="left" onerror="this.src='http://www.uggd.com/e/space/template/comdefault/images/bigno.jpg';" style="display: block; width: 320px; height: 270px;"><div class="mousetrap" style="background-image: url(&quot;.&quot;); z-index: 999; position: absolute; width: 320px; height: 270px; left: 0px; top: 0px; cursor: move;"></div></a></div></td>
                                </tr></tbody></table>
                            <div class="bigimg" style="display: block;"><a href="javascript:void(0);"></a></div>
                        </div>
                    </div>
                    <div class="parameter">
                        供货总量：10000<br>
                        所在区域：北京 <br>
                        品牌：金兰<br>
                        型号：A4<br>
                        发布时间：2017-11-01<br>
                        有效期：2017-11-01 -- 0000-00-00<br>
                        浏览：0</div>
                    <div class="product-button">
                        <a href="http://www.uggd.com/d/file/2017/11/01/smallcd9af29a458430f6726e4d4a8ff95912.jpg" target="_blank"></a><a href="http://www.uggd.com/ug1401839/feedback-info-3392257.html" class="onmessage" target="_blank"></a>
                    </div>
                </div>
                <div class="clear"></div>
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
                    <div class="title"><strong>{{$thisarticleinfos->tags}}资讯</strong></div>
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