<li>
    <i class="fa fa-file-text bg-maroon"></i>

    <div class="timeline-item">
        <span class="time"><i class="fa fa-clock-o"></i> {{date('H:m:s')}}</span>

        <h3 class="timeline-header"><a href="#">公司介绍</a> 内容编辑</h3>
        <div class="form-group col-md-10" style="margin: 5px;">
            {{Form::label('companyinfotitle', '品牌介绍标题', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12','style'=>'padding-top:5px;'))}}
            <div class="col-md-8 col-sm-9 col-xs-12">
                {{Form::text('companyinfotitle', null, array('class' => 'form-control col-md-10','id'=>'companyinfotitle','placeholder'=>'公司介绍'))}}
            </div>
        </div>
        <div class="timeline-body">
            <div class="wrapper-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">

                            <div class="ibox-content no-padding">
                                @include('admin.layouts.ueditor')
                                <script id="container" name="body" type="text/plain" style="height:500px" >
                                    @if(isset($articleinfos->body))
                                        {!! $articleinfos->body !!}
                                    @endif
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
</li>
<li>
    <i class="fa fa-tags bg-maroon"></i>

    <div class="timeline-item">
        <span class="time"><i class="fa fa-clock-o"></i> {{date('H:m:s')}}</span>

        <h3 class="timeline-header"><a href="#">公司优势</a> 内容编辑</h3>
        <div class="form-group col-md-10" style="margin: 5px;">
            {{Form::label('companyavtitle', '公司优势标题', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12','style'=>'padding-top:5px;'))}}
            <div class="col-md-8 col-sm-9 col-xs-12">
                {{Form::text('companyavtitle', null, array('class' => 'form-control col-md-10','id'=>'companyavtitle','placeholder'=>'公司优势标题'))}}
            </div>
        </div>
        <div class="timeline-body">
            <div class="wrapper-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">

                            <div class="ibox-content no-padding">
                                <!-- 实例化编辑器 -->
                                <script type="text/javascript">
                                    var ue2 = UE.getEditor('container2',{
                                        toolbars: [
                                            ['bold', 'italic', 'underline', 'strikethrough', 'blockquote','forecolor','backcolor',
                                                'insertunorderedlist', 'insertorderedlist', 'justifyleft','justifycenter', 'justifyright',  'link', 'unlink', 'insertimage',
                                                'imageleft',
                                                'imageright',
                                                'imagecenter',
                                                'superscript',
                                                'subscript',
                                                'autotypeset',
                                                'lineheight',
                                                'pasteplain',
                                                'selectall',
                                                'removeformat',
                                                'formatmatch',
                                                'cleardoc',
                                                'rowspacingtop',
                                                'rowspacingbottom',
                                                'customstyle',
                                                'paragraph',
                                                'fontfamily',
                                                'fontsize',
                                                'directionalityltr',
                                                'directionalityrtl',
                                                'indent',
                                                'touppercase', //字母大写
                                                'tolowercase', //字母小写
                                                'anchor', //锚点
                                                'insertvideo','music',
                                                'insertcode', //代码语言
                                                'template', //模板
                                                'horizontal', //分隔线
                                                'time', //时间
                                                'date', //日期
                                                'spechars', //特殊字符
                                                'inserttable',
                                                'deletetable', //删除表格
                                                'insertparagraphbeforetable', //"表格前插入行"
                                                'insertrow', //前插入行
                                                'deleterow', //删除行
                                                'insertcol', //前插入列
                                                'deletecol', //删除列
                                                'mergecells', //合并多个单元格
                                                'mergeright', //右合并单元格
                                                'mergedown', //下合并单元格
                                                'splittocells', //完全拆分单元格
                                                'splittorows', //拆分成行
                                                'splittocols', //拆分成列
                                                'charts', // 图表
                                                'source', //源代码
                                                'emotion', 'fullscreen']
                                        ],
                                        elementPathEnabled: false,
                                       enableContextMenu: true,
                                        autoClearEmptyNode:true,
                                        wordCount:false,
                                        imagePopup:false,
                                        autotypeset:{ indent: true,imageBlockLine: 'center' }
                                    });
                                    ue2.ready(function() {
                                        ue2.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
                                    });
                                </script>
                                <script id="container2" name="companyadvantage" type="text/plain" style="height:300px" >
                                    @if(isset($articleinfos->companyadvantage))
                                        {!! $articleinfos->companyadvantage !!}
                                    @endif
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
<li>
    <i class="fa fa-tags bg-maroon"></i>

    <div class="timeline-item">
        <span class="time"><i class="fa fa-clock-o"></i> {{date('H:m:s')}}</span>

        <h3 class="timeline-header"><a href="#">经营范围</a> 内容编辑</h3>
        <div class="form-group col-md-10" style="margin: 5px;">
            {{Form::label('companyareatitle', '经营范围标题', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12','style'=>'padding-top:5px;'))}}
            <div class="col-md-8 col-sm-9 col-xs-12">
                {{Form::text('companyareatitle', null, array('class' => 'form-control col-md-10','id'=>'companyareatitle','placeholder'=>'经营范围标题'))}}
            </div>
        </div>
        <div class="timeline-body">
            <div class="wrapper-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">

                            <div class="ibox-content no-padding">

                                <script type="text/javascript">
                                    var ue3 = UE.getEditor('container3',{
                                        toolbars: [
                                            ['bold', 'italic', 'underline', 'strikethrough', 'blockquote','forecolor','backcolor',
                                                'insertunorderedlist', 'insertorderedlist', 'justifyleft','justifycenter', 'justifyright',  'link', 'unlink', 'insertimage',
                                                'imageleft',
                                                'imageright',
                                                'imagecenter',
                                                'superscript',
                                                'subscript',
                                                'autotypeset',
                                                'lineheight',
                                                'pasteplain',
                                                'selectall',
                                                'removeformat',
                                                'formatmatch',
                                                'cleardoc',
                                                'rowspacingtop',
                                                'rowspacingbottom',
                                                'customstyle',
                                                'paragraph',
                                                'fontfamily',
                                                'fontsize',
                                                'directionalityltr',
                                                'directionalityrtl',
                                                'indent',
                                                'touppercase', //字母大写
                                                'tolowercase', //字母小写
                                                'anchor', //锚点
                                                'insertvideo','music',
                                                'insertcode', //代码语言
                                                'template', //模板
                                                'horizontal', //分隔线
                                                'time', //时间
                                                'date', //日期
                                                'spechars', //特殊字符
                                                'inserttable',
                                                'deletetable', //删除表格
                                                'insertparagraphbeforetable', //"表格前插入行"
                                                'insertrow', //前插入行
                                                'deleterow', //删除行
                                                'insertcol', //前插入列
                                                'deletecol', //删除列
                                                'mergecells', //合并多个单元格
                                                'mergeright', //右合并单元格
                                                'mergedown', //下合并单元格
                                                'splittocells', //完全拆分单元格
                                                'splittorows', //拆分成行
                                                'splittocols', //拆分成列
                                                'charts', // 图表
                                                'source', //源代码
                                                'emotion', 'fullscreen']
                                        ],
                                        elementPathEnabled: false,
                                       enableContextMenu: true,
                                        autoClearEmptyNode:true,
                                        wordCount:false,
                                        imagePopup:false,
                                        autotypeset:{ indent: true,imageBlockLine: 'center' }
                                    });
                                    ue3.ready(function() {
                                        ue3.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
                                    });
                                </script>
                                <script id="container3" name="companyareacontent" type="text/plain" style="height:300px" >
                                    @if(isset($articleinfos->companyareacontent))
                                        {!! $articleinfos->companyareacontent !!}
                                    @endif
                                </script>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
<li>
    <i class="fa fa-tags bg-maroon"></i>

    <div class="timeline-item">
        <span class="time"><i class="fa fa-clock-o"></i> {{date('H:m:s')}}</span>

        <h3 class="timeline-header"><a href="#">加工流程</a> 内容编辑</h3>
        <div class="form-group col-md-10" style="margin: 5px;">
            {{Form::label('processtitle', '加工流程标题', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12','style'=>'padding-top:5px;'))}}
            <div class="col-md-8 col-sm-9 col-xs-12">
                {{Form::text('processtitle', null, array('class' => 'form-control col-md-10','id'=>'processtitle','placeholder'=>'加工流程标题'))}}
            </div>
        </div>
        <div class="timeline-body">
            <div class="wrapper-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">

                            <div class="ibox-content no-padding">

                                <script type="text/javascript">
                                    var ue4 = UE.getEditor('container4',{
                                        toolbars: [
                                            ['bold', 'italic', 'underline', 'strikethrough', 'blockquote','forecolor','backcolor',
                                                'insertunorderedlist', 'insertorderedlist', 'justifyleft','justifycenter', 'justifyright',  'link', 'unlink', 'insertimage',
                                                'imageleft',
                                                'imageright',
                                                'imagecenter',
                                                'superscript',
                                                'subscript',
                                                'autotypeset',
                                                'lineheight',
                                                'pasteplain',
                                                'selectall',
                                                'removeformat',
                                                'formatmatch',
                                                'cleardoc',
                                                'rowspacingtop',
                                                'rowspacingbottom',
                                                'customstyle',
                                                'paragraph',
                                                'fontfamily',
                                                'fontsize',
                                                'directionalityltr',
                                                'directionalityrtl',
                                                'indent',
                                                'touppercase', //字母大写
                                                'tolowercase', //字母小写
                                                'anchor', //锚点
                                                'insertvideo','music',
                                                'insertcode', //代码语言
                                                'template', //模板
                                                'horizontal', //分隔线
                                                'time', //时间
                                                'date', //日期
                                                'spechars', //特殊字符
                                                'inserttable',
                                                'deletetable', //删除表格
                                                'insertparagraphbeforetable', //"表格前插入行"
                                                'insertrow', //前插入行
                                                'deleterow', //删除行
                                                'insertcol', //前插入列
                                                'deletecol', //删除列
                                                'mergecells', //合并多个单元格
                                                'mergeright', //右合并单元格
                                                'mergedown', //下合并单元格
                                                'splittocells', //完全拆分单元格
                                                'splittorows', //拆分成行
                                                'splittocols', //拆分成列
                                                'charts', // 图表
                                                'source', //源代码
                                                'emotion', 'fullscreen']
                                        ],
                                        elementPathEnabled: false,
                                       enableContextMenu: true,
                                        autoClearEmptyNode:true,
                                        wordCount:false,
                                        imagePopup:false,
                                        autotypeset:{ indent: true,imageBlockLine: 'center' }
                                    });
                                    ue4.ready(function() {
                                        ue4.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
                                    });
                                </script>
                                <script id="container4" name="processcontent" type="text/plain" style="height:300px" >
                                    @if(isset($articleinfos->processcontent))
                                        {!! $articleinfos->processcontent !!}
                                    @endif
                                </script>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
<li>
    <i class="fa fa-tags bg-maroon"></i>

    <div class="timeline-item">
        <span class="time"><i class="fa fa-clock-o"></i> {{date('H:m:s')}}</span>

        <h3 class="timeline-header"><a href="#">产品展示</a> 内容编辑</h3>
        <div class="form-group col-md-10" style="margin: 5px;">
            {{Form::label('productiontitle', '展品展示标题', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12','style'=>'padding-top:5px;'))}}
            <div class="col-md-8 col-sm-9 col-xs-12">
                {{Form::text('productiontitle', null, array('class' => 'form-control col-md-10','id'=>'productiontitle','placeholder'=>'产品展示标题'))}}
            </div>
        </div>
        <div class="timeline-body">
            <div class="wrapper-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">

                            <div class="ibox-content no-padding">

                                <script type="text/javascript">
                                    var ue5 = UE.getEditor('container5',{
                                        toolbars: [
                                            ['bold', 'italic', 'underline', 'strikethrough', 'blockquote','forecolor','backcolor',
                                                'insertunorderedlist', 'insertorderedlist', 'justifyleft','justifycenter', 'justifyright',  'link', 'unlink', 'insertimage',
                                                'imageleft',
                                                'imageright',
                                                'imagecenter',
                                                'superscript',
                                                'subscript',
                                                'autotypeset',
                                                'lineheight',
                                                'pasteplain',
                                                'selectall',
                                                'removeformat',
                                                'formatmatch',
                                                'cleardoc',
                                                'rowspacingtop',
                                                'rowspacingbottom',
                                                'customstyle',
                                                'paragraph',
                                                'fontfamily',
                                                'fontsize',
                                                'directionalityltr',
                                                'directionalityrtl',
                                                'indent',
                                                'touppercase', //字母大写
                                                'tolowercase', //字母小写
                                                'anchor', //锚点
                                                'insertvideo','music',
                                                'insertcode', //代码语言
                                                'template', //模板
                                                'horizontal', //分隔线
                                                'time', //时间
                                                'date', //日期
                                                'spechars', //特殊字符
                                                'inserttable',
                                                'deletetable', //删除表格
                                                'insertparagraphbeforetable', //"表格前插入行"
                                                'insertrow', //前插入行
                                                'deleterow', //删除行
                                                'insertcol', //前插入列
                                                'deletecol', //删除列
                                                'mergecells', //合并多个单元格
                                                'mergeright', //右合并单元格
                                                'mergedown', //下合并单元格
                                                'splittocells', //完全拆分单元格
                                                'splittorows', //拆分成行
                                                'splittocols', //拆分成列
                                                'charts', // 图表
                                                'source', //源代码
                                                'emotion', 'fullscreen']
                                        ],
                                        elementPathEnabled: false,
                                       enableContextMenu: true,
                                        autoClearEmptyNode:true,
                                        wordCount:false,
                                        imagePopup:false,
                                        autotypeset:{ indent: true,imageBlockLine: 'center' }
                                    });
                                    ue5.ready(function() {
                                        ue5.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
                                    });
                                </script>
                                <script id="container5" name="productioncontent" type="text/plain" style="height:300px" >
                                    @if(isset($articleinfos->productioncontent))
                                        {!! $articleinfos->productioncontent !!}
                                    @endif
                                </script>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
<li>
    <i class="fa fa-tags bg-maroon"></i>

    <div class="timeline-item">
        <span class="time"><i class="fa fa-clock-o"></i> {{date('H:m:s')}}</span>

        <h3 class="timeline-header"><a href="#">企业信用</a> 内容编辑</h3>
        <div class="form-group col-md-10" style="margin: 5px;">
            {{Form::label('credittitle', '企业信用标题', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12','style'=>'padding-top:5px;'))}}
            <div class="col-md-8 col-sm-9 col-xs-12">
                {{Form::text('credittitle', null, array('class' => 'form-control col-md-10','id'=>'credittitle','placeholder'=>'企业信用标题'))}}
            </div>
        </div>
        <div class="timeline-body">
            <div class="wrapper-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">

                            <div class="ibox-content no-padding">

                                <script type="text/javascript">
                                    var ue7 = UE.getEditor('container7',{
                                        toolbars: [
                                            ['bold', 'italic', 'underline', 'strikethrough', 'blockquote','forecolor','backcolor',
                                                'insertunorderedlist', 'insertorderedlist', 'justifyleft','justifycenter', 'justifyright',  'link', 'unlink', 'insertimage',
                                                'imageleft',
                                                'imageright',
                                                'imagecenter',
                                                'superscript',
                                                'subscript',
                                                'autotypeset',
                                                'lineheight',
                                                'pasteplain',
                                                'selectall',
                                                'removeformat',
                                                'formatmatch',
                                                'cleardoc',
                                                'rowspacingtop',
                                                'rowspacingbottom',
                                                'customstyle',
                                                'paragraph',
                                                'fontfamily',
                                                'fontsize',
                                                'directionalityltr',
                                                'directionalityrtl',
                                                'indent',
                                                'touppercase', //字母大写
                                                'tolowercase', //字母小写
                                                'anchor', //锚点
                                                'insertvideo','music',
                                                'insertcode', //代码语言
                                                'template', //模板
                                                'horizontal', //分隔线
                                                'time', //时间
                                                'date', //日期
                                                'spechars', //特殊字符
                                                'inserttable',
                                                'deletetable', //删除表格
                                                'insertparagraphbeforetable', //"表格前插入行"
                                                'insertrow', //前插入行
                                                'deleterow', //删除行
                                                'insertcol', //前插入列
                                                'deletecol', //删除列
                                                'mergecells', //合并多个单元格
                                                'mergeright', //右合并单元格
                                                'mergedown', //下合并单元格
                                                'splittocells', //完全拆分单元格
                                                'splittorows', //拆分成行
                                                'splittocols', //拆分成列
                                                'charts', // 图表
                                                'source', //源代码
                                                'emotion', 'fullscreen']
                                        ],
                                        elementPathEnabled: false,
                                        enableContextMenu: true,
                                        autoClearEmptyNode:true,
                                        wordCount:false,
                                        imagePopup:false,
                                        autotypeset:{ indent: true,imageBlockLine: 'center' }
                                    });
                                    ue7.ready(function() {
                                        ue7.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
                                    });
                                </script>
                                <script id="container7" name="creditcontent" type="text/plain" style="height:300px" >
                                    @if(isset($articleinfos->creditcontent))
                                        {!! $articleinfos->creditcontent !!}
                                    @endif
                                </script>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>

<li>
    <i class="fa fa-tags bg-maroon"></i>

    <div class="timeline-item">
        <span class="time"><i class="fa fa-clock-o"></i> {{date('H:m:s')}}</span>

        <h3 class="timeline-header"><a href="#">团队展示</a> 内容编辑</h3>
        <div class="form-group col-md-10" style="margin: 5px;">
            {{Form::label('teamtitle', '团队展示标题', array('class' => 'control-label col-md-2 col-sm-3 col-xs-12','style'=>'padding-top:5px;'))}}
            <div class="col-md-8 col-sm-9 col-xs-12">
                {{Form::text('teamtitle', null, array('class' => 'form-control col-md-10','id'=>'teamtitle','placeholder'=>'团队展示标题'))}}
            </div>
        </div>
        <div class="timeline-body">
            <div class="wrapper-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">

                            <div class="ibox-content no-padding">

                                <script type="text/javascript">
                                    var ue6 = UE.getEditor('container6',{
                                        toolbars: [
                                            ['bold', 'italic', 'underline', 'strikethrough', 'blockquote','forecolor','backcolor',
                                                'insertunorderedlist', 'insertorderedlist', 'justifyleft','justifycenter', 'justifyright',  'link', 'unlink', 'insertimage',
                                                'imageleft',
                                                'imageright',
                                                'imagecenter',
                                                'superscript',
                                                'subscript',
                                                'autotypeset',
                                                'lineheight',
                                                'pasteplain',
                                                'selectall',
                                                'removeformat',
                                                'formatmatch',
                                                'cleardoc',
                                                'rowspacingtop',
                                                'rowspacingbottom',
                                                'customstyle',
                                                'paragraph',
                                                'fontfamily',
                                                'fontsize',
                                                'directionalityltr',
                                                'directionalityrtl',
                                                'indent',
                                                'touppercase', //字母大写
                                                'tolowercase', //字母小写
                                                'anchor', //锚点
                                                'insertvideo','music',
                                                'insertcode', //代码语言
                                                'template', //模板
                                                'horizontal', //分隔线
                                                'time', //时间
                                                'date', //日期
                                                'spechars', //特殊字符
                                                'inserttable',
                                                'deletetable', //删除表格
                                                'insertparagraphbeforetable', //"表格前插入行"
                                                'insertrow', //前插入行
                                                'deleterow', //删除行
                                                'insertcol', //前插入列
                                                'deletecol', //删除列
                                                'mergecells', //合并多个单元格
                                                'mergeright', //右合并单元格
                                                'mergedown', //下合并单元格
                                                'splittocells', //完全拆分单元格
                                                'splittorows', //拆分成行
                                                'splittocols', //拆分成列
                                                'charts', // 图表
                                                'source', //源代码
                                                'emotion', 'fullscreen']
                                        ],
                                        elementPathEnabled: false,
                                       enableContextMenu: true,
                                        autoClearEmptyNode:true,
                                        wordCount:false,
                                        imagePopup:false,
                                        autotypeset:{ indent: true,imageBlockLine: 'center' }
                                    });
                                    ue6.ready(function() {
                                        ue6.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
                                    });
                                </script>
                                <script id="container6" name="teamcontent" type="text/plain" style="height:300px" >
                                    @if(isset($articleinfos->teamcontent))
                                        {!! $articleinfos->teamcontent !!}
                                    @endif
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="timeline-footer">
            <button type="submit"  class="btn btn-md bg-maroon">提交文档</button>
        </div>
    </div>
</li>