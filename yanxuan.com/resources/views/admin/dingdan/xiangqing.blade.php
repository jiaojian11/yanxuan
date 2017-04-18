@section('css')
@show
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>网易严选后台</title>
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
  <!-- iCheck -->
  <link rel="stylesheet" href="/adminCSS/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="/adminCSS/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="/adminCSS/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="/adminCSS/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/adminCSS/plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="/adminCSS/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- ====================================================================== -->
  <link rel="stylesheet" href="/adminCSS/admincss/order-f962902728.css">
  <link rel="stylesheet" href="/adminCSS/admincss/style-929c64ebb2.css">
  <!-- ===================================================================== -->

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
    <a href="/admin/index" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>网易严选后台</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
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
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="/adminCSS/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="/adminCSS/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="/adminCSS/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="/adminCSS/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
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
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
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
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
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
              <!-- Menu Footer-->
              <li class="user-footer">

                <div class="pull-right">
                  <a href="{{url('/admin/logout')}}" class="btn btn-default btn-flat">Sign out</a>
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
        <li class="active treeview">
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
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>产品管理</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li ><a href="/admin/product/addclass"><i class="fa fa-circle-o"></i> 分类管理</a></li>
            <li ><a href="/admin/product/seegoods"><i class="fa fa-circle-o"></i> 商品管理</a></li>
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
            <li><a href="/admin/comment/comment"><i class="fa fa-circle-o"></i>评论</a></li>
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
  <div class="content-wrapper">
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        订单管理
        <small>详情</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <!-- /.content -->
    <!-- ========================================================================================= -->
    <div style="margin-bottom:60px;" class="g-main">
  <table data-orderid="10020414" class="m-orderdetail j-order">
  <tbody><tr>
  <th>
  <span class="w-dealtime"><span class="f-gray-999">下单时间：</span><span data-creattime="1488990741278" class="j-createTime">{{date('Y-m-d H:i:s',$res->o_time)}}</span></span>
  </th>
  <th>
  <span class="w-number"><span class="f-gray-999">订单号：</span>{{$res->o_id}}</span>
  </th>
  <th class="cancelEntry">
  <div class="w-operate">
  </div>
  </th>
  </tr>
  <tr>
  <td colspan="3">
  <div class="w-splitline"></div>
  </td>
  </tr>
  <tr>
  <td style="padding-right:0">
  <ul class="ul-list">
  <li>
  <div class="label">收<span class="labelGap7"></span>货<span class="labelGap7"></span>人：</div><span class="trade-info">{{$users->a_name}}</span>
  </li>
  <li>
  <div class="label">联系方式：</div><span class="trade-info">{{$users->a_phone}}</span>
  </li>
  <li>
  <div class="label">收货地址：</div><span class="trade-info">{{$users->a_address}}</span>
  </li>
  </ul>
  </td>
  <td>
  <ul class="ul-list priceList">
  <li>
  <div class="label">商品合计：</div><span class="price-info ">￥<span>{{$res->o_heji}}.00</span></span>
  </li>
  <li>
  @if(!$youhui)
  <div class="label">优<span class="labelGap7"></span>惠<span class="labelGap7"></span>券：</div><span class="price-info ">-￥<span>0.00</span></span>
  @else
  <div class="label">优<span class="labelGap7"></span>惠<span class="labelGap7"></span>券：</div><span class="price-info ">-￥<span>{{$youhui->c_money}}.00</span></span>
  @endif
  </li>
  <li>
  <div class="label">运<span class="labelGap28"></span>费：</div><span class="price-info ">￥<span>{{$res->o_freight}}.00</span></span>
  </li>
  </ul>
  </td>
  <td>
  <div class="w-operate">
  
  <div class="w-payMethod">
  <div class="label f-txtright">实<span class="labelGap28"></span>付：
  </div><span class="price-info totalprice f-txtleft">￥{{$res->o_zong}}.00</span>
  </div>
  </div>
  </td>
  </tr>
  </tbody></table>
  <table cellspacing="0" cellpadding="0" data-orderid="10020414" class="m-item m-item-detail j-order">
  <colgroup>
  <col style="width:206px;">
  <col style="width:90px;">
  <col style="width:90px;">
  <col style="width:90px;">
  
  <col style="width:130px;">
  
  </colgroup>
  <tbody>
  <tr class="m-item-detailtt">
  <th>
  <span class="f-paddingleft20">商品信息</span>
  </th>
  <th class="f-txtcenter">
  单价
  </th>
  <th class="f-txtcenter">
  数量
  </th>
  <th class="f-txtcenter">
  小计
  </th>
  
  
  
  </tr>
  @foreach($xiangqing as $k=>$v)
  @foreach($goods[$k] as $key=>$value)
  @foreach($ttp[$k] as $keys=>$values)
  <tr data-packageid="10211437" class="m-item-ct j-package">
      <td colspan="6">
      <div class="packwarp">
      <div class="w-good good-1">
      <a target="_self" href="javascript:;" class="link">
      <img width="100px" height="100px" alt="" src="{{explode(',',$value->g_pic)[0]}}">
      </a>
      <div class="gInfo gInfo1 f-text-overflow f-word-break">
      <a target="_blank" title="{{$value->g_name}}" href="javascript:;" class="f-fz14">
      {{$value->g_name}}
      </a>
      <div style="margin-top:2px" title="男款L码&nbsp;蓝色&nbsp;" class="specs f-txt-assist f-text-overflow f-word-break">
      {{$values->gd_nature}} {{$values->gd_color}} {{$values->gd_size}}
      </div>
      </div>
      </div>
      <div class="w w1 f-fz12 f-txt-assist">
      <p>¥{{$value->g_price}}.00</p>
      </div>
      <div class="w w2 f-fz12 f-txt-assist">
      {{$v->od_num}}
      </div>
      <div class="w w3 f-fz14 f-fwb">
      <p>¥{{$value->g_price * $v->od_num}}.00</p>
      </div>
      
      </div>
      </td>
      
  </tr>
  @endforeach
  @endforeach
  @endforeach
  </tbody>
  </table>
  </div>
    <!-- =========================================================================================== -->
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
<!-- jQuery UI 1.11.4 -->
<script src="/adminCSS/plugins/jQueryUI/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->
<script src="/adminCSS/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="/adminCSS/plugins/ajax/raphael-min.js"></script>
<!-- <script src="/adminCSS/plugins/morris/morris.min.js"></script> -->
<!-- Sparkline -->
<script src="/adminCSS/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/adminCSS/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/adminCSS/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/adminCSS/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="/adminCSS/plugins/ajax/moment.min.js"></script>
<script src="/adminCSS/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/adminCSS/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/adminCSS/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/adminCSS/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/adminCSS/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/adminCSS/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="/adminCSS/dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="/adminCSS/dist/js/demo.js"></script>
@section('js')
@show
</body>
</html>
