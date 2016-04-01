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
                  <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                    <h5>查询条件</h5>
                  </div>
                  <div class="widget-content nopadding">
                    <form action="{{ url('/customerquerycommit') }}" method="post" class="form-horizontal">
                       
                      <div class="control-group">
                        <label class="control-label">客户名称</label>
                        <div class="controls">
                          <input type="text" name="contractnumber" id="contractnumber">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">母公司</label>
                        <div class="controls">
                          <input type="text" name="contractname" id="contractname">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">注册地址</label>
                        <div class="controls">
                          <input type="text" name="contractname" id="contractname">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">描述</label>
                        <div class="controls">
                          <input type="text" name="contractname" id="contractname">
                        </div>
                      </div>                      
                      <div class="form-actions">
                        <input type="submit" value="搜索" class="btn btn-success">
                      </div>
                    </form>
                  </div>
                </div>

                <!-- 显示合同列表... -->
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                    <h5>用户列表</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>客户名称</th>
                                    <th>母公司</th>
                                    <th>注册地址</th>
                                    <th>描述</th>
                                </tr>
                            </thead>
                            <tbody>    
                                @if (count($customers) > 0)
                                @foreach ($customers as $customer)
                                    <tr class="gradeX">
                                        <td>{{ $customer->customername }}</td>
                                        <td>{{ $customer->parentcompanyid }}</td>
                                        <td>{{ $customer->regaddress }}</td>
                                        <td>{{ $customer->description }}</td>
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