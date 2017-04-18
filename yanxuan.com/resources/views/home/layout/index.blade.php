{!! App\Http\Controllers\home\ShowController::test() !!}
  @section('contents')
  <center>
  <div class="g-bd" > 
   <!-- 轮播图开始 --> 
   <div id="banner_tabs" class="flexslider"> 
    <ul class="slides"> 
     <li> <a title="" target="_blank" href="#"> <img width="1920" height="482" alt="" style="background: url({{asset('/homeCSS/picture/4d86782f3e24ab5fab0bb288e8762fd5.jpg')}}) no-repeat center;background-size: 100% 100%;" src="{{asset('/homeCSS/images/alpha.png')}}" /> </a> </li> 
     <li> <a title="" href="#"> <img width="1920" height="482" alt="" style="background: url({{asset('/homeCSS/images/banner2.jpg')}}) no-repeat center;" src="{{asset('/homeCSS/images/alpha.png')}}" /> </a> </li> 
     <li> <a title="" href="#"> <img width="1920" height="482" alt="" style="background: url({{asset('/homeCSS/images/banner3.jpg')}}) no-repeat center;" src="{{asset('/homeCSS/images/alpha.png')}}" /> </a> </li> 
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
       <a class="moreItems" href="/manufacturer/list?_stat_area=manufacturer_link&amp;_stat_referer=index" target="_blank"> 更多制造商 &gt; </a> 
      </div> 
     </header> 
     <div class="bd"> 
      <div class="manufacturerList"> 
       <a class="manufacturer first large " href="/item/manufacturer?tagId=1001038&amp;_stat_area=mod_manufacturer_1&amp;_stat_referer=index" target="_blank"> 
        <div class="mask"></div> 
        <div class="name">
         Coach制造商
        </div> 
        <div class="price">
         49元起
        </div> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/e27f9911521a157c63e3ce3b3e3b6184.jpg" alt="" class="j-lazyload img-lazyload img img-noBgPic" /> </a> 
       <a class="manufacturer large middle " href="/item/manufacturer?tagId=1026000&amp;_stat_area=mod_manufacturer_2&amp;_stat_referer=index" target="_blank"> 
        <div class="mask"></div> 
        <div class="name">
         CK制造商
         <span class="newShelfTag">上新</span>
        </div> 
        <div class="price">
         39元起
        </div> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/a3a80a6e5c2ce4018ff3c9d6e7513c10.jpg" alt="" class="j-lazyload img-lazyload img img-noBgPic" /> </a> 
       <a class="manufacturer small " href="/item/manufacturer?tagId=1001037&amp;_stat_area=mod_manufacturer_3&amp;_stat_referer=index" target="_blank"> 
        <div class="mask"></div> 
        <div class="name">
         新秀丽制造商
        </div> 
        <div class="price">
         59元起
        </div> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/d824afe357e61fbee097412c5894c6ce.jpg" alt="" class="j-lazyload img-lazyload img img-noBgPic" /> </a> 
       <a class="manufacturer small last" href="/item/manufacturer?tagId=1024000&amp;_stat_area=mod_manufacturer_4&amp;_stat_referer=index" target="_blank"> 
        <div class="mask"></div> 
        <div class="name">
         WMF制造商
        </div> 
        <div class="price">
         9.9元起
        </div> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/d03f3ed113b123b447e535df0437b0d8.jpg" alt="" class="j-lazyload img-lazyload img img-noBgPic" /> </a> 
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
       <a class="f-fz14" href="/item/newItem?_stat_area=newItem_link&amp;_stat_referer=index" target="_blank"> 更多新品 &gt; </a> 
      </div> 
     </header> 
     <div class="bd"> 
      <ul class="itemList"> 
       <div id="js-newItemSlick" class="js-newItemslick m-newItemSlick"> 
        <li class="item"> 
         <div class="m-product j-product"> 
          <div class="hd"> 
           <a href="/item/detail?id=1130021&amp;_stat_area=mod_newItem_item_1&amp;_stat_referer=index" title="男式纯棉收口圆领T恤" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/afca804bf984a5074f7ba0ea00c99f17.png?imageView&amp;quality=95&amp;thumbnail=265x265" alt="男式纯棉收口圆领T恤" class="img-lazyload img j-img1 white" /> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/a6e65282871b1b44d65481e24cec7418.jpg?imageView&amp;quality=95&amp;thumbnail=265x265" alt="男式纯棉收口圆领T恤" class="img-lazyload img j-img2 f-hide" /> </a> 
           <div class="colorNum" style="top:20px;">
             5色可选 
           </div> 
          </div> 
          <div class="bd"> 
           <h4 class="name"> <a class="name" href="/item/detail?id=1130021&amp;_stat_area=mod_newItem_item_1&amp;_stat_referer=index" title="男式纯棉收口圆领T恤" target="_blank"> </a> <a href="/item/detail?id=1130021&amp;_stat_area=mod_newItem_item_1&amp;_stat_referer=index" title="男式纯棉收口圆领T恤" target="_blank"> 男式纯棉收口圆领T恤 </a> </h4> 
           <p class="price"> <span>&yen;79</span> <span class="sign"><a href="/item/manufacturer?tagId=1001016">爱慕制造商</a></span> </p> 
          </div> 
         </div> </li> 
        <li class="item"> 
         <div class="m-product j-product"> 
          <div class="hd"> 
           <a href="/item/detail?id=1115066&amp;_stat_area=mod_newItem_item_2&amp;_stat_referer=index" title="乔棉舒麻条纹家居拖鞋" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/c351ed46e95431d5e86c6e657bf29895.png?imageView&amp;quality=95&amp;thumbnail=265x265" alt="乔棉舒麻条纹家居拖鞋" class="img-lazyload img j-img1 white" /> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/e5cae51696f43daca18aa88063faedbb.jpg?imageView&amp;quality=95&amp;thumbnail=265x265" alt="乔棉舒麻条纹家居拖鞋" class="img-lazyload img j-img2 f-hide" /> </a> 
           <div class="colorNum" style="top:20px;">
             4色可选 
           </div> 
          </div> 
          <div class="bd"> 
           <h4 class="name"> <a class="name" href="/item/detail?id=1115066&amp;_stat_area=mod_newItem_item_2&amp;_stat_referer=index" title="乔棉舒麻条纹家居拖鞋" target="_blank"> </a> <a href="/item/detail?id=1115066&amp;_stat_area=mod_newItem_item_2&amp;_stat_referer=index" title="乔棉舒麻条纹家居拖鞋" target="_blank"> 乔棉舒麻条纹家居拖鞋 </a> </h4> 
           <p class="price"> <span>&yen;29.9</span> <span class="sign"><a href="/item/manufacturer?tagId=1001000">MUJI制造商</a></span> </p> 
          </div> 
         </div> </li> 
        <li class="item"> 
         <div class="m-product j-product"> 
          <div class="hd"> 
           <a href="/item/detail?id=1125002&amp;_stat_area=mod_newItem_item_3&amp;_stat_referer=index" title="雪丝竹节纹男士休闲船袜" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/7fab6ae12b1933fc22a76b4c8dfd0c08.png?imageView&amp;quality=95&amp;thumbnail=265x265" alt="雪丝竹节纹男士休闲船袜" class="img-lazyload img j-img1 white" /> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/46202f28e2346f4f089f562bfdda2e80.jpg?imageView&amp;quality=95&amp;thumbnail=265x265" alt="雪丝竹节纹男士休闲船袜" class="img-lazyload img j-img2 f-hide" /> </a> 
           <div class="colorNum" style="top:20px;">
             3色可选 
           </div> 
          </div> 
          <div class="bd"> 
           <h4 class="name"> <a class="name" href="/item/detail?id=1125002&amp;_stat_area=mod_newItem_item_3&amp;_stat_referer=index" title="雪丝竹节纹男士休闲船袜" target="_blank"> </a> <a href="/item/detail?id=1125002&amp;_stat_area=mod_newItem_item_3&amp;_stat_referer=index" title="雪丝竹节纹男士休闲船袜" target="_blank"> 5双装&nbsp;雪丝竹节纹男士休闲船袜 </a> </h4> 
           <p class="price"> <span>&yen;39</span> <span class="sign"><a href="/item/manufacturer?tagId=1026000">CK制造商</a></span> </p> 
          </div> 
         </div> </li> 
        <li class="item"> 
         <div class="m-product j-product"> 
          <div class="hd"> 
           <a href="/item/detail?id=1147047&amp;_stat_area=mod_newItem_item_4&amp;_stat_referer=index" title="简约知性系列居家地毯 蓝粉拼接" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/bda805b0a2464b6ec33c18981565e50e.png?imageView&amp;quality=95&amp;thumbnail=265x265" alt="简约知性系列居家地毯 蓝粉拼接" class="img-lazyload img j-img1 white" /> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/014530f37555bba33eec154a36b78a02.jpg?imageView&amp;quality=95&amp;thumbnail=265x265" alt="简约知性系列居家地毯 蓝粉拼接" class="img-lazyload img j-img2 f-hide" /> </a> 
          </div> 
          <div class="bd"> 
           <h4 class="name"> <a class="name" href="/item/detail?id=1147047&amp;_stat_area=mod_newItem_item_4&amp;_stat_referer=index" title="简约知性系列居家地毯 蓝粉拼接" target="_blank"> </a> <a href="/item/detail?id=1147047&amp;_stat_area=mod_newItem_item_4&amp;_stat_referer=index" title="简约知性系列居家地毯 蓝粉拼接" target="_blank"> 简约知性系列居家地毯 蓝粉拼接 </a> </h4> 
           <p class="price"> <span>&yen;559</span> </p> 
          </div> 
         </div> </li> 
        <li class="item"> 
         <div class="m-product j-product"> 
          <div class="hd"> 
           <a href="/item/detail?id=1142011&amp;_stat_area=mod_newItem_item_5&amp;_stat_referer=index" title="2017明前精品西湖龙井 100克" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/95eccf3dd5e299b786c2abea9e94c640.png?imageView&amp;quality=95&amp;thumbnail=265x265" alt="2017明前精品西湖龙井 100克" class="img-lazyload img j-img1 white" /> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/7c74de3a2312c53141103c05e43c5f54.jpg?imageView&amp;quality=95&amp;thumbnail=265x265" alt="2017明前精品西湖龙井 100克" class="img-lazyload img j-img2 f-hide" /> </a> 
          </div> 
          <div class="bd"> 
           <h4 class="name"> <a class="name" href="/item/detail?id=1142011&amp;_stat_area=mod_newItem_item_5&amp;_stat_referer=index" title="2017明前精品西湖龙井 100克" target="_blank"> </a> <a href="/item/detail?id=1142011&amp;_stat_area=mod_newItem_item_5&amp;_stat_referer=index" title="2017明前精品西湖龙井 100克" target="_blank"> 2017明前精品西湖龙井 100克 </a> </h4> 
           <p class="price"> <span>&yen;660</span> </p> 
          </div> 
         </div> </li> 
        <li class="item"> 
         <div class="m-product j-product"> 
          <div class="hd"> 
           <a href="/item/detail?id=1143020&amp;_stat_area=mod_newItem_item_6&amp;_stat_referer=index" title="粽横四海端午粽礼盒 800克" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/200d4d59763af9a0781cca4a06175de7.png?imageView&amp;quality=95&amp;thumbnail=265x265" alt="粽横四海端午粽礼盒 800克" class="img-lazyload img j-img1 white" /> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/cb5b8e60139b0271f97adc7bf99a3000.jpg?imageView&amp;quality=95&amp;thumbnail=265x265" alt="粽横四海端午粽礼盒 800克" class="img-lazyload img j-img2 f-hide" /> </a> 
          </div> 
          <div class="bd"> 
           <h4 class="name"> <a class="name" href="/item/detail?id=1143020&amp;_stat_area=mod_newItem_item_6&amp;_stat_referer=index" title="粽横四海端午粽礼盒 800克" target="_blank"> </a> <a href="/item/detail?id=1143020&amp;_stat_area=mod_newItem_item_6&amp;_stat_referer=index" title="粽横四海端午粽礼盒 800克" target="_blank"> 粽横四海端午粽礼盒 800克 </a> </h4> 
           <p class="price"> <span>&yen;168</span> </p> 
          </div> 
         </div> </li> 
        <li class="item"> 
         <div class="m-product j-product"> 
          <div class="hd"> 
           <a href="/item/detail?id=1113017&amp;_stat_area=mod_newItem_item_7&amp;_stat_referer=index" title="皮面笔记本（粉）" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/f0998710ff13904c1f22c38e6ecf1776.png?imageView&amp;quality=95&amp;thumbnail=265x265" alt="皮面笔记本（粉）" class="img-lazyload img j-img1 white" /> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/8d814849a24175e14b2e1c009ba9a116.jpg?imageView&amp;quality=95&amp;thumbnail=265x265" alt="皮面笔记本（粉）" class="img-lazyload img j-img2 f-hide" /> </a> 
          </div> 
          <div class="bd"> 
           <h4 class="name"> <a class="name" href="/item/detail?id=1113017&amp;_stat_area=mod_newItem_item_7&amp;_stat_referer=index" title="皮面笔记本（粉）" target="_blank"> </a> <a href="/item/detail?id=1113017&amp;_stat_area=mod_newItem_item_7&amp;_stat_referer=index" title="皮面笔记本（粉）" target="_blank"> 皮面笔记本（粉） </a> </h4> 
           <p class="price"> <span>&yen;39</span> </p> 
          </div> 
         </div> </li> 
        <li class="item"> 
         <div class="m-product j-product"> 
          <div class="hd"> 
           <a href="/item/detail?id=1127005&amp;_stat_area=mod_newItem_item_8&amp;_stat_referer=index" title="零宿 一体扣牛皮零钱包" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/a826b3cc03e99da1c8cde8f4af2993f1.png?imageView&amp;quality=95&amp;thumbnail=265x265" alt="零宿 一体扣牛皮零钱包" class="img-lazyload img j-img1 white" /> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/f73e1d4f3de760f5978fdbd21405f020.jpg?imageView&amp;quality=95&amp;thumbnail=265x265" alt="零宿 一体扣牛皮零钱包" class="img-lazyload img j-img2 f-hide" /> </a> 
          </div> 
          <div class="bd"> 
           <h4 class="name"> <a class="name" href="/item/detail?id=1127005&amp;_stat_area=mod_newItem_item_8&amp;_stat_referer=index" title="零宿 一体扣牛皮零钱包" target="_blank"> </a> <a href="/item/detail?id=1127005&amp;_stat_area=mod_newItem_item_8&amp;_stat_referer=index" title="零宿 一体扣牛皮零钱包" target="_blank"> 零宿 一体扣牛皮零钱包 </a> </h4> 
           <p class="price"> <span>&yen;69</span> <span class="sign"><a href="/item/manufacturer?tagId=1034001">Alexander McQueen制造商</a></span> </p> 
          </div> 
         </div> </li> 
       </div> 
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
       <a class="item tab-sel" data-index="0" href="javascript:;"><li class=" ">编辑推荐</li></a> 
       <a class="item" data-index="1" href="javascript:;"><li class="">人气周榜</li></a> 
       <a class="item" data-index="2" href="javascript:;"><li class="">热销总榜</li></a> 
      </ul> 
     </div> 
     <div class="right">
      <a href="/item/recommend?_stat_area=pop_more&amp;_stat_referer=index" target="_blank">更多推荐 &gt;</a>
     </div> 
    </header> 
    <div class="j-showContainer showContainer "> 
     <div class="m-product "> 
      <div class="hd"> 
       <a href="/item/detail?id=1006001&amp;_stat_area=mod_popularItem_item_1&amp;_stat_referer=index" title="日式多功能颈枕 针织款" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/8514595288532f0bcbdc5c1e9d226066.png?imageView&amp;quality=95&amp;thumbnail=390x390" alt="日式多功能颈枕 针织款" class="j-lazyload img-lazyload img white" /> </a> 
       <div class="colorNum">
         4色可选 
       </div> 
      </div> 
      <div class="bd"> 
       <h4 class="name"> <a class="name" href="/item/detail?id=1006001&amp;_stat_area=mod_popularItem_item_1&amp;_stat_referer=index" title="日式多功能颈枕 针织款" target="_blank"> </a> <a class="name" href="/item/detail?id=1006001&amp;_stat_area=mod_popularItem_item_1&amp;_stat_referer=index" title="日式多功能颈枕 针织款" target="_blank"> <span class="name">日式多功能颈枕 针织款</span> </a> </h4> 
       <p class="price"> <span>&yen;69</span> </p> 
      </div> 
     </div> 
     <div class="m-product "> 
      <div class="hd"> 
       <a href="/item/detail?id=1143021&amp;_stat_area=mod_popularItem_item_2&amp;_stat_referer=index" title="网易智造空气感苹果手机壳" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/d9e4b3e48fb0cd041f004edc79d15d66.png?imageView&amp;quality=95&amp;thumbnail=180y170&amp;axis=10" alt="网易智造空气感苹果手机壳" class="j-lazyload img-lazyload img white" /> </a> 
      </div> 
      <div class="bd"> 
       <h4 class="name"> <a class="name" href="/item/detail?id=1143021&amp;_stat_area=mod_popularItem_item_2&amp;_stat_referer=index" title="网易智造空气感苹果手机壳" target="_blank"> <span class="newTag status">新品</span> </a> <a class="name" href="/item/detail?id=1143021&amp;_stat_area=mod_popularItem_item_2&amp;_stat_referer=index" title="网易智造空气感苹果手机壳" target="_blank"> <span class="name">网易智造空气感苹果手机壳</span> </a> </h4> 
       <p class="price"> <span>&yen;38</span> </p> 
      </div> 
     </div> 
     <div class="m-product "> 
      <div class="hd"> 
       <a href="/item/detail?id=1113010&amp;_stat_area=mod_popularItem_item_3&amp;_stat_referer=index" title="男式丝滑莫代尔平角内裤" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/2d0920b51331bb1636330ad8e07d1b97.png?imageView&amp;quality=95&amp;thumbnail=180y170&amp;axis=10" alt="男式丝滑莫代尔平角内裤" class="j-lazyload img-lazyload img white" /> </a> 
       <div class="colorNum">
         5色可选 
       </div> 
      </div> 
      <div class="bd"> 
       <h4 class="name"> <a class="name" href="/item/detail?id=1113010&amp;_stat_area=mod_popularItem_item_3&amp;_stat_referer=index" title="男式丝滑莫代尔平角内裤" target="_blank"> </a> <a class="name" href="/item/detail?id=1113010&amp;_stat_area=mod_popularItem_item_3&amp;_stat_referer=index" title="男式丝滑莫代尔平角内裤" target="_blank"> <span class="name">男式丝滑莫代尔平角内裤</span> </a> </h4> 
       <p class="price"> <span>&yen;59</span> </p> 
      </div> 
     </div> 
     <div class="m-product "> 
      <div class="hd"> 
       <a href="/item/detail?id=1066010&amp;_stat_area=mod_popularItem_item_4&amp;_stat_referer=index" title="折叠全自动晴雨伞" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/5ebc939f8acc055612f93d7d743d3644.png?imageView&amp;quality=95&amp;thumbnail=180y170&amp;axis=10" alt="折叠全自动晴雨伞" class="j-lazyload img-lazyload img white" /> </a> 
       <div class="colorNum">
         2色可选 
       </div> 
      </div> 
      <div class="bd"> 
       <h4 class="name"> <a class="name" href="/item/detail?id=1066010&amp;_stat_area=mod_popularItem_item_4&amp;_stat_referer=index" title="折叠全自动晴雨伞" target="_blank"> </a> <a class="name" href="/item/detail?id=1066010&amp;_stat_area=mod_popularItem_item_4&amp;_stat_referer=index" title="折叠全自动晴雨伞" target="_blank"> <span class="name">折叠全自动晴雨伞</span> </a> </h4> 
       <p class="price"> <span>&yen;89</span> </p> 
      </div> 
     </div> 
     <div class="m-product down"> 
      <div class="hd"> 
       <a href="/item/detail?id=1019003&amp;_stat_area=mod_popularItem_item_5&amp;_stat_referer=index" title="日式色织水洗棉四件套" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/30c74fd8e3279869a5c84b46d7a42d41.png?imageView&amp;quality=95&amp;thumbnail=180y170&amp;axis=10" alt="日式色织水洗棉四件套" class="j-lazyload img-lazyload img white" /> </a> 
       <div class="colorNum">
         4色可选 
       </div> 
      </div> 
      <div class="bd"> 
       <h4 class="name"> <a class="name" href="/item/detail?id=1019003&amp;_stat_area=mod_popularItem_item_5&amp;_stat_referer=index" title="日式色织水洗棉四件套" target="_blank"> <span class="limitedBuyTag status">限时购</span> </a> <a class="name" href="/item/detail?id=1019003&amp;_stat_area=mod_popularItem_item_5&amp;_stat_referer=index" title="日式色织水洗棉四件套" target="_blank"> <span class="name">日式色织水洗棉四件套</span> </a> </h4> 
       <p class="price"> <span>&yen;219</span> </p> 
      </div> 
     </div> 
     <div class="m-product down"> 
      <div class="hd"> 
       <a href="/item/detail?id=1108027&amp;_stat_area=mod_popularItem_item_6&amp;_stat_referer=index" title="月见和菓子(芒果味棉花糖麻薯) 184克" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/e11f3710f2ce2f49f45412c5f1acc493.png?imageView&amp;quality=95&amp;thumbnail=180y170&amp;axis=10" alt="月见和菓子(芒果味棉花糖麻薯) 184克" class="j-lazyload img-lazyload img white" /> </a> 
      </div> 
      <div class="bd"> 
       <h4 class="name"> <a class="name" href="/item/detail?id=1108027&amp;_stat_area=mod_popularItem_item_6&amp;_stat_referer=index" title="月见和菓子(芒果味棉花糖麻薯) 184克" target="_blank"> </a> <a class="name" href="/item/detail?id=1108027&amp;_stat_area=mod_popularItem_item_6&amp;_stat_referer=index" title="月见和菓子(芒果味棉花糖麻薯) 184克" target="_blank"> <span class="name">月见和菓子(芒果味棉花糖麻薯) 184克</span> </a> </h4> 
       <p class="price"> <span>&yen;18</span> </p> 
      </div> 
     </div> 
     <div class="m-product down"> 
      <div class="hd"> 
       <a href="/item/detail?id=1085006&amp;_stat_area=mod_popularItem_item_7&amp;_stat_referer=index" title="银色哑光钢制指甲刀" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/d8d2a808ae9abdcdc337f521df0254ef.png?imageView&amp;quality=95&amp;thumbnail=180y170&amp;axis=10" alt="银色哑光钢制指甲刀" class="j-lazyload img-lazyload img white" /> </a> 
      </div> 
      <div class="bd"> 
       <h4 class="name"> <a class="name" href="/item/detail?id=1085006&amp;_stat_area=mod_popularItem_item_7&amp;_stat_referer=index" title="银色哑光钢制指甲刀" target="_blank"> <span class="newTag status">新品</span> </a> <a class="name" href="/item/detail?id=1085006&amp;_stat_area=mod_popularItem_item_7&amp;_stat_referer=index" title="银色哑光钢制指甲刀" target="_blank"> <span class="name">银色哑光钢制指甲刀</span> </a> </h4> 
       <p class="price"> <span>&yen;14.9</span> </p> 
      </div> 
     </div> 
    </div> 
    <div class="j-showContainer showContainer f-hide"> 
     <div class="m-product "> 
      <div class="hd"> 
       <a href="/item/detail?id=1046034&amp;_stat_area=mod_popularItem_item_1&amp;_stat_referer=index" title="速干防滑沐浴拖鞋" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/cc3d4ff07179e005347bd9afcf2faaec.png?imageView&amp;quality=95&amp;thumbnail=390x390" alt="速干防滑沐浴拖鞋" class="j-lazyload img-lazyload img white" /> </a> 
       <div class="colorNum">
         4色可选 
       </div> 
      </div> 
      <div class="bd"> 
       <h4 class="name"> <a class="name" href="/item/detail?id=1046034&amp;_stat_area=mod_popularItem_item_1&amp;_stat_referer=index" title="速干防滑沐浴拖鞋" target="_blank"> </a> <a class="name" href="/item/detail?id=1046034&amp;_stat_area=mod_popularItem_item_1&amp;_stat_referer=index" title="速干防滑沐浴拖鞋" target="_blank"> <span class="name">速干防滑沐浴拖鞋</span> </a> </h4> 
       <p class="price"> <span>&yen;24.9</span> </p> 
      </div> 
     </div> 
     <div class="m-product "> 
      <div class="hd"> 
       <a href="/item/detail?id=1125002&amp;_stat_area=mod_popularItem_item_2&amp;_stat_referer=index" title="雪丝竹节纹男士休闲船袜" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/7fab6ae12b1933fc22a76b4c8dfd0c08.png?imageView&amp;quality=95&amp;thumbnail=180y170&amp;axis=10" alt="雪丝竹节纹男士休闲船袜" class="j-lazyload img-lazyload img white" /> </a> 
       <div class="colorNum">
         3色可选 
       </div> 
      </div> 
      <div class="bd"> 
       <h4 class="name"> <a class="name" href="/item/detail?id=1125002&amp;_stat_area=mod_popularItem_item_2&amp;_stat_referer=index" title="雪丝竹节纹男士休闲船袜" target="_blank"> <span class="newTag status">新品</span> </a> <a class="name" href="/item/detail?id=1125002&amp;_stat_area=mod_popularItem_item_2&amp;_stat_referer=index" title="雪丝竹节纹男士休闲船袜" target="_blank"> <span class="name">5双装&nbsp;雪丝竹节纹男士休闲船袜</span> </a> </h4> 
       <p class="price"> <span>&yen;39</span> </p> 
      </div> 
     </div> 
     <div class="m-product "> 
      <div class="hd"> 
       <a href="/item/detail?id=1085013&amp;_stat_area=mod_popularItem_item_3&amp;_stat_referer=index" title="双底面淘米洗菜篮" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/5162001407fcff76c175ceb72f0f9d0d.png?imageView&amp;quality=95&amp;thumbnail=180y170&amp;axis=10" alt="双底面淘米洗菜篮" class="j-lazyload img-lazyload img white" /> </a> 
      </div> 
      <div class="bd"> 
       <h4 class="name"> <a class="name" href="/item/detail?id=1085013&amp;_stat_area=mod_popularItem_item_3&amp;_stat_referer=index" title="双底面淘米洗菜篮" target="_blank"> </a> <a class="name" href="/item/detail?id=1085013&amp;_stat_area=mod_popularItem_item_3&amp;_stat_referer=index" title="双底面淘米洗菜篮" target="_blank"> <span class="name">双底面淘米洗菜篮</span> </a> </h4> 
       <p class="price"> <span>&yen;29.9</span> </p> 
      </div> 
     </div> 
     <div class="m-product "> 
      <div class="hd"> 
       <a href="/item/detail?id=1030012&amp;_stat_area=mod_popularItem_item_4&amp;_stat_referer=index" title="暖暖绒毛包跟家居拖鞋" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/4762260cfbd335974ccbe7b7dda4544b.png?imageView&amp;quality=95&amp;thumbnail=180y170&amp;axis=10" alt="暖暖绒毛包跟家居拖鞋" class="j-lazyload img-lazyload img white" /> </a> 
       <div class="colorNum">
         4色可选 
       </div> 
      </div> 
      <div class="bd"> 
       <h4 class="name"> <a class="name" href="/item/detail?id=1030012&amp;_stat_area=mod_popularItem_item_4&amp;_stat_referer=index" title="暖暖绒毛包跟家居拖鞋" target="_blank"> </a> <a class="name" href="/item/detail?id=1030012&amp;_stat_area=mod_popularItem_item_4&amp;_stat_referer=index" title="暖暖绒毛包跟家居拖鞋" target="_blank"> <span class="name">暖暖绒毛包跟家居拖鞋</span> </a> </h4> 
       <p class="price"> <span>&yen;39</span> </p> 
      </div> 
     </div> 
     <div class="m-product down"> 
      <div class="hd"> 
       <a href="/item/detail?id=1127003&amp;_stat_area=mod_popularItem_item_5&amp;_stat_referer=index" title="AB面独立弹簧床垫 进口乳胶" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/6ad1813d123f7a80f84c2cfa5f8c7caf.png?imageView&amp;quality=95&amp;thumbnail=180y170&amp;axis=10" alt="AB面独立弹簧床垫 进口乳胶" class="j-lazyload img-lazyload img white" /> </a> 
      </div> 
      <div class="bd"> 
       <h4 class="name"> <a class="name" href="/item/detail?id=1127003&amp;_stat_area=mod_popularItem_item_5&amp;_stat_referer=index" title="AB面独立弹簧床垫 进口乳胶" target="_blank"> </a> <a class="name" href="/item/detail?id=1127003&amp;_stat_area=mod_popularItem_item_5&amp;_stat_referer=index" title="AB面独立弹簧床垫 进口乳胶" target="_blank"> <span class="name">AB面独立弹簧床垫 进口乳胶</span> </a> </h4> 
       <p class="price"> <span>&yen;2599</span> </p> 
      </div> 
     </div> 
     <div class="m-product down"> 
      <div class="hd"> 
       <a href="/item/detail?id=1113019&amp;_stat_area=mod_popularItem_item_6&amp;_stat_referer=index" title="20寸 PC膜拉链登机箱" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/6e5453a4709cebfec0d9ac8d9d508ef0.png?imageView&amp;quality=95&amp;thumbnail=180y170&amp;axis=10" alt="20寸 PC膜拉链登机箱" class="j-lazyload img-lazyload img white" /> </a> 
       <div class="colorNum">
         4色可选 
       </div> 
      </div> 
      <div class="bd"> 
       <h4 class="name"> <a class="name" href="/item/detail?id=1113019&amp;_stat_area=mod_popularItem_item_6&amp;_stat_referer=index" title="20寸 PC膜拉链登机箱" target="_blank"> </a> <a class="name" href="/item/detail?id=1113019&amp;_stat_area=mod_popularItem_item_6&amp;_stat_referer=index" title="20寸 PC膜拉链登机箱" target="_blank"> <span class="name">20寸 PC膜拉链登机箱</span> </a> </h4> 
       <p class="price"> <span>&yen;228</span> </p> 
      </div> 
     </div> 
     <div class="m-product down"> 
      <div class="hd"> 
       <a href="/item/detail?id=1085019&amp;_stat_area=mod_popularItem_item_7&amp;_stat_referer=index" title="20寸 纯PC“铝框”（非全铝）登机箱" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/6aece3fc566853c801eb0f7a660fb129.png?imageView&amp;quality=95&amp;thumbnail=180y170&amp;axis=10" alt="20寸 纯PC“铝框”（非全铝）登机箱" class="j-lazyload img-lazyload img white" /> </a> 
       <div class="colorNum">
         4色可选 
       </div> 
      </div> 
      <div class="bd"> 
       <h4 class="name"> <a class="name" href="/item/detail?id=1085019&amp;_stat_area=mod_popularItem_item_7&amp;_stat_referer=index" title="20寸 纯PC“铝框”（非全铝）登机箱" target="_blank"> </a> <a class="name" href="/item/detail?id=1085019&amp;_stat_area=mod_popularItem_item_7&amp;_stat_referer=index" title="20寸 纯PC“铝框”（非全铝）登机箱" target="_blank"> <span class="name">20寸 纯PC“铝框”（非全铝）登机箱</span> </a> </h4> 
       <p class="price"> <span>&yen;349</span> </p> 
      </div> 
     </div> 
    </div> 
    <div class="j-showContainer showContainer f-hide"> 
     <div class="m-product "> 
      <div class="hd"> 
       <a href="/item/detail?id=1027018&amp;_stat_area=mod_popularItem_item_1&amp;_stat_referer=index" title="轻简四季居家拖鞋" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/5b82dcec16bd928f23bdece213f54d2b.png?imageView&amp;quality=95&amp;thumbnail=390x390" alt="轻简四季居家拖鞋" class="j-lazyload img-lazyload img white" /> </a> 
       <div class="colorNum">
         6色可选 
       </div> 
      </div> 
      <div class="bd"> 
       <h4 class="name"> <a class="name" href="/item/detail?id=1027018&amp;_stat_area=mod_popularItem_item_1&amp;_stat_referer=index" title="轻简四季居家拖鞋" target="_blank"> </a> <a class="name" href="/item/detail?id=1027018&amp;_stat_area=mod_popularItem_item_1&amp;_stat_referer=index" title="轻简四季居家拖鞋" target="_blank"> <span class="name">轻简四季居家拖鞋</span> </a> </h4> 
       <p class="price"> <span>&yen;19.9</span> </p> 
      </div> 
     </div> 
     <div class="m-product "> 
      <div class="hd"> 
       <a href="/item/detail?id=1057029&amp;_stat_area=mod_popularItem_item_2&amp;_stat_referer=index" title="超柔天鹅绒连裤袜" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/a940b9a71c152af76b112920eb970bf2.png?imageView&amp;quality=95&amp;thumbnail=180y170&amp;axis=10" alt="超柔天鹅绒连裤袜" class="j-lazyload img-lazyload img white" /> </a> 
       <div class="colorNum">
         4色可选 
       </div> 
      </div> 
      <div class="bd"> 
       <h4 class="name"> <a class="name" href="/item/detail?id=1057029&amp;_stat_area=mod_popularItem_item_2&amp;_stat_referer=index" title="超柔天鹅绒连裤袜" target="_blank"> </a> <a class="name" href="/item/detail?id=1057029&amp;_stat_area=mod_popularItem_item_2&amp;_stat_referer=index" title="超柔天鹅绒连裤袜" target="_blank"> <span class="name">2双装&nbsp;超柔天鹅绒连裤袜</span> </a> </h4> 
       <p class="price"> <span>&yen;29</span> </p> 
      </div> 
     </div> 
     <div class="m-product "> 
      <div class="hd"> 
       <a href="/item/detail?id=1029006&amp;_stat_area=mod_popularItem_item_3&amp;_stat_referer=index" title="经典纯色防滑人字拖" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/9d2bd2182d71a34a4533f03c28b68ce8.png?imageView&amp;quality=95&amp;thumbnail=180y170&amp;axis=10" alt="经典纯色防滑人字拖" class="j-lazyload img-lazyload img white" /> </a> 
       <div class="colorNum">
         3色可选 
       </div> 
      </div> 
      <div class="bd"> 
       <h4 class="name"> <a class="name" href="/item/detail?id=1029006&amp;_stat_area=mod_popularItem_item_3&amp;_stat_referer=index" title="经典纯色防滑人字拖" target="_blank"> </a> <a class="name" href="/item/detail?id=1029006&amp;_stat_area=mod_popularItem_item_3&amp;_stat_referer=index" title="经典纯色防滑人字拖" target="_blank"> <span class="name">经典纯色防滑人字拖</span> </a> </h4> 
       <p class="price"> <span>&yen;39</span> </p> 
      </div> 
     </div> 
     <div class="m-product "> 
      <div class="hd"> 
       <a href="/item/detail?id=1021020&amp;_stat_area=mod_popularItem_item_4&amp;_stat_referer=index" title="男式基础平角内裤" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/5b53064605633a3f2f97b13bb103cf2f.png?imageView&amp;quality=95&amp;thumbnail=180y170&amp;axis=10" alt="男式基础平角内裤" class="j-lazyload img-lazyload img white" /> </a> 
       <div class="colorNum">
         4色可选 
       </div> 
      </div> 
      <div class="bd"> 
       <h4 class="name"> <a class="name" href="/item/detail?id=1021020&amp;_stat_area=mod_popularItem_item_4&amp;_stat_referer=index" title="男式基础平角内裤" target="_blank"> </a> <a class="name" href="/item/detail?id=1021020&amp;_stat_area=mod_popularItem_item_4&amp;_stat_referer=index" title="男式基础平角内裤" target="_blank"> <span class="name">2条装&nbsp;男式基础平角内裤</span> </a> </h4> 
       <p class="price"> <span>&yen;59</span> </p> 
      </div> 
     </div> 
     <div class="m-product down"> 
      <div class="hd"> 
       <a href="/item/detail?id=1024009&amp;_stat_area=mod_popularItem_item_5&amp;_stat_referer=index" title="简约便携防水运动包" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/3ee2fa6aabb671ff20cca4c45f2640bc.png?imageView&amp;quality=95&amp;thumbnail=180y170&amp;axis=10" alt="简约便携防水运动包" class="j-lazyload img-lazyload img white" /> </a> 
       <div class="colorNum">
         4色可选 
       </div> 
      </div> 
      <div class="bd"> 
       <h4 class="name"> <a class="name" href="/item/detail?id=1024009&amp;_stat_area=mod_popularItem_item_5&amp;_stat_referer=index" title="简约便携防水运动包" target="_blank"> </a> <a class="name" href="/item/detail?id=1024009&amp;_stat_area=mod_popularItem_item_5&amp;_stat_referer=index" title="简约便携防水运动包" target="_blank"> <span class="name">简约便携防水运动包</span> </a> </h4> 
       <p class="price"> <span>&yen;29</span> </p> 
      </div> 
     </div> 
     <div class="m-product down"> 
      <div class="hd"> 
       <a href="/item/detail?id=1006051&amp;_stat_area=mod_popularItem_item_6&amp;_stat_referer=index" title="皇室御用超柔毛巾" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/ad5a317216f9da495b144070ecf1f957.png?imageView&amp;quality=95&amp;thumbnail=180y170&amp;axis=10" alt="皇室御用超柔毛巾" class="j-lazyload img-lazyload img white" /> </a> 
       <div class="colorNum">
         8色可选 
       </div> 
      </div> 
      <div class="bd"> 
       <h4 class="name"> <a class="name" href="/item/detail?id=1006051&amp;_stat_area=mod_popularItem_item_6&amp;_stat_referer=index" title="皇室御用超柔毛巾" target="_blank"> </a> <a class="name" href="/item/detail?id=1006051&amp;_stat_area=mod_popularItem_item_6&amp;_stat_referer=index" title="皇室御用超柔毛巾" target="_blank"> <span class="name">2条装&nbsp;皇室御用超柔毛巾</span> </a> </h4> 
       <p class="price"> <span>&yen;59</span> </p> 
      </div> 
     </div> 
     <div class="m-product down"> 
      <div class="hd"> 
       <a href="/item/detail?id=1057031&amp;_stat_area=mod_popularItem_item_7&amp;_stat_referer=index" title="竖纹天鹅绒压力连裤袜" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/76a66b41e638450b71c683adf3317dea.png?imageView&amp;quality=95&amp;thumbnail=180y170&amp;axis=10" alt="竖纹天鹅绒压力连裤袜" class="j-lazyload img-lazyload img white" /> </a> 
       <div class="colorNum">
         3色可选 
       </div> 
      </div> 
      <div class="bd"> 
       <h4 class="name"> <a class="name" href="/item/detail?id=1057031&amp;_stat_area=mod_popularItem_item_7&amp;_stat_referer=index" title="竖纹天鹅绒压力连裤袜" target="_blank"> </a> <a class="name" href="/item/detail?id=1057031&amp;_stat_area=mod_popularItem_item_7&amp;_stat_referer=index" title="竖纹天鹅绒压力连裤袜" target="_blank"> <span class="name">2双装&nbsp;竖纹天鹅绒压力连裤袜</span> </a> </h4> 
       <p class="price"> <span>&yen;39</span> </p> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
   <!-- 限时购 -->
  <div id="flashSaleContainer"> 
   <div class="m-flashSale"> 
    <div class="g-row"> 
     <header class="hd"> 
      <h3 class="left">限时购</h3> 
      <a href="/flashSale/index?_stat_area=mod_limit_more&amp;_stat_referer=index" target="_blank" class="right">更多抢购&nbsp;&gt;</a> 
     </header> 
     <section class="bd"> 
      <div class="flashSaleLt"> 
       <div class="screenHd">
        -点场
       </div> 
       <div class="line"></div> 
       <div class="screenEndTips">
        距离结束还剩
       </div> 
       <div class="m-countDown"> 
        <span class="w-cd j-hour">00</span> 
        <span class="colon">:</span> 
        <span class="w-cd j-minute">00</span> 
        <span class="colon">:</span> 
        <span class="w-cd j-second">00</span> 
       </div> 
       <span class="seeMoreBtn">查看全部&nbsp;&gt;</span> 
       <a href="/flashSale/index?_stat_area=mod_limit_item_0&amp;_stat_referer=index" target="_blank" class="link"></a> 
      </div> 
      <div class="flashSaleRt flashItemList" id="flashItemList"> 
       <section class="m-flashSaleProduct flashSaleItem-1"> 
        <div class="lt"> 
         <a href="/item/detail?id=1051009&amp;_stat_area=mod_limit_item_1&amp;_stat_referer=index" class="picIn" target="_blank" title="男式速暖功能内衣套装"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/636f1bf5086267ec198001009439d5d1.png?imageView&amp;quality=95&amp;thumbnail=180x180" alt="男式速暖功能内衣套装" class="j-lazyload img-lazyload pic white" /> </a> 
        </div> 
        <div class="rt"> 
         <h2 class="itemName"><a href="/item/detail?id=1051009&amp;_stat_area=mod_limit_item_1&amp;_stat_referer=index" target="_blank" class="link">男式速暖功能内衣套装</a></h2> 
         <p class="itemDes">易受凉部位双层保暖，30min快速升温</p> 
         <div class="itemNum"> 
          <div class="numBar"> 
           <div class="numBarIn hasSellVolume" style="width: 144.75px"></div> 
          </div> 
          <div class="numTips">
           还剩193件
          </div> 
         </div> 
         <div class="itemPrice"> 
          <span class="aPrice">限时价<span class="yuan">&yen;</span><span class="aPriceIn">179</span></span> 
          <span class="oPrice">原价&nbsp;<span class="oPriceIn">&yen;239</span></span> 
         </div> 
         <a class="w-btn tobuyBtn" target="_blank" href="/item/detail?id=1051009&amp;_stat_area=mod_limit_item_1&amp;_stat_referer=index">立即抢购</a> 
        </div> 
       </section> 
       <section class="m-flashSaleProduct flashSaleItem-2"> 
        <div class="lt"> 
         <a href="/item/detail?id=1093005&amp;_stat_area=mod_limit_item_2&amp;_stat_referer=index" class="picIn" target="_blank" title="狐狸毛球针织帽"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/63b80aefd46762a9f9df1fc6a8e10068.png?imageView&amp;quality=95&amp;thumbnail=180x180" alt="狐狸毛球针织帽" class="j-lazyload img-lazyload pic white" /> </a> 
        </div> 
        <div class="rt"> 
         <h2 class="itemName"><a href="/item/detail?id=1093005&amp;_stat_area=mod_limit_item_2&amp;_stat_referer=index" target="_blank" class="link">狐狸毛球针织帽</a></h2> 
         <p class="itemDes">12cm狐狸毛球，简约经典样式</p> 
         <div class="itemNum"> 
          <div class="numBar"> 
           <div class="numBarIn hasSellVolume" style="width: 138.75px"></div> 
          </div> 
          <div class="numTips">
           还剩185件
          </div> 
         </div> 
         <div class="itemPrice"> 
          <span class="aPrice">限时价<span class="yuan">&yen;</span><span class="aPriceIn">55</span></span> 
          <span class="oPrice">原价&nbsp;<span class="oPriceIn">&yen;69</span></span> 
         </div> 
         <a class="w-btn tobuyBtn" target="_blank" href="/item/detail?id=1093005&amp;_stat_area=mod_limit_item_2&amp;_stat_referer=index">立即抢购</a> 
        </div> 
       </section> 
       <section class="m-flashSaleProduct flashSaleItem-3"> 
        <div class="lt"> 
         <a href="/item/detail?id=1065004&amp;_stat_area=mod_limit_item_3&amp;_stat_referer=index" class="picIn" target="_blank" title="悦己日式木质落地镜"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/05977cf923857db0c44b405bd87b096b.png?imageView&amp;quality=95&amp;thumbnail=180x180" alt="悦己日式木质落地镜" class="j-lazyload img-lazyload pic white" /> </a> 
        </div> 
        <div class="rt"> 
         <h2 class="itemName"><a href="/item/detail?id=1065004&amp;_stat_area=mod_limit_item_3&amp;_stat_referer=index" target="_blank" class="link">悦己日式木质落地镜</a></h2> 
         <p class="itemDes">流畅线条，日式简约</p> 
         <div class="itemNum"> 
          <div class="numBar"> 
           <div class="numBarIn hasSellVolume" style="width: 115.5px"></div> 
          </div> 
          <div class="numTips">
           还剩154件
          </div> 
         </div> 
         <div class="itemPrice"> 
          <span class="aPrice">限时价<span class="yuan">&yen;</span><span class="aPriceIn">159</span></span> 
          <span class="oPrice">原价&nbsp;<span class="oPriceIn">&yen;199</span></span> 
         </div> 
         <a class="w-btn tobuyBtn" target="_blank" href="/item/detail?id=1065004&amp;_stat_area=mod_limit_item_3&amp;_stat_referer=index">立即抢购</a> 
        </div> 
       </section> 
       <section class="m-flashSaleProduct flashSaleItem-4"> 
        <div class="lt"> 
         <a href="/item/detail?id=1043008&amp;_stat_area=mod_limit_item_4&amp;_stat_referer=index" class="picIn" target="_blank" title="草木染三角内裤（女童）"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/ac2251c571e0a7c610d48f1dbcbd2498.png?imageView&amp;quality=95&amp;thumbnail=180x180" alt="草木染三角内裤（女童）" class="j-lazyload img-lazyload pic white" /> </a> 
        </div> 
        <div class="rt"> 
         <h2 class="itemName"><a href="/item/detail?id=1043008&amp;_stat_area=mod_limit_item_4&amp;_stat_referer=index" target="_blank" class="link">草木染三角内裤（女童）</a></h2> 
         <p class="itemDes">柔滑细腻，亲肤舒适</p> 
         <div class="itemNum"> 
          <div class="numBar"> 
           <div class="numBarIn hasSellVolume" style="width: 129px"></div> 
          </div> 
          <div class="numTips">
           还剩172件
          </div> 
         </div> 
         <div class="itemPrice"> 
          <span class="aPrice">限时价<span class="yuan">&yen;</span><span class="aPriceIn">39</span></span> 
          <span class="oPrice">原价&nbsp;<span class="oPriceIn">&yen;59</span></span> 
         </div> 
         <a class="w-btn tobuyBtn" target="_blank" href="/item/detail?id=1043008&amp;_stat_area=mod_limit_item_4&amp;_stat_referer=index">立即抢购</a> 
        </div> 
       </section> 
      </div> 
     </section> 
    </div> 
   </div>
    <!-- 限时购结束 -->
  </div> 
  <div class="m-newCates j-newCates"> 
   <div class="g-row"> 
    <div class="m-newCate"> 
     <header class="hd"> 
      <div class="left"> 
       <h3 class="name">居家</h3> 
       <small class="frontName">回家，放松身心</small> 
      </div> 
      <div class="right"> 
       <nav class="subCateList"> 
        <a class="item" href="/item/list?categoryId=1005000&amp;_stat_area=mod_1_right_0&amp;_stat_referer=index&amp;subCategoryId=1008008" target="_blank"> 被枕 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1005000&amp;_stat_area=mod_1_right_1&amp;_stat_referer=index&amp;subCategoryId=1008009" target="_blank"> 床品件套 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1005000&amp;_stat_area=mod_1_right_2&amp;_stat_referer=index&amp;subCategoryId=1011003" target="_blank"> 床垫 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1005000&amp;_stat_area=mod_1_right_3&amp;_stat_referer=index&amp;subCategoryId=1010003" target="_blank"> 地垫 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1005000&amp;_stat_area=mod_1_right_4&amp;_stat_referer=index&amp;subCategoryId=1015000" target="_blank"> 家具 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1005000&amp;_stat_area=mod_1_right_5&amp;_stat_referer=index&amp;subCategoryId=1008002" target="_blank"> 舒坐 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1005000&amp;_stat_area=mod_1_right_6&amp;_stat_referer=index&amp;subCategoryId=1008016" target="_blank"> 灯具 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1005000&amp;_stat_area=mod_1_right_7&amp;_stat_referer=index&amp;subCategoryId=1011004" target="_blank"> 家饰 </a> 
       </nav> 
       <a class="getMore" href="/item/list?categoryId=1005000&amp;_stat_area=mod_1_more_1&amp;_stat_referer=index" target="_blank">查看更多 &gt;</a> 
      </div> 
     </header> 
     <div class="banner"> 
      <a href="http://you.163.com/item/detail?id=1084001&amp;_stat_area=mod_1_focus_1&amp;_stat_referer=index&amp;_stat_id=1005000" target="_blank" title="" class="wrap"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/210b932c68d831894f8db9cce418e2fe.jpg?imageView&amp;quality=95&amp;thumbnail=1090x310" alt="" class="j-lazyload img-lazyload " /> </a> 
     </div> 
     <div class="bd"> 
      <ul class="itemList"> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1130037&amp;_stat_area=mod_1_item_1&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="帆布丝羽绒多用坐垫" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/19ecd7c6f6f31219cf75117238d95139.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="帆布丝羽绒多用坐垫" class="j-lazyload img-lazyload img" /> </a> 
          <div class="colorNum">
            2色可选 
          </div> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1130037&amp;_stat_area=mod_1_item_1&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="帆布丝羽绒多用坐垫" target="_blank"> </a> <a class="name" href="/item/detail?id=1130037&amp;_stat_area=mod_1_item_1&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="帆布丝羽绒多用坐垫" target="_blank"> <span class="name">帆布丝羽绒多用坐垫</span> </a> </h4> 
          <p class="price"> <span>&yen;49</span> </p> 
         </div> 
        </div> </li> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1009012&amp;_stat_area=mod_1_item_2&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="可水洗舒柔丝羽绒枕" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/a196b367f23ccfd8205b6da647c62b84.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="可水洗舒柔丝羽绒枕" class="j-lazyload img-lazyload img" /> </a> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1009012&amp;_stat_area=mod_1_item_2&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="可水洗舒柔丝羽绒枕" target="_blank"> </a> <a class="name" href="/item/detail?id=1009012&amp;_stat_area=mod_1_item_2&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="可水洗舒柔丝羽绒枕" target="_blank"> <span class="name">可水洗舒柔丝羽绒枕</span> </a> </h4> 
          <p class="price"> <span>&yen;59</span> </p> 
         </div> 
        </div> </li> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1037011&amp;_stat_area=mod_1_item_3&amp;_stat_referer=index" title="安睡慢回弹记忆绵床垫" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/a03ea6f4509439acdafcb7ceba1debe0.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="安睡慢回弹记忆绵床垫" class="j-lazyload img-lazyload img" /> </a> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1037011&amp;_stat_area=mod_1_item_3&amp;_stat_referer=index" title="安睡慢回弹记忆绵床垫" target="_blank"> </a> <a class="name" href="/item/detail?id=1037011&amp;_stat_area=mod_1_item_3&amp;_stat_referer=index" title="安睡慢回弹记忆绵床垫" target="_blank"> <span class="name">安睡慢回弹记忆绵床垫</span> </a> </h4> 
          <p class="price"> <span>&yen;599</span> </p> 
         </div> 
        </div> </li> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1110008&amp;_stat_area=mod_1_item_4&amp;_stat_referer=index" title="全棉贡缎纯色床单" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/255a4888161f9b4fe530cf319f14551d.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="全棉贡缎纯色床单" class="j-lazyload img-lazyload img" /> </a> 
          <div class="colorNum">
            8色可选 
          </div> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1110008&amp;_stat_area=mod_1_item_4&amp;_stat_referer=index" title="全棉贡缎纯色床单" target="_blank"> </a> <a class="name" href="/item/detail?id=1110008&amp;_stat_area=mod_1_item_4&amp;_stat_referer=index" title="全棉贡缎纯色床单" target="_blank"> <span class="name">全棉贡缎纯色床单</span> </a> </h4> 
          <p class="price"> <span>&yen;99</span> </p> 
         </div> 
        </div> </li> 
      </ul> 
     </div> 
    </div> 
   </div> 
   <div class="g-row"> 
    <div class="m-newCate"> 
     <header class="hd"> 
      <div class="left"> 
       <h3 class="name">餐厨</h3> 
       <small class="frontName">爱，囿于厨房</small> 
      </div> 
      <div class="right"> 
       <nav class="subCateList"> 
        <a class="item" href="/item/list?categoryId=1005001&amp;_stat_area=mod_2_right_0&amp;_stat_referer=index&amp;subCategoryId=1005007" target="_blank"> 锅具 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1005001&amp;_stat_area=mod_2_right_1&amp;_stat_referer=index&amp;subCategoryId=1013005" target="_blank"> 刀铲 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1005001&amp;_stat_area=mod_2_right_2&amp;_stat_referer=index&amp;subCategoryId=1008012" target="_blank"> 功能厨具 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1005001&amp;_stat_area=mod_2_right_3&amp;_stat_referer=index&amp;subCategoryId=1005008" target="_blank"> 餐具 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1005001&amp;_stat_area=mod_2_right_4&amp;_stat_referer=index&amp;subCategoryId=1007000" target="_blank"> 杯壶 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1005001&amp;_stat_area=mod_2_right_5&amp;_stat_referer=index&amp;subCategoryId=1008013" target="_blank"> 茶具 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1005001&amp;_stat_area=mod_2_right_6&amp;_stat_referer=index&amp;subCategoryId=1008011" target="_blank"> 置物保鲜 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1005001&amp;_stat_area=mod_2_right_7&amp;_stat_referer=index&amp;subCategoryId=1005009" target="_blank"> 清洁 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1005001&amp;_stat_area=mod_2_right_8&amp;_stat_referer=index&amp;subCategoryId=1023000" target="_blank"> 厨房电器 </a> 
       </nav> 
       <a class="getMore" href="/item/list?categoryId=1005001&amp;_stat_area=mod_2_more_1&amp;_stat_referer=index" target="_blank">查看更多 &gt;</a> 
      </div> 
     </header> 
     <div class="banner"> 
      <a href="http://you.163.com/item/detail?id=1108002&amp;_stat_area=mod_2_focus_2&amp;_stat_referer=index&amp;_stat_id=1005001" target="_blank" title="" class="wrap"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/75035ff19b21629ea805dacf67f3260f.jpg?imageView&amp;quality=95&amp;thumbnail=1090x310" alt="" class="j-lazyload img-lazyload " /> </a> 
     </div> 
     <div class="bd"> 
      <ul class="itemList"> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1085013&amp;_stat_area=mod_2_item_1&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="双底面淘米洗菜篮" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/5162001407fcff76c175ceb72f0f9d0d.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="双底面淘米洗菜篮" class="j-lazyload img-lazyload img" /> </a> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1085013&amp;_stat_area=mod_2_item_1&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="双底面淘米洗菜篮" target="_blank"> </a> <a class="name" href="/item/detail?id=1085013&amp;_stat_area=mod_2_item_1&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="双底面淘米洗菜篮" target="_blank"> <span class="name">双底面淘米洗菜篮</span> </a> </h4> 
          <p class="price"> <span>&yen;29.9</span> </p> 
         </div> 
        </div> </li> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1006059&amp;_stat_area=mod_2_item_2&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="精密氧化锆陶瓷刀" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/ba0f202b099555f4c5348ae345c1138d.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="精密氧化锆陶瓷刀" class="j-lazyload img-lazyload img" /> </a> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1006059&amp;_stat_area=mod_2_item_2&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="精密氧化锆陶瓷刀" target="_blank"> </a> <a class="name" href="/item/detail?id=1006059&amp;_stat_area=mod_2_item_2&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="精密氧化锆陶瓷刀" target="_blank"> <span class="name">精密氧化锆陶瓷刀</span> </a> </h4> 
          <p class="price"> <span>&yen;29</span> </p> 
         </div> 
        </div> </li> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1111006&amp;_stat_area=mod_2_item_3&amp;_stat_referer=index" title="健康分类菜板" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/00cf01c18bf8ec3ed26a70210494038a.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="健康分类菜板" class="j-lazyload img-lazyload img" /> </a> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1111006&amp;_stat_area=mod_2_item_3&amp;_stat_referer=index" title="健康分类菜板" target="_blank"> </a> <a class="name" href="/item/detail?id=1111006&amp;_stat_area=mod_2_item_3&amp;_stat_referer=index" title="健康分类菜板" target="_blank"> <span class="name">健康分类菜板</span> </a> </h4> 
          <p class="price"> <span>&yen;89</span> </p> 
         </div> 
        </div> </li> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1046027&amp;_stat_area=mod_2_item_4&amp;_stat_referer=index" title="欧式白金线骨瓷餐具" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/ec259f8dc295eee2dad35a2a1ae51cc3.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="欧式白金线骨瓷餐具" class="j-lazyload img-lazyload img" /> </a> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1046027&amp;_stat_area=mod_2_item_4&amp;_stat_referer=index" title="欧式白金线骨瓷餐具" target="_blank"> </a> <a class="name" href="/item/detail?id=1046027&amp;_stat_area=mod_2_item_4&amp;_stat_referer=index" title="欧式白金线骨瓷餐具" target="_blank"> <span class="name">欧式白金线骨瓷餐具</span> </a> </h4> 
          <p class="price"> <span>&yen;49</span> </p> 
         </div> 
        </div> </li> 
      </ul> 
     </div> 
    </div> 
   </div> 
   <div class="g-row"> 
    <div class="m-newCate"> 
     <header class="hd"> 
      <div class="left"> 
       <h3 class="name">配件</h3> 
       <small class="frontName">配角，亦是主角</small> 
      </div> 
      <div class="right"> 
       <nav class="subCateList"> 
        <a class="item" href="/item/list?categoryId=1008000&amp;_stat_area=mod_3_right_0&amp;_stat_referer=index&amp;subCategoryId=1012001" target="_blank"> 功能箱包 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1008000&amp;_stat_area=mod_3_right_1&amp;_stat_referer=index&amp;subCategoryId=1010004" target="_blank"> 双肩包 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1008000&amp;_stat_area=mod_3_right_2&amp;_stat_referer=index&amp;subCategoryId=1008018" target="_blank"> 单肩包 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1008000&amp;_stat_area=mod_3_right_3&amp;_stat_referer=index&amp;subCategoryId=1008003" target="_blank"> 鞋 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1008000&amp;_stat_area=mod_3_right_4&amp;_stat_referer=index&amp;subCategoryId=1013000" target="_blank"> 靴 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1008000&amp;_stat_area=mod_3_right_5&amp;_stat_referer=index&amp;subCategoryId=1008010" target="_blank"> 拖鞋 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1008000&amp;_stat_area=mod_3_right_6&amp;_stat_referer=index&amp;subCategoryId=1008007" target="_blank"> 围巾件套 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1008000&amp;_stat_area=mod_3_right_7&amp;_stat_referer=index&amp;subCategoryId=1020008" target="_blank"> 配饰 </a> 
       </nav> 
       <a class="getMore" href="/item/list?categoryId=1008000&amp;_stat_area=mod_3_more_1&amp;_stat_referer=index" target="_blank">查看更多 &gt;</a> 
      </div> 
     </header> 
     <div class="banner"> 
      <a href="http://you.163.com/item/detail?id=1108026&amp;_stat_area=mod_3_focus_3&amp;_stat_referer=index&amp;_stat_id=1008000" target="_blank" title="" class="wrap"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/de4e0743fd4cb50139fc0843d78c9a68.jpg?imageView&amp;quality=95&amp;thumbnail=1090x310" alt="" class="j-lazyload img-lazyload " /> </a> 
     </div> 
     <div class="bd"> 
      <ul class="itemList"> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1027018&amp;_stat_area=mod_3_item_1&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="轻简四季居家拖鞋" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/5b82dcec16bd928f23bdece213f54d2b.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="轻简四季居家拖鞋" class="j-lazyload img-lazyload img" /> </a> 
          <div class="colorNum">
            6色可选 
          </div> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1027018&amp;_stat_area=mod_3_item_1&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="轻简四季居家拖鞋" target="_blank"> </a> <a class="name" href="/item/detail?id=1027018&amp;_stat_area=mod_3_item_1&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="轻简四季居家拖鞋" target="_blank"> <span class="name">轻简四季居家拖鞋</span> </a> </h4> 
          <p class="price"> <span>&yen;19.9</span> </p> 
         </div> 
        </div> </li> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1113019&amp;_stat_area=mod_3_item_2&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="20寸 PC膜拉链登机箱" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/6e5453a4709cebfec0d9ac8d9d508ef0.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="20寸 PC膜拉链登机箱" class="j-lazyload img-lazyload img" /> </a> 
          <div class="colorNum">
            4色可选 
          </div> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1113019&amp;_stat_area=mod_3_item_2&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="20寸 PC膜拉链登机箱" target="_blank"> </a> <a class="name" href="/item/detail?id=1113019&amp;_stat_area=mod_3_item_2&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="20寸 PC膜拉链登机箱" target="_blank"> <span class="name">20寸 PC膜拉链登机箱</span> </a> </h4> 
          <p class="price"> <span>&yen;228</span> </p> 
         </div> 
        </div> </li> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1089003&amp;_stat_area=mod_3_item_3&amp;_stat_referer=index" title="轩雅蓝调真丝领带" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/425ca11ca1d22ab3003e80c3ab0e63cf.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="轩雅蓝调真丝领带" class="j-lazyload img-lazyload img" /> </a> 
          <div class="colorNum">
            2色可选 
          </div> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1089003&amp;_stat_area=mod_3_item_3&amp;_stat_referer=index" title="轩雅蓝调真丝领带" target="_blank"> <span class="limitedBuyTag status">限时购</span> </a> <a class="name" href="/item/detail?id=1089003&amp;_stat_area=mod_3_item_3&amp;_stat_referer=index" title="轩雅蓝调真丝领带" target="_blank"> <span class="name">轩雅蓝调真丝领带</span> </a> </h4> 
          <p class="price"> <span>&yen;79</span> </p> 
         </div> 
        </div> </li> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1073000&amp;_stat_area=mod_3_item_4&amp;_stat_referer=index" title="男士帆船帆布鞋" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/efc7b0488311924a38d78f74d50f5771.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="男士帆船帆布鞋" class="j-lazyload img-lazyload img" /> </a> 
          <div class="colorNum">
            2色可选 
          </div> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1073000&amp;_stat_area=mod_3_item_4&amp;_stat_referer=index" title="男士帆船帆布鞋" target="_blank"> </a> <a class="name" href="/item/detail?id=1073000&amp;_stat_area=mod_3_item_4&amp;_stat_referer=index" title="男士帆船帆布鞋" target="_blank"> <span class="name">男士帆船帆布鞋</span> </a> </h4> 
          <p class="price"> <span>&yen;199</span> </p> 
         </div> 
        </div> </li> 
      </ul> 
     </div> 
    </div> 
   </div> 
   <div class="g-row"> 
    <div class="m-newCate"> 
     <header class="hd"> 
      <div class="left"> 
       <h3 class="name">服装</h3> 
       <small class="frontName">贴身的，要亲肤</small> 
      </div> 
      <div class="right"> 
       <nav class="subCateList"> 
        <a class="item" href="/item/list?categoryId=1010000&amp;_stat_area=mod_4_right_0&amp;_stat_referer=index&amp;subCategoryId=1010002" target="_blank"> 内裤 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1010000&amp;_stat_area=mod_4_right_1&amp;_stat_referer=index&amp;subCategoryId=1010001" target="_blank"> 内衣 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1010000&amp;_stat_area=mod_4_right_2&amp;_stat_referer=index&amp;subCategoryId=1008004" target="_blank"> 袜子 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1010000&amp;_stat_area=mod_4_right_3&amp;_stat_referer=index&amp;subCategoryId=1020009" target="_blank"> 外衣 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1010000&amp;_stat_area=mod_4_right_4&amp;_stat_referer=index&amp;subCategoryId=1013006" target="_blank"> 家居服 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1010000&amp;_stat_area=mod_4_right_5&amp;_stat_referer=index&amp;subCategoryId=1020010" target="_blank"> 衬衫 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1010000&amp;_stat_area=mod_4_right_6&amp;_stat_referer=index&amp;subCategoryId=1015001" target="_blank"> T恤 </a> 
       </nav> 
       <a class="getMore" href="/item/list?categoryId=1010000&amp;_stat_area=mod_4_more_1&amp;_stat_referer=index" target="_blank">查看更多 &gt;</a> 
      </div> 
     </header> 
     <div class="banner"> 
      <a href="http://you.163.com/item/detail?id=1057031&amp;_stat_area=mod_4_focus_4&amp;_stat_referer=index&amp;_stat_id=1010000" target="_blank" title="" class="wrap"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/42ec10ce0ea61c15e34bb1e72df8539a.jpg?imageView&amp;quality=95&amp;thumbnail=1090x310" alt="" class="j-lazyload img-lazyload " /> </a> 
     </div> 
     <div class="bd"> 
      <ul class="itemList"> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1057029&amp;_stat_area=mod_4_item_1&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="超柔天鹅绒连裤袜" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/a940b9a71c152af76b112920eb970bf2.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="超柔天鹅绒连裤袜" class="j-lazyload img-lazyload img" /> </a> 
          <div class="colorNum">
            4色可选 
          </div> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1057029&amp;_stat_area=mod_4_item_1&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="超柔天鹅绒连裤袜" target="_blank"> </a> <a class="name" href="/item/detail?id=1057029&amp;_stat_area=mod_4_item_1&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="超柔天鹅绒连裤袜" target="_blank"> <span class="name">2双装&nbsp;超柔天鹅绒连裤袜</span> </a> </h4> 
          <p class="price"> <span>&yen;29</span> </p> 
         </div> 
        </div> </li> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1021020&amp;_stat_area=mod_4_item_2&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="男式基础平角内裤" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/5b53064605633a3f2f97b13bb103cf2f.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="男式基础平角内裤" class="j-lazyload img-lazyload img" /> </a> 
          <div class="colorNum">
            4色可选 
          </div> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1021020&amp;_stat_area=mod_4_item_2&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="男式基础平角内裤" target="_blank"> </a> <a class="name" href="/item/detail?id=1021020&amp;_stat_area=mod_4_item_2&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="男式基础平角内裤" target="_blank"> <span class="name">2条装&nbsp;男式基础平角内裤</span> </a> </h4> 
          <p class="price"> <span>&yen;59</span> </p> 
         </div> 
        </div> </li> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1028007&amp;_stat_area=mod_4_item_3&amp;_stat_referer=index" title="女式双层纱家居服套装" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/b804b93059bfd30630471527c2d13819.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="女式双层纱家居服套装" class="j-lazyload img-lazyload img" /> </a> 
          <div class="colorNum">
            2色可选 
          </div> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1028007&amp;_stat_area=mod_4_item_3&amp;_stat_referer=index" title="女式双层纱家居服套装" target="_blank"> </a> <a class="name" href="/item/detail?id=1028007&amp;_stat_area=mod_4_item_3&amp;_stat_referer=index" title="女式双层纱家居服套装" target="_blank"> <span class="name">女式双层纱家居服套装</span> </a> </h4> 
          <p class="price"> <span>&yen;169</span> </p> 
         </div> 
        </div> </li> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1066032&amp;_stat_area=mod_4_item_4&amp;_stat_referer=index" title="男式半毛圈运动船袜" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/fce9d65d7625922c94a0d81279bbcc5f.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="男式半毛圈运动船袜" class="j-lazyload img-lazyload img" /> </a> 
          <div class="colorNum">
            4色可选 
          </div> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1066032&amp;_stat_area=mod_4_item_4&amp;_stat_referer=index" title="男式半毛圈运动船袜" target="_blank"> </a> <a class="name" href="/item/detail?id=1066032&amp;_stat_area=mod_4_item_4&amp;_stat_referer=index" title="男式半毛圈运动船袜" target="_blank"> <span class="name">3双装&nbsp;男式半毛圈运动船袜</span> </a> </h4> 
          <p class="price"> <span>&yen;49</span> </p> 
         </div> 
        </div> </li> 
      </ul> 
     </div> 
    </div> 
   </div> 
   <div class="g-row"> 
    <div class="m-newCate"> 
     <header class="hd"> 
      <div class="left"> 
       <h3 class="name">洗护</h3> 
       <small class="frontName">亲肤之物，严选天然</small> 
      </div> 
      <div class="right"> 
       <nav class="subCateList"> 
        <a class="item" href="/item/list?categoryId=1013001&amp;_stat_area=mod_5_right_0&amp;_stat_referer=index&amp;subCategoryId=1008001" target="_blank"> 毛巾 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1013001&amp;_stat_area=mod_5_right_1&amp;_stat_referer=index&amp;subCategoryId=1013004" target="_blank"> 香薰 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1013001&amp;_stat_area=mod_5_right_2&amp;_stat_referer=index&amp;subCategoryId=1013002" target="_blank"> 美妆 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1013001&amp;_stat_area=mod_5_right_3&amp;_stat_referer=index&amp;subCategoryId=1020001" target="_blank"> 面部护理 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1013001&amp;_stat_area=mod_5_right_4&amp;_stat_referer=index&amp;subCategoryId=1013003" target="_blank"> 护发 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1013001&amp;_stat_area=mod_5_right_5&amp;_stat_referer=index&amp;subCategoryId=1009000" target="_blank"> 日用清洁 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1013001&amp;_stat_area=mod_5_right_6&amp;_stat_referer=index&amp;subCategoryId=1020002" target="_blank"> 用具 </a> 
       </nav> 
       <a class="getMore" href="/item/list?categoryId=1013001&amp;_stat_area=mod_5_more_1&amp;_stat_referer=index" target="_blank">查看更多 &gt;</a> 
      </div> 
     </header> 
     <div class="banner"> 
      <a href="http://you.163.com/search?keyword=%E8%B0%B7%E9%A3%8E&amp;_stat_area=mod_5_focus_5&amp;_stat_referer=index&amp;_stat_id=1013001#page=1&amp;sortType=0&amp;descSorted=true&amp;categoryId=0&amp;matchType=0" target="_blank" title="" class="wrap"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/2b5056245100317672294b9ca343d975.jpg?imageView&amp;quality=95&amp;thumbnail=1090x310" alt="" class="j-lazyload img-lazyload " /> </a> 
     </div> 
     <div class="bd"> 
      <ul class="itemList"> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1124015&amp;_stat_area=mod_5_item_1&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="谷风一木 手帕纸" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/a5c1ada40b48035a6eaaf96f75b8aea3.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="谷风一木 手帕纸" class="j-lazyload img-lazyload img" /> </a> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1124015&amp;_stat_area=mod_5_item_1&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="谷风一木 手帕纸" target="_blank"> </a> <a class="name" href="/item/detail?id=1124015&amp;_stat_area=mod_5_item_1&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="谷风一木 手帕纸" target="_blank"> <span class="name">谷风一木 手帕纸</span> </a> </h4> 
          <p class="price"> <span>&yen;5.9</span> </p> 
         </div> 
        </div> </li> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1074002&amp;_stat_area=mod_5_item_2&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="日式插片木质桌面镜" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/d34ef614c03be83e5e05731bcfb88b63.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="日式插片木质桌面镜" class="j-lazyload img-lazyload img" /> </a> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1074002&amp;_stat_area=mod_5_item_2&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="日式插片木质桌面镜" target="_blank"> </a> <a class="name" href="/item/detail?id=1074002&amp;_stat_area=mod_5_item_2&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="日式插片木质桌面镜" target="_blank"> <span class="name">日式插片木质桌面镜</span> </a> </h4> 
          <p class="price"> <span>&yen;39</span> </p> 
         </div> 
        </div> </li> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1085002&amp;_stat_area=mod_5_item_3&amp;_stat_referer=index" title="卷直一体陶瓷美发梳" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/23abbaaba61933cdc78de9daa1ab0517.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="卷直一体陶瓷美发梳" class="j-lazyload img-lazyload img" /> </a> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1085002&amp;_stat_area=mod_5_item_3&amp;_stat_referer=index" title="卷直一体陶瓷美发梳" target="_blank"> </a> <a class="name" href="/item/detail?id=1085002&amp;_stat_area=mod_5_item_3&amp;_stat_referer=index" title="卷直一体陶瓷美发梳" target="_blank"> <span class="name">卷直一体陶瓷美发梳</span> </a> </h4> 
          <p class="price"> <span>&yen;129</span> </p> 
         </div> 
        </div> </li> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1039002&amp;_stat_area=mod_5_item_4&amp;_stat_referer=index" title="精梳AB纱格毛巾" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/f378a9c4d322c736b724ac5f99f6d8bf.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="精梳AB纱格毛巾" class="j-lazyload img-lazyload img" /> </a> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1039002&amp;_stat_area=mod_5_item_4&amp;_stat_referer=index" title="精梳AB纱格毛巾" target="_blank"> </a> <a class="name" href="/item/detail?id=1039002&amp;_stat_area=mod_5_item_4&amp;_stat_referer=index" title="精梳AB纱格毛巾" target="_blank"> <span class="name">3条装&nbsp;精梳AB纱格毛巾</span> </a> </h4> 
          <p class="price"> <span>&yen;89</span> </p> 
         </div> 
        </div> </li> 
      </ul> 
     </div> 
    </div> 
   </div> 
   <div class="g-row"> 
    <div class="m-newCate"> 
     <header class="hd"> 
      <div class="left"> 
       <h3 class="name">婴童</h3> 
       <small class="frontName">爱，从心开始</small> 
      </div> 
      <div class="right"> 
       <nav class="subCateList"> 
        <a class="item" href="/item/list?categoryId=1011000&amp;_stat_area=mod_6_right_0&amp;_stat_referer=index&amp;subCategoryId=1020003" target="_blank"> 服饰 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1011000&amp;_stat_area=mod_6_right_1&amp;_stat_referer=index&amp;subCategoryId=1011001" target="_blank"> 妈咪 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1011000&amp;_stat_area=mod_6_right_2&amp;_stat_referer=index&amp;subCategoryId=1020005" target="_blank"> 寝居 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1011000&amp;_stat_area=mod_6_right_3&amp;_stat_referer=index&amp;subCategoryId=1020006" target="_blank"> 玩具 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1011000&amp;_stat_area=mod_6_right_4&amp;_stat_referer=index&amp;subCategoryId=1020004" target="_blank"> 用品 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1011000&amp;_stat_area=mod_6_right_5&amp;_stat_referer=index&amp;subCategoryId=1020007" target="_blank"> 喂养 </a> 
       </nav> 
       <a class="getMore" href="/item/list?categoryId=1011000&amp;_stat_area=mod_6_more_1&amp;_stat_referer=index" target="_blank">查看更多 &gt;</a> 
      </div> 
     </header> 
     <div class="banner"> 
      <a href="http://you.163.com/item/detail?id=1125026&amp;_stat_area=mod_6_focus_6&amp;_stat_referer=index&amp;_stat_id=1011000" target="_blank" title="" class="wrap"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/0b351b4ede53871dbaf64c141c352e9e.jpg?imageView&amp;quality=95&amp;thumbnail=1090x310" alt="" class="j-lazyload img-lazyload " /> </a> 
     </div> 
     <div class="bd"> 
      <ul class="itemList"> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1031004&amp;_stat_area=mod_6_item_1&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="花苞口暖萌彩棉袜（婴童）" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/39035aa1ac5de19afd7e40d9490b7c83.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="花苞口暖萌彩棉袜（婴童）" class="j-lazyload img-lazyload img" /> </a> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1031004&amp;_stat_area=mod_6_item_1&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="花苞口暖萌彩棉袜（婴童）" target="_blank"> </a> <a class="name" href="/item/detail?id=1031004&amp;_stat_area=mod_6_item_1&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="花苞口暖萌彩棉袜（婴童）" target="_blank"> <span class="name">3双装&nbsp;花苞口暖萌彩棉袜（婴童）</span> </a> </h4> 
          <p class="price"> <span>&yen;19.9</span> </p> 
         </div> 
        </div> </li> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1057010&amp;_stat_area=mod_6_item_2&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="果冻色感温小勺" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/66588e41607ce65a3e40ed4cf948e9c7.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="果冻色感温小勺" class="j-lazyload img-lazyload img" /> </a> 
          <div class="colorNum">
            2色可选 
          </div> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1057010&amp;_stat_area=mod_6_item_2&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="果冻色感温小勺" target="_blank"> </a> <a class="name" href="/item/detail?id=1057010&amp;_stat_area=mod_6_item_2&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="果冻色感温小勺" target="_blank"> <span class="name">2支装&nbsp;果冻色感温小勺</span> </a> </h4> 
          <p class="price"> <span>&yen;19</span> </p> 
         </div> 
        </div> </li> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1102000&amp;_stat_area=mod_6_item_3&amp;_stat_referer=index" title="儿童防走丢书包" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/43ff0d1351a9c2c1713c56b962db905c.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="儿童防走丢书包" class="j-lazyload img-lazyload img" /> </a> 
          <div class="colorNum">
            2色可选 
          </div> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1102000&amp;_stat_area=mod_6_item_3&amp;_stat_referer=index" title="儿童防走丢书包" target="_blank"> </a> <a class="name" href="/item/detail?id=1102000&amp;_stat_area=mod_6_item_3&amp;_stat_referer=index" title="儿童防走丢书包" target="_blank"> <span class="name">儿童防走丢书包</span> </a> </h4> 
          <p class="price"> <span>&yen;69</span> </p> 
         </div> 
        </div> </li> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1108035&amp;_stat_area=mod_6_item_4&amp;_stat_referer=index" title="棉双层纱哺乳衬衣" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/38da79b74156c6827d7023bcaf6daaca.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="棉双层纱哺乳衬衣" class="j-lazyload img-lazyload img" /> </a> 
          <div class="colorNum">
            2色可选 
          </div> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1108035&amp;_stat_area=mod_6_item_4&amp;_stat_referer=index" title="棉双层纱哺乳衬衣" target="_blank"> </a> <a class="name" href="/item/detail?id=1108035&amp;_stat_area=mod_6_item_4&amp;_stat_referer=index" title="棉双层纱哺乳衬衣" target="_blank"> <span class="name">棉双层纱哺乳衬衣</span> </a> </h4> 
          <p class="price"> <span>&yen;169</span> </p> 
         </div> 
        </div> </li> 
      </ul> 
     </div> 
    </div> 
   </div> 
   <div class="g-row"> 
    <div class="m-newCate"> 
     <header class="hd"> 
      <div class="left"> 
       <h3 class="name">杂货</h3> 
       <small class="frontName">解忧，每个烦恼</small> 
      </div> 
      <div class="right"> 
       <nav class="subCateList"> 
        <a class="item" href="/item/list?categoryId=1012000&amp;_stat_area=mod_7_right_0&amp;_stat_referer=index&amp;subCategoryId=1012003" target="_blank"> 文具 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1012000&amp;_stat_area=mod_7_right_1&amp;_stat_referer=index&amp;subCategoryId=1008017" target="_blank"> 收纳 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1012000&amp;_stat_area=mod_7_right_2&amp;_stat_referer=index&amp;subCategoryId=1020000" target="_blank"> 旅行 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1012000&amp;_stat_area=mod_7_right_3&amp;_stat_referer=index&amp;subCategoryId=1012002" target="_blank"> 雨具 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1012000&amp;_stat_area=mod_7_right_4&amp;_stat_referer=index&amp;subCategoryId=1028001" target="_blank"> 唱片 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1012000&amp;_stat_area=mod_7_right_5&amp;_stat_referer=index&amp;subCategoryId=1008006" target="_blank"> 口罩 </a> 
       </nav> 
       <a class="getMore" href="/item/list?categoryId=1012000&amp;_stat_area=mod_7_more_1&amp;_stat_referer=index" target="_blank">查看更多 &gt;</a> 
      </div> 
     </header> 
     <div class="banner"> 
      <a href="http://you.163.com/item/list?categoryId=1012000&amp;subCategoryId=1020000&amp;_stat_area=mod_7_focus_7&amp;_stat_referer=index&amp;_stat_id=1012000" target="_blank" title="" class="wrap"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/875b2795a7291962e2c234ccbfa42e57.jpg?imageView&amp;quality=95&amp;thumbnail=1090x310" alt="" class="j-lazyload img-lazyload " /> </a> 
     </div> 
     <div class="bd"> 
      <ul class="itemList"> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1110001&amp;_stat_area=mod_7_item_1&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="折叠多功能衣架" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/b024b941efaef83e5d28697289534252.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="折叠多功能衣架" class="j-lazyload img-lazyload img" /> </a> 
          <div class="colorNum">
            2色可选 
          </div> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1110001&amp;_stat_area=mod_7_item_1&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="折叠多功能衣架" target="_blank"> </a> <a class="name" href="/item/detail?id=1110001&amp;_stat_area=mod_7_item_1&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="折叠多功能衣架" target="_blank"> <span class="name">8件装&nbsp;折叠多功能衣架</span> </a> </h4> 
          <p class="price"> <span>&yen;25</span> </p> 
         </div> 
        </div> </li> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1046042&amp;_stat_area=mod_7_item_2&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="无痕立体记忆绵眼罩" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/3d744cbf3e41b360159d7d9780c46a57.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="无痕立体记忆绵眼罩" class="j-lazyload img-lazyload img" /> </a> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1046042&amp;_stat_area=mod_7_item_2&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="无痕立体记忆绵眼罩" target="_blank"> </a> <a class="name" href="/item/detail?id=1046042&amp;_stat_area=mod_7_item_2&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="无痕立体记忆绵眼罩" target="_blank"> <span class="name">无痕立体记忆绵眼罩</span> </a> </h4> 
          <p class="price"> <span>&yen;39</span> </p> 
         </div> 
        </div> </li> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1027017&amp;_stat_area=mod_7_item_3&amp;_stat_referer=index" title="切尔西短款雨靴" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/ecbede12690475d9da27f31c8789b24b.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="切尔西短款雨靴" class="j-lazyload img-lazyload img" /> </a> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1027017&amp;_stat_area=mod_7_item_3&amp;_stat_referer=index" title="切尔西短款雨靴" target="_blank"> </a> <a class="name" href="/item/detail?id=1027017&amp;_stat_area=mod_7_item_3&amp;_stat_referer=index" title="切尔西短款雨靴" target="_blank"> <span class="name">切尔西短款雨靴</span> </a> </h4> 
          <p class="price"> <span>&yen;108</span> </p> 
         </div> 
        </div> </li> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1114007&amp;_stat_area=mod_7_item_4&amp;_stat_referer=index" title="3D纳米薄膜口罩" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/9c8a9b5d91bfdb770a5a391d7fa89470.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="3D纳米薄膜口罩" class="j-lazyload img-lazyload img" /> </a> 
          <div class="colorNum">
            3色可选 
          </div> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1114007&amp;_stat_area=mod_7_item_4&amp;_stat_referer=index" title="3D纳米薄膜口罩" target="_blank"> </a> <a class="name" href="/item/detail?id=1114007&amp;_stat_area=mod_7_item_4&amp;_stat_referer=index" title="3D纳米薄膜口罩" target="_blank"> <span class="name">3D纳米薄膜口罩</span> </a> </h4> 
          <p class="price"> <span>&yen;24.9</span> </p> 
         </div> 
        </div> </li> 
      </ul> 
     </div> 
    </div> 
   </div> 
   <div class="g-row"> 
    <div class="m-newCate"> 
     <header class="hd"> 
      <div class="left"> 
       <h3 class="name">饮食</h3> 
       <small class="frontName">好吃，无添加</small> 
      </div> 
      <div class="right"> 
       <nav class="subCateList"> 
        <a class="item" href="/item/list?categoryId=1005002&amp;_stat_area=mod_8_right_0&amp;_stat_referer=index&amp;subCategoryId=1008015" target="_blank"> 糕点 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1005002&amp;_stat_area=mod_8_right_1&amp;_stat_referer=index&amp;subCategoryId=1005011" target="_blank"> 小食 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1005002&amp;_stat_area=mod_8_right_2&amp;_stat_referer=index&amp;subCategoryId=1027001" target="_blank"> 果干 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1005002&amp;_stat_area=mod_8_right_3&amp;_stat_referer=index&amp;subCategoryId=1005010" target="_blank"> 炒货 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1005002&amp;_stat_area=mod_8_right_4&amp;_stat_referer=index&amp;subCategoryId=1005013" target="_blank"> 冲饮 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1005002&amp;_stat_area=mod_8_right_5&amp;_stat_referer=index&amp;subCategoryId=1027000" target="_blank"> 茗茶 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1005002&amp;_stat_area=mod_8_right_6&amp;_stat_referer=index&amp;subCategoryId=1005012" target="_blank"> 食材 </a> 
       </nav> 
       <a class="getMore" href="/item/list?categoryId=1005002&amp;_stat_area=mod_8_more_1&amp;_stat_referer=index" target="_blank">查看更多 &gt;</a> 
      </div> 
     </header> 
     <div class="banner"> 
      <a href="http://you.163.com/item/list?categoryId=1005002&amp;subCategoryId=1008015&amp;_stat_area=mod_8_focus_8&amp;_stat_referer=index&amp;_stat_id=1005002" target="_blank" title="" class="wrap"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/f7285c2f9b8ed84cd05270cefff94b68.jpg?imageView&amp;quality=95&amp;thumbnail=1090x310" alt="" class="j-lazyload img-lazyload " /> </a> 
     </div> 
     <div class="bd"> 
      <ul class="itemList"> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1108027&amp;_stat_area=mod_8_item_1&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="月见和菓子(芒果味棉花糖麻薯) 184克" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/e11f3710f2ce2f49f45412c5f1acc493.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="月见和菓子(芒果味棉花糖麻薯) 184克" class="j-lazyload img-lazyload img" /> </a> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1108027&amp;_stat_area=mod_8_item_1&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="月见和菓子(芒果味棉花糖麻薯) 184克" target="_blank"> </a> <a class="name" href="/item/detail?id=1108027&amp;_stat_area=mod_8_item_1&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="月见和菓子(芒果味棉花糖麻薯) 184克" target="_blank"> <span class="name">月见和菓子(芒果味棉花糖麻薯) 184克</span> </a> </h4> 
          <p class="price"> <span>&yen;18</span> </p> 
         </div> 
        </div> </li> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1056013&amp;_stat_area=mod_8_item_2&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="冻干银耳汤 15克*10包" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/0bc58700c1f535e7c13b9510a4784092.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="冻干银耳汤 15克*10包" class="j-lazyload img-lazyload img" /> </a> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1056013&amp;_stat_area=mod_8_item_2&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="冻干银耳汤 15克*10包" target="_blank"> </a> <a class="name" href="/item/detail?id=1056013&amp;_stat_area=mod_8_item_2&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="冻干银耳汤 15克*10包" target="_blank"> <span class="name">冻干银耳汤 15克*10包</span> </a> </h4> 
          <p class="price"> <span>&yen;49</span> </p> 
         </div> 
        </div> </li> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1027012&amp;_stat_area=mod_8_item_3&amp;_stat_referer=index" title="综合果蔬脆 100克" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/47984778669aefbba9e7ede503fc70ec.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="综合果蔬脆 100克" class="j-lazyload img-lazyload img" /> </a> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1027012&amp;_stat_area=mod_8_item_3&amp;_stat_referer=index" title="综合果蔬脆 100克" target="_blank"> </a> <a class="name" href="/item/detail?id=1027012&amp;_stat_area=mod_8_item_3&amp;_stat_referer=index" title="综合果蔬脆 100克" target="_blank"> <span class="name">综合果蔬脆 100克</span> </a> </h4> 
          <p class="price"> <span>&yen;16</span> </p> 
         </div> 
        </div> </li> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1108028&amp;_stat_area=mod_8_item_4&amp;_stat_referer=index" title="鲜果冻 180克（6粒入）" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/f6d5f86c024a598e83bcd4cf11bb235a.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="鲜果冻 180克（6粒入）" class="j-lazyload img-lazyload img" /> </a> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1108028&amp;_stat_area=mod_8_item_4&amp;_stat_referer=index" title="鲜果冻 180克（6粒入）" target="_blank"> </a> <a class="name" href="/item/detail?id=1108028&amp;_stat_area=mod_8_item_4&amp;_stat_referer=index" title="鲜果冻 180克（6粒入）" target="_blank"> <span class="name">鲜果冻 180克（6粒入）</span> </a> </h4> 
          <p class="price"> <span>&yen;14</span> </p> 
         </div> 
        </div> </li> 
      </ul> 
     </div> 
    </div> 
   </div> 
   <div class="g-row"> 
    <div class="m-newCate"> 
     <header class="hd"> 
      <div class="left"> 
       <h3 class="name">其他</h3> 
       <small class="frontName">挑选，你的生活</small> 
      </div> 
      <div class="right"> 
       <nav class="subCateList"> 
        <a class="item" href="/item/list?categoryId=1019000&amp;_stat_area=mod_9_right_0&amp;_stat_referer=index&amp;subCategoryId=1011002" target="_blank"> 日本 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1019000&amp;_stat_area=mod_9_right_1&amp;_stat_referer=index&amp;subCategoryId=1021000" target="_blank"> 节日礼盒 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1019000&amp;_stat_area=mod_9_right_2&amp;_stat_referer=index&amp;subCategoryId=1017000" target="_blank"> 宠物 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1019000&amp;_stat_area=mod_9_right_3&amp;_stat_referer=index&amp;subCategoryId=1022000" target="_blank"> 数码 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1019000&amp;_stat_area=mod_9_right_4&amp;_stat_referer=index&amp;subCategoryId=1008005" target="_blank"> 户外 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1019000&amp;_stat_area=mod_9_right_5&amp;_stat_referer=index&amp;subCategoryId=1018000" target="_blank"> 周边 </a> 
        <b class="spilt">/</b> 
        <a class="item" href="/item/list?categoryId=1019000&amp;_stat_area=mod_9_right_6&amp;_stat_referer=index&amp;subCategoryId=1025000" target="_blank"> 礼品卡 </a> 
       </nav> 
       <a class="getMore" href="/item/list?categoryId=1019000&amp;_stat_area=mod_9_more_1&amp;_stat_referer=index" target="_blank">查看更多 &gt;</a> 
      </div> 
     </header> 
     <div class="banner"> 
      <a href="http://you.163.com/item/detail?id=1143021&amp;_stat_area=mod_9_focus_9&amp;_stat_referer=index&amp;_stat_id=1019000" target="_blank" title="" class="wrap"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/0510958d95e0279a14d8debdc657fae2.jpg?imageView&amp;quality=95&amp;thumbnail=1090x310" alt="" class="j-lazyload img-lazyload " /> </a> 
     </div> 
     <div class="bd"> 
      <ul class="itemList"> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1115006&amp;_stat_area=mod_9_item_1&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="网易智能插线板" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/230b1d5cf1f885b720a4a341abbc7b2d.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="网易智能插线板" class="j-lazyload img-lazyload img" /> </a> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1115006&amp;_stat_area=mod_9_item_1&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="网易智能插线板" target="_blank"> </a> <a class="name" href="/item/detail?id=1115006&amp;_stat_area=mod_9_item_1&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="网易智能插线板" target="_blank"> <span class="name">网易智能插线板</span> </a> </h4> 
          <p class="price"> <span>&yen;58</span> </p> 
         </div> 
        </div> </li> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1086046&amp;_stat_area=mod_9_item_2&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="日本制造 花重奏沐浴礼盒" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/4cc4cc8dc44d1fddd386b77c96a5bc22.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="日本制造 花重奏沐浴礼盒" class="j-lazyload img-lazyload img" /> </a> 
          <div class="colorNum">
            日本制造 
          </div> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1086046&amp;_stat_area=mod_9_item_2&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="日本制造 花重奏沐浴礼盒" target="_blank"> </a> <a class="name" href="/item/detail?id=1086046&amp;_stat_area=mod_9_item_2&amp;_stat_referer=index&amp;rcmdVer=1.0.0.0" title="日本制造 花重奏沐浴礼盒" target="_blank"> <span class="name">5个装&nbsp;日本制造 花重奏沐浴礼盒</span> </a> </h4> 
          <p class="price"> <span>&yen;99</span> </p> 
         </div> 
        </div> </li> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1108030&amp;_stat_area=mod_9_item_3&amp;_stat_referer=index" title="宠物便携出行圆球饮水器" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/4891e60ff08ceed36d40a754e45e8742.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="宠物便携出行圆球饮水器" class="j-lazyload img-lazyload img" /> </a> 
          <div class="colorNum">
            2色可选 
          </div> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1108030&amp;_stat_area=mod_9_item_3&amp;_stat_referer=index" title="宠物便携出行圆球饮水器" target="_blank"> </a> <a class="name" href="/item/detail?id=1108030&amp;_stat_area=mod_9_item_3&amp;_stat_referer=index" title="宠物便携出行圆球饮水器" target="_blank"> <span class="name">宠物便携出行圆球饮水器</span> </a> </h4> 
          <p class="price"> <span>&yen;39</span> </p> 
         </div> 
        </div> </li> 
       <li class="item"> 
        <div class="m-product j-product"> 
         <div class="hd"> 
          <a href="/item/detail?id=1076010&amp;_stat_area=mod_9_item_4&amp;_stat_referer=index" title="日本制造 24K魔法T型美容棒" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/3ecd145289f5584750b7322c5baf840e.png?imageView&amp;quality=95&amp;thumbnail=250x250" alt="日本制造 24K魔法T型美容棒" class="j-lazyload img-lazyload img" /> </a> 
          <div class="colorNum">
            日本制造 
          </div> 
         </div> 
         <div class="bd"> 
          <h4 class="name"> <a class="name" href="/item/detail?id=1076010&amp;_stat_area=mod_9_item_4&amp;_stat_referer=index" title="日本制造 24K魔法T型美容棒" target="_blank"> </a> <a class="name" href="/item/detail?id=1076010&amp;_stat_area=mod_9_item_4&amp;_stat_referer=index" title="日本制造 24K魔法T型美容棒" target="_blank"> <span class="name">日本制造 24K魔法T型美容棒</span> </a> </h4> 
          <p class="price"> <span>&yen;459</span> </p> 
         </div> 
        </div> </li> 
      </ul> 
     </div> 
    </div> 
   </div> 
  </div> 
  <div class="m-expert"> 
   <div class="g-row"> 
    <div class="m-cate"> 
     <header class="hd"> 
      <div class="left"> 
       <h3 class="name">甄选家</h3> 
       <small class="frontName">我们在寻找，对生活有态度的你</small> 
      </div> 
     </header> 
     <div class="bd"> 
      <div class="expertContent"> 
       <a class="expert first large " href="/expert/tryout?_stat_referer=index" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/b21b20f34d5007f961c182273a5d429f.jpg" alt="" class="j-lazyload img-lazyload img" /> </a> 
       <a class="expert small " href="/expert/advice?_stat_referer=index" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/9548e1f1a0ba0436cb13d586c50284be.jpg" alt="" class="j-lazyload img-lazyload img" /> </a> 
       <a class="expert small last" href="/expert/sample?_stat_referer=index" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-original="http://yanxuan.nosdn.127.net/4a56bf536141eb2ad84f8f8f0e0418ab.jpg" alt="" class="j-lazyload img-lazyload img" /> </a> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <div class="m-newComment"> 
   <div class="g-row"> 
    <div class="m-cate"> 
     <header class="hd"> 
      <div class="left"> 
       <h3 class="name">大家都在说</h3> 
       <small class="frontName">生活，没有统一标准</small> 
      </div> 
     </header> 
     <div class="bd"> 
      <ul class="itemList"> 
       <div id="js-CommentSlick" class="js-CommentSlick m-newItemSlick"> 
        <li class="item"> 
         <div class="m-product"> 
          <div class="hd"> 
           <a href="/item/detail?id=1006058&amp;_stat_area=mod_comment_item_1&amp;_stat_referer=index" title="懒人抹布" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/afc1f0ac88dbeb5108faa7813aae3ad4.jpg?imageView&amp;quality=95&amp;thumbnail=265x265" alt="懒人抹布" class="img-lazyload img" /> </a> 
          </div> 
          <div class="bd bd_comment"> 
           <div class="m-comment"> 
            <div class="bd _top"> 
             <span class="frontname">9****5</span> 
             <span class="date">2017-03-20 23:25</span> 
            </div> 
            <div class="bd _middle"> 
             <span class="pname" title="懒人抹布">懒人抹布</span> 
             <span class="price">&yen;13.99</span> 
            </div> 
            <div class="comment-content"> 
             <p origin-content="这个是我用过最好用的抹布，已经回购">这个是我用过最好用的抹布，已经回购</p> 
             <s class="more"></s> 
            </div> 
           </div> 
          </div> 
         </div> </li> 
        <li class="item"> 
         <div class="m-product"> 
          <div class="hd"> 
           <a href="/item/detail?id=1030007&amp;_stat_area=mod_comment_item_2&amp;_stat_referer=index" title="日式简约纯色舒棉绒拖鞋" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/e153a3b0a1f058984e0cefb9e1205548.jpg?imageView&amp;quality=95&amp;thumbnail=265x265" alt="日式简约纯色舒棉绒拖鞋" class="img-lazyload img" /> </a> 
          </div> 
          <div class="bd bd_comment"> 
           <div class="m-comment"> 
            <div class="bd _top"> 
             <span class="frontname">f****5</span> 
             <span class="date">2017-03-12 21:27</span> 
            </div> 
            <div class="bd _middle"> 
             <span class="pname" title="日式简约纯色舒棉绒拖鞋">日式简约纯色舒棉绒拖鞋</span> 
             <span class="price">&yen;39</span> 
            </div> 
            <div class="comment-content"> 
             <p origin-content="第三次买严选的拖鞋了，质量非常好，穿着很舒服！">第三次买严选的拖鞋了，质量非常好，穿着很舒服！</p> 
             <s class="more"></s> 
            </div> 
           </div> 
          </div> 
         </div> </li> 
        <li class="item"> 
         <div class="m-product"> 
          <div class="hd"> 
           <a href="/item/detail?id=1059036&amp;_stat_area=mod_comment_item_3&amp;_stat_referer=index" title="落棉抹布" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/3e980d7571d71cac18a61ecb836228d2.jpg?imageView&amp;quality=95&amp;thumbnail=265x265" alt="落棉抹布" class="img-lazyload img" /> </a> 
          </div> 
          <div class="bd bd_comment"> 
           <div class="m-comment"> 
            <div class="bd _top"> 
             <span class="frontname">赵****红</span> 
             <span class="date">2017-03-12 20:09</span> 
            </div> 
            <div class="bd _middle"> 
             <span class="pname" title="落棉抹布">落棉抹布</span> 
             <span class="price">&yen;14.9</span> 
            </div> 
            <div class="comment-content"> 
             <p origin-content="抹布一定要好评。价钱便宜，经用。一天三餐在家做饭的人一定要入。家里抹布换的勤，超市里同价位的那种洗碗布一两天就像蜘蛛网一样，这个好几星期都不变质感，搭配薄荷去污皂十足好用。">抹布一定要好评。价钱便宜，经用。一天三餐在家做饭的人一定要入。家里抹布换的勤，超市里同价位的那种洗碗布一两天就像蜘蛛网一样，这个好几星期都不变质感，搭配薄荷去污皂十足好用。</p> 
             <s class="more"></s> 
            </div> 
           </div> 
          </div> 
         </div> </li> 
        <li class="item"> 
         <div class="m-product"> 
          <div class="hd"> 
           <a href="/item/detail?id=1036009&amp;_stat_area=mod_comment_item_4&amp;_stat_referer=index" title="起泡海绵皂盒" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/6d193a5b684e00c18236735142adbba6.png?imageView&amp;quality=95&amp;thumbnail=265x265" alt="起泡海绵皂盒" class="img-lazyload img" /> </a> 
          </div> 
          <div class="bd bd_comment"> 
           <div class="m-comment"> 
            <div class="bd _top"> 
             <span class="frontname">w****e</span> 
             <span class="date">2017-03-12 20:09</span> 
            </div> 
            <div class="bd _middle"> 
             <span class="pname" title="起泡海绵皂盒">起泡海绵皂盒</span> 
             <span class="price">&yen;15</span> 
            </div> 
            <div class="comment-content"> 
             <p origin-content="用了好久来评价，真心不错，网易严选东西确实好！">用了好久来评价，真心不错，网易严选东西确实好！</p> 
             <s class="more"></s> 
            </div> 
           </div> 
          </div> 
         </div> </li> 
        <li class="item"> 
         <div class="m-product"> 
          <div class="hd"> 
           <a href="/item/detail?id=1125002&amp;_stat_area=mod_comment_item_5&amp;_stat_referer=index" title="雪丝竹节纹男士休闲船袜" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/46202f28e2346f4f089f562bfdda2e80.jpg?imageView&amp;quality=95&amp;thumbnail=265x265" alt="雪丝竹节纹男士休闲船袜" class="img-lazyload img" /> </a> 
          </div> 
          <div class="bd bd_comment"> 
           <div class="m-comment"> 
            <div class="bd _top"> 
             <span class="frontname">l****g</span> 
             <span class="date">2017-03-12 18:14</span> 
            </div> 
            <div class="bd _middle"> 
             <span class="pname" title="雪丝竹节纹男士休闲船袜">雪丝竹节纹男士休闲船袜</span> 
             <span class="price">&yen;39</span> 
            </div> 
            <div class="comment-content"> 
             <p origin-content="网易品质，一如既往的好！">网易品质，一如既往的好！</p> 
             <s class="more"></s> 
            </div> 
           </div> 
          </div> 
         </div> </li> 
        <li class="item"> 
         <div class="m-product"> 
          <div class="hd"> 
           <a href="/item/detail?id=1006050&amp;_stat_area=mod_comment_item_6&amp;_stat_referer=index" title="桂花大麦茶 10克*10袋" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/20223281df5ff8b84b43e084cd8bfb7c.jpg?imageView&amp;quality=95&amp;thumbnail=265x265" alt="桂花大麦茶 10克*10袋" class="img-lazyload img" /> </a> 
          </div> 
          <div class="bd bd_comment"> 
           <div class="m-comment"> 
            <div class="bd _top"> 
             <span class="frontname">刘****</span> 
             <span class="date">2017-03-12 18:11</span> 
            </div> 
            <div class="bd _middle"> 
             <span class="pname" title="桂花大麦茶 10克*10袋">桂花大麦茶 10克*10袋</span> 
             <span class="price">&yen;28</span> 
            </div> 
            <div class="comment-content"> 
             <p origin-content="非常好喝，包装精美">非常好喝，包装精美</p> 
             <s class="more"></s> 
            </div> 
           </div> 
          </div> 
         </div> </li> 
        <li class="item"> 
         <div class="m-product"> 
          <div class="hd"> 
           <a href="/item/detail?id=1124015&amp;_stat_area=mod_comment_item_7&amp;_stat_referer=index" title="谷风一木 手帕纸" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/bc62d699f6cfbbb7e66dbaf77bd23e53.jpg?imageView&amp;quality=95&amp;thumbnail=265x265" alt="谷风一木 手帕纸" class="img-lazyload img" /> </a> 
          </div> 
          <div class="bd bd_comment"> 
           <div class="m-comment"> 
            <div class="bd _top"> 
             <span class="frontname">张****花</span> 
             <span class="date">2017-03-09 22:01</span> 
            </div> 
            <div class="bd _middle"> 
             <span class="pname" title="谷风一木 手帕纸">谷风一木 手帕纸</span> 
             <span class="price">&yen;5.9</span> 
            </div> 
            <div class="comment-content"> 
             <p origin-content="很棒很棒，耐看的图案。四层纸不愧严选。">很棒很棒，耐看的图案。四层纸不愧严选。</p> 
             <s class="more"></s> 
            </div> 
           </div> 
          </div> 
         </div> </li> 
        <li class="item"> 
         <div class="m-product"> 
          <div class="hd"> 
           <a href="/item/detail?id=1109014&amp;_stat_area=mod_comment_item_8&amp;_stat_referer=index" title="硅藻土皂托" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/ac34c66a63bfb0e1921d55d6d33bcb01.jpg?imageView&amp;quality=95&amp;thumbnail=265x265" alt="硅藻土皂托" class="img-lazyload img" /> </a> 
          </div> 
          <div class="bd bd_comment"> 
           <div class="m-comment"> 
            <div class="bd _top"> 
             <span class="frontname">桌****</span> 
             <span class="date">2017-03-09 21:49</span> 
            </div> 
            <div class="bd _middle"> 
             <span class="pname" title="硅藻土皂托">硅藻土皂托</span> 
             <span class="price">&yen;19</span> 
            </div> 
            <div class="comment-content"> 
             <p origin-content="这到底是什么东西，感觉很黑科技？我拆了包装摸着觉得它表面有粉尘然后就直接拿去水龙头冲了冲，然后我看着它在洗手台以肉眼可见的速度变干...重点是我拿起来的时候它下面洗手台的那块居然也是干的。好神奇...第一次买网易严选的东西，感觉很厉害...">这到底是什么东西，感觉很黑科技？我拆了包装摸着觉得它表面有粉尘然后就直接拿去水龙头冲了冲，然后我看着它在洗手台以肉眼可见的速度变干...重点是我拿起来的时候它下面洗手台的那块居然也是干的。好神奇...第一次买网易严选的东西，感觉很厉害...</p> 
             <s class="more"></s> 
            </div> 
           </div> 
          </div> 
         </div> </li> 
        <li class="item"> 
         <div class="m-product"> 
          <div class="hd"> 
           <a href="/item/detail?id=1108006&amp;_stat_area=mod_comment_item_9&amp;_stat_referer=index" title="土豆茶树洗衣皂" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/7c1460d02e5117f1a80ab81bb363c65a.jpg?imageView&amp;quality=95&amp;thumbnail=265x265" alt="土豆茶树洗衣皂" class="img-lazyload img" /> </a> 
          </div> 
          <div class="bd bd_comment"> 
           <div class="m-comment"> 
            <div class="bd _top"> 
             <span class="frontname">桌****</span> 
             <span class="date">2017-03-09 21:45</span> 
            </div> 
            <div class="bd _middle"> 
             <span class="pname" title="土豆茶树洗衣皂">土豆茶树洗衣皂</span> 
             <span class="price">&yen;19.9</span> 
            </div> 
            <div class="comment-content"> 
             <p origin-content="说一件神奇的事情，我的睡裙今天晚上吃饭的时候不小心弄到油了...花椒油加花生油的那种，然后我就巨紧张毕竟是新睡裙，然后第一次拆开用这块土豆皂，然后居然，洗掉了！！一脸震惊的我，然后我刚刚又买了一块...">说一件神奇的事情，我的睡裙今天晚上吃饭的时候不小心弄到油了...花椒油加花生油的那种，然后我就巨紧张毕竟是新睡裙，然后第一次拆开用这块土豆皂，然后居然，洗掉了！！一脸震惊的我，然后我刚刚又买了一块...</p> 
             <s class="more"></s> 
            </div> 
           </div> 
          </div> 
         </div> </li> 
        <li class="item"> 
         <div class="m-product"> 
          <div class="hd"> 
           <a href="/item/detail?id=1023013&amp;_stat_area=mod_comment_item_10&amp;_stat_referer=index" title="便携式多功能防水户外垫" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/b7a0996e9bf25e0e02b1803f3aa03b97.jpg?imageView&amp;quality=95&amp;thumbnail=265x265" alt="便携式多功能防水户外垫" class="img-lazyload img" /> </a> 
          </div> 
          <div class="bd bd_comment"> 
           <div class="m-comment"> 
            <div class="bd _top"> 
             <span class="frontname">宛****</span> 
             <span class="date">2017-03-09 16:35</span> 
            </div> 
            <div class="bd _middle"> 
             <span class="pname" title="便携式多功能防水户外垫">便携式多功能防水户外垫</span> 
             <span class="price">&yen;79</span> 
            </div> 
            <div class="comment-content"> 
             <p origin-content="没有味道，轻便，比我想象的还要小巧呀，带着娃出门的孕妇完全没压力。
