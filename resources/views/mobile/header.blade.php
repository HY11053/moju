@inject('headers',App\Header')
<div class="d_nav">
    <ul>
        <li><a href="/" >首页</a></li>
        @foreach($headers->HeaderLists() as $real_path=>$header)
            <li><a href="/{{$real_path}}/" >{{$header}}</a></li>
        @endforeach
    </ul>
</div>