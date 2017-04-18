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
  }</style>
@if(empty($sea))
<div id="j-searchContainer">
 <div data-reactid=".0" style="" class="g-bd-list">
  <div data-reactid=".0.0" class="g-row">
   <div data-reactid=".0.0.0" class="m-searchResult">
    <div data-reactid=".0.0.0.0">
     <div data-reactid=".0.0.0.0.0" class="noResult">
      <p data-reactid=".0.0.0.0.0.0" class="tip"><span data-reactid=".0.0.0.0.0.0.0">您要的“</span><span data-reactid=".0.0.0.0.0.0.1">{{$sear}}</span><span data-reactid=".0.0.0.0.0.0.2">”还未上架</span></p>
      <p data-reactid=".0.0.0.0.0.1" class="slogan">以严谨的态度，为中国消费者甄选天下优品</p>
     </div>
    </div>
    <!-- <span data-reactid=".0.0.0.1"></span>
    <span data-reactid=".0.0.0.2"></span>
    <span data-reactid=".0.0.0.3"></span>
    <span data-reactid=".0.0.0.4"></span>
    <span data-reactid=".0.0.0.5"></span> -->
   </div>
  </div>
 </div>
</div>
  @else
  <div data-reactid=".0" style="" class="g-bd-list">
   <div data-reactid=".0.0" class="g-row">
    <div data-reactid=".0.0.0" class="m-searchResult">
     <span data-reactid=".0.0.0.0"></span>
     <div data-reactid=".0.0.0.1" class="m-crumbs m-crumbs-filter">
      <span data-reactid=".0.0.0.1.$0"><span data-reactid=".0.0.0.1.$0.0" class="crumb-name ">全部商品</span><i data-reactid=".0.0.0.1.$0.1" class="w-icon w-icon-arrow gap"></i></span>
      <span data-reactid=".0.0.0.1.$1"><span data-reactid=".0.0.0.1.$1.0" class="crumb-name z-cur">{{$sear}}</span><span data-reactid=".0.0.0.1.$1.1"></span></span>
     </div>
     <span data-reactid=".0.0.0.2"></span>
     <div data-reactid=".0.0.0.3" class="content">
      <div data-reactid=".0.0.0.3.0" class="m-sortbar">
       <div data-reactid=".0.0.0.3.0.0" class="category">
        <span data-reactid=".0.0.0.3.0.0.0" class="name">筛选结果：</span>
       </div>
      </div>
      <div data-reactid=".0.0.0.3.1" class="resultList">
       <ul data-reactid=".0.0.0.3.1.0" class="m-itemList ">
       @foreach($sea as $k=>$v)
        <li data-reactid=".0.0.0.3.1.0.$1079012" class="item" style="height: 382px;">
         <div data-reactid=".0.0.0.3.1.0.$1079012.0" class="m-product j-product ">
          <span data-reactid=".0.0.0.3.1.0.$1079012.0.0"></span>
          <div data-reactid=".0.0.0.3.1.0.$1079012.0.1" class="hd">
           <a data-reactid=".0.0.0.3.1.0.$1079012.0.1.0" target="_blank" title="Paris绅士休闲裤" href="/home/xiangqing?id={{$v->g_id}}&gcid={{$v->gc_id}}&gcpid={{$v->gc_pid}}"><img data-reactid=".0.0.0.3.1.0.$1079012.0.1.0.0" class="img img-lazyload j-lazyload  img-lazyloaded" alt="Paris绅士休闲裤" data-original="" src="{{explode(',',$v->g_pic)[0]}}" /><span data-reactid=".0.0.0.3.1.0.$1079012.0.1.0.1"></span></a>
          </div>
          @if($v->g_yhid>0)
           <span class="u-promotion-tag" style="position:relative;top:-5px;">限时购</span>
          @else
           <span class="u-promotion-tag" style=" background-color:rgba(0,0,0,0);position:relative;top:0px;"></span>
          @endif
          <div data-reactid=".0.0.0.3.1.0.$1079012.0.2" class="bd">
           <div data-reactid=".0.0.0.3.1.0.$1079012.0.2.0" class="prdtTags"></div>
           <h4 data-reactid=".0.0.0.3.1.0.$1079012.0.2.1" class="name"><a data-reactid=".0.0.0.3.1.0.$1079012.0.2.1.0" target="_blank" title="Paris绅士休闲裤" href="/home/xiangqing?id={{$v->g_id}}&gcid={{$v->gc_id}}&gcpid={{$v->gc_pid}}"><span data-reactid=".0.0.0.3.1.0.$1079012.0.2.1.0.0"></span><span data-reactid=".0.0.0.3.1.0.$1079012.0.2.1.0.1">{{$v->g_name}}</span></a></h4>
           <p data-reactid=".0.0.0.3.1.0.$1079012.0.2.2" class="price"><span data-reactid=".0.0.0.3.1.0.$1079012.0.2.2.0"><span data-reactid=".0.0.0.3.1.0.$1079012.0.2.2.0.0">&yen;</span><span data-reactid=".0.0.0.3.1.0.$1079012.0.2.2.0.1">{{$v->g_price}}</span></span><span data-reactid=".0.0.0.3.1.0.$1079012.0.2.2.1"></span><span data-reactid=".0.0.0.3.1.0.$1079012.0.2.2.2"></span></p>
           <div data-reactid=".0.0.0.3.1.0.$1079012.0.2.3">
            <hr data-reactid=".0.0.0.3.1.0.$1079012.0.2.3.0" />
            @foreach($mak[$k] as $q=>$w)
            <p data-reactid=".0.0.0.3.1.0.$1079012.0.2.3.1" class="desc"><span data-reactid=".0.0.0.3.1.0.$1079012.0.2.3.1.0">【</span><span data-reactid=".0.0.0.3.1.0.$1079012.0.2.3.1.1">{{$w->m_name}}</span><span data-reactid=".0.0.0.3.1.0.$1079012.0.2.3.1.2">】</span></p>
           	@endforeach
           </div>
          </div>
         </div>
         </li>
         @endforeach
       </ul>
      </div>
      <div data-reactid=".0.0.0.3.2" class="m-pager-con f-bcf">
       <div data-reactid=".0.0.0.3.2.0" class="m-pager m-hrz" id="j-pager" style="display: none;"></div>
      </div>
     </div>
    </div>
   </div>
  </div>
  @endif
@endsection