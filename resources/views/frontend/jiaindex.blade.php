@extends('frontend.frontend')
@section('title') {{$thisTypeinfos->title}}@stop
@section('keywords') {{$thisTypeinfos->keywords}} @stop
@section('description') {{$thisTypeinfos->description}} @stop
@section('maincontent')
    <div class="main clearfix">
        @include('frontend.position')
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
                <div class="brick-list">
                    @foreach($pagelists as $pagelist)
                    <div class="brick-item serial " id="serial-1">
                        <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" class="oppo-tj"  target="_blank">
                            <div class="brick-img">
                                <img src="{{$pagelist->litpic}}" alt="{{$pagelist->title}}" title="{{$pagelist->title}}">
                            </div>
                        </a><div class="brick-content"><a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" class="oppo-tj"  target="_blank">
                                <div class="brick-title">{{$pagelist->title}}</div>
                                <p class="brick-desc">{{$pagelist->description}}</p>
                            </a><a class="brick-learn-more font-normal oppo-tj" href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml">&nbsp;&nbsp;了解产品&nbsp;&nbsp;&gt;</a>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="clear"></div>
                <div class="page">
                    {!! preg_replace('/<a href=[\'\"]?([^\'\" ]+).*?>/','<a href="${1}/">',$pagelists->links()) !!}
                </div>
                <div class="xg_news">
                    <div class="title"><strong>{{$thisTypeinfos->typename}}资讯</strong></div>
                    <div class="xw">
                        <ul class="clearfix">
                            @foreach($thistypeNews as $thistypeNew)
                            <li><em>{{date('Y-m-d',strtotime($thistypeNew->created_at))}}</em><a href="/{{$thistypeNew->arctype->real_path}}/{{$thistypeNew->id}}.shtml" title="{{$thistypeNew->title}}">{{$thistypeNew->title}} </a></li>
                            @endforeach
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
                        @foreach($phBrands as $index=>$phBrand)
                            @if($index==0)
                                <li class="top"> <a href="/{{$phBrand->arctype->real_path}}/{{$phBrand->id}}.shtml" target="_blank" title="{{$phBrand->shorttitle}}"><i class="num">{{$index+1}} </i> <img src="{{$phBrand->litpic}}" alt="{{$phBrand->shorttitle}}" ></a>
                                    <div class="cont">
                                        <p><a href="/{{$phBrand->arctype->real_path}}/{{$phBrand->id}}.shtml" target="_blank">{{$phBrand->shorttitle}}</a></p>
                                        <p><span>投资金额：</span><i>{{$phBrand->article->brandpay}}</i></p>
                                        <p class="btn"><a href="/{{$phBrand->arctype->real_path}}/{{$phBrand->id}}.shtml">查看详情</a></p>
                                    </div>
                                </li>
                            @else

                                <li class="top"> <i class="num">{{$index+1}}</i> <span class="name"><a href="/{{$phBrand->arctype->real_path}}/{{$phBrand->id}}.shtml" target="_blank" title="{{$phBrand->shorttitle}}">{{$phBrand->shorttitle}}</a></span> <span class="price">{{$phBrand->article->brandpay}}</span> </li>
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
                            @foreach($newsbrands as $newsbrand)
                            <li><a href="/{{$newsbrand->arctype->real_path}}/{{$newsbrand->id}}.shtml" target="_blank" title="{{$newsbrand->title}}">{{$newsbrand->title}}</a></li>
                            @endforeach
                     </ul>
                    </div>
                </div>
            </div>
            <div class="new_bt2">
                <h3> <i></i> 模具供求信息 </h3>
                <div class="bts">
                    <div class="common">
                        <ul>
                            @foreach($gongqiuNews as $gongqiuNew)
                            <li><a href="/{{$gongqiuNew->arctype->real_path}}/{{$gongqiuNew->id}}.shtml" target="_blank" title="{{$gongqiuNew->title}}">{{$gongqiuNew->title}}</a></li>
                            @endforeach
                     </ul>
                    </div>
                </div>
            </div>
            <!--/-->
        </div>
    </div>
@stop