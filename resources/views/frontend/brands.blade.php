@extends('frontend.frontend')
@section('title') {{$thisTypeinfos->title}}@stop
@section('keywords') {{$thisTypeinfos->keywords}} @stop
@section('description') {{$thisTypeinfos->description}} @stop
@section('maincontent')
    <div class="main clearfix">
        @include('frontend.position')
        <div class="cate_sort">
            <dl>
                <dt>已经筛选条件：</dt>
                <dd></dd>
            </dl>
            <dl>
                <dt>模具类型</dt>
                <dd><a @if(!$option) class="hover" @endif  target="_self" href="#">全部</a></dd>
                @foreach($tradeTypes as $tradeType)
                    <dd><a target="_self" @if($option && $option==$tradeType->id) class="hover" @endif href="/mojuchang/filter/{{$tradeType->id}}/">{{$tradeType->moldtype}}</a></dd>
                @endforeach

            </dl>
            <dl>
                <dt>所在地区</dt>
                <dd><a @if($city==0) class="hover" @endif target="_self" href="#">地区</a></dd>
                <dd><a target="_self" @if($city==1) class="hover" @endif href="/mojuchang/filter/{{$option}}-1/">北京</a></dd>
                <dd><a target="_self" @if($city==125) class="hover" @endif  href="/mojuchang/filter/{{$option}}-125/">济南</a></dd>
                <dd><a target="_self" @if($city==71) class="hover" @endif  href="/mojuchang/filter/{{$option}}-71/">广州</a></dd>
                <dd><a target="_self" @if($city==281) class="hover" @endif  href="/mojuchang/filter/{{$option}}-281/">合肥</a></dd>
                <dd><a target="_self" @if($city==400) class="hover" @endif  href="/mojuchang/filter/{{$option}}-400/">上海</a></dd>
                <dd><a target="_self" @if($city==282) class="hover" @endif  href="/mojuchang/filter/{{$option}}-282/">芜湖</a></dd>
                <dd><a target="_self" @if($city==195) class="hover" @endif  href="/mojuchang/filter/{{$option}}-195/">武汉</a></dd>
                <dd><a target="_self" @if($city==112) class="hover" @endif  href="/mojuchang/filter/{{$option}}-112/">南京</a></dd>
                <dd><a target="_self" @if($city==296) class="hover" @endif  href="/mojuchang/filter/{{$option}}-296/">长沙</a></dd>
                <dd><a target="_self" @if($city==126) class="hover" @endif  href="/mojuchang/filter/{{$option}}-126/">青岛</a></dd>
                <dd><a target="_self" @if($city==72) class="hover" @endif  href="/mojuchang/filter/{{$option}}-72/">深圳</a></dd>
                <dd><a target="_self" @if($city==164) class="hover" @endif  href="/mojuchang/filter/{{$option}}-164/">成都</a></dd>
                <dd><a target="_self" @if($city==139) class="hover" @endif  href="/mojuchang/filter/{{$option}}-139/">沈阳</a></dd>
                <dd><a target="_self" @if($city==29) class="hover" @endif  href="/mojuchang/filter/{{$option}}-29/">重庆</a></dd>
                <dd><a target="_self" @if($city==212) class="hover" @endif  href="/mojuchang/filter/{{$option}}-212/">郑州</a></dd>
                <dd><a target="_self" @if($city==101) class="hover" @endif  href="/mojuchang/filter/{{$option}}-101/">杭州</a></dd>
                <dd><a target="_self" @if($city==83) class="hover" @endif  href="/mojuchang/filter/{{$option}}-83/">佛山</a></dd>
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
                                <div class="jibie fl"><span>投资星级：<em class="xing">@if($pagelist->click <2000)★★★@elseif($pagelist->click <3000)★★★★ @elseif($pagelist->click >3000) ★★★★★ @endif</em></span></div>
                                <span class="money fr h4">综合指数：&nbsp;<em class="red">{{$pagelist->click}}</em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;厂址：&nbsp;<em class="red">{{$pagelist->article->companyaddr}}</em>&nbsp;&nbsp;</span>
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
            <div class="bn260"><a href="/lingshidianpp/91.shtml" target="_blank"><img src="/reception/images/bn6.jpg" width="260" height="295" alt=""></a></div>

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