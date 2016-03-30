<!DOCTYPE html>
<html lang="en">
<head>
	<title>朗天通讯合同管理平台</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
	<link rel="stylesheet" href="css/fullcalendar.css" />
	<link rel="stylesheet" href="css/matrix-style.css" />
	<link rel="stylesheet" href="css/matrix-media.css" />
	<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link rel="stylesheet" href="css/jquery.gritter.css" />
	<link href='http://fonts.useso.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
	<!--Header-part-->
	<div id="header">
	  <h1><a href="dashboard.html">公告信息</a></h1>
	</div>
	<!--close-Header-part--> 


	<!--top-Header-menu-->
	<div id="user-nav" class="navbar navbar-inverse">
	  <ul class="nav">
	    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
	      <ul class="dropdown-menu">
	        <li><a href="#"><i class="icon-user"></i>设置</a></li>
	        <li class="divider"></li>
	        <li><a href="#"><i class="icon-check"></i>任务</a></li>
	        <li class="divider"></li>
	        <li><a href="login.html"><i class="icon-key"></i>退出</a></li>
	      </ul>
	    </li>
	    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">消息</span> <span class="label label-important">5</span> <b class="caret"></b></a>
	      <ul class="dropdown-menu">
	        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i>新消息</a></li>
	        <li class="divider"></li>
	        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i>收件箱</a></li>
	        <li class="divider"></li>
	        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i>发件箱</a></li>
	        <li class="divider"></li>
	        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i>回收站</a></li>
	      </ul>
	    </li>
	    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">设置</span></a></li>
	    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">退出</span></a></li>
	  </ul>
	</div>
	<!--close-top-Header-menu-->


	<!--start-top-serch-->
	<div id="search">
	  <input type="text" placeholder="搜索..."/>
	  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
	</div>
	<!--close-top-serch-->	

	<!--sidebar-menu-->
	<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i>公告栏</a>
	  <ul>
	    <li class="active"><a href="{{ url('/') }}"><i class="icon icon-home"></i> <span>公告栏</span></a> </li>

	    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>合同管理</span> <span class="label label-important">3</span></a>
	      <ul>
	        <li><a href="{{ url('/contractquery') }}">查询合同</a></li>
	        <li><a href="{{ url('/contractcreate') }}">新增合同</a></li>
	        <li><a href="{{ url('/contractedit') }}">修改合同</a></li>
	      </ul>
	    </li>

	    <li class="submenu"> <a href="#"><i class="icon icon-signal"></i> <span>提成管理</span> <span class="label label-important">3</span></a>
	      <ul>
	        <li><a href="form-common.html">查询提成</a></li>
	        <li><a href="form-validation.html">提成申请</a></li>
	        <li><a href="form-validation.html">修改申请</a></li>
	      </ul>
	    </li>

	    <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>客户单位管理</span> <span class="label label-important">5</span></a>
	      <ul>
	        <li><a href="index2.html">查询客户</a></li>
	        <li><a href="gallery.html">新增客户</a></li>
	        <li><a href="calendar.html">修改信息</a></li>
	      </ul>
	    </li>

	    <li class="submenu"> <a href="#"><i class="icon icon-tint"></i> <span>客户联系人管理</span> <span class="label label-important">5</span></a>
	      <ul>
	        <li><a href="index2.html">查询联系人</a></li>
	        <li><a href="gallery.html">新增联系人</a></li>
	        <li><a href="calendar.html">修改联系人</a></li>
	      </ul>
	    </li>

	    <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>用户管理</span> <span class="label label-important">4</span></a>
	      <ul>
	        <li><a href="error403.html">查询用户</a></li>
	        <li><a href="error404.html">新增用户</a></li>
	        <li><a href="error405.html">修改用户</a></li>
	      </ul>
	    </li>

	    <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>角色管理</span> <span class="label label-important">4</span></a>
	      <ul>
	        <li><a href="error403.html">查询角色</a></li>
	        <li><a href="error404.html">新增角色</a></li>
	        <li><a href="error405.html">修改角色</a></li>
	        <li><a href="error405.html">用户<->角色</a></li>
	      </ul>
	    </li>

	    <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>组管理</span> <span class="label label-important">4</span></a>
	      <ul>
	        <li><a href="error403.html">查询组</a></li>
	        <li><a href="error404.html">新增组</a></li>
	        <li><a href="error405.html">修改组</a></li>
	        <li><a href="error405.html">用户<->组</a></li>
	      </ul>
	    </li>

	  </ul>
	</div>
	<!--sidebar-menu-->


	<!--main-container-part-->
	<div id="content">

		@yield('content')
	</div>
	<!--end-main-container-part-->

	<!--Footer-part-->

	<div class="row-fluid">
		<div id="footer" class="span12"> 2016 &copy; Reserved by  <a href="http://www.lontontel.com/" title="朗天通讯" target="_blank">朗天通讯</a></div>
	</div>

	<!--end-Footer-part-->

	<script src="js/excanvas.min.js"></script> 
	<script src="js/jquery.min.js"></script> 
	<script src="js/jquery.ui.custom.js"></script> 
	<script src="js/bootstrap.min.js"></script> 
	<script src="js/jquery.flot.min.js"></script> 
	<script src="js/jquery.flot.resize.min.js"></script> 
	<script src="js/jquery.peity.min.js"></script> 
	<script src="js/fullcalendar.min.js"></script> 
	<script src="js/matrix.js"></script> 
	<script src="js/matrix.dashboard.js"></script> 
	<script src="js/jquery.gritter.min.js"></script> 
	<script src="js/matrix.interface.js"></script> 
	<script src="js/matrix.chat.js"></script> 
	<script src="js/jquery.validate.js"></script> 
	<script src="js/matrix.form_validation.js"></script> 
	<script src="js/jquery.wizard.js"></script> 
	<script src="js/jquery.uniform.js"></script> 
	<script src="js/select2.min.js"></script> 
	<script src="js/matrix.popover.js"></script> 
	<script src="js/jquery.dataTables.min.js"></script> 
	<script src="js/matrix.tables.js"></script> 

	<script type="text/javascript">
	  // This function is called from the pop-up menus to transfer to
	  // a different page. Ignore if the value returned is a null string:
	  function goPage (newURL) {

	      // if url is empty, skip the menu dividers and reset the menu selection to default
	      if (newURL != "") {
	      
	          // if url is "-", it is this page -- reset the menu:
	          if (newURL == "-" ) {
	              resetMenu();            
	          } 
	          // else, send page to designated URL            
	          else {  
	            document.location.href = newURL;
	          }
	      }
	  }

	// resets the menu selection upon entry to this page:
	function resetMenu() {
	   document.gomenu.selector.selectedIndex = 2;
	}
	</script>
</body>
</html>