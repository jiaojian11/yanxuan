<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | ChartJS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="/adminCSS/bootstrap/css/bootstrap.min.css">
   <!-- Font Awesome -->
  <link rel="stylesheet" href="/adminCSS/dist/dfonts/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/adminCSS/dist/dfonts/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminCSS/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/adminCSS/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="/adminCSS/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="/adminCSS/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="/adminCSS/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">{{session('data')->ad_account}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="/adminCSS/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  {{session('data')->ad_account}} - Web Developer 
                  <small>上次登录:{{date('Y-m-d H:i:s',session('data')->ad_lastLogin)}}</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/adminCSS/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{session('data')->ad_account}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
     <ul class="sidebar-menu">
        <li class="header">管理员管理员</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>管理员管理</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/admin/administrator/index')}}"><i class="fa fa-circle-o"></i> 管理员列表</a></li>
            <li><a href="{{url('/admin/administrator/add')}}"><i class="fa fa-circle-o"></i> 管理员添加</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>会员管理</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/admin/user/index')}}"><i class="fa fa-circle-o"></i> 用户列表</a></li>
            <li><a href="{{url('/admin/user/integral')}}"><i class="fa fa-circle-o"></i> 积分管理</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>订单管理</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/dingdan/all"><i class="fa fa-circle-o"></i> 所有订单</a></li>
            <li><a href="/admin/dingdan/daifukuan"><i class="fa fa-circle-o"></i> 待付款</a></li>
            <li><a href="/admin/dingdan/fahuo"><i class="fa fa-circle-o"></i> 待发货</a></li>
            <li><a href="/admin/dingdan/yifahuo"><i class="fa fa-circle-o"></i> 已发货</a></li>
          </ul>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>产品管理</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li ><a href="/admin/product/addclass"><i class="fa fa-circle-o"></i> 分类管理</a></li>
            <li class="active"><a href="/admin/product/seegoods"><i class="fa fa-circle-o"></i> 商品管理</a></li>
            <li ><a href="/admin/product/addmaker"><i class="fa fa-circle-o"></i> 制造商管理</a></li>
            <li ><a href="/admin/product/addgoods"><i class="fa fa-circle-o"></i> 商品添加管理</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>退货管理</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/return"><i class="fa fa-circle-o"></i> 退货申请</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> 退货管理</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>评论管理</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/comment"><i class="fa fa-circle-o"></i>评论</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>优惠劵管理</span>
            <i class="fa fa-angle-left pull-right"></i>
            <ul class="treeview-menu">
              <li><a href="/admin/youhui/index"><i class="fa fa-circle-o"></i>优惠券</a></li>
            </ul>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>促销管理</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('admin/promotion/rules')}}"><i class="fa fa-circle-o"></i> 营销规则</a></li>
            <li><a href="{{url('admin/promotion/alllist')}}"><i class="fa fa-circle-o"></i> 所有活动</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>轮播管理</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('admin/banner/index')}}"><i class="fa fa-circle-o"></i> 轮播管理</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>友情链接管理</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/flink/index"><i class="fa fa-circle-o"></i>友情链接管理</a></li>
            <li><a href="/admin/flink/add"><i class="fa fa-circle-o"></i> 友情链接添加</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        商品管理
        <small>菜单栏</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">产品管理</a></li>
        <li class="active">商品管理</li>
      </ol>
    </section>

    <!-- Main content -->
