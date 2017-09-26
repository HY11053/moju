@extends('frontend.frontend')
@section('title') {{ config('app.webname', '中国模具网') }} @stop
@section('keywords') {{ config('app.keywords', '中国模具网') }} @stop
@section('description') {{ config('app.description', '中国模具网') }} @stop
@section('maincontent')
    <div class="mainbox">
        <div class="hangyepd">
            <ul>
                @foreach($tradeTypes as $index=>$tradeType)
                <li @if($index==14) style="border:0px;" @endif><a href="/{{$tradeType->real_path}}/" target="_self">{{$tradeType->typename}}</a></li>
                @endforeach

            </ul>
        </div>
        <div class="picbox">
            <div class="rollpic" id="rollpic">
                <a href="http://www.xiangmu.com/jmxm/wlyxzsg/"><img src="/reception/devnull/1706260921421764846802.jpg" height="300" width="720" alt="五粮液小酌时光酒招商加盟"></a>
                <a href="http://www.xiangmu.com/jmxm/rgct/"><img src="/reception/devnull/170511145720612516320.gif" height="300" width="720" alt="若谷草堂官网-五谷杂粮加盟_五谷杂粮加盟店_五谷杂粮养生坊"></a>
                <a href="http://www.xiangmu.com/jmxm/hdyp/"><img src="/reception/devnull/1705181004151987741334.jpg" height="300" width="720" alt="十元百货店韩都优品加盟连锁全国招商"></a>
            </div>
            <script language="javascript" type="text/javascript">new $o.slide("rollpic");</script>
            <div class="renwu">
                <div class="list">
                    <ul>
                        <li><a href="http://www.xiangmu.com/jmxm/jhb/"><img src="/reception/devnull/1702281554302105498237.jpg" height="150" width="105" alt="聚惠保车险加盟"></a></li>
                        <li><a href="http://www.xiangmu.com/jmxm/jingtu/"><img src="/reception/devnull/170417151834122114727.jpg" height="150" width="105" alt="精途酒店加盟条件-精途连锁酒店加盟费用-精途酒店加盟官方网站"></a></li>
                        <li><a href="http://www.xiangmu.com/jmxm/fengcha/"><img src="/reception/devnull/170418144214869471038.jpg" height="150" width="105" alt="奶茶加盟_茶饮加盟_奶茶连锁店_奉茶奶茶加盟"></a></li>
                        <li><a href="http://www.xiangmu.com/jmxm/huyanshijia/"><img src="/reception/devnull/1609040241451762947984.jpg" height="150" width="105" alt="青岛护眼世家招商加盟"></a></li>
                        <li><a href="http://www.xiangmu.com/jmxm/hrkon/"><img src="/reception/devnull/1609231641062116218693.jpg" height="150" width="105" alt="华尔康净水器招商加盟"></a></li>
                        <li style="width:106px;"><a href="http://www.xiangmu.com/jmxm/lianglong/"><img src="/reception/devnull/1609270901191784388896.jpg" height="150" width="105" alt="亮龙硅藻泥加盟费用,亮龙硅藻泥加盟多少钱"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="sumbox">
            <div class="joinbox">
                <span>加入项目网项目库</span>
                <br><br>
                <a href="http://www.xiangmu.com/member/memreg.aspx" target="_blank">得二级域名网站，免费发信息！</a><br>
                <a href="http://www.xiangmu.com/member/memreg.aspx" target="_blank"><img src="/reception//images/join.gif" alt="加入项目网产品库" width="131" height="40"></a>
                <div class="txt">已发布加盟项目<span>44339</span>个<br>累计意向加盟者<span>1932737</span>人次</div>
            </div>
            <div class="newtop">
                <div class="title">
                    <ul>
                        <li class="" onclick="ch(1)" id="ch1">新加盟项目</li>
                        <li onclick="ch(2)" id="ch2" class="">新加盟企业</li>
                        <li onclick="ch(3)" id="ch3" class="cur">品牌项目</li>
                    </ul>
                </div>
                <div class="content">
                    <div class="lnone" id="a2_3_1">
                        <div class="jmzx">
                            <ul>
                                <li><a href="http://www.xiangmu.com/project/928452.html" title="肯德基鸡叉骨加盟">肯德基鸡叉骨加盟</a></li>
                                <li><a href="http://www.xiangmu.com/project/928451.html" title="合金催化液技术 合金催化液技术配方 合金催化液技术转让">合金催化液技术 合金催化液技术配方 合金</a></li>
                                <li><a href="http://www.xiangmu.com/project/928450.html" title="加盟贵州茅台古酿坊酒业酱香型白酒">加盟贵州茅台古酿坊酒业酱香型白酒</a></li>
                                <li><a href="http://www.xiangmu.com/project/928449.html" title="普比欧牌阿胶含片加盟代理">普比欧牌阿胶含片加盟代理</a></li>
                                <li><a href="http://www.xiangmu.com/project/928448.html" title="天保堂野山参招商加盟,天保堂野山参加盟条件">天保堂野山参招商加盟,天保堂野山参加盟</a></li>
                                <li><a href="http://www.xiangmu.com/project/928447.html" title="娇倍源阿胶加盟电话加盟条件_娇倍源阿胶加盟排行榜">娇倍源阿胶加盟电话加盟条件_娇倍源阿胶</a></li>
                                <li><a href="http://www.xiangmu.com/project/928446.html" title="官燕栈燕窝加盟条件_官燕栈燕窝加盟生意怎么样">官燕栈燕窝加盟条件_官燕栈燕窝加盟生意</a></li>
                                <li><a href="http://www.xiangmu.com/project/928444.html" title="VVO进口食品加盟代理,VVO进口食品诚招代理商">VVO进口食品加盟代理,VVO进口食品诚招代</a></li>
                                <li><a href="http://www.xiangmu.com/project/928443.html" title="小布叮早教机加盟费用多少钱_小布叮早教机加盟电话">小布叮早教机加盟费用多少钱_小布叮早教</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="lnone" id="a2_3_2">
                        <div class="jmzx">
                            <ul>
                                <li><a href="http://pubiou.xiangmu.com/" title="山东普比欧生物技术有限公司">山东普比欧生物技术有限公司</a></li>
                                <li><a href="http://jiaobeiyuan.xiangmu.com/" title="东阿阿胶股份有限公司">东阿阿胶股份有限公司</a></li>
                                <li><a href="http://guanyanzhan.xiangmu.com/" title="官燕栈国际有限公司">官燕栈国际有限公司</a></li>
                                <li><a href="http://VVO.xiangmu.com/" title="深圳好食食品有限公司">深圳好食食品有限公司</a></li>
                                <li><a href="http://xiaobuding.xiangmu.com/" title="浙江小布叮动漫文化股份有限公司">浙江小布叮动漫文化股份有限公司</a></li>
                                <li><a href="http://qhlz.xiangmu.com/" title="倍乐生商贸（中国）有限公司">倍乐生商贸（中国）有限公司</a></li>
                                <li><a href="http://zdyw.xiangmu.com/" title="青岛正典实业有限公司">青岛正典实业有限公司</a></li>
                                <li><a href="http://zhangyaoshi.xiangmu.com/" title="东阿县张药师电子商务有限公司">东阿县张药师电子商务有限公司</a></li>
                                <li><a href="http://sanshandao.xiangmu.com/" title="大连三山岛海产食品有限公司">大连三山岛海产食品有限公司</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="lcur" id="a2_3_3">
                        <div class="jmzx">
                            <ul>
                                <li><a href="http://www.xiangmu.com/so/zhubao/sunfeel.html" title="赛菲尔珠宝诚招加盟商">赛菲尔珠宝诚招加盟商</a></li>
                                <li><a href="http://www.xiangmu.com/so/zhubao/chowtaiseng.html" title="周大生珠宝诚招加盟商">周大生珠宝诚招加盟商</a></li>
                                <li><a href="http://www.xiangmu.com/so/zhubao/66fu.html" title="六六福珠宝诚招加盟商">六六福珠宝诚招加盟商</a></li>
                                <li><a href="http://www.xiangmu.com/so/zhubao/mokingran.html" title="梦金园珠宝诚招加盟商">梦金园珠宝诚招加盟商</a></li>
                                <li><a href="http://www.xiangmu.com/so/zhubao/zhengdafu.html" title="正大福珠宝诚招加盟商">正大福珠宝诚招加盟商</a></li>
                                <li><a href="http://www.xiangmu.com/so/zhubao/2s.html" title="尚银珠宝诚招加盟商">尚银珠宝诚招加盟商</a></li>
                                <li><a href="http://www.xiangmu.com/so/zhubao/cbjt.html" title="COLORGEMS彩宝诚招加盟商">COLORGEMS彩宝诚招加盟商</a></li>
                                <li><a href="http://www.xiangmu.com/so/zhubao/vandear.html" title="范蒂尔珠宝诚招加盟商">范蒂尔珠宝诚招加盟商</a></li>
                                <li><a href="http://www.xiangmu.com/so/zhubao/shenyuyuan.html" title="神玉源珠宝诚招加盟商">神玉源珠宝诚招加盟商</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--company-->
    <div class="floor">
        <div class="f_content">
            <div class="fc_left">
                <div class="f_title">
                    <h2  class="rw2_h2"><i class="line_red"></i>模具品牌企业</h2>
                    <p>
                    @foreach($hotMjcompanys as $hotMjcompany )
                        <a target="_blank" title="{{$hotMjcompany->article->companyname}}"  href="/{{$hotMjcompany->arctype->real_path}}/{{$hotMjcompany->id}}.shtml">{{$hotMjcompany->article->companyname}}</a>
                    @endforeach
                    </p>
                </div>
                <div class="f_rellcontent">
                    @foreach($picMjcompanys as $picMjcompany)
                    <div target="_blank" title="{{$picMjcompany->title}}" href="/{{$picMjcompany->arctype->real_path}}/{{$picMjcompany->id}}.shtml" class="fcl_box">
                        <a target="_blank" href="/{{$picMjcompany->arctype->real_path}}/{{$picMjcompany->id}}.shtml"><img class="lazy" data-url="{{$picMjcompany->litpic}}" src="{{$picMjcompany->litpic}}" width="143" height="86" alt="{{$picMjcompany->article->companyname}}" title="{{$picMjcompany->article->companyname}}"></a>
                        <a target="_blank" href="/{{$picMjcompany->arctype->real_path}}/{{$picMjcompany->id}}.shtml"><span>{{$picMjcompany->article->companyname}}</span></a>
                        <a target="_blank" href="/{{$picMjcompany->arctype->real_path}}/{{$picMjcompany->id}}.shtml"><strong>{{$picMjcompany->shorttitle}}</strong></a>
                    </div>
                    @endforeach


                    <div class="clear"></div>
                </div>
                <div class="f_middlecontent">
                    <div class="tbox_a">
                        <ul class="Tul Tul_bg">
                            @foreach($mjCompany1s as $mjCompany1)
                            <li><a href="/{{$mjCompany1->arctype->real_path}}/{{$mjCompany1->id}}.shtml" title="{{$mjCompany1->title}}" target="_blank">{{$mjCompany1->title}}</a></li>
                            @endforeach
                        </ul>
                        <ul class="Tul">
                            @foreach($mjCompany2s as $mjCompany2)
                                <li><a href="/{{$mjCompany2->arctype->real_path}}/{{$mjCompany2->id}}.shtml" title="{{$mjCompany2->title}}" target="_blank">{{$mjCompany2->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="tbox_b">
                        <ul class="Tul Tul_bg">
                            @foreach($mjCompany3s as $mjCompany3)
                                <li><a href="/{{$mjCompany3->arctype->real_path}}/{{$mjCompany3->id}}.shtml" title="{{$mjCompany3->title}}" target="_blank">{{$mjCompany3->title}}</a></li>
                            @endforeach  </ul>
                        <ul class="Tul">
                            @foreach($mjCompany4s as $mjCompany4)
                                <li><a href="/{{$mjCompany4->arctype->real_path}}/{{$mjCompany4->id}}.shtml" title="{{$mjCompany4->title}}" target="_blank">{{$mjCompany4->title}}</a></li>
                            @endforeach </ul>
                    </div>
                    <div class="tbox_a">
                        <ul class="Tul Tul_bg">
                            @foreach($mjCompany5s as $mjCompany5)
                                <li><a href="/{{$mjCompany5->arctype->real_path}}/{{$mjCompany5->id}}.shtml" title="{{$mjCompany5->title}}" target="_blank">{{$mjCompany5->title}}</a></li>
                            @endforeach  </ul>
                        <ul class="Tul">
                            @foreach($mjCompany6s as $mjCompany6)
                                <li><a href="/{{$mjCompany6->arctype->real_path}}/{{$mjCompany6->id}}.shtml" title="{{$mjCompany6->title}}" target="_blank">{{$mjCompany6->title}}</a></li>
                            @endforeach  </ul>
                    </div>
                </div>

            </div>
            <div class="fc_right">
                <h3><span>VIP</span>会员专区</h3>
                <ul>
                    @foreach($newMjCompanys as $index=>$newMjCompany)
                    <li class=" @if($index==11) last-row text-red @endif">
                        <a target="_blank" title="{{$newMjCompany->companyname}}" data-ad="1652" stat="ad-1652" href="/{{$newMjCompany->arctype->real_path}}/{{$newMjCompany->id}}.shtml" class="block">{{$newMjCompany->article->companyname}}@if($index==0 ) <span class="new"></span>@elseif($index==5 || $index==6  || $index==9) <span class="hot"></span> @endif </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!--/company-->
    <!--production-->
    <div class="row rownews">
        <div class="floatL rwn_l" id="cat_left">
            <h2 class="rw2_h3"><i class="line_red"></i>产品专区</h2>
            <div class="space10 clear"></div>
            <div class="rwn_l_lubo">
                <div class="div_dls border_b">
                    @foreach($jiaProductions as $jiaProduction)
                        <dl>
                            <dt><a href="/{{$jiaProduction->arctype->real_path}}/{{$jiaProduction->id}}.shtml"><img alt="{{$jiaProduction->shorttitle}}" src="{{$jiaProduction->litpic}}"></a></dt>
                            <dd>
                                <a href="/{{$jiaProduction->arctype->real_path}}/{{$jiaProduction->id}}.shtml">{{$jiaProduction->title}}</a>
                            </dd>
                        </dl>
                    @endforeach
                        @foreach($gangProductions as $gangProduction)
                            <dl>
                                <dt><a href="/{{$gangProduction->arctype->real_path}}/{{$gangProduction->id}}.shtml"><img alt="{{$gangProduction->shorttitle}}" src="{{$gangProduction->litpic}}"></a></dt>
                                <dd>
                                    <a href="/{{$gangProduction->arctype->real_path}}/{{$gangProduction->id}}.shtml">{{$gangProduction->title}}</a>
                                </dd>
                            </dl>
                        @endforeach
                </div>
            </div>
        </div>
        <div class="floatR rwn_r">
            <h2 class="rw2_h3"><i class="line_red"></i>产品资讯</h2>
            <div class="space10 clear"></div>
            <div class="rwn_r_news">
                <ul>
                    @foreach($productionNews as $productionNew)
                    <li><a href="/{{$productionNew->arctype->real_path}}/{{$productionNew->id}}.shtml" title="{{$productionNew->title}}">{{$productionNew->title}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <!--/production-->
    <!--news-->
    <div class="qd_cont5">
        <div class="cont5_left">
            <h2>模具生产制造</h2>
            <div class="left_one">
                <div class="one_top">
                    @foreach($hytjNews as $hytjNew )
                    <div class="li_d">
                        <a href="/{{$hytjNew->arctype->real_path}}/{{$hytjNew->id}}.shtml" title="{{$hytjNew->title}}" target="_blank"><img src="{{$hytjNew->litpic}}" alt="{{$hytjNew->title}}"></a>
                        <div class="d_wz"><h3><a href="/{{$hytjNew->arctype->real_path}}/{{$hytjNew->id}}.shtml" target="_blank">{{$hytjNew->title}}</a></h3><p>{{str_limit($hytjNew->description,47,'...')}}</p></div>
                    </div>
                    @endforeach

                </div>
                <div class="one_cen">
                    <ul>
                        @foreach($hyNews as $hyNew)
                        <li><a href="/{{$hyNew->arctype->real_path}}/{{$hyNew->id}}.shtml" title="{{$hyNew->title}}" target="_blank">{{$hyNew->title}} </a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="left_two">
                <h4>模具供求信息</h4>
                <dl>
                    @foreach($gongqiuNews as $index=>$gongqiuNew)
                    <dd><span>{{date('m/d',strtotime($gongqiuNew->created_at))}}</span><i @if($index+1<4)class="ye" @endif>{{$index+1}}.</i><a href="/{{$gongqiuNew->arctype->real_path}}/{{$gongqiuNew->id}}.shtml" target="_blank" title="{{$gongqiuNew->title}}">{{$gongqiuNew->title}}</a></dd>
                   @endforeach
            </div>
            <div class="left_two">
                <h4>地区分类</h4>
                <dl>
                    @foreach($areaNews as $index=>$areaNew)
                        @if($index<1)
                        <dt><a href="/{{$areaNew->arctype->real_path}}/{{$areaNew->id}}.shtml" title="{{$areaNew->title}}" target="_blank"><img src="{{$areaNew->litpic}}"></a><span>{{str_limit($areaNew->description,20,'')}}【<a href="/{{$areaNew->arctype->real_path}}/{{$areaNew->id}}.shtmll" style="color:#ff7300;" target="_blank">阅读</a>】</span></dt>
                        @else
                            <dd><span>07/31</span><a href="/{{$areaNew->arctype->real_path}}/{{$areaNew->id}}.shtml" target="_blank" title="{{$areaNew->title}}"><font color="#ff7300">[{{$areaNew->country}}]</font>{{$areaNew->title}}</a></dd>
                        @endif
                    @endforeach
                </dl>
            </div>
        </div>
        <div class="cont5_right">
            <h2>展会资讯</h2>
            <div class="right_con">
                <dl>
                    @foreach($zhanhuiNews as $index=>$zhanhuiNew)
                       @if($index<1)
                        <dt><a href="/{{$zhanhuiNew->arctype->real_path}}/{{$zhanhuiNew->id}}.shtml" title="{{$zhanhuiNew->title}}" target="_blank"><img src="http://images.qudao.com/temp/2016-08-19/57b69a1b3be94.jpg" alt="{{$zhanhuiNew->litpic}}"></a></dt>
                        @else
                            <dd><a href="/{{$zhanhuiNew->arctype->real_path}}/{{$zhanhuiNew->id}}.shtml" title="{{$zhanhuiNew->title}}" target="_blank"><span>[最新]</span>{{$zhanhuiNew->title}}</a></dd>
                        @endif
                    @endforeach
                </dl>
            </div>
        </div>
    </div>
    <!--/news-->
    <!--flinks-->
    <div class="friend_links">
        <span>友情链接：</span> @foreach($flinks as $flink) <a href="{{$flink->weburl}}">{{$flink->webname}}</a>@endforeach
    </div>
    <!--/flinks-->
@stop