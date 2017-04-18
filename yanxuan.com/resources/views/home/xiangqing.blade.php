@extends('home.layout.index')

@section('contents')
	
	<link rel="stylesheet" href="{{asset('/homeCSS/css/detail-4da38b6c20.css')}}" type="text/css" /> 
	<div class="g-detail" > 
	<div class="g-bd" style="background-color:white"> 
	<div class="m-crumbs"> 
	 <a href="/">首页</a> 
	 <span class="w-icon w-icon-arrow"></span> 
	 <a href="/home/goods?gcid={{$data->gc_pid}}&&gctitle={{$title1->gc_title}}">{{$title1->gc_title}}</a> 
	 <span class="w-icon w-icon-arrow"></span> 
	 <span class="jiao1" style="display:none">{{$data->g_id}}</span>
	 <span class="jiao2" style="display:none">{{$data->gc_id}}</span>
	 <span class="jiao3" style="display:none">{{$data->gc_pid}}</span>

		<span class="jiao4" style="display:none">{{$data->g_yhid}}</span>
	 <a href="/home/goods?gcid={{$data->gc_pid}}&&gctitle={{$title1->gc_title}}#{{$title2->gc_title}}">{{$title2->gc_title}}</a> 
	 <span class="w-icon w-icon-arrow"></span> 
	 <span class="z-cur">{{$data->g_name}}</span> 
	</div> 
	</div> 
	<div class="g-bd"> 
	<div class="m-detail" style="background-color:white"> 
	 <div class="detail-top"> 
	  <div class="slide"> 
	   <div class="view"> 
	    <img alt="" src="{{explode(',',$data->g_pic)[0]}}" class="j-thumb" /> 
	   </div> 
	   <div class="list j-sthumbs"> 
	    <ul id="ooo"> 
	     <li class="z-active"> <a href="javascript:;"><img alt="鼠标悬停切换" src="{{explode(',',$data->g_pic)[0]}}" /></a> </li> 
	     <li class=""> <a href="javascript:;"><img alt="鼠标悬停切换" src="{{explode(',',$data->g_pic)[1]}}" /></a> </li> 
	     <li class=""> <a href="javascript:;"><img alt="鼠标悬停切换" src="{{explode(',',$data->g_pic)[2]}}" /></a> </li> 
	     <li class=""> <a href="javascript:;"><img alt="鼠标悬停切换" src="{{explode(',',$data->g_pic)[3]}}" /></a> </li> 
	     <li class=""> <a href="javascript:;"><img alt="鼠标悬停切换" src="{{explode(',',$data->g_pic)[4]}}" /></a> </li> 
	    </ul> 
	   </div> 
	  </div> 
	  <div class="info"> 
	   <div class="intro"> 
	    <div class="name">
	     {{$data->g_name}}
	    </div>
	    @if($mname!='')
	    <div class="tagList">
			<a class="item" href="#">{{$mname->m_name}}</a>
		</div>
		@endif 
	    <div class="desc">
	     {{$data->g_intro}}
	    </div> 
	   </div>

		  {{--限时优惠--}}
		  @if($limit=='')
			  <div class="limitedHd"> </div>

		  @elseif($limit->l_ctime<$time && $limit->l_ltime>$time)
			  <span style="display:none" class="xians1">{{date("Y/m/d H:i:s",$limit->l_ltime)}}</span>
			  <span style="display:none" class="xians2">{{date("Y/m/d H:i:s",$limit->l_ctime)}}</span>
			  <div class="limitedHd">
			  <span class="limitedTag">限时购&nbsp;&nbsp;</span>
				<span class="limitedtip">
				距离结束还剩&nbsp;&nbsp;<span class="j-limite-countdown"><span class="shi">0</span>时<span class="fen">0</span>分 <span class="miao">0</span>秒</span>
				</span>
			  <a class="ruleBt j-showRule" href="/home/xianshi" target="">更多抢购&nbsp;&gt;</a>
		  </div>
		  @elseif($limit->l_ctime>$time)
			  <span style="display:none" class="xians2">{{date("Y/m/d H:i:s",$limit->l_ctime)}}</span>
			  <div class="limitedHd">
				  <span class="limitedTag">限时购&nbsp;&nbsp;</span>
				<span class="limitedtip">
				距离开始还剩&nbsp;&nbsp;<span class="j-limite-countdown"><span class="shi">0</span>时<span class="fen">0</span>分 <span class="miao">0</span>秒</span>
				</span>
				  <a class="ruleBt j-showRule" href="/home/xianshi" target="">更多抢购&nbsp;&gt;</a>
			  </div>
			  @elseif($limit->l_ltime<$time)
			  <span style="display:none" class="xians1">{{date("Y/m/d H:i:s",$limit->l_ltime)}}</span>
			  <div class="limitedHd"> </div>
		  @endif
		  {{--显示优惠--}}

	   <div class="price u-formctr">
		   @if($limit=='')
			   <div class="field pBox j-sellBox j-sell f-cb" style="display: block;">
				   <span class="label label-1">售价</span>
				   <span class="rp"><span class="rmb">&yen;</span><span class="num j-retail-price">{{$data->g_price}}.00</span></span>
			   </div>
		   @elseif($limit->l_ctime<$time && $limit->l_ltime>$time)
	      <!-- 正常价格 --> 
	      <div class="field pBox j-sellBox j-sell f-cb" style="display: block;"> 
	        <span class="label label-1">售价</span> 
	        <span class="rp"><span class="rmb">&yen;</span><span class="num j-retail-price">{{$data->g_coupon}}.00</span></span>
			  <span class="op">¥<s><span class="j-sku-counter-price">{{$data->g_price}}</span></s></span>
		  </div>
		   @else
		   <div class="field pBox j-sellBox j-sell f-cb" style="display: block;">
			   <span class="label label-1">售价</span>
			   <span class="rp"><span class="rmb">&yen;</span><span class="num j-retail-price">{{$data->g_price}}.00</span></span>
		   </div>
		   @endif
	      <!-- 正常价格end -->
	    <div class="field sale"> 
	      <span class="label label-2">促销</span> 
	      <div class="activityType">
	       愚人节
	      </div>领全场满减券，额外机会包裹翻倍 
	      <div style="clear:both"></div> 
	    </div> 
	    <div class="field server"> 
	      <span class="label">服务</span> 
	      <div class="sFirstLine j-policyPop"> 
	        <i class="w-icon-normal icon-normal-point "></i>30天无忧退货
	        <span class="interspace"></span> 
	        <i class="w-icon-normal icon-normal-point "></i>48小时快速退款
	        <span class="interspace"></span> 
	        <i class="w-icon-normal icon-normal-point "></i>满88元免邮费
	        <span class="interspace"></span> 
	        <i class="w-icon-normal icon-normal-point "></i>网易自营品牌
	        <span class="interspace"></span> 
	      </div> 
	      <div style="clear:both"></div> 
	    </div> 
	   </div> 
	   <!-- 价格信息end --> 

	   <!-- // 判断该商品有几个属性 -->
	   <!-- // 一个属性 -->
	   @if($data->g_nature==1)
	     <div class="j-param">
	      <div class="param u-formctr"> 
	        <span class="name name-2">{{$data->g_naturename}}</span> 
	        <div class="field field-1"> 
	          <ul class="m-tabs">
		        @foreach($data1 as $k=>$v)
		        @if(!empty($picture))
		        @foreach($picture as $k1=>$v1)
	 	        @if($k==$k1)
	 	        <!-- 判断该商品库存,如果为0则执行else,加阴影效果 -->
	 	        @if($v->gd_num!=0)
	       	    <li class="tab-con">
	       		  <a data-url="" data-id="1058028" class="tab tab-pic" href="javascript:void(0);">
	       		    <img alt="" src="{{$v1}}" /> 
	       		    <input type="hidden" value="{{$v->gd_id}}" class="gdid">
	       		    <i class="w-icon-normal icon-normal-spec-arrow sel"></i> 
	         	    <div class="dis"></div> 
	         	    <div class="title" style="display:none;">
	                   {{$v->gd_nature}}
	                </div> 
	         	  </a> 
	        	</li>
	        	@else
	        	<li class="tab-con">
	       		  <a data-url="" data-id="1058028" class="tab tab-pic tab-dis" href="javascript:void(0);">
	       		    <img alt="" src="{{$v1}}" /> 
	       		    <input type="hidden" value="{{$v->gd_id}}" class="gdid">
	       		    <i class="w-icon-normal icon-normal-spec-arrow sel"></i> 
	         	    <div class="dis"></div> 
	         	    <div class="title" style="display:none;">
	                   {{$v->gd_nature}}
	                </div> 
	         	  </a> 
	        	</li>
	            @endif
	            <!-- 判断该商品库存,加阴影效果 结束--> 
	            @endif
	            @endforeach
	            @else
	            <!-- 判断该商品库存,如果为0则执行else,加阴影效果 -->
	 	        @if($v->gd_num!=0) 
	            <li class="tab-conss" style="float:left;margin-right: 10px;margin-bottom:10px;">                     
	   		      <a href="javascript:void(0);" class="tab tab-txt " data-id="1018042">
	   		      	<input type="hidden" value="{{$v->gd_id}}" class="gdid">
	          	    <span class="txt">{{$v->gd_nature}}</span>                       
	          	    <i class="w-icon-normal icon-normal-spec-arrow sel"></i>
	          	    <div class="dis"></div>
	    	      </a>
	 		    </li>
	 		    @else
	 		    <li class="tab-conss" style="float:left;margin-right: 10px;margin-bottom:10px;">                     
	   		      <a href="javascript:void(0);" class="tab tab-txt tab-dis" data-id="1018042">
	   		      	<input type="hidden" value="{{$v->gd_id}}" class="gdid">
	          	    <span class="txt">{{$v->gd_nature}}</span>                       
	          	    <i class="w-icon-normal icon-normal-spec-arrow sel"></i>
	          	    <div class="dis"></div>
	    	      </a>
	 		    </li>
	 		    @endif
	            <!-- 判断该商品库存,加阴影效果 结束--> 
	 		    @endif
	            @endforeach
	          </ul> 
	        </div> 
	      </div>
	     </div>
	   @else
	   <!-- // 两个属性 -->
	     <div class="j-param">
		   <div class="param u-formctr">                  
		     <span class="name name-2">颜色</span>                 
		     <div class="field field-1">                 
		       <ul class="m-tabs">
		       @foreach($data1 as $k2=>$v2)
		       @foreach($picture as $k1=>$v1)
		       @if($k2%$sizenum==0&&$k1*$sizenum==$k2)
		         <li class="tab-con">                       
	   			   <a href="javascript:void(0);" class="tab tab-pic" sizeid="{{$v2->gd_id}}" num="{{$k1}}" sizenum="{{$sizenum}}">                           
	    		     <img src="{{$v1}}" alt="">
	    		     <input type="hidden" value="{{$v2->g_id}}" class="gid"> 
	    		     <input type="hidden" value="{{$v2->gd_id}}" class="gdid">                       
	        	     <i class="w-icon-normal icon-normal-spec-arrow sel"></i>                            
	        	     <div class="dis"></div>                           
	        	     <div class="title" style="display: none;">{{$v2->gd_color}}</div>                       
	               </a>          
	             </li>
	             @endif
	          	 @endforeach 
	            @endforeach 
	           </ul>
	         </div>
	       </div>
	       <div class="param u-formctr"> 
	         <span class="name name-1">尺码</span>
	         <div class="field field-1">
	           <ul class="m-tabs">
	           @foreach($data1 as $k3=>$v3)
	           
		       @if($k3<$sizenum)
	             <li class="tab-conss" style="float:left;margin-right: 10px;margin-bottom:10;"> 
	               <a href="javascript:void(0);" class="tab tab-txt" sizeid="{{$v3->gd_id}}" size="{{$v3->g_id}}" num="{{$k3}}">
	                 <span class="txt">{{$v3->gd_size}}</span>
	                 <i class="w-icon-normal icon-normal-spec-arrow sel"></i>
	                 <div class="dis"></div> 
	               </a>
	             </li>
	             @endif
	          	 
	            @endforeach 
	           </ul> 
	         </div>
	       </div>
	     </div>
	   <!-- 两个属性结束 -->
	   @endif
	   <script type="text/javascript" src="/adminCSS/js/jquery-1.8.3.min.js"></script> 
	   <script type="text/javascript">
			$('.tab-con').mouseover(function(){
				a=$(this).children('a').find('.title');
				a.css('display','block');
			})

			$('.tab-con').mouseout(function(){
				a=$(this).children('a').find('.title');
				a.css('display','none');
			})

			// 商品被点击选中(图片)
			$('.tab-con').live('click',function(){
				a=$(this).children('.tab-pic').attr('class');
				if(a=='tab tab-pic tab-sel'){
				$('.tab-con').children('.tab-pic').removeClass('tab-sel');
				$('.tab-conss').children('.tab-txt').removeClass('tab-dis');
					
				}else{
					$('.tab-con').children('.tab-pic').removeClass('tab-sel');
					$('.tab-conss').children('.tab-txt').removeClass('tab-dis');

					// 判断该商品属性可不可点击,如果库存不足则不可点
					b=$(this).find('.tab-dis');
					if(b.length==0){
						$(this).children('.tab-pic').addClass('tab-sel');
					
						// 以下操作为图片属性加阴影(两个属性的图片)
						// 获取商品详情表的商品id(g_id)
						gid=$('.tab-con').find('a.tab-sel').find('input.gid').val();//alert(gid);
						// 获取商品详情表里面商品的颜色
						color=$('.tab-con').find('a.tab-sel').find('div.title').html();//alert(color);

						// 该商品尺码个数
						sizenum=$(this).children('.tab-pic').attr('sizenum');

						// 获取这是第几个属性颜色
						num=$(this).find('a.tab-pic').attr('num');
						num=parseInt(num);

						// 发ajax
	   					$.ajaxSetup({
					        headers: {
					            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					        }
	   					});

	   					$.post('/home/twoyin',{gid:gid,color:color},function(data){
	   						a=(eval("("+data+")"));
	   						if(a!=[]){
	   							if(num==0){
	   								for (var i = 0; i < a.length; i++) {
	   									
	   									// 遍历尺码那个li
	   									$('.tab-conss').children('.tab-txt').each(function(){
	   										
	   										// 如果li里面的sizeid和没有库存的商品详情id(gd_id)相等则加上阴影
	   										if(a[i]==$(this).attr('sizeid')){
	   											$(this).addClass('tab-dis');
	   										}
	   									});
	   								};
	   							}else{
	   								for (var i = 0; i < a.length; i++) {

	   									// 如果该商品属性不为第一个颜色,则用该商品的详情表id(gd_id)减去尺码的个数乘这是第几个颜色(减1)
	   									a[i]=a[i]-sizenum*num;

	   									// 遍历尺码那个li
	   									$('.tab-conss').children('.tab-txt').each(function(){
	   										
	   										// 如果li里面的sizeid和没有库存的商品详情id(gd_id)相等则加上阴影
	   										if(a[i]==$(this).attr('sizeid')){
	   											$(this).addClass('tab-dis');
	   										}
	   									});
	   								};
	   							}	
	   						}	
	   					})
					}
				}
			
			})

			// 商品被点击选中
			$('.tab-conss').live('click',function(){
				a=$(this).children('.tab-txt').attr('class');
				if(a=='tab tab-txt tab-sel'){
				$('.tab-conss').children('.tab-txt').removeClass('tab-sel');
				$('.tab-con').children('.tab-pic').removeClass('tab-dis');
					
				}else{
					$('.tab-conss').children('.tab-txt').removeClass('tab-sel');
					$('.tab-con').children('.tab-pic').removeClass('tab-dis');
					b=$(this).find('.tab-dis');
					if(b.length==0){
						$(this).children('.tab-txt').addClass('tab-sel');
					

					// 以下操作为图片属性加阴影(两个属性的图片)
					// 获取商品详情表的商品id(g_id)
					gid=$(this).find('a.tab-txt').attr('size');

					// 获取商品详情表里面商品的尺码
					sizenum=$(this).find('.txt').html();

					// 获取这是第几个
					num=$(this).find('a.tab-txt').attr('num');
					num=parseInt(num);

					// 发ajax
   					$.ajaxSetup({
				        headers: {
				            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				        }
   					});

   					$.post('/home/twoyint',{gid:gid,sizenum:sizenum},function(data){
   						a=(eval("("+data+")"));
   						if(a!=[]){
   							if(num==0){
   								for (var i = 0; i < a.length; i++) {

   									// 遍历颜色那个li
	   								$('.tab-con').children('.tab-pic').each(function(){
	   									
	   									// 如果li里面的sizeid和没有库存的商品详情id(gd_id)相等则加上阴影
	   									if(a[i]==$(this).attr('sizeid')){
	   										$(this).addClass('tab-dis');
	   									}
	   								});
   								};
   							}else{
								for (var i = 0; i < a.length; i++) {
									a[i]=a[i]-num;
									// 遍历颜色那个li
									$('.tab-con').children('.tab-pic').each(function(){
										
										// 如果li里面的sizeid和没有库存的商品详情id(gd_id)相等则加上阴影
										if(a[i]==$(this).attr('sizeid')){
											$(this).addClass('tab-dis');
										}
									});
								};
   							}	
   						}
   					
					})
			     }
			  }
			}) 
	   </script>
	   <div class="tips j-tips f-hide"></div> 
	   <div class="number u-formctr"> 
	    <span class="name name-1">数量</span> 
	    <div class="field"> 
	     <div class="j-numcount f-ib">
	      <div class="u-selnum"> 
	       <span class="j-reduce less"><i class="hx"></i></span> 
	       <input type="text" class="j-input" /> 
	       <span class="j-add more"><i class="hx"></i><i class="sx"></i></span> 
	      </div>
	     </div> 
	     <span class="j-detail-stock stock" style="display: none;">库存紧张</span> 
	    </div> 
	   </div> 
	   <div class="btns">

	   <!-- 判断用户是否登录，登录状态则跳转到下单页面，否则跳到登陆页面 -->
	   @if(session()->has('u_account'))
	    	<a naturenum="{{$data->g_nature}}" class="bbttnn btn w-button w-button-ghost w-button-xl j-btn-directBuy"><span>立即购买</span></a> 
	   @else
	   		<a href="/home/login" naturenum="{{$data->g_nature}}" class="btn w-button w-button-ghost w-button-xl j-btn-directBuy"><span>立即购买</span></a>
	   @endif

	   <!-- 提示信息，让用户选择商品规格 -->
	   <div class="m-notify shang show" style="display: none;">
	   <div class="text j-text">请选择商品规格</div>
	   </div>
	   <!-- 点击立即购买执行的js -->
	   <script type="text/javascript">
	   		$('.bbttnn').live('click',function(){

	   			// 该商品有几个属性
	   			a=$(this).attr('naturenum');
	   			if(a==1){

	   				// 判断商品规格是否选中,选中则什么也不执行，否则显示提示信息，请选择规格，并阻止默认行为
	   				b=$('.tab-con').find('a.tab-sel');
	   				c=$('.tab-conss').find('a.tab-sel');
	   				if(b.length==1||c.length==1){

	   					// 该商品规格是图片，将商品g_id，和商品详情gd_id和选择商品数量num传递到订单页面
	   					if(b.length==1){
	   						gdid=b.find('input.gdid').val();
	   						num=$('.j-input').val();
	   						href='/home/dingdan?g_id='+{{$data->g_id}}+'&gd_id='+gdid+'&num='+num+'';
	   						$(this).attr('href',href);
	   					}else{

	   						// 该商品规格是文字，将商品g_id，和商品详情gd_id和选择商品数量num传递到订单页面
	   						gdid=c.find('.gdid').val();
	   						num=$('.j-input').val();
	   						href='/home/dingdan?g_id='+{{$data->g_id}}+'&gd_id='+gdid+'&num='+num+'';
	   						$(this).attr('href',href);
	   					}
	   				}
	   				else{

	   					// 显示提示信息
	   					$('.shang').css('display','block');

	   					// 定时器，2秒后提示信息消失
	   					setTimeout(function(){
				           $('.shang').hide();
				        },2000)
	   					return false;
	   				}
	   			}else{

		   				// 判断商品规格是否选中,两个都选中则什么也不执行，否则显示提示信息，请选择规格，并阻止默认行为
		   				d=$('.tab-con').find('a.tab-sel');
		   				e=$('.tab-conss').find('a.tab-sel');
		   				if(d.length==1&&e.length==1){

		   			     // 该商品有两个属性(颜色和尺码)
	   					// 该商品的id(g_id)
	   					gid=$('.tab-con').find('a.tab-sel').find('input.gid').val();

	   					// 该商品的详情id(gd_id)
	   					gdid=$('.tab-con').find('a.tab-sel').find('input.gdid').val();

	   					// 选择的该商品的数量
	   					num=$('.j-input').val();

	   					href='/home/dingdan?g_id='+gid+'&gd_id='+gdid+'&num='+num+'';
		   				$(this).attr('href',href);	 
	   				}else{

	   					// 显示提示信息
	   					$('.shang').css('display','block');

	   					// 定时器，2秒后提示信息消失
	   					setTimeout(function(){
				           $('.shang').hide();
				        },2000)
	   					return false;
	   				}
	   			}
	   		});
	   </script>
	   <!-- 判断用户是否登录，登录状态则跳转到购物车，否则跳到登陆页面 -->
	   @if(session()->has('u_account'))
	   <a href="javascript:void(0);" naturenum="{{$data->g_nature}}" class="btn w-button w-button-primary w-button-xl j-btn-addcart gou"><span><i class="w-icon icon-cart-detail"></i>加入购物车</span></a> 
	   <!-- 点击购物车触发的js -->
	   <script type="text/javascript">
	   		$('.gou').click(function(){

	   			// 获取当前购物车里面商品的数量
	   			cartnums=$('.j-cart-nums').html();

	   			// 获取当前购物车里面的总的金额
	   			cartmoney=$('#cartmoney').html();

	   			// 获取购买商品的数量
	   			num=$('.j-input').val();

	   			// 获取商品属性(一个还是两个)
	   			a=$(this).attr('naturenum');

	   			// 开始
	   			if(a==1){

	   				// 判断商品规格是否选中,选中则什么也不执行，否则显示提示信息，请选择规格，并阻止默认行为
	   				b=$('.tab-con').find('a.tab-sel');
	   				c=$('.tab-conss').find('a.tab-sel');
	   				if(b.length==1||c.length==1){
	   					// 先判断该商品的属性是图片还是文字，然后获取点中该商品的详情id(gd_id)
	   					cc=$('.tab-con').find('a.tab-sel').find('img');
	   					dd=cc.length;
	   					pp='';
	   					if(cc.length==1){

	   						// 该商品属性是图片，获取点中的该商品的id(gd_id)和点中的图片
	   						aa=$('.tab-con').find('a.tab-sel').find('input').val();
	   						pp=$('.tab-con').find('a.tab-sel').find('img').attr('src');
	   					}else{

	   						// 该商品属性是文字，获取点中的该商品的id(gd_id)
	   						aa=$('.tab-conss').find('a.tab-sel').find('input').val();	
	   					}
	   					// ajax
	   					$.ajaxSetup({
					        headers: {
					            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					        }
	   					});

	   					if(pp!=''){
	   						// 商品有一个属性，且是图片的，加购物车
	   						$.post('/home/addgou',{aa:aa,a:a,dd:dd,pp:pp,num:num},function(data){
	   							a=(eval("("+data+")"));

	   							 //如果购物车里面没有该商品 
	   							if(a.res==null){
		   							str='<div class="cartItem"><div class="item item-left"><a href="/item/detail?id=1080001"><img src="'+pp
		   							+'" /></a></div><div class="item item-middle"><p><a title="随简条纹羊毛披肩" href="/item/detail?id=1080001">'+a.g_name
		   							+'</a></p><p><span title=" 柔暖白" class="specValue"> '+a.gd_nature
		   							+'</span> <span class="count" id="'+a.gd_id+'">'+num
		   							+'</span></p></div><div class="item item-right"><p class="price">'+a.g_price
		   							+'</p><p class="deleteItem j-deleteItem"><i style="width:10px;height:10px;display:inline-block;" class="w-icon-normal icon-normal-cart-close"></i></p><input type="hidden" value="'+aa
		   							+'" /></div></div>';

		   							// 将该商品的信息添加到购物车
		   							$('.cartInfo-inner').prepend(str);
	   							}else{

	   								// 更新购物车里面的商品数量
	   								$('#'+a.gd_id+'').html(a.carg_num);
	   							}

	   							// 计算出点击该商品的价钱
	   							agprice=num*a.g_price;

	   							// 更新购物车中商品的总数量
	   							cartnums=parseInt(cartnums)+parseInt(num);
	   							$('.j-cart-nums').html(cartnums);
	   							$('.j-cart-num2').html(cartnums);
	   							
	   							// 更新购物车中商品的总价钱
	   							if(cartmoney==0){
	   								cartmoney=parseInt(agprice);
	   							}else{
	   								cartmoney=parseInt(cartmoney)+parseInt(agprice);
	   							}
								$('#cartmoney').html(cartmoney);
	   						})
	   					}else{

	   						// 商品有一个属性，且是文字的，加购物车，图片是第一张大图
	   						$.post('/home/addgou',{aa:aa,a:a,dd:dd,num:num},function(data){
	   							a=(eval("("+data+")")); 
	   							if(a.res==null){
	   								str='<div class="cartItem"><div class="item item-left"><a href="/item/detail?id=1009012"><img src="'+a.g_pic
	   								+'" /></a></div><div class="item item-middle"><p><a title="可水洗舒柔丝羽绒枕" href="/item/detail?id=1009012">'+a.g_name
	   								+'</a></p><p><span title=" 舒柔枕" class="specValue">'+a.gd_nature
	   								+'</span> <span class="count" id="'+a.gd_id+'">'+num
	   								+'</span></p></div><div class="item item-right"><p class="price">'+a.g_price
	   								+'</p><p class="deleteItem j-deleteItem"><i style="width:10px;height:10px;display:inline-block;" class="w-icon-normal icon-normal-cart-close"></i></p><input type="hidden" value="'+aa
	   								+'" /></div></div>';
	   								$('.cartInfo-inner').prepend(str);
	   							}else{
	   								$('#'+a.gd_id+'').html(a.carg_num);
	   							}

	   							// 计算出点击改商品的价钱
	   							agprice=num*a.g_price;

	   							// 更新购物车中商品的总数量
	   							cartnums=parseInt(cartnums)+parseInt(num);
	   						    $('.j-cart-nums').html(cartnums);
	   							$('.j-cart-num2').html(cartnums);

	   							// 更新购物车中商品的总价钱
	   							if(cartmoney==0){
	   								cartmoney=parseInt(agprice);
	   							}else{
	   								cartmoney=parseInt(cartmoney)+parseInt(agprice);
	   							}
								$('#cartmoney').html(cartmoney);
	   						})
	   					}
	   					
	   				    // 显示加入购物车成功，并弹出购物车的模态框
	   					$('#qqq').show(500);
						setTimeout(function(){
							$('#qqq').hide(300);
						},1200)
						$('.j-button-cart').trigger('mouseover');
						setTimeout(function(){
							$('.j-newMiniCart').slideUp(300);
						},1800)
	   				}else{

	   					// 显示提示信息(请选择商品规格)
	   					$('.shang').css('display','block');

	   					// 定时器，2秒后提示信息消失
	   					setTimeout(function(){
				           $('.shang').hide();
				        },2000)
	   					return false;
	   				}
	   			}else{

	   				//该两个属性有两个属性(颜色和尺码)
	   				// 判断商品规格是否选中,两个都选中则什么也不执行，否则显示提示信息，请选择规格，并阻止默认行为
	   				d=$('.tab-con').find('a.tab-sel');
	   				e=$('.tab-conss').find('a.tab-sel');
	   				if(d.length==1&&e.length==1){

	   					// 该商品有两个属性(颜色和尺码)
	   					// 该商品的id(g_id)
	   					bb=$('.tab-con').find('a.tab-sel').find('input.gid').val();

	   					// 该商品的图片
	   					pp=$('.tab-con').find('a.tab-sel').find('img').attr('src');

	   					// 该商品的颜色
	   					dd=$('.tab-con').find('a.tab-sel').find('.title').html();

	   					// 该商品的尺码
	   					ee=$('.tab-conss').find('a.tab-sel').find('.txt').html();
	   					
	   					// ajax
	   					$.ajaxSetup({
					        headers: {
					            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					        }
	   					});
	   					$.post('/home/addgou',{a:a,bb:bb,pp:pp,dd:dd,ee:ee,num:num},function(data){
	   						a=(eval("("+data+")")); 
	   							if(a.res==null){
	   								str='<div class="cartItem"><div class="item item-left"><a href="/item/detail?id=1131008"><img src="'+pp
	   									 +'"></a></div><div class="item item-middle"><p><a href="/item/detail?id=1131008" title="男式运动连帽开衫">'+a.g_name
	   									 +'</a></p><p><span class="specValue" title=" 蒂凡尼蓝/白 175/96A">'+dd+' '+ee
	   									 +'</span><span class="count" id="'+a.gd_id+'">'+num
	   									 +'</span></p></div><div class="item item-right"><p class="price">'+a.g_price
	   									 +'</p><p class="deleteItem j-deleteItem"><i class="w-icon-normal icon-normal-cart-close" style="width:10px;height:10px;display:inline-block;"></i></p><input value="'+a.gd_id
	   									 +'" type="hidden"></div></div>';
	   								$('.cartInfo-inner').prepend(str);
	   							}else{
	   								$('#'+a.gd_id+'').html(a.carg_num);
	   							}

	   							// 计算出点击改商品的价钱
	   							agprice=num*a.g_price;

	   							// 更新购物车中商品的总数量
	   							cartnums=parseInt(cartnums)+parseInt(num);
	   							    $('.j-cart-nums').html(cartnums);
	   							    $('.j-cart-num2').html(cartnums);

	   							// 更新购物车中商品的总价钱
	   							if(cartmoney==0){
	   								cartmoney=parseInt(agprice);
	   							}else{
	   								cartmoney=parseInt(cartmoney)+parseInt(agprice);
	   							}
								$('#cartmoney').html(cartmoney);

	   					})

	   					
	   					// 显示加入购物车成功，并弹出购物车的模态框
	   					$('#qqq').show(500);
						setTimeout(function(){
							$('#qqq').hide(300);
						},1200)

						// 并弹出购物车的模态框
						$('.j-button-cart').trigger('mouseover');
						setTimeout(function(){
							$('.j-newMiniCart').slideUp(300);
						},1800)
	   					// 
	   				}
	   				else{

	   					// 显示提示信息
	   					$('.shang').css('display','block');

	   					// 定时器，2秒后提示信息消失
	   					setTimeout(function(){
				           $('.shang').hide();
				        },2000)
	   					return false;
	   				}

	   			}

	   		})
	   </script>
	   @else
	   <a href="/home/login" class="btn w-button w-button-primary w-button-xl"><span><i class="w-icon icon-cart-detail"></i>加入购物车</span></a> 
	   @endif
		
		<!-- 判断用户是否登录，登陆则可以点击收藏否则跳转到登陆页面 -->
	    @if(session()->has('u_account'))
	    @if($res!=null)
	    <div title="点击收藏" class="w-collectZone hasCollect j-collectBtns" gid="{{$data->g_id}}"> 
	    @else
	    <div title="点击收藏" class="w-collectZone nopCollect j-collectBtns" gid="{{$data->g_id}}"> 
	    @endif
	      <div class="zone-1"> 
	        <div class="top top-1"> 
	          <span class="w-icon-normal icon-normal-collectEpt"></span> 
	        </div> 
	        <div class="top top-2"> 
	          <span class="w-icon-normal icon-normal-collectFull"></span> 
	        </div> 
	      </div> 
	      <div class="zone-2"> 
	        <div class="bottom bottom-1"> 
	          <p class="textOne">收藏</p> 
	        </div> 
	        <div class="bottom bottom-2"> 
	          <p class="textTwo">已收藏</p> 
	        </div> 
	      </div> 
	    </div>
	    @else
	    <!-- 跳到登陆页面 -->
	    <a href="/home/login">
	     <div title="点击收藏" class="w-collectZone  j-collectBtn" > 
	       <div class="zone-1"> 
	         <div class="top top-1"> 
	           <span class="w-icon-normal icon-normal-collectEpt"></span> 
	         </div> 
	         <div class="top top-2"> 
	           <span class="w-icon-normal icon-normal-collectFull"></span> 
	         </div> 
	       </div> 
	       <div class="zone-2"> 
	         <div class="bottom bottom-1"> 
	           <p class="textOne">收藏</p> 
	         </div> 
	         <div class="bottom bottom-2"> 
	           <p class="textTwo">已收藏</p> 
	         </div> 
	      </div> 
	     </div>
	    </a>
	    @endif
	   </div> 
	  </div> 
	 </div> 
	 <!-- 促销模块 包含套装和推荐商品 --> 
	 <div class="promContainer"> 
	  <div class="w-promHd"> 
	   <span data-index="1" class="promTabItem">优惠套装</span> 
	   <span data-index="2" class="promTabItem show">大家都在看</span> 
	   <div class="rightPad"></div> 
	  </div> 
	  <div class="promCt"> 
	   <div id="promItem-1" class="promItem"></div> 
	   <div id="promItem-2" class="promItem show"> 
	    <div class="bd"> 
	     <div class="m-recommend "> 
	      <div class="recommend-wrap"> 
	       <div class="recommend-content"> 
	        <ul id="j-recommendItemList" class="m-recommendItemList slick-initialized slick-slider"> 
	         <div class="slick-list draggable" aria-live="polite">
	          <div class="slick-track" style="opacity: 1; width: 1920px; transform: translate3d(0px, 0px, 0px);" role="listbox">

			@foreach($sui as $key1=>$value1)
	           <li class="item slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 210px;" tabindex="0" role="option" aria-describedby="slick-slide00"> 
	            <div class="m-product  j-product"> 
	             <div class="hd"> 
	              <a target="_blank" title="{{$value1->g_name}}" href="/home/xiangqing?id={{$value1->g_id}}&gcid={{$value1->gc_id}}&gcpid={{$value1->gc_pid}}" tabindex="0"> <img alt="{{$value1->g_name}}" data-original="{{explode(',',$value1->g_pic)[4]}}" src="{{explode(',',$value1->g_pic)[4]}}" class="img j-lazyload img-lazyload img-lazyloaded" style="opacity: 1;" /> 
	                </a> 
	             </div> 
	             <div class="bd"> 
	              <h4 class="name"> <a target="_blank" title="{{$value1->g_name}}" href="/home/xiangqing?id={{$value1->g_id}}&gcid={{$value1->gc_id}}&gcpid={{$value1->gc_pid}}" class="name" tabindex="0"> {{$value1->g_name}} </a> </h4> 
	              <p class="price"> <span>&yen;{{$value1->g_price}}.00</span> </p> 
	             </div> 
	            </div> </li>
			@endforeach
	
	          
	           
	        
	           
	          </div>
	         </div> 
	        </ul> 
	       </div> 
	       
	      </div> 
	     </div> 
	    </div> 
	   </div> 
	  </div> 
	 </div> 
	 <!-- 推荐商品end --> 
	 <div style="margin-top: -20px;" class="bd" id="fix"> 
	  <div class="left"> 
	   <div class="detail-nav j-nav-tab"> 
	    <ul class="nav"> 
	     <li data-con="j-nav-html" id="aa" class="item item-active j-nav-item"> <a href="javascript:void(0);">详情</a> </li> 
	     <li data-con="j-nav-comment" id="bb" class="item j-nav-item"> <a href="javascript:void(0);">评价<span class="num">（{{$com}}）</span></a> </li> 
	     <li class="bg"></li> 
	    </ul> 
	   </div> 
	   <div class="detail-html j-nav-con j-nav-html"> 
	    {!!$data->g_details!!}
	    <div class="other j-report-con"> 
	     <div class="tt">
	      质检报告
	     </div> 
	     <div class="con"> 
	      <a class="img-wrap j-report-zoomout" href="javascript:void(0);"> <img alt="" src="http://yanxuan.nosdn.127.net/758a8768b5c30651df2037d2a63c04e6.jpg" /> <i class="w-icon-normal icon-normal-detail-zoomout"></i> 
	       <div class="cover">
	        <span class="txt">查看完整报告<i class="w-icon-normal icon-normal-detail-aright"></i></span>
	       </div> </a> 
	     </div> 
	    </div> 
	    <div class="other"> 
	     <div class="tt">
	      常见问题
	     </div> 
	     <div class="con"> 
	      <ul> 
	       <li class="issue"> 
	        <div class="question">
	         购买运费如何收取？
	        </div> 
	        <div class="answer">
	         单笔订单金额（不含运费）满88元免邮费；不满88元，每单收取10元运费。
	         <br />(港澳台地区需满500元免邮费；不满500元，每单收取30元运费)
	        </div> </li> 
	       <li class="issue"> 
	        <div class="question">
	         使用什么快递发货？
	        </div> 
	        <div class="answer">
	         严选默认使用顺丰快递发货（个别商品使用其他快递），配送范围覆盖全国大部分地区（港澳台地区除外）。
	        </div> </li> 
	       <li class="issue"> 
	        <div class="question">
	         如何申请退货？
	        </div> 
	        <div class="answer">
	         1.自收到商品之日起30日内，顾客可申请无忧退货，退款将原路返还，不同的银行处理时间不同，预计1-5个工作日到账；
	         <br />2.内裤和食品等特殊商品无质量问题不支持退货
	         <br />3.退货流程：
	         <br />确认收货-申请退货-客服审核通过-用户寄回商品-仓库签收验货-退款审核-退款完成；
	         <br />4.因网易严选产生的退货，如质量问题，退货邮费由网易严选承担，退款完成后会以现金券的形式报销。因客户个人原因产生的退货，购买和寄回运费由客户个人承担。
	        </div> </li> 
	       <li class="issue"> 
	        <div class="question">
	         如何开具发票？
	        </div> 
	        <div class="answer">
	         1.如需开具普通发票，请在下单时选择“我要开发票”并填写相关信息（APP仅限2.4.0及以上版本）；
	         <br />2.如需开具增值税专用发票，请在购买后联系客服办理；
	         <br />3.可选开票内容：
	         <br />订单中含有办公用品（箱包、文具、口罩）--办公用品等、耗材等、日用品、家居用品、食品、酒/饮料、服饰、化妆品；
	         <br />不含有办公用品--日用品、家居用品、食品、酒/饮料、服饰、化妆品；
	         <br />订单商品为礼品卡--预付卡。
	        </div> </li> 
	      </ul> 
	     </div> 
	    </div> 
	   </div> 

	{{--{{dd($comm)}}--}}
		<!-- 评论页开始 -->
	  <div id="nav-comment" class="detail-comment j-nav-con j-nav-comment f-hide">
	     <ul class="m-commentList">
	      <li>
	       <div class="m-commentNav j-commentNav">
	        <div class="w-radio f-left active s-gold">
	         <input type="radio" checked="checked" value="0" id="allComment" name="commentCategory" class="radio" />
	         <label class="ml3" for="allComment">全部</label>
	        </div>
	       </div></li>
	      @foreach($comm as $k=>$v)
	      <li class="item f-clearfix">
	       <div class="m-commentUser">
	        <div class="avatarWarp">
	         <img alt="d****i" src="/homeCSS{{$v->u_pic}}" />
	         <div class="mask w-icon-normal icon-normal-mask"></div>
	        </div>
	        <div class="username-withIcon">
	         @if($v->u_integral>0&&$v->u_integral<10000)
	         <a title="小白生活家" href="/membership/index" class="w-icon-member member-comment-vip1"></a>
	          @elseif($v->u_integral>=10000&&$v->u_integral<50000)
	         <a title="小白生活家" href="/membership/index" class="w-icon-member member-comment-vip2"></a>
	         @elseif($v->u_integral>=50000 && $v->u_integral<100000)
	         <a title="小白生活家" href="/membership/index" class="w-icon-member member-comment-vip3"></a>
	         @elseif($v->u_integral>=100000)
	         <a title="小白生活家" href="/membership/index" class="w-icon-member member-comment-vip4"></a>
	         @endif
	         <div class="username f-center">
	          {{$v->u_account}}
	         </div>
	        </div>
	       </div>
	       <div class="m-comment f-clearfix">
	        <div class="content">
	         {{$v->co_comment}}
	        </div>
			
	        <div class="meta">
	        @foreach($mm[$k] as $a=>$b)
	        @if($b->g_nature==1)
	          <div class="skuInfo">
	          <span class="mr20">{{$b->g_naturename}}:{{$b->gd_nature}}</span>
	         </div>
	         @else if($b->g_nature==2)
	         <div class="skuInfo">
	          <span class="mr20">颜色:{{$b->gd_color}}|尺寸:{{$b->size}}</span>
	         </div>
	         @endif
	         @endforeach
	         <div class="right">
	          <div class="createTime">
	           {{date('Y-m-d H:i:s',$v->co_time)}}
	          </div>
	         </div>
	        </div>
	        
	       </div>
	       </li>
	     @endforeach
	     </ul>
	    </div>
		<!-- 评论页页结束 -->		
	   <div class="detail-comment-pager j-nav-con j-nav-comment f-hide"> 
	    <div class="m-pager m-hrz " id="pager">
	    <div class="m-wrap">
	    <!-- 开始 -->
	    <!-- 第一部分 -->  
	    <a href="javascript:void(0)" hidefocus="true" class="w-linkicon pagel " onclick="page(1)"><span class="txt">首页</span></a>  </div>
	    <div class="m-wrap">
	    <a href="javascript:void(0)" hidefocus="true" class="w-linkicon pagel " onclick="page(<?php echo $prev ?>)"><span class="txt">上一页</span></a> </div>
	    @foreach($pp as $key=>$val)  
	    @if($val == $page) 
	    <div class="m-wrap">
	    <span class="txt"> 
	    {{$val}}  </span></div>
	    @else  
	    <div class="m-wrap">
	    <a href="javascript:void(0)" class="w-linkicon pagel " onclick="page({{$val}})"><span class="txt">{{$val}}</span></a>  </div>
	    @endif  
	    @endforeach 
	     <div class="m-wrap">
	    <a href="javascript:void(0)"  class="w-linkicon pagel " onclick="page(<?php echo $next ?>)"><span class="txt">下一页</span></a> </div>
	    <div class="m-wrap"> 
	    <a href="javascript:void(0)" hidefocus="true" class="w-linkicon pagel " onclick="page(<?php echo $sums ?>)"><span class="txt">尾页</span></a></div><br />  
	    <!-- 第二部分 -->  
	    
	    
	    <!-- 结束 -->
            <!-- <a href="javascript:;" hidefocus="true" class="w-linkicon pagel f-disabled" data-page="0">
            <span class="w-icon icon-pagel icon-pagel_disabled"></span>
            <span class="txt">上一页</span>
            </a>
        </div><div class="m-wrap">
            <a href="javascript:;" hidefocus="true" class="w-linkicon w-linkicon-selected" data-page="1">
            <span class="txt">1</span>
            </a>
        </div><div class="m-wrap">
            <a href="javascript:;" hidefocus="true" class="w-linkicon pager " data-page="2">
            <span class="txt">下一页</span>
            <span class="w-icon icon-pager  "></span>
            </a> -->
        </div>
	    <!--  <div class="m-wrap"> 
	     {!! $comm->appends(['id'=>$data->g_id,'gcid'=>$title2->gc_id,'gcpid'=>$title1->gc_id])->render() !!}
	     </div> -->
	    </div> 
	   </div> 
	  </div>
	  <div class="right"> 

	   
	  </div> 
	 </div> 
	</div> 
	</div> 
	<form id="j-directBuySubmitForm" target="_self" method="post" action="/order/confirm?sfrom=1064017&amp;_stat_referer=itemDetail_buy"> 
	<input type="hidden" name="orderCart" /> 
	</form> 



	<!-- 遮罩框显示信息 -->
		
		  <div class="m-notify hidden" id="rrr" style="opacity: 0.5">
		   <div class="text j-text">
		    本商品1件起售
		   </div>
		  </div>

		  <div class="m-notify hidden" id="qqq" style="opacity: 0.5">
		   <div class="text j-text">
		    添加购物车成功
		   </div>
		  </div>

		  <div class="m-notify hidden" id="www" style="opacity: 0.5">
		   <div class="text j-text">
		    取消收藏
		   </div>
		  </div>
		 
	<!-- 遮罩框显示结束 -->
	  
	  
	 
