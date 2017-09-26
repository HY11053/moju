@extends('frontend.frontend')
@section('title') {{ config('app.webname', '中国模具网') }} @stop
@section('keywords') {{ config('app.keywords', '中国模具网') }} @stop
@section('description') {{ config('app.description', '中国模具网') }} @stop
@section('maincontent')
    <div class="main clearfix">
        <div class="layout2">
            <div class="brand_slide">
                <ul class="bigImg" style="position: relative; width: 296px; height: 295px;">
                    @foreach( array_filter(explode(',',$thisarticleinfos->article['imagepics'])) as $pics)
                        <li><img src="{{$pics}}" alt="【{{$thisarticleinfos->article['companyname']}}】"/></li>
                    @endforeach
                </ul>
                <div class="smallScroll"><a class="sPrev prevStop" href="javascript:void(0)"></a>
                    <div class="smallImg">
                        <div class="tempWrap" style="overflow:hidden; position:relative; width:260px">
                            <ul style="width: 455px; left: 0px; position: relative; overflow: hidden; padding: 0px; margin: 0px;">
                                @foreach( array_filter(explode(',',$thisarticleinfos->article['imagepics'])) as $pics)
                                    <li><img src="{{$pics}}" alt="【{{$thisarticleinfos->article['companyname']}}】"/></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <a class="sNext" href="javascript:void(0)"></a> </div>
            </div>

            <div class="info">
                <h1 class="tit">【{{$thisarticleinfos->article['companyname']}}】</h1>
                <div class="detail">
                    <ul>
                        <li>注册资金：<span class="price">{{$thisarticleinfos->article['companypay']}}</span></li>
                        <li>公司地址：<span class="crumbs">{{$thisarticleinfos->article['companyaddr']}}</span></li>
                    </ul>
                </div>
                <div class="tit_pice">
                    <ul>
                        <li>成立时间：<span class="price">{{$thisarticleinfos->article['companydate']}}</span></li>
                        <li>发展模式：<span class="price">{{$thisarticleinfos->article['companydev']}}</span></li>
                        <li>加盟区域：<span class="price">北京，上海，安徽等全国</span></li>
                        <li>适合人群：<span class="price">大学生，80后，白领等</span></li>
                        <li>经营范围：<span class="price">{{$thisarticleinfos->article['companyarea']}}</span></li>
                        <li>店铺面积：<span class="price">≥20平米</span></li>
                    </ul>
                </div>
                <div class="jiem">
                    <ul>
                        <li>意向加盟 <span class="price">3473</span></li>
                        <li style=" margin-left:35px">申请加盟：<span class="price">2785</span></li>
                        <li style=" margin-left:35px">品牌好评率 <span class="price">96%</span></li>
                    </ul>
                </div>
                <div class="tel">联系电话：<span>400-8896-216</span></div>
                <div class="btn_area"> <a id="chatNowButton" href="#msg" class="zixun_btn">立即咨询</a> <a href="javascript:;" class="suoyao_btn ico-quoted">成本预算</a> </div>
            </div>
            <div class="layout2_right fl">
                <div class="comp_box">
                    <div class="comp_info"> <b>公司信息</b>
                        <div class="comp_logo"> <img src="{{$thisarticleinfos->litpic}}" alt="{{$thisarticleinfos->article['companyname']}}"></div>
                        <div class="comp_info_con">
                            <h3 title="{{$thisarticleinfos->article['companyname']}}">{{$thisarticleinfos->article['companyname']}}</h3>
                            <ul>
                                <li><span>企业性质</span><em>国有企业</em></li>
                                <li><span>注册资金</span><em>100 万元</em></li>
                                <li><span>所在地</span><em>芜湖</em></li>
                                <li><span>商业特许经营许可证号：</span><em>是</em></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="comp_fenx">
                    <div class="renZ_info">
                        <ul>
                            <li class="mr15"><span class="beian1"> </span><em>备案企业</em></li>
                            <li class="mr15"><span class="renzheng1"></span><em>企业认证</em></li>
                            <li><span class="baozhang1"></span><em>投资保障</em></li>
                        </ul>
                    </div>
                    <div class="fx">
                        <div class="fxd">分享到：</div>
                        <div class="bdsharebuttonbox bdshare-button-style1-16" data-tag="share_1" data-bd-bind="1501730377289">
                            <a href="#" class="bds_qzone1" data-cmd="tsina" title="分享到QQ空间"></a>
                            <a href="#" class="bds_tsina1" data-cmd="qzone" title="分享到新浪微博"></a>
                            <a href="#" class="bds_weixin1" data-cmd="weixin" title="分享到微信"></a>
                        </div>
                        <script>
                            window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div class="center_list clearfix">
            <div class="news_box">
                <div class="w870">
                    <div class="fixed_nav">
                        <div class="cont_tab">
                            <ul>
                                <li class="js_join_1 cur"><a href="javascript:void(0)">品牌介绍</a></li>
                                <li class="js_join_2"><a href="javascript:void(0)">公司优势</a></li>
                                <li class="js_join_3"><a href="javascript:void(0)">经营范围</a></li>
                                <li class="js_join_4"><a href="javascript:void(0)">加工流程</a></li>
                                <li class="js_join_5"><a href="javascript:void(0)">产品展示</a></li>
                                <li class="js_join_6"><a href="javascript:void(0)">企业信用</a></li>
                                <li class="js_join_7"><a href="javascript:void(0)">团队展示</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="news_center">

                    <div class="join_cont">
                        <div class="join_tit" id="js_join_1" style="margin-bottom: 8px">@if(!empty($thisarticleinfos->article->companyinfotitle))  <h2 class="tit">{{$thisarticleinfos->article->companyinfotitle}}</h2> @else <h2 class="tit">【{{$thisarticleinfos->article['companyname']}}】<em>品牌介绍</em></h2>  @endif</div><table cellspacing="0" style="border-top: 1px solid rgb(230, 230, 230);">
                            <tbody>
                            <tr>
                                <td class="td_color">公司名称</td>
                                <td class="td_style">{{$thisarticleinfos->article->companyname}}</td>
                                <td class="td_color">投资金额</td>
                                <td class="td_style">{{$thisarticleinfos->article->companypay}}</td>
                            </tr>
                            <tr>
                                <td class="td_color">成立日期</td>
                                <td class="td_style">{{$thisarticleinfos->article->companydate}}</td>
                                <td class="td_color">综合指数</td>
                                <td class="td_style">{{$thisarticleinfos->click}}</td>
                            </tr>
                            <tr>
                                <td class="td_color">经营范围</td>
                                <td class="td_style">{{$thisarticleinfos->article->companyarea}}</td>
                                <td class="td_color">企业性质</td>
                                <td class="td_style">{{$thisarticleinfos->article->companyopt}}</td>
                            </tr>
                            <tr>
                                <td class="td_color">公司地址</td>
                                <td class="td_style">{{$thisarticleinfos->article->companyaddr}}</td>
                                <td class="td_color">发展模式</td>
                                <td class="td_style">{{$thisarticleinfos->article->companydev}}</td>
                            </tr>
                            <tr>
                                <td class="td_color">品牌发源地</td>
                                <td class="td_style">{{$thisarticleinfos->country}}</td>
                                <td class="td_color">联系电话</td>
                                <td class="td_style">{{$thisarticleinfos->article->companyphone}}</td>
                            </tr>
                            <tr>
                                <td class="td_color">电子邮件</td>
                                <td class="td_style">{{$thisarticleinfos->article->companyemail}}</td>
                                <td class="td_color">生产周期</td>
                                <td class="td_style"></td>
                            </tr>
                            <tr>
                                <td class="td_color">经营许可</td>
                                <td class="td_style">{{$thisarticleinfos->article->brandapply}}</td>
                                <td class="td_color"></td>
                                <td class="td_style"></td>
                            </tr>
                            <tr>
                                <td class="td_color"></td>
                                <td class="td_style"></td>
                                <td class="td_color"> </td>
                                <td class="td_style"> </td>
                            </tr>
                            </tbody>
                        </table>

                        <div class="join_intro">
                            {!! $thisarticleinfos->article['body'] !!}
                        </div>

                        <div class="join_tit" id="js_join_2">  @if(!empty($thisarticleinfos->article->companyavtitle))  <h2 class="tit">{{$thisarticleinfos->article->companyavtitle}}</h2> @else <h2 class="tit">【{{$thisarticleinfos->article['companyname']}}】<em>公司优势</em></h2>  @endif </div>
                        <div class="join_intro">
                            {!! $thisarticleinfos->article['companyadvantage'] !!}
                        </div>
                        <div class="join_tit" id="js_join_3">   @if(!empty($thisarticleinfos->article->companyareatitle))  <h2 class="tit">{{$thisarticleinfos->article->companyareatitle}}</h2> @else <h2 class="tit">【{{$thisarticleinfos->article['companyname']}}】<em>经营范围</em></h2>  @endif  </div>
                        <div class="join_intro">
                            {!! $thisarticleinfos->article['companyareacontent'] !!}
                        </div>
                        <div class="join_tit" id="js_join_4"> @if(!empty($thisarticleinfos->article->processtitle))  <h2 class="tit">{{$thisarticleinfos->article->processtitle}}</h2> @else <h2 class="tit">【{{$thisarticleinfos->article['companyname']}}】<em>加工流程</em></h2>  @endif  </div>
                        <div class="join_intro">
                            {!! $thisarticleinfos->article['processcontent'] !!}
                         </div>
                        <div class="join_tit" id="js_join_5">  @if(!empty($thisarticleinfos->article->productiontitle))  <h2 class="tit">{{$thisarticleinfos->article->productiontitle}}</h2> @else <h2 class="tit">【{{$thisarticleinfos->article['companyname']}}】<em>产品展示</em></h2>  @endif  </div>
                        <div class="join_intro">
                            {!! $thisarticleinfos->article['productioncontent'] !!}
                        </div>
                        <div class="join_tit" id="js_join_6">  @if(!empty($thisarticleinfos->article->credittitle))  <h2 class="tit">{{$thisarticleinfos->article->credittitle}}</h2> @else <h2 class="tit">【{{$thisarticleinfos->article['companyname']}}】<em>企业信用</em></h2>  @endif  </div>
                        <div class="join_intro">
                            {!! $thisarticleinfos->article['creditcontent'] !!}
                         </div>
                        <div class="join_tit" id="js_join_7"> @if(!empty($thisarticleinfos->article->teamtitle))  <h2 class="tit">{{$thisarticleinfos->article->teamtitle}}</h2> @else <h2 class="tit">【{{$thisarticleinfos->article['companyname']}}】<em>团队展示</em></h2>  @endif</div>
                        <div class="join_intro">
                            {!! $thisarticleinfos->article['teamcontent'] !!}
                        </div>
                        <div class="clear"></div>

                        <div class="cy_img"><img src="/reception/images/cye_03.jpg" alt="加盟步骤" style="border-radius: 5px;"> </div>

                        <div class="xg_news">
                            <div class="title"><strong>{{$thisarticleinfos->article['companyname']}}资讯</strong></div>
                            <div class="xw">
                                <ul class="clearfix">
                                    @foreach($xgsearchs as $xgsearch)
                                        <li><em>{{$xgsearch->published_at}}</em><a href="/{{$xgsearch->arctype->real_path}}/{{$xgsearch->id}}.shtml" title="{{$xgsearch->title}}">{{$xgsearch->title}} </a></li>
                                    @endforeach </ul>
                            </div>
                        </div>
                        <div class="gbook" id="msg">
                            <div class="hd">
                                <span class="tit">我要咨询</span>
                                <em>(24小时内获得企业的快速回复)</em>
                                <span class="tips">(<i>*</i>为必填选项)</span>
                            </div>

                            <div class="bd">
                                <ul>
                                    <li><span class="txt"><i>*</i>姓名</span><input type="text" name="guestname" id="guestname" value="" class="input_bk" placeholder="您的真实姓名">
                                        <span class="sex"><label><input type="radio" value="男" name="Sex" class="ly_radio"><em>先生</em></label><label><input type="radio" name="Sex" value="女" class="ly_radio"><em>女士</em></label></span></li>
                                    <li><span class="txt"><i>*</i>手机</span><input type="text" class="input_bk" id="phonenum" name="iphone" placeholder="电话是与您联系的重要方式"></li>
                                    <li><span class="txt">地址</span><input type="text" class="input_bk" name="adr" id="addresss" placeholder="与您联系的重要方式"></li>
                                    <li>
                                        <span class="txt"><i>*</i>留言</span><textarea id="note" name="content" class="textarea_bk" placeholder="请输入您的留言内容或选择快捷留言"></textarea>
                                        <div class="check_msg">
                                            <div class="check_msg_tit">请填写留言或根据意向选择下列快捷留言</div>
                                            <div class="check_msg_bd">
                                                <ul>
                                                    <li><a href="javascript:;" class="no" target="_self">我加盟后，您们还会提供哪些服务？</a></li>
                                                    <li><a href="javascript:;" class="no" target="_self">有兴趣开一个店，请寄资料或给我打电话。</a></li>
                                                    <li><a href="javascript:;" class="no" target="_self">请问我这个地方有加盟商了吗？</a></li>
                                                    <li><a href="javascript:;" class="no" target="_self">请将详细投资方案和资料寄给本人。</a></li>
                                                    <li><a href="javascript:;" class="no" target="_self">初步打算加盟贵公司，请寄资料。</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="txt">&nbsp;</span><input type="submit" value="提交留言" id="tj_btn" class="btn">
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="new_right">
                <!--计算器 开始-->
                <div class="new_bt2">
                    <h3> <i></i>模具厂排行榜 </h3>
                    <div class="rank_bd">
                        <ul>
                            @foreach($topbrands as $index=>$topbrand)
                                @if($index==0)
                                    <li class="top"> <a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml" target="_blank" title="{{$topbrand->article['companyname']}}"><i class="num">{{$index+1}} </i> <img src="{{$topbrand->litpic}}" alt="{{$topbrand->article['companyname']}}" ></a>
                                        <div class="cont">
                                            <p><a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml" target="_blank">{{$topbrand->article['companyname']}}</a></p>
                                            <p><span>投资金额：</span><i>{{$topbrand->article->brandpay}}</i></p>
                                            <p class="btn"><a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml">查看详情</a></p>
                                        </div>
                                    </li>
                                @else

                                    <li class="top"> <i class="num">{{$index+1}}</i> <span class="name"><a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml" target="_blank" title="{{$topbrand->article['companyname']}}">{{$topbrand->article['companyname']}}</a></span> <span class="price">{{$topbrand->article->brandpay}}</span> </li>
                                @endif

                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="new_bt2">
                    <h3> <i></i> 最新入驻模具厂品牌 </h3>
                    <div class="bt_xiangmu">
                        <ul>
                            @foreach($latestbrands as $latestbrand)
                                <li> <a href="/{{$latestbrand->arctype->real_path}}/{{$latestbrand->id}}.shtml">{{$latestbrand->article['companyname']}}</a> </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="new_bt2">
                    <h3> <i></i> 模具行业新闻 </h3>
                    <div class="bts com_news">
                        <div class="common">
                            <ul>
                                @foreach($latesnews as $latesnew)
                                    <li><a href="/{{$latesnew->arctype->real_path}}/{{$latesnew->id}}.shtml" target="_blank" title="{{$latesnew->title}}">{{$latesnew->title}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop