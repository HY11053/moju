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
                <dl class="company_hd act_reward msg_news">
                    <dt><img src="{{$thisarticleinfos->litpic}}"  alt="{{$thisarticleinfos->title}}" data-bd-imgshare-binded="1"></dt>
                    <dd>
                        <p><span>展会日期&nbsp;:{{date('Y-m-d',strtotime($thisarticleinfos->article->starttime))}} 至 {{date('Y-m-d',strtotime($thisarticleinfos->article->endtime))}}</span></p>
                        <p><span>联系人&nbsp;:&nbsp;曾城</span></p>
                        <p><span>展馆&nbsp;:&nbsp;{{$thisarticleinfos->article->zhanguan}}</span></p>
                        <p><span>地址：&nbsp;{{$thisarticleinfos->article->zhdz}}</span></p>
                        <p><span>门票&nbsp;:&nbsp;{{$thisarticleinfos->article->ticket}}</span></p>
                        <p class="btn">
                            <a href="#" class="yd_zwei" title="" target="_blank">展位预定</a>
                            <a href="#" class="yd_ticket" target="_blank">预订门票</a>
                            <a href="#" class="find_fws">找服务商</a>
                        </p>
                        <div class="active">
                            @if($thisarticleinfos->article->starttime > \Carbon\Carbon::now())
                                <div class="time">展会状态：<span>未</span><span>开</span><span>始</span></div>
                            @elseif($thisarticleinfos->article->starttime < \Carbon\Carbon::now() && $thisarticleinfos->article->endtime > \Carbon\Carbon::now())
                                <div class="time">展会状态：<span>进</span><span>行</span><span>中</span></div>
                            @else
                                <div class="time">展会状态：<span>已</span><span>结</span><span>束</span></div>
                            @endif

                        </div>
                    </dd>
                </dl>
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