@endsection

@section('js')
	<script>	
	//实时监控input对象 属性变化
		$('.j-input').bind('input',function(){
			
			x = $(this).val();
			if(x == 0){
				x = 1;
				$(this).val(x);
			}else if(x>=50)
			{
				x = 50;
				$(this).val(x);
			}
			if(isNaN(x)){
				x = 1;
				$(this).val(x);
			}
			
		})
	
	//商品数量增加
	
	$(function(){
		var i = 1;
		$('.j-input').val(i);
		$('.less').addClass('z-dis');

		$('.more').click(function(){
		   
			// alert(222);
			 i = parseInt($('.j-input').val());
			// console.log(i);
			i += 1;
			$('.less').removeClass('z-dis');
			$('.j-input').val(i);
		})
		$('.less').click(function(){
		   
			i = parseInt($('.j-input').val());
			i -= 1;

			if(i < 1){
				$('#rrr').show(500);
				setTimeout(function(){
					$('#rrr').hide(300);
				},1200)
			}

			if(i <= 1){
				i = 1;
				$('.less').addClass('z-dis');
				// $('.m-notify').show();
			}

			$('.j-input').val(i);
		})
	})

	//商品收藏(事件)
	$(function(){
		$('.j-collectBtns').click(function(){
			link=$(this);

			// 获取该商品的id(g_id)
			gid=$(this).attr('gid');

			//ajax
			$.ajaxSetup({
	          headers: {
	              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	          }
	         });

			// 判断该商品是收藏状态还是未收藏状态
			$.post('/home/collection',{gid:gid},function(data){

				// 1为执行取消收藏，0为添加收藏
				if(data==1){
					link.removeClass('hasCollect');
					link.addClass('nopCollect');
				}else{
					link.removeClass('nopCollect');
					link.addClass('hasCollect');
				}
			})
			
		})
	})

	//商品图片悬停  
	$(function(){
		$('#ooo').children('li').mouseover(function(){
			// alert(222);
			// console.log(222);
			$('#ooo').children('li').removeClass('z-active');
			$(this).addClass('z-active');
			o = $(this).children('a').children('img').attr('src');
			// console.log(o);
			$('.view').children('img').attr('src',o);
		})
	})

	//商品详情页和评论页切换
	$(function(){
		//点击详情页
		$('#aa').click(function(){
			// alert(222); //详情 绑定成功
			$('.j-nav-item').removeClass('item-active');
			$(this).addClass('item-active');
			$('#nav-comment').addClass('f-hide');
			$('.j-nav-comment').addClass('f-hide');
			$('.j-nav-html').removeClass('f-hide');
		})

		//点击评论页  其中评论个数在此写死  后面有需要自行从数据库遍历 count
		$('#bb').click(function(){
			// alert(222);
			$('.j-nav-item').removeClass('item-active');
			$(this).addClass('item-active');
			$('#nav-comment').removeClass('f-hide');
			$('.j-nav-comment').removeClass('f-hide');
			$('.j-nav-html').addClass('f-hide');
		})
	})

		//评论页图片放大显示
		$(function(){
			$('.picList').children('li').click(function(){
				zz = $(this).children('img').attr('src');
				sre = $(this).parents('ul').next().next();
				// alert(222);//绑定成功
				$(this).parents('ul').next().next().slideDown();
				$('.picList').children('li').removeClass('active');
				$(this).addClass('active');
				
				// console.log(zz);
				//找到大图的路径
				sre.find('img').attr('src',zz);
				// console.log(src);

				
				sre.children('.m-lightbox').children('.close').click(function(){
					sre.slideUp();
				})
			})
		})

		// ajax无刷新分页
		var jiao1 = $('.jiao1').html();
		// alert
		var jiao2 = $('.jiao2').html();
		var jiao3 = $('.jiao3').html();
			function page(page){  
			$.ajax({  
			type:"get",  
			url:"/home/pagepro",  
			data:{  
			page:page,id:jiao1,gcid:jiao2,gcpid:jiao3
			},  
			success:function(msg){  
			if(msg){  
			$("#fix").html(msg)  
			}  
			}  
			})  
			}

	// 限时优惠活动js
	var lid = $('.jiao4').html();
