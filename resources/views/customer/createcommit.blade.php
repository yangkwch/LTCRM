@extends('main')

@section('content')
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{ url('/') }}" title="返回首页" class="tip-bottom"><i class="icon-home"></i>首页</a><a href="#">合同管理</a><a href="#" class="current">新增合同</a></div>
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
                    <h5>新增合同</h5>
                  </div>
                  <div class="widget-content nopadding">
                    <form class="form-horizontal" method="post" action="#" name="basic_validate" id="basic_validate" novalidate="novalidate">
                      <div class="control-group">
                        <label class="control-label">Your Name</label>
                        <div class="controls">
                          <input type="text" name="required" id="required">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Your Email</label>
                        <div class="controls">
                          <input type="text" name="email" id="email">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Date (only Number)</label>
                        <div class="controls">
                          <input type="text" name="date" id="date">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">URL (Start with http://)</label>
                        <div class="controls">
                          <input type="text" name="url" id="url">
                        </div>
                      </div>
                      <div class="form-actions">
                        <input type="submit" value="Validate" class="btn btn-success">
                      </div>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>  
@endsection