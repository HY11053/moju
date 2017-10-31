@extends('frontend.frontend')
@section('title') {{ config('app.webname', '中国模具网') }} @stop
@section('keywords') {{ config('app.keywords', '中国模具网') }} @stop
@section('description') {{ config('app.description', '中国模具网') }} @stop
@section('maincontent')
    <div class="main clearfix">
        <div class="address">
            <div class="choice">
                <span class="title">您已选择：</span>

                <div class="choice_list">

                    <span>不限<i></i></span>
                </div>
            </div>
            <div class="service">
                <span class="title">产品分类：</span>
                <div class="service_list">
                    <ul class="list auto">
                        @foreach($sonTypeinfos as $sonTypeinfo)
                        <li><a href="/{{ $sonTypeinfo->real_path}}/" title="{{ $sonTypeinfo->typename}}" style="color:#2577e3;">{{ $sonTypeinfo->typename}}</a></li>
                       @endforeach
                    </ul>

                </div>
            </div>
            <div class="clear"></div>
        </div>

        <div class="rightl">

            <div class="pro_main">
                <div class=""></div>
                @foreach($pagelists as $pagelist)
                <dl class="pd_list_dl">
                    <dt><a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" title="{{$pagelist->title}}" target="_blank">
                            <img width="300" height="250" src="{{$pagelist->litpic}}" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" data-bd-imgshare-binded="1"></a></dt>
                    <dd><a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" title="{{$pagelist->title}}" target="_blank">{{$pagelist->title}}</a></dd>
                    <p>
                        <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" title="了解详情" target="_blank">
                            <img src="http://www.bolch168.com/wp-content/themes/ztheme/images/pro_bt1.gif" alt="了解详情" title="了解详情" data-bd-imgshare-binded="1"></a>
                        <a href="#" title="免费咨询" target="_blank">
                            <img src="http://www.bolch168.com/wp-content/themes/ztheme/images/pro_bt2.gif" alt="免费咨询" title="免费咨询" data-bd-imgshare-binded="1"></a></p>
                </dl>
                @endforeach
                <div class="clear"></div>
                <div class="page">
                    {!! preg_replace('/<a href=[\'\"]?([^\'\" ]+).*?>/','<a href="${1}/">',$pagelists->links()) !!}
                </div>
                <div class="xg_news">
                    <div class="title"><strong>戴永红炒货资讯</strong></div>
                    <div class="xw">
                        <ul class="clearfix">
                            <li><em>2017-05-11</em><a href="/chaohuodian/9.shtml" title="戴永红炒货加盟费多少,70平仅需28万元">戴永红炒货加盟费多少,70平仅需28万元 </a></li>
                            <li><em>2017-06-27</em><a href="/chaohuodian/1466.shtml" title="戴永红炒货加盟怎么样？360度扶持让您玩转零食市场">戴永红炒货加盟怎么样？360度扶持让您玩转零食市场 </a></li>
                            <li><em>2017-06-27</em><a href="/chaohuodian/1549.shtml" title="株洲戴永红炒货店加盟赚钱吗？年入46.08万元净利润 加盟两年即可买宝马">株洲戴永红炒货店加盟赚钱吗？年入46.08万元净利润 加盟两年即可买宝马 </a></li>
                            <li><em>2017-06-19</em><a href="/chaohuodian/1802.shtml" title="株洲开戴永红炒货利润怎么样？月入上万不是梦">株洲开戴永红炒货利润怎么样？月入上万不是梦 </a></li>
                            <li><em>2017-06-27</em><a href="/chaohuodian/657.shtml" title="戴永红炒货如何加盟，戴永红炒货加盟流程">戴永红炒货如何加盟，戴永红炒货加盟流程 </a></li>
                            <li><em>2017-06-12</em><a href="/chaohuodian/1568.shtml" title="株洲戴永红炒货加盟条件是什么">株洲戴永红炒货加盟条件是什么 </a></li>
                            <li><em>2017-06-27</em><a href="/chaohuodian/660.shtml" title="戴永红炒货加盟条件，戴永红炒货加盟要求">戴永红炒货加盟条件，戴永红炒货加盟要求 </a></li>
                            <li><em>2017-06-27</em><a href="/chaohuodian/665.shtml" title="戴永红炒货加盟利润大吗？年净利润高达40万">戴永红炒货加盟利润大吗？年净利润高达40万 </a></li>
                            <li><em>2017-06-07</em><a href="/chaohuodian/1401.shtml" title="戴永红炒货加盟条件？0风险，新手轻松当老板">戴永红炒货加盟条件？0风险，新手轻松当老板 </a></li>
                            <li><em>2017-05-11</em><a href="/chaohuodian/602.shtml" title="戴永红炒货加盟费多少钱？仅需14.66万元即可开店">戴永红炒货加盟费多少钱？仅需14.66万元即可开店 </a></li>
                        </ul>
                    </div>
                </div>

            </div>


        </div>
        <div class="new_right">
            <div class="new_bt2">
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
            <div class="new_bt2">
                <h3> <i></i> 模具资讯 </h3>
                <div class="bts">
                    <div class="common">
                        <ul>
                            <li><a href="/lingshizx/312.shtml" target="_blank" title="薛记炒货如何加盟？加盟薛记炒货流程很简单">薛记炒货如何加盟？加盟薛记炒货流程很简单</a></li>
                            <li><a href="/ganguodian/322.shtml" target="_blank" title="加盟百惠园利润回报多少？标准店16.23万年盈利">加盟百惠园利润回报多少？标准店16.23万年盈利</a></li>
                            <li><a href="/ganguodian/153.shtml" target="_blank" title="金冠加盟利润多少？如何提高加盟利润">金冠加盟利润多少？如何提高加盟利润</a></li>
                            <li><a href="/jinkoulingshi/476.shtml" target="_blank" title="兔子家进口食品加盟投资条件高不高？适合所有投资者！">兔子家进口食品加盟投资条件高不高？适合所有投资者！</a></li>
                            <li><a href="/ganguodian/273.shtml" target="_blank" title="投资开姚生记连锁店多少钱？8.53万元开店小本项目">投资开姚生记连锁店多少钱？8.53万元开店小本项目</a></li>
                            <li><a href="/chaohuodian/1071.shtml" target="_blank" title="厚生记坚果炒货加盟利润大吗？掌握核心科技月赚3万多！">厚生记坚果炒货加盟利润大吗？掌握核心科技月赚3万多！</a></li>
                            <li><a href="/ganguodian/251.shtml" target="_blank" title="开百草园零食店要多少钱？总费用只要9.285万元">开百草园零食店要多少钱？总费用只要9.285万元</a></li>
                            <li><a href="/ganguodian/368.shtml" target="_blank" title="逗妮开心加盟能赚钱吗？小型店也能年入21.49万元">逗妮开心加盟能赚钱吗？小型店也能年入21.49万元</a></li>
                            <li><a href="/jinkoulingshi/815.shtml" target="_blank" title="舌间味进口食品加盟费多少钱？5-15万即可轻松开店">舌间味进口食品加盟费多少钱？5-15万即可轻松开店</a></li>
                            <li><a href="/chaohuodian/775.shtml" target="_blank" title="张二嘎炒货加盟费多少钱？县级城市只要5万">张二嘎炒货加盟费多少钱？县级城市只要5万</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="new_bt2">
                <h3> <i></i> 模具供求信息 </h3>
                <div class="bts">
                    <div class="common">
                        <ul>
                            <li><a href="/lingshizx/312.shtml" target="_blank" title="薛记炒货如何加盟？加盟薛记炒货流程很简单">薛记炒货如何加盟？加盟薛记炒货流程很简单</a></li>
                            <li><a href="/ganguodian/322.shtml" target="_blank" title="加盟百惠园利润回报多少？标准店16.23万年盈利">加盟百惠园利润回报多少？标准店16.23万年盈利</a></li>
                            <li><a href="/ganguodian/153.shtml" target="_blank" title="金冠加盟利润多少？如何提高加盟利润">金冠加盟利润多少？如何提高加盟利润</a></li>
                            <li><a href="/jinkoulingshi/476.shtml" target="_blank" title="兔子家进口食品加盟投资条件高不高？适合所有投资者！">兔子家进口食品加盟投资条件高不高？适合所有投资者！</a></li>
                            <li><a href="/ganguodian/273.shtml" target="_blank" title="投资开姚生记连锁店多少钱？8.53万元开店小本项目">投资开姚生记连锁店多少钱？8.53万元开店小本项目</a></li>
                            <li><a href="/chaohuodian/1071.shtml" target="_blank" title="厚生记坚果炒货加盟利润大吗？掌握核心科技月赚3万多！">厚生记坚果炒货加盟利润大吗？掌握核心科技月赚3万多！</a></li>
                            <li><a href="/ganguodian/251.shtml" target="_blank" title="开百草园零食店要多少钱？总费用只要9.285万元">开百草园零食店要多少钱？总费用只要9.285万元</a></li>
                            <li><a href="/ganguodian/368.shtml" target="_blank" title="逗妮开心加盟能赚钱吗？小型店也能年入21.49万元">逗妮开心加盟能赚钱吗？小型店也能年入21.49万元</a></li>
                            <li><a href="/jinkoulingshi/815.shtml" target="_blank" title="舌间味进口食品加盟费多少钱？5-15万即可轻松开店">舌间味进口食品加盟费多少钱？5-15万即可轻松开店</a></li>
                            <li><a href="/chaohuodian/775.shtml" target="_blank" title="张二嘎炒货加盟费多少钱？县级城市只要5万">张二嘎炒货加盟费多少钱？县级城市只要5万</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/-->

        </div>
    </div>


@stop