//	alert(lid);
	var bac = new Date();
	if(new Date($('.xians1').html())>= new Date() && new Date($('.xians2').html())<= new Date()){
//		alert(1111);
	$(function(){
		init = setInterval(function(){
			// 获取活动结束时间
			var endtime = new Date($('.xians1').html());
			// 获取当前时间
			var nowtime = new Date();
			// 得出剩余活动时间
			var dtime = Math.floor((endtime.getTime()-nowtime.getTime())/1000);
			// 判断如果活动时间小于零不让他继续执行
			// 获取活动开始时间

			if(dtime<=0)
			{
				clearInterval(init);
//				alert(dtime);
				// 发送ajax之前防备csrf攻击
				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					},
					async:false
				});
				// 发送ajax
				$.post('/home/del',{id:lid},function(data){
					 if(data){
						 location.reload(true);
					 }

				})

		}
			var h=0;
			var m=0;
			var s=0;
			// 获取小时
			h=Math.floor(dtime/60/60%24);
			// 获取分钟
			m=Math.floor(dtime/60%60);
			// 获取秒
			s=Math.floor(dtime%60);
			$('.shi').html(h);
			$('.fen').html(m);
			$('.miao').html(s);
		},1000)
	})
	}else{
	$(function(){
		inte = setInterval(function(){
			// 获取活动结束时间
			var endtime = new Date($('.xians2').html());
//			alert(endtime);
			// 获取当前时间
			var nowtime = new Date();
			// 得出剩余活动时间
			var dtime = Math.floor(((endtime.getTime()+2)-nowtime.getTime())/1000);
			// 判断如果活动时间小于零不让他继续执行
			// 获取活动开始时间
			if(dtime<=0)
			{
				
				clearInterval(inte);
				location.reload(true);
			}
			var h=0;
			var m=0;
			var s=0;
			// 获取小时
			h=Math.floor(dtime/60/60%24);
			// 获取分钟
			m=Math.floor(dtime/60%60);
			// 获取秒
			s=Math.floor(dtime%60);
			$('.shi').html(h);
			$('.fen').html(m);
			$('.miao').html(s);
		},1000)
	})
	}
	</script>
@endsection