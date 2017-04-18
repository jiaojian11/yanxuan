@extends('home.layout.index')
@section('contents')

	<link rel="stylesheet" href="/homeCSS/css/list-f833c2a8ed.css">
	<!-- <link rel="stylesheet" href="/homeCSS/css/style-7d9bd7818b.css"> -->
	<style>
	@charset "UTF-8";
	.ml3 {
	    margin-left: 3px;
	}
	.mr20 {
	    margin-right: 20px;
	}
	.ml40 {
	    margin-left: 40px;
	}
	.pad4 {
	    padding: 4px 0;
	}
	.m-userInfoForm {
	    border: 1px solid #e8e8e8;
	    display: block;
	    font-size: 14px;
	    padding: 33px 0;
	    width: 890px;
	}
	.m-userInfoForm .item {
	    height: 34px;
	    line-height: 34px;
	    margin-bottom: 20px;
	    margin-left: 60px;
	}
	.m-userInfoForm .item .label {
	    width: 70px;
	}
	.m-userInfoForm .item .label-1 {
	    width: 85px;
	}
	.m-userInfoForm .item .content {
	    margin-left: 48px;
	}
	.m-userInfoForm .item .content-1 {
	    margin-left: 33px;
	}
	.m-userInfoForm .item .content-1 .link {
	    margin-left: 20px;
	}
	.m-userInfoForm .item .w-button {
	    border-color: #ddd;
	}
	.m-userInfoForm .item .unit {
	    margin: 0 20px 0 6px;
	    vertical-align: middle;
	}
	.m-userInfoForm .item .warn {
	    color: #d4282d;
	    font-size: 12px;
	    text-align: center;
	    width: 144px;
	}
	.m-userInfoForm .item .errorMsg {
	    margin-left: 8px;
	    margin-top: 9px;
	}
	.m-userInfoForm .item .errorMsg .icon {
	    margin-right: 3px;
	}
	.m-userInfoForm .splitLine {
	    border-bottom: 1px dashed #e8e8e8;
	    margin-bottom: 23px;
	    margin-left: 50px;
	    margin-right: 50px;
	    padding-top: 19px;
	}
	.m-userInfoForm .thirdLoginLogo {
	    margin-left: 10px;
	    margin-top: -5px;
	    vertical-align: middle;
	}
	.m-pop-unbind .content {
	    font-size: 18px;
	    padding-bottom: 28px;
	    padding-top: 88px;
	    text-align: center;
	}
	.m-pop-unbind .comfirm {
	    text-align: center;
	}
	.m-pop-unbind .comfirm .cancel {
	    margin-right: 8px;
	}
	</style>

	  <div class="g-bd" style="height:650px;background:white;"> 
	   <div class="g-row"> 
	    <div class="g-sub"> 
	     <div class="m-userinfo"> 
	      <div id="j-sideAvatarWarp" class="w-avatar"> 
	       <img width="100px" height="100px" id="j-sideAvatar" alt="头像" src="/homeCSS{{$data->u_pic}}" /> 
	       
	       <div class="mask"></div> 
	      </div> 
	      <div id="j-sideNickname" title="m18255442900" class="w-nickname">
	       {{$data->u_account}}
	      </div> 
	      <a target="" href="" class="w-levelname"> 
	       <div id="j-logo" class="logo hidden"></div> <span title="普通用户" class="w-icon-member member-top-vip0"></span><span class="levelname" title="严选会员">积分:{{$data->u_integral}}</span> </a> 
	      <a href="/home/out" class="w-button switch"> 切换帐号 </a> 
	     </div> 
	     <!-- 新人不展示邀请返利 --> 
	     
	     <div class="m-menu"> 
	      <a class="w-menu-item " href="/home/personal">个人信息</a> 
	      <a class="w-menu-item " href="/home/order">订单管理</a> 
	      <a class="w-menu-item active" href="/home/address">地址管理</a> 
	      <a class="w-menu-item " href="/home/coupon">优惠券</a> 
	      <!-- <a class="w-menu-item " href="/user/giftCard">礼品卡</a>  -->
	      <a class="w-menu-item " href="/home/favorites">收藏夹</a> 
	      <!-- <a class="w-menu-item " href="/user/securityCenter">帐号安全</a> 
	      <a class="w-menu-item " href="/expert/user?_stat_referer=myList">我的甄选家</a>  -->
	     </div> 
	    </div> 
	    <div class="g-main"> 
	     <div id="j-userinfoForm">
	          
	      <form class="m-userInfoForm" action="/home/doaddressupdate" method="post">

	       <div class="item">
	        <label class="label f-left userId"><span>用</span><span class="ml3">户</span><span class="ml3">ID</span></label>
	        <div class="content f-left">
	         {{$data->u_id}}
	        </div>
	       </div>
	       <div class="item">
	        <label class="label f-left">帐 号</label>
	        <div class="content f-left">
	         {{$data->u_account}}
	        </div>
	       </div>
	       <div class="item">
	        <label class="label f-left">收货人</label>
	        <div class="content f-left">
	         <input type="text" maxlength="20" value="{{$datas->a_name}}" name="a_name" class="w-ipt w-ipt-l" />
	        </div>
	        <p id="aa_name"></p>
	        <div class="w-errorMsg f-left errorMsg" id="j-error">
	         <i class="icon w-icon-normal icon-normal-disable"></i>
	         <span class="text" id="j-errorText"></span>
	        </div>
	       </div>
	       <div class="item">
	        <label class="label f-left">联系电话</label>
	        <div class="content f-left">
	         <input type="text" maxlength="20" value="{{$datas->a_phone}}" name="a_phone" class="w-ipt w-ipt-l" />
	        </div>
	        <p id="aa_phone"></p>
	        <div class="w-errorMsg f-left errorMsg" id="j-error">
	         <i class="icon w-icon-normal icon-normal-disable"></i>
	         <span class="text" id="j-errorText"></span>
	        </div>
	       </div>
	 		 <div class="item">
	        <label class="label f-left">地 址</label>
	        <div class="content f-left">
	         <input type="text" maxlength="20" value="{{$datas->a_address}}" name="a_address" class="w-ipt w-ipt-l" />
	        </div>
	        <p id="aa_address"></p>
	        <div class="w-errorMsg f-left errorMsg" id="j-error">
	         <i class="icon w-icon-normal icon-normal-disable"></i>
	         <span class="text" id="j-errorText"></span>
	        </div>
	       </div>
	 
	       <input type="hidden" name="a_id" value="{{$datas->a_id}}">
	       <div id="j-staffInfo"></div>
	       <div class="splitLine"></div>
	       <div class="item">
	        <label class="label f-left">&nbsp;</label>
	        <div class="content f-left">
	        {{ csrf_field() }}
	         <button><div class="w-button w-button-primary w-button-l j-submit">
	          保存
	         </div></button>
	         <div class="warn j-warn"></div>
	        </div>
	       </div>
	      </form>
	     </div> 
	    </div> 
	   </div> 
	  </div>
	

