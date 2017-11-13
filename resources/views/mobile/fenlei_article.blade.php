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
                <table cellspacing="0" style="border-top: 1px solid rgb(230, 230, 230);">
                    <tbody>
                    <tr>
                        <td class="td_color">模具类型</td>
                        <td class="td_style">{{str_limit($thisarticleinfos->article->mjlx,15,'...')}}</td>
                        <td class="td_color">适用范围</td>
                        <td class="td_style">{{str_limit($thisarticleinfos->article->syfw,15,'...')}}</td>
                    </tr>
                    <tr>
                        <td class="td_color">安装方式</td>
                        <td class="td_style">{{str_limit($thisarticleinfos->article->azfs,15,'...')}}</td>
                        <td class="td_color">作用对象</td>
                        <td class="td_style">{{str_limit($thisarticleinfos->article->zydx,15,'...')}}</td>
                    </tr>
                    <tr>
                        <td class="td_color">制造工艺</td>
                        <td class="td_style">{{str_limit($thisarticleinfos->article->zzgy,15,'...')}}</td>
                        <td class="td_color">模具规格</td>
                        <td class="td_style">{{str_limit($thisarticleinfos->article->guige,15,'...')}}</td>
                    </tr>
                    </tbody>
                </table>

                <hr>
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