老公开始担心太薄容易皱，送了固定的钉子应该可以解决这个问题。
超级适合一个人带娃出门的妈妈们。
看中的另外一点是可以临时当雨衣，懒妈妈又可以少带一把雨伞了。一个人带娃出门，真的是要怎么轻便怎么来！">没有味道，轻便，比我想象的还要小巧呀，带着娃出门的孕妇完全没压力。 老公开始担心太薄容易皱，送了固定的钉子应该可以解决这个问题。 超级适合一个人带娃出门的妈妈们。 看中的另外一点是可以临时当雨衣，懒妈妈又可以少带一把雨伞了。一个人带娃出门，真的是要怎么轻便怎么来！</p> 
             <s class="more"></s> 
            </div> 
           </div> 
          </div> 
         </div> </li> 
        <li class="item"> 
         <div class="m-product"> 
          <div class="hd"> 
           <a href="/item/detail?id=1031008&amp;_stat_area=mod_comment_item_11&amp;_stat_referer=index" title="彩棉长袖连体衣（婴童）" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/ea6ebd13afa9783d76c6d65cb2949370.jpg?imageView&amp;quality=95&amp;thumbnail=265x265" alt="彩棉长袖连体衣（婴童）" class="img-lazyload img" /> </a> 
          </div> 
          <div class="bd bd_comment"> 
           <div class="m-comment"> 
            <div class="bd _top"> 
             <span class="frontname">宛****</span> 
             <span class="date">2017-03-09 16:32</span> 
            </div> 
            <div class="bd _middle"> 
             <span class="pname" title="彩棉长袖连体衣（婴童）">彩棉长袖连体衣（婴童）</span> 
             <span class="price">&yen;59</span> 
            </div> 
            <div class="comment-content"> 
             <p origin-content="朋友推荐严选，第一次采购，第二天就收到了，不得不说顺丰的物流就是如此给力。
到家拆开包装，衣服也是布袋装的，打开没有异味，里面没有线头。
开始担心六月深圳穿会不会太厚，事实证明其实刚刚好了，真的是四季都可以用的新生儿服装。
最主要质量靠谱，专卖店要两百的价格才买得到这么好的产品吧，被严选圈粉了。
期待更多性价比高的好产品！">朋友推荐严选，第一次采购，第二天就收到了，不得不说顺丰的物流就是如此给力。 到家拆开包装，衣服也是布袋装的，打开没有异味，里面没有线头。 开始担心六月深圳穿会不会太厚，事实证明其实刚刚好了，真的是四季都可以用的新生儿服装。 最主要质量靠谱，专卖店要两百的价格才买得到这么好的产品吧，被严选圈粉了。 期待更多性价比高的好产品！</p> 
             <s class="more"></s> 
            </div> 
           </div> 
          </div> 
         </div> </li> 
        <li class="item"> 
         <div class="m-product"> 
          <div class="hd"> 
           <a href="/item/detail?id=1006025&amp;_stat_area=mod_comment_item_12&amp;_stat_referer=index" title="日式酸枣木碗" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/fff3be1f2ad07a9045e06dae8677a5b6.jpg?imageView&amp;quality=95&amp;thumbnail=265x265" alt="日式酸枣木碗" class="img-lazyload img" /> </a> 
          </div> 
          <div class="bd bd_comment"> 
           <div class="m-comment"> 
            <div class="bd _top"> 
             <span class="frontname">温****</span> 
             <span class="date">2017-03-09 11:26</span> 
            </div> 
            <div class="bd _middle"> 
             <span class="pname" title="日式酸枣木碗">日式酸枣木碗</span> 
             <span class="price">&yen;39</span> 
            </div> 
            <div class="comment-content"> 
             <p origin-content="听说酸枣木的材质难得能做碗，拿到手之后真的是满心的欢喜，拿在手里轻盈，碗的弧度捧在手里饱满充实，很踏实的感觉，跟严选一样~
