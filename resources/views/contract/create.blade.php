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
                                <label class="control-label">合同编号</label>
                                <div class="controls">
                                    <input type="text" name="contractnumber" id="required">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">合同名称</label>
                                <div class="controls">
                                    <input type="text" name="contractname" id="required">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">客户单位</label>
                                <div class="controls">
                                    <select >
                                        <option>First option</option>
                                        <option>Second option</option>
                                        <option>Third option</option>
                                        <option>Fourth option</option>
                                        <option>Fifth option</option>
                                        <option>Sixth option</option>
                                        <option>Seventh option</option>
                                        <option>Eighth option</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">联系人</label>
                                <div class="controls">
                                    <input type="text" name="contactname">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">合同金额</label>
                                <div class="controls">
                                    <input type="text" name="contracevalue">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">合同属性</label>
                                <div class="controls">
                                    <label>
                                        <input type="checkbox" name="framecontract" />框架合同
                                    </label>
                                    <label>
                                        <input type="checkbox" name="borrowingcontract" />借货合同
                                    </label>
                                </div>
                            </div>

                            <div class="form-actions">
                                <input type="submit" value="提交" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  
@endsection