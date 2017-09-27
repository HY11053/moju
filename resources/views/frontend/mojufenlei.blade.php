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
                <dt>模具类型</dt>
                <dd><a class="hover" target="_self" href="#">全部</a></dd>
                @foreach($tradeTypes as $tradeType)
                    <dd><a target="_self" href="/{{$tradeType->real_path}}/">{{$tradeType->typename}}</a></dd>
                @endforeach

            </dl>
            <dl>
                <dt>适用范围</dt>
                <dd><a class="hover" target="_self" href="#">全部</a></dd>
                <dd><a target="_self" href="/project/0-1~5-0-0.shtml">家电</a></dd>
                <dd><a target="_self" href="/project/0-5~10-0-0.shtml">日用品</a></dd>
                <dd><a target="_self" href="/project/0-10~20-0-0.shtml">汽车</a></dd>
                <dd><a target="_self" href="/project/0-20~30-0-0.shtml">电子</a></dd>
                <dd><a target="_self" href="/project/0-30~50-0-0.shtml">医疗</a></dd>
                <dd><a target="_self" href="/project/0-50~100-0-0.shtml">工艺品</a></dd>
                <dd><a target="_self" href="/project/0-50~100-0-0.shtml">仪表</a></dd>
                <dd><a target="_self" href="/project/0-50~100-0-0.shtml">餐具</a></dd>
            </dl>
            <dl>
                <dt>作用对象</dt>
                <dd><a class="hover" target="_self" href="#">铝合金</a></dd>
                <dd><a target="_self" href="/project/0-0-1~10-0.shtml">金属</a></dd>
                <dd><a target="_self" href="/project/0-0-10~30-0.shtml">锌合金</a></dd>
                <dd><a target="_self" href="/project/0-0-30~50-0.shtml">塑料</a></dd>
                <dd><a target="_self" href="/project/0-0-50~80-0.shtml">铜合金</a></dd>
                <dd><a target="_self" href="/project/0-0-100-0.shtml">铝</a></dd>
                <dd><a target="_self" href="/project/0-0-100-0.shtml">不锈钢</a></dd>
                <dd><a target="_self" href="/project/0-0-100-0.shtml">水泥</a></dd>
            </dl>
            <dl>
                <dt>所在地区</dt>
                <dd><a class="hover" target="_self" href="#">地区</a></dd>
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
                @foreach($topbrands as $topbrand)
                    <li><a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml" target="_blank" title="{{$topbrand->article->companyname}}" class="pic"><img src="{{$topbrand->litpic}}" alt="{{$topbrand->article->companyname}}"><em>{{$topbrand->article->companyname}}</em></a></li>
                @endforeach
            </ul>
        </div>

        <div class="w910">
            <div class="order_item">
                <div class="order_item_l">
                    <a class="cur" href="#">默认排序</a>
                    <a href="#">金额排序<i class="up"></i><!--<i class="down"></i>--></a>
                </div>
                <div class="order_item_r">共找到<span>{{$pagelists->total()}}</span>个模具厂家</div>
            </div>

            <div class="info_list">

                <div class="info_groud">
                    <a href="/hdxx/n2843111331818.html" class="fl" target="_blank" title="2017第五届中国沭阳花木节"><img src="http://zhanhui.3158.cn//data/attachment/exhibition/exhbition/2017/06/16/09b2d359250381119aa924b06f66b43c.jpg" alt="2017第五届中国沭阳花木节" width="180" height="135"></a>
                    <div class="divC fl">
                        <h3><a href="/hdxx/n2843111331818.html" target="_blank" title="2017第五届中国沭阳花木节">2017第五届中国沭阳花木节</a></h3>
                        <h4><span class="col_f9">2017-09-28 至 2017-10-07</span>活动类型：<a href="/hdxx/all/yantaohui/guonei/">研讨会</a>  活动地点：沐阳</h4>
                        <p> 第五届中国沭阳花木节以政府及行业组织为主导、企业参与，邀请国内多家上市园林工程公司和国家级大型苗木生产龙头企业及业内权威专家，举办2017`中国沭阳苗木交易博览会、园林花木产业发展高峰论坛暨苗木采购对接会，通过...<a href="/hdxx/n2843111331818.html" target="_blank" title="第五届中国沭阳花木节以政府及行业组织为主导、企业参与，邀请国内多家上市园林工程公司和国家级大型苗木生产龙头企业及业内权威专家，举办2017`中国沭阳苗木交易博览会、园林花木产业发展高峰论坛暨苗木采购对接会，通过交流、展示、宣传和推广等多种方式，促进园林设计和工程施工方与苗木生产企业的信息无缝对接;同期举办2017`中国精品盆景(沭阳)邀请展、中国盆景制作比赛、家庭园艺展、花乡文艺汇演、美食节等，活动丰富多彩。
">[详情]</a></p>
                    </div>
                </div>
                <div class="info_groud">
                    <a href="/hdxx/n2865707099594.html" class="fl" target="_blank" title="北京汽车产业博览会举办时间及地点"><img src="http://zhanhui.3158.cn//data/attachment/exhibition/activity/2017/09/19/bd21876c3b0f4b0da637fd1538cd0ec1.jpg" alt="北京汽车产业博览会举办时间及地点" width="180" height="135"></a>
                    <div class="divC fl">
                        <h3><a href="/hdxx/n2865707099594.html" target="_blank" title="北京汽车产业博览会举办时间及地点">北京汽车产业博览会举办时间及地点</a></h3>
                        <h4><span class="col_f9">2017-09-30 至 2017-10-02</span>活动类型：<a href="/hdxx/all/chezhan/guonei/">车展</a>  活动地点：北京</h4>
                        <p> 北京汽车产业博览会是一次汽车厂商云集的年中让利的大型促销车展，涵盖了高端、合资、自主在内近60个热销品牌，300余款车型。...<a href="/hdxx/n2865707099594.html" target="_blank" title="北京汽车产业博览会是一次汽车厂商云集的年中让利的大型促销车展，涵盖了高端、合资、自主在内近60个热销品牌，300余款车型。">[详情]</a></p>
                    </div>
                </div>
                <div class="info_groud">
                    <a href="/hdxx/n2857707073612.html" class="fl" target="_blank" title="六安GS动漫游戏音乐节"><img src="http://zhanhui.3158.cn//data/attachment/exhibition/activity/2017/09/07/130f5253cf1a32503f4aa656ec287a89.jpg" alt="六安GS动漫游戏音乐节" width="180" height="135"></a>
                    <div class="divC fl">
                        <h3><a href="/hdxx/n2857707073612.html" target="_blank" title="六安GS动漫游戏音乐节">六安GS动漫游戏音乐节</a></h3>
                        <h4><span class="col_f9">2017-10-01 至 2017-10-02</span>活动类型：<a href="/hdxx/all/yinyuejie/guonei/">音乐节</a>  活动地点：六安</h4>
                        <p> 六安GS动漫游戏音乐节，...<a href="/hdxx/n2857707073612.html" target="_blank" title="六安GS动漫游戏音乐节，">[详情]</a></p>
                    </div>
                </div>
                <div class="info_groud">
                    <a href="/hdxx/n2855707093438.html" class="fl" target="_blank" title="2017珠海国际沙滩音乐节举办时间及门票"><img src="http://zhanhui.3158.cn//data/attachment/exhibition/activity/2017/09/01/9ae1afa65778243eb29868cb83096308.jpg" alt="2017珠海国际沙滩音乐节举办时间及门票" width="180" height="135"></a>
                    <div class="divC fl">
                        <h3><a href="/hdxx/n2855707093438.html" target="_blank" title="2017珠海国际沙滩音乐节举办时间及门票">2017珠海国际沙滩音乐节举办时间及门票</a></h3>
                        <h4><span class="col_f9">2017-10-01 至 2017-10-02</span>活动类型：<a href="/hdxx/all/yinyuejie/guonei/">音乐节</a>  活动地点：珠海</h4>
                        <p> 2017珠海国际沙滩音乐节大家是不是都很关注呢?为了方便大家获取相关的信息，3158展会网为大家简单介绍2017珠海国际沙滩音乐节举办时间及门票的相关内容，一起来了解吧。

                            ...<a href="/hdxx/n2855707093438.html" target="_blank" title="2017珠海国际沙滩音乐节大家是不是都很关注呢?为了方便大家获取相关的信息，3158展会网为大家简单介绍2017珠海国际沙滩音乐节举办时间及门票的相关内容，一起来了解吧。

">[详情]</a></p>
                    </div>
                </div>
                <div class="info_groud">
                    <a href="/hdxx/n2862707093672.html" class="fl" target="_blank" title="2017中国【天津】跨境电商国际名品博览会"><img src="http://zhanhui.3158.cn//data/attachment/exhibition/activity/2017/09/14/b097f43296b5451d8317420f6dfd6e32.jpg" alt="2017中国【天津】跨境电商国际名品博览会" width="180" height="135"></a>
                    <div class="divC fl">
                        <h3><a href="/hdxx/n2862707093672.html" target="_blank" title="2017中国【天津】跨境电商国际名品博览会">2017中国【天津】跨境电商国际名品博览会</a></h3>
                        <h4><span class="col_f9">2017-10-02 至 2017-10-07</span>活动类型：<a href="/hdxx/all/huodong/guonei/">活动</a>  活动地点：天津</h4>
                        <p> 近年来，随着电子信息技术和经济全球化的深入发展，电子商务在国际贸易中的地位和重要作用日益凸现，特别是在“跨境交易”与“电子商务”双引擎的拉动下，跨境电商风生水起，成为我国对外贸易的发展趋势。...<a href="/hdxx/n2862707093672.html" target="_blank" title="近年来，随着电子信息技术和经济全球化的深入发展，电子商务在国际贸易中的地位和重要作用日益凸现，特别是在“跨境交易”与“电子商务”双引擎的拉动下，跨境电商风生水起，成为我国对外贸易的发展趋势。">[详情]</a></p>
                    </div>
                </div>
                <div class="info_groud">
                    <a href="/hdxx/n2867707092458.html" class="fl" target="_blank" title="2017(第五届)节能与新能源汽车成果展"><img src="http://zhanhui.3158.cn//data/attachment/exhibition/activity/2017/09/21/86aef3c4536371c6e51f1ea42ca31fea.jpg" alt="2017(第五届)节能与新能源汽车成果展" width="180" height="135"></a>
                    <div class="divC fl">
                        <h3><a href="/hdxx/n2867707092458.html" target="_blank" title="2017(第五届)节能与新能源汽车成果展">2017(第五届)节能与新能源汽车成果展</a></h3>
                        <h4><span class="col_f9">2017-10-18 至 2017-10-21</span>活动类型：<a href="/hdxx/all/chezhan/guonei/">车展</a>  活动地点：北京</h4>
                        <p> 2017北京节能与新能源汽车成果展将聚集“新产品、新技术、新趋势”，突出“专、精、新”的办展特色，跟踪节能与新能源汽车产业发展新动态，努力打造国务院《节能与新能源汽车产业发展规划(2012—2020年)》成果集...<a href="/hdxx/n2867707092458.html" target="_blank" title="2017北京节能与新能源汽车成果展将聚集“新产品、新技术、新趋势”，突出“专、精、新”的办展特色，跟踪节能与新能源汽车产业发展新动态，努力打造国务院《节能与新能源汽车产业发展规划(2012—2020年)》成果集中展示和产业创新成果落地平台，推广节能与新能源汽车产品、技术和节能环保消费理念的重要平台。">[详情]</a></p>
                    </div>
                </div>
                <div class="info_groud">
                    <a href="/hdxx/n2863707093444.html" class="fl" target="_blank" title="2017年长沙第24届中国国际广告节论坛"><img src="http://zhanhui.3158.cn//data/attachment/exhibition/activity/2017/09/15/c36eaa6cd0905fd44316f6865762a874.jpg" alt="2017年长沙第24届中国国际广告节论坛" width="180" height="135"></a>
                    <div class="divC fl">
                        <h3><a href="/hdxx/n2863707093444.html" target="_blank" title="2017年长沙第24届中国国际广告节论坛">2017年长沙第24届中国国际广告节论坛</a></h3>
                        <h4><span class="col_f9">2017-10-21 至 2017-10-23</span>活动类型：<a href="/hdxx/all/huodong/guonei/">活动</a>  活动地点：长沙</h4>
                        <p> 广告(传媒)技术设备展览会LED&amp;广告标识展览会 独有的全国巡展特色和广泛的业界影响力为推动当地行业发展、经济建设及参展企业的市场扩充做出了重大贡献。广告(传媒)技术设备展览会、LED&amp;广告标识...<a href="/hdxx/n2863707093444.html" target="_blank" title="广告(传媒)技术设备展览会LED&amp;广告标识展览会 独有的全国巡展特色和广泛的业界影响力为推动当地行业发展、经济建设及参展企业的市场扩充做出了重大贡献。广告(传媒)技术设备展览会、LED&amp;广告标识展览会”作为主体展览板块，是国内具有广泛影响力的行业知名展会之一， 是广告四新产业精准对接中国广告、传媒企业及各行业广告主的高效能平台 。
">[详情]</a></p>
                    </div>
                </div>
                <div class="info_groud">
                    <a href="/hdxx/n2841111331423.html" class="fl" target="_blank" title="2017世界会议产业日大会"><img src="http://zhanhui.3158.cn//data/attachment/exhibition/activity/2017/06/14/d6dac8d9b5487cb4ec312c32bf14db2f.jpg" alt="2017世界会议产业日大会" width="180" height="135"></a>
                    <div class="divC fl">
                        <h3><a href="/hdxx/n2841111331423.html" target="_blank" title="2017世界会议产业日大会">2017世界会议产业日大会</a></h3>
                        <h4><span class="col_f9">2017-10-25 至 2017-10-27</span>活动类型：<a href="/hdxx/all/huodong/guonei/">活动</a>  活动地点：青岛</h4>
                        <p> 为了促进国内外会奖行业的交流与合作，了解国际会奖最新发展趋势，让会奖采购商直面供应商，由国际会议组织者联盟、青岛贸促会和专业的国际会议策划公司——百奥泰集团联合创新、共同合作举办的国内首个“中国质造”的首个国际...<a href="/hdxx/n2841111331423.html" target="_blank" title="为了促进国内外会奖行业的交流与合作，了解国际会奖最新发展趋势，让会奖采购商直面供应商，由国际会议组织者联盟、青岛贸促会和专业的国际会议策划公司——百奥泰集团联合创新、共同合作举办的国内首个“中国质造”的首个国际MICE盛典将于2017年10月25-27日在青岛举行，大会主题为“振兴丝路会议产业”。

">[详情]</a></p>
                    </div>
                </div>
                <div class="info_groud">
                    <a href="/hdxx/n2850111333270.html" class="fl" target="_blank" title="2017中国（宁海）国际文具产业博览会"><img src="http://zhanhui.3158.cn//data/attachment/exhibition/exhbition/2017/06/05/7c4f7d11b01feee044637bd1c4106f43.jpg" alt="2017中国（宁海）国际文具产业博览会" width="180" height="135"></a>
                    <div class="divC fl">
                        <h3><a href="/hdxx/n2850111333270.html" target="_blank" title="2017中国（宁海）国际文具产业博览会">2017中国（宁海）国际文具产业博览会</a></h3>
                        <h4><span class="col_f9">2017-10-26 至 2017-10-28</span>活动类型：<a href="/hdxx/all/huodong/guonei/">活动</a>  活动地点：宁波</h4>
                        <p> 宁海国际会展中心，位于金水路299号，总投资达5.5亿元，总建筑面积7.4万平方米，分会展展示区、会议中心区、规划展览馆和办公商业区等四大功能区块，是集会展、商贸、餐饮、旅游、健身等为一体的现代化、多功能、综合...<a href="/hdxx/n2850111333270.html" target="_blank" title="宁海国际会展中心，位于金水路299号，总投资达5.5亿元，总建筑面积7.4万平方米，分会展展示区、会议中心区、规划展览馆和办公商业区等四大功能区块，是集会展、商贸、餐饮、旅游、健身等为一体的现代化、多功能、综合性的国际会展中心。">[详情]</a></p>
                    </div>
                </div>
                <div class="info_groud">
                    <a href="/hdxx/n2800111355237.html" class="fl" target="_blank" title="2017郑州国际花卉园艺展览会"><img src="http://zhanhui.3158.cn//data/attachment/exhibition/activity/2017/03/22/5e30a902fd3929c0c949e81984b84869.jpg" alt="2017郑州国际花卉园艺展览会" width="180" height="135"></a>
                    <div class="divC fl">
                        <h3><a href="/hdxx/n2800111355237.html" target="_blank" title="2017郑州国际花卉园艺展览会">2017郑州国际花卉园艺展览会</a></h3>
                        <h4><span class="col_f9">2017-10-28 至 2017-10-30</span>活动类型：<a href="/hdxx/all/shanghuajie/guonei/">赏花节</a>  活动地点：郑州</h4>
                        <p> 2017第六届中国郑州国际花卉园艺展览会，3158展会网为您提供2017第六届中国郑州国际花卉园艺展览会，展会包括展会时间，展会地点，主办单位，承办单位，联系方式，展会面积，展会规模等，欢迎您的参观和参展...<a href="/hdxx/n2800111355237.html" target="_blank" title="2017第六届中国郑州国际花卉园艺展览会，3158展会网为您提供2017第六届中国郑州国际花卉园艺展览会，展会包括展会时间，展会地点，主办单位，承办单位，联系方式，展会面积，展会规模等，欢迎您的参观和参展">[详情]</a></p>
                    </div>
                </div>
                <div class="info_groud">
                    <a href="/hdxx/n2858707096243.html" class="fl" target="_blank" title="2017第十六届中国国际社会公共安全博览会时间、地点及详情"><img src="http://zhanhui.3158.cn//data/attachment/exhibition/activity/2017/09/08/83bc4ba3793eb9e0aa9567d654c06081.jpg" alt="2017第十六届中国国际社会公共安全博览会时间、地点及详情" width="180" height="135"></a>
                    <div class="divC fl">
                        <h3><a href="/hdxx/n2858707096243.html" target="_blank" title="2017第十六届中国国际社会公共安全博览会时间、地点及详情">2017第十六届中国国际社会公共安全博览会时间、地点及详情</a></h3>
                        <h4><span class="col_f9">2017-10-29 至 2017-11-01</span>活动类型：<a href="/hdxx/all/huodong/guonei/">活动</a>  活动地点：深圳</h4>
                        <p> 第十五届深圳"安博会"大幕的完美落下，已预示着两年后第十六届中国国际公共安全博览会(CPSE)的隆重登台。累积28年、共十五届安防展会的举办经验，秉承专业资质，第十六届中国国际社会公共安全博...<a href="/hdxx/n2858707096243.html" target="_blank" title="第十五届深圳&quot;安博会&quot;大幕的完美落下，已预示着两年后第十六届中国国际公共安全博览会(CPSE)的隆重登台。累积28年、共十五届安防展会的举办经验，秉承专业资质，第十六届中国国际社会公共安全博览会将于2017年10月29日 - 11月1日，在深圳为世界呈现全球第一的品质。">[详情]</a></p>
                    </div>
                </div>
                <div class="info_groud">
                    <a href="/hdxx/n2847111339651.html" class="fl" target="_blank" title="2017南京第26届美容化妆品博览会"><img src="http://zhanhui.3158.cn//data/attachment/exhibition/exhbition/2017/06/08/1a919914c14fcd0212629b0c33c25a22.png" alt="2017南京第26届美容化妆品博览会" width="180" height="135"></a>
                    <div class="divC fl">
                        <h3><a href="/hdxx/n2847111339651.html" target="_blank" title="2017南京第26届美容化妆品博览会">2017南京第26届美容化妆品博览会</a></h3>
                        <h4><span class="col_f9">2017-11-02 至 2017-11-04</span>活动类型：<a href="/hdxx/all/huodong/guonei/">活动</a>  活动地点：南京</h4>
                        <p> 2017南京国际秋季美容化妆品博览会将于11月2-4日在南京国际展览中心隆重举办! 已成为江浙地区最大、影响力最强的美容行业专业盛会，本届展览将以高端、精品、品质为宗旨，届时展会将汇聚国内外知名的美容化妆品行业...<a href="/hdxx/n2847111339651.html" target="_blank" title="2017南京国际秋季美容化妆品博览会将于11月2-4日在南京国际展览中心隆重举办! 已成为江浙地区最大、影响力最强的美容行业专业盛会，本届展览将以高端、精品、品质为宗旨，届时展会将汇聚国内外知名的美容化妆品行业制造商、批发商和零售商，是美容化妆品品牌宣传推广的最佳舞台，是商贸洽谈、交易的重要场所，为买方和卖方市场沟通和增进交流起到了积极的推动作用，业内专业人士共话趋势、寻求合作与发展的平台。展会意在打造成为江苏美容行业的风向标;江苏美容市场的晴雨表。">[详情]</a></p>
                    </div>
                </div>
                <div class="info_groud">
                    <a href="/hdxx/n2801111334173.html" class="fl" target="_blank" title="2017第六届上海国际粉末冶金展览会"><img src="http://zhanhui.3158.cn//data/attachment/exhibition/exhbition/2017/03/21/d0769b6ceb44de6b6436f5bd1541833e.jpg" alt="2017第六届上海国际粉末冶金展览会" width="180" height="135"></a>
                    <div class="divC fl">
                        <h3><a href="/hdxx/n2801111334173.html" target="_blank" title="2017第六届上海国际粉末冶金展览会">2017第六届上海国际粉末冶金展览会</a></h3>
                        <h4><span class="col_f9">2017-11-20 至 2017-11-22</span>活动类型：<a href="/hdxx/all/huodong/guonei/">活动</a>  活动地点：上海</h4>
                        <p> 本届展会展出总面积40000平方米，超过400家优秀企业参展，为了让参展商与专业买家能够更精准的进行匹配，同时更好的针对粉末冶金全产业链进行展示，本届展会将针对粉末冶金的原料、设备及产品细分展示。...<a href="/hdxx/n2801111334173.html" target="_blank" title="本届展会展出总面积40000平方米，超过400家优秀企业参展，为了让参展商与专业买家能够更精准的进行匹配，同时更好的针对粉末冶金全产业链进行展示，本届展会将针对粉末冶金的原料、设备及产品细分展示。">[详情]</a></p>
                    </div>
                </div>
                <div class="info_groud">
                    <a href="/hdxx/n2861707078153.html" class="fl" target="_blank" title="2017中国•孝感孝文化旅游节"><img src="http://zhanhui.3158.cn//data/attachment/exhibition/activity/2017/09/12/f632d1a47e8b59b020fce5909d38f781.jpg" alt="2017中国•孝感孝文化旅游节" width="180" height="135"></a>
                    <div class="divC fl">
                        <h3><a href="/hdxx/n2861707078153.html" target="_blank" title="2017中国•孝感孝文化旅游节">2017中国•孝感孝文化旅游节</a></h3>
                        <h4><span class="col_f9">2017-11-23 至 2017-11-26</span>活动类型：<a href="/hdxx/all/nvyoujie/guonei/">旅游节</a>  活动地点：孝感</h4>
                        <p> 孝感孝文化旅游节，本届孝文化旅游节以“孝、爱、忠、勇”为主题，共设置十大活动。其中与驻孝空降兵部队联办2017中国•孝感孝文化旅游节文艺晚会、全市“两资一促”重点项目集中签约仪式、“姜昆说相声”孝感专场演出、“...<a href="/hdxx/n2861707078153.html" target="_blank" title="孝感孝文化旅游节，本届孝文化旅游节以“孝、爱、忠、勇”为主题，共设置十大活动。其中与驻孝空降兵部队联办2017中国•孝感孝文化旅游节文艺晚会、全市“两资一促”重点项目集中签约仪式、“姜昆说相声”孝感专场演出、“乡恋”主题青年交友联谊活动、荆楚楷模月度人物发布活动以及国际老年健康产业博览会等六大活动属于首次举办。">[详情]</a></p>
                    </div>
                </div>
                <div class="info_groud">
                    <a href="/hdxx/n2846111333948.html" class="fl" target="_blank" title="2017中国（武汉）国际汽车零部件及加工博览会"><img src="http://zhanhui.3158.cn//data/attachment/exhibition/exhbition/2017/06/08/7eb74e458dada51d9d4d0381cef163ea.png" alt="2017中国（武汉）国际汽车零部件及加工博览会" width="180" height="135"></a>
                    <div class="divC fl">
                        <h3><a href="/hdxx/n2846111333948.html" target="_blank" title="2017中国（武汉）国际汽车零部件及加工博览会">2017中国（武汉）国际汽车零部件及加工博览会</a></h3>
                        <h4><span class="col_f9">2017-11-24 至 2017-11-26</span>活动类型：<a href="/hdxx/all/yantaohui/guonei/">研讨会</a>  活动地点：武汉</h4>
                        <p> “中国(武汉)国际汽车零部件及加工博览会”将于2017年11月24-26日在武汉国际博览中心隆重举行，大会是华中地区最具规模的国际汽车零部件博览会。作为中部腹地的武汉，是中国汽车制造及配套企业最为集中的城市之一...<a href="/hdxx/n2846111333948.html" target="_blank" title="“中国(武汉)国际汽车零部件及加工博览会”将于2017年11月24-26日在武汉国际博览中心隆重举行，大会是华中地区最具规模的国际汽车零部件博览会。作为中部腹地的武汉，是中国汽车制造及配套企业最为集中的城市之一，也是集铁路、公路、水运、航空为一体的重要交通通信枢纽，中部地区特大中心城市，最大的综合性工业基地。武汉市是汽车工业展示产品，交流技术，获取商机的理想地。">[详情]</a></p>
                    </div>
                </div>
                <div class="info_groud">
                    <a href="/hdxx/n2849111331264.html" class="fl" target="_blank" title="第十九届中国（北京）国际休闲食品及进口食品博览会"><img src="http://zhanhui.3158.cn//data/attachment/exhibition/exhbition/2017/06/06/06f86aa120cba921e36664edc34894d8.jpg" alt="第十九届中国（北京）国际休闲食品及进口食品博览会" width="180" height="135"></a>
                    <div class="divC fl">
                        <h3><a href="/hdxx/n2849111331264.html" target="_blank" title="第十九届中国（北京）国际休闲食品及进口食品博览会">第十九届中国（北京）国际休闲食品及进口食品博览会</a></h3>
                        <h4><span class="col_f9">2017-11-28 至 2017-11-30</span>活动类型：<a href="/hdxx/all/meishijie/guonei/">美食节</a>  活动地点：北京</h4>
                        <p> 中国国际休闲食品及进口食品博览会(简称：CIFECHINA)，历经十余年卓越发展沉淀，现成为亚洲地区食品行业规模最大、最具影响力的行业盛会。本届展会由中华人民共和国商务部批准引导支持展会，中国对外贸易经济合作企...<a href="/hdxx/n2849111331264.html" target="_blank" title="中国国际休闲食品及进口食品博览会(简称：CIFECHINA)，历经十余年卓越发展沉淀，现成为亚洲地区食品行业规模最大、最具影响力的行业盛会。本届展会由中华人民共和国商务部批准引导支持展会，中国对外贸易经济合作企业协会等众多权威机构联合北京千和展览有限公司主办组织,本届展会预计展出面积25000平方米，中外优秀参展商800家、参观观众将达到6万人次。">[详情]</a></p>
                    </div>
                </div>
                <div class="info_groud">
                    <a href="/hdxx/n2795111338151.html" class="fl" target="_blank" title="第19届深圳国际服装贴牌/纺织面辅料/服饰配件博览会"><img src="http://zhanhui.3158.cn//data/attachment/exhibition/activity/2017/03/21/32c4f8daba7149949bdfa6bb8bd12c4b.jpg" alt="第19届深圳国际服装贴牌/纺织面辅料/服饰配件博览会" width="180" height="135"></a>
                    <div class="divC fl">
                        <h3><a href="/hdxx/n2795111338151.html" target="_blank" title="第19届深圳国际服装贴牌/纺织面辅料/服饰配件博览会">第19届深圳国际服装贴牌/纺织面辅料/服饰配件博览会</a></h3>
                        <h4><span class="col_f9">2017-11-30 至 2017-12-02</span>活动类型：<a href="/hdxx/all/fuzhuangjie/guonei/">服装节</a>  活动地点：深圳</h4>
                        <p> 上届展会于2016年12月1-3日在深圳会展中心1、2、4、5号馆举行，展会期间共吸引了50653人次入场。光临的买家有：Zara、影儿、歌力思、安正时尚集团、朗姿、珂莱蒂尔、绫志集团、七匹狼、马克华菲、拉夏贝...<a href="/hdxx/n2795111338151.html" target="_blank" title="上届展会于2016年12月1-3日在深圳会展中心1、2、4、5号馆举行，展会期间共吸引了50653人次入场。光临的买家有：Zara、影儿、歌力思、安正时尚集团、朗姿、珂莱蒂尔、绫志集团、七匹狼、马克华菲、拉夏贝儿、例外、GAP、C&amp;A、VERO MODA、Jack Jones、Tommy Hilfiger、Betu、玛丝菲尔、赢家、曼娅奴、季候风、维格娜丝、美特斯邦威、以纯、森马、播、歌莉亚、卡尔丹顿、利郎、才子、太平鸟、江南布衣、爱特爱、雅戈尔、哥弟、秋水伊人等">[详情]</a></p>
                    </div>
                </div>
                <div class="info_groud">
                    <a href="/hdxx/n2860707095459.html" class="fl" target="_blank" title="2017第十九届(北京)国际食品及进口食品博览会"><img src="http://zhanhui.3158.cn//data/attachment/exhibition/activity/2017/09/12/a8837884bc0930e60c6b85b95936218f.jpg" alt="2017第十九届(北京)国际食品及进口食品博览会" width="180" height="135"></a>
                    <div class="divC fl">
                        <h3><a href="/hdxx/n2860707095459.html" target="_blank" title="2017第十九届(北京)国际食品及进口食品博览会">2017第十九届(北京)国际食品及进口食品博览会</a></h3>
                        <h4><span class="col_f9">2017-12-27 至 2017-12-29</span>活动类型：<a href="/hdxx/all/meishijie/guonei/">美食节</a>  活动地点：北京</h4>
                        <p> 中国国际食品及进口食品博览会(简称：CIFECHINA)，历经十余年卓越发展沉淀，现成为亚洲地区食品行业规模最大、最具影响力的行业盛会。本届展会由中华人民共和国商务部批准引导支持展会，中国对外贸易经济合作企业协...<a href="/hdxx/n2860707095459.html" target="_blank" title="中国国际食品及进口食品博览会(简称：CIFECHINA)，历经十余年卓越发展沉淀，现成为亚洲地区食品行业规模最大、最具影响力的行业盛会。本届展会由中华人民共和国商务部批准引导支持展会，中国对外贸易经济合作企业协会等众多权威机构联合北京千和展览有限公司主办组织,本届展会预计展出面积25000平方米，中外优秀参展商800家、参观观众将达到6万人次。
">[详情]</a></p>
                    </div>
                </div>
                <div class="info_groud">
                    <a href="/hdxx/n2845111333183.html" class="fl" target="_blank" title="2018 餐饮连锁加盟展CHINA FOOD"><img src="http://zhanhui.3158.cn//data/attachment/exhibition/activity/2017/06/19/ea583a67b7c92c0e140716cbcf5b5cbb.jpg" alt="2018 餐饮连锁加盟展CHINA FOOD" width="180" height="135"></a>
                    <div class="divC fl">
                        <h3><a href="/hdxx/n2845111333183.html" target="_blank" title="2018 餐饮连锁加盟展CHINA FOOD">2018 餐饮连锁加盟展CHINA FOOD</a></h3>
                        <h4><span class="col_f9">2018-03-22 至 2018-03-24</span>活动类型：<a href="/hdxx/all/meishijie/guonei/">美食节</a>  活动地点：上海</h4>
                        <p> 餐饮加盟，请认准“CHINA FOOD”，中国烹饪协会唯一官方主办。专注餐饮，精准定位;顶层机构、权威发布;开年首展、人气火爆。同期举办“中国餐饮年度盛典”、发布“中国优秀餐饮品牌”，推动更多B2B加盟——找餐...<a href="/hdxx/n2845111333183.html" target="_blank" title="餐饮加盟，请认准“CHINA FOOD”，中国烹饪协会唯一官方主办。专注餐饮，精准定位;顶层机构、权威发布;开年首展、人气火爆。同期举办“中国餐饮年度盛典”、发布“中国优秀餐饮品牌”，推动更多B2B加盟——找餐饮项目，来CHINA FOOD。">[详情]</a></p>
                    </div>
                </div>
                <div class="info_groud">
                    <a href="/hdxx/n2851111339152.html" class="fl" target="_blank" title="2018第七届中国（武汉）国际焙烤展览会"><img src="http://zhanhui.3158.cn//data/attachment/exhibition/exhbition/2017/06/20/5ee12f95727dcbb26ba431e2f7f77288.jpg" alt="2018第七届中国（武汉）国际焙烤展览会" width="180" height="135"></a>
                    <div class="divC fl">
                        <h3><a href="/hdxx/n2851111339152.html" target="_blank" title="2018第七届中国（武汉）国际焙烤展览会">2018第七届中国（武汉）国际焙烤展览会</a></h3>
                        <h4><span class="col_f9">2018-04-13 至 2018-04-15</span>活动类型：<a href="/hdxx/all/meishijie/guonei/">美食节</a>  活动地点：武汉</h4>
                        <p> 第七届武汉国际焙烤展览会将于2018年4月13-15日在武汉国际博览中心集聚国内外烘焙、餐饮、设备、原料、 包装及行业新动态,分享新设备、新原料、新技术、新产品、新包装、新概念，给华中烘焙食品带来新商机直面终端...<a href="/hdxx/n2851111339152.html" target="_blank" title="第七届武汉国际焙烤展览会将于2018年4月13-15日在武汉国际博览中心集聚国内外烘焙、餐饮、设备、原料、 包装及行业新动态,分享新设备、新原料、新技术、新产品、新包装、新概念，给华中烘焙食品带来新商机直面终端市场，打造人心所向的一站式平台。

">[详情]</a></p>
                    </div>
                </div>
                <div class="info_groud">
                    <a href="/hdxx/n2859707091918.html" class="fl" target="_blank" title="2018北京国际烘焙食品设计展览会举办时间及地点"><img src="http://zhanhui.3158.cn//data/attachment/exhibition/activity/2017/09/11/593631c0b38c3a4e3d9d1d6464abc31d.jpg" alt="2018北京国际烘焙食品设计展览会举办时间及地点" width="180" height="135"></a>
                    <div class="divC fl">
                        <h3><a href="/hdxx/n2859707091918.html" target="_blank" title="2018北京国际烘焙食品设计展览会举办时间及地点">2018北京国际烘焙食品设计展览会举办时间及地点</a></h3>
                        <h4><span class="col_f9">2018-04-19 至 2018-04-21</span>活动类型：<a href="/hdxx/all/meishijie/guonei/">美食节</a>  活动地点：北京</h4>
                        <p> 中国国际烘焙展创办于 2003 年。近15年来，它已经成功举办了14届，成为全球烘焙业知名的国际盛会之一，2017年的展会接待了来自全球的603家展商，其中21%来自中国以外地区;82690名观众中 60%为采...<a href="/hdxx/n2859707091918.html" target="_blank" title="中国国际烘焙展创办于 2003 年。近15年来，它已经成功举办了14届，成为全球烘焙业知名的国际盛会之一，2017年的展会接待了来自全球的603家展商，其中21%来自中国以外地区;82690名观众中 60%为采购商或决策者，观众总数比2016年增长了7.2%，来自63个国家，CBBE主要展示烘焙甜品工匠制作的工艺、技术及烘焙食品等，得益于展会所代表的行业的多样性和互补性。
">[详情]</a></p>
                    </div>
                </div>
                <div class="info_groud">
                    <a href="/hdxx/n2866707097302.html" class="fl" target="_blank" title="2017年北京首届G车展活动时间及地点"><img src="http://zhanhui.3158.cn//data/attachment/exhibition/activity/2017/09/20/c2189fe82e4fd1aa70c94122571a1b7c.jpg" alt="2017年北京首届G车展活动时间及地点" width="180" height="135"></a>
                    <div class="divC fl">
                        <h3><a href="/hdxx/n2866707097302.html" target="_blank" title="2017年北京首届G车展活动时间及地点">2017年北京首届G车展活动时间及地点</a></h3>
                        <h4><span class="col_f9">2017-09-23 至 2017-09-24</span>活动类型：<a href="/hdxx/all/chezhan/guonei/">车展</a>  活动地点：北京</h4>
                        <p> 2017年北京首届G车展活动时间定于9月23-24日，2017年北京首届G车展在北京亦创国际会展中心举办，汇聚国内外主流品牌，近百车型供你选择，劲爆钜惠，购车享超级大礼包。...<a href="/hdxx/n2866707097302.html" target="_blank" title="2017年北京首届G车展活动时间定于9月23-24日，2017年北京首届G车展在北京亦创国际会展中心举办，汇聚国内外主流品牌，近百车型供你选择，劲爆钜惠，购车享超级大礼包。">[详情]</a></p>
                    </div>
                </div>
                <div class="info_groud">
                    <a href="/hdxx/n2839111335091.html" class="fl" target="_blank" title="2017第二届中国国际骨科研究大会暨展览会(ORS-China 2017)"><img src="http://zhanhui.3158.cn//data/attachment/exhibition/activity/2017/06/14/308db999fb759c9210f75fcbbad8898e.jpg" alt="2017第二届中国国际骨科研究大会暨展览会(ORS-China 2017)" width="180" height="135"></a>
                    <div class="divC fl">
                        <h3><a href="/hdxx/n2839111335091.html" target="_blank" title="2017第二届中国国际骨科研究大会暨展览会(ORS-China 2017)">2017第二届中国国际骨科研究大会暨展览会(ORS-China 2017)</a></h3>
                        <h4><span class="col_f9">2017-09-22 至 2017-09-23</span>活动类型：<a href="/hdxx/all/huodong/guonei/">活动</a>  活动地点：上海</h4>
                        <p> 近十多年来，我国骨科基础研究工作得到了快速的发展。随着骨科新理论、新技术、新材料的快速发展，基础研究在推动骨科事业发展中起到越来越大的作用。为了促进我国骨科基础研究的水平，使我们的科研成果尽快转化成为临床需要的...<a href="/hdxx/n2839111335091.html" target="_blank" title="近十多年来，我国骨科基础研究工作得到了快速的发展。随着骨科新理论、新技术、新材料的快速发展，基础研究在推动骨科事业发展中起到越来越大的作用。为了促进我国骨科基础研究的水平，使我们的科研成果尽快转化成为临床需要的新技术、新产品，为广大骨科基础研究领域人员搭建一个互相交流学习的平台，经卫生部有关部门批准，由上海广贸会展服务有限公司联合国内外各大协会学会、医院、科研单位、骨科厂家、投融资机构共同举办，于2017年9月22日-23日在上海召开2017(第二届)中国国际骨科研究大会。

">[详情]</a></p>
                    </div>
                </div>
                <div class="info_groud">
                    <a href="/hdxx/n2848111338378.html" class="fl" target="_blank" title="2017（第二届）中国国际骨科研究大会"><img src="http://zhanhui.3158.cn//data/attachment/exhibition/exhbition/2017/06/02/cf139ef9d79a44d19e416e792a993013.jpg" alt="2017（第二届）中国国际骨科研究大会" width="180" height="135"></a>
                    <div class="divC fl">
                        <h3><a href="/hdxx/n2848111338378.html" target="_blank" title="2017（第二届）中国国际骨科研究大会">2017（第二届）中国国际骨科研究大会</a></h3>
                        <h4><span class="col_f9">2017-09-22 至 2017-09-23</span>活动类型：<a href="/hdxx/all/yantaohui/guonei/">研讨会</a>  活动地点：上海</h4>
                        <p> 大会面向全球征集报告议题，如有兴趣在大会上面做报告，请尽快联系我们，邮箱地址 contact@bonetec-china.com。

                            近十多年来，我国骨科基础研究工作得到了快速的发展。随着骨科新理论、新技术、新...<a href="/hdxx/n2848111338378.html" target="_blank" title="大会面向全球征集报告议题，如有兴趣在大会上面做报告，请尽快联系我们，邮箱地址 contact@bonetec-china.com。

近十多年来，我国骨科基础研究工作得到了快速的发展。随着骨科新理论、新技术、新材料的快速发展，基础研究在推动骨科事业发展中起到越来越大的作用。为了促进我国骨科基础研究的水平，使我们的科研成果尽快转化成为临床需要的新技术、新产品，为广大骨科基础研究领域人员搭建一个互相交流学习的平台，促进科研单位，基础研究与临床医生，专业厂家和医疗器械、投融资机构等的有机联系，2017(第二届)中国国际骨科研究大会将于2017年9月22-23日在上海召开。">[详情]</a></p>
                    </div>
                </div>
                <div class="info_groud">
                    <a href="/hdxx/n2864707094533.html" class="fl" target="_blank" title="2017中国(北京)国际3D影视技术及影院设备展览会"><img src="http://zhanhui.3158.cn//data/attachment/exhibition/activity/2017/09/18/a9335a2de083cea41f35a9ea84497479.jpg" alt="2017中国(北京)国际3D影视技术及影院设备展览会" width="180" height="135"></a>
                    <div class="divC fl">
                        <h3><a href="/hdxx/n2864707094533.html" target="_blank" title="2017中国(北京)国际3D影视技术及影院设备展览会">2017中国(北京)国际3D影视技术及影院设备展览会</a></h3>
                        <h4><span class="col_f9">2017-09-20 至 2017-09-22</span>活动类型：<a href="/hdxx/all/huodong/guonei/">活动</a>  活动地点：北京</h4>
                        <p> 目前我国对3D影视发展非常重视，国家广电总局强调要推动3D影视产业的发展,3D影视已经成为我国朝阳产业。近年我国3D影视影院行业出现了很多新技术、新概念、新产品。
                            ...<a href="/hdxx/n2864707094533.html" target="_blank" title="目前我国对3D影视发展非常重视，国家广电总局强调要推动3D影视产业的发展,3D影视已经成为我国朝阳产业。近年我国3D影视影院行业出现了很多新技术、新概念、新产品。
">[详情]</a></p>
                    </div>
                </div>
                <div class="info_groud">
                    <a href="/hdxx/n2853707091449.html" class="fl" target="_blank" title="“东方汇佳”2017年秋季大型招聘会！"><img src="http://zhanhui.3158.cn//data/attachment/exhibition/activity/2017/08/25/ec9a2275bb51fd9ec57ecdd5a86cb7bb.jpg" alt="“东方汇佳”2017年秋季大型招聘会！" width="180" height="135"></a>
                    <div class="divC fl">
                        <h3><a href="/hdxx/n2853707091449.html" target="_blank" title="“东方汇佳”2017年秋季大型招聘会！">“东方汇佳”2017年秋季大型招聘会！</a></h3>
                        <h4><span class="col_f9">2017-09-16 至 2017-09-16</span>活动类型：<a href="/hdxx/all/huodong/guonei/">活动</a>  活动地点：北京</h4>
                        <p> 本场招聘会可招聘销售营销类职位、IT技术类、医药化工医疗器械类、酒店旅游类、加工制造类、中高级技工类、外贸外语翻译类、环境环保类、房产建筑类、教育培训、网络技术、等人才招聘的需求。...<a href="/hdxx/n2853707091449.html" target="_blank" title="本场招聘会可招聘销售营销类职位、IT技术类、医药化工医疗器械类、酒店旅游类、加工制造类、中高级技工类、外贸外语翻译类、环境环保类、房产建筑类、教育培训、网络技术、等人才招聘的需求。">[详情]</a></p>
                    </div>
                </div>
                <div class="info_groud">
                    <a href="/hdxx/n2854707093000.html" class="fl" target="_blank" title="2017年(济南)美食节时间、地点及参展美食"><img src="http://zhanhui.3158.cn//data/attachment/exhibition/activity/2017/08/31/01c6c0d1f3f2f9be2782081a6eb73e28.jpg" alt="2017年(济南)美食节时间、地点及参展美食" width="180" height="135"></a>
                    <div class="divC fl">
                        <h3><a href="/hdxx/n2854707093000.html" target="_blank" title="2017年(济南)美食节时间、地点及参展美食">2017年(济南)美食节时间、地点及参展美食</a></h3>
                        <h4><span class="col_f9">2017-09-15 至 2017-09-17</span>活动类型：<a href="/hdxx/all/meishijie/guonei/">美食节</a>  活动地点：济南</h4>
                        <p> 距离2017年(济南)美食节举办的时间不远了，很多朋友们是不是都想要去参加呢?为了方便大家获取信息，3158展会网为大家介绍了2017年(济南)美食节时间、地点及参展美食，希望能给大家带来帮助!

                            ...<a href="/hdxx/n2854707093000.html" target="_blank" title="距离2017年(济南)美食节举办的时间不远了，很多朋友们是不是都想要去参加呢?为了方便大家获取信息，3158展会网为大家介绍了2017年(济南)美食节时间、地点及参展美食，希望能给大家带来帮助!

">[详情]</a></p>
                    </div>
                </div>
                <div class="info_groud">
                    <a href="/hdxx/n2844111337661.html" class="fl" target="_blank" title="2017中国（青岛）国际海洋科技展览会"><img src="http://zhanhui.3158.cn//data/attachment/exhibition/activity/2017/06/19/6092fc91442793a989cef246141736b0.jpg" alt="2017中国（青岛）国际海洋科技展览会" width="180" height="135"></a>
                    <div class="divC fl">
                        <h3><a href="/hdxx/n2844111337661.html" target="_blank" title="2017中国（青岛）国际海洋科技展览会">2017中国（青岛）国际海洋科技展览会</a></h3>
                        <h4><span class="col_f9">2017-09-12 至 2017-09-14</span>活动类型：<a href="/hdxx/all/huodong/guonei/">活动</a>  活动地点：青岛</h4>
                        <p> 2017中国(青岛)国际海洋科技展览会就要开始了，关注2017中国(青岛)国际海洋科技展览会的小伙伴需要注意了，想知道地点在哪吗?时间是什么时候吗?您还在等什么呢?赶快出发吧!3158展会小编为您整理了2017...<a href="/hdxx/n2844111337661.html" target="_blank" title="2017中国(青岛)国际海洋科技展览会就要开始了，关注2017中国(青岛)国际海洋科技展览会的小伙伴需要注意了，想知道地点在哪吗?时间是什么时候吗?您还在等什么呢?赶快出发吧!3158展会小编为您整理了2017中国(青岛)国际海洋科技展览会的最新或是信息：
">[详情]</a></p>
                    </div>
                </div>
                <div class="info_groud">
                    <a href="/hdxx/n2802111332568.html" class="fl" target="_blank" title="2017第6届广州国际海淘节"><img src="http://zhanhui.3158.cn//data/attachment/exhibition/exhbition/2017/03/24/073b2bfe80c03328a2c8142b9c3c6830.jpg" alt="2017第6届广州国际海淘节" width="180" height="135"></a>
                    <div class="divC fl">
                        <h3><a href="/hdxx/n2802111332568.html" target="_blank" title="2017第6届广州国际海淘节">2017第6届广州国际海淘节</a></h3>
                        <h4><span class="col_f9">2017-09-08 至 2017-09-10</span>活动类型：<a href="/hdxx/all/huodong/guonei/">活动</a>  活动地点：广州</h4>
                        <p> 中国最专业/最权威/最具影响力的国际海淘节盛会展会时间：2017年9月08-10日 (每年一届)展会展馆：中国进出口商品交易会展览馆A区 (8号馆)主办单位：意大利米兰展览公司、 广州威展国际商贸有限公司联合主...<a href="/hdxx/n2802111332568.html" target="_blank" title="">[详情]</a></p>
                    </div>
                </div>
                <div class="info_groud">
                    <a href="/hdxx/n2856707091676.html" class="fl" target="_blank" title="2017合川钓鱼城旅游休闲文化节开幕倒计时"><img src="http://zhanhui.3158.cn//data/attachment/exhibition/activity/2017/09/05/bbd6e4757d869b85d66ea5fa846f119c.jpg" alt="2017合川钓鱼城旅游休闲文化节开幕倒计时" width="180" height="135"></a>
                    <div class="divC fl">
                        <h3><a href="/hdxx/n2856707091676.html" target="_blank" title="2017合川钓鱼城旅游休闲文化节开幕倒计时">2017合川钓鱼城旅游休闲文化节开幕倒计时</a></h3>
                        <h4><span class="col_f9">2017-09-08 至 2017-09-12</span>活动类型：<a href="/hdxx/all/wenhuajie/guonei/">文化节</a>  活动地点：重庆</h4>
                        <p> 2017合川钓鱼城旅游休闲文化节相信大家还是比较关注的吧，3158展会网小编告诉大家2017合川钓鱼城旅游休闲文化节已经进入开幕倒计时了。...<a href="/hdxx/n2856707091676.html" target="_blank" title="2017合川钓鱼城旅游休闲文化节相信大家还是比较关注的吧，3158展会网小编告诉大家2017合川钓鱼城旅游休闲文化节已经进入开幕倒计时了。">[详情]</a></p>
                    </div>
                </div>

            </div>

            <div class="page">
                {!! preg_replace('/<a href=[\'\"]?([^\'\" ]+).*?>/','<a href="${1}/">',$pagelists->links()) !!}
            </div>
        </div>

        <div class="w260">

            <div class="new_bt">
                <h3> <i></i> 磨具厂排行榜 </h3>
                <div class="rank_bd">
                    <ul>
                        @foreach($phBrands as $index=>$topbrand)
                            @if($index==0)
                                <li class="top"> <a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml" target="_blank" title="{{$topbrand->article->companyname}}"><i class="num">{{$index+1}} </i> <img src="{{$topbrand->litpic}}" alt="{{$topbrand->article->companyname}}" ></a>
                                    <div class="cont">
                                        <p><a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml" target="_blank">{{$topbrand->article->companyname}}</a></p>
                                        <p><span>投资金额：</span><i>{{$topbrand->article->brandpay}}</i></p>
                                        <p class="btn"><a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml">查看详情</a></p>
                                    </div>
                                </li>
                            @else

                                <li class="top"> <i class="num">{{$index+1}}</i> <span class="name"><a href="/{{$topbrand->arctype->real_path}}/{{$topbrand->id}}.shtml" target="_blank" title="{{$topbrand->article->companyname}}">{{$topbrand->article->companyname}}</a></span> <span class="price">{{$topbrand->article->brandpay}}</span> </li>
                            @endif

                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="bn260"><a href="/lingshidianpp/91.shtml" target="_blank"><img src="/reception/images/temp/bn6.jpg" width="260" height="295" alt=""></a></div>

            <div class="side_news">
                <div class="common_bt">
                    <div class="tit">推荐文章</div>
                </div>
                <div class="common_list">
                    <ul>
                        @foreach($newsbrands as $newsbrand)
                            <li><a href="/{{$newsbrand->arctype->real_path}}/{{$newsbrand->id}}.shtml" target="_blank" title="{{$newsbrand->title}}">{{$newsbrand->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop