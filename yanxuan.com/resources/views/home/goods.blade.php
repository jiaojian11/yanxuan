@extends('home.layout.index')

@section('contents')

	<div class="g-bd-list" > 
	 <div class="g-row"> 
	  <!--面包屑--> 
	  <div class="m-crumbs "> 
	   <a href="/">首页</a> 
	   <span class="w-icon w-icon-arrow"></span> 
	   <span class="z-cur">{{$gctitle}}</span> 
	  </div> 
	<!-- 轮播图开始 -->
		<div id="slider" style="width:1090px;height:310px;margin-top:7px">
			<ul class="slides clearfix">
			@foreach($lunb as $q=>$w)
				<a href="/home/xiangqing?id={{$lun[$q]->g_id}}&gcid={{$lun[$q]->gc_id}}&gcpid={{$lun[$q]->gc_pid}}"><li><img style="height:310px" class="responsive" src="/adminCSS/{{$w->ban_pic}}"></li></a>
			@endforeach		
			</ul>
			<ul id="qwer" style="display:none" class="controls" >
				<li><img src="{{asset('/homeCSS/images/prev.png')}}" alt="previous"></li>
				<li><img src="{{asset('/homeCSS/images/next.png')}}" alt="next"></li>
			</ul>
			<ul class="pagination">
				@foreach($lunb as $q=>$w)
				<li class="active"></li>
				@endforeach
			</ul>
		</div>
	<!-- 轮播图结束   -->

		  <div data-reactid=".0" class="m-goodsArea">
		   <div data-reactid=".0.0" class="m-sortbar">
		    <div data-reactid=".0.0.0" class="category">
		     <span data-reactid=".0.0.0.0" class="name">分类：</span>
		     <a data-reactid=".0.0.0.1:$0" class="categoryItem j-categoryItem active" href="javascript:;">全部</a>
			 @foreach($data as $k=>$v)
		     <a data-reactid=".0.0.0.1:$1" class="categoryItem j-categoryItem enheng" href="#{{$v->gc_title}}">{{$v->gc_title}}</a>
			 @endforeach
		    </div>
		    <div data-reactid=".0.0.1" class="sorts">
		     <a data-reactid=".0.0.1.0" class="sort sort-time" href="javascript:;"><span data-reactid=".0.0.1.0.0">上架时间</span><i data-reactid=".0.0.1.0.1" class="w-icon-normal icon-normal-down-unchecked"></i></a>
		     <a data-reactid=".0.0.1.1" class="sort sort-price" href="javascript:;"><span data-reactid=".0.0.1.1.0">价格</span>
		      <div data-reactid=".0.0.1.1.1" class="icon">
		       <i data-reactid=".0.0.1.1.1.0" class="w-icon-normal icon-normal-up-search"></i>
		       <i data-reactid=".0.0.1.1.1.1" class="w-icon-normal icon-normal-down-search"></i>
		      </div></a>
		     <a data-reactid=".0.0.1.2" class="sort sort-default active" href="javascript:;">默认</a>
		    </div>
		   </div>
		   <div data-reactid=".0.1" class="m-content">

			<!-- 商品在此遍历 -->
			@foreach($data as $k=>$v)
		    <div data-reactid=".0.1.$1008008" id="1008008" class="m-Level2Category">
		    	<!-- 商品类别 -->
		     <div data-reactid=".0.1.$1008008.0" class="hd" name="{{$v->gc_title}}" id="{{$v->gc_title}}">
		       <p data-reactid=".0.1.$1008008.0.0" class="title f-clearfix">
		          <img data-reactid=".0.1.$1008008.0.0.0" src="{{$v->gc_pic}}" class="icon w-icon-44 f-left" />
		          <span data-reactid=".0.1.$1008008.0.0.1" class="name f-left" >{{$v->gc_title}}</span>
		       </p>
		       <p data-reactid=".0.1.$1008008.0.1" class="desc">{{$v->gc_info}}</p>
		     </div>
		     	<!-- 商品类别结束 -->
		     <ul data-reactid=".0.1.$1008008.1" class="m-itemList m-itemList-level2Category">
		     @foreach($datas as $key=>$value)
		     @foreach($value as $k1=>$v1)
		     @if($v->gc_id==$v1->gc_id)
		      <li data-reactid=".0.1.$1008008.1.$1006013" class="item">
		       <div data-reactid=".0.1.$1008008.1.$1006013.0" class="m-product j-product ">
		        <span data-reactid=".0.1.$1008008.1.$1006013.0.0"></span>
		        <div data-reactid=".0.1.$1008008.1.$1006013.0.1" class="hd">
		         <a data-reactid=".0.1.$1008008.1.$1006013.0.1.0" target="_blank" title="双宫茧桑蚕丝被 空调被" href="/home/xiangqing?id={{$v1->g_id}}&&gcid={{$v1->gc_id}}&&gcpid={{$v1->gc_pid}}">
		         <img data-reactid=".0.1.$1008008.1.$1006013.0.1.0.0" class="img img-lazyload j-lazyload  img-lazyloaded" alt="双宫茧桑蚕丝被 空调被" data-original="http://yanxuan.nosdn.127.net/eb3104e854b6df58d210ad4425bdfee6.png?imageView&amp;quality=95&amp;thumbnail=245x245" src="{{explode(',',$v1->g_pic)[4]}}" />
		         <span data-reactid=".0.1.$1008008.1.$1006013.0.1.0.1"></span>
		         <span data-reactid=".0.1.$1008008.1.$1006013.0.1.0.2"></span></a>
		        </div>
		        <div data-reactid=".0.1.$1008008.1.$1006013.0.2" class="bd">
		         <h4 data-reactid=".0.1.$1008008.1.$1006013.0.2.0" class="name"><span data-reactid=".0.1.$1008008.1.$1006013.0.2.0.0"></span>
		         <a data-reactid=".0.1.$1008008.1.$1006013.0.2.0.1" target="_blank" title="双宫茧桑蚕丝被 空调被" href="/home/xiangqing?id={{$v1->g_id}}&&gcid={{$v1->gc_id}}&&gcpid={{$v1->gc_pid}}"><span data-reactid=".0.1.$1008008.1.$1006013.0.2.0.1.0"></span>
		         <span data-reactid=".0.1.$1008008.1.$1006013.0.2.0.1.1">{{$v1->g_name}}</span></a></h4>
		         <p data-reactid=".0.1.$1008008.1.$1006013.0.2.1" class="price"><span data-reactid=".0.1.$1008008.1.$1006013.0.2.1.0"><span data-reactid=".0.1.$1008008.1.$1006013.0.2.1.0.0">&yen;</span>
		         <span data-reactid=".0.1.$1008008.1.$1006013.0.2.1.0.1">{{$v1->g_price}}</span></span><span data-reactid=".0.1.$1008008.1.$1006013.0.2.1.1"></span><span data-reactid=".0.1.$1008008.1.$1006013.0.2.1.2"></span></p>
		         <div data-reactid=".0.1.$1008008.1.$1006013.0.2.2">
		          <hr data-reactid=".0.1.$1008008.1.$1006013.0.2.2.0" />
		          <p data-reactid=".0.1.$1008008.1.$1006013.0.2.2.1" class="desc">{{$v1->g_intro}}</p>
		         </div>
		        </div>
		       </div>
		       </li>
		      @endif
		      @endforeach
		      @endforeach
		     </ul>
		    </div>
		    @endforeach
			<!-- 遍历结束 -->
		   </div>
		  </div>
	</div>
	</div>
@endsection

@section('js')
	
	<script src="{{asset('/homeCSS/js/easySlider.js')}}"></script>
	<script type="text/javascript">
		// 轮播图
		$(function() {
			$("#slider").easySlider( {
				slideSpeed: 500,
				paginationSpacing: "15px",
				paginationDiameter: "12px",
				paginationPositionFromBottom: "20px",
				slidesClass: ".slides",
				controlsClass: ".controls",
				paginationClass: ".pagination"					
			});
		});


		$(function(){
			$('#slider').mouseover(function(){
				$('#qwer').show();
			})
			$('#slider').mouseout(function(){
				$('#qwer').hide();
			})
		})
		$(function(){  
		  $('a[href*=#],area[href*=#]').click(function() {
		    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
		      var $target = $(this.hash);
		      $target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');
		      if ($target.length) {
		        var targetOffset = $target.offset().top;
		        $('html,body').animate({
		          scrollTop: targetOffset
		        },
		        1000);
		        return false;
		      }
		    }
		  });
})

	</script>
@endsection