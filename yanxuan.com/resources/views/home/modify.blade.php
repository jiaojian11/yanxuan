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

  <div class="top_tlt">找回密码</div>

<!--Regular if0-->
<div class="m-opr clearfix" style="height:300px;">
    
        <div class="u-input firstelem">
             <label for="inpt-account" class="u-label">帐号：</label>
             <input name="u_account" id="inpt-account" placeholder="请输入6-18位账号" class="i-inpt " type="text" value="">
             <div class="u-tip"></div>
             <table class="popb err" id="account" style="display:none">
                 <tbody><tr><td class="b-i" id="b-ii" style="width:150px;"></td></tr></tbody>
             </table>
         </div>

        <div class="u-input j-phone-box">
            <label for="inpt-phone" class="u-label">输入手机号：</label>
            <input name="u_phone" id="inpt-phone" placeholder="11位手机号" maxlength="20" class="i-inpt " type="text">
            <div class="u-tip f-dn"><div class="spritebg u-clear" id="auto-id-1490864150924"></div></div>
            <table class="popb err" id="phone" style="display:none">
                <tbody><tr><td class="b-i" id="b-iiiii" style="width:150px;"></td></tr></tbody>
            </table>
        </div>
      
        
        <div class="u-input">
            <label for="inpt-sms" class="u-label">短信验证码：</label>
            <input value="" name="sms" id="inpt-sms" placeholder="输入短信验证码" maxlength="6" class="i-inpt smsize " type="text">
            <div class="u-tip f-dn"><div class="spritebg u-clear" id="auto-id-1490864150926"></div>
            </div>
            <button type="button" id="code" class="b-btn btn-getsms btn-getsms-btndisabled">获取验证码</button>
            
            <table class="popb err" id="sms" style="display:none">
                <tbody><tr><td class="b-i" id="b-iiiiii" style="width:150px;"></td></tr></tbody>
            </table>
        </div>

        

        <div class="u-input" style="height: 58px;">
            <label class="u-label">&nbsp;</label>
            
            <div id="zhuce" class="b-btn btn-reg btn-red btndisabled" style="cursor:pointer;"><button id="buttons" style="height:51px; width:330px; background:green; color:black;">找&nbsp;&nbsp;回 </button></div>
            <!--Regular if24-->
        </div>
        {{ csrf_field() }}

    



        
   

    <input type="hidden" name="sessionid" value="{{session('ucode')}}">
    <!--Regular if25-->
</div>



<script type="text/javascript">

    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });

    var s_account = true;
    var s_phone = true;
    var s_sms = true;
   
    //账号验证
    $('input[name=u_account]').blur(function(){
      
         if($(this).val() !== ''){


            //发送ajax
            $.ajax({
                url:'/home/account',
                data:{u_account:$(this).val()},
                type:'get',
                success:function(data){
                  if(data == 1){

                    s_account = false;
                    $('#b-ii').html('x 账号不存在').css('color','red');
                    $('#account').css('display','block');
                      
                  }else{

                    s_account = true;
                    $('#b-ii').html('√').css('color','green');
                    $('#account').css('display','block');
                 
                  }
                 }, 
               
                async:false
            });

         }else{
          
            s_account = false;
            $('#b-ii').html('x 账号不能为空').css('color','red');
            $('#account').css('display','block');
         }
    })
    
    //手机号码验证
    $('input[name=u_phone]').blur(function(){
       var reg = /^1[3|4|5|8][0-9]\d{8}$/;
       if(reg.test($(this).val())){
            
            //发送ajax
            $.ajax({
                url:'/home/phone',
                data:{u_phone:$(this).val(),u_account:$('input[name=u_account]').val()},
                type:'get',
                success:function(data){
                  if(data == 1){

                    s_phone = true;
                    $('#b-iiiii').html('√').css('color','green');
                    $('#phone').css('display','block');
                      
                  }else{

                    s_phone = false;
                    $('#b-iiiii').html('x 请输入正确的手机号码').css('color','red');
                    $('#phone').css('display','block');
                 
                  }
                 }, 
               
                async:false
            });

      

       }else{
            
            s_phone = false;
            $('#b-iiiii').html('x 请输入正确的手机号码').css('color','red');
            $('#phone').css('display','block');
         
       }

       if($(this).val() == ''){

            s_phone = false;
            $('#b-iiiii').html('x 手机号码不能为空').css('color','red');
            $('#phone').css('display','block');
       }

    })

    //短信验证码
    $('#code').click(function(){
        //获取用户的手机号
        var phone = $('input[name=u_phone]').val();

        //发送ajax
        $.ajax({
            url:'/home/domodify',
            data:{u_phone:phone},
            type:'get',
            success:function(data){
              if(data == 1){

                  s_phone = false;
                  $('#b-iiiii').html('x 手机号码不存在').css('color','red');
                  $('#phone').css('display','block');
                 
              }
             }, 
           
            async:false
        });

        //单击后 按钮不能点击
        $('#code').attr('disabled','disabled');


        //启用定时器 60秒后按钮可以点击
        var i = 59;
        var init = setInterval(function(){
            
            $('#code').html(i);
            i--;

        if(i == 0){

            $('#code').removeAttr('disabled');
            clearInterval(init);
            $('#code').html('获取验证码');
        
        }
            
        },1000);



    })

    //短信验证框丧失焦点事件
    $('#inpt-sms').blur(function(){
        
        //进行判断验证码是否正确
        var smss = $('#inpt-sms').val();
        
        $.ajax({
          url:'/home/phoneyanzheng',
          data:{sms:smss},
          type:'post',
          success:function(data){
            if(data == 0){

                s_sms = true;
                $('#b-iiiiii').html('√').css('color','green');
                $('#sms').css('display','block');
             
                
            }else{
             
                s_sms = false;
                $('#b-iiiiii').html('x 短信验证码不正确').css('color','red');
                $('#sms').css('display','block');
              
            }
          },
          async:false
        })

         if($(this).val() == ''){

            s_sms = false;
            $('#b-iiiiii').html('x 短信验证码不能为空').css('color','red');
            $('#sms').css('display','block');
        }

    })

    //找回按钮事件
    $('#buttons').click(function(){
        
       
        //触发所有丧失焦点事件
        $('input').trigger('blur');

        //检查所有字段是否正确
        if(s_phone && s_sms && s_account){
            
            window.location.href="/home/password";

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