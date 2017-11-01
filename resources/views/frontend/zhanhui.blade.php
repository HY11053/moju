@extends('frontend.frontend')
@section('title') {{$thisTypeinfos->title}}@stop
@section('keywords') {{$thisTypeinfos->keywords}} @stop
@section('description') {{$thisTypeinfos->description}} @stop
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
                <span class="title">展会状态：</span>
                <div class="service_list">
                    <ul class="list auto">
                        <li><a href="/zhanhuiunstart/" title="未开展会" style="color:#2577e3;">未开展会</a></li>
                        <li><a href="/zhanhuiout/" title="已开展会">已开展会</a></li>
                    </ul>

                </div>
            </div>
            <div class="clear"></div>
            <div class="city" style="z-index: 99; height: 36px;">
                <span class="title">热门城市：</span>
                <div class="service_list">
                    <div class="city_cont">
                        <ul class="list auto">
                            <li><a href="/zhanhui/" eh="" title="不限" style="color:#2577e3;">不限</a></li>
                            <li><a href="/zhanhui{{$cuid}}/1/" eh="shandong" title="北京">北京</a></li>
                            <li><a href="/zhanhui{{$cuid}}/125/" eh="jiangsu" title="济南">济南</a></li>
                            <li><a href="/zhanhui{{$cuid}}/71/" eh="anhui" title="广州">广州</a></li>
                            <li><a href="/zhanhui{{$cuid}}/281/" eh="zhejiang" title="合肥">合肥</a></li>
                            <li><a href="/zhanhui{{$cuid}}/400/" eh="fujian" title="上海">上海</a></li>
                            <li><a href="/zhanhui{{$cuid}}/282/" eh="shanghai" title="芜湖">芜湖</a></li>
                            <li><a href="/zhanhui{{$cuid}}/195/" eh="guangdong" title="武汉">武汉</a></li>
                            <li><a href="/zhanhui{{$cuid}}/126/" eh="guangxi" title="青岛">青岛</a></li>
                            <li><a href="/zhanhui{{$cuid}}/139/" eh="hainan" title="沈阳">沈阳</a></li>
                            <li><a href="/zhanhui{{$cuid}}/83/" eh="hubei" title="湖北">佛山</a></li>
                            <li><a href="/zhanhui{{$cuid}}/112/" eh="hunan" title="南京">南京</a></li>
                            <li><a href="/zhanhui{{$cuid}}/296/" eh="henan" title="长沙">长沙</a></li>
                            <li><a href="/zhanhui{{$cuid}}/126/" eh="jiangxi" title="青岛">青岛</a></li>
                            <li><a href="/zhanhui{{$cuid}}/72/" eh="beijing" title="深圳">深圳</a></li>
                            <li><a href="/zhanhui{{$cuid}}/164/" eh="tianjin" title="成都">成都</a></li>
                            <li><a href="/zhanhui{{$cuid}}/101/" eh="hebei" title="杭州">杭州</a></li>
                            <li><a href="/zhanhui{{$cuid}}/212/" eh="shanxi" title="郑州">郑州</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="time_box">
                <span class="title">展会时间：</span>
                <div class="time_bar fl">
						<span class="big_bar">
							<span m="2017" title="2017年">2017年</span>
						</span>
                    <span class="small_bar ">
							<div><a title="12月" m="12"><span>12月<i></i></span></a></div>
						</span>
                    <span class="small_bar ">
							<div><a title="11月" m="11"><span>11月<i></i></span></a></div>
						</span>
                    <span class="small_bar ">
							<div><a title="10月" m="10"><span>10月<i></i></span></a></div>
						</span>
                    <span class="small_bar  select-month ">
							<div><a title="9月" m="09"><span>9月<i></i></span></a></div>
						</span>
                    <span class="small_bar ">
							<div><a title="8月" m="08"><span>8月<i></i></span></a></div>
						</span>
                    <span class="small_bar ">
							<div><a title="7月" m="07"><span>7月<i></i></span></a></div>
						</span>
                    <span class="small_bar ">
							<div><a title="6月" m="06"><span>6月<i></i></span></a></div>
						</span>
                    <span class="small_bar ">
							<div><a title="5月" m="05"><span>5月<i></i></span></a></div>
						</span>
                    <span class="small_bar ">
							<div><a title="4月" m="04"><span>4月<i></i></span></a></div>
						</span>
                    <span class="small_bar ">
							<div><a title="3月" m="03"><span>3月<i></i></span></a></div>
						</span>
                    <span class="small_bar ">
							<div><a title="2月" m="02"><span>2月<i></i></span></a></div>
						</span>
                    <span class="small_bar ">
							<div><a title="1月" m="01"><span>1月<i></i></span></a></div>
						</span>
                    <span class="big_bar">
							<span m="2016" title="2016年">2016年</span>
						</span>
                    <span class="small_bar ">
							<div><a title="12月" m="12"><span>12月<i></i></span></a></div>
						</span>
                    <span class="small_bar ">
							<div><a title="11月" m="11"><span>11月<i></i></span></a></div>
						</span>
                    <span class="small_bar ">
							<div><a title="10月" m="10"><span>10月<i></i></span></a></div>
						</span>
                    <span class="small_bar ">
							<div><a title="9月" m="09"><span>9月<i></i></span></a></div>
						</span>
                    <span class="small_bar ">
							<div><a title="8月" m="08"><span>8月<i></i></span></a></div>
						</span>
                    <span class="small_bar ">
							<div><a title="7月" m="07"><span>7月<i></i></span></a></div>
						</span>
                    <span class="small_bar ">
							<div><a title="6月" m="06"><span>6月<i></i></span></a></div>
						</span>
                    <span class="small_bar ">
							<div><a title="5月" m="05"><span>5月<i></i></span></a></div>
						</span>
                    <span class="small_bar ">
							<div><a title="4月" m="04"><span>4月<i></i></span></a></div>
						</span>
                    <span class="small_bar ">
							<div><a title="3月" m="03"><span>3月<i></i></span></a></div>
						</span>
                    <span class="small_bar ">
							<div><a title="2月" m="02"><span>2月<i></i></span></a></div>
						</span>
                    <span class="small_bar ">
							<div><a title="1月" m="01"><span>1月<i></i></span></a></div>
						</span>
                    <span class="big_bar">
							<span m="2015" title="2015年">2015年</span>
						</span>
                </div>
            </div>
        </div>
        <div class="w910">
            <div class="order_item">
                <div class="order_item_l">
                    <a class="cur" href="#">默认排序</a>
                    <a href="#">金额排序<i class="up"></i><!--<i class="down"></i>--></a>
                </div>
                <div class="order_item_r">共找到<span>25</span>个模具厂家</div>
            </div>
            <div class="info_list">

                @foreach($pagelists as $pagelist)
                    <div class="info_groud">
                        <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" class="fl" target="_blank" title="{{$pagelist->title}}"><img src="{{$pagelist->litpic}}" alt="{{$pagelist->title}}" width="180" height="135"></a>
                        <div class="divC fl">
                            <h3><a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" target="_blank" title="{{$pagelist->title}}">{{$pagelist->title}}</a></h3>
                            <h4><span class="col_f9">展会时间：{{date('Y-m-d',strtotime($pagelist->article->starttime))}}—{{date('Y-m-d',strtotime($pagelist->article->endtime))}}</span>展馆：{{$pagelist->article->zhanguan}}  门票：{{$pagelist->article->ticket}}</h4>
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