从外表上看，木色很清新，纹路圆润，很好看，外表光滑没有毛刺，表层的清漆完全没有味道，而且很薄，只有淡淡的光泽，把握好了让人舒适的程度；
拿到手之后倒上了热水，不烫手，虽然没有平常碗的足底，但是放在桌子上也很稳，反倒是无足的设计显得整体更加的圆润，更加憨厚踏实；
生活里有太多的将就了，总不能在吃上也委曲求全，希望能在以后都捧着这样饱满的希望生活，遇上严选以后，家里很多的东西都在更换了，也算是新的开始，重新拥抱生活~">听说酸枣木的材质难得能做碗，拿到手之后真的是满心的欢喜，拿在手里轻盈，碗的弧度捧在手里饱满充实，很踏实的感觉，跟严选一样~ 从外表上看，木色很清新，纹路圆润，很好看，外表光滑没有毛刺，表层的清漆完全没有味道，而且很薄，只有淡淡的光泽，把握好了让人舒适的程度； 拿到手之后倒上了热水，不烫手，虽然没有平常碗的足底，但是放在桌子上也很稳，反倒是无足的设计显得整体更加的圆润，更加憨厚踏实； 生活里有太多的将就了，总不能在吃上也委曲求全，希望能在以后都捧着这样饱满的希望生活，遇上严选以后，家里很多的东西都在更换了，也算是新的开始，重新拥抱生活~</p> 
             <s class="more"></s> 
            </div> 
           </div> 
          </div> 
         </div> </li> 
        <li class="item"> 
         <div class="m-product"> 
          <div class="hd"> 
           <a href="/item/detail?id=1048005&amp;_stat_area=mod_comment_item_13&amp;_stat_referer=index" title="日式色织水洗条纹抱枕" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/112dfb2b0d975c8d525230e91d0b8add.jpg?imageView&amp;quality=95&amp;thumbnail=265x265" alt="日式色织水洗条纹抱枕" class="img-lazyload img" /> </a> 
          </div> 
          <div class="bd bd_comment"> 
           <div class="m-comment"> 
            <div class="bd _top"> 
             <span class="frontname">温****</span> 
             <span class="date">2017-03-09 11:17</span> 
            </div> 
            <div class="bd _middle"> 
             <span class="pname" title="日式色织水洗条纹抱枕">日式色织水洗条纹抱枕</span> 
             <span class="price">&yen;59</span> 
            </div> 
            <div class="comment-content"> 
             <p origin-content="拿到手，抱枕套的颜色鲜明，纹理干净，没有任何的线头和味道，而且拆卸方便，两侧的纽扣是原木的颜色，很结实，看起来很安心~而且触手质感很好，很平实、很柔软亲肤；
