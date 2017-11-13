@inject('positions',App\Position')
{{--$positions->positions(Request::getrequesturi())--}}
@if(!empty($positions->positions(Request::getrequesturi())))
    <p class="bg-primary">　 当前位置：<a href="/">首页</a> &gt; <a href="/{{$positions->positions(Request::getrequesturi())->real_path}}/">{{$positions->positions(Request::getrequesturi())->typename}}</a> </p>
@endif