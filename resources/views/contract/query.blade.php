@extends('main')

@section('content')

    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{ url('/') }}" title="返回首页" class="tip-bottom"><i class="icon-home"></i>首页</a><a href="#">合同管理</a><a href="#" class="current">查询合同</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">
        <!-- Create Task Form... -->
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                    <h5>用户列表</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>合同编号</th>
                                    <th>合同名称</th>
                                    <th>合同金额</th>
                                    <th>框架合同</th>
                                    <th>借货合同</th>
                                </tr>
                            </thead>
                            <tbody>    
                                @if (count($contracts) > 0)
                                @foreach ($contracts as $contract)
                                    <tr class="gradeX">
                                        <td>{{ $contract->contractnumber }}</td>
                                        <td>{{ $contract->contractname }}</td>
                                        <td>{{ $contract->contractvalue }}</td>
                                        @if ($contract->isframecontract == 0)
                                            <td>否</td>
                                        @else
                                            <td>是</td>
                                        @endif

                                        @if ($contract->isborrowingcontract == 0)
                                            <td>否</td>
                                        @else
                                            <td>是</td>
                                        @endif
                                    </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>  
    </div>
    <!--End-Action boxes-->        
@endsection