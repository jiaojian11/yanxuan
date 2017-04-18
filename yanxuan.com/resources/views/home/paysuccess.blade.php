@extends('home.layout.index')

@section('contents')
<center>	
<div style="height: 400px;margin-top: 100px;">
<span style="font-size:60px;">
付款成功	
</span><br>
<div style="margin-top: 40px;">
<span class="dao" style="color:red;font-size:30px;"></span><span>秒之后自动跳转到主页</span>
</div>
</div>
</center>
<script type="text/javascript">
	
</script>
<script type="text/javascript"> 
	var s=10;
	init=setInterval(function(){
		s=s-1;
		if(s==1){

			// 清除定时器
			clearInterval(init);
			window.location.href='/';
		}

		// 将时间放入span标签
		$('.dao').html(s);
		},1000);
</script> 
@endsection