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
            <li class="active"><a href="/admin/product/addclass"><i class="fa fa-circle-o"></i> 分类管理</a></li>
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
  <div class="content-wrapper" style="height:1150px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        分类管理
        <small>菜单栏</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">产品管理</a></li>
        <li class="active">分类管理</li>
      </ol>
    </section>

    <!-- Main content -->
   <!-- ======================================================================================== -->
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
    <div class="row" style="margin-top: 40px;">
      <div class="col-md-3" style="margin-left: 20px;">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">添加一级分类</h3>
            </div>
            <!-- form start -->
            <form role="form" method="post" action="{{url('/admin/product/insert')}}" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">添加一级分类</label>
                  <input class="form-control" placeholder="请输入一级类名" type="text" name="title">
                  <input class="form-control" placeholder="请输入一级简介" type="text" name="info" style="margin-top: 10px;">
                  <label style="margin-top:10px;">添加图片</label>
                  <input type="file" name="pic" style="width:230px;">
                </div>
              </div>
              {{ csrf_field() }}
              <div class="box-footer">
              <center>
                <button type="reset" class="btn btn-primary">重置</button>
                <button type="submit" class="btn btn-primary">添加</button>
              </center>
              </div>
            </form>
        </div>
      </div>
      <div class="col-md-8" style="margin-left: 20px;">
        <a href="#" type="button" class="umpic"  data-toggle="modal" data-target="#myModal">
            <image src="/uploads/lll.jpg" id="seven" style="width: 400px;height:105px;margin-left: 150px;">
        </a>
        <div class="box box-primary">
            <div class="box-header with-border">
            <center>
              <h3 class="box-title">一级菜单栏管理</h3>
            </center>
            </div>
            <!-- /.box-header -->
              <div class="box-body">
              <!-- 一级菜单栏 -->
                <div class="form-group" style="height:30px;">
                <center>
                @foreach($cates as $k=>$v)
                    <a href="/admin/product/addclass?id={{$v->gc_id}}" class="editclass" sid="{{$v->gc_id}}">
                        <button class="btn btn-primary" style="margin-left: 5px;margin-top: 15px;">
                            {{$v->gc_title}}
                        </button>
                    </a>
                @endforeach
                </center>
                </div>
                {{ csrf_field() }}
              </div>
              <!-- 七彩小四方块 -->
              <div class="box-footer" style="margin-top: 30px;margin-left: 7px;">
              <ul class="fc-color-picker" id="color-chooser">
                  <li class="text-aqua"><i class="fa fa-square"></i></li>
                  <li class="text-blue" ><i class="fa fa-square"></i></li>
                  <li class="text-light-blue" ><i class="fa fa-square"></i></li>
                  <li class="text-teal" ><i class="fa fa-square"></i></li>
                  <li class="text-yellow" ><i class="fa fa-square"></i></li>
                  <li class="text-orange" ><i class="fa fa-square"></i></li>
                  <li class="text-green" ><i class="fa fa-square"></i></li>
                  <li class="text-lime" ><i class="fa fa-square"></i></li>
                  <li class="text-red" ><i class="fa fa-square"></i></li>
                  <li class="text-purple" ><i class="fa fa-square"></i></li>
                  <li class="text-fuchsia" ><i class="fa fa-square"></i></li>
                  <li class="text-muted" ><i class="fa fa-square"></i></li>
                  <li class="text-navy" ><i class="fa fa-square"></i></li>
                  <li class="text-light-blue" ><i class="fa fa-square"></i></li>
                  <li class="text-teal" ><i class="fa fa-square"></i></li>
                  <li class="text-yellow" ><i class="fa fa-square"></i></li>
                  <li class="text-orange" ><i class="fa fa-square"></i></li>
                  <li class="text-green" ><i class="fa fa-square"></i></li>
                  <li class="text-lime" ><i class="fa fa-square"></i></li>
                  <li class="text-red" ><i class="fa fa-square"></i></li>
                  <li class="text-purple" ><i class="fa fa-square"></i></li>
                  <li class="text-red" ><i class="fa fa-square"></i></li>
                  <li class="text-purple"><i class="fa fa-square"></i></li>
                </ul>
              </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <form action="/admin/product/upocpic" method="post" enctype="multipart/form-data">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">修改图片</h4>
          </div>
          <div class="modal-body">
           <!-- 模态框 body -->
            <div class="row">
              <div class="col-md-6 col-md-offset-3">
                  <div class="form-group">
                    <label>请选择图片</label>
                    <input type="file" name="pic">
                    <input type="hidden" name="mid" id="umid">
                  </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
          {{ csrf_field() }}
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            <button type="" class="btn btn-primary">提交</button>
          </div>
        </div>
      </div>
      </form>
    </div>
    <script type="text/javascript" src="/adminCSS/js/jquery-1.8.3.min.js"></script>

    <!-- 一点击图片就获取该图片所属类别的id 并将id传递给模态框里的隐藏input框，以便知道要修改的是哪个类别的图片 -->
    <script type="text/javascript">
    $('.umpic').live('click',function(){
      var mid=$(this).attr('ocid');
      $('#umid').val(mid);
    })

    $('.uompic').live('click',function(){
      var mid=$(this).attr('ocid');
      $('#umid').val(mid);
    })
    </script>
    <script type="text/javascript">

      // 给所有的一级类别绑定单击事件
      $('.editclass').click(function(){

          // 获取点击的一级类别id
          var id = $(this).attr('sid');//alert(id);
          var links = $(this);

          //发送ajax
          $.get('/admin/product/addclasss',{id:id},function(data){

              // 将传回来的json格式转换回数组
              a=(eval("("+data+")")); //alert(a.data3[0].gc_title);
              
              // 将ajax传回来的值放入要修改的框里
              $('#one').attr('value',a.title);
              $('#two').attr('value',a.id);
              $('#three').attr('value',a.title);
              $('#four').attr('value',a.id);
              $('#five').attr('value',a.pid);
              $('#six').html(a.title);
              $('#seven').attr('src',a.pic);
              $('#eight').attr('value',a.id);
              $('.umpic').attr('ocid',a.id);

             // console.log(a.data3); return;
             // 遍历二级菜单
              st='';
              $('#cccc').empty();
              $.each(a.data3,function(k,v){
              str='<tr role="row" class="odd"><td class="sorting_1"><center>'+v.gc_id
              +'</center></td><td><center><input class="inp" type="text" value="'+v.gc_title+'" name="title" disabled="disabled" style="background:#fff;border:0px;"></center></td><td><a href="#" type="button" class="uompic" ocid="'+v.gc_id+'" data-toggle="modal" data-target="#myModal"><image src="'
              +v.gc_pic+'"></a></td><td><a href="" class="aedit" tid="'+v.gc_id+'">修改</a>&nbsp; <a href="" class="deleteclass" dcid="'+v.gc_id+'">删除</a></td></tr>';
              st+=str;
              })
              // console.log(st);
              $('#cccc').append(st);
          });
            return false;
      })
    </script>
    <!-- 大框,包含左右两个框 -->
    <div>
        <!-- 左边框 -->
        <div style="float:left;">
            <!-- 修改框 -->
            <div class="row">
              <div class="col-md-12" style="margin-left: 20px;width:282px;">
                  <div class="box box-primary">
                      <div class="box-header with-border">
                        <h3 class="box-title">修改一级菜单栏</h3>
                      </div>
                      <form role="form" method="post" action="{{url('/admin/product/updateclass')}}">
                        <div class="box-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">修改一级分类</label>
                            <!-- 显示要修改的类 -->
                            <input id="one" class="form-control"  type="text" name="gc_title" value="">
                            <!-- 隐藏传递类的id -->
                            <input id="two" type="hidden" name="gc_id" value="">
                          </div>
                        </div>
                        <!-- /.box-body -->
                        {{ csrf_field() }}
                        <div class="box-footer">
                        <center>
                          <button type="reset" class="btn btn-primary">重置</button>
                          <button type="submit" class="btn btn-primary">修改</button>
                        </center>
                        </div>
                      </form>
                  </div>
                </div>
            </div>
            <!-- 删除框 -->
            <div class="row">
              <div class="col-md-12" style="margin-left: 20px;width:282px;">
                  <div class="box box-primary">
                      <div class="box-header with-border">
                        <h3 class="box-title">删除一级菜单栏</h3>
                      </div>
                      <!-- /.box-header -->
                      <!-- form start -->
                      <form role="form" method="post" action="{{url('/admin/product/delclass')}}">
                        <div class="box-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">删除一级分类</label>
                            <!-- 显示要修改的类 -->
                            <input id="three" class="form-control"  type="text" name="gc_title" value="" >
                            <!-- 隐藏传递类的id -->
                            <input id="four" type="hidden" name="gc_id" value="">
                            <input id="five" type="hidden" name="gc_pid" value="">
                          </div>
                        </div>
                        <!-- /.box-body -->
                        {{ csrf_field() }}
                        <div class="box-footer">
                        <center>
                          <button  type="submit" class="btn btn-primary" >删除</button>
                        </center>
                        </div>
                        </form>
                  </div>
                </div>
            </div>
        </div>
        <!-- 右边框 -->
        <!-- 右下角开始 -->
          <!-- 显示二级类别删除成功与否 ajax删除信息 -->
        <div id="successMessage" class="alert alert-dismissable" style="display:none;margin-top: 10px;width: 200px;margin-left: 600px;background:rgb(60, 141, 188);">
        </div>
        <div id="errorMessage" class="alert alert-dismissable" style="display:none;margin-top: 10px;width: 200px;margin-left: 600px;background:red;">
        </div>
        <div class="box" style="float:left;height:700px;width: 745px;margin-left: 320px;border-top-color:#3c8dbc;position:absolute;">
            <div class="box-header">
              <center>
               <h3 class="box-title">二级菜单栏管理</h3>
              </center>
            </div>
            <div class="box-body" style="width: 420px;margin-left: 30px;">
              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                  <div class="row">
                      <div class="col-sm-12" style="width:700px">
                          <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info" >
                      <thead>
                            <tr role="row" class="odd">
                               <td id="six" style="font-size:20px; text-align:center; vertical-align:middle;width: 130px;"></td>
                               <form action="/admin/product/inserttwo" method="post" enctype="multipart/form-data">
                                <td style="width: 10px;"><input class="form-control" placeholder="请输入二级菜单" type="text" name="gc_title"></td>
                                <td style="width: 10px;"><input  type="file" name="pic" style="width:130px;"></td>
                                <td style="width: 190px;">
                                  <input type="hidden" value="" name="gc_pid" id="eight">
                                  {{ csrf_field() }}
                                  <button id="seven" class="btn btn-primary"  type="reset">
                                      重置
                                  </button>
                                  <button id="seven" class="btn btn-primary" type="submit">
                                      添加二级菜单
                                  </button>
                                </td>
                                </form>
                            </tr>
                            <tr role="row">
                                <th class="sorting_desc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" aria-sort="descending">
                                   <center> 商品类别编号</center>
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"> 
                                  <center>商品类别名称</center>
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                    <center>商品类别的图标</center>
                                </th>
                                <!-- <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column    ascending">
                                    <center>路径</center>
                                </th> -->
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                    操作
                                </th>
                            </tr>
                      </thead>
                              <tbody id='cccc'>
                                  <!-- <tr role="row" class="odd">
                                      <td class="sorting_1"></td>
                                      <td ></td>
                                      <td ></td>
                                      <td ></td>
                                      <td>
                                        <a href="">修改</a>
                                        <a href="">删除</a>
                                      </td>
                                </tr> -->
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
            </div>
        </div>
        <!-- 右下角结束 -->
      </div>
    <!-- 给所有的二级类别修改绑定事件 -->
    <script type="text/javascript">

      // 给修改绑定单击事件，点击修改变成保存，input框变成可以修改的
      $('.aedit').live('click',function(){ 
          $yuan=$(this).parents('tr').children('td:eq(1)').children('center').children('input');
          $yuan.removeAttr('disabled')
          $(this).html('保存');
          $(this).attr('class','edit');
         return false;
      })

      // 点击保存发送ajax，如果成功则显示success否则显示error。并input变成不可编辑的
      $('.edit').live('click',function(){  
          $yuan=$(this).parents('tr').children('td:eq(1)').children('center').children('input');
          var links = $(this);
          var id = $(this).attr('tid');
          var title=$yuan.val();
      $.get('/admin/product/updatetwo',{id:id,title:title},function(data){
          if(data == 1){
            $yuan.attr('disabled','disabled');
            $('.edit').html('修改');
            links.attr('class','aedit');

            // 显示修改成功后的提示信息，并与2秒后消失
            $('#successMessage').text('修改成功').fadeIn(1000);
            setTimeout(function(){
              $('#successMessage').fadeOut(1000);
            },2000);
          }else{
            $yuan.attr('disabled','disabled');
            $('.edit').html('修改');
            links.attr('class','aedit');

            // 显示修改失败后的提示信息，并与2秒后消失
            $('#errorMessage').text('修改失败').fadeIn(1000);
            setTimeout(function(){
              $('#errorMessage').fadeOut(1000);
            },2000);
          }
      })
        return false;
    })
    </script>

    <!-- 执行删除的ajax ，删除二级类别-->
    <script type="text/javascript">

      //给所有的删除链接绑定事件
      $('.deleteclass').live('click',function(){

        //获取id
        var id = $(this).attr('dcid');
        var links = $(this);

      //发送ajax
      $.get('/admin/product/deleteclass',{id:id},function(data){
          if(data == 1){

            //获取提醒信息，并与2秒后消失
            $('#successMessage').text('删除成功').fadeIn(1000);
            setTimeout(function(){
              $('#successMessage').fadeOut(1000);
            },2000);

            // 将点击删除的哪一行移除
            links.parents('tr').remove();
          }
      });
      return false;
      })
    </script>
<!-- ======================================================================================== -->
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