在看里面，棉芯外表很挺括饱满，表面的布料材质也很干净平整，里料都这么用心真是难得喽；
体验上来说，抱枕总体上看，具有饱满充实的填充感，靠在后背不是那种一靠就塌下去的感觉，而是有支撑感，靠压过后抱在手里又会有很快的回弹，很棒很舒适的感觉~
昨天晚上收到之后赶紧就套好抱着了，还没有拍照，今天回家再拍实体照片，真的良心推荐！">拿到手，抱枕套的颜色鲜明，纹理干净，没有任何的线头和味道，而且拆卸方便，两侧的纽扣是原木的颜色，很结实，看起来很安心~而且触手质感很好，很平实、很柔软亲肤； 在看里面，棉芯外表很挺括饱满，表面的布料材质也很干净平整，里料都这么用心真是难得喽； 体验上来说，抱枕总体上看，具有饱满充实的填充感，靠在后背不是那种一靠就塌下去的感觉，而是有支撑感，靠压过后抱在手里又会有很快的回弹，很棒很舒适的感觉~ 昨天晚上收到之后赶紧就套好抱着了，还没有拍照，今天回家再拍实体照片，真的良心推荐！</p> 
             <s class="more"></s> 
            </div> 
           </div> 
          </div> 
         </div> </li> 
        <li class="item"> 
         <div class="m-product"> 
          <div class="hd"> 
           <a href="/item/detail?id=1066002&amp;_stat_area=mod_comment_item_14&amp;_stat_referer=index" title="孕产妇托腹内裤" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/3ef42f8b4b1b88251925d64adb93b629.jpg?imageView&amp;quality=95&amp;thumbnail=265x265" alt="孕产妇托腹内裤" class="img-lazyload img" /> </a> 
          </div> 
          <div class="bd bd_comment"> 
           <div class="m-comment"> 
            <div class="bd _top"> 
             <span class="frontname">z****z</span> 
             <span class="date">2017-02-27 07:28</span> 
            </div> 
            <div class="bd _middle"> 
             <span class="pname" title="孕产妇托腹内裤">孕产妇托腹内裤</span> 
             <span class="price">&yen;59</span> 
            </div> 
            <div class="comment-content"> 
             <p origin-content="穿着很舒服，腰部不勒人，很服帖，第一次穿着之前放了刚烧开的水烫了一下，黑色也没有一点褪色，真正的是物有所值，严选的产品真是太好了，外包装也很精致简约，包装袋都可以第二次利用，真是太满意了">穿着很舒服，腰部不勒人，很服帖，第一次穿着之前放了刚烧开的水烫了一下，黑色也没有一点褪色，真正的是物有所值，严选的产品真是太好了，外包装也很精致简约，包装袋都可以第二次利用，真是太满意了</p> 
             <s class="more"></s> 
            </div> 
           </div> 
          </div> 
         </div> </li> 
        <li class="item"> 
         <div class="m-product"> 
          <div class="hd"> 
           <a href="/item/detail?id=1064014&amp;_stat_area=mod_comment_item_15&amp;_stat_referer=index" title="时尚拉链尼龙双肩包" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/c84298cc5fddd5a1609b725d0b88aa24.jpg?imageView&amp;quality=95&amp;thumbnail=265x265" alt="时尚拉链尼龙双肩包" class="img-lazyload img" /> </a> 
          </div> 
          <div class="bd bd_comment"> 
           <div class="m-comment"> 
            <div class="bd _top"> 
             <span class="frontname">强****巫</span> 
             <span class="date">2017-02-21 18:53</span> 
            </div> 
            <div class="bd _middle"> 
             <span class="pname" title="时尚拉链尼龙双肩包">时尚拉链尼龙双肩包</span> 
             <span class="price">&yen;199</span> 
            </div> 
            <div class="comment-content"> 
             <p origin-content="听朋友推荐有这个app才过来看一看的，抱着试试看的态度买了个包包，结果发过来太超出预料了，首先发货速度没的说，昨天拍的今天就送到了，然后就说质量，接头处处理的十分细致，包装的也很仔细，实在是太好了">听朋友推荐有这个app才过来看一看的，抱着试试看的态度买了个包包，结果发过来太超出预料了，首先发货速度没的说，昨天拍的今天就送到了，然后就说质量，接头处处理的十分细致，包装的也很仔细，实在是太好了</p> 
             <s class="more"></s> 
            </div> 
           </div> 
          </div> 
         </div> </li> 
        <li class="item"> 
         <div class="m-product"> 
          <div class="hd"> 
           <a href="/item/detail?id=1059001&amp;_stat_area=mod_comment_item_16&amp;_stat_referer=index" title="加厚毛圈平纹男袜" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/defe7f9b9328dbd2d35193e394b29a98.jpg?imageView&amp;quality=95&amp;thumbnail=265x265" alt="加厚毛圈平纹男袜" class="img-lazyload img" /> </a> 
          </div> 
          <div class="bd bd_comment"> 
           <div class="m-comment"> 
            <div class="bd _top"> 
             <span class="frontname">f****i</span> 
             <span class="date">2017-02-20 23:39</span> 
            </div> 
            <div class="bd _middle"> 
             <span class="pname" title="加厚毛圈平纹男袜">加厚毛圈平纹男袜</span> 
             <span class="price">&yen;39</span> 
            </div> 
            <div class="comment-content"> 
             <p origin-content="喜欢里面的加厚毛圈，保暖性强。">喜欢里面的加厚毛圈，保暖性强。</p> 
             <s class="more"></s> 
            </div> 
           </div> 
          </div> 
         </div> </li> 
        <li class="item"> 
         <div class="m-product"> 
          <div class="hd"> 
           <a href="/item/detail?id=1057031&amp;_stat_area=mod_comment_item_17&amp;_stat_referer=index" title="竖纹天鹅绒压力连裤袜" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/95d9205ae8bf109b83c1524391986c97.jpg?imageView&amp;quality=95&amp;thumbnail=265x265" alt="竖纹天鹅绒压力连裤袜" class="img-lazyload img" /> </a> 
          </div> 
          <div class="bd bd_comment"> 
           <div class="m-comment"> 
            <div class="bd _top"> 
             <span class="frontname">q****5</span> 
             <span class="date">2017-02-20 23:39</span> 
            </div> 
            <div class="bd _middle"> 
             <span class="pname" title="竖纹天鹅绒压力连裤袜">竖纹天鹅绒压力连裤袜</span> 
             <span class="price">&yen;39</span> 
            </div> 
            <div class="comment-content"> 
             <p origin-content="质量是真心好，严选果然严选
