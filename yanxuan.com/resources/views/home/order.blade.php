@extends('home.layout.index')
@section('contents')

	<link rel="stylesheet" href="/homeCSS/css/list-f833c2a8ed.css">
	<link rel="stylesheet" href="/homeCSS/css/cart-52e20e8dc4.css">
	<link rel="stylesheet" href="/homeCSS/css/style-7d9bd7818b.css">
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
	
	<div class="g-bd" style="height:auto;background:white;"> 
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
	    <a class="w-menu-item active" href="/home/order">订单管理</a> 
	    <a class="w-menu-item " href="/home/address">地址管理</a> 
	    <a class="w-menu-item " href="/home/coupon">优惠券</a> 
	   <!--  <a class="w-menu-item " href="/user/giftCard">礼品卡</a>  -->
	    <a class="w-menu-item " href="/home/favorites">收藏夹</a> 
	   <!--  <a class="w-menu-item " href="/user/securityCenter">帐号安全</a> 
	    <a class="w-menu-item " href="/expert/user?_stat_referer=myList">我的甄选家</a>  -->
	   </div> 
	  </div>
		<div class="g-main">
		
 

 		<div id="j-orderListContainer">
 		   <div class="m-orderList" data-reactid=".0">
 		    <div class="m-filter" data-reactid=".0.0">
 		     <ul id="j-orderFilter" class="w-tabs" data-reactid=".0.0.0">
 		      <li id="all" class="j-tabsItem item active" data-target="#j-allOrderPanel" data-reactid=".0.0.0.$0"><a href="javascript:;" data-reactid=".0.0.0.$0.0">全部订单</a></li>
 		      <li id="daifukuan" class="j-tabsItem item" data-target="#j-unpayedOrderPanel" data-reactid=".0.0.0.$1"><a href="javascript:;" data-reactid=".0.0.0.$1.0">待付款&nbsp;<span class="orderItemNum"></span></a></li>
 		      <li id="daifahuo" class="j-tabsItem item" data-target="#j-undeliveredOrderPanel" data-reactid=".0.0.0.$2"><a href="javascript:;" data-reactid=".0.0.0.$2.0">待发货&nbsp;<span class="orderItemNum"></span></a></li>
 		      <li id="yifahuo" class="j-tabsItem item" data-target="#j-unfetchedOrderPanel" data-reactid=".0.0.0.$3"><a href="javascript:;" data-reactid=".0.0.0.$3.0">已发货&nbsp;<span class="orderItemNum"></span></a></li>
 		      <li id="daipingjia" class="j-tabsItem item" data-target="#j-uncommentedOrderPanel" data-reactid=".0.0.0.$4"><a href="javascript:;" data-reactid=".0.0.0.$4.0">待评价&nbsp;<span class="orderItemNum"></span></a></li>
 		     </ul>
 		    </div>
 		  
 		    <div class="m-panels" data-reactid=".0.2">
 		     <div class="m-panel" id="j-allOrderPanel" data-reactid=".0.2.0" style="display: block;">
 		      <div data-reactid=".0.2.0.0">
 		       
	
		




			   @foreach($datas as $k=>$v)
			   @foreach($v->goods as $a=>$b)
			   <div class="big" status="{{$v->o_status}}">
			   <table class="m-orderItem tables" data-reactid=".0.2.0.0.0:$11081009" cellpadding="0" style="display:block;" >
			    <colgroup data-reactid=".0.2.0.0.0:$11081009.0">
			     <col class="w1" data-reactid=".0.2.0.0.0:$11081009.0.0" />
			     <col class="w2" data-reactid=".0.2.0.0.0:$11081009.0.1" />
			     <col class="w3" data-reactid=".0.2.0.0.0:$11081009.0.2" />
			    </colgroup>
			    <tbody data-reactid=".0.2.0.0.0:$11081009.1">
			     <tr class="head" data-reactid=".0.2.0.0.0:$11081009.1.0">
			      <th colspan="3" data-reactid=".0.2.0.0.0:$11081009.1.0.0"><span style="margin-top:10px;" class="dealtime" data-reactid=".0.2.0.0.0:$11081009.1.0.0.0"><span data-reactid=".0.2.0.0.0:$11081009.1.0.0.0.0">下单时间：</span><span data-reactid=".0.2.0.0.0:$11081009.1.0.0.0.1"> {{date('Y-m-d H:i:s',$v->o_time)}}</span></span><span style="margin-top:10px;" class="number" data-reactid=".0.2.0.0.0:$11081009.1.0.0.1"><span data-reactid=".0.2.0.0.0:$11081009.1.0.0.1.0">订单号：</span>{{$v->o_id}}<span data-reactid=".0.2.0.0.0:$11081009.1.0.0.1.1" class="dele">                  </span></span><span data-reactid=".0.2.0.0.0:$11081009.1.0.0.2"></span></th>
			     </tr>
			     <tr class="body" data-reactid=".0.2.0.0.0:$11081009.1.1">
			      <td data-reactid=".0.2.0.0.0:$11081009.1.1.0">
			       <div data-reactid=".0.2.0.0.0:$11081009.1.1.0.$11409009">
			        <span data-reactid=".0.2.0.0.0:$11081009.1.1.0.$11409009.0"></span>
			        <div class="packageItem" data-reactid=".0.2.0.0.0:$11081009.1.1.0.$11409009.1">
			     



			         <div class="good" data-reactid=".0.2.0.0.0:$11081009.1.1.0.$11409009.1.0">
			          <a class="link" href="/home/xiangqing?id={{$b->g_id}}&gcid={{$b->gc_id}}&gcpid={{$b->gc_pid}}" target="_blank" data-reactid=".0.2.0.0.0:$11081009.1.1.0.$11409009.1.0.0"><img src="{{explode(',',$b->g_pic)[0]}}" data-reactid=".0.2.0.0.0:$11081009.1.1.0.$11409009.1.0.0.0" height="100px" width="100px" />
			          </a>
			          
			          <div class="info" data-reactid=".0.2.0.0.0:$11081009.1.1.0.$11409009.1.0.1">
			           <a class="f-fz14" href="/home/xiangqing?id={{$b->g_id}}&gcid={{$b->gc_id}}&gcpid={{$b->gc_pid}}" target="_blank" title="" data-reactid=".0.2.0.0.0:$11081009.1.1.0.$11409009.1.0.1.0">{{$b->g_name}}</a>
			          </div>
			          
			         </div>
		 


			         <div class="express" data-reactid=".0.2.0.0.0:$11081009.1.1.0.$11409009.1.1">
			          <div class="cell" data-reactid=".0.2.0.0.0:$11081009.1.1.0.$11409009.1.1.0">
			           <div class="f-txt-assist" data-reactid=".0.2.0.0.0:$11081009.1.1.0.$11409009.1.1.0.0">
			            <span data-reactid=".0.2.0.0.0:$11081009.1.1.0.$11409009.1.1.0.0.0">@if($v->o_status==0)待付款@elseif($v->o_status==1)待发货@elseif($v->o_status==2)已发货@elseif($v->o_status==3)待评价@else已完成@endif</span>
			            <span data-reactid=".0.2.0.0.0:$11081009.1.1.0.$11409009.1.1.0.0.1"></span>
			           </div>
			           <span data-reactid=".0.2.0.0.0:$11081009.1.1.0.$11409009.1.1.0.1"></span>
			          </div>
			         </div>
			         <div class="status" data-reactid=".0.2.0.0.0:$11081009.1.1.0.$11409009.1.2">
			       

					
			          <div class="cell" data-reactid=".0.2.0.0.0:$11081009.1.1.0.$11409009.1.2.0">
			           <div data-reactid=".0.2.0.0.0:$11081009.1.1.0.$11409009.1.2.0.0">
			            <span style="color:#f33;" data-reactid=".0.2.0.0.0:$11081009.1.1.0.$11409009.1.2.0.0.0">数量</span>
			           </div>
			           <div style="margin-top:5px;" data-reactid=".0.2.0.0.0:$11081009.1.1.0.$11409009.1.2.0.1">
			            <span data-reactid=".0.2.0.0.0:$11081009.1.1.0.$11409009.1.2.0.1.0">{{$b->od_num}}</span>
			            <br data-reactid=".0.2.0.0.0:$11081009.1.1.0.$11409009.1.2.0.1.1" />
			            <span data-timeleft="3581137" data-reactid=".0.2.0.0.0:$11081009.1.1.0.$11409009.1.2.0.1.2">  </span>
			           </div>
			           <span data-reactid=".0.2.0.0.0:$11081009.1.1.0.$11409009.1.2.0.2"></span>
			           <span data-reactid=".0.2.0.0.0:$11081009.1.1.0.$11409009.1.2.0.3"></span>
			           <span data-reactid=".0.2.0.0.0:$11081009.1.1.0.$11409009.1.2.0.4"></span>
			           <span data-reactid=".0.2.0.0.0:$11081009.1.1.0.$11409009.1.2.0.5"></span>
			          </div>
			         </div>
			        </div>
			       </div></td>
			      <td data-reactid=".0.2.0.0.0:$11081009.1.1.1">
				   @if($b->g_price*$b->od_num > 88)
			       <div class="cost" data-reactid=".0.2.0.0.0:$11081009.1.1.1.0" style="position:relative;top:-50px">
			        <p class="price" data-reactid=".0.2.0.0.0:$11081009.1.1.1.0.0"><span data-reactid=".0.2.0.0.0:$11081009.1.1.1.0.0.0">&yen;</span><span data-reactid=".0.2.0.0.0:$11081009.1.1.1.0.0.1">{{$b->g_price*$b->od_num}}</span></p>
			        <p class="fee" data-reactid=".0.2.0.0.0:$11081009.1.1.1.0.1"><span data-reactid=".0.2.0.0.0:$11081009.1.1.1.0.1.0"></span><span data-reactid=".0.2.0.0.0:$11081009.1.1.1.0.1.1"></span><span data-reactid=".0.2.0.0.0:$11081009.1.1.1.0.1.2"></span></p>
			       </div>
				   @else
			       <div class="cost" data-reactid=".0.2.0.0.0:$11081009.1.1.1.0" style="position:relative;top:-50px">
			        <p class="price" data-reactid=".0.2.0.0.0:$11081009.1.1.1.0.0"><span data-reactid=".0.2.0.0.0:$11081009.1.1.1.0.0.0">&yen;</span><span data-reactid=".0.2.0.0.0:$11081009.1.1.1.0.0.1">{{$b->g_price*$b->od_num+10}}</span></p>
			        <p class="fee" data-reactid=".0.2.0.0.0:$11081009.1.1.1.0.1"><span data-reactid=".0.2.0.0.0:$11081009.1.1.1.0.1.0">（含运费：&yen;</span><span data-reactid=".0.2.0.0.0:$11081009.1.1.1.0.1.1">10.00</span><span data-reactid=".0.2.0.0.0:$11081009.1.1.1.0.1.2">元）</span></p>
			       </div>
			       @endif
			      </td>
			      <td data-reactid=".0.2.0.0.0:$11081009.1.1.2">
			       <div class="f-txtcenter" data-reactid=".0.2.0.0.0:$11081009.1.1.2.0" style="position:relative;top:-50px">
			  		@if($v->o_status==0)
			        <div data-reactid=".0.2.0.0.0:$11081009.1.1.2.0.0">
			         <a href="/home/orderbuy?o_id={{$v->o_id}}" class="w-button w-button-primary j-pay11081009" data-reactid=".0.2.0.0.0:$11081009.1.1.2.0.0.0">付款</a>
			        </div>
					@else
			        <div data-reactid=".0.2.0.0.0:$11081009.1.1.2.0.0" style="display:none;">
			         <a href="javascript:;" class="w-button w-button-primary j-pay11081009" data-reactid=".0.2.0.0.0:$11081009.1.1.2.0.0.0">付款</a>
			        </div>
					@endif
			        <a class="w-link" href="/home/orderxiangqing?o_status={{$v->o_status}}&g_id={{$b->g_id}}&gd_id={{$b->gd_id}}&num={{$b->od_num}}&" target="_blank" data-reactid=".0.2.0.0.0:$11081009.1.1.2.0.1">查看详情</a>
					@if($v->o_status==0)
			        <a href="" class="w-link quxiao" data-reactid=".0.2.0.0.0:$11081009.1.1.2.0.2" ding="{{$v->o_id}}">取消订单</a>
					@elseif($v->o_status==3)
			        <a id="" style="cursor:pointer;" class="fapinglun w-link" data-reactid=".0.2.0.0.0:$11081009.1.1.2.0.2" >发表评价</a>
					@elseif($v->o_status==2)

			        <a href="" ding="{{$v->o_id}}" style="cursor:pointer;" class="w-link shouhuo" data-reactid=".0.2.0.0.0:$11081009.1.1.2.0.2" >确认收货</a>
					
					@else
			        <a href="" style="display:none;" class="w-link quxiao" data-reactid=".0.2.0.0.0:$11081009.1.1.2.0.2" ding="">取消订单</a>
			        @endif
			        <span data-reactid=".0.2.0.0.0:$11081009.1.1.2.0.3"></span>
			        <span data-reactid=".0.2.0.0.0:$11081009.1.1.2.0.4"></span>
			       </div></td>
			     </tr>
			    </tbody>
			   </table>
			
			
			    <table id="" class="pinglun m-orderItem " data-reactid=".0.2.0.0.0:$11081009" cellpadding="0" style="display:none;" >
			     <colgroup data-reactid=".0.2.0.0.0:$11081009.0">
			      <col class="w1" data-reactid=".0.2.0.0.0:$11081009.0.0" />
			      <col class="w2" data-reactid=".0.2.0.0.0:$11081009.0.1" />
			      <col class="w3" data-reactid=".0.2.0.0.0:$11081009.0.2" />
			     </colgroup>
			      <tr class="body" data-reactid=".0.2.0.0.0:$11081009.1.1" >
			       <td data-reactid=".0.2.0.0.0:$11081009.1.1.1" style="width:2500px;" class="tdd">
			        <form action="/home/pinglun" method="post">
						&nbsp;&nbsp;&nbsp;评价: <input type="textarea" name="co_comment" value="" style="width:630px;" />
						<input type="hidden" name="g_id" value="{{$b->g_id}}">
						<input type="hidden" name="co_time" value="{{time()}}">
						<input type="hidden" name="o_id" value="{{$v->o_id}}">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="fabiao"><a href="javascript:;" class="w-button w-button-primary j-pay11081009" data-reactid=".0.2.0.0.0:$11081009.1.1.2.0.0.0">发表</a></button>
					{{ csrf_field() }}
			    	</form>
			        </td>
			      </tr>
			    </table>
			    </div>
			    @endforeach
				@endforeach
			 

				








 		       <div class="m-pager j-pager" data-reactid=".0.2.0.0.1"></div>
 		      </div>
 		     </div>
 		     <div class="m-panel" id="j-unpayedOrderPanel" data-reactid=".0.2.1"></div>
 		     <div class="m-panel" id="j-undeliveredOrderPanel" data-reactid=".0.2.2"></div>
 		     <div class="m-panel" id="j-unfetchedOrderPanel" data-reactid=".0.2.3"></div>
 		     <div class="m-panel" id="j-uncommentedOrderPanel" data-reactid=".0.2.4"></div>
 		    </div>
 		   </div>
 		  </div> 
		
		  </div>











	   </div> 
	  </div>
	

