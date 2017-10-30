@extends('admin.layouts.admin_app')
@section('title')  模具类型列表@stop
@section('head')
<style>td.newcolor span a{color: #ffffff; font-weight: 400; display: inline-block; padding: 2px;} td.newcolor span{margin-left: 5px;}</style>
@stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">模具类型列表</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-striped text-center">
                        <tr>
                            <th style="width: 10px">#ID</th>
                            <th>模具类型</th>
                            <th>添加时间</th>
                            <th>操作</th>
                        </tr>
                        @foreach($moldlists as $moldlist)
                        <tr>
                            <td>{{$moldlist->id}}.</td>
                            <td>{{$moldlist->moldtype}}</td>
                            <td>{{$moldlist->created_at}}</td>
                          <td class="newcolor"> <span class="badge bg-red"><a href="/admin/moldtypedel/{{$moldlist->id}}">删除</a> </span></td>
                        </tr>
                       @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    {{--!! $adminlists->links() !!--}}
                </div>
            </div>
            <!-- /.box -->
        </div>

    </div>
    <!-- /.row -->
    <!-- /.content -->
@stop

@section('libs')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
        });
        function AjDelete (id,node) {
            var id = id;
            var node=node;
            $.ajax({
                //提交数据的类型 POST GET
                type:"POST",
                //提交的网址
                url:"/admin/article/delete/"+id,
                //提交的数据
                data:{"id":id,'node':node},
                //返回数据的格式
                datatype: "html",    //"xml", "html", "script", "json", "jsonp", "text".
                success:function (response, stutas, xhr) {
                    $(".modal-s-m"+id+" .modal-body").html(response);
                    $("#btn-"+id).attr("disabled","disabled");

                }
            });
        }
    </script>
@stop