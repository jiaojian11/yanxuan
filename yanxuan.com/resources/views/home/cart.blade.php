@extends('home.layout.index')

@section('contents')
	<link rel="stylesheet" href="{{asset('/homeCSS/css/cart-52e20e8dc4.css')}}" type="text/css" />
	  <div data-reactid=".0.0" class="g-row">
	   <div data-reactid=".0.0.0" class="m-cart">
	    <div data-reactid=".0.0.0.0" id="j-cart-body">
	     <div data-reactid=".0.0.0.0.0" style="display: none;">
	      <div data-reactid=".0.0.0.0.0.0" class="cart-empty">
	       <div data-reactid=".0.0.0.0.0.0.0" class="warp warp-1">
	        <img data-reactid=".0.0.0.0.0.0.0.0" src="http://yanxuan.nosdn.127.net/dcde6cb32679fde9bccd0dee35a4b56e.gif" />
	       </div>
	      </div>
	     </div>
		<div data-reactid=".0.0.0.0.2.0"  class="cart-empty" style="display:none">
		 <div data-reactid=".0.0.0.0.2.0.0" class="warp">
		  <i data-reactid=".0.0.0.0.2.0.0.0" class="w-icon-normal icon-normal-cart-empty"></i>
		  <p data-reactid=".0.0.0.0.2.0.0.1" class="text">购物车还是空滴</p>
		  <a data-reactid=".0.0.0.0.2.0.0.2" href="/" class="shop">继续购物&gt;&gt;</a>
		 </div>
		</div>

		@if(empty($res))

		<div data-reactid=".0.0.0.0.2.0" id="one" class="cart-empty">
		 <div data-reactid=".0.0.0.0.2.0.0" class="warp">
		  <i data-reactid=".0.0.0.0.2.0.0.0" class="w-icon-normal icon-normal-cart-empty"></i>
		  <p data-reactid=".0.0.0.0.2.0.0.1" class="text">购物车还是空滴</p>
		  <a data-reactid=".0.0.0.0.2.0.0.2" href="/" class="shop">继续购物&gt;&gt;</a>
		 </div>
		</div>
		@else

	     <div data-reactid=".0.0.0.0.1" style="display: block;">
	      <div data-reactid=".0.0.0.0.1.0" class="tt">
	       <div data-reactid=".0.0.0.0.1.0.0" class="w w1 left">
	        <div data-reactid=".0.0.0.0.1.0.0.0" class="w-chkbox" >
	         <input type="checkbox" data-reactid=".0.0.0.0.1.0.0.0.0" checked="" id="ins" />
	         <span data-reactid=".0.0.0.0.1.0.0.0.1" class="all">全选</span>
	        </div>
	       </div>
	       <div data-reactid=".0.0.0.0.1.0.1" class="w w2 left">
	        商品信息
	       </div>
	       <div data-reactid=".0.0.0.0.1.0.2" class="w w3">
	        单价
	       </div>
	       <div data-reactid=".0.0.0.0.1.0.3" class="w w4">
	        数量
	       </div>
	       <div data-reactid=".0.0.0.0.1.0.4" class="w w5">
	        小计
	       </div>
	       <div data-reactid=".0.0.0.0.1.0.5" class="w w6">
	        活动
	       </div>
	      </div>
	      <div data-reactid=".0.0.0.0.1.1">
	       <div data-reactid=".0.0.0.0.1.1.$0" class="cart-group">

	       @foreach($res as $k=>$v)
	       
	        <div data-reactid=".0.0.0.0.1.1.$0.2:$c10220040" vid='{{$v->u_id}}' class="cart-item f-cb">
	         <div data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.0" class="item w7">
	          <div data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.0.0" class="ck">
	           <div data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.0.0.0" class="w-chkbox">
	            <input type="checkbox" data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.0.0.0.0" checked=""  class="" />
	           </div>
	          </div>
	         </div>
	         <div data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.1" class="item w8">
	          <div data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.1.0" class="pic">

	           <a data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.1.0.0" target="_blank" href="/home/xiangqing?id={{$v->g_id}}&gcid={{$v->gc_id}}&gcpid={{$v->gc_pid}}"><img data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.1.0.0.0" alt="" src="{{explode(',',$v->g_pic)[4]}}" /></a>
	          </div>
			
			
	          <div data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.1.1" class="nameCon f-word-break f-text-overflow">

	           <a data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.1.1.0" target="_blank" href="/home/xiangqing?id={{$v->g_id}}&gcid={{$v->gc_id}}&gcpid={{$v->gc_pid}}" class="pname f-word-break f-text-overflow">{{$v->g_name}}</a>
				 @if($v->g_yhid>0)
				   @if(empty($ff[$k]))

					  <div data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.1.1.1" class="spec">
					  </div>
					  </div>
						 <div data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.1.2" class="selectSkuCon"></div>
					 </div>
							<div data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.2:$0" class="item item-1 w3">
								<p data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.2:$0.0" class="price oprice"></p>
								<p data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.2:$0.1" class="price aprice"><span data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.2:$0.1.0">&yen;</span><span data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.2:$0.1.1">{{$v->g_price}}</span></p>
							</div>
				  @elseif($ff[$k]->l_ctime<time()&&$ff[$k]->l_ltime>=time())


						<div data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.1.1.1" class="spec">
						  <span class="u-promotion-tag">限时购</span>
					  </div>
						</div>
				   			 <div data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.1.2" class="selectSkuCon"></div>
					   </div>
						  <div data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.2:$0" class="item item-1 w3">
							  <p style="text-decoration:line-through;color:#999">¥{{$v->g_price}}.00</p>
							  <p data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.2:$0.1" class="price aprice"><span data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.2:$0.1.0">&yen;</span><span data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.2:$0.1.1">{{$v->g_coupon}}</span></p>
						  </div>

				  @elseif($ff[$k]->l_ctime>time())
					  <div data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.1.1.1" class="spec">
					  </div>
					  </div>
						 <div data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.1.2" class="selectSkuCon"></div>
					 </div>
						<div data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.2:$0" class="item item-1 w3">
							<p data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.2:$0.0" class="price oprice"></p>
							<p data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.2:$0.1" class="price aprice"><span data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.2:$0.1.0">&yen;</span><span data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.2:$0.1.1">{{$v->g_price}}</span></p>
						</div>
				  @endif
				@else
				<div data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.1.1.1" class="spec">
				</div>
				</div>
				   <div data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.1.2" class="selectSkuCon"></div>
			   </div>
				  <div data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.2:$0" class="item item-1 w3">
					  <p data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.2:$0.0" class="price oprice"></p>
					  <p data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.2:$0.1" class="price aprice"><span data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.2:$0.1.0">&yen;</span><span data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.2:$0.1.1">{{$v->g_price}}</span></p>
				  </div>
		  		@endif

				<div data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.3" class="item item-2 w4">
	          <div data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.3.0">
	           <div class="u-selnum u-selnum-cart"> 
	            <span class="j-reduce less"><i class="hx"></i></span> 
	            <input type="text" class="j-input" value="{{$v->carg_num}}" pid="{{$v->g_id}}" gd_id="{{$v->gd_id}}" /> 
	            <span class="j-add more"><i class="hx"></i><i class="sx"></i></span> 
	           </div>
	          </div>
	         </div>
	         <div data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.4" class="item item-3 w5" id="oop">
	          <p data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.4.0" class="price sprice"><span data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.4.0.0">&yen;</span><span data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.4.0.1">45.00</span></p>
	         </div>
	         <div data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.5" class="item item-4 item-left w6 f-pr">
	          <div data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.5.0" class="activity"></div>
	          <a data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.5.1" href="javascript:void(0);" class="del"><i data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.5.1.0" sid="{{$v->car_id}}" class="w-icon-normal icon-normal-cart-close"></i></a>
	         </div>
	         <div data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.6" class="hr"></div>
	         <div data-reactid=".0.0.0.0.1.1.$0.2:$c10220040.7" class="hr hr-1"></div>
	        </div>
	        @endforeach
			
	       </div>
	      </div>
	     </div>
	     <div data-reactid=".0.0.0.0.2" style="display:none;">
	      <div data-reactid=".0.0.0.0.2.0" class="cart-empty">
	       <div data-reactid=".0.0.0.0.2.0.0" class="warp">
	        <i data-reactid=".0.0.0.0.2.0.0.0" class="w-icon-normal icon-normal-cart-empty"></i>
	        <p data-reactid=".0.0.0.0.2.0.0.1" class="text">购物车还是空滴</p>
	        <a data-reactid=".0.0.0.0.2.0.0.2" href="/" class="shop">继续购物&gt;&gt;</a>
	       </div>
	      </div>
	     </div>
	    </div>
	    <div data-reactid=".0.0.0.1" style="display: block;" class="cart-total">
	     <div data-reactid=".0.0.0.1.0" class="w-chkbox">
	      
	      
	      <a data-reactid=".0.0.0.1.0.2" href="javascript:;" class="mgl30"></a>
	     </div>
	     <div data-reactid=".0.0.0.1.1" class="info f-fr">
	      <a href="/home/cartbuy" id="tis"><button data-reactid=".0.0.0.1.1.0" class="w-button w-button-xl w-button-primary" type="button">下单</button></a>
	     </div>
	     <div data-reactid=".0.0.0.1.2" class="info f-fr mgr25">
	      <div data-reactid=".0.0.0.1.2.0" class="line">
	       <span data-reactid=".0.0.0.1.2.0.0" class="mgr f-fr"><span data-reactid=".0.0.0.1.2.0.0.0" class="label f-fl">应付总额：</span><span data-reactid=".0.0.0.1.2.0.0.1" class="price f-fl"><span data-reactid=".0.0.0.1.2.0.0.1.0">&yen;</span><span data-reactid=".0.0.0.1.2.0.0.1.1">402.00</span></span></span>
	       <div data-reactid=".0.0.0.1.2.0.1" class="m-tipTag tip f-fr">
	        <div data-reactid=".0.0.0.1.2.0.1.0" class="inner">
	         满88免邮
	        </div>
	       </div>
	      </div>
	      <div data-reactid=".0.0.0.1.2.1" class="line line-1">
	       <span data-reactid=".0.0.0.1.2.1.0" class="item">商品合计：</span>
	       <span data-reactid=".0.0.0.1.2.1.1" class="con mgr25"><span data-reactid=".0.0.0.1.2.1.1.0">&yen;</span><span id="zong" data-reactid=".0.0.0.1.2.1.1.1">403.00</span></span>
	       <span data-reactid=".0.0.0.1.2.1.2" class="item">活动优惠：</span>
	       <span data-reactid=".0.0.0.1.2.1.3" class="con"><span data-reactid=".0.0.0.1.2.1.3.0">-&yen;</span><span id="youhui" data-reactid=".0.0.0.1.2.1.3.1">0.00</span></span>
	      </div>
	     </div>
	    </div>
	    <form data-reactid=".0.0.0.2" target="_self" method="post" action="">
	     <input type="hidden" data-reactid=".0.0.0.2.0" name="orderCart" />
	    </form>
	   </div>
	   <div data-reactid=".0.0.1" class="m-slickWarp ">
	    <div data-reactid=".0.0.1.0" class="slickHead">
	     <h3 data-reactid=".0.0.1.0.0" class="title">猜你喜欢</h3>
	    </div>
	    <div data-reactid=".0.0.1.1" class="m-slick">
	     <div data-reactid=".0.0.1.1.0" class="slickContent">
	      <ul data-reactid=".0.0.1.1.0.0" class="m-itemList slickItemList j-slickItemList slick-initialized slick-slider">
	       <div class="slick-list draggable" aria-live="polite">
	        <div class="slick-track" style="opacity: 1; width: 1920px; transform: translate3d(-960px, 0px, 0px);" role="listbox">


	         <li data-reactid=".0.0.1.1.0.0.$1062038" class="item slick-slide" data-slick-index="0" aria-hidden="true" style="width: 210px;" tabindex="-1" role="option" aria-describedby="slick-slide00">
	          <div data-reactid=".0.0.1.1.0.0.$1062038.0" class="m-product j-product ">
	           <span data-reactid=".0.0.1.1.0.0.$1062038.0.0"></span>
	           <div data-reactid=".0.0.1.1.0.0.$1062038.0.1" class="hd">
	            <a data-reactid=".0.0.1.1.0.0.$1062038.0.1.0" target="_blank" title="香菇酱 75克*5袋" href="/item/detail?id=1062038&amp;_stat_area=cart_1&amp;_stat_referer=cart&amp;rcmdVer=1.0.0.0" tabindex="-1"><img data-reactid=".0.0.1.1.0.0.$1062038.0.1.0.0" class="img img-lazyload img-lazyloaded" alt="香菇酱 75克*5袋" src="http://yanxuan.nosdn.127.net/acf45886f6714366c26749f008c958a5.png?imageView&amp;quality=95&amp;thumbnail=210x210" style="opacity: 1;" /><span data-reactid=".0.0.1.1.0.0.$1062038.0.1.0.1"></span><span data-reactid=".0.0.1.1.0.0.$1062038.0.1.0.2"></span></a>
	           </div>
	           <div data-reactid=".0.0.1.1.0.0.$1062038.0.2" class="bd">
	            <div data-reactid=".0.0.1.1.0.0.$1062038.0.2.0" class="prdtTags"></div>
	            <h4 data-reactid=".0.0.1.1.0.0.$1062038.0.2.1" class="name"><a data-reactid=".0.0.1.1.0.0.$1062038.0.2.1.0" target="_blank" title="香菇酱 75克*5袋" href="/item/detail?id=1062038&amp;_stat_area=cart_1&amp;_stat_referer=cart&amp;rcmdVer=1.0.0.0" tabindex="-1"><span data-reactid=".0.0.1.1.0.0.$1062038.0.2.1.0.0"></span><span data-reactid=".0.0.1.1.0.0.$1062038.0.2.1.0.1">香菇酱 75克*5袋</span></a></h4>
	            <p data-reactid=".0.0.1.1.0.0.$1062038.0.2.2" class="price"><span data-reactid=".0.0.1.1.0.0.$1062038.0.2.2.0"><span data-reactid=".0.0.1.1.0.0.$1062038.0.2.2.0.0">&yen;</span><span data-reactid=".0.0.1.1.0.0.$1062038.0.2.2.0.1">27.00</span></span><span data-reactid=".0.0.1.1.0.0.$1062038.0.2.2.1"></span><span data-reactid=".0.0.1.1.0.0.$1062038.0.2.2.2"></span></p>
	            <span data-reactid=".0.0.1.1.0.0.$1062038.0.2.3"></span>
	           </div>
	          </div></li>



	         <li data-reactid=".0.0.1.1.0.0.$1106008" class="item slick-slide" data-slick-index="1" aria-hidden="true" style="width: 210px;" tabindex="-1" role="option" aria-describedby="slick-slide01">
	          <div data-reactid=".0.0.1.1.0.0.$1106008.0" class="m-product j-product ">
	           <span data-reactid=".0.0.1.1.0.0.$1106008.0.0"></span>
	           <div data-reactid=".0.0.1.1.0.0.$1106008.0.1" class="hd">
	            <a data-reactid=".0.0.1.1.0.0.$1106008.0.1.0" target="_blank" title="优雅女士宽檐毛毡帽" href="/item/detail?id=1106008&amp;_stat_area=cart_2&amp;_stat_referer=cart&amp;rcmdVer=1.0.0.0" tabindex="-1"><img data-reactid=".0.0.1.1.0.0.$1106008.0.1.0.0" class="img img-lazyload img-lazyloaded" alt="优雅女士宽檐毛毡帽" src="http://yanxuan.nosdn.127.net/4638a4eb10eb9538842c42cab8e73871.png?imageView&amp;quality=95&amp;thumbnail=210x210" style="opacity: 1;" /><span data-reactid=".0.0.1.1.0.0.$1106008.0.1.0.1"></span><span data-reactid=".0.0.1.1.0.0.$1106008.0.1.0.2"></span></a>
	           </div>
	           <div data-reactid=".0.0.1.1.0.0.$1106008.0.2" class="bd">
	            <div data-reactid=".0.0.1.1.0.0.$1106008.0.2.0" class="prdtTags"></div>
	            <h4 data-reactid=".0.0.1.1.0.0.$1106008.0.2.1" class="name"><a data-reactid=".0.0.1.1.0.0.$1106008.0.2.1.0" target="_blank" title="优雅女士宽檐毛毡帽" href="/item/detail?id=1106008&amp;_stat_area=cart_2&amp;_stat_referer=cart&amp;rcmdVer=1.0.0.0" tabindex="-1"><span data-reactid=".0.0.1.1.0.0.$1106008.0.2.1.0.0"></span><span data-reactid=".0.0.1.1.0.0.$1106008.0.2.1.0.1">优雅女士宽檐毛毡帽</span></a></h4>
	            <p data-reactid=".0.0.1.1.0.0.$1106008.0.2.2" class="price"><span data-reactid=".0.0.1.1.0.0.$1106008.0.2.2.0"><span data-reactid=".0.0.1.1.0.0.$1106008.0.2.2.0.0">&yen;</span><span data-reactid=".0.0.1.1.0.0.$1106008.0.2.2.0.1">159.00</span></span><span data-reactid=".0.0.1.1.0.0.$1106008.0.2.2.1"></span><span data-reactid=".0.0.1.1.0.0.$1106008.0.2.2.2"></span></p>
	            <span data-reactid=".0.0.1.1.0.0.$1106008.0.2.3"></span>
	           </div>
	          </div></li>
	         
	          
	         
	         <li data-reactid=".0.0.1.1.0.0.$1064016" class="item slick-slide slick-active" data-slick-index="5" aria-hidden="false" style="width: 210px;" tabindex="0" role="option" aria-describedby="slick-slide05">
	          <div data-reactid=".0.0.1.1.0.0.$1064016.0" class="m-product j-product ">
	           <span data-reactid=".0.0.1.1.0.0.$1064016.0.0"></span>
	           <div data-reactid=".0.0.1.1.0.0.$1064016.0.1" class="hd">
	            <a data-reactid=".0.0.1.1.0.0.$1064016.0.1.0" target="_blank" title="素色多功能护照夹" href="/item/detail?id=1064016&amp;_stat_area=cart_6&amp;_stat_referer=cart&amp;rcmdVer=1.0.0.0" tabindex="0"><img data-reactid=".0.0.1.1.0.0.$1064016.0.1.0.0" class="img img-lazyload img-lazyloaded" alt="素色多功能护照夹" src="http://yanxuan.nosdn.127.net/0996934d9a747bb0a6fcb312f2bf0315.png?imageView&amp;quality=95&amp;thumbnail=210x210" style="opacity: 1;" /><span data-reactid=".0.0.1.1.0.0.$1064016.0.1.0.1"></span>
	             <div data-reactid=".0.0.1.1.0.0.$1064016.0.1.0.2" class="colorNum">
	              <span data-reactid=".0.0.1.1.0.0.$1064016.0.1.0.2.0">2</span>
	              <span data-reactid=".0.0.1.1.0.0.$1064016.0.1.0.2.1">色可选</span>
	             </div></a>
	           </div>
	           <div data-reactid=".0.0.1.1.0.0.$1064016.0.2" class="bd">
	            <div data-reactid=".0.0.1.1.0.0.$1064016.0.2.0" class="prdtTags"></div>
	            <h4 data-reactid=".0.0.1.1.0.0.$1064016.0.2.1" class="name"><a data-reactid=".0.0.1.1.0.0.$1064016.0.2.1.0" target="_blank" title="素色多功能护照夹" href="/item/detail?id=1064016&amp;_stat_area=cart_6&amp;_stat_referer=cart&amp;rcmdVer=1.0.0.0" tabindex="0"><span data-reactid=".0.0.1.1.0.0.$1064016.0.2.1.0.0"></span><span data-reactid=".0.0.1.1.0.0.$1064016.0.2.1.0.1">素色多功能护照夹</span></a></h4>
	            <p data-reactid=".0.0.1.1.0.0.$1064016.0.2.2" class="price"><span data-reactid=".0.0.1.1.0.0.$1064016.0.2.2.0"><span data-reactid=".0.0.1.1.0.0.$1064016.0.2.2.0.0">&yen;</span><span data-reactid=".0.0.1.1.0.0.$1064016.0.2.2.0.1">59.00</span></span><span data-reactid=".0.0.1.1.0.0.$1064016.0.2.2.1"></span><span data-reactid=".0.0.1.1.0.0.$1064016.0.2.2.2"></span></p>
	            <span data-reactid=".0.0.1.1.0.0.$1064016.0.2.3"></span>
	           </div>
	          </div></li>
	         <li data-reactid=".0.0.1.1.0.0.$1073004" class="item slick-slide slick-active" data-slick-index="6" aria-hidden="false" style="width: 210px;" tabindex="0" role="option" aria-describedby="slick-slide06">
	          <div data-reactid=".0.0.1.1.0.0.$1073004.0" class="m-product j-product ">
	           <span data-reactid=".0.0.1.1.0.0.$1073004.0.0"></span>
	           <div data-reactid=".0.0.1.1.0.0.$1073004.0.1" class="hd">
	            <a data-reactid=".0.0.1.1.0.0.$1073004.0.1.0" target="_blank" title="科技感防盗双肩包" href="/item/detail?id=1073004&amp;_stat_area=cart_7&amp;_stat_referer=cart&amp;rcmdVer=1.0.0.0" tabindex="0"><img data-reactid=".0.0.1.1.0.0.$1073004.0.1.0.0" class="img img-lazyload img-lazyloaded" alt="科技感防盗双肩包" src="" style="opacity: 1;" /><span data-reactid=".0.0.1.1.0.0.$1073004.0.1.0.1"></span><span data-reactid=".0.0.1.1.0.0.$1073004.0.1.0.2"></span></a>
	           </div>
	           <div data-reactid=".0.0.1.1.0.0.$1073004.0.2" class="bd">
	            <div data-reactid=".0.0.1.1.0.0.$1073004.0.2.0" class="prdtTags"></div>
	            <h4 data-reactid=".0.0.1.1.0.0.$1073004.0.2.1" class="name"><a data-reactid=".0.0.1.1.0.0.$1073004.0.2.1.0" target="_blank" title="科技感防盗双肩包" href="/item/detail?id=1073004&amp;_stat_area=cart_7&amp;_stat_referer=cart&amp;rcmdVer=1.0.0.0" tabindex="0"><span data-reactid=".0.0.1.1.0.0.$1073004.0.2.1.0.0"></span><span data-reactid=".0.0.1.1.0.0.$1073004.0.2.1.0.1">科技感防盗双肩包</span></a></h4>
	            <p data-reactid=".0.0.1.1.0.0.$1073004.0.2.2" class="price"><span data-reactid=".0.0.1.1.0.0.$1073004.0.2.2.0"><span data-reactid=".0.0.1.1.0.0.$1073004.0.2.2.0.0">&yen;</span><span data-reactid=".0.0.1.1.0.0.$1073004.0.2.2.0.1">259.00</span></span><span data-reactid=".0.0.1.1.0.0.$1073004.0.2.2.1"></span><span data-reactid=".0.0.1.1.0.0.$1073004.0.2.2.2"></span></p>
	            <span data-reactid=".0.0.1.1.0.0.$1073004.0.2.3"></span>
	           </div>
	          </div></li>
	          @foreach($xihuan as $keys=>$values)

	         <li data-reactid=".0.0.1.1.0.0.$1135079" class="item slick-slide slick-active" data-slick-index="7" aria-hidden="false" style="width: 210px;" tabindex="0" role="option" aria-describedby="slick-slide07">
	          <div data-reactid=".0.0.1.1.0.0.$1135079.0" class="m-product j-product ">
	           <span data-reactid=".0.0.1.1.0.0.$1135079.0.0"></span>
	           <div data-reactid=".0.0.1.1.0.0.$1135079.0.1" class="hd">
	            <a data-reactid=".0.0.1.1.0.0.$1135079.0.1.0" target="_blank" title="{{$values->g_name}}" href="/home/xiangqing?id={{$values->g_id}}&gcid={{$values->gc_id}}&gcpid={{$values->gc_pid}}" tabindex="0"><img data-reactid=".0.0.1.1.0.0.$1135079.0.1.0.0" class="img img-lazyload img-lazyloaded" alt="{{$values->g_name}}" src="{{explode(',',$values->g_pic)[4]}}" style="opacity: 1;" /><span data-reactid=".0.0.1.1.0.0.$1135079.0.1.0.1"></span><span data-reactid=".0.0.1.1.0.0.$1135079.0.1.0.2"></span></a>
	           </div>
	           <div data-reactid=".0.0.1.1.0.0.$1135079.0.2" class="bd">
	            <div data-reactid=".0.0.1.1.0.0.$1135079.0.2.0" class="prdtTags"></div>
	            <h4 data-reactid=".0.0.1.1.0.0.$1135079.0.2.1" class="name"><a data-reactid=".0.0.1.1.0.0.$1135079.0.2.1.0" target="_blank" title="{{$values->g_name}}" href="/home/xiangqing?id={{$values->g_id}}&gcid={{$values->gc_id}}&gcpid={{$values->gc_pid}}" tabindex="0"><span data-reactid=".0.0.1.1.0.0.$1135079.0.2.1.0.0"></span><span data-reactid=".0.0.1.1.0.0.$1135079.0.2.1.0.1">{{$values->g_name}}</span></a></h4>
	            <p data-reactid=".0.0.1.1.0.0.$1135079.0.2.2" class="price"><span data-reactid=".0.0.1.1.0.0.$1135079.0.2.2.0"><span data-reactid=".0.0.1.1.0.0.$1135079.0.2.2.0.0">&yen;</span><span data-reactid=".0.0.1.1.0.0.$1135079.0.2.2.0.1">{{$values->g_price}}</span></span><span data-reactid=".0.0.1.1.0.0.$1135079.0.2.2.1"></span><span data-reactid=".0.0.1.1.0.0.$1135079.0.2.2.2"></span></p>
	            <span data-reactid=".0.0.1.1.0.0.$1135079.0.2.3"></span>
	           </div>
	          </div></li>
	          @endforeach
	        </div>
	       </div>
	      </ul>
	     </div>
	    
	    </div>
	   </div>
	  </div>
	  {{ csrf_field() }}
	  <div class="m-notify hidden" id="rrr" style="opacity: 0.5">
	   <div class="text j-text">
	    本商品1件起售
	   </div>
	  </div>
	 @endif
