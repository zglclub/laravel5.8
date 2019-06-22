@extends('admin.mhlay')
@section("siteTitle",'网站配置')
@section('main-content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    网站配置
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Site</a></li>
                        <li class="breadcrumb-item active" aria-current="page">config</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    @if(isset($succ) ? true: false)
                        <div type="button" class="btn btn-inverse-success btn-fw">添加成功</div>
                    @endif
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="forms-sample" method="post" action="{{route('admin.config.store')}}">
                            @csrf
                            <input type="hidden" name="name" value="网站配置">
                            <input type="hidden" name="title" value="siteconfig">
                            <div class="form-group">
                                <label for="SiteTitle">网站名称</label>
                                <input type="text" name="SiteTitle" value="{{isset($data->SiteTitle) ?  $data->SiteTitle:  ''}}" class="form-control" id="SiteTitle" placeholder="请输入网站名称">
                            </div>
                            <div class="form-group">
                                <label for="Domain">网站域名</label>
                                <input type="text" name="Domain" value="{{isset($data->Domain) ?  $data->Domain:  ''}}" class="form-control" id="Domain" placeholder="请输入网站域名">
                            </div>
                            <div class="form-group">
                                <label for="keywords">网站关键字</label>
                                <input type="text" name="keywords" value="{{isset($data->keywords) ?  $data->keywords:  ''}}" class="form-control" id="keywords" placeholder="keywords">
                            </div>
                            <div class="form-group">
                                <label for="sitedesc">网站描述</label>
                                <textarea name="sitedesc" class="form-control" id="sitedesc" placeholder="网站描述">{{isset($data->sitedesc) ?  $data->sitedesc:  ''}}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="status">网站状态</label>
                                <div class="row">
                                    <div class="col-sm-4 col-md-2 col-lg-1">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                @if(isset($data->status) ?  $data->status: '1')
                                                    @if($data->status == 1)
                                                        <input type="radio" class="form-check-input" name="status" id="membershipRadios1" value="1" checked>
                                                     @else
                                                        <input type="radio" class="form-check-input" name="status" id="membershipRadios1" value="1">
                                                     @endif
                                                @else
                                                    <input type="radio" class="form-check-input" name="status" id="membershipRadios1" value="1" checked="" >
                                                @endif
                                                运行

                                                <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-2 col-lg-1">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                @if(isset($data->status) ?  $data->status: '1')
                                                    <input type="radio" class="form-check-input" name="status" id="membershipRadios2" value="0" >
                                                @else
                                                    @if($data->status == 1)
                                                        <input type="radio" class="form-check-input" name="status" id="membershipRadios2" value="0" >
                                                    @else
                                                        <input type="radio" class="form-check-input" name="status" id="membershipRadios2" value="0" checked>
                                                    @endif
                                                @endif
                                                停止
                                                <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="desc">关站提示</label>
                                <textarea name="desc" class="form-control" id="desc" placeholder="关站提示">{{isset($data->desc) ?  $data->desc:  ''}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-gradient-primary mr-2">提交</button>

                        </form>
                    </div>
                </div>
            </div>
            </div>
      </div>
 </div>
@endsection