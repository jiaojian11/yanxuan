<!DOCTYPE html>
<html class="no-js">
 <head> 
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <title>网易严选 - 以严谨的态度，为中国消费者甄选天下优品</title> 
  <meta name="keywords" content="网易严选,严选,网易优选,网易甄选,网易优品,网易精选,甄选家,严选态度" /> 
  <meta name="description" content="网易严选秉承网易一贯的严谨态度，深入世界各地，严格把关所有商品的产地、工艺、原材料，甄选居家、厨房、饮食等各类商品，力求给你最优质的商品。" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="Cache-Control" content="no-transform" /> 
  <meta http-equiv="Cache-Control" content="no-siteapp" /> 
  <link rel="shortcut icon" href="/favicon.ico?r=gold" type="image/x-icon" /> 
  <meta property="qc:admins" content="365774662561636375" /> 
  <!-- 显示活动页面css -->
  <link rel="stylesheet" href="/homeCSS/css/index-eef5e7b40c.css">
  <link rel="stylesheet" href="/homeCSS/css/style-7d9bd7818b.css">
  <!-- 结束限时活动 -->
  <!-- 人气推荐css -->
  <link rel="stylesheet" href="{{asset('/homeCSS/css/list-1e54e7a3d2.css')}}" type="text/css" />
  <!-- 人气推荐结束 -->
  <link rel="stylesheet" href="{{asset('/homeCSS/css/style-dc9b8300df_1.css')}}" type="text/css" />
  <!-- 搜索结果 -->
  <link rel="stylesheet" href="{{asset('/homeCSS/css/search-50a93a1ae9.css')}}" type="text/css" />
  <!-- 搜索结果结束 -->
  <link rel="stylesheet" href="{{asset('/homeCSS/css/style-dc9b8300df_1.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('/homeCSS/css/123.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('/homeCSS/css/style-b2dc53f136.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('/homeCSS/css/index.css')}}" type="text/css" /> 
  <link rel="stylesheet" href="{{asset('/homeCSS/css/list-0b9fb955f7.css')}}" type="text/css" />  
  <link rel="stylesheet" href="{{asset('/homeCSS/css/reset.css')}}">
  <link rel="stylesheet" href="{{asset('/homeCSS/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('/homeCSS/css/index-34609791c6_1.css')}}" /> 
  <link rel="stylesheet" href="{{asset('/homeCSS/css/list-47c47248b8_14.css')}}" /> 
  <link rel="stylesheet" href="{{asset('/homeCSS/css/style-dc9b8300df_26.css')}}" /> 
  <!--[if lt IE 9]>
  <script src="js/ie-23e126e677_1.js"></script>
  <![endif]--> 
    <!--[if lt IE 8]>
  <meta http-equiv="refresh" content="1;url=/error/lowVersionBrowser" />
  <script>top.window.location.href='/error/lowVersionBrowser';</script>
  <![endif]--> 
 </head> 
 <body> 
  <!-- 头部 --> 
  <header class="g-hd" id="gTopbar"> 
   <div id="j-siteNav" class="m-siteNav"> 
    <div class="g-row"> 
     <p class="declare">好的生活，没那么贵</p> 
     <div class="m-noticeList noticeList j-topNoticeList s-blackSpeaker limitLength" style="display: block;"> 
      <ul class="j-list list"> 
       <li class="j-notice notice"> <a class="txt f-text-underline" href="/home/bufahuo" target="_blank"> 1月5日起刀具类产品新疆地区不发货 </a> </li> 
      </ul> 
     </div> 
     <div class="right"> 
      @if(session('u_account'))         
    <div class="custmService w-dropdown w-dropdown-custm"> 
     <span class="customerText js-custmServiceToggle" data-jq-dropdown="#js-customerServiceDropdown1"><a class="login j-topLogin" href="/home/personal" title="网易严选登录">{{session('u_account')}}</a><i></i></span> 
     <div class="jq-dropdown jq-dropdown-relative jq-dropdown-anchor-right" id="js-customerServiceDropdown1"> 
      <nav class="jq-dropdown-menu dropdownMenu"> 
       <a class="item" href="/home/order">订单管理</a> 
       <a class="item" href="/home/address">地址管理</a>
       <a class="item" href="/home/coupon">优惠券</a>
       <a class="item" href="/home/favorites">收藏夹</a>
       <a class="item" href="/home/out">退出登录</a> 
      </nav> 
     </div> 
    </div> 
      @else  <a class="login j-topLogin" href="/home/login" title="网易严选登录">登录</a> 
          <a class="register j-topRegister" data-href="" href="/home/register">注册</a> 
      @endif

      <div class="split"></div> 
      <a class="attitude" href="/attitude">严选态度</a> 
      <div class="split"></div> 
      <a class="attitude" href="/enterprise">企业采购</a> 
      <div class="split"></div> 
      <div class="custmService w-dropdown w-dropdown-custm"> 
       <span class="customerText js-custmServiceToggle" data-jq-dropdown="#js-customerServiceDropdown1">客户服务<i></i></span> 
       <div class="jq-dropdown jq-dropdown-relative jq-dropdown-anchor-right" id="js-customerServiceDropdown1"> 
        <nav class="jq-dropdown-menu dropdownMenu"> 
         <a class="item" href="/help">帮助中心</a> 
         <span class="item j-onlineService">在线客服</span> 
         <div class="itemHover"> 
          <div class="item"> 
           <span class="itemText">电话客服<span class="triangle"></span></span> 
          </div> 
          <div class="panel"> 
           <div class="servicePhoNum">
            400-0368-163
           </div> 
           <div class="serviceTime">
            9:00-22:00
           </div> 
          </div> 
         </div> 
         <a href="/help#business" class="item">商务合作</a> 
        </nav> 
       </div> 
      </div> 
      <div class="split"></div> 
      <div class="m-dropdown m-hdAppDownload"> 
       <a class="trigger j-downloadlink" target="_blank" href="#"> <i class="icon w-icon-normal icon-normal-phone-app"></i> <span class="txt">下载APP</span> </a> 
       <div class="bd"> 
        <div class="wrap"> 
         <div class="QRcode j-qrcode">
          <img src="/homeCSS/picture/3e14428f49e6ec4b8ae2599f8566fd01_1.png" />
         </div> 
         <span class="txt">扫码下载 首单立减8元</span> 
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
   <div id="js-funcTabWrap"> 
    <div id="js-funcTab" class="m-funcTab" style="display:block"> 
     <div class="g-row">
      <a class="tab-logo" href="/" title="网易严选" target="_top"></a> 
      <div class="tab-inner"> 
       <div class="m-search"> 
      <div class="jiang" style="">
        @if(session('u_account')) 
        <a class="w-button-cart j-button-cart" href="/home/cart" style="display:block;">
          <i class="w-icon-normal icon-normal-blackcart"></i>
          <!-- 先判断用户是否登陆  购物车图标红色圈里面商品的数量 -->
          <i class="w-icon-normal icon-normal-badge j-cart-num j-cart-nums">
              @if(session('u_account')) {{$number}} @else 0 @endif
          </i>
        </a>
        @else
        <a class="w-button-cart j-button-cart" href="/home/login" style="display:block;">
          <i class="w-icon-normal icon-normal-blackcart"></i>
          <!-- 先判断用户是否登陆  购物车图标红色圈里面商品的数量 -->
          <i class="w-icon-normal icon-normal-badge j-cart-num j-cart-nums">
           0
          </i>
        </a>
        @endif
        <!-- 购物车开始 -->
        <div class="j-mini-cart m-mini-cart j-newMiniCart" style="margin-top:-65px"> 
          <div id="newMiniCart"> 
            <div class="wrap">@if(session('u_account')) 
              <i class="tw-1"></i> 
              <i class="tw-2"></i> 
              <div class="g-cartInfo j-cartInfo"> 
                <div class="cartInfo-inner">
                    <!--  购物车内容开始-->
                    <!-- 遍历购物车内容开始 -->
                    @foreach($car as $k=>$v)
                    <!-- 该商品有一个属性 -->
                    @if($v->g_nature==1)
                    <div class="cartItem">
                      <div class="item item-left">
                         <a href="/home/xiangqing?id={{$v->g_id}}&gcid={{$v->gc_id}}&gcpid={{$v->gc_pid}}">
                           <img src="{{$v->g_pic}}"/>
                         </a>
                      </div>
                      <div class="item item-middle">
                         <p>
                           <a title="{{$v->g_name}}" href="/home/xiangqing?id={{$v->g_id}}&gcid={{$v-> gc_id}}&gcpid={{$v->gc_pid}}">{{$v->g_name}}</a>
                         </p>
                         <p>
                           <span title=" {{$v->gd_nature}}" class="specValue">{{$v->gd_nature}}</span> 
                           <span class="count" id="{{$v->gd_id}}">{{$v->carg_num}}</span>
                           <!-- x&nbsp; -->
                         </p>
                      </div>
                      <!--  -->
                      <div class="item item-right">
                         <p class="price">{{$v->g_price}}</p>
                         <p class="deleteItem j-deleteItem">
                           <i style="width:10px;height:10px;display:inline-block;" class="w-icon-normal icon-normal-cart-close"></i>
                         </p>
                         <input type="hidden" value="{{$v->gd_id}}" />
                      </div>
                    </div>
                    @else
                    <!-- 该商品有两个属性 -->
                    <div class="cartItem">
                      <div class="item item-left">
                        <a href="/home/xiangqing?id={{$v->g_id}}&gcid={{$v->gc_id}}&gcpid={{$v->gc_pid}}">
                          <img src="{{$v->g_pic}}">
                        </a>
                      </div>
                      <div class="item item-middle">
                        <p>
                          <a href="/home/xiangqing?id={{$v->g_id}}&gcid={{$v->gc_id}}&gcpid={{$v->gc_pid}}" title="{{$v->g_name}}">{{$v->g_name}}</a>
                        </p>
                        <p>
                          <span class="specValue" title=" {{$v->gd_color}} {{$v->gd_size}}">
                          {{$v->gd_color}}&nbsp;&nbsp;{{$v->gd_size}}</span>
                          <span class="count" id="{{$v->gd_id}}">{{$v->carg_num}}</span>
                         </p>
                       </div>
                       <div class="item item-right">
                         <p class="price">{{$v->g_price}}</p>
                         <p class="deleteItem j-deleteItem">
                            <i class="w-icon-normal icon-normal-cart-close" style="width:10px;height:10px;display:inline-block;"></i>
                         </p>
                         <input value="{{$v->gd_id}}" type="hidden">
                       </div>
                     </div>
                    @endif
                    @endforeach
                    <!-- 遍历购物车内容结束 -->
                    <!--  购物车内容结束-->
                </div> 
              </div>
              <div class="cartBottom"> 
                <div class="totalPrice">
                   商品合计:&nbsp;<span style="color:#BC4748;">&yen;</span>
                   <span id="cartmoney">{{$count}}</span><span style="color:#BC4748;">.00</span>
                </div> 
                <!--&yen; .00 -->
                <div class="goToCart">
                  <a href="/home/cart" class="btn  w-button-primary">去购物车结算</a>
                </div> 
             </div>
             @endif
              <!-- 结束判断用户是否登录 -->
            </div> 
          </div> 
        </div>
        <!-- 购物车结束 -->
      </div>
      <script type="text/javascript" src="/adminCSS/js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript">
      // 购物车点击删除商品的(x)执行的js
        $('.j-deleteItem').live('click',function(){

          // 获取点击该商品的详情表的gd_id
          gdid=$(this).next().val();

          // 获取点击当前商品的框,为后期删除后移除该商品用
          goodsdiv=$(this).parents('.cartItem');
           
          // 获取当前购物车里面商品的数量
          cartnums=$('.j-cart-nums').html();

          // 获取当前购物车里面的总的金额
          cartmoney=$('#cartmoney').html();

          // 获取点击删除该商品的数量
          num=$(this).parent().prev().find('.count').html();

          // 获取点击删除该商品的单价
          g_price=$(this).prev().html();

          // 计算出点击删除商品的总价钱
            agprice=num*g_price;

          // 计算出购物车删除商品后的价钱
          cartmoney-=agprice;

          // 计算出点击删除商品后购物车里面商品总数
          cartnums-=num;

          // ajax
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          $.post('/home/delgoods',{gdid:gdid},function(data){
              if(data==1){
                goodsdiv.remove();

                // 更新购物车中商品的总数量
                if(cartnums!=0){
                    $('.j-cart-nums').html(cartnums);
                    $('.j-cart-num2').html(cartnums);
                }else{
                    $('.j-cart-nums').html(0);
                    $('.j-cart-num2').html(0);
                }
                  
                // 更新购物车中商品的总价钱
                $('#cartmoney').html(cartmoney);

              }
          })
        })
      </script>
           <form action="/home/search" method="post">
               <div class="m-searchInput" id="j-search">

                   <div class="w-button-search j-searchButton">
                       <button style="background-color:rgb(255,255,255);"><i class="w-icon-normal icon-normal-search" type="submit"></i></button>
                   </div>
                   {{ csrf_field() }}
                   <input type="text" maxlength="100" autocomplete="off" class="w-searchInput j-searchInput" name="search" value="" placeholder="" data-defaultword="" data-searchurl="" />
                   <div class="m-ppnl f-hide j-searchSuggest">
                       <div class="j-ssContent"></div>
                   </div>
               </div>
           </form>
       </div> 
       <ul class="tab-nav"> 
        <li class="nav-item active first"> <a class="topLevel" title="首页" href="/">首页</a> </li> 
        @foreach($arr as $k=>$v)
        <li class="j-nav-item nav-item "> <a class="topLevel" href="/home/goods?gcid={{$v->gc_id}}&&gctitle={{$v->gc_title}}" title="{{$v->gc_title}}">{{$v->gc_title}}</a> 
         <div id="one" class="j-nav-dropdown nav-dropdown" style="display:none" > 
          <div class="j-nav-cateCard nav-cateCard"> 
           <ul class="card-list"> 
           @foreach($arrr[$k] as $a=>$b)
            <li class="item"> <a class="nav-subCate" href="/home/goods?gcid={{$v->gc_id}}&&gctitle={{$v->gc_title}}#{{$b->gc_title}}" title="{{$b->gc_title}}"> <img class="w-icon-44" src="{{$b->gc_pic}}" alt="{{$b->gc_title}}" /> <p class="text">{{$b->gc_title}}</p> </a> </li> 
            @endforeach
          </div> 

         </div> </li> 
         @endforeach 
        <li class="split fixed-hide"></li> 
        <li class="nav-item fixed-hide "> <a class="topLevel">专题</a> </li> 
        <li class="nav-item fixed-hide last"> <a class="topLevel">甄选家</a> </li> 
       </ul>
        @if(session('u_account'))
       <a class="w-cart j-cart" href="/home/cart"> <i class="w-icon-normal icon-normal-blackcart"></i> <i class="w-icon-normal icon-normal-badge j-cart-num j-cart-num2 ">
       @if(session('u_account')) {{$number}} @else 0 @endif</i> </a> 
        @else
        <a class="w-cart j-cart" href="/home/login"> <i class="w-icon-normal icon-normal-blackcart"></i> <i class="w-icon-normal icon-normal-badge j-cart-num j-cart-num2 ">
        0 </i></a> 
        @endif
      <!--<div class="m-mini-cart j-mini-cart">
      <div class="wrap">
      <i class="tw-1"></i>
      <i class="tw-2"></i>
      <img src="" alt="">
      <a class="btn w-button w-button-primary" href="/cart">结算</a>
      </div>
      </div>-->
      </div> 
      
      
    <!--  <div class="notLogin"> 
      <a class="login j-topLogin" href="/home/login" title="网易严选登录">登录</a> 
      <a class="register j-topRegister" data-href="" href="/home/register">注册</a> 
     </div>  -->
     

     </div> 
    </div> 
   </div>  
  </header> 
