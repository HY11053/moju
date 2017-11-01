@extends('frontend.frontend')
@section('title') {{$thistypeinfo->title}}@stop
@section('keywords') {{$thistypeinfo->keywords}} @stop
@section('description')  {{$thistypeinfo->description}}  @stop
@section('maincontent')
<div class="main clearfix">
	<!--左边 开始-->
	<div class="ph_l">
		<p class="tit">磨具厂品牌排行榜</p>
		<ul>
			@foreach($tradeTypes as $index=>$tradeType)
				<li @if($index<1)class="cur"@endif><a target="_self" href="/{{$tradeType->real_path}}/">{{$tradeType->typename}}</a></li>
			@endforeach
		</ul>
	</div>
	<!--左边 结束-->
	
	<!--右边 开始-->
	<div class="ph_r">
		<div class="hd"><em>模具生产厂家排行榜</em></div>
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
