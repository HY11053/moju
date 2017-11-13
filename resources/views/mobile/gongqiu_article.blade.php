@extends('mobile.mobile')
@section('title') {{$thisarticleinfos->title}} @stop
@section('keywords') {{$thisarticleinfos->keywords}} @stop
@section('description')  {{$thisarticleinfos->description}} @stop
@section('maincontent')
    @include('mobile.position')
    <div class="list_middle">
        <div class="content_brand">
            <div class="content">
                <h1>{{$thisarticleinfos->title}}</h1>
                <small>时间：{{$thisarticleinfos->created_at}}&nbsp;&nbsp;&nbsp;&nbsp;浏览量:{{$thisarticleinfos->click}}</small>
                <div>
                    <div class="productimg">
                        <img src="{{$thisarticleinfos->litpic}}" alt="{{$thisarticleinfos->title}}">
                    </div>
                    <div class="parameter">
                        <ul>
                            @if($thisarticleinfos->mid==2)
                                <li class="bg w1"><tt>品牌名称：</tt>{{$thisarticleinfos->article->productname}}</li>
                                <li class="bg w2"><tt>模具规格：</tt> <span class="c_fe4 b">{{$thisarticleinfos->article->guige}}</span> </li>
                                <li class="w1"><tt>模具类型：</tt>{{$thisarticleinfos->article->mjlx}} </li>
                                <li class="w2"><tt>制造工艺：</tt>{{$thisarticleinfos->article->zzgy}} </li>
                                <li class="bg w2"><tt>作用对象：</tt>{{$thisarticleinfos->article->zydx}} </li>
                                <li class="w1"><tt>安装方式：</tt>{{$thisarticleinfos->article->azfs}} </li>
                                <li class="w2"><tt>产品单价：</tt>{{$thisarticleinfos->article->price}} </li>
                                <li><tt>最小起订：</tt>{{$thisarticleinfos->article->mixnum}}  </li>
                                <li class="bg"><tt>发货期限：</tt>{{$thisarticleinfos->article->senddate}} </li>
                                <li class="bg w1"><tt>适用范围：</tt>{{$thisarticleinfos->article->syfw}} </li>
                            @else
                                <li class="bg w2"><tt>模具规格：</tt> <span class="c_fe4 b">{{$thisarticleinfos->article->guige}}</span> </li>
                                <li class="w1"><tt>模具类型：</tt>{{$thisarticleinfos->article->mjlx}} </li>
                                <li class="w2"><tt>制造工艺：</tt>{{$thisarticleinfos->article->zzgy}} </li>
                                <li class="bg w2"><tt>需求数量：</tt>{{$thisarticleinfos->article->xqnum}} </li>
                                <li class="w1"><tt>安装方式：</tt>{{$thisarticleinfos->article->azfs}} </li>
                                <li class="w2"><tt>价格要求：</tt>{{$thisarticleinfos->article->price}} </li>
                                <li class="w2"><tt>供货地区：</tt>{{$thisarticleinfos->country}} </li>
                                <li class="bg"><tt>有效期至：</tt>{{$thisarticleinfos->article->endtime}} </li>
                            @endif
                                <hr>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>

                {!! $thisarticleinfos->article->body !!}
            </div>
        </div>
    </div>

    <div class="index_new rela_news">
        <div class="common_tit">
            <a class="tit">相关文章</a>
        </div>
        <div class="bd">
            <ul>
                @foreach($xgnews as $xgnew)
                    <li><span class="date">{{$xgnew->published_at}}</span><a class="txt" href="/{{$xgnew->arctype->real_path}}/{{$xgnew->id}}.shtml" title="{{$xgnew->title}}">{{$xgnew->title}} </a></li>
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
                @foreach($brandnews as $brandnew)
                    <li><span class="date">{{$brandnew->published_at}}</span><a class="txt" href="/{{$brandnew->arctype->real_path}}/{{$brandnew->id}}.shtml" title="{{$brandnew->title}}">{{$brandnew->title}} </a></li>
                @endforeach
            </ul>
        </div>
    </div>

@stop