@endsection

@section('js')

	<script>

		$.ajaxSetup({
		        headers: {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		        }
		});



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

	
	//全部订单绑定单击事件
	$('#all').click(function(){
		
		$('#daifukuan').removeAttr('class').attr('class','j-tabsItem item');
		$('#daifahuo').removeAttr('class').attr('class','j-tabsItem item');
		$('#yifahuo').removeAttr('class').attr('class','j-tabsItem item');
		$('#daipingjia').removeAttr('class').attr('class','j-tabsItem item');
		$('#all').attr('class','j-tabsItem item active');
	
		//隐藏所有订单
		$('.big').css('display','block');
		// $('.tables').css('display','block');

	})

	//代付款绑定单击事件
	$('#daifukuan').click(function(){
		
		$('#all').removeAttr('class').attr('class','j-tabsItem item');
		$('#daifahuo').removeAttr('class').attr('class','j-tabsItem item');
		$('#yifahuo').removeAttr('class').attr('class','j-tabsItem item');
		$('#daipingjia').removeAttr('class').attr('class','j-tabsItem item');
		$('#daifukuan').attr('class','j-tabsItem item active');

		//隐藏所有订单
		$('.big').css('display','none');
		// $('.tables').css('display','none');

		//显示待付款订单
		var status = $('.big');
		// var status = $('.tables');
		status.each(function(){
			
			if($(this).attr('status') == 0){
				$(this).show();
			}
		})

	})



	//代发货绑定单击事件
	$('#daifahuo').click(function(){
		
		$('#all').removeAttr('class').attr('class','j-tabsItem item');
		$('#daifukuan').removeAttr('class').attr('class','j-tabsItem item');
		$('#yifahuo').removeAttr('class').attr('class','j-tabsItem item');
		$('#daipingjia').removeAttr('class').attr('class','j-tabsItem item');
		$('#daifahuo').attr('class','j-tabsItem item active');
	
		//隐藏所有订单
		$('.big').css('display','none');
		// $('.tables').css('display','none');

		//显示待发货订单
		var status = $('.big');
		// var status = $('.tables');
		status.each(function(){
			
			if($(this).attr('status') == 1){
				$(this).show();
			}
		})

	})


	//已发货绑定单击事件
	$('#yifahuo').click(function(){
		
		$('#all').removeAttr('class').attr('class','j-tabsItem item');
		$('#daifukuan').removeAttr('class').attr('class','j-tabsItem item');
		$('#daifahuo').removeAttr('class').attr('class','j-tabsItem item');
		$('#daipingjia').removeAttr('class').attr('class','j-tabsItem item');
		$('#yifahuo').attr('class','j-tabsItem item active');

		//隐藏所有订单
		$('.big').css('display','none');
		// $('.tables').css('display','none');

		//显示已发货订单
		var status = $('.big');
		status.each(function(){
			
			if($(this).attr('status') == 2){
				$(this).show();
			}
		})

	})

	//待评价绑定单击事件
	$('#daipingjia').click(function(){
		
		$('#all').removeAttr('class').attr('class','j-tabsItem item');
		$('#daifukuan').removeAttr('class').attr('class','j-tabsItem item');
		$('#daifahuo').removeAttr('class').attr('class','j-tabsItem item');
		$('#yifahuo').removeAttr('class').attr('class','j-tabsItem item');
		$('#daipingjia').attr('class','j-tabsItem item active');

		//隐藏所有订单
		$('.big').css('display','none');
		// $('.tables').css('display','none');

		//显示已发货订单
		var status = $('.big');
		// var status = $('.tables');
		status.each(function(){
			
			if($(this).attr('status') == 3){
				$(this).show();
			}
		})

	})


	//取消订单事件
	$('.quxiao').click(function(){

		var ding = $(this).attr('ding');
		var dele = $(this);
		$.ajax({
		  url:'/home/delorder',
		  data:{o_id:ding},
		  type:'post',
		  success:function(data){
			   
		    if(data == 1){

		    	dele.parents('.tables').remove();
		     
		    }
		  },
		  async:false
		})
		
		// return true;

	})


	//绑定发表评论单击事件
	$('.fapinglun').click(function(){
		
		$(this).parents('.big').find('.pinglun').css('display','block');

	})


	//绑定发表单击事件
	$('.fabiao').click(function(){

		var value = $(this).parents('.tdd').find('input[name=co_comment]').val();

		if(value == ''){
			return false;

		}else{
			return true;
		}

		
	})

	//绑定确认收货单击事件
	$('.shouhuo').click(function(){
		var dings = $(this).attr('ding');

		var deles = $(this);
		$.ajax({
		  url:'/home/shouhuo',
		  data:{o_id:dings},
		  type:'post',
		  success:function(data){
			   
		   if(data==1){
		    
		   		return true;

		   }else{
		   	
		   		return false;
		   }  
		    
		  },
		  async:false
		})




	})


	</script>
@endsection