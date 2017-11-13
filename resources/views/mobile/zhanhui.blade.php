@extends('mobile.mobile')
@section('title') {{$thisTypeinfos->title}}@stop
@section('keywords') {{$thisTypeinfos->keywords}} @stop
@section('description')  {{$thisTypeinfos->description}}  @stop
@section('maincontent')
    @include('mobile.position')
    <div class="zhxx style01">
        <div class="bd">
            <ul class="list">
                @foreach($pagelists as $pagelist)
                <li>
                    <div class="list_l">
                        <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" target="_self" title="">
                            <img src="{{$pagelist->litpic}}" width="100" height="75">
                        </a>
                    </div>
                    <div class="list_r">
                        <h3 class="tit">
                            <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" target="_self" title="">{{$pagelist->title}}</a>
                        </h3>
                        <p>
                            <span>时间 : </span>{{$pagelist->article->starttime}}</p>
                        <p>
                            <span>地址 : </span>{{$pagelist->article->zhdz}}</p>
                        <p>
                            <span>展馆 : </span>{{$pagelist->article->zhanguan}}</p>
                    </div>
                </li>
                @endforeach

            </ul>
        </div>
    </div>

        <div class="page">
            {!! preg_replace('/<a href=[\'\"]?([^\'\" ]+).*?>/','<a href="${1}/">',$pagelists->links()) !!}
        </div>
@stop

