@extends('frontend.frontend')
@section('title') {{ config('app.webname', '中国模具网') }} @stop
@section('keywords') {{ config('app.keywords', '中国模具网') }} @stop
@section('description') {{ config('app.description', '中国模具网') }} @stop
@section('maincontent')
    <div class="main clearfix">
        <div class="address">
            <div class="choice">
                <span class="title">您已选择：</span>

                <div class="choice_list">

                    <span>不限<i></i></span>
                </div>
            </div>
            <div class="service">
                <span class="title">产品分类：</span>
                <div class="service_list">
                    <ul class="list auto">
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/guonei/" title="不限" style="color:#2577e3;">不限</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/shipinyinpin/guonei/" title="食品饮品">食品饮品</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/yaopinbaojian/guonei/" title="药品保健">药品保健</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/yiliaoqixie/guonei/" title="医疗器械">医疗器械</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/lipinshipin/guonei/" title="礼品饰品">礼品饰品</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/wanjuyingtong/guonei/" title="玩具婴童">玩具婴童</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/shichipin/guonei/" title="奢侈品">奢侈品</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/meirongmeifa/guonei/" title="美容美发">美容美发</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/tiyu/guonei/" title="体育休闲">体育休闲</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/lvyoudujia/guonei/" title="旅游度假">旅游度假</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/fuzhuangfushi/guonei/" title="服装服饰">服装服饰</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/pigezhipin/guonei/" title="皮革制品">皮革制品</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/fangzhifangxian/guonei/" title="纺织纺线">纺织纺线</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/jiajuzhuangshi/guonei/" title="家居装饰">家居装饰</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/jianzhucailiao/guonei/" title="建筑材料">建筑材料</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/fangdichan/guonei/" title="房地产">房地产</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/xiaofeidianzi/guonei/" title="消费电子">消费电子</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/xinxitongxin/guonei/" title="信息通信">信息通信</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/bangongongpin/guonei/" title="办公用品">办公用品</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/jixiegongye/guonei/" title="机械工业">机械工业</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/shebeizhizao/guonei/" title="设备制造">设备制造</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/nuantongzhileng/guonei/" title="暖通制冷">暖通制冷</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/jiaotonggongju/guonei/" title="交通工具">交通工具</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/qimopeijian/guonei/" title="汽摩配件">汽摩配件</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/wuliuyunshu/guonei/" title="物流运输">物流运输</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/dianzidianli/guonei/" title="电子电力">电子电力</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/guangdianzhaoming/guonei/" title="光电照明">光电照明</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/yiqiyibiao/guonei/" title="仪器仪表">仪器仪表</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/gangtieyejin/guonei/" title="钢铁冶金">钢铁冶金</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/nengyuankuangchan/guonei/" title="能源矿产">能源矿产</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/huagongxiangsu/guonei/" title="化工橡塑">化工橡塑</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/yinshuabaozhuang/guonei/" title="印刷包装">印刷包装</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/zipingongye/guonei/" title="制品工业">制品工业</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/guanggaohangye/guonei/" title="广告行业">广告行业</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/wujinbengfa/guonei/" title="五金泵阀">五金泵阀</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/anfangfanghu/guonei/" title="安防防护">安防防护</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/jiudianyongpin/guonei/" title="酒店用品">酒店用品</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/huanbaojieneng/guonei/" title="环保节能">环保节能</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/wenjiaokeji/guonei/" title="文教科技">文教科技</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/yinxiangyueqi/guonei/" title="音响乐器">音响乐器</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/nonglinmuyu/guonei/" title="农林牧渔">农林牧渔</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/zonghe/guonei/" title="综合">综合</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/chuangyejiameng/guonei/" title="创业加盟">创业加盟</a></li>
                        <li><a href="http://zhanhui.3158.cn/zhxx/all/qitahangye/guonei/" title="其他行业">其他行业</a></li>
                    </ul>
                    <span class="open">展开<i></i></span>
                </div>
            </div>
            <div class="clear"></div>
            <div class="city" style="z-index: 99; height: 36px;">
                <span class="title">所在地区：</span>
                <div class="service_list">
                    <div class="city_cont">
                        <ul class="list auto">
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/" eh="" title="不限" style="color:#2577e3;">不限</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/shandong/" eh="shandong" title="山东">山东</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/jiangsu/" eh="jiangsu" title="江苏">江苏</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/anhui/" eh="anhui" title="安徽">安徽</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/zhejiang/" eh="zhejiang" title="浙江">浙江</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/fujian/" eh="fujian" title="福建">福建</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/shanghai/" eh="shanghai" title="上海">上海</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/guangdong/" eh="guangdong" title="广东">广东</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/guangxi/" eh="guangxi" title="广西">广西</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/hainan/" eh="hainan" title="海南">海南</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/hubei/" eh="hubei" title="湖北">湖北</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/hunan/" eh="hunan" title="湖南">湖南</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/henan/" eh="henan" title="河南">河南</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/jiangxi/" eh="jiangxi" title="江西">江西</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/beijing/" eh="beijing" title="北京">北京</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/tianjin/" eh="tianjin" title="天津">天津</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/hebei/" eh="hebei" title="河北">河北</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/shanxi/" eh="shanxi" title="山西">山西</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/neimenggu/" eh="neimenggu" title="内蒙古">内蒙古</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/ningxia/" eh="ningxia" title="宁夏">宁夏</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/xinjiang/" eh="xinjiang" title="新疆">新疆</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/qinghai/" eh="qinghai" title="青海">青海</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/shaanxi/" eh="shaanxi" title="陕西">陕西</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/gansu/" eh="gansu" title="甘肃">甘肃</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/sichuan/" eh="sichuan" title="四川">四川</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/yunnan/" eh="yunnan" title="云南">云南</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/guizhou/" eh="guizhou" title="贵州">贵州</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/xizang/" eh="xizang" title="西藏">西藏</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/chongqing/" eh="chongqing" title="重庆">重庆</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/liaoning/" eh="liaoning" title="辽宁">辽宁</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/jilin/" eh="jilin" title="吉林">吉林</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/heilongjiang/" eh="heilongjiang" title="黑龙江">黑龙江</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/xianggang/" eh="xianggang" title="香港">香港</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/aomen/" eh="aomen" title="澳门">澳门</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/taiwan/" eh="taiwan" title="台湾">台湾</a></li>
                            <li><a href="http://zhanhui.3158.cn/zhxx/all/trade/qita/" eh="qita" title="其他">其他</a></li>
                        </ul>
                        <div class="city_info" sheight="33px" swidth="605px" style="top: 33px; display: none;">
                            <div>
                                <p><a href="http://zhanhui.3158.cn/zhxx/201711/trade/henan//" title="不限">不限</a><a href="http://zhanhui.3158.cn/zhxx/201711/trade/zhengzhou/" title="郑州">郑州</a><a href="http://zhanhui.3158.cn/zhxx/201711/trade/luoyang/" title="洛阳">洛阳</a><a href="http://zhanhui.3158.cn/zhxx/201711/trade/Kaifeng/" title="开封">开封</a><a href="http://zhanhui.3158.cn/zhxx/201711/trade/anyang/" title="安阳">安阳</a><a href="http://zhanhui.3158.cn/zhxx/201711/trade/xinyang/" title="信阳">信阳</a><a href="http://zhanhui.3158.cn/zhxx/201711/trade/gushixian/" title="固始县">固始县</a><a href="http://zhanhui.3158.cn/zhxx/201711/trade/jiaozuo/" title="焦作">焦作</a><a href="http://zhanhui.3158.cn/zhxx/201711/trade/hebi/" title="鹤壁">鹤壁</a><a href="http://zhanhui.3158.cn/zhxx/201711/trade/luohe/" title="漯河">漯河</a><a href="http://zhanhui.3158.cn/zhxx/201711/trade/shangqiu/" title="商丘">商丘</a><a href="http://zhanhui.3158.cn/zhxx/201711/trade/xinxiang/" title="新乡">新乡</a><a href="http://zhanhui.3158.cn/zhxx/201711/trade/nanyang/" title="南阳">南阳</a><a href="http://zhanhui.3158.cn/zhxx/201711/trade/sanmenxia/" title="三门峡">三门峡</a><a href="http://zhanhui.3158.cn/zhxx/201711/trade/xuchang/" title="许昌">许昌</a><a href="http://zhanhui.3158.cn/zhxx/201711/trade/zhoukou/" title="周口">周口</a><a href="http://zhanhui.3158.cn/zhxx/201711/trade/pingdingshan/" title="平顶山">平顶山</a><a href="http://zhanhui.3158.cn/zhxx/201711/trade/puyang/" title="濮阳">濮阳</a><a href="http://zhanhui.3158.cn/zhxx/201711/trade/zhumadian/" title="驻马店">驻马店</a></p>
                                <i style="left: 605px;"></i>
                            </div>
                        </div>
                    </div>
                    <span class="open">展开<i></i></span>
                </div>
            </div>
            <div class="clear"></div>
        </div>

        <div class="rightl">

            <div class="pro_main">
                <div class=""></div>
                @foreach($pagelists as $pagelist)
                <dl class="pd_list_dl">
                    <dt><a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" title="{{$pagelist->title}}" target="_blank">
                            <img width="300" height="250" src="{{$pagelist->litpic}}" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" data-bd-imgshare-binded="1"></a></dt>
                    <dd><a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" title="{{$pagelist->title}}" target="_blank">{{$pagelist->title}}</a></dd>
                    <p>
                        <a href="/{{$pagelist->arctype->real_path}}/{{$pagelist->id}}.shtml" title="了解详情" target="_blank">
                            <img src="http://www.bolch168.com/wp-content/themes/ztheme/images/pro_bt1.gif" alt="了解详情" title="了解详情" data-bd-imgshare-binded="1"></a>
                        <a href="#" title="免费咨询" target="_blank">
                            <img src="http://www.bolch168.com/wp-content/themes/ztheme/images/pro_bt2.gif" alt="免费咨询" title="免费咨询" data-bd-imgshare-binded="1"></a></p>
                </dl>
                @endforeach
                <div class="clear"></div>
                <div class="page">
                    {!! preg_replace('/<a href=[\'\"]?([^\'\" ]+).*?>/','<a href="${1}/">',$pagelists->links()) !!}
                </div>
                <div class="xg_news">
                    <div class="title"><strong>戴永红炒货资讯</strong></div>
                    <div class="xw">
                        <ul class="clearfix">
                            <li><em>2017-05-11</em><a href="/chaohuodian/9.shtml" title="戴永红炒货加盟费多少,70平仅需28万元">戴永红炒货加盟费多少,70平仅需28万元 </a></li>
                            <li><em>2017-06-27</em><a href="/chaohuodian/1466.shtml" title="戴永红炒货加盟怎么样？360度扶持让您玩转零食市场">戴永红炒货加盟怎么样？360度扶持让您玩转零食市场 </a></li>
                            <li><em>2017-06-27</em><a href="/chaohuodian/1549.shtml" title="株洲戴永红炒货店加盟赚钱吗？年入46.08万元净利润 加盟两年即可买宝马">株洲戴永红炒货店加盟赚钱吗？年入46.08万元净利润 加盟两年即可买宝马 </a></li>
                            <li><em>2017-06-19</em><a href="/chaohuodian/1802.shtml" title="株洲开戴永红炒货利润怎么样？月入上万不是梦">株洲开戴永红炒货利润怎么样？月入上万不是梦 </a></li>
                            <li><em>2017-06-27</em><a href="/chaohuodian/657.shtml" title="戴永红炒货如何加盟，戴永红炒货加盟流程">戴永红炒货如何加盟，戴永红炒货加盟流程 </a></li>
                            <li><em>2017-06-12</em><a href="/chaohuodian/1568.shtml" title="株洲戴永红炒货加盟条件是什么">株洲戴永红炒货加盟条件是什么 </a></li>
                            <li><em>2017-06-27</em><a href="/chaohuodian/660.shtml" title="戴永红炒货加盟条件，戴永红炒货加盟要求">戴永红炒货加盟条件，戴永红炒货加盟要求 </a></li>
                            <li><em>2017-06-27</em><a href="/chaohuodian/665.shtml" title="戴永红炒货加盟利润大吗？年净利润高达40万">戴永红炒货加盟利润大吗？年净利润高达40万 </a></li>
                            <li><em>2017-06-07</em><a href="/chaohuodian/1401.shtml" title="戴永红炒货加盟条件？0风险，新手轻松当老板">戴永红炒货加盟条件？0风险，新手轻松当老板 </a></li>
                            <li><em>2017-05-11</em><a href="/chaohuodian/602.shtml" title="戴永红炒货加盟费多少钱？仅需14.66万元即可开店">戴永红炒货加盟费多少钱？仅需14.66万元即可开店 </a></li>
                        </ul>
                    </div>
                </div>

            </div>


        </div>
        <div class="new_right">
            <div class="new_bt2">
                <h3> <i></i> 模具厂排行榜 </h3>
                <div class="rank_bd">
                    <ul>
                        @foreach($topbrands as $index=>$topbrand)
                            @if($index==0)
                                <li class="top"> <a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml" target="_blank" title="{{$topbrand->shorttitle}}"><i class="num">{{$index+1}} </i> <img src="{{$topbrand->litpic}}" alt="{{$topbrand->shorttitle}}" ></a>
                                    <div class="cont">
                                        <p><a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml" target="_blank">{{$topbrand->shorttitle}}</a></p>
                                        <p><span>投资金额：</span><i>{{$topbrand->article->brandpay}}</i></p>
                                        <p class="btn"><a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml">查看详情</a></p>
                                    </div>
                                </li>
                            @else

                                <li class="top"> <i class="num">{{$index+1}}</i> <span class="name"><a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml" target="_blank" title="{{$topbrand->shorttitle}}">{{$topbrand->shorttitle}}</a></span> <span class="price">{{$topbrand->article->brandpay}}</span> </li>
                            @endif

                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="new_bt2">
                <h3> <i></i> 模具资讯 </h3>
                <div class="bts">
                    <div class="common">
                        <ul>
                            <li><a href="/lingshizx/312.shtml" target="_blank" title="薛记炒货如何加盟？加盟薛记炒货流程很简单">薛记炒货如何加盟？加盟薛记炒货流程很简单</a></li>
                            <li><a href="/ganguodian/322.shtml" target="_blank" title="加盟百惠园利润回报多少？标准店16.23万年盈利">加盟百惠园利润回报多少？标准店16.23万年盈利</a></li>
                            <li><a href="/ganguodian/153.shtml" target="_blank" title="金冠加盟利润多少？如何提高加盟利润">金冠加盟利润多少？如何提高加盟利润</a></li>
                            <li><a href="/jinkoulingshi/476.shtml" target="_blank" title="兔子家进口食品加盟投资条件高不高？适合所有投资者！">兔子家进口食品加盟投资条件高不高？适合所有投资者！</a></li>
                            <li><a href="/ganguodian/273.shtml" target="_blank" title="投资开姚生记连锁店多少钱？8.53万元开店小本项目">投资开姚生记连锁店多少钱？8.53万元开店小本项目</a></li>
                            <li><a href="/chaohuodian/1071.shtml" target="_blank" title="厚生记坚果炒货加盟利润大吗？掌握核心科技月赚3万多！">厚生记坚果炒货加盟利润大吗？掌握核心科技月赚3万多！</a></li>
                            <li><a href="/ganguodian/251.shtml" target="_blank" title="开百草园零食店要多少钱？总费用只要9.285万元">开百草园零食店要多少钱？总费用只要9.285万元</a></li>
                            <li><a href="/ganguodian/368.shtml" target="_blank" title="逗妮开心加盟能赚钱吗？小型店也能年入21.49万元">逗妮开心加盟能赚钱吗？小型店也能年入21.49万元</a></li>
                            <li><a href="/jinkoulingshi/815.shtml" target="_blank" title="舌间味进口食品加盟费多少钱？5-15万即可轻松开店">舌间味进口食品加盟费多少钱？5-15万即可轻松开店</a></li>
                            <li><a href="/chaohuodian/775.shtml" target="_blank" title="张二嘎炒货加盟费多少钱？县级城市只要5万">张二嘎炒货加盟费多少钱？县级城市只要5万</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="new_bt2">
                <h3> <i></i> 模具供求信息 </h3>
                <div class="bts">
                    <div class="common">
                        <ul>
                            <li><a href="/lingshizx/312.shtml" target="_blank" title="薛记炒货如何加盟？加盟薛记炒货流程很简单">薛记炒货如何加盟？加盟薛记炒货流程很简单</a></li>
                            <li><a href="/ganguodian/322.shtml" target="_blank" title="加盟百惠园利润回报多少？标准店16.23万年盈利">加盟百惠园利润回报多少？标准店16.23万年盈利</a></li>
                            <li><a href="/ganguodian/153.shtml" target="_blank" title="金冠加盟利润多少？如何提高加盟利润">金冠加盟利润多少？如何提高加盟利润</a></li>
                            <li><a href="/jinkoulingshi/476.shtml" target="_blank" title="兔子家进口食品加盟投资条件高不高？适合所有投资者！">兔子家进口食品加盟投资条件高不高？适合所有投资者！</a></li>
                            <li><a href="/ganguodian/273.shtml" target="_blank" title="投资开姚生记连锁店多少钱？8.53万元开店小本项目">投资开姚生记连锁店多少钱？8.53万元开店小本项目</a></li>
                            <li><a href="/chaohuodian/1071.shtml" target="_blank" title="厚生记坚果炒货加盟利润大吗？掌握核心科技月赚3万多！">厚生记坚果炒货加盟利润大吗？掌握核心科技月赚3万多！</a></li>
                            <li><a href="/ganguodian/251.shtml" target="_blank" title="开百草园零食店要多少钱？总费用只要9.285万元">开百草园零食店要多少钱？总费用只要9.285万元</a></li>
                            <li><a href="/ganguodian/368.shtml" target="_blank" title="逗妮开心加盟能赚钱吗？小型店也能年入21.49万元">逗妮开心加盟能赚钱吗？小型店也能年入21.49万元</a></li>
                            <li><a href="/jinkoulingshi/815.shtml" target="_blank" title="舌间味进口食品加盟费多少钱？5-15万即可轻松开店">舌间味进口食品加盟费多少钱？5-15万即可轻松开店</a></li>
                            <li><a href="/chaohuodian/775.shtml" target="_blank" title="张二嘎炒货加盟费多少钱？县级城市只要5万">张二嘎炒货加盟费多少钱？县级城市只要5万</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/-->

        </div>
    </div>


@stop