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
  <!-- ============================================================= -->

  <!-- 百度编辑器引入文件 -->
  <script type="text/javascript" charset="utf-8" src="/adminCSS/baiduedit/ueditor.config.js"></script>
  <script type="text/javascript" charset="utf-8" src="/adminCSS/baiduedit/ueditor.all.min.js"> </script>
  <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
  <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
  <script type="text/javascript" charset="utf-8" src="/adminCSS/baiduedit/lang/zh-cn/zh-cn.js"></script>
  <!-- =============================================================== -->

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
    <nav class="navbar navbar-statiwc-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu" >
        <ul class="nav navbar-nav" >
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
            <li ><a href="/admin/product/seegoods"><i class="fa fa-circle-o"></i> 商品管理</a></li>
            <li ><a href="/admin/product/addmaker"><i class="fa fa-circle-o"></i> 制造商管理</a></li>
            <li class="active"><a href="/admin/product/addgoods"><i class="fa fa-circle-o"></i> 商品添加管理</a></li>
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
            <li><a href=""><i class="fa fa-circle-o"></i>退货管理</a></li>
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
  <div class="content-wrapper" style="height:100%;width: 1120px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        添加商品
        <small>添加</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">产品管理</a></li>
        <li class="active">商品添加</li>
      </ol>
    </section>
    <!-- Main content -->
