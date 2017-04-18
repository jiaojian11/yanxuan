@extends('home.layout.index')
@section('contents')
    <style>
    .u-promotion-tag {
    background-color: #d7282d;
    color: #fff;
    display: inline-block;
    height: 22px;
    line-height: 22px;
    padding: 0 10px;
        position:relative;
        top:5px;
    }</style>
  <center>
  <div class="g-bd" > 
   <!-- 轮播图开始 --> 
   <div id="banner_tabs" class="flexslider">
    
    <ul class="slides"> 
	    @foreach($ban as $l=>$m)
	    @if($m->ban_status==1)
	     <li> <a title="" target="_blank" href="home/xiangqing?gcpid={{$m->gc_id}}&gcid={{$bango[$l]->gc_id}}&id={{$m->g_id}}"> <img width="1920" height="482" alt="" style="background: url(/adminCSS/{{$m->ban_pic}}) no-repeat center;background-size: 100% 100%;" src="{{asset('/homeCSS/images/alpha.png')}}" /> </a> </li> 
	     <!-- <li> <a title="" href="#"> <img width="1920" height="482" alt="" style="background: url(/adminCSS/{{$m->ban_pic}}) no-repeat center;" src="{{asset('/homeCSS/images/alpha.png')}}" /> </a> </li> 
	     <li> <a title="" href="#"> <img width="1920" height="482" alt="" style="background: url({{asset('/homeCSS/images/banner3.jpg')}}) no-repeat center;" src="{{asset('/homeCSS/images/alpha.png')}}" /> </a> </li> --> 
	    @endif
	    @endforeach
    </ul> 
    
    <ul class="flex-direction-nav"> 
     <li ><a class="flex-prev" href="javascript:;">Previous</a></li> 
     <li ><a class="flex-next" href="javascript:;">Next</a></li> 
    </ul> 
    <ol id="bannerCtrl" class="flex-control-nav flex-control-paging"> 
     <li><a>1</a></li> 
     <li><a>2</a></li> 
     <li><a>2</a></li> 
    </ol> 
   </div> 
   <!-- 轮播图结束 --> 
  </div> 
  </center>    
  <div class="m-manufacturer"> 
   <div class="g-row"> 
    <div class="m-cate"> 
     <header class="hd"> 
        <div class="left"> 
           <h3 class="name">品牌制造商</h3> 
           <small class="frontName">工厂直达消费者，剔除品牌溢价</small> 
        </div> 
        <div class="right"> 
            <a class="moreItems" href="/home/brand" target="_blank"> 更多制造商 &gt; </a> 
        </div> 
     </header> 
     <div class="bd"> 
	      <div class="manufacturerList">
		       <!-- first -->
		       <a class="manufacturer first large " href="/home/branddetails?id={{$ma[0]->m_id}}" target="_blank"> 
		        <div class="mask"></div> 
		        <div class="name">{{$maker[0]->m_name}}</div> 
		        <div class="price">{{$ma[0]->g_price}}元起</div> 
		       <img src="{{$maker[0]->m_pic}}" data-original="" alt="" class="j-lazyload img-lazyload img img-noBgPic" /> </a> 
		       <!-- second -->
		       <a class="manufacturer large middle " href="/home/branddetails?id={{$ma[1]->m_id}}" target="_blank"> 
		        <div class="mask"></div> 
		        <div class="name">{{$maker[1]->m_name}}</div> 
		        <div class="price">{{$ma[1]->g_price}}元起</div> 
		       <img src="{{$maker[1]->m_pic}}" data-original="" alt="" class="j-lazyload img-lazyload img img-noBgPic" /> </a> 
		       <!-- thred -->
		       <a class="manufacturer small " href="/home/branddetails?id={{$ma[2]->m_id}}" target="_blank"> 
		        <div class="mask"></div> 
		        <div class="name">{{$maker[2]->m_name}}</div> 
		        <div class="price">{{$ma[2]->g_price}}元起</div> 
		       <img src="{{$maker[2]->m_pic}}" data-original="" alt="" class="j-lazyload img-lazyload img img-noBgPic" /> </a> 
		       <!-- fourth -->
		       <a class="manufacturer small last" href="/home/branddetails?id={{$ma[3]->m_id}}" target="_blank"> 
		        <div class="mask"></div> 
		        <div class="name">{{$maker[3]->m_name}}</div> 
		        <div class="price">{{$ma[3]->g_price}}元起</div>
		       <img src="{{$maker[3]->m_pic}}" data-original="" alt="" class="j-lazyload img-lazyload img img-noBgPic" /> </a> 
	      </div> 
     </div> 
    </div> 
   </div> 
  </div> 

  <div class="m-newItem j-newItem"> 
   <div class="g-row"> 
    <div class="m-cate"> 
     <header class="hd"> 
      <div class="left"> 
       <h3 class="name">新品首发</h3> 
       <small class="frontName">周一周四上新，为你寻觅世间好物</small> 
      </div> 
      <div class="right"> 
       <a class="f-fz14" href="/item/newItem?_stat_area=newItem_link&amp;_stat_referer=index" target="_blank"></a> 
      </div> 
     </header> 
     <div class="bd"> 
      <ul class="itemList"> 
      @foreach($newp as $i=>$j)
       <div id="js-newItemSlick" class="js-newItemslick m-newItemSlick"> 
        <li class="item"> 
         <div class="m-product j-product"> 
          <div class="hd"> 
           <a href="/home/xiangqing?id={{$j->g_id}}&gcid={{$j->gc_id}}&gcpid={{$j->gc_pid}}" title="男式纯棉收口圆领T恤" target="_blank">
            <img src="{{explode(',',$j->g_pic)[4]}}" data-lazy="" alt="男式纯棉收口圆领T恤" class="img-lazyload img j-img1 white" /> 
            <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="" class="img-lazyload img j-img2 f-hide" />
            </a>
          </div>
             @if($j->g_yhid>0)
                 <span class="u-promotion-tag" style="position:relative;top:0px;">限时购</span>
             @else
                 <span class="u-promotion-tag" style=" background-color:rgba(0,0,0,0);position:relative;top:0px;"></span>
             @endif
          <div class="bd"> 
           <h4 class="name"> <a class="name" href="/item/detail?id=1130021&amp;_stat_area=mod_newItem_item_1&amp;_stat_referer=index" title="男式纯棉收口圆领T恤" target="_blank"> </a> <a href="/item/detail?id=1130021&amp;_stat_area=mod_newItem_item_1&amp;_stat_referer=index" title="男式纯棉收口圆领T恤" target="_blank"> {{$j->g_name}} </a> </h4> 
           <p class="price"> <span>&yen;{{$j->g_price}}</span> 
           @foreach($brr[$i] as $k=>$l)
           <span class="sign"><a href="/home/branddetail?id={{$l->m_id}}">{{$l->m_name}}</a></span> </p> 
           @endforeach
          </div> 
         </div> </li> 
       </div>
       @endforeach 
      </ul> 
     </div> 
    </div> 
   </div> 
  </div> 
  <div class="m-indexPopularItem j-indexPopularItem"> 
   <div class="g-row"> 
    <header class="hd"> 
	     <div class="left"> 
	      <h3 class="name">人气推荐</h3> 
     </div> 
     <div class="tabList"> 
      <ul class="list"> 
       <!-- <a class="item tab-sel" data-index="0" href="javascript:;"><li class=" ">编辑推荐</li></a>  -->
       <a class="item tab-sel it" data-index="1" href="javascript:;"><li class="">收藏榜</li></a> 
       <a class="item it" data-index="2" href="javascript:;"><li class="">热销总榜</li></a> 
      </ul> 
     </div> 
     <div class="right">
      <a href="/home/renqi" target="_blank">更多推荐 &gt;</a>
     </div> 
    </header> 
    <div class="j-showContainer showContainer"> 
      @foreach($sc as $u=>$i)
     <div class="m-product down"> 
        <div class="hd"> 
         <a href="/home/xiangqing?id={{$i->g_id}}&gcid={{$i->gc_id}}&gcpid={{$i->gc_pid}}" title="速干防滑沐浴拖鞋" target="_blank"> <img src="{{explode(',',$i->g_pic)[4]}}" height="50px;" data-original="" class="j-lazyload img-lazyload img white" /> </a>
            @if($i->g_yhid>0)
                <span class="u-promotion-tag"  style="position:relative;top:-40px;">限时购</span>
            @endif
        </div>
        <div class="bd">
         <h4 class="name"> <a class="name" href="/home/xiangqing?id={{$i->g_id}}&gcid={{$i->gc_id}}&gcpid={{$i->gc_pid}}" title="" target="_blank"> <span class="name">{{$i->g_name}}</span> </a> </h4>
         <p class="price"> <span>&yen;{{$i->g_price}}</span> </p>
        </div> 
     </div> 
      @endforeach
    </div> 
    <div class="j-showContainer showContainer f-hide">
    @foreach($rx as $t=>$y) 
     <div class="m-product down"> 
        <div class="hd"> 
         <a href="/home/xiangqing?id={{$y->g_id}}&gcid={{$y->gc_id}}&gcpid={{$y->gc_pid}}" title="" target="_blank"> <img src="{{explode(',',$y->g_pic)[4]}}" data-original="" alt="轻简四季居家拖鞋"  class="j-lazyload img-lazyload img white" /> </a>
            @if($y->g_yhid>0)
                <span class="u-promotion-tag" style="position:relative;top:-40px;">限时购</span>
            @endif
        </div>
        <div class="bd"> 
         <h4 class="name"> <a class="name" href="/home/xiangqing?id={{$y->g_id}}&gcid={{$y->gc_id}}&gcpid={{$y->gc_pid}}" title="" target="_blank"> <span class="name">{{$y->g_name}}</span> </a> </h4> 
         <p class="price"> <span>&yen;{{$y->g_price}}</span> </p> 
        </div> 
     </div>
     @endforeach 
    </div> 
   </div> 
  </div> 
   <!-- 限时购 -->
  @if($a == 1)
  <div id="flashSaleContainer"> 
   <div class="m-flashSale"> 
    <div class="g-row"> 
     <header class="hd"> 
      <h3 class="left">限时购</h3> 
      <a href="home/xianshi" target="_blank" class="right">更多抢购&nbsp;&gt;</a> 
     </header> 
     <section class="bd"> 
      <div class="flashSaleLt"> 
       <div class="screenHd">
        {{date("H",$lim->l_ctime)}}-点场
       </div> 
       <div class="line"></div> 
       <div class="screenEndTips">
        距离结束还剩
       </div> 
       <div class="m-countDown"> 
        <span class="w-cd j-hour" style="width: 100px;display:none;">{{date("Y/m/d H:i:s",$lim->l_ltime)}}</span> 
        <span class="w-cd j-hour jiao1" style="width: 100px;display:none;">{{$lim->l_id}}</span> 
        <span class="w-cd j-hour jian1">00</span>: 
        <span class="w-cd j-hour jian2">00</span>:
        <span class="w-cd j-hour jian3">00</span> 
       </div> 
       <span class="seeMoreBtn">查看全部&nbsp;&gt;</span> 
       <a href="home/xianshi" target="_blank" class="link"></a> 
      </div> 
      <div class="flashSaleRt flashItemList" id="flashItemList"> 
       @foreach($goo as $a=>$b)
       <section class="m-flashSaleProduct flashSaleItem-1"> 
        <div class="lt"> 
         <a href="/home/xiangqing?id={{$b->g_id}}&gcid={{$b->gc_id}}&gcpid={{$b->gc_pid}}" class="picIn" target="_blank" title="男式速暖功能内衣套装"> <img src="{{explode(',',$b->g_pic)[4]}}" data-original="" alt="男式速暖功能内衣套装" class="j-lazyload img-lazyload pic white" /> </a> 
        </div> 
        <div class="rt"> 
         <h2 class="itemName"><a href="/item/detail?id=1051009&amp;_stat_area=mod_limit_item_1&amp;_stat_referer=index" target="_blank" class="link">{{$b->g_name}}</a></h2> 
         <p class="itemDes" style="height: 60px;">{{$b->g_intro}}</p> 
         
         <div class="itemPrice"> 
          <span class="aPrice">限时价<span class="yuan">&yen;</span><span class="aPriceIn">{{$b->g_coupon}}</span></span> 
          <span class="oPrice">原价&nbsp;<span class="oPriceIn">&yen;{{$b->g_price}}</span></span> 
         </div> 
         <a class="w-btn tobuyBtn" target="_blank" href="/home/xiangqing?id={{$b->g_id}}&gcid={{$b->gc_id}}&gcpid={{$b->gc_pid}}">立即抢购</a> 
        </div> 
       </section> 
       @endforeach
      </div> 
     </section> 
    </div> 
   </div>
  </div>
 	@endif
    <!-- 限时购结束 -->
    <!-- 一二级菜单 -->
  <div class="m-newCates j-newCates"> 
  <!-- 一级菜单 -->
   @foreach($arr as $c=>$d)
   <div class="g-row"> 
    <div class="m-newCate"> 
     <header class="hd"> 
      <div class="left"> 
       <h3 class="name">{{$d->gc_title}}</h3> 
       <small class="frontName">{{$d->gc_info}}</small> 
      </div> 
      <div class="right"> 
      <!-- 二级菜单 -->
      @foreach($arrr[$c] as $e=>$f)
       <nav class="subCateList"> 
        <a class="item" href="/home/goods?gcid={{$d->gc_id}}&gctitle={{$d->gc_title}}#{{$f->gc_title}}" target="_blank"> {{$f->gc_title}} </a> 
        <b class="spilt">/</b> 
       </nav>
       @endforeach
       <a class="getMore" href="/home/goods?gcid={{$d->gc_id}}&gctitle={{$d->gc_title}}" target="_blank">查看更多 &gt;</a> 
      </div> 
     </header>
     <div class="banner">
      <a href="/home/goods?gcid={{$d->gc_id}}" target="_blank" class="wrap"> <img src="{{$d->gc_pic}}" data-original="" alt="" class="j-lazyload img-lazyload " /> </a> 
      </div>
     <div class="bd">
      <ul class="itemList"> 
      <!-- 一级菜单下的商品 -->
       @foreach($app[$c] as $g=>$h)
       <li class="item">
        <div class="m-product j-product"> 
         <div class="hd">
          <a href="home/xiangqing?id={{$h->g_id}}&&gcid={{$h->gc_id}}&&gcpid={{$h->gc_pid}}" title="" target="_blank"> 
            <img src="{{explode(',',$h->g_pic)[4]}}" data-original="" alt="" class="j-lazyload img-lazyload img" />
           </a>
         </div>
            @if($h->g_yhid>0)
                <span class="u-promotion-tag" style="position:relative;top:0px;">限时购</span>
            @else
                <span class="u-promotion-tag" style=" background-color:rgba(0,0,0,0);position:relative;top:0px;"></span>
            @endif
         <div class="bd"> 
          <h4 class="name"> 
            <a class="name" href="" title="" target="_blank"> </a>
            <a class="name" href="" title="" target="_blank"> <span class="name"></span> {{$h->g_name}} </a>
          </h4> 
          <p class="price"> <span>&yen;{{$h->g_price}}</span> </p> 
         </div> 
        </div>
       </li>
       @endforeach 
      </ul>
     </div> 
    </div> 
   </div>
   @endforeach  
  </div> 
   <!-- 一二级菜单结束 -->
  @endsection
  @section('js')
  <script>
 // 限时优惠活动js
      var lid = $('.jiao1').html();
   $(function(){
    init = setInterval(function(){
    // 获取活动结束时间
    	 var endtime = new Date($('.w-cd').html());
    // 获取当前时间
    	 var nowtime = new Date(); 
    // 得出剩余活动时间
   	   var dtime = Math.floor((endtime.getTime()-nowtime.getTime())/1000);
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
        // 发送ajax
          $.post('/home/del',{id:lid},function(data){
            // alert(data);
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
       $('.jian1').html(h);
       $('.jian2').html(m);
       $('.jian3').html(s);
    },1000)
   })

 // 人气推荐选项卡
   $(function(){
    // 人气推荐的选项卡单击事件
      $('.it').click(function(){
      // 给点击的加上样式  其余的删除样式
        $(this).addClass('tab-sel').siblings().removeClass('tab-sel');
      // 获取当前点击的索引
        var index = $(this).index();
      // 根据索引实现选项卡功能
        $('.j-showContainer').eq(index).removeClass('f-hide').siblings('.j-showContainer').addClass('f-hide');
      })
   })
   // 删除多余图片
     $(function(){
      // 
      $('#hei:eq(0)').css('display','block');
     })
  </script>
  @endsection