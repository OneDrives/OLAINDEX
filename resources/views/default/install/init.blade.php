@extends('default.layouts.common')
@section('title','初始化安装')
@section('content')
    <div class="card border-light mb-3">
        <div class="card-header">已修改为适配世纪互联无API权限版本</div>
    </div>
    <div class="card border-light mb-3">
        <div class="card-header">初始化配置</div>
        <div class="card-body">
            <form action="" method="post">
                @csrf
                <div class="form-group">
                    <label class="form-control-label" for="account_type">账户类型</label>
                    <select class="custom-select" name="account_type" id="account_type" disabled>
                        <option value="cn" selected>世纪互联</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="redirect_uri">Access Token</label>
                    <input type="text" class="form-control" id="redirect_uri" name="access_token" required>
                    <span class="form-text text-danger">填写从授权者处得到的Access Token</span>
                </div>
                <button type="submit" class="btn btn-primary">保存</button>
            </form>
        </div>
    </div>
@stop


