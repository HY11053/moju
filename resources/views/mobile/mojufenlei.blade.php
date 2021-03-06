@extends('mobile.mobile')
@section('title') {{$thisTypeinfos->title}}@stop
@section('keywords') {{$thisTypeinfos->keywords}} @stop
@section('description')  {{$thisTypeinfos->description}}  @stop
@section('maincontent')
    @include('mobile.position')
    <div class="list_middle">
        <div class="text_centre">
            <ul>
                @foreach($pagelists as $pagelist)
                    <li>
                        <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml">
                            <div class="img_show"><img src="{{$pagelist->litpic}}" class="img_list"></div>
                            <div class="cont">
                                <h3 class="tit_1">{{$pagelist->title}}</h3>
                                <h4><span class="col_f9">模具类型：模具类型</span>适用范围：适用范围  安装方式：安装方式</h4>
                                <p class="info">{{$pagelist->description}}</p>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="page">
            {!! preg_replace('/<a href=[\'\"]?([^\'\" ]+).*?>/','<a href="${1}/">',$pagelists->links()) !!}
        </div>
    </div>
@stop

