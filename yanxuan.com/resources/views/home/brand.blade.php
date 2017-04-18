@extends('home.layout.index')
@section('contents') 
 <div class="g-bd f-bcf5"> 
   <div class="g-row"> 
    <div class="m-crumbs m-crumbs-bcf"> 
     <a href="/">首页</a> 
     <span class="w-icon w-icon-arrow"></span> 
     <span class="z-cur">品牌制造商</span> 
    </div> 
   </div> 
   <div class="g-row"> 
    <div class="w-tagTitle f-txtcenter"> 
     <span class="title">品牌制造商</span> 
     <span class="subTitle">工厂直达消费者，剔除品牌溢价</span> 
    </div> 

    @foreach($res as $k=>$v)
    
    <div class="m-tag f-left f-margin-left-20" style="width:510px;"> 
     <a class="hd" href="/home/branddetails?id={{$v->m_id}}" target="_blank"> <img src="{{$v->m_pic}}" alt="" /> </a> 
     <div class="bd"> 
      <span class="title"> <a href="/home/branddetails?id={{$v->m_id}}" target="_blank">{{$v->m_name}}</a> </span> 
      <div class="desp f-txt-assist j-tagDesp" style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 2; visibility: visible;">
      {{$v->m_info}}
      </div> 
      <a class="link" href="/home/branddetails?id={{$v->m_id}}" target="_blank">{{$goods[$k]->g_price}}元起 <span class="w-icon-normal icon-normal-rightSkip"></span></a> 
     </div> 
    </div>  
    @endforeach
    

   </div> 
 </div> 
@endsection