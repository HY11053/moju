@extends('frontend.frontend')
@section('title') {{$thistypeinfo->title}}@stop
@section('keywords') {{$thistypeinfo->keywords}} @stop
@section('description')  {{$thistypeinfo->description}}  @stop
@section('headlibs')
    <meta name="Copyright" content="中国模具网-{{env('APP_URL')}}"/>
    <meta name="author" content="中国模具网" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',env('APP_URL'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',env('APP_URL'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',env('APP_URL'))}}{{Request::getrequesturi()}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',env('APP_URL'))}}{{Request::getrequesturi()}}" >
    <link rel="canonical" href="{{env('APP_URL')}}{{Request::getrequesturi()}}"/>
@stop
@section('maincontent')
<div class="main clearfix">
	<!--左边 开始-->
	<div class="ph_l">
		<p class="tit">磨具厂品牌排行榜</p>
		<ul>
			<li class="cur"><a target="_self" href="#">磨具厂</a></li>
		</ul>
	</div>
	<!--左边 结束-->
	
	<!--右边 开始-->
	<div class="ph_r">
		<div class="hd"><em>零食店品牌排行榜</em></div>
		<div class="tip_info">{{$thistypeinfo->description}}</div>
		<div class="bd">

			@foreach($pagelists as $index=>$pagelist)
				<dl>
					<dt>
						<a target="_blank" href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" title="{{$pagelist->article->companyname}}">
							<img src="{{$pagelist->litpic}}" alt="{{$pagelist->article->companyname}}">
							<em @if($index<4) class="top{{$index+1}}" @endif>{{$index+1}}</em>
						</a>
					</dt>
					<dd>
						<h3><span>投票数:<em class="votenum">{{$pagelist->click}}</em></span><a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" title="{{$pagelist->article->companyname}}" target="_blank">{{$pagelist->article->companyname}}</a></h3>
						<p class="desc">{{str_limit($pagelist->description,300,'...')}}</p>
						<a href="javascript:void(0);" class="btn">我要投票</a>
					</dd>
				</dl>
			@endforeach
			
		</div>
		<div class="page">
			{!! preg_replace('/<a href=[\'\"]?([^\'\" ]+).*?>/','<a href="${1}/">',$pagelists->links()) !!}
		</div>
	</div>
	<!--右边 结束-->
</div>
@stop