@endsection

@section('js')
	<script>
	//购物车数量加减
	$(function(){
		// $('.icon-normal-cart-close').parents('.f-cb').remove();
		//执行删除购物车  发送ajax
		// console.log($('.f-cb').attr('vid'))
		$('.icon-normal-cart-close').click(function(){
			// alert(22);

			$.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});
			list = $(this);
			delid = $(this).attr('sid');
			divr = $('#one');
			$.post('/home/delcar',{delid:delid},function(data){
				if(data){
					list.parents('.f-cb').remove();
					a = $('#zong');//总金额
					b = $('.sprice');
					// console.log(b);
					var s = 0;
					b.each(function(){
						// console.log($(this).children('span:eq(1)').html());
						s += parseInt($(this).children('span:eq(1)').html());
					})
					
					a.html(s);
					lai = parseInt($('#zong').html())-parseInt($('#youhui').html());
					hui = $('span .price').children('span:eq(1)').html(lai+'.00');
					if($('.f-cb').length<=0){
						window.location.reload('/home/cart');
						// console.log('删除储存');

					}
				}

			})

		})


		//当页面进入到购物车页面  执行下面一段代码
		divs = $('.f-cb');
		divs.each(function(){
			// console.log($(this).html());
			// 获取商品单价
			danjia = $(this).children('div .item-1').children('.aprice').children('span:eq(1)').html();
			// console.log(danjia.html());
			// 获取商品数量
			shuliang = $(this).children('div .item-2').children('div').children('div').children('.j-input').val();
			// console.log(shuliang);
			// console.log(parseInt(danjia)*parseInt(shuliang));
			op = parseInt(danjia)*parseInt(shuliang);
			//单间商品小计
			xiao = $(this).children('#oop').children('.sprice').children('span:eq(1)');
			// console.log(xiao);
			xiao.html(op+'.00');
		})
		//计算所有商品的小计的和
		var hr = 0;
		$('.sprice').each(function(){
			nb = $(this).children('span:eq(1)').html();
			// console.log(nb);
			hr += parseInt(nb);
		})
		// console.log(hr);

		a = $('#zong');//总金额
		a.html(hr+'.00');
		//取得优惠价格
		iOS = hr-parseInt($('#youhui').html());
		// console.log(iOS);
		if(iOS < 0){
			iOS = 0;
		}
		$('.f-fl').children('span:eq(1)').html(iOS+'.00');
		

		//实时监控input对象 属性变化
		$('.j-input').bind('input',function(){
			// console.log($(this).attr('pid'));
			// console.log($(this).attr('gd_id'));
			$.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});

			num2 = $(this).val();
			g_id2 = $(this).attr('pid');
			gd_id2 = $(this).attr('gd_id');

			setTimeout(function(){
				$.post('/home/cartchange',{g_id:g_id2,gd_id:gd_id2,num:num2},function(data){
					
				})
			},600);

			x = $(this).val();
			if(x == 0){
				x = 1;
				$(this).val(x);
			}
			if(isNaN(x)){
				x = 1;
				$(this).val(x);
			}
			jian = $(this).parents('div .item-2').prev().children('.aprice').children('span:eq(1)');
			ji = $(this).parents('div .item-2').next().children('.sprice').children('span:eq(1)');
			xiaoji = x*jian.html()+'.00';
			a = $('#zong');//总金额

			//获取所有checked为false的小计的值
			z = $('.ck').children('div').children('input');
			d = 0;
			z.each(function(){
				// console.log($(this));
				if(!$(this).is(':checked')){
					d += parseInt($(this).parents('div .item').siblings('#oop').children('.sprice').children('span:eq(1)').html());
				}
			})

			// console.log(a.html());
			ji.html(xiaoji);
			b = $('.sprice');
			// console.log(b);
			var s = 0;
			b.each(function(){
				// console.log($(this).children('span:eq(1)').html());
				s += parseInt($(this).children('span:eq(1)').html());
			})
			s = s-d+'.00';
			a.html(s);
			//得出优惠后的商品实际价格
			lai = parseInt($('#zong').html())-parseInt($('#youhui').html());
			hui = $('span .price').children('span:eq(1)').html(lai+'.00');
		})




		//以下为用点击来加减
		$('.less').click(function(){

			// alert(22);
			check = $(this).parents('div .item-2').siblings('.w7').children('div .ck').children('div .w-chkbox').children('input');
			// console.log(check.is(':checked'));
			if(!check.is(':checked')){
				// alert(222);
				return;
			}

			a = $('#zong');//总金额
			x = $(this).next().val();
			if(isNaN(x)){
				x = 1;
			}
			// console.log(x);
			x -= 1;
			if(x < 1){
				$('#rrr').show(500);
				setTimeout(function(){
					$('#rrr').hide(300);
				},1200)
			}
			if(x <= 1){
				x = 1;
			}
			$(this).next().val(x);

			$.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});

			num2 = $(this).next().val();
			g_id2 = $(this).next().attr('pid');
			gd_id2 = $(this).next().attr('gd_id');

			setTimeout(function(){
				$.post('/home/cartchange',{g_id:g_id2,gd_id:gd_id2,num:num2},function(data){
					
				})
			},600);


			jian = $(this).parents('div .item-2').prev().children('.aprice').children('span:eq(1)');
			// console.log(jia.html());	
			ji = $(this).parents('div .item-2').next().children('.sprice').children('span:eq(1)');
			// console.log(ji.html());
			//更改小计钱数
			xiaoji = x*jian.html()+'.00';
			// console.log(xiaoji);
			ji.html(xiaoji);

			//获取所有checked为false的小计的值
			z = $('.ck').children('div').children('input');
			d = 0;
			z.each(function(){
				// console.log($(this));
				if(!$(this).is(':checked')){
					d += parseInt($(this).parents('div .item').siblings('#oop').children('.sprice').children('span:eq(1)').html());
				}
			})
			// console.log(d);
			

			b = $('.sprice');
			// console.log(b);
			var s = 0;
			b.each(function(){
				// console.log($(this).children('span:eq(1)').html());
				s += parseInt($(this).children('span:eq(1)').html());
			})
			s = s-d+'.00';
			a.html(s);
			//得出优惠后的商品实际价格
			lai = parseInt($('#zong').html())-parseInt($('#youhui').html());
			hui = $('span .price').children('span:eq(1)').html(lai+'.00');
		})



		$('.more').click(function(){



			// alert(222);

			//获取所有checked为false的小计的值
			z = $('.ck').children('div').children('input');
			d = 0;
			z.each(function(){
				// console.log($(this));
				if(!$(this).is(':checked')){
					d += parseInt($(this).parents('div .item').siblings('#oop').children('.sprice').children('span:eq(1)').html());
				}
			})

			check = $(this).parents('div .item-2').siblings('.w7').children('div .ck').children('div .w-chkbox').children('input');
			// console.log(check.is(':checked'));
			if(!check.is(':checked')){
				// alert(222);
				return;
			}

			a = $('#zong');//总金额
			x = parseInt($(this).prev().val());
			if(isNaN(x)){
				x = 1;
			}
			x += 1;
			$(this).prev().val(x);

			$.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});

			num2 = $(this).prev().val();
			g_id2 = $(this).prev().attr('pid');
			gd_id2 = $(this).prev().attr('gd_id');

			setTimeout(function(){
				$.post('/home/cartchange',{g_id:g_id2,gd_id:gd_id2,num:num2},function(data){
					
				})
			},600);

			jian = $(this).parents('div .item-2').prev().children('.aprice').children('span:eq(1)');
				
			ji = $(this).parents('div .item-2').next().children('.sprice').children('span:eq(1)');
			
			xiaoji = x*jian.html()+'.00';
			
			ji.html(xiaoji);

			b = $('.sprice');
			// console.log(b);
			var s = 0;
			b.each(function(){
				// console.log($(this).children('span:eq(1)').html());
				s += parseInt($(this).children('span:eq(1)').html());
			})
			s = s-d+'.00';
			a.html(s);
			//得出优惠后的商品实际价格
			lai = parseInt($('#zong').html())-parseInt($('#youhui').html());
			hui = $('span .price').children('span:eq(1)').html(lai+'.00');
		})

		//购物车全选和反选框

		//首先点击取消商品 则总金额减少  以下实现
		$('.ck').children('div').children('input').change(function(){
			// alert(222);//绑定成功
			//以下判断复选框是否被选中

			var r = $(this).is(':checked');
			a = $('#zong');//总金额
			e = $(this).parents('div .item').siblings('#oop').children('.sprice').children('span:eq(1)');
			// console.log(r.html());
			if(!r){
				// alert(22);
				$(this).attr('checked',false);
				a.html(parseInt(a.html()-e.html())+'.00');
				y = $(this).parents('div .w7').siblings('.w4').children('div').children('div').children('input');
				// console.log(y.val());
				y.attr('readonly',true)
				//得出优惠后的商品实际价格
				lai = parseInt($('#zong').html())-parseInt($('#youhui').html());
				hui = $('span .price').children('span:eq(1)').html(lai+'.00');
				//将全选框的勾去掉
				$('#ins').prop('checked',false);
			}else{
				y = $(this).parents('div .w7').siblings('.w4').children('div').children('div').children('input');
				y.attr('readonly',false)
				$(this).attr('checked',true);
				qw = parseInt(a.html())+parseInt(e.html())+'.00';
				a.html(qw);
				//得出优惠后的商品实际价格
				lai = parseInt($('#zong').html())-parseInt($('#youhui').html());
				hui = $('span .price').children('span:eq(1)').html(lai+'.00');
			}

			//以下判断下单是否可以执行
			z = $('.ck').children('div').children('input');
			// console.log(z);
			var res = [];
			z.each(function(){
			//将遍历出来的值压入数组   再在外部判断 true是否在数组中  从而使功能实现
				res.push($(this).is(':checked'));
			})
			// console.log($.inArray(true,res));
			if($.inArray(true,res) != -1){
				// alert(22);
				$('.w-button-xl').removeClass('w-button-disable');
				$('.w-button-xl').addClass('w-button-primary');
				$('#tis').attr('href','/home/cartbuy');
			}else{
				$('.w-button-xl').removeClass('w-button-primary');
				$('.w-button-xl').addClass('w-button-disable');
				$('#tis').attr('href','JavaScript:;');
				$('span .price').children('span:eq(1)').html('0.00');
			}

		})

		//完成全选框功能
		$('#ins').change(function(){
			if(!$(this).is(':checked')){
				$('.ck').children('div').children('input[type="checkbox"]').prop("checked", false); 
				a = $('#zong');//总金额
				a.html('00.00');
				//得出优惠后的商品实际价格
				lai = parseInt($('#zong').html())-parseInt($('#youhui').html());
				hui = $('span .price').children('span:eq(1)').html(lai+'.00');
				//将文本输入框更改不可输入
				$('.j-input').attr('readonly',true);

				//将下单按钮变成可选状态
				$('#tis').attr('href','JavaScript:;');
				$('.w-button-xl').removeClass('w-button-primary');
				$('.w-button-xl').addClass('w-button-disable');
				$('span .price').children('span:eq(1)').html('0.00');
			}else{
				$('#tis').attr('href','/home/cartbuy');
				$('.ck').children('div').children('input[type="checkbox"]').prop("checked", true); 
				a = $('#zong');//总金额
				t = $('.item-3');
				// console.log(t.html());
				//遍历
				v = 0;
				t.each(function(){
					// console.log($(this).children('.sprice').children('span:eq(1)').html());
					v += parseInt($(this).children('.sprice').children('span:eq(1)').html());
				})
				// console.log(v);//成功
				a.html(v+'.00');
				//得出优惠后的商品实际价格
				lai = parseInt($('#zong').html())-parseInt($('#youhui').html());
				hui = $('span .price').children('span:eq(1)').html(lai+'.00');
				//将文本输入框更改不可输入
				$('.j-input').attr('readonly',false);
				//将下单按钮变成可选状态
				$('.w-button-xl').removeClass('w-button-disable');
				$('.w-button-xl').addClass('w-button-primary');
			}
		})
	})



	</script>
@endsection