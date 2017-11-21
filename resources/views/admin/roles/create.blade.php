@extends('admin.layouts.layout')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="ibox-title">
            <h5>添加角色</h5>
        </div>
        <div class="ibox-content">
            <a class="menuid btn btn-primary btn-sm" href="javascript:history.go(-1)">返回</a>
            <a href="{{route('roles.index')}}"><button class="btn btn-primary btn-sm" type="button"><i class="fa fa-plus-circle"></i> 角色管理</button></a>
            <div class="hr-line-dashed m-t-sm m-b-sm"></div>
            <form class="form-horizontal m-t-md" action="{{route('roles.store')}}" method="post">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label class="col-sm-2 control-label">角色名称：</label>
                    <div class="input-group col-sm-2">
                        <input type="text" class="form-control" name="name" required data-msg-required="请输入角色名称">
                    </div>
                </div>
                <div class="hr-line-dashed m-t-sm m-b-sm"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">角色描述：</label>
                    <div class="input-group col-sm-3">
                        <textarea name="remark" class="form-control" rows="5" cols="20" required data-msg-required="请输入角色描述"></textarea>
                    </div>
                </div>
                <div class="hr-line-dashed m-t-sm m-b-sm"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">排序：</label>
                    <div class="input-group col-sm-1">
                        <input type="text" class="form-control" name="order" value="255" required data-msg-required="请输入排序">
                    </div>
                </div>
                <div class="hr-line-dashed m-t-sm m-b-sm"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">状态：</label>
                    <div class="input-group col-sm-1">
                        <select class="form-control" name="status">
                            <option value="1">启用</option>
                            <option value="2">禁用</option>
                        </select>
                    </div>
                </div>
                <div class="hr-line-dashed m-t-sm m-b-sm"></div>
                <div class="form-group">
                    <div class="col-sm-12 col-sm-offset-2">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i>&nbsp;保 存</button>
                        <button class="btn btn-white" type="reset"><i class="fa fa-repeat"></i> 重 置</button>
                    </div>
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
@endsection