">质量是真心好，严选果然严选 </p> 
             <s class="more"></s> 
            </div> 
           </div> 
          </div> 
         </div> </li> 
        <li class="item"> 
         <div class="m-product"> 
          <div class="hd"> 
           <a href="/item/detail?id=1037005&amp;_stat_area=mod_comment_item_18&amp;_stat_referer=index" title="日式浮雕骨瓷餐具" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/37e61aa9c5e21ed05c425fea812f2c4d.jpg?imageView&amp;quality=95&amp;thumbnail=265x265" alt="日式浮雕骨瓷餐具" class="img-lazyload img" /> </a> 
          </div> 
          <div class="bd bd_comment"> 
           <div class="m-comment"> 
            <div class="bd _top"> 
             <span class="frontname">h****s</span> 
             <span class="date">2017-02-20 16:09</span> 
            </div> 
            <div class="bd _middle"> 
             <span class="pname" title="日式浮雕骨瓷餐具">日式浮雕骨瓷餐具</span> 
             <span class="price">&yen;39</span> 
            </div> 
            <div class="comment-content"> 
             <p origin-content="盘子质量很好，尺寸也正合适，平盘适合凉菜，汤盘适合炒菜。昨天傍晚下单，今天就收到，效率正高。">盘子质量很好，尺寸也正合适，平盘适合凉菜，汤盘适合炒菜。昨天傍晚下单，今天就收到，效率正高。</p> 
             <s class="more"></s> 
            </div> 
           </div> 
          </div> 
         </div> </li> 
        <li class="item"> 
         <div class="m-product"> 
          <div class="hd"> 
           <a href="/item/detail?id=1030010&amp;_stat_area=mod_comment_item_19&amp;_stat_referer=index" title="优雅格纹羊毛拖鞋" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/b4cb36082074063819f44cc3056fced1.jpg?imageView&amp;quality=95&amp;thumbnail=265x265" alt="优雅格纹羊毛拖鞋" class="img-lazyload img" /> </a> 
          </div> 
          <div class="bd bd_comment"> 
           <div class="m-comment"> 
            <div class="bd _top"> 
             <span class="frontname">w****1</span> 
             <span class="date">2017-02-20 14:39</span> 
            </div> 
            <div class="bd _middle"> 
             <span class="pname" title="优雅格纹羊毛拖鞋">优雅格纹羊毛拖鞋</span> 
             <span class="price">&yen;39</span> 
            </div> 
            <div class="comment-content"> 
             <p origin-content="含羊毛的拖鞋，只付邮费的礼品，很柔软，颜色淡雅，鞋底软，防滑，非常喜欢。">含羊毛的拖鞋，只付邮费的礼品，很柔软，颜色淡雅，鞋底软，防滑，非常喜欢。</p> 
             <s class="more"></s> 
            </div> 
           </div> 
          </div> 
         </div> </li> 
        <li class="item"> 
         <div class="m-product"> 
          <div class="hd"> 
           <a href="/item/detail?id=1052000&amp;_stat_area=mod_comment_item_20&amp;_stat_referer=index" title="可折叠防水购物袋" target="_blank"> <img src="/homeCSS/picture/3d045b93716ed28dc745e648b3428a26_1.gif" data-lazy="http://yanxuan.nosdn.127.net/90cfff3e53ddc1819cba2e285af187b2.jpg?imageView&amp;quality=95&amp;thumbnail=265x265" alt="可折叠防水购物袋" class="img-lazyload img" /> </a> 
          </div> 
          <div class="bd bd_comment"> 
           <div class="m-comment"> 
            <div class="bd _top"> 
             <span class="frontname">x****2</span> 
             <span class="date">2017-02-20 14:38</span> 
            </div> 
            <div class="bd _middle"> 
             <span class="pname" title="可折叠防水购物袋">可折叠防水购物袋</span> 
             <span class="price">&yen;29</span> 
            </div> 
            <div class="comment-content"> 
             <p origin-content="严选的东西，几乎每个都喜欢。无需赘述。">严选的东西，几乎每个都喜欢。无需赘述。</p> 
             <s class="more"></s> 
            </div> 
           </div> 
          </div> 
         </div> </li> 
       </div> 
      </ul> 
     </div> 
    </div> 
   </div> 
  </div>  
  @show
  
  <!-- 侧边框开始 -->
    <div class="fixed_bian" style="display:none; z-index:999">
      <a href="/home/huodong">
        <img id="one" src="/homeCSS/images/6d53a6e60a702929e7fe48b93d900c53.jpg" alt="">
      </a>
      
      <img id='two' src="/homeCSS/images/123.png" >
    </div>
  <!-- 侧边栏结束 -->
  <!-- 底部 -->
  <footer class="g-ft"> 
   <div class="m-ft1"> 
    <div class="g-row"> 
     <div class="item">
      <div class="m-serviceTel"> 
       <h4 class="hd">客服电话</h4> 
       <p class="phone">400-0368-163</p> 
       <p class="datetime">9:00-22:00</p> 
       <a id="j-feedback" class="w-button btn feedbackBtn" href="javascript:;">用户反馈</a> 
       <a id="j-kefu" class="w-button btn kefuBtn" href="javascript:;">在线客服</a> 
      </div> 
     </div> 
     <div class="item">
      <div class="m-whatIsYX"> 
       <h4 class="hd">何为严选</h4> 
       <p class="desc"> 网易原创生活类电商品牌，秉承网易一贯的严谨态度，我们深入世界各地，从源头全程严格把控商品生产环节，力求帮消费者甄选到优质的商品 </p> 
       <div class="m-followUs"> 
        <p class="title">关注我们&nbsp;:</p> 
        <div class="m-focusList"> 
         <div class="m-dropdown m-dropdown-2d f-left"> 
          <i class="w-icon-normal icon-normal-yixin"></i> 
          <div class="bd"> 
           <div class="wrap"> 
            <img src="/homeCSS/picture/7117e381ba1bb5c2c9dfdafed7810d2e_1.png" alt="严选易信" /> 
           </div> 
          </div> 
         </div> 
         <div class="m-dropdown m-dropdown-2d f-left"> 
          <i class="w-icon-normal icon-normal-weixin"></i> 
          <div class="bd"> 
           <div class="wrap"> 
            <img src="/homeCSS/picture/a3652c6bd3723412fe5099aea1502e50_1.png" alt="严选微信" /> 
           </div> 
          </div> 
         </div> 
         <a class="f-left" href="http://weibo.com/p/1006065627773110/home?from=page_100606&amp;mod=TAB#place" target="_blank"> <i class="w-icon-normal icon-normal-weibo"></i> </a> 
        </div> 
       </div> 
      </div> 
     </div> 
     <div class="item">
      <div class="m-ftAppDownload"> 
       <h4 class="hd">扫码下载严选APP</h4> 
        <img class="img" src="/homeCSS/picture/3e14428f49e6ec4b8ae2599f8566fd01_1.png" alt="扫码下载严选APP"> 
       <div class="m-qrcode j-qrcode"></div> 
       <div class="tip">
        首单立减8元
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
   <div class="m-ft2"> 
    <div class="g-row"> 
     <ul class="m-siteEnsure"> 
      <li class="item"> 
       <div class="inner">
        <i class="icon w-icon-normal icon-normal-ft1"></i>
        <p class="text">30天无忧退货</p>
       </div> </li> 
      <li class="item"> 
       <div class="inner">
        <i class="icon w-icon-normal icon-normal-ft2"></i>
        <p class="text">满88元免邮费</p>
       </div> </li> 
      <li class="item"> 
       <div class="inner">
        <i class="icon w-icon-normal icon-normal-ft3"></i>
        <p class="text">网易品质保证</p>
       </div> </li> 
     </ul> 
     <hr /> 
     <div class="m-siteInfo"> 
      <nav class="nav"> 
       <a class="text" href="/attitude">关于我们</a> 
       <b class="split">|</b> 
       <a class="text" href="/help">帮助中心</a> 
       <b class="split">|</b> 
       <a class="text" href="/help#policys">售后服务</a> 
       <b class="split">|</b> 
       <a class="text" href="/help#deliver">配送与验收</a> 
       <b class="split">|</b> 
       <a class="text" href="/help#business">商务合作</a> 
       <b class="split">|</b> 
       <a class="text" href="/enterprise">企业采购</a> 
       <b class="split">|</b> 
       <a class="text" href="/friendLink">友情链接</a> 
      </nav> 
      <p class="copyright"> 网易公司版权所有 &copy; 1997-2017 &nbsp; 食品经营许可证：JY13301080111719 </p> 
      <a class="businessAdmin" href="http://idinfo.zjaic.gov.cn/bscx.do?method=hddoc&amp;id=33010800002352" target="_blank"> <img src="/homeCSS/picture/86f32b668af6e537389a77480fb5c74d_1.gif" alt="" /> </a> 
     </div> 
    </div> 
   </div> 
  </footer> 
  <div id="js-fixedtool" class="m-fixedtool"> 
   <!-- <div class="birthdayGift" id="j-birthdayGift">
