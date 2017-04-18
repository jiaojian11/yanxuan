@extends('home.layout.index')

@section('contents')
		
	<link rel="stylesheet" href="/homeCSS/css/manufacturer-b83df8714a.css">

	  <div id="j-manufacturer">
	   <div data-reactid=".0" class="g-bd-list">
	    <div data-reactid=".0.0" class="g-row">
	     <div data-reactid=".0.0.0" class="m-crumbs ">
	      <span data-reactid=".0.0.0.$0"><a data-reactid=".0.0.0.$0.0" href="/" class="crumb-url ">首页</a><i data-reactid=".0.0.0.$0.1" class="w-icon w-icon-arrow gap"></i></span>
	      <span data-reactid=".0.0.0.$1"><a data-reactid=".0.0.0.$1.0" href="/home/brand" class="crumb-url ">品牌制造商</a><i data-reactid=".0.0.0.$1.1" class="w-icon w-icon-arrow gap"></i></span>
	      <span data-reactid=".0.0.0.$2"><span data-reactid=".0.0.0.$2.0" class="crumb-name z-cur">{{$m->m_name}}</span><span data-reactid=".0.0.0.$2.1"></span></span>
	     </div>
	    </div>
	    <div data-reactid=".0.1" class="g-row">
	     <div data-reactid=".0.1.0" class="m-manufacturer">
	      <div data-reactid=".0.1.0.0" class="hd">
	       <div data-reactid=".0.1.0.0.0" style="background-image:url({{$m->m_pic}});" class="m-manufacturerHd">
	        <div data-reactid=".0.1.0.0.0.0" class="inner">
	         <div data-reactid=".0.1.0.0.0.0.0" class="table">
	          <div data-reactid=".0.1.0.0.0.0.0.0" class="cell">
	           <h3 data-reactid=".0.1.0.0.0.0.0.0.0" class="title">{{$m->m_name}}</h3>
	           <p data-reactid=".0.1.0.0.0.0.0.0.1" class="desc">{{$m->m_info}}</p>
	          </div>
	         </div>
	        </div>
	       </div>
	      </div>
	      <div data-reactid=".0.1.0.1" class="bd">
	       <p data-reactid=".0.1.0.1.0" class="label"><strong data-reactid=".0.1.0.1.0.0" class="f-txt-red">&quot;{{$m->m_name}}&quot;</strong><span data-reactid=".0.1.0.1.0.1">筛选结果：</span></p>
	       <ul data-reactid=".0.1.0.1.1" class="m-itemList m-manufacturerItemList">
	       @foreach($res as $k=>$v)
	        <li data-reactid=".0.1.0.1.1.$1089002" class="item">
	         <div data-reactid=".0.1.0.1.1.$1089002.0" class="m-product j-product ">
	          <span data-reactid=".0.1.0.1.1.$1089002.0.0"></span>
	          <div data-reactid=".0.1.0.1.1.$1089002.0.1" class="hd">
	           <a data-reactid=".0.1.0.1.1.$1089002.0.1.0" target="_blank" title="{{$v->g_name}}" href="/home/xiangqing?id={{$v->g_id}}&gcid={{$v->gc_id}}&gcpid={{$v->gc_pid}}"><img data-reactid=".0.1.0.1.1.$1089002.0.1.0.0" class="img img-lazyload j-lazyload  img-lazyloaded" alt="{{$v->g_name}}" data-original="" src="{{explode(',',$v->g_pic)[4]}}" /><span data-reactid=".0.1.0.1.1.$1089002.0.1.0.1"></span>
	            </a>
	          </div>
	          <div data-reactid=".0.1.0.1.1.$1089002.0.2" class="bd">
	           <div data-reactid=".0.1.0.1.1.$1089002.0.2.0" class="prdtTags"></div>
	           <h4 data-reactid=".0.1.0.1.1.$1089002.0.2.1" class="name"><a data-reactid=".0.1.0.1.1.$1089002.0.2.1.0" target="_blank" title="{{$v->g_name}}" href="/home/xiangqing?id={{$v->g_id}}&gcid={{$v->gc_id}}&gcpid={{$v->gc_pid}}"><span data-reactid=".0.1.0.1.1.$1089002.0.2.1.0.0"></span><span data-reactid=".0.1.0.1.1.$1089002.0.2.1.0.1">{{$v->g_name}}</span></a></h4>
	           <p data-reactid=".0.1.0.1.1.$1089002.0.2.2" class="price"><span data-reactid=".0.1.0.1.1.$1089002.0.2.2.0"><span data-reactid=".0.1.0.1.1.$1089002.0.2.2.0.0">&yen;</span><span data-reactid=".0.1.0.1.1.$1089002.0.2.2.0.1">{{$v->g_price}}</span></span><span data-reactid=".0.1.0.1.1.$1089002.0.2.2.1"></span><span data-reactid=".0.1.0.1.1.$1089002.0.2.2.2"></span></p>
	           <div data-reactid=".0.1.0.1.1.$1089002.0.2.3">
	            <hr data-reactid=".0.1.0.1.1.$1089002.0.2.3.0" />
	            <p data-reactid=".0.1.0.1.1.$1089002.0.2.3.1" class="desc">{{$v->g_intro}}</p>
	           </div>
	          </div>
	         </div></li>
	       @endforeach
	       </ul>
	      </div>
	     </div>





	     <!-- 人气推荐 -->
	     <div data-reactid=".0.1.1" class="m-hotRec">
	      <div data-reactid=".0.1.1.0" class="title">
	       人气推荐
	      </div>
	      <div data-reactid=".0.1.1.1" class="listwrap">
	       <ul data-reactid=".0.1.1.1.0" class="m-itemList list">

			@foreach($sui as $key=>$value)
	        <li data-reactid=".0.1.1.1.0.$1116033" class="item">
	         <div data-reactid=".0.1.1.1.0.$1116033.0" class="m-product j-product ">
	          <span data-reactid=".0.1.1.1.0.$1116033.0.0"></span>
	          <div data-reactid=".0.1.1.1.0.$1116033.0.1" class="hd">
	           <a data-reactid=".0.1.1.1.0.$1116033.0.1.0" target="_blank" title="多功能人体工学转椅" href="/home/xiangqing?id={{$value->g_id}}&gcid={{$value->gc_id}}&gcpid={{$value->gc_pid}}"><img data-reactid=".0.1.1.1.0.$1116033.0.1.0.0" class="img img-lazyload j-lazyload f-bcf img-lazyloaded" alt="多功能人体工学转椅" data-original="" src="{{explode(',',$value->g_pic)[4]}}" /><span data-reactid=".0.1.1.1.0.$1116033.0.1.0.1"></span><span data-reactid=".0.1.1.1.0.$1116033.0.1.0.2"></span></a>
	          </div>
	          <div data-reactid=".0.1.1.1.0.$1116033.0.2" class="bd">
	           <div data-reactid=".0.1.1.1.0.$1116033.0.2.0" class="prdtTags">
	            
	           </div>
	           <h4 data-reactid=".0.1.1.1.0.$1116033.0.2.1" class="name"><a data-reactid=".0.1.1.1.0.$1116033.0.2.1.0" target="_blank" title="多功能人体工学转椅" href="/home/xiangqing?id={{$value->g_id}}&gcid={{$value->gc_id}}&gcpid={{$value->gc_pid}}"><span data-reactid=".0.1.1.1.0.$1116033.0.2.1.0.0"></span><span data-reactid=".0.1.1.1.0.$1116033.0.2.1.0.1">{{$value->g_name}}</span></a></h4>
	           <p data-reactid=".0.1.1.1.0.$1116033.0.2.2" class="price"><span data-reactid=".0.1.1.1.0.$1116033.0.2.2.0"><span data-reactid=".0.1.1.1.0.$1116033.0.2.2.0.0">&yen;</span><span data-reactid=".0.1.1.1.0.$1116033.0.2.2.0.1">{{$value->g_price}}.00</span></span><span data-reactid=".0.1.1.1.0.$1116033.0.2.2.1"></span><span data-reactid=".0.1.1.1.0.$1116033.0.2.2.2"></span></p>
	           <span data-reactid=".0.1.1.1.0.$1116033.0.2.3"></span>
	          </div>
	         </div></li>
			@endforeach

	       </ul>
	      </div>
	     </div>
	    </div>
	   </div>
	  </div>
@endsection