<!-- ========================================================================================== -->
    <!-- 显示约束错误，就是request信息 -->
    @if (count($errors) > 0)
      <div class="alert alert-danger" style="margin-top: 10px;">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <!-- 显示返回来的成功信息 -->
    @if(session('success'))
      <div class="alert  alert-dismissable" id="onesu" style="margin-top: 10px;width: 200px;margin-left: 500px;background:rgb(60, 141, 188);">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        {{session('success')}}
      </div>
    @endif

    <!-- 显示返回来的失败信息 -->
    @if(session('error'))
      <div id="oneer" class="alert alert-danger  alert-c" style="margin-top: 10px;width: 200px;margin-left: 500px;">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        {{session('error')}}
      </div>
    @endif
    <script type="text/javascript" src="/adminCSS/js/jquery-1.8.3.min.js"></script>

    <!-- 显示错误的信息(request错误)一个定时器，显示2秒后信息消失 -->
    <script type="text/javascript">
      window.onload = function(){
         setTimeout(function(){
           $('.alert-danger').hide();
         },2000)
      }
    </script>

    <!-- 给返回的成功和错误信息一个定时器，显示2秒后信息消失 -->
    <script type="text/javascript">
        setTimeout(function(){
          $('#onesu').hide();
          $('.oneer').hide();
        },2000)
    </script>
        
    <form action="/admin/product/addgoodsinfo" method="post" enctype="multipart/form-data">
    <div class="row" style="margin-top: 40px;">
      <div class="col-xs-3" style="width: 135px;margin-left: 40px;">
        <div class="box box-warning" style="border-top-color: #3c8dbc;height: 34px;width: 120px;">
          <div class="box-header with-border">
            <h3 class="box-title">产品类别:</h3>
          </div>
        </div>
      </div>
      <div class="col-xs-3" style="width: 180px;">
        <div class="form-group" style="width: 150px;">
          <select class="form-control" id="oneclass" name="pid">
            <option>请选择一级分类</option>
            @foreach($title as $k=>$v)
            <option value="{{$v->gc_id}}" id='gcid'>{{$v->gc_title}}</option>
            @endforeach
          </select>
        </div>
      </div>
        {{csrf_field()}}


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
                  str='<option value="'+v.gc_id+'">'+v.gc_title+'</option>';
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
    <!-- 第二个下拉框 -->
    <div class="col-xs-3" style="width: 180px;">
      <div class="form-group" style="width: 150px;">
        <select class="form-control" id="twoclass" name="id">
          <option >请选择二级分类</option>
        </select>
      </div>
    </div>
    </div>
    <!-- 第二行 产品名称-->
      <div class="row" >
        <div class="col-xs-3" style="width: 135px;margin-left: 40px;">
          <div class="box box-warning" style="border-top-color: #3c8dbc;height: 34px;width: 120px;">
            <div class="box-header with-border">
              <h3 class="box-title">产品名称:</h3>
            </div>
          </div>
        </div>
        <div class="col-xs-3" style="width: 180px;">
          <input class="form-control" placeholder="请输入产品名称" type="text" name="gname">
        </div>
      </div>
    <!-- 第三行 产品总数-->
      <div class="row" >
        <div class="col-xs-3" style="width: 135px;margin-left: 40px;">
          <div class="box box-warning" style="border-top-color: #3c8dbc;height: 34px;width: 120px;">
            <div class="box-header with-border">
              <h3 class="box-title">产品总数:</h3>
            </div>
          </div>
        </div>
        <div class="col-xs-3" style="width: 180px;">
          <input class="form-control" placeholder="请输入产品总数" type="text" name="gnum">
        </div>
      </div>
    <!-- 第四行 产品价格-->
      <div class="row" >
        <div class="col-xs-3" style="width: 135px;margin-left: 40px;">
          <div class="box box-warning" style="border-top-color: #3c8dbc;height: 34px;width: 120px;">
            <div class="box-header with-border">
              <h3 class="box-title">产品价格:</h3>
            </div>
          </div>
        </div>
        <div class="col-xs-3" style="width: 180px;">
          <input class="form-control" placeholder="请输入产品单价" type="text" name="gprice">
        </div>
      </div>
      <!-- 第五行 产品制造商编号-->
      <div class="row" >
        <div class="col-xs-3" style="width: 135px;margin-left: 40px;">
          <div class="box box-warning" style="border-top-color: #3c8dbc;height: 34px;width: 120px;">
            <div class="box-header with-border">
              <h3 class="box-title">产品制造商:</h3>
            </div>
          </div>
        </div>
        <div class="col-xs-3" style="width: 180px;">
          <input class="form-control" placeholder="请输入制造商编号" type="text" name="mid">
        </div>
      </div>
    <!-- 第六行 产品简介-->
      <div class="row" >
        <div class="col-xs-3" style="width: 135px;margin-left: 40px;">
          <div class="box box-warning" style="border-top-color: #3c8dbc;height: 34px;width: 120px;">
            <div class="box-header with-border">
              <h3 class="box-title">产品简介:</h3>
            </div>
          </div>
        </div>
        <div class="col-xs-3" style="width: 480px;">
          <input class="form-control" placeholder="请输入产品简介" type="text" name="gintro">
        </div>
      </div>
      <!-- 第七行 -->
      <div class="row">
        <div class="col-xs-3" style="width: 135px;margin-left: 40px;">
          <div class="box box-warning" style="border-top-color: #3c8dbc;height: 34px;width: 120px;">
            <div class="box-header with-border">
              <h3 class="box-title">产品属性:</h3>
            </div>
          </div>
        </div>
        <div class="col-xs-3" style="width: 180px;">
          <div class="form-group" style="width: 150px;">
            <select class="form-control" id="threeclass" name="gnature">
              <option value="0">选择商品属性</option>
              <option value="1">包含1个属性</option>
              <option value="2">包含2个属性</option>
            </select>
          </div>
        </div>
      </div>

      <!-- 根据属性显示管理员所需要填写的表格 ajax -->
      <script type="text/javascript">
          $(function(){
            $('#threeclass').change(function(){
              num=$(this).val();
              $.get('/admin/product/nature',{num:num},function(data){
                  if(data==0){
                      $('#first').css('display','none');
                      $('#second').css('display','none');
                  }else if(data==1){
                      $('#first').css('display','block');
                      $('#second').css('display','none');
                  }else{
                      $('#first').css('display','none');
                      $('#second').css('display','block');
                  }
              })
            })
          })
      </script>
      <!-- ====行 -->
      <div class="row" style="display:none;" id="first">
        <div class="row" >
          <div class="col-xs-3" style="width: 135px;margin-left: 55px;">
            <div class="box box-warning" style="border-top-color: #3c8dbc;height: 34px;width: 120px;">
              <div class="box-header with-border">
                <h3 class="box-title">属性名:</h3>
              </div>
            </div>
          </div>
          <div class="col-xs-3" style="width: 180px;">
            <input class="form-control" placeholder="请输入属性名" type="text" name="gnaturename">
          </div>
        </div>
        <div class="col-xs-4" style="width: 150px;margin-left: 40px;">
          <div class="box box-warning" style="border-top-color: #3c8dbc;height: 150px;width: 150px;">
            <div class="box-header with-border">
              <h3 class="box-title">产品组合1:</h3>
            </div>
            <input name="gdnature[]" class="form-control" placeholder="请输入产品规格" type="text" style="margin-top: 13px;">
            <input name="gdnum[]" class="form-control" placeholder="请输入产品数量" type="text" style="margin-top: 13px;">
          </div>
        </div>

        <div class="col-xs-4" style="width: 150px;margin-left: 40px;">
          <div class="box box-warning" style="border-top-color: #3c8dbc;height: 150px;width: 150px;">
            <div class="box-header with-border">
              <h3 class="box-title">产品组合2:</h3>
            </div>
            <input name="gdnature[]" class="form-control" placeholder="请输入产品规格" type="text" style="margin-top: 13px;">
            <input name="gdnum[]" class="form-control" placeholder="请输入产品数量" type="text" style="margin-top: 13px;">
          </div>
        </div>

        <div class="col-xs-4" style="width: 150px;margin-left: 40px;">
            <div class="box box-warning" style="border-top-color: #3c8dbc;height: 150px;width: 150px;">
              <div class="box-header with-border">
                <h3 class="box-title">产品组合3:</h3>
              </div>
              <input name="gdnature[]" class="form-control" placeholder="请输入产品规格" type="text" style="margin-top: 13px;">
              <input name="gdnum[]" class="form-control" placeholder="请输入产品数量" type="text" style="margin-top: 13px;">
            </div>
        </div>

        <div class="col-xs-4" style="width: 150px;margin-left: 40px;">
            <div class="box box-warning" style="border-top-color: #3c8dbc;height: 150px;width: 150px;">
              <div class="box-header with-border">
                <h3 class="box-title">产品组合4:</h3>
              </div>
              <input name="gdnature[]" class="form-control" placeholder="请输入产品规格" type="text" style="margin-top: 13px;">
              <input name="gdnum[]" class="form-control" placeholder="请输入产品数量" type="text" style="margin-top: 13px;">
            </div>
        </div>
      </div>
      <!--  -->
      <div id="second" style="display:none;">
      <div class="row">
        <div class="col-xs-3" style="width: 135px;margin-left: 40px;">
          <div class="box box-warning" style="border-top-color: #3c8dbc;height: 34px;width: 120px;">
            <div class="box-header with-border">
              <h3 class="box-title">颜色个数:</h3>
            </div>
          </div>
        </div>
        <div class="col-xs-3" style="width: 180px;">
          <div class="form-group" style="width: 150px;">
            <select class="form-control" id="colornum">
              <option value="1">包含1种颜色</option>
              <option value="2">包含2种颜色</option>
              <option value="3">包含3种颜色</option>
              <option value="4">包含4种颜色</option>
              <option value="5">包含5种颜色</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3" style="width: 135px;margin-left: 40px;">
          <div class="box box-warning" style="border-top-color: #3c8dbc;height: 34px;width: 120px;">
            <div class="box-header with-border">
              <h3 class="box-title">尺码个数:</h3>
            </div>
          </div>
        </div>
        <div class="col-xs-3" style="width: 180px;">
          <div class="form-group" style="width: 150px;">
            <select class="form-control" id="sizenum">
              <option value="1">包含1种尺码</option>
              <option value="2">包含2种尺码</option>
              <option value="3">包含3个尺码</option>
              <option value="4">包含4个尺码</option>
              <option value="5">包含5个尺码</option>
              <option value="6">包含6个尺码</option>
              <option value="7">包含7个尺码</option>
              <option value="8">包含8个尺码</option>
            </select>
          </div>
        </div>
      </div>
      <button id="make" class="btn btn-primary" style="margin-left: 200px;margin-bottom: 10px;">填写商品规格单</button>
      </div>
      
      <script type="text/javascript">
        $(function(){
          $('#make').click(function(){
            var colornum=$('#colornum').val();
            var sizenum=$('#sizenum').val();
            var trnum=colornum*sizenum;
            $('#mtable').empty();
            var stt='';
            var st='<table border="1" width="527" id="second" style="margin-left: 40px;border-color: #3c8dbc;"><tr><th width="174">颜色</th><th width="175">尺码</th><th width="175">数量</th></tr>';
            for (var i = 1; i <= trnum ;i++) {
              str='<tr><td><input  name="color[]"  value="" type="text" ></td><td><input  name="size[]"  value="" type="text" ></td><td><input  name="num[]"  value="" type="text" ></td></tr>';
              stt+=str;
            };
              st+=stt;
            $('#mtable').append(st);
            return false;
          })
        })
      </script>

      <!--  -->
      <div id="mtable"></div>
      <!-- 第八行 -->
      <div class="row">
        <div class="col-xs-3" style="width: 180px;margin-left: 40px;margin-top: 20px;">
          <div class="box box-warning" style="border-top-color: #3c8dbc;height: 34px;width: 180px;">
            <div class="box-header with-border">
              <h3 class="box-title">添加商品图片:</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3" style="width:120px;margin-left: 40px;">
          <input type="file" name="file[]" multiple>
        </div>
      </div>
      <!-- 百度编辑器============================================================ -->
      <div style="margin-left: 35px;">
        <h1>编辑商品详情</h1>
        <script id="editor" type="text/plain" style="width:1024px;height:500px;"></script>
      </div>
      <script type="text/javascript">
        //实例化编辑器
        //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
        var ue = UE.getEditor('editor');
      </script>
      <!-- 百度编辑器结束 -->
        <!-- <input type="hidden" name="gtime" value="time()"> -->
        <button type="submit" class="btn btn-primary" style="margin-left: 950px;margin-top: 10px;margin-bottom: 20px;">提交</button>
      </form>
<!-- ========================================================================================== -->
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