</div> --> 
   <a class="activityEntry j-fixedToolActivity" data-id="1031000" target="_blank" href="http://you.163.com/act/pub/4eYRLsLVYJ.html?_stat_area=fixedTool&amp;_stat_referer=index"> <img class="activityPic" src="/homeCSS/picture/8ff6b3e0688c8752d16d88ba82f851ad_1.jpg" /> </a> 
   <a class="newuser j-newuser" target="_blank" href="/gift/newUserGift?_stat_referer=fixedtool" style="display:none;"> <i></i> <p class="text">新人有礼</p> </a> 
   <a class="download j-downloadlink" target="_blank" href="/downloadapp"> <i></i> <p class="text">下载APP</p> 
    <div class="qrCode"> 
     <div class="img j-qrcode"></div> 
     <span class="text">首单立减8元</span> 
    </div> </a> 
   <div id="js-fixedtoolCustomerService" class="customerService"> 
    <i></i> 
    <p class="text">在线客服</p> 
   </div> 
   <div id="js-fixedtoolGoTop" class="goTop"> 
    <i></i> 
    <p class="text">回顶部</p> 
   </div> 
  </div> 
  <script src="{{asset('/homeCSS/js/jquery-1.10.2.min.js')}}"></script> 
  <script src="{{asset('/homeCSS/js/slider.js')}}"></script> 
  <script type="text/javascript">
	$(function() {
		var bannerSlider = new Slider($('#banner_tabs'), {
			time: 5000,
			delay: 400,
			event: 'hover',
			auto: true,
			mode: 'fade',
			controller: $('#bannerCtrl'),
			activeControllerCls: 'active'
		});
		$('#banner_tabs .flex-prev').click(function() {
			bannerSlider.prev()
		});
		$('#banner_tabs .flex-next').click(function() {
			bannerSlider.next()
		});
	})


	// $('.topLevel').mouseover(function(){
	// 	// alert(2);
	// 	// $(this).find('.j-nav-dropdown nav-dropdown').css('display','block');
	// })

  // 顶部分类框开始
	$(function(){
		$('.nav-item').mouseover(function(){
			$(this).children('.nav-dropdown').show();
		})
	})

	$(function(){
		$('.nav-item').mouseout(function(){
			$(this).children('.nav-dropdown').hide();
		})
	})

  $(function(){
    $('.w-dropdown-custm').mouseover(function(){
      $(this).children('#js-customerServiceDropdown1').show();
    })
  })

 $(function(){
    $('.w-dropdown-custm').mouseout(function(){
      $(this).children('#js-customerServiceDropdown1').hide();
    })
  })
	