@endsection

@section('js')

	<script>
	$('document').ready(function(){
	    /*
	     * 生成级联菜单
	     */
	     $('select[name=year]').change(function(){
	    var i=1945;
	    var date = new Date();
	    year = date.getFullYear();//获取当前年份
	    var dropList;
	    
	    $('select[name=year]').html(dropList);//生成年份下拉菜单
	    var monthly;
	    for(month=1;month<13;month++){
	        monthly = monthly + "<option value='"+month+"'>"+month+"</option>";
	    }
	    $('select[name=month]').html("<option value='0'>"+'--'+"</option>"+monthly);//生成月份下拉菜单
	    var dayly;
	    for(day=1;day<=31;day++){
	        dayly = dayly + "<option value='"+day+"'>"+day+"</option>";
	    }
	    $('select[name=day]').html("<option value='0'>"+'--'+"</option>"+dayly);//生成天数下拉菜单
	    /*
	     * 处理每个月有多少天---联动
	     */
	    $('select[name=month]').change(function(){
	        var currentDay;
	        var Flag = $('select[name=year]').val();
	        var currentMonth = $('select[name=month]').val();
	        switch(currentMonth){
	            case "1" :
	            case "3" :
	            case "5" :
	            case "7" :
	            case "8" :
	            case "10" :
	            case "12" :total = 31;break;
	            case "4" :
	            case "6" :
	            case "9" :
	            case "11" :total = 30;break;
	            case "2" :
	                if((Flag%4 == 0 && Flag%100 != 0) || Flag%400 == 0){
	                    total = 29;
	                }else{
	                    total = 28;
	                }
	            default:break;
	        }
	        for(day=1;day <= total;day++){
	            currentDay = currentDay + "<option value='"+day+"'>"+day+"</option>";
	        }
	        $('select[name=day]').html("<option value='0'>"+'--'+"</option>"+currentDay);//生成日期下拉菜单
	        })
	    })
	})

	var aname = true;
	var aphone = true;
	var aaddress = true;


	//收货人绑定丧失焦点事件
	$('input[name=a_name]').blur(function(){
		
			if($(this).val() == ''){
				
				$('#aa_name').html('&nbsp;&nbsp;× 收货人不能为空').css('color','red');
				aname = false;

			}else{
				
				$('#aa_name').html('&nbsp;√').css('color','green');
				aname = true;
			}
	})

	

	//手机号码验证
	$('input[name=a_phone]').blur(function(){
	   var reg = /^1[3|4|5|8][0-9]\d{8}$/;
	   var inps = $(this);

	   if(reg.test($(this).val())){
	        
	        $('#aa_phone').html('&nbsp;√').css('color','green');
	        aphone = true;

	   }else{

	   		$('#aa_phone').html('&nbsp;&nbsp;× 联系电话不正确').css('color','red');
	  		aphone = false;
	   }

	   if($(this).val() == ''){

	        $('#aa_phone').html('&nbsp;&nbsp;× 联系电话不能为空').css('color','red');
	  		aphone = false;
	   }

	})

	//地址绑定丧失焦点事件
	$('input[name=a_address]').blur(function(){
		
			if($(this).val() == ''){
				
				$('#aa_address').html('&nbsp;&nbsp;× 地址不能为空').css('color','red');
				aaddress = false;
			
			}else{
				
				$('#aa_address').html('&nbsp;√').css('color','green');
				aaddress = true;
			}
	})

	//绑定表单提交事件
	$('form').submit(function(){
	    
	   
	    //触发所有丧失焦点事件
	    $('input').trigger('blur');

	    //检查所有字段是否正确
	    if(aname && aphone && aaddress){
	        
	        return true;

	    }else{

	        return false;
	    }

	})













	</script>
@endsection