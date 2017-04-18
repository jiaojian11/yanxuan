@extends('home.layout.index')
@section('contents')
@if($a==1)
<div class="g-bd">
	<div class="g-row" id="wraper">
		<div class="m-flashSale" data-reactid=".0">
			<div class="m-flashHeader" data-reactid=".0.0">
				<div class="m-headerTop" data-reactid=".0.0.0">
					<div class="w-flashTitle" data-reactid=".0.0.0.0">
						<!-- <i class="w-icon-normal icon-normal-clock-flashSale" data-reactid=".0.0.0.0.0"></i> -->
						<h2 class="title" data-reactid=".0.0.0.0.1">严选限时购</h2>
					</div>
					<div class="m-countDown w-flashCd" data-reactid=".0.0.0.1">
						<span class="timeTips" data-reactid=".0.0.0.1.0:0">本场剩余</span>
						<p class="endTips" data-reactid=".0.0.0.1.0:1">本场已结束</p>
						<div class="hourWraper" data-reactid=".0.0.0.1.1">
							<span class="cdHour cdHour-1 sheng1" data-reactid=".0.0.0.1.1.0">0</span>
							<span class="shengyu" style="display:none">{{date("Y/m/d H:i:s",$now->l_ltime)}}</span>
						</div>
						<span class="cdColon" data-reactid=".0.0.0.1.2">:</span>
						<div class="minuteWraper" data-reactid=".0.0.0.1.3">
							<span class="cdMinute cdMinute-1 sheng2" data-reactid=".0.0.0.1.3.0">2</span>
						</div>
						<span class="cdColon" data-reactid=".0.0.0.1.4">:</span>
						<div class="secondWraper" data-reactid=".0.0.0.1.5">
						<span class="cdSecond cdSecond-1 sheng3" data-reactid=".0.0.0.1.5.0">3</span>
						</div>
					</div>
				</div>
				<div class="m-flashSlider slick-initialized slick-slider" id="j-focusSlick" data-reactid=".0.0.1">
					<div aria-live="polite" class="slick-list draggable">
						<div role="listbox" style="opacity: 1; width: 1090px;" class="slick-track">
							<div aria-describedby="slick-slide00" role="option" tabindex="0" style="width: 1090px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;" aria-hidden="false" data-slick-index="0" class="item slick-slide slick-current slick-active" data-reactid=".0.0.1.$0">
								<img src="/homeCSS/images/xianshijumu.jpg" alt="限时购banner" class="wrap" data-reactid=".0.0.1.$0.0">
								<!-- <span>这应该是个图片</span> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="m-sessionList session-8" data-reactid=".0.1">
				<!-- 已经结束 -->
				@foreach($end as $c=>$d)
					<div class="sessionItem" data-reactid=".0.1.$0">
						<div class="sessionInner" data-reactid=".0.1.$0.0">
							<div class="sessionTime" data-reactid=".0.1.$0.0.0">
								<span class="day" data-reactid=".0.1.$0.0.0.0"></span>
								<span class="time" data-reactid=".0.1.$0.0.0.1">{{date("H",$d->l_ctime)}}:00</span>
							</div>
							<div class="sessionStatus" data-reactid=".0.1.$0.0.1">已结束</div>
						</div>
						<div class="bottomLine" data-reactid=".0.1.$0.1"></div>
					</div>
				@endforeach
				<!-- 进行中 -->
				<div class="sessionItem sessionNow selected" data-reactid=".0.1.$3">
						<div class="sessionInner" data-reactid=".0.1.$3.0">
							<div class="sessionTime" data-reactid=".0.1.$3.0.0">
							<span class="day" data-reactid=".0.1.$3.0.0.0"></span>
							<span class="time" data-reactid=".0.1.$3.0.0.1">{{date("H",$now->l_ctime)}}:00</span>
							</div>
							<div class="sessionStatus" data-reactid=".0.1.$3.0.1">抢购中</div>
						</div>
						<div class="bottomLine" data-reactid=".0.1.$3.1">	
						</div>
				</div>
				<!-- 未开始 -->
				
				@foreach($wstart as $e=>$f)
					<div class="sessionItem" data-reactid=".0.1.$4">
						<div class="sessionInner" data-reactid=".0.1.$4.0">
							<div class="sessionTime" data-reactid=".0.1.$4.0.0">
							<span class="day" data-reactid=".0.1.$4.0.0.0"></span>
							@if($etime<$f->l_ctime)
							<span class="time" data-reactid=".0.1.$4.0.0.1">明日&nbsp;{{date("H",$f->l_ctime)}}:00</span>
							@else
							<span class="time" data-reactid=".0.1.$4.0.0.1">{{date("H",$f->l_ctime)}}:00</span>
							@endif
							</div>
							<div class="sessionStatus" data-reactid=".0.1.$4.0.1">即将开抢</div>
						</div>
						<div class="bottomLine" data-reactid=".0.1.$4.1"></div>
					</div>
				@endforeach
			</div>
		</div>
		<!--活动已结束-->
		@foreach($end as $c=>$d)
			<div data-reactid=".0.2" class="m-itemListForFlashSale" style="display:none;">
				<div data-reactid=".0.2.0" class="listInner">
					<section data-reactid=".0.2.0.$0" class="w-item" style="width: 100%;height: 450px;">
						<span style="font-size:30px;">活动已结束</span>
					</section>
				</div>
			</div>
		@endforeach
		<!-- 正在进行 -->
		<div data-reactid=".0.2" class="m-itemListForFlashSale">
			<div data-reactid=".0.2.0" class="listInner">
				@foreach($ngoo as $a=>$b)
				<section data-reactid=".0.2.0.$0" class="w-item ">
					<div data-reactid=".0.2.0.$0.0" class="lt">
						<a data-reactid=".0.2.0.$0.0.0"  target="_blank" class="picIn" href="/home/xiangqing?id={{$b->g_id}}&gcid={{$b->gc_id}}&gcpid={{$b->gc_pid}}">
							<img data-reactid=".0.2.0.$0.0.0.0"  data-original="" src="{{explode(',',$b->g_pic)[0]}}" class="pic img-lazyload j-lazyload img-lazyloaded">
						</a>
					</div>
					<div data-reactid=".0.2.0.$0.1" class="rt">
						<h2 data-reactid=".0.2.0.$0.1.0" class="itemName">
							<a data-reactid=".0.2.0.$0.1.0.0" class="link" target="_blank" href="/home/xiangqing?id={{$b->g_id}}&gcid={{$b->gc_id}}&gcpid={{$b->gc_pid}}">{{$b->g_name}}</a>
						</h2>
						<p data-reactid=".0.2.0.$0.1.1" class="itemDes">{{$b->g_intro}}</p>
						<div data-reactid=".0.2.0.$0.1.2" class="itemNum">
							
						</div>
						<div data-reactid=".0.2.0.$0.1.3" class="itemPrice">
							<span data-reactid=".0.2.0.$0.1.3.0" class="aPrice">
								<span data-reactid=".0.2.0.$0.1.3.0.0">限时价</span>
								<span data-reactid=".0.2.0.$0.1.3.0.1" class="yuan">¥</span>
								<span data-reactid=".0.2.0.$0.1.3.0.2" class="aPriceIn">{{$b->g_coupon}}</span>
								<span data-reactid=".0.2.0.$0.1.3.0.3"> </span>
							</span>
							<span data-reactid=".0.2.0.$0.1.3.1" class="oPrice">
								<span data-reactid=".0.2.0.$0.1.3.1.0">原价&nbsp;</span>
								<span data-reactid=".0.2.0.$0.1.3.1.1" class="oPriceIn">
									<span data-reactid=".0.2.0.$0.1.3.1.1.0">¥</span>
									<span data-reactid=".0.2.0.$0.1.3.1.1.1">{{$b->g_price}}</span>
								</span>
							</span>
						</div>
						<a data-reactid=".0.2.0.$0.1.4" href="/home/xiangqing?id={{$b->g_id}}&gcid={{$b->gc_id}}&gcpid={{$b->gc_pid}}" target="_blank" class="w-btn tobuyBtn">立即抢购</a>
					</div>
				</section>
				@endforeach
			</div>
		</div>
		<!-- 正在进行结束 -->
		<!-- 活动未开始 -->
		@foreach($wstart as $e=>$f)
			<div data-reactid=".0.2" class="m-itemListForFlashSale" style="display:none;">
				<div data-reactid=".0.2.0" class="listInner">
					@foreach($wgoo[$e] as $g=>$h)
					<section data-reactid=".0.2.0.$0" class="w-item ">
						<div data-reactid=".0.2.0.$0.0" class="lt">
							<a data-reactid=".0.2.0.$0.0.0"  target="_blank" class="picIn" href="/home/xiangqing?id={{$h->g_id}}&gcid={{$h->gc_id}}&gcpid={{$h->gc_pid}}">
								<img data-reactid=".0.2.0.$0.0.0.0"  data-original="" src="{{explode(',',$h->g_pic)[0]}}" class="pic img-lazyload j-lazyload img-lazyloaded">
							</a>
						</div>
						<div data-reactid=".0.2.0.$0.1" class="rt">
							<h2 data-reactid=".0.2.0.$0.1.0" class="itemName">
								<a data-reactid=".0.2.0.$0.1.0.0" class="link" target="" href="/home/xiangqing?id={{$h->g_id}}&gcid={{$h->gc_id}}&gcpid={{$h->gc_pid}}">{{$h->g_name}}</a>
							</h2>
							<p data-reactid=".0.2.0.$0.1.1" class="itemDes">{{$h->g_intro}}</p>
							<div data-reactid=".0.2.0.$0.1.2" class="itemNum">
								
							</div>
							<div data-reactid=".0.2.0.$0.1.3" class="itemPrice">
								<span data-reactid=".0.2.0.$0.1.3.0" class="aPrice">
									<span data-reactid=".0.2.0.$0.1.3.0.0">限时价</span>
									<span data-reactid=".0.2.0.$0.1.3.0.1" class="yuan">¥</span>
									<span data-reactid=".0.2.0.$0.1.3.0.2" class="aPriceIn">{{$h->g_coupon}}</span>
									<span data-reactid=".0.2.0.$0.1.3.0.3"> </span>
								</span>
								<span data-reactid=".0.2.0.$0.1.3.1" class="oPrice">
									<span data-reactid=".0.2.0.$0.1.3.1.0">原价&nbsp;</span>
									<span data-reactid=".0.2.0.$0.1.3.1.1" class="oPriceIn">
										<span data-reactid=".0.2.0.$0.1.3.1.1.0">¥</span>
										<span data-reactid=".0.2.0.$0.1.3.1.1.1">{{$h->g_price}}</span>
									</span>
								</span>
							</div>
							<a id="shaohou"  class="w-btn tobuyBtn">稍后抢购</a>
							<script>
							$('#shaohou').click(function(){
								return false;
							})
							</script>
						</div>
					</section>
					@endforeach
				</div>
			</div>
		@endforeach
	</div>
