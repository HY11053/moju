@extends('mobile.mobile')
@section('title') {{$thisarticleinfos->title}} @stop
@section('keywords') {{$thisarticleinfos->keywords}} @stop
@section('description')  {{$thisarticleinfos->description}} @stop
@section('headlibs')
    <link rel="stylesheet" href="/mobiles/css/css.css" />
@stop
@section('maincontent')
    @include('mobile.position')
    <div class="brand_detail">
        <div class="hd">
            <div class="img_show"><img src="{{$thisarticleinfos->litpic}}" alt="{{$thisarticleinfos->title}}"/></div>
            <div class="cont">
                <h1 class="tit">{{$thisarticleinfos->article->companyname}}</h1>
                <p class="price">经营范围：<em>{{$thisarticleinfos->article->companyarea}}</em></p>
                <p>公司地址 {{$thisarticleinfos->article->companyaddr}}</p>
                <p>企业性质：{{$thisarticleinfos->article->companyopt}}</p>
                <p>品牌好评率{{rand(85,99)}}%</p>
            </div>
        </div>
        <div class="brand_tit" id="js_join_1" style="margin-bottom: 8px">@if(!empty($thisarticleinfos->article->companyavtitle))  <h2 class="tit">{{$thisarticleinfos->article->companyavtitle}}</h2> @else <span class="tit">【{{$thisarticleinfos->article['companyname']}}】<em>品牌介绍</em></span>  @endif</div>
        <table cellspacing="0" style="border-top: 1px solid rgb(230, 230, 230);">
            <tbody>
            <tr>
                <td class="td_color" >公司名称</td>
                <td class="td_style">{{$thisarticleinfos->article->companyname}}</td>
                <td class="td_color">投资金额</td>
                <td class="td_style">{{$thisarticleinfos->article->companypay}}</td>
            </tr>
            <tr>
                <td class="td_color" >成立日期</td>
                <td class="td_style">{{$thisarticleinfos->article->companydate}}</td>
                <td class="td_color">综合指数</td>
                <td class="td_style">{{$thisarticleinfos->click}}</td>
            </tr>
            <tr>
                <td class="td_color">经营范围</td>
                <td class="td_style">{{$thisarticleinfos->article->companyarea}}</td>
                <td class="td_color">企业性质</td>
                <td class="td_style">{{$thisarticleinfos->article->companyopt}}</td>
            </tr>
            <tr>
                <td class="td_color">公司地址</td>
                <td class="td_style">{{$thisarticleinfos->article->companyaddr}}</td>
                <td class="td_color">发展模式</td>
                <td class="td_style">{{$thisarticleinfos->article->companydev}}</td>
            </tr>
            <tr>
                <td class="td_color">所在地区</td>
                <td class="td_style">{{$thisarticleinfos->country}}</td>
                <td class="td_color">联系电话</td>
                <td class="td_style">{{$thisarticleinfos->article->companyphone}}</td>
            </tr>
            <tr>
                <td class="td_color">经营许可</td>
                <td class="td_style">{{$thisarticleinfos->article->brandapply}}</td>
                <td class="td_color"></td>
                <td class="td_style"></td>
            </tr>
            </tbody>
        </table>

        <div class="brand_cont">
            {!! $thisarticleinfos->article->body !!}
      	</div>
        <div class="brand_tit" id="js_join_">@if(!empty($thisarticleinfos->article->companyavtitle))  <h2 class="tit">{{$thisarticleinfos->article->companyavtitle}}</h2> @else <span class="tit">【{{$thisarticleinfos->article['companyname']}}】<em>公司优势</em></span>  @endif</div>
        <div class="brand_cont">
            {!! $thisarticleinfos->article['companyadvantage'] !!}
        </div>

        <div class="brand_tit" id="js_join_2">  @if(!empty($thisarticleinfos->article->companyavtitle))  <h2 class="tit">{{$thisarticleinfos->article->companyavtitle}}</h2> @else <h2 class="tit">【{{$thisarticleinfos->article['companyname']}}】<em>公司优势</em></h2>  @endif </div>
        <div class="brand_cont">
            {!! $thisarticleinfos->article['companyadvantage'] !!}
        </div>
        <div class="brand_tit" id="js_join_3">    @if(!empty($thisarticleinfos->article->companyareatitle))  <h2 class="tit">{{$thisarticleinfos->article->companyareatitle}}</h2> @else <h2 class="tit">【{{$thisarticleinfos->article['companyname']}}】<em>经营范围</em></h2>  @endif  </div>
        <div class="brand_cont">
            {!! $thisarticleinfos->article['companyareacontent'] !!}
        </div>
        <div class="brand_tit" id="js_join_4"> @if(!empty($thisarticleinfos->article->processtitle))  <h2 class="tit">{{$thisarticleinfos->article->processtitle}}</h2> @else <h2 class="tit">【{{$thisarticleinfos->article['companyname']}}】<em>加工流程</em></h2>  @endif  </div>
        <div class="brand_cont">
            {!! $thisarticleinfos->article['processcontent'] !!}
        </div>
        <div class="brand_tit" id="js_join_5">  @if(!empty($thisarticleinfos->article->productiontitle))  <h2 class="tit">{{$thisarticleinfos->article->productiontitle}}</h2> @else <h2 class="tit">【{{$thisarticleinfos->article['companyname']}}】<em>产品展示</em></h2>  @endif  </div>
        <div class="brand_cont">
            {!! $thisarticleinfos->article['productioncontent'] !!}
        </div>
        <div class="brand_tit" id="js_join_6">  @if(!empty($thisarticleinfos->article->credittitle))  <h2 class="tit">{{$thisarticleinfos->article->credittitle}}</h2> @else <h2 class="tit">【{{$thisarticleinfos->article['companyname']}}】<em>企业信用</em></h2>  @endif  </div>
        <div class="brand_cont">
            {!! $thisarticleinfos->article['creditcontent'] !!}
        </div>
        <div class="brand_tit" id="js_join_7"> @if(!empty($thisarticleinfos->article->teamtitle))  <h2 class="tit">{{$thisarticleinfos->article->teamtitle}}</h2> @else <h2 class="tit">【{{$thisarticleinfos->article['companyname']}}】<em>团队展示</em></h2>  @endif</div>
        <div class="brand_cont">
            {!! $thisarticleinfos->article['teamcontent'] !!}
        </div>
        <div class="clear"></div>
        <div class="index_btn" > <a href="#" class="btn_2">开店咨询</a> <a href="#" class="btn">索取资料</a> </div>
        <div class="brand_tit" > <span class="tit">【{{$thisarticleinfos['shorttitle']}}】<em>品牌展示</em></span> </div>
        <div class=" join_img">
            <ul>
                @foreach( array_filter(explode(',',$thisarticleinfos->article['imagepics'])) as $pics)
                    <li><img src="{{$pics}}" alt="【{{$thisarticleinfos->shorttitle}}】"/></li>
                @endforeach
            </ul>
        </div>
        <div class="clear"></div>
    </div>
	<div class="index_new rela_news">
		<div class="common_tit">
			<a class="tit">相关文章</a>
		</div>
		<div class="bd">
			<ul>
                @foreach($xgsearchs as $xgsearch)
                    <li><span class="date">{{$xgsearch->published_at}}</span><a class="txt" href="/{{$xgsearch->arctype->real_path}}/{{$xgsearch->id}}.shtml" title="{{$xgsearch->title}}">{{$xgsearch->title}} </a></li>
                @endforeach
              </ul>
		</div>
	</div>
    <div class="index_new rela_news">
        <div class="common_tit">
            <a class="tit">最新模具新闻</a>
        </div>
        <div class="bd">
            <ul>
                @foreach($latesnews as $latesnew)
                    <li><span class="date">{{$latesnew->published_at}}</span><a class="txt" href="/{{$latesnew->arctype->real_path}}/{{$latesnew->id}}.shtml" title="{{$latesnew->title}}">{{$latesnew->title}} </a></li>
                @endforeach
            </ul>
        </div>
    </div>


@stop
