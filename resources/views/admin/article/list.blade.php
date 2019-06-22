@extends('admin.mhlay');
@section("siteTitle",'文章列表')
@section('main-content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">文章列表</h4>
                <p class="card-description">
                </p>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>
                            #
                        </th>
                        <th>
                            标题
                        </th>
                        <th>
                            作者
                        </th>
                        <th>
                            内容
                        </th>
                        <th>
                            日期
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            Herman Beck
                        </td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        <td>
                            $ 77.99
                        </td>
                        <td>
                            May 15, 2015
                        </td>
                        <td>
                            <button type="button" class="btn btn-inverse-info btn-sm">添加</button>
                            <button type="button" class="btn btn-inverse-dark btn-sm">修改</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2
                        </td>
                        <td>
                            Messsy Adam
                        </td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        <td>
                            $245.30
                        </td>
                        <td>
                            July 1, 2015
                        </td>
                        <td>
                            <button type="button" class="btn btn-inverse-info btn-sm">添加</button>
                            <button type="button" class="btn btn-inverse-dark btn-sm">修改</button>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection