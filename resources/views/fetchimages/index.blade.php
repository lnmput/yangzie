@extends('layout.default')
@section('title', '图片抓取')
@section('content')
    <div class="row input-custom">
        <div class="col-md-12">
            <form method="post" action="{{ route('tool.fetch') }}">
                {{ csrf_field() }}
                <div class="col-md-6 col-md-offset-3 input">
                    <input type="text" name="fetchimageurl" class="form-control" placeholder="请输入图片地址">
                </div>
                <button type="submit" class="btn btn-default">获取</button>
                <div class="col-md-6 col-md-offset-3 text-danger">
                    警告: 部分图片带有版权, 下载仅供个人娱乐使用, 严禁用作商业用途, 后果自负
                </div>
            </form>
        </div>
    </div>
@endsection