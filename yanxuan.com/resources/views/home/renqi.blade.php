@extends('home.layout.index')
@section('contents')

    <div data-reactid=".0.0" class="m-recommond">
     <h2 data-reactid=".0.0.0" class="m-popularHd">人气好物推荐，它们最受欢迎</h2>
     <div data-reactid=".0.0.1" class="g-row">
      <h3 data-reactid=".0.0.1.0" class="w-head">－收藏榜－</h3>
      <ul data-reactid=".0.0.1.1" class="m-itemList w-recommondCt">
      @foreach($sc as $q=>$w)
       <li data-reactid=".0.0.1.1.$1116033" class="item">
        <div data-reactid=".0.0.1.1.$1116033.0" class="m-product j-product m-popProduct">
         <span data-reactid=".0.0.1.1.$1116033.0.0"></span>
         <div data-reactid=".0.0.1.1.$1116033.0.1" class="hd">
          <a data-reactid=".0.0.1.1.$1116033.0.1.0" target="_blank" title="{{$w->g_name}}" href="/home/xiangqing?id={{$w->g_id}}&gcid={{$w->gc_id}}&gcpid={{$w->gc_pid}}"><img data-reactid=".0.0.1.1.$1116033.0.1.0.0" class="img img-lazyload j-lazyload  img-lazyloaded" alt="多功能人体工学转椅" data-original="http://yanxuan.nosdn.127.net/6f603ae6943ab938d81b5d607b2c3ea3.png?imageView&amp;quality=95&amp;thumbnail=220x220" src="{{explode(',',$w->g_pic)[4]}}" /><span data-reactid=".0.0.1.1.$1116033.0.1.0.1"></span><span data-reactid=".0.0.1.1.$1116033.0.1.0.2"></span></a>
         </div>
         <div data-reactid=".0.0.1.1.$1116033.0.2" class="bd">
          <h4 data-reactid=".0.0.1.1.$1116033.0.2.1" class="name"><a data-reactid=".0.0.1.1.$1116033.0.2.1.0" target="_blank" title="{{$w->g_name}}" href="/home/xiangqing?id={{$w->g_id}}&gcid={{$w->gc_id}}&gcpid={{$w->gc_pid}}"><span data-reactid=".0.0.1.1.$1116033.0.2.1.0.0"></span><span data-reactid=".0.0.1.1.$1116033.0.2.1.0.1">{{$w->g_name}}</span></a></h4>
          <p data-reactid=".0.0.1.1.$1116033.0.2.2" class="price"><span data-reactid=".0.0.1.1.$1116033.0.2.2.0"><span data-reactid=".0.0.1.1.$1116033.0.2.2.0.0">&yen;</span><span data-reactid=".0.0.1.1.$1116033.0.2.2.0.1">{{$w->g_price}}</span></span><span data-reactid=".0.0.1.1.$1116033.0.2.2.1"></span><span data-reactid=".0.0.1.1.$1116033.0.2.2.2"></span></p>
          <span data-reactid=".0.0.1.1.$1116033.0.2.3"></span>
         </div>
        </div>
        </li>
        @endforeach
      </ul>
     </div>
    </div>
    <div data-reactid=".0.2" class="m-hotSale">
     <div data-reactid=".0.2.0" class="g-row">
      <h3 data-reactid=".0.2.0.0" class="w-head">－热销总榜－</h3>
      <ul data-reactid=".0.2.0.1" class="m-itemList w-hotSaleCt">
      @foreach($rx as $k=>$v)
       <li data-reactid=".0.2.0.1.$1027018" class="item">
        <div data-reactid=".0.2.0.1.$1027018.0" class="m-product j-product m-popProduct">
         <span data-reactid=".0.2.0.1.$1027018.0.0"></span>
         <div data-reactid=".0.2.0.1.$1027018.0.1" class="hd">
          <a data-reactid=".0.2.0.1.$1027018.0.1.0" target="_blank" title="{{$v->g_name}}" href="/home/xiangqing?id={{$v->g_id}}&gcid={{$v->gc_id}}&gcpid={{$v->gc_pid}}"><img data-reactid=".0.2.0.1.$1027018.0.1.0.0" class="img img-lazyload j-lazyload " alt="轻简四季居家拖鞋" data-original="" src="{{explode(',',$v->g_pic)[4]}}" /><span data-reactid=".0.2.0.1.$1027018.0.1.0.1"></span>
           </a>
         </div>
         <div data-reactid=".0.2.0.1.$1027018.0.2" class="bd">
          <h4 data-reactid=".0.2.0.1.$1027018.0.2.1" class="name"><a data-reactid=".0.2.0.1.$1027018.0.2.1.0" target="_blank" title="{{$v->g_name}}" href="/home/xiangqing?id={{$v->g_id}}&gcid={{$v->gc_id}}&gcpid={{$v->gc_pid}}"><span data-reactid=".0.2.0.1.$1027018.0.2.1.0.0"></span><span data-reactid=".0.2.0.1.$1027018.0.2.1.0.1">{{$v->g_name}}</span></a></h4>
          <p data-reactid=".0.2.0.1.$1027018.0.2.2" class="price"><span data-reactid=".0.2.0.1.$1027018.0.2.2.0"><span data-reactid=".0.2.0.1.$1027018.0.2.2.0.0">&yen;</span><span data-reactid=".0.2.0.1.$1027018.0.2.2.0.1">{{$v->g_price}}</span></span><span data-reactid=".0.2.0.1.$1027018.0.2.2.1"></span><span data-reactid=".0.2.0.1.$1027018.0.2.2.2"></span></p>
          <span data-reactid=".0.2.0.1.$1027018.0.2.3"></span>
         </div>
        </div>
        </li>
        @endforeach
      </ul>
     </div>
    </div>
 
@endsection