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
                <span class="title">展会状态：</span>
                <div class="service_list">
                    <ul class="list auto">
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/guonei/" title="不限" style="color:#2577e3;">未开展会</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/shipinyinpin/guonei/" title="食品饮品">已开展会</a></li>
                    </ul>

                </div>
            </div>
            <div class="clear"></div>
            <div class="city" style="z-index: 99; height: 36px;">
                <span class="title">热门城市：</span>
                <div class="service_list">
                    <div class="city_cont">
                        <ul class="list auto">
                            <li><a href="" eh="" title="不限" style="color:#2577e3;">不限</a></li>
                            <li><a href="" eh="shandong" title="山东">山东</a></li>
                            <li><a href="" eh="jiangsu" title="江苏">江苏</a></li>
                            <li><a href="" eh="anhui" title="安徽">安徽</a></li>
                            <li><a href="" eh="zhejiang" title="浙江">浙江</a></li>
                            <li><a href="" eh="fujian" title="福建">福建</a></li>
                            <li><a href="" eh="shanghai" title="上海">上海</a></li>
                            <li><a href="" eh="guangdong" title="广东">广东</a></li>
                            <li><a href="" eh="guangxi" title="广西">广西</a></li>
                            <li><a href="" eh="hainan" title="海南">海南</a></li>
                            <li><a href="" eh="hubei" title="湖北">湖北</a></li>
                            <li><a href="" eh="hunan" title="湖南">湖南</a></li>
                            <li><a href="" eh="henan" title="河南">河南</a></li>
                            <li><a href="" eh="jiangxi" title="江西">江西</a></li>
                            <li><a href="" eh="beijing" title="北京">北京</a></li>
                            <li><a href="" eh="tianjin" title="天津">天津</a></li>
                            <li><a href="" eh="hebei" title="河北">河北</a></li>
                            <li><a href="" eh="shanxi" title="山西">山西</a></li>
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
                <ul class="pagination">

                    <li class="disabled"><span>上一页</span></li>





                    <li class="active"><span>1</span></li>
                    <li><a href="http://www.moju.com/mojuchang/page/2/">2</a></li>
                    <li><a href="http://www.moju.com/mojuchang/page/3/">3</a></li>


                    <li><a href="http://www.moju.com/mojuchang/page/2/">下一页</a></li>
                </ul>

            </div>
        </div>
        <div class="w260">

            <div class="new_bt">
                <h3> <i></i> 磨具厂排行榜 </h3>
                <div class="rank_bd">
                    <ul>
                        <li class="top"> <a href="/mojuchang/489.shtml" target="_blank" title="方正科技科技有限公司"><i class="num">1 </i> <img src="https://lorempixel.com/640/480/?26912" alt="方正科技科技有限公司"></a>
                            <div class="cont">
                                <p><a href="/mojuchang/489.shtml" target="_blank">方正科技科技有限公司</a></p>
                                <p><span>投资金额：</span><i></i></p>
                                <p class="btn"><a href="/mojuchang/489.shtml">查看详情</a></p>
                            </div>
                        </li>


                        <li class="top"> <i class="num">2</i> <span class="name"><a href="/mojuchang/1826.shtml" target="_blank" title="易动力信息有限公司">易动力信息有限公司</a></span> <span class="price"></span> </li>


                        <li class="top"> <i class="num">3</i> <span class="name"><a href="/mojuchang/2425.shtml" target="_blank" title="维涛网络有限公司">维涛网络有限公司</a></span> <span class="price"></span> </li>


                        <li class="top"> <i class="num">4</i> <span class="name"><a href="/mojuchang/1746.shtml" target="_blank" title="中建创业信息有限公司">中建创业信息有限公司</a></span> <span class="price"></span> </li>


                        <li class="top"> <i class="num">5</i> <span class="name"><a href="/mojuchang/1253.shtml" target="_blank" title="信诚致远网络有限公司">信诚致远网络有限公司</a></span> <span class="price"></span> </li>


                        <li class="top"> <i class="num">6</i> <span class="name"><a href="/mojuchang/1561.shtml" target="_blank" title="联软网络有限公司">联软网络有限公司</a></span> <span class="price"></span> </li>


                        <li class="top"> <i class="num">7</i> <span class="name"><a href="/mojuchang/648.shtml" target="_blank" title="创亿传媒有限公司">创亿传媒有限公司</a></span> <span class="price"></span> </li>


                        <li class="top"> <i class="num">8</i> <span class="name"><a href="/mojuchang/2474.shtml" target="_blank" title="天益科技有限公司">天益科技有限公司</a></span> <span class="price"></span> </li>


                        <li class="top"> <i class="num">9</i> <span class="name"><a href="/mojuchang/1273.shtml" target="_blank" title="信诚致远科技有限公司">信诚致远科技有限公司</a></span> <span class="price"></span> </li>


                        <li class="top"> <i class="num">10</i> <span class="name"><a href="/mojuchang/889.shtml" target="_blank" title="凌云科技有限公司">凌云科技有限公司</a></span> <span class="price"></span> </li>


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
                        <li><a href="/mojufenlei/2471.shtml" target="_blank" title="方正科技网络有限公司">方正科技网络有限公司</a></li>
                        <li><a href="/cscxm/27.shtml" target="_blank" title="创亿科技有限公司">创亿科技有限公司</a></li>
                        <li><a href="/zixun/266.shtml" target="_blank" title="立信电子信息有限公司">立信电子信息有限公司</a></li>
                        <li><a href="/ccm/2349.shtml" target="_blank" title="开发区世创信息有限公司">开发区世创信息有限公司</a></li>
                        <li><a href="/mojufenlei/965.shtml" target="_blank" title="快讯信息有限公司">快讯信息有限公司</a></li>
                        <li><a href="/mojufenlei/2164.shtml" target="_blank" title="联软网络有限公司">联软网络有限公司</a></li>
                        <li><a href="/gongqiu/2479.shtml" target="_blank" title="富罳信息有限公司">富罳信息有限公司</a></li>
                        <li><a href="/zscxm/394.shtml" target="_blank" title="富罳传媒有限公司">富罳传媒有限公司</a></li>
                        <li><a href="/mojujia/1034.shtml" target="_blank" title="天益科技有限公司">天益科技有限公司</a></li>
                        <li><a href="/lsm/245.shtml" target="_blank" title="巨奥网络有限公司">巨奥网络有限公司</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop