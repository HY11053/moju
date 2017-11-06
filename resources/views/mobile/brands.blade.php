@extends('mobile.mobile')
@section('title') {{$thisTypeinfos->title}}@stop
@section('keywords') {{$thisTypeinfos->keywords}} @stop
@section('description')  {{$thisTypeinfos->description}}  @stop
@section('maincontent')
    <p class="bg-primary"> &nbsp;&nbsp;<a href="http://www.lingshijmls.com/">主页</a> &gt; <a href="/jmzn/">模具厂</a> &gt; </p>
    <div class="index_purchaseList">
        <ul class="purchase_orders">
            <div id="twoQuotePurchaseList"></div>
            <div id="purchaseList">
                @foreach($pagelists as $pagelist)
                <li class="index_purchaseOrder purchase_payAndSel">
                    <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml">
                        <div class="ipl_info"><h4 class="ipl_title">{{$pagelist->title}}</h4>
                            <p>{{$pagelist->description}}</p>
                            <p class="money fr h4">综合指数：&nbsp;<em class="red">2400</em> </p>
                            <p class="ipl_quote">所在地区<em>{{$pagelist->country}}</em>	</p>
                            <p class="ipl_addr">公司地址：{{$pagelist->article->companyaddr}}</p>
                            <p>经营范围：{{$pagelist->article->companyarea}}	</p>

                        </div>
                    </a>
                    <div class="ipl_priceType2" title="到货价">
                    </div>
                    <i class="i_p_ico"></i>
                    <div class="arrow_left">
                    </div>
                </li>
                @endforeach
            </div>
        </ul>
    </div>
	<div class="page">
        {!! preg_replace('/<a href=[\'\"]?([^\'\" ]+).*?>/','<a href="${1}/">',$pagelists->links()) !!}
	</div>
@stop