<!--====================================================================================-->
    <!-- 显示修改成功与否 ajax修改信息 -->
    <div id="successMessage" class="alert alert-dismissable" style="display:none;margin-top: 10px;width: 200px;margin-left: 500px;background:rgb(60, 141, 188);">
    </div>

    <div class="col-xs-3" style="margin:30px;">
      <div class="box" style="float:left;height:700px;width:1050px;margin-left: -15px;border-top-color:#3c8dbc;position:absolute;">
        <div class="box-header">
          <center>
            <h3 class="box-title">商品管理</h3>
          </center>
        </div>
        <div class="box-body" style="width: 820px;margin-left: 30px;">
          <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row">
              <!-- 第一个下拉框 -->
              <div class="col-xs-3" style="width: 180px;margin-left: -30px;">
                <div class="form-group" style="width: 150px;">
                  <select class="form-control" id="oneclass" name="pid">
                    <option>请选择一级分类</option>
                    @foreach($title as $k=>$v)
                    <option value="{{$v->gc_id}}" id='gcid'>{{$v->gc_title}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <!-- 第二个下拉框 -->
              <div class="col-xs-3" style="width: 180px;margin-left: -10px;">
                <div class="form-group" style="width: 150px;">
                  <select class="form-control" id="twoclass" name="id">
                    <option >请选择二级分类</option>
                  </select>
                </div>
              </div>
              <!-- 二级联动js  ajax实现二级联动 -->
              <script src="/adminCSS/jquery.js"></script>
              <script type="text/javascript">
                $(function(){
                  $('#oneclass').change(function(){
                      var gcid=$(this).val();
                      var oid=$(this).attr('id');

                      // 发送ajax,返回一级对应的二级的内容
                      $.get('/admin/product/twooption',{gcid:gcid},function(data){
                          title=(eval("("+data+")"));//alert(title[0].gc_title);
                          $('#twoclass').empty();
                          var st='';

                          // 遍历
                          $.each(title,function(k,v){
                            str='<option class="ergoods" value="'+v.gc_id+'">'+v.gc_title+'</option>';
                            st+=str;
                          })
                          st1='<option >请选择二级分类</option>';
                          st1+=st;

                          // 将遍历好的二级内容放入第二个下拉框
                          $('#twoclass').append(st1);
                      })
                  });
                })
              </script>
              <script type="text/javascript">
              $('#twoclass').live('change',function(){
                gcid=$(this).val();
                location.href='/admin/product/ergoods?gcid='+gcid+'';
              });
              </script>
              <div id="dataTables-example_filter" class="dataTables_filter" style="margin-left:700px;width: 800px;">
              <form action="/admin/product/seegoods" method="get">
                <label>商品名称:<input type="search" name="keyword" class="form-control input-sm" placeholder="" aria-controls="dataTables-example" /></label>
                  <button class="btn btn-primary">搜索</button>
              </form>
              </div>
            </div> 
            <div class="row" style="margin-top: 10px;">
              <div class="col-sm-12" style="width:1050px;margin-left: -30px;">
                <table class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info" >
                  <thead>
                    <tr role="row">
                      <th style="width:150px;" class="sorting_desc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" aria-sort="descending">
                          <center>商品名称</center>
                      </th>
                      <th style="width:80px;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"> 
                          <center>商品价格(元/个)</center>
                      </th>
                      <th style="width:90px;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                          <center>商品库存数(个)</center>
                      </th>
                      <th style="width:150px;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                          <center>商品简介</center>
                      </th>
                      <th style="width:200px;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                          <center>商品属性</center>
                      </th>
                      <th style="width:45px;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                          <center> 操作</center>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($data as $k=>$v)
                      <tr role="row" class="odd">
                          <td>
                          <center>
                              <input type="text" value="{{$v->g_name}}" style="width: 160px;border:0px;">
                          </center>
                          </td>
                          <td>
                          <center>
                              <input type="text" value="{{$v->g_price}}" style="width: 60px;border:0px;">
                          </center>
                          </td>
                          <td>
                          <center>
                             <input type="text" value="{{$v->g_num}}" style="width: 50px;border:0px;">
                          </center>
                          </td>
                          <td>
                          <center>
                              <input type="text" value="{{$v->g_intro}}" style="width: 200px;border:0px;">
                          </center>
                          </td>
                          <td>
                          <center>

                              <!-- 遍历$data1 里面是一个个数组，一个数组里面是一个商品所有的详情信息-->
                              @foreach($data1 as $key=>$value)

                              <!-- 遍历一个商品的所有详细信息 -->
                              @foreach($value as $k1=>$v1)

                              <!-- 判断该商品属性是否属于该商品 -->
                              @if($v1->g_id==$v->g_id)

                              <!-- 判断该商品属性是一个还是两个 -->
                              @if($v1->gd_nature!='')
                              <input type="text" value="{{$v1->gd_nature}}/{{$v1->gd_num}}件" style="width: 200px;border:0px;">
                              @else
                              <input type="text" value="{{$v1->gd_color}}/{{$v1->gd_size}}/{{$v1->gd_num}}件" style="width: 200px;border:0px;">
                              @endif
                              @endif
                              @endforeach
                              @endforeach
                          </center>
                          </td>
                          <td>
                          <center>
                            @if($v->g_status==1)
                            <a href="/admin/product/?id=" class="updown" gid="{{$v->g_id}}">下架</a>
                            @else
                            <a href="/admin/product/?id=" class="updown" gid="{{$v->g_id}}">上架</a>
                            @endif
                          </center>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
                <div class="row" style="margin-left:50px;">
                    <div class="col-sm-12">
                        {!! $data->appends($all)->render() !!}
                    </div>
                </div>
                <script type="text/javascript">
                  $('.updown').click(function(){
                    link=$(this);
                    gid=$(this).attr('gid');
                    status=$(this).html();

                    // 判断当前状态，并将状态取反
                    if(status=='上架'){
                      $(this).html('下架');
                    }else{
                      $(this).html('上架');
                    }
                    
                    // 发送ajax，返回1显示下架成功，0显示商品上架成功
                    $.get('/admin/product/status',{gid:gid},function(data){
                       if(data==1){
                          $('#successMessage').text('商品下架成功').fadeIn(1000);
                          setTimeout(function(){
                            $('#successMessage').fadeOut(1000);
                          },2000);
                       }else{
                          $('#successMessage').text('商品上架成功').fadeIn(1000);
                          setTimeout(function(){
                            $('#successMessage').fadeOut(1000);
                          },2000);
                       }
                    })
                    return false;
                  })
                </script>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<!--=================================================================================== -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.2
    </div>
    <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="/adminCSS/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="/adminCSS/bootstrap/js/bootstrap.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="/adminCSS/plugins/chartjs/Chart.min.js"></script>
<!-- FastClick -->
<script src="/adminCSS/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/adminCSS/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/adminCSS/dist/js/demo.js"></script>
<!-- page script -->

</body>
</html>
