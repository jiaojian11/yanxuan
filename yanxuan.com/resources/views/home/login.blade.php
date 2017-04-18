@extends('home.layout.index')

@section('contents')

<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="/homeCSS/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
<link rel="stylesheet" href="/homeCSS/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script src="/homeCSS/js/jquery-1.12.4.min.js"></script>
<script src="/homeCSS/js/bootstrap.min.js"></script>

<div class="g-bd">
<div style="background:url('/homeCSS/images/bg-3e7f5d5d04_3.jpg');">
<div class="g-row">
<div class="m-login-Page" style="display: block;">
<!-- <div id="j-loginFormWrap" >
</div> -->

<div class="row" style="margin-top:110px;display:none" id="tishi">
  <div class="col-md-8"></div>
  <div class="col-md-3" style="height: 40px; border: 0px solid red;"> 
  <div class="alert alert-danger alert-dismissable" id="tishizi">
      
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  </div>
  </div>
  <div class="col-md-1"></div>
</div>

<!-- <div class="m-bdbg"> -->
<!-- <div class="g-row"> -->
<form action="{{asset('home/dologin')}}" method="post">
<div class="row" style="margin-top:200px;" id="div">
  <div class="col-md-8"></div>
  <div class="col-md-3" style="height: 40px; border: 0px solid red;"> 
  <input type="text" class="form-control" id="zhanghao" name="account" placeholder="账号"></div>
  <div class="col-md-1"></div>
</div>

<div class="row">
  <div class="col-md-8"></div>
  <div class="col-md-3" style="height: 40px; border: 0px solid red;"> 
  <input type="password" class="form-control" id="mima" name="pass" placeholder="密码"></div>
  <div class="col-md-1"></div>
</div>

<div class="row">
  <div class="col-md-8"></div>
  <div class="col-md-3" style="height: 40px; border: 0px solid red;"> 
  <button id="button" type="submit" class="btn btn-primary btn-lg btn-block" style="height:35px;padding-top:0px; padding-bottom:0">登&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;录</button>

  </div>
  <div class="col-md-1"></div>
</div>
{{ csrf_field() }}
</form>

<div class="row">
  <div class="col-md-8"></div>
  <div class="col-md-3" style="height: 40px; border: 0px solid red;"> 
  <a href="/home/modify"><button type="button" class="btn btn-outline  btn-sm">忘记密码?</button></a>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="/home/register"><button type="button" class="btn btn-outline  btn-sm">去注册?</button></a>

  </div>
  <div class="col-md-1"></div>
</div>


<div class="m-login-Page" style="display: block;">
<div id="j-loginFormWrap" style="width: 304px; height: 240px;">

</div>
</div>

<!-- </div> -->
<!-- </div> -->


</div>
</div>
</div>
</div>
@endsection




@section('js')

<script type="text/javascript">
	
	$.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	});
	

	//绑定单击事件
	$('#button').click(function(){
	
		var zhanghao = $('#zhanghao').val();
		var mima = $('#mima').val();

		//判断账号密码是否为空
		if(zhanghao == '' || mima == ''){
			
			$('#tishi').css('display','block');
			$('#div').css('margin-top','50px');
			$('#tishizi').html('账号或密码不能为空!');
			return false;
	
		}else{
			
			//如果都不为空 发送ajax进行判断
			$.ajax({
			  url:'/home/denglu',
			  data:{u_account:zhanghao,u_pass:mima},
			  type:'post',
			  success:function(data){
			   
			    if(data == 1){

			     	$('#tishi').css('display','block');
			     	$('#div').css('margin-top','50px');
			     	$('#tishizi').html('账号或密码错误!');
			    }else{
			    	
			    	window.location.href="/";
			    }
			  },
			  async:false
			})
			
			 return false;
			
		}

	})

	//绑定账号框失去焦点事件






</script>

@endsection