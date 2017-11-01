@extends('frontend.frontend')
@section('title') {{$thisTypeinfos->title}}@stop
@section('keywords') {{$thisTypeinfos->keywords}} @stop
@section('description') {{$thisTypeinfos->description}} @stop
@section('maincontent')
    <div class="main clearfix">

        <div class="cate_sort">
            <dl>
                <dt>已经筛选条件：</dt>
                <dd></dd>
            </dl>
            <dl>
                <dt>模具类型</dt>
                <dd><a @if(Request::getrequesturi()=='/mojufenlei')class="hover" @endif target="_self" href="#">全部</a></dd>
                @foreach($tradeTypes as $tradeType)
                    <dd><a target="_self"  @if(Request::getrequesturi()=='/'.$tradeType->real_path || isset($path) && $path==$tradeType->real_path)class="hover" @endif  href="/{{$tradeType->real_path}}/">{{$tradeType->typename}}</a></dd>
                @endforeach

            </dl>
            <dl>
                <dt>适用范围</dt>
                <dd><a @if(!isset($syfw) || empty($syfw)) class="hover" @endif  target="_self" href="#">全部</a></dd>
                @foreach($moldareas as $moldarea)
                <dd><a @if(isset($syfw) && $syfw==$moldarea->id) class="hover" @endif target="_self" href="/{{$path}}/mjsx/{{$moldarea->id}}">{{$moldarea->moldarea}}</a></dd>
                @endforeach
            </dl>
            <dl>
                <dt>作用对象</dt>
                <dd><a @if(!isset($zydx) || empty($zydx)) class="hover" @endif target="_self" href="#">全部</a></dd>
                @foreach($moldobjects as $moldobject)
                <dd><a @if(isset($zydx) && $zydx==$moldobject->id) class="hover" @endif target="_self" href="/{{$path}}/mjsx/{{$syfw}}-{{$moldobject->id}}/">{{$moldobject->moldobject}}</a></dd>
                @endforeach
            </dl>
            <dl>
                <dt>所在地区</dt>
                <dd><a @if($city==0)  class="hover" @endif target="_self" href="#">地区</a></dd>
                <dd><a target="_self" @if($city==1)  class="hover" @endif href="/{{$path}}/mjsx/{{$syfw}}-{{$zydx}}-1/">北京</a></dd>
                <dd><a target="_self" @if($city==125)  class="hover" @endif href="/{{$path}}/mjsx/{{$syfw}}-{{$zydx}}-125/">济南</a></dd>
                <dd><a target="_self" @if($city==71)  class="hover" @endif  href="/{{$path}}/mjsx/{{$syfw}}-{{$zydx}}-71/">广州</a></dd>
                <dd><a target="_self" @if($city==281)  class="hover" @endif  href="/{{$path}}/mjsx/{{$syfw}}-{{$zydx}}-281/">合肥</a></dd>
                <dd><a target="_self" @if($city==400)  class="hover" @endif  href="/{{$path}}/mjsx/{{$syfw}}-{{$zydx}}-400/">上海</a></dd>
                <dd><a target="_self" @if($city==282)  class="hover" @endif  href="/{{$path}}/mjsx/{{$syfw}}-{{$zydx}}-282/">芜湖</a></dd>
                <dd><a target="_self" @if($city==195)  class="hover" @endif  href="/{{$path}}/mjsx/{{$syfw}}-{{$zydx}}-195/">武汉</a></dd>
                <dd><a target="_self" @if($city==112)  class="hover" @endif  href="/{{$path}}/mjsx/{{$syfw}}-{{$zydx}}-112/">南京</a></dd>
                <dd><a target="_self" @if($city==296)  class="hover" @endif  href="/{{$path}}/mjsx/{{$syfw}}-{{$zydx}}-296/">长沙</a></dd>
                <dd><a target="_self" @if($city==126)  class="hover" @endif  href="/{{$path}}/mjsx/{{$syfw}}-{{$zydx}}-126/">青岛</a></dd>
                <dd><a target="_self" @if($city==72)  class="hover" @endif  href="/{{$path}}/mjsx/{{$syfw}}-{{$zydx}}-72/">深圳</a></dd>
                <dd><a target="_self" @if($city==164)  class="hover" @endif href="/{{$path}}/mjsx/{{$syfw}}-{{$zydx}}-164/">成都</a></dd>
                <dd><a target="_self" @if($city==139)  class="hover" @endif href="/{{$path}}/mjsx/{{$syfw}}-{{$zydx}}-139/">沈阳</a></dd>
                <dd><a target="_self" @if($city==29)  class="hover" @endif href="/{{$path}}/mjsx/{{$syfw}}-{{$zydx}}-29/">重庆</a></dd>
                <dd><a target="_self" @if($city==212)  class="hover" @endif href="/{{$path}}/mjsx/{{$syfw}}-{{$zydx}}-212/">郑州</a></dd>
                <dd><a target="_self" @if($city==101)  class="hover" @endif href="/{{$path}}/mjsx/{{$syfw}}-{{$zydx}}-101/">杭州</a></dd>
                <dd><a target="_self" @if($city==83)  class="hover" @endif href="/{{$path}}/mjsx/{{$syfw}}-{{$zydx}}-83/">佛山</a></dd>
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

            <div class="info_list">
                @foreach($pagelists as $pagelist)
                <div class="info_groud">
                    <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" class="fl" target="_blank" title="{{$pagelist->title}}"><img src="{{$pagelist->litpic}}" alt="{{$pagelist->title}}" width="180" height="135"></a>
                    <div class="divC fl">
                        <h3><a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" target="_blank" title="{{$pagelist->title}}">{{$pagelist->title}}</a></h3>
                        <h4><span class="col_f9">模具类型：{{$pagelist->article->mjlx}}</span>适用范围：{{$pagelist->article->syfw}}  安装方式：{{$pagelist->article->azfs}}</h4>
                        <p> {{$pagelist->description}}...<a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" target="_blank" title="{{$pagelist->title}}">[详情]</a></p>
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