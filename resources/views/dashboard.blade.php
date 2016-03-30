@extends('main')

@section('content')
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{ url('/') }}" title="返回首页" class="tip-bottom"><i class="icon-home"></i>首页</a><a href="#" class="current">公告栏</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">

        <!-- Create Task Form... -->
        <hr>
        <div class="row-fluid">
            <div class="span12">

                <div class="widget-box">
                  <div class="widget-title bg_ly" data-toggle="collapse" href="#collapseG2"><span class="icon"><i class="icon-chevron-down"></i></span>
                    <h5>Latest Posts</h5>
                  </div>
                  <div class="widget-content nopadding collapse in" id="collapseG2">
                    <ul class="recent-posts">
                      <li>
                        <div class="user-thumb"> <img width="40" height="40" alt="User" src="img/demo/av1.jpg"> </div>
                        <div class="article-post"> <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
                          <p><a href="#">This is a much longer one that will go on for a few lines.It has multiple paragraphs and is full of waffle to pad out the comment.</a> </p>
                        </div>
                      </li>
                      <li>
                        <div class="user-thumb"> <img width="40" height="40" alt="User" src="img/demo/av2.jpg"> </div>
                        <div class="article-post"> <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
                          <p><a href="#">This is a much longer one that will go on for a few lines.It has multiple paragraphs and is full of waffle to pad out the comment.</a> </p>
                        </div>
                      </li>
                      <li>
                        <div class="user-thumb"> <img width="40" height="40" alt="User" src="img/demo/av4.jpg"> </div>
                        <div class="article-post"> <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
                          <p><a href="#">This is a much longer one that will go on for a few lines.Itaffle to pad out the comment.</a> </p>
                        </div>
                      <li>
                        <button class="btn btn-warning btn-mini">View All</button>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="widget-box">
                  <div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
                    <h5>To Do list</h5>
                  </div>
                  <div class="widget-content">
                    <div class="todo">
                      <ul>
                        <li class="clearfix">
                          <div class="txt"> Luanch This theme on Themeforest <span class="by label">Alex</span></div>
                          <div class="pull-right"> <a class="tip" href="#" title="Edit Task"><i class="icon-pencil"></i></a> <a class="tip" href="#" title="Delete"><i class="icon-remove"></i></a> </div>
                        </li>
                        <li class="clearfix">
                          <div class="txt"> Manage Pending Orders <span class="date badge badge-warning">Today</span> </div>
                          <div class="pull-right"> <a class="tip" href="#" title="Edit Task"><i class="icon-pencil"></i></a> <a class="tip" href="#" title="Delete"><i class="icon-remove"></i></a> </div>
                        </li>
                        <li class="clearfix">
                          <div class="txt"> MAke your desk clean <span class="by label">Admin</span></div>
                          <div class="pull-right"> <a class="tip" href="#" title="Edit Task"><i class="icon-pencil"></i></a> <a class="tip" href="#" title="Delete"><i class="icon-remove"></i></a> </div>
                        </li>
                        <li class="clearfix">
                          <div class="txt"> Today we celebrate the theme <span class="date badge badge-info">08.03.2013</span> </div>
                          <div class="pull-right"> <a class="tip" href="#" title="Edit Task"><i class="icon-pencil"></i></a> <a class="tip" href="#" title="Delete"><i class="icon-remove"></i></a> </div>
                        </li>
                        <li class="clearfix">
                          <div class="txt"> Manage all the orders <span class="date badge badge-important">12.03.2013</span> </div>
                          <div class="pull-right"> <a class="tip" href="#" title="Edit Task"><i class="icon-pencil"></i></a> <a class="tip" href="#" title="Delete"><i class="icon-remove"></i></a> </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div> 
                           
            </div>
        </div>
    </div>    
@endsection