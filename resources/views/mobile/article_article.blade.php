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
