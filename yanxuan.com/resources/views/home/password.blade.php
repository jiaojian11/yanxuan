<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" name="csrf-token" content="{{ csrf_token() }}">
	<title>注册页</title>
	<link rel="stylesheet" href="/homeCSS/css/Ecaptcha_2.css" type="text/css" /> 
	<link rel="stylesheet" href="/homeCSS/css/indexzhuce.css" type="text/css" /> 
    
    <!-- <link href="/homeCSS/css/bootstrap.min.css" rel="stylesheet"> -->
    <script src="/homeCSS/js/jquery-1.12.4.min.js"></script>
    <script src="/homeCSS/js/bootstrap.min.js"></script>
</head>

<input id="hid_pkid" value="" type="hidden">
<input id="hid_pkht" value="" type="hidden">
<input id="hid_pd" value="" type="hidden">
<div id="tost-b"><!--Regular list--></div>

  <div class="g-hd">
  	<div class="g-in">
        <a href="http://reg.163.com/" target="_blank"><div class="m-logo spritebg"></div></a>
      <div class="m-tr-block">已有帐号？去<a id="btn_Login" href="{{url('/home/login')}}">登录</a></div>
    </div>
  </div>
  <div id="reg_block" class="g-bd">

  <div class="top_tlt">修改密码</div>

<!--Regular if0-->


<div class="m-opr clearfix" style="height:300px;">
    
        <form action="{{asset('home/dopassword')}}" method="post">  
        <div class="u-input j-phone-box">
            <label for="inpt-phone" class="u-label">输入新密码：</label>
            <input name="u_pass" value="" id="" placeholder="6-18位密码，不区分大小写" maxlength="20" class="i-inpt " type="password">
            <div class="u-tip f-dn"><div class="spritebg u-clear" id="auto-id-1490864150924"></div></div>
            <table class="popb err" id="passs" style="display:none">
                <tbody><tr><td class="b-i" id="b-iii" style="width:150px;"></td></tr></tbody>
            </table>
        </div>

        <div class="u-input j-phone-box">
            <label for="inpt-phone" class="u-label">确认新密码：</label>
            <input name="u_repass" id="" placeholder="再次输入密码" maxlength="20" class="i-inpt " type="password">
            <div class="u-tip f-dn"><div class="spritebg u-clear" id="auto-id-1490864150924"></div></div>
            <table class="popb err" id="repasss" style="display:none">
                <tbody><tr><td class="b-i" id="b-iiii" style="width:150px;"></td></tr></tbody>
            </table>
        </div>
        
        <input type="hidden" name="u_id" value="{{session('u_id')}}">
       
        <div class="u-input" style="height: 58px;">
            <label class="u-label">&nbsp;</label>
            
            <div id="zhuce" class="b-btn btn-reg btn-red btndisabled" style="cursor:pointer;"><button id="buttons" style="height:51px; width:330px; background:green; color:black;">确&nbsp;&nbsp;定 </button></div>
            <!--Regular if24-->
        </div>
        {{ csrf_field() }}

        </form>

    <!--Regular if25-->
</div>

<script type="text/javascript">

  var s_pass = true;
  var s_repass = true;


  
  //密码绑定丧失焦点事件
  $('input[name=u_pass]').blur(function(){
      var reg = /^\w{6,18}$/;
      if(reg.test($(this).val())){
          
          s_pass = true;
          $('#b-iii').html('√').css('color','green');
          $('#passs').css('display','block');
         
      }else{
          
          s_pass = false;
          $('#b-iii').html('× 密码长度不符合要求').css('color','red');
          $('#passs').css('display','block');
      }

      if($(this).val() == ''){

          s_pass = false;
          $('#b-iii').html('× 密码不能为空').css('color','red');
          $('#passs').css('display','block');
      }
  })


  //确认密码验证
  $('input[name=u_repass]').blur(function(){
     var reg = /^\w{6,18}$/;
     var pass = $('input[name=u_pass]').val();
     if(reg.test($(this).val()) && $(this).val() == pass){
          
          s_repass = true;
          $('#b-iiii').html('√').css('color','green');
          $('#repasss').css('display','block');
       
     }else{
          
          s_repass = false;
          $('#b-iiii').html('x 确认密码不正确').css('color','red');
          $('#repasss').css('display','block');
       
     }

     if($(this).val() == ''){

          s_repass = false;
          $('#b-iiii').html('x 确认密码不能为空').css('color','red');
          $('#repasss').css('display','block');
     }
  })

  //确定按钮事件
  $('form').submit(function(){
      
     
      //触发所有丧失焦点事件
      $('input').trigger('blur');

      //检查所有字段是否正确
      if(s_pass && s_repass){
          
          return true;

      }else{

          return false;
      }



  })



</script>








<!--Regular if26-->
</div>
  <div class="g-ft">
    <div class="g-in">
      <div class="m-cp">
        <p><a href="http://corp.163.com/eng/about/overview.html" target="_blank">About NetEase</a>-<a href="http://gb.corp.163.com/gb/about/overview.html" target="_blank">公司简介</a>-<a href="http://gb.corp.163.com/gb/contactus.html" target="_blank">联系方式</a>-<a href="http://reg.163.com/help/help_oauth2.html?v=20141215" target="_blank">OAuth2.0认证</a>-<a href="http://corp.163.com/gb/job/job.html" target="_blank">招聘信息</a>-<a href="http://help.163.com/" target="_blank">客户服务</a>-<a href="http://gb.corp.163.com/gb/legal.html" target="_blank">相关法律</a>-<a href="http://emarketing.biz.163.com/" target="_blank">网络营销</a></p>
        <p>网易公司版权所有 ©1997-2017</p>
      </div>
    </div>
  </div>

<!-- @NOPARSE -->


<!-- /@NOPARSE -->
<!-- DEFINE -->



</html>