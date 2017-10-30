@extends('admin.layouts.admin_app')
@section('title') 模具类型添加@stop
@section('head')
<style>td.newcolor span a{color: #ffffff; font-weight: 400; display: inline-block; padding: 2px;} td.newcolor span{margin-left: 5px;}</style>
@stop
@section('content')
    <div class="register-box">
        <div class="register-box-body">
            <p class="login-box-msg">模具类型添加</p>
                {!! Form::open(array('action' => 'Admin\MoldTypeController@PostMoldtypeAdd')) !!}
                <div class="form-group has-feedback">
                    {{Form::text('moldtype', null,array('class'=>'form-control','id'=>'name','placeholder'=>'模具类型添加'))}}
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>

                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">添加</button>
                    </div>
                    <!-- /.col -->
                </div>
            {!! Form::close() !!}
            @if(count($errors) > 0)
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->
    <!-- /.row -->
    <!-- /.content -->
    @stop


