@extends('frontend.frontend')
@section('title') {{ config('app.webname', '中国模具网') }} @stop
@section('keywords') {{ config('app.keywords', '中国模具网') }} @stop
@section('description') {{ config('app.description', '中国模具网') }} @stop
@section('maincontent')
    <div class="main clearfix">

        <div class="cate_sort">
            <dl>
                <dt>已经筛选条件：</dt>
                <dd></dd>
            </dl>
            <dl>
                <dt>项目分类</dt>
                <dd><a class="hover" target="_self" href="#">全部</a></dd>
                <dd><a target="_self" href="/lingshidianpp/">零食店品牌</a></dd>
                <dd><a target="_self" href="/chaohuodian/">炒货店品牌</a></dd>
                <dd><a target="_self" href="/ganguodian/">干果店品牌</a></dd>
                <dd><a target="_self" href="/jinkoulingshi/">进口零食品牌</a></dd>
                <dd><a target="_self" href="/shushidian/">熟食店品牌</a></dd>
                <dd><a target="_self" href="/paihangbang/">零食品牌排行榜</a></dd>
                <dd><a target="_self" href="/pinpai/">零食品牌大全</a></dd>

            </dl>
            <dl>
                <dt>投资金额</dt>
                <dd><a class="hover" target="_self" href="#">全部</a></dd>
                <dd><a target="_self" href="/project/0-1~5-0-0.shtml">1-5万元</a></dd>
                <dd><a target="_self" href="/project/0-5~10-0-0.shtml">5-10万元</a></dd>
                <dd><a target="_self" href="/project/0-10~20-0-0.shtml">10-20万元</a></dd>
                <dd><a target="_self" href="/project/0-20~30-0-0.shtml">20-30万元</a></dd>
                <dd><a target="_self" href="/project/0-30~50-0-0.shtml">30-50万元</a></dd>
                <dd><a target="_self" href="/project/0-50~100-0-0.shtml">50-100万元</a></dd>
            </dl>
            <dl>
                <dt>店铺面积</dt>
                <dd><a class="hover" target="_self" href="#">全部</a></dd>
                <dd><a target="_self" href="/project/0-0-1~10-0.shtml">10平米以下</a></dd>
                <dd><a target="_self" href="/project/0-0-10~30-0.shtml">10-30平米</a></dd>
                <dd><a target="_self" href="/project/0-0-30~50-0.shtml">30-50平米</a></dd>
                <dd><a target="_self" href="/project/0-0-50~80-0.shtml">50-80平米</a></dd>
                <dd><a target="_self" href="/project/0-0-100-0.shtml">100平米以上</a></dd>
            </dl>
            <dl>
                <dt>所在地区</dt>
                <dd><a class="hover" target="_self" href="#">全部</a></dd>
                <dd><a target="_self" href="/project/0-0-0-1.shtml">北京</a></dd>
                <dd><a target="_self" href="/project/0-0-0-125.shtml">济南</a></dd>
                <dd><a target="_self" href="/project/0-0-0-71.shtml">广州</a></dd>
                <dd><a target="_self" href="/project/0-0-0-281.shtml">合肥</a></dd>
                <dd><a target="_self" href="/project/0-0-0-401.shtml">上海</a></dd>
                <dd><a target="_self" href="/project/0-0-0-282.shtml">芜湖</a></dd>
                <dd><a target="_self" href="/project/0-0-0-195.shtml">武汉</a></dd>
                <dd><a target="_self" href="/project/0-0-0-112.shtml">南京</a></dd>
                <dd><a target="_self" href="/project/0-0-0-296.shtml">长沙</a></dd>
                <dd><a target="_self" href="/project/0-0-0-126.shtml">青岛</a></dd>
                <dd><a target="_self" href="/project/0-0-0-72.shtml">深圳</a></dd>
                <dd><a target="_self" href="/project/0-0-0-164.shtml">成都</a></dd>
                <dd><a target="_self" href="/project/0-0-0-139.shtml">沈阳</a></dd>
                <dd><a target="_self" href="/project/0-0-0-29.shtml">重庆</a></dd>
                <dd><a target="_self" href="/project/0-0-0-212.shtml">郑州</a></dd>
                <dd><a target="_self" href="/project/0-0-0-101.shtml">杭州</a></dd>
                <dd><a target="_self" href="/project/0-0-0-83.shtml">佛山</a></dd>
            </dl>
        </div>
        <div class="rec_brand_list">
            <ul>
                <li><a href="/lingshidianpp/5.shtml" target="_blank" title="三只松鼠" class="pic"><img src="/images/thread/2017/04/12/3353f2d4c9eacd918b8afcfb28554583.jpg" alt="三只松鼠"><em>三只松鼠</em></a></li>
                <li><a href="/chaohuodian/8.shtml" target="_blank" title="盐津铺子" class="pic"><img src="/images/thread/2017/04/13/c74990e280bd9596e04c57fe8ce4b1cf.jpg" alt="盐津铺子"><em>盐津铺子</em></a></li>
                <li><a href="/lingshidianpp/38.shtml" target="_blank" title="良品铺子" class="pic"><img src="/images/thread/2017/04/14/0bd504b4a3542dfd6af6417b00962879.png" alt="良品铺子"><em>良品铺子</em></a></li>
                <li><a href="/chaohuodian/51.shtml" target="_blank" title="百味林" class="pic"><img src="/images/thread/2017/04/17/257b0d604a639d13975512bfe10f323d.jpg" alt="百味林"><em>百味林</em></a></li>
                <li><a href="/chaohuodian/9.shtml" target="_blank" title="戴永红炒货" class="pic"><img src="/images/thread/2017/04/13/8b45deb678f769725ba9557a22f6c4c3.jpg" alt="戴永红炒货"><em>戴永红炒货</em></a></li>
                <li><a href="/lingshidianpp/91.shtml" target="_blank" title="一扫光" class="pic"><img src="/images/thread/2017/04/17/bbe84998a4eae40c57f2be6f2a0cd32f.jpg" alt="一扫光"><em>一扫光</em></a></li>
                <li><a href="/ganguodian/14.shtml" target="_blank" title="好想你枣" class="pic"><img src="/images/thread/2017/04/13/3191b10bd7d2e2a346f5b58a83cd4811.jpg" alt="好想你枣"><em>好想你枣</em></a></li>
                <li><a href="/chaohuodian/18.shtml" target="_blank" title="粒上皇" class="pic"><img src="/images/thread/2017/04/14/8358a8f13bb15323c15f9ffc6483654e.jpg" alt="粒上皇"><em>粒上皇</em></a></li>
                <li><a href="/lingshidianpp/53.shtml" target="_blank" title="老婆大人" class="pic"><img src="/images/thread/2017/04/17/77484503c2bc694ecf802cee7a2f2e1d.jpg" alt="老婆大人"><em>老婆大人</em></a></li>
            </ul>
        </div>
        <div class="news_center">
            <div class="news_tj clearfix">
                <dl>
                    <dt><a href="/gxlirun_475.html"><img src="/uploads/allimg/160310/1-16031010311b41.JPG" alt="干洗店的利润是多大_干洗店利润"></a></dt>
                    <dd>
                        <h3><a href="/gxlirun_475.html" target="_blank">干洗店的利润是多大_干洗店利润</a></h3>
                        <p>干洗店一年预期的利润大概是多少？干洗店的利润是多大？我国经济水平的不断...</p>
                    </dd>

                </dl>

                <div class="news_tj_r">
                    <b>干洗店利润特别推荐</b>
                    <div class="news_tj_r1">

                        <h3><a href="/gxlirun_564.html" target="_blank">干洗店的利润有多大，2017洗衣店</a></h3>
                        <p>洗衣店利润有多大？洗衣店的利润怎么样？洗衣店是洗涤行业中出现较早的店铺类型，也是到目前为止都比较受大众...<a href="/gxlirun_564.html" target="_blank">详情&gt;&gt;</a></p>

                    </div>

                    <ul class="clearfix">
                        <li><a href="/gxlirun_475.html" target="_blank">干洗店的利润是多大_干洗店利润</a></li>
                        <li><a href="/gxlirun_2318.html" target="_blank">开个干洗店利润怎么样</a></li>
                        <li><a href="/gxlirun_476.html" target="_blank">洗烫店利润高吗</a></li>
                        <li><a href="/gxlirun_473.html" target="_blank">小型干洗店一年预期的利润</a></li>
                        <li><a href="/gxlirun_808.html" target="_blank">小型干洗店的利润</a></li>
                        <li><a href="/gxlirun_750.html" target="_blank">干洗店利润大吗</a></li>
                        <li><a href="/gxlirun_477.html" target="_blank">水洗店利润</a></li>
                        <li><a href="/gxlirun_309.html" target="_blank">干洗店利润怎么样</a></li>

                    </ul>
                </div>
            </div>

            <div class="ww_330">
                @foreach($pagelists as $pagelist)
                    <dl>
                        <dt><a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" target="_blank"><img src="{{$pagelist->litpic}}"  alt="{{$pagelist->title}}"/></a></dt>
                        <dd class="tit"><a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" target="_blank" title="{{$pagelist->title}}">{{$pagelist->title}}</a> </dd>
                        <dd class="desc">{{$pagelist->description}} </dd>
                        <dd class="date">发布于：<span>{{$pagelist->created_at}} </span> <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" title="{{$pagelist->title}}">阅读全文&gt;&gt;</a></dd>
                    </dl>
                @endforeach

            </div>
            <div class="page">  {!! preg_replace('/<a href=[\'\"]?([^\'\" ]+).*?>/','<a href="${1}/">',$pagelists->links()) !!}  </div>
        </div>
        <div class="new_right">
            <div class="new_bt2">
                <div class="search_bc">
                    <form method="get">
                        <input type="text" class="new_input" name="search">
                        <input type="submit" class="new_btn" value="搜索">
                    </form>
                </div>
            </div>
            <div class="new_bt2">
                <h3> <i></i> 本周热门 </h3>
                <div class="new_hotes">
                    <ul>
                        <li> <a href="/lingshizx/312.shtml" target="_blank" title="薛记炒货如何加盟？加盟薛记炒货流程很简单"><img src="/images/thread/2017/04/28/b3136011f1319205c3a14cbb5cf0d46b.jpg" alt="薛记炒货如何加盟？加盟薛记炒货流程很简单"></a>
                            <p><a href="/lingshizx/312.shtml" title="薛记炒货如何加盟？加盟薛记炒货流程很简单">薛记炒货如何加盟？加盟薛记炒货流程很简单</a></p>
                            <p></p>
                        </li>
                        <li> <a href="/ganguodian/322.shtml" target="_blank" title="加盟百惠园利润回报多少？标准店16.23万年盈利"><img src="http://www.58lingshi.com/uploads/image/2017/04/28/45b75e9fc25b82c845e5e004e60c98bc.jpg" alt="加盟百惠园利润回报多少？标准店16.23万年盈利"></a>
                            <p><a href="/ganguodian/322.shtml" title="加盟百惠园利润回报多少？标准店16.23万年盈利">加盟百惠园利润回报多少？标准店16.23万年盈利</a></p>
                            <p></p>
                        </li>
                        <li> <a href="/jinkoulingshi/476.shtml" target="_blank" title="兔子家进口食品加盟投资条件高不高？适合所有投资者！"><img src="http://www.58lingshi.com/uploads/image/2017/05/05/58a87a5338f699a77b868b5fbfccddb5.jpg" alt="兔子家进口食品加盟投资条件高不高？适合所有投资者！"></a>
                            <p><a href="/jinkoulingshi/476.shtml" title="兔子家进口食品加盟投资条件高不高？适合所有投资者！">兔子家进口食品加盟投资条件高不高？适合所有投资者！</a></p>
                            <p></p>
                        </li>
                        <li> <a href="/ganguodian/273.shtml" target="_blank" title="投资开姚生记连锁店多少钱？8.53万元开店小本项目"><img src="http://www.58lingshi.com/uploads/image/2017/04/27/d34408692cb7bf1e0caa04d61af69476.jpg" alt="投资开姚生记连锁店多少钱？8.53万元开店小本项目"></a>
                            <p><a href="/ganguodian/273.shtml" title="投资开姚生记连锁店多少钱？8.53万元开店小本项目">投资开姚生记连锁店多少钱？8.53万元开店小本项目</a></p>
                            <p></p>
                        </li>
                        <li> <a href="/chaohuodian/1071.shtml" target="_blank" title="厚生记坚果炒货加盟利润大吗？掌握核心科技月赚3万多！"><img src="http://www.58lingshi.com/uploads/image/2017/05/26/2f63770e0569ed3569f5c11a2724f00d.png" alt="厚生记坚果炒货加盟利润大吗？掌握核心科技月赚3万多！"></a>
                            <p><a href="/chaohuodian/1071.shtml" title="厚生记坚果炒货加盟利润大吗？掌握核心科技月赚3万多！">厚生记坚果炒货加盟利润大吗？掌握核心科技月赚3万多！</a></p>
                            <p></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="new_bt2">
                <h3><i></i>热门品牌查询入口</h3>
                <div class="kuishurk">
                    <a href="/lingshidianpp/5.shtml">三只松鼠</a>
                    <a href="/chaohuodian/8.shtml">盐津铺子</a>
                    <a href="/lingshidianpp/38.shtml">良品铺子</a>
                    <a href="/chaohuodian/51.shtml">百味林</a>
                    <a href="/chaohuodian/9.shtml">戴永红炒货</a>
                    <a href="/lingshidianpp/91.shtml">一扫光</a>
                    <a href="/ganguodian/14.shtml">好想你</a>
                    <a href="/chaohuodian/18.shtml">粒上皇</a>
                    <a href="/lingshidianpp/53.shtml">老婆大人</a>
                    <a href="/jinkoulingshi/98.shtml">好一点</a>
                    <a href="/lingshidianpp/226.shtml">不二家</a>
                    <a href="/jinkoulingshi/65.shtml">不二家</a>
                    <a href="/chaohuodian/140.shtml">张二嘎</a>
                    <a href="/jinkoulingshi/185.shtml">舌间味</a>
                    <a href="/lingshidianpp/72.shtml">盼盼零零嘴 </a>
                    <a href="/lingshidianpp/92.shtml">因味爱</a>
                    <a href="/ganguodian/26.shtml">姚生记</a>
                    <a href="/ganguodian/134.shtml">天泉甜甜</a>
                    <a href="/lingshidianpp/1147.shtml">零食有约</a>
                    <a href="/lingshidianpp/444.shtml">光合农场</a>
                </div>
            </div>

        </div>
    </div>

@stop