@extends('home.layout.index')
@section('contents')

	<link rel="stylesheet" href="/homeCSS/css/list-f833c2a8ed.css">
	<link rel="stylesheet" href="/homeCSS/css/address-7310c0cec2.css">



	
	<style type="text/css">
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



	table.imagetable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #999999;
	border-collapse: collapse;
	}
	table.imagetable th {
	
	border-width: 0px;
	padding: 8px;
	border-style: solid;
	border-color: #999999;
	}
	table.imagetable td {
	
	border-width: 0px;
	padding: 8px;
	border-style: solid;
	border-color: #999999;
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
	     <!--  <a class="w-menu-item " href="/user/giftCard">礼品卡</a>  -->
	      <a class="w-menu-item " href="/home/favorites">收藏夹</a> 
	     <!--  <a class="w-menu-item " href="/user/securityCenter">帐号安全</a> 
	      <a class="w-menu-item " href="/expert/user?_stat_referer=myList">我的甄选家</a>  -->
	     </div> 
	    </div> 
	    <div class="g-main"> 
	     <div id="j-userinfoForm">
	


		    <div class="j-address-con">
		     <div class="w-address-top">
		      <div class="title">
		       第一条为默认收货地址
		      </div>
		      <a href="/home/addressinsert" class="w-link add j-add">+新建地址</a>
		     </div>
		     <table class="m-addressList" >
		      <colgroup>
		       <col class="w1" />
		       <col class="w2" />
		       <col class="w3" />
		       <col class="w4" />
		       <col class="w5" />
		       <col class="w6" />
		      </colgroup>
		      <tbody>
		       <tr>
		        <th >id</th>
		        <th >收货人</th>
		        <th>地址</th>
		        <th>联系电话</th>
		        <th>操作</th>
		        <th></th>
		       </tr>
		      @foreach($datas as $k=>$v)
		       <tr>
		        <td>{{$v->a_id}}</td>
		        <td>{{$v->a_name}}</td>
		        <td>{{$v->a_address}}</td>
		        <td>{{$v->a_phone}}</td>
		        <td><a href="/home/addressupdate?a_id={{$v->a_id}}" class="w-link j-update" data-id="6233019">编辑</a><a href="" class="w-link w-link-1 j-delete" data-id="6233019" sid="{{$v->a_id}}">删除</a></td>
		        <td><span href="" class="w-button w-button-ghost" ssid="{{$v->a_id}}" suid="{{$v->u_id}}"><a href="">默认地址</a></span></td>
		       </tr>
		      @endforeach
		      </tbody>
		     </table>
		    </div>
		   
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


	//单击事件  删除地址
	$('.j-delete').click(function(){
		
		var a_id = $(this).attr('sid');
		
		//发送ajax
		$.ajax({
          url:'/home/deladdress',
          data:{a_id:a_id},
          type:'post',
          async:false
        })

	})

	//单击事件 设置默认地址
	$('.w-button-ghost').click(function(){

		var a_id = $(this).attr('ssid');
		var u_id = $(this).attr('suid');

		//发送ajax
		$.ajax({
          url:'/home/moren',
          data:{a_id:a_id,u_id:u_id},
          type:'post',
          async:false
        })
	})



	</script>
	
@endsection