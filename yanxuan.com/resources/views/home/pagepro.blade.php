<div style="margin-top: -20px;" class="bd" id="fix"> 
 <div class="left"> 
  <div class="detail-nav j-nav-tab"> 
   <ul class="nav"> 
    <li data-con="j-nav-html" id="aa" class="item  j-nav-item"> <a href="javascript:void(0);">详情</a> </li> 
    <li data-con="j-nav-comment" id="bb" class="item item-active j-nav-item"> <a href="javascript:void(0);">评价<span class="num">（{{$com}}）</span></a> </li> 
    <li class="bg"></li> 
   </ul> 
  </div> 
  <div class="detail-html j-nav-con j-nav-html f-hide"> 
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

<div id="nav-comment" class="detail-comment j-nav-con j-nav-comment">
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
	           {{$v->co_time}}
	          </div>
	         </div>
	        </div>
	        
	       </div>
	       </li>
	     @endforeach
	     </ul>
	    </div>
	    
		<!-- 评论页页结束 -->		
	   <div class="detail-comment-pager j-nav-con j-nav-comment "> 
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
	    {{$val}}  </div>
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
	    
	    <script src="/homeCSS/js/jquery-1.12.4.min.js"></script>
	    <script>
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
	    	</script>
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