$(function(){
  $('#two').mouseover(function(){
    $(this).attr('src','/homeCSS/images/456.png');
  })
})

$(function(){
  $('#two').mouseout(function(){
    $(this).attr('src','/homeCSS/images/123.png');
  })
})


//固定侧边框
$(function(){
  $('#two').click(function(){
    $("html,body").animate({scrollTop:0}, 500);
  })
})
 
$(function(e){
  $(document).scroll(function(e){
    // console.log($(this).scrollTop());
    var h = $(this).scrollTop();
    if(h > 320){
      $('.fixed_bian').show(500);
    }else{
      $('.fixed_bian').hide(500);
    }
  })
})

// 购物车
$(function(){
  $('.jiang').mouseover(function(){
    
    // 判断购物车里面商品的数量,只有当数量不为0时才起作用
    a=$(this).find('.j-cart-nums').html();
    if(a!=0)
    {
      $('.j-newMiniCart').show();
    }
  })
  $('.jiang').mouseout(function(){
    // alert(111);
    $('.j-newMiniCart').hide();
  })})
  // 移动 显示小的二级菜单
 $(function(e){
  $(document).scroll(function(e){
    // console.log($(this).scrollTop());
    var h = $(this).scrollTop();
    // console.log(h);
    if(h > 200){
      $('#js-funcTab').addClass('m-funcTab-fixed');
      // 购物车
    }else{
      $('#js-funcTab').removeClass('m-funcTab-fixed');
    }
  })
})
	</script>   
 </body>
</html>

@section('js')
@show