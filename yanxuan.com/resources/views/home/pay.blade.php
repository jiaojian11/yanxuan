@extends('home.layout.index')

@section('contents')

<html>
 <head>
  <link rel="stylesheet" href="/homeCSS/paypic/toPay-28823a54b4.css" /> 
 </head>
 <body>
  <div class="g-bd"> 
   <div class="g-row"> 
    <form id="j-orderPayForm" action="/home/paysuccess" method="post" target="_self"> 
     <input id="j-orderPayOrderId" type="hidden" name="orderId" value="11242932" /> 
     <div class="g-orderToPayHd"> 
      <h2 class="f-fz18 f-lh1 f-wb f-margin-bottom-10"> 选择付款方式 </h2> 
      <div class="f-clearfix f-lh18"> 
       <p class="f-left f-fz16 w-text-muted"> 订单号：<span class="rand">{{$icu}}</span> </p> 
       <p class="f-right f-fz18">实付：<span class="f-txt-red">&yen;{{$o_zong}}</span></p> 
      </div> 
     </div> 
     <div class="f-margin-bottom-40"> 
      <div class="w-panel"> 
       <!-- 提示信息，让用户选择商品规格 --> 
       <div class="m-notify shang show" style="display: none;"> 
        <div class="text j-text">
         请选择支付方式
        </div> 
       </div> 
       <div class="hd">
         支付方式 
       </div> 
       <div class="bd"> 
        <div id="j-payMethods" class="m-payMethods"> 
         <label for="s1"> 
          <div id="j-payMethod-5" class="j-payMethod m-payMethod" data-pay-method="5"> 
           <div class="w-radio radio s-gold"> 
            <input type="radio" name="payMethod" value="5" id="s1" /> 
            <input type="hidden" name="cang" value="{{$icu}}">
           </div> 
           <img class="img" src="/homeCSS/paypic/e2717bcc743126f78b2662fbed3b83ba.png" /> 
           <i class="icon w-icon-normal icon-normal-spec-arrow"></i> 
          </div> </label> 
         <label for="s2"> 
          <div id="j-payMethod-4" class="j-payMethod m-payMethod" data-pay-method="4"> 
           <div class="w-radio radio s-gold"> 
            <input type="radio" name="payMethod" value="4" id="s2" /> 
           </div> 
           <img class="img" src="/homeCSS/paypic/7bcade8ade4138941fc8fd966fb17462.png" /> 
           <i class="icon w-icon-normal icon-normal-spec-arrow"></i> 
          </div> </label> 
         <label for="s3"> 
          <div id="j-payMethod-3" class="j-payMethod m-payMethod" data-pay-method="3"> 
           <div class="w-radio radio s-gold"> 
            <input type="radio" name="payMethod" value="3" id="s3" /> 
           </div> 
           <img class="img" src="/homeCSS/paypic/b824aeed06c2d9dd78cd3d80ee8af138.png" /> 
           <i class="icon w-icon-normal icon-normal-spec-arrow"></i> 
          </div> </label> 
         <label for="s4"> 
          <div id="j-payMethod-2" class="j-payMethod m-payMethod" data-pay-method="2"> 
           <div class="w-radio radio s-gold"> 
            <input type="radio" name="payMethod" value="2" id="s4" /> 
           </div> 
           <img class="img" src="/homeCSS/paypic/c591c217a68b5ee38eaad7eee4fcb7c2.png" /> 
           <i class="icon w-icon-normal icon-normal-spec-arrow"></i> 
          </div> </label> 
         <label for="s5"> 
          <div id="j-payMethod-1" class="j-payMethod m-payMethod" data-pay-method="1"> 
           <div class="w-radio radio s-gold"> 
            <input type="radio" name="payMethod" value="1" id="s5" /> 
           </div> 
           <img class="img" src="/homeCSS/paypic/101129bf65113549b338bafbba7c83bd.png" /> 
           <i class="icon w-icon-normal icon-normal-spec-arrow"></i> 
          </div> </label> 
        </div> 
       </div> 
      </div> 
     </div> 
     <div class="m-goPay">
       {{ csrf_field() }} 
      <button id="j-goPay" class="btn w-button w-button-xl w-button-primary"> 立即付款 </button> 
      <div class="m-orderCancelCountDown countDown"> 
       <span class="label" id="j-cancelOrderTitle">剩余付款时间&nbsp;:&nbsp;&nbsp;</span> 
       <span class="remainTime" id="j-cancelOrderCountDown" data-timeleft="3599956"><span class="minute"></span>分<span class="sencond"></span>秒</span> 
      </div> 
     </div> 
    </form> 
   </div> 
  </div>
 </body>
</html>
<script type="text/javascript">
	$('.m-payMethod').click(function(){
		$('.m-payMethod').removeClass('active');
		$(this).addClass('active');
	})

	// 倒计时
	var m=59;
	var s=60;
	init=setInterval(function(){
		s=s-1;
		if(s==0){
			s=60;
			m=m-1;
			if(m==0){
				s=0;

				// 清除定时器
				clearInterval(init);
				$('.w-button-primary').attr('disabled','disabled');
			}
		}

	// 将时间放入span标签
	$('.minute').html(m);
	$('.sencond').html(s);
	},1000);


	$('.w-button-primary').click(function(){
		a=$('.m-payMethods').find('.active');
		if(a.length==1){
			
		}else{
			// 显示提示信息

			$('.shang').css('display','block');

			// 定时器，2秒后提示信息消失
			setTimeout(function(){
            $('.shang').hide();
        	},2000)
			return false;
		}
	})	
	
</script>
@endsection