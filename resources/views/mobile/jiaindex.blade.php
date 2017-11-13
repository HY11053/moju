@extends('mobile.mobile')
@section('title') {{$thisTypeinfos->title}}@stop
@section('keywords') {{$thisTypeinfos->keywords}} @stop
@section('description')  {{$thisTypeinfos->description}}  @stop
@section('maincontent')
    <p class="bg-primary"> &nbsp;&nbsp;<a href="http://www.lingshijmls.com/">主页</a> &gt; <a href="/jmzn/">模具厂</a> &gt; </p>
    <div class="list_middle">
        <div class="row">
            <div class="col-sm-6 col-xs-6 routes"> <a href="/mojujia/6459.shtml"><img src="https://lorempixel.com/640/480/?93809" class="img-thumbnail img-responsive center-block " style=""></a>
                <p class="text-center">泰麒麟传媒有限公司</p>
            </div>
            <div class="col-sm-6 col-xs-6 routes"> <a href="/mojujia/6045.shtml"><img src="https://lorempixel.com/640/480/?49866" class="img-thumbnail img-responsive center-block " style=""></a>
                <p class="text-center">盟新信息有限公司</p>
            </div>
            <div class="col-sm-6 col-xs-6 routes"> <a href="/mojujia/6061.shtml"><img src="https://lorempixel.com/640/480/?76332" class="img-thumbnail img-responsive center-block " style=""></a>
                <p class="text-center">天益信息有限公司</p>
            </div>
            <div class="col-sm-6 col-xs-6 routes"> <a href="/mojujia/6099.shtml"><img src="https://lorempixel.com/640/480/?22800" class="img-thumbnail img-responsive center-block " style=""></a>
                <p class="text-center">昂歌信息信息有限公司</p>
            </div>

            <div class="col-sm-6 col-xs-6 routes"> <a href="/mojugang/6424.shtml"><img src="https://lorempixel.com/640/480/?58886" class="img-thumbnail img-responsive center-block " style=""></a>
                <p class="text-center">同兴万点科技有限公司</p>
            </div>
            <div class="col-sm-6 col-xs-6 routes"> <a href="/mojugang/6439.shtml"><img src="https://lorempixel.com/640/480/?82961" class="img-thumbnail img-responsive center-block " style=""></a>
                <p class="text-center">华远软件科技有限公司</p>
            </div>
            <div class="col-sm-6 col-xs-6 routes"> <a href="/mojugang/6489.shtml"><img src="https://lorempixel.com/640/480/?88440" class="img-thumbnail img-responsive center-block " style=""></a>
                <p class="text-center">商软冠联信息有限公司</p>
            </div>
            <div class="col-sm-6 col-xs-6 routes"> <a href="/mojugang/6006.shtml"><img src="https://lorempixel.com/640/480/?84079" class="img-thumbnail img-responsive center-block " style=""></a>
                <p class="text-center">联软传媒有限公司</p>
            </div>

        </div>
        <div class="page">
            {!! preg_replace('/<a href=[\'\"]?([^\'\" ]+).*?>/','<a href="${1}/">',$pagelists->links()) !!}
        </div>
    </div>
@stop