</div>
@else
<div class="g-bd" style="background:#fff;height: 400px;line-height:400px;text-align:center;">
	<div class="m-flashSale" data-reactid=".0">
		<span style="font-size:50px;">暂无活动</span>
	</div>
</div>
@endif
@endsection
@section('js')
<script>
// 限时优惠活动js
      // var lid = $('.shengyu').html();
      // console.log(lid);
   $(function(){
    init = setInterval(function(){
    // 获取活动结束时间
    	 var endtime = new Date($('.shengyu').html());
    // 获取当前时间
    	 var nowtime = new Date(); 
    // 得出剩余活动时间
   	   var dtime = (endtime.getTime()-nowtime.getTime())/1000;
    // 判断如果活动时间小于零不让他继续执行
    // 获取活动开始时间
       if(dtime<=0)
       {
       	clearInterval(init);
		   // 发送ajax之前防备csrf攻击
		   $.ajaxSetup({
			   headers: {
				   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			   },
			   async:false
		   });
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
       $('.sheng1').html(h);
       $('.sheng2').html(m);
       $('.sheng3').html(s);
    },1000)
   })
 $(function(){
    // 选项卡单击事件
      $('.sessionItem').click(function(){
      // 给点击的加上样式  其余的删除样式
        $(this).addClass('selected').siblings().removeClass('selected');
      // 获取当前点击的索引
        var index = $(this).index();
      // 根据索引实现选项卡功能
        $('.m-itemListForFlashSale').eq(index).css('display','block').siblings('.m-itemListForFlashSale').css('display','none');
      })
   })
</script>
@endsection