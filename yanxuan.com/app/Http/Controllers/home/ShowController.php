<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use Input;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Controllers\ucpass\lib\Ucpaas;
use Session;


class ShowController extends Controller
{
    /**
     * $add       所有的一级分类
     * $app       所有符合一级分类的商品按照id大小排列只取四条
     * $data      根据
     */
    public function index()
    {
        /*删除过期的活动*/
       $guoqi = DB::table('limited')->where('l_ltime','<',time())->get();
        if($guoqi) {
            foreach ($guoqi as $a => $b) {
                DB::table('goods')->where('g_yhid', '=', $b->l_id)->update(['g_yhid' => 0]);
            }
        }
        // 主页轮播图
            $ban = DB::table('banner')->get();
            // var_dump($ban);
            foreach($ban as $k=>$v)
            {
            // 获取轮播图的商品id
                $bango[$k] = DB::table('goods')->where('g_id','=',$v->g_id)->first();
            // 获取商品对应的二级分类
                // $bangoo[$k] = DB::table('goodsclass')->where('gc_id','=',$bango[$k]->gc_id)->first();
            }
        // 一级菜单下的商品
        // 找出所有的一级分类
            $add = DB::table('goodsclass')->where('gc_pid','=',0)->get();
        // 根据一级菜单找到相关所有商品,每页只显示4条按照上架时间的id大小排序
            foreach($add as $m=>$n){
                $app[$m] = DB::table('goods')
                ->where('gc_pid','=',$n->gc_id)
                ->orderBy('g_id','desc')
                ->take(4)
                ->get();
            }
        // 新品首发
            $newp = DB::table('goods')->orderBy('g_ctime','desc')->take(4)->get();
        // 定义个空数组,将商品和制造商一一对应 
            $brr = [];
            foreach($newp as $q=>$w)
            {
                $brr[$q] = DB::table('maker')->where('m_id','=',$w->m_id)->get();
            }
        // 人气推荐
            // 热销
            $rx = DB::table('goods')->orderBy('g_sellnum','desc')->take(7)->get();
            // 收藏
            $sc = DB::table('goods')->orderBy('g_fid','desc')->take(7)->get();
        // 制造商
            $maker = DB::table('maker')->take(4)->get();

            foreach($maker as $e=>$r){
                $ma[$e] = DB::table('goods')->where('m_id','=',$r->m_id)->orderBy('g_price','asc')->first();
            }

            // var_dump($ma);
        // (限时活动)根据开始时间和结束时间以及是否上架来判断有没有限时活动
            $time=time();
            $data = DB::table('limited')
            ->where('l_ctime','<',$time)
            ->where('l_ltime','>',$time)
            ->where('l_shelves','=','1')
            ->orderBy('l_ctime', 'desc')
            ->first();
            // dd($data);
        // 判断是否查到活动
            if($data){
            // 如果查到，获取对应的活动商品（只能有四个商品）
                $res =  DB::table('goods')->where('g_yhid','=',$data->l_id)->take(4)->get();
                $a = 1;
                return view('home.index',['lim'=>$data,'goo'=>$res,'app'=>$app,'a'=>$a,'newp'=>$newp,'brr'=>$brr,'maker'=>$maker,'ma'=>$ma,'bango'=>$bango,'ban'=>$ban,'rx'=>$rx,'sc'=>$sc]);
            }else{
            // 如果没查到,返回视图
               $a = 0;
               return view('home.index',['a'=>$a,'app'=>$app,'newp'=>$newp,'brr'=>$brr,'maker'=>$maker,'ma'=>$ma,'bango'=>$bango,'ban'=>$ban,'rx'=>$rx,'sc'=>$sc]);
            }
    }

    // 限时活动结束

    public function postDel(Request $request)
    {
//         dd($request->all());
            // 恢复商品价格并且恢复其他活动可选状态
            $data = DB::table('goods')->where('g_yhid','=',$request->input('id'))->update(['g_yhid'=>0,'g_coupon'=>0]);
//            dd($data);
            if($data){
                echo 1;
            }else{
                echo 0;
            }

    }

    // 限时活动页面
     public function getXianshi()
    {
        // 查询现在正在进行中的活动
        $time=time();
            $now = DB::table('limited')
                ->where('l_ctime','<',$time)
                ->where('l_ltime','>',$time)
                ->where('l_shelves','=',1)
                ->orderBy('l_ctime', 'desc')
                ->first();
        // dd($now);
        // 判断是否查到活动
            if($now){
            // 如果查到，获取对应的活动商品（只能有四个商品）
                $year = date("Y");
                $month = date("m");
                $day = date("d");
                $etime= mktime(23,59,59,$month,$day,$year);//当天结束时间戳
                // dd($etime);
                $res =  DB::table('goods')->where('g_yhid','=',$now->l_id)->take(4)->get();
                $a = 1;
            // 查询已经结束的三个活动
                $end = DB::table('limited')
                    ->where('l_ctime','<',$now->l_ctime)
                    ->orderBy('l_ctime','asc')
                    ->take(3)
                    ->get();

            // 查询还未开始的四个活动
                $wstart = DB::table('limited')
                    ->where('l_ctime','>',time())
                    ->orderBy('l_ctime','asc')
                    ->take(4)
                    ->get();
            // 如果查询到还未开始的活动
                if($wstart){
                    foreach($wstart as $k=>$v){
                    $wgoo[$k] = DB::table('goods')->where('g_yhid','=',$v->l_id)->get(); 
                    }
                    
                    return view('home.xianshi',['now'=>$now,'ngoo'=>$res,'end'=>$end,'wstart'=>$wstart,'wgoo'=>$wgoo,'etime'=>$etime,'a'=>$a]);
                }else{
                    return view('home.xianshi',['now'=>$now,'ngoo'=>$res,'end'=>$end,'wstart'=>$wstart,'etime'=>$etime,'a'=>$a]);
                }
            
            }else{
                $a = 0;
               return view('home.xianshi',['a'=>$a]);
            }
    }

    /**
     * 商品列表页方法结束开始
     *
     * 
     */
    public function getGoods(Request $request)
    {
        // gcid：该页面是哪个一级类(该一级类的id)
        $gcid=$request->input('gcid');
        $gctitle=$request->input('gctitle');
        $lunb = DB::table('banner')->where('gc_id','=',$gcid)->where('ban_status','=',2)->get();
        foreach ($lunb as $k => $v) {
        	$lun[$k] = DB::table('goods')->where('g_id','=',$v->g_id)->first();
        }

        // $data:该一级类下面所有的二级类(数组)
        $data=DB::table('goodsclass')->where('gc_pid',$gcid)->get();

        //每一个二级类下面的商品 
        foreach($data as $k=>$v){
            $datas[]=DB::table('goods')->where('gc_id',$v->gc_id)->get();
        }
        return view('home.goods',['data'=>$data,'datas'=>$datas,'gctitle'=>$gctitle,'lunb'=>$lunb,'lun'=>$lun]);
    }
    /**
     * 商品列表页方法结束
     *
     * 
     */

    public function getZhuanti(){
        return view('home.zhuanti');
    }

    public function getBrand(){
        $res = DB::table('maker')->select()->get();
        foreach ($res as $key => $value) {
          $goods[$key] = DB::table('goods')->where('m_id',$value->m_id)->orderBy('g_price','asc')->first();
          // var_dump($goods);
        }
        // var_dump($goods);
        return view('home.brand',['res'=>$res,'goods'=>$goods]);
    }


    //跳转活动页
    public function getHuodong(){
    	// 通过数据库查询出9条数据 到视图模板页显示
        $wei = DB::table('goods')->orderBy('m_id','desc')->take(9)->get();
        // 遍历从数据库查出的数据
        foreach ($wei as $k => $v) {
            $sio[$k] = DB::table('maker')->where('m_id',$v->m_id)->get();
        }
        // dd($sio);
        $iis = DB::table('goods')->orderBy('m_id','asc')->take(9)->get();
        foreach ($iis as $keys => $values) {
            $iiss[$keys] = DB::table('maker')->where('m_id',$values->m_id)->get();
        }

        // 查询优惠卷表里面1,2,3,4 条数据
          $ci = DB::table('coupon')->whereIn('c_id',[1,2,3,4])->get();

        // 判断用户是否登录   如果未登录则显示优惠券未领取
        if(!session('u_account')){
            return view('home.huodong',['wei'=>$wei,'sio'=>$sio,'iis'=>$iis,'iiss'=>$iiss,'ci'=>$ci]);
            die;
        }
        $name = session('u_account');
        // dd($request->yunfei);
        // 得到用户的U_id
        $u_id = DB::table('user')->where('u_account',$name)->first()->u_id;
        
      	
        // dd($ci);
        $dos = DB::table('userdetail')->where('u_id',$u_id)->get();
        // 判断是否查询到了数据
        if(!empty($dos)){
        foreach ($dos as $key => $value) {
            $do[$key] = $value->c_id;
        }
        return view('home.huodong',['ci'=>$ci,'do'=>$do,'wei'=>$wei,'sio'=>$sio,'iis'=>$iis,'iiss'=>$iiss]);
    }else{
        return view('home.huodong',['ci'=>$ci,'wei'=>$wei,'sio'=>$sio,'iis'=>$iis,'iiss'=>$iiss]);
    }
        
        
        
    }
    
    //用户注册页
    public function getRegister(){
        return view('home.register');

    }

    
    /**
     * 执行用户注册
     * $u_account       注册的用户名
     * $u_pass          注册的密码
     * $u_phone         注册的电话号码
     */
    public function postDoregister(Request $request)
    {
        
        //获取注册表单提交的数据
        $u_account = $request->input('u_account');
        $u_pass = $request->input('u_pass');
        $u_phone = $request->input('u_phone');

        //对用户密码进行哈希加密
        $u_pass = Hash::make($u_pass);

        //往数据库插入数据
        $res = DB::table('user')->insert(['u_account'=>$u_account,'u_pass'=>$u_pass,'u_phone'=>$u_phone]);

        if($res){
            //重定向到登录页面
            return redirect('/home/login');
        }else{
            return back()->withInput();
        }
    }

   
    //跳转到个人信息修改页
    public function getPersonalupdate()
    {
        //通过存储的用户登录account的session值查询数据
        $u_account = session('u_account');
        $data = DB::table('user')->where('u_account',$u_account)->first();

        //携带查询到的数据跳转到
        return view('/home/personalupdate',['data'=>$data]);
    }

    //个人中心 完善用户信息
    public function postUserinfo(Request $request)
    {
       
         //接收提交的数据
        $data = $request->except(['_token']);

       
        if(isset($data['u_pic'])==true){

            //调用方法进行头像上传
            $data['u_pic'] = $this->upload($request);

            if($data['u_pic']==false){
                return back()->with('error','上传图片格式不正确!');
            }  

            if($data['year']==0 || $data['month']==0 || $data['day']==0){

                //上传数据
                DB::table('user')->where('u_id',$data['u_id'])->update(['u_nickname'=>$data['u_nickname'],'u_sex'=>$data['u_sex'],'u_pic'=>$data['u_pic']]);

                //执行跳转
                return redirect('/home/personal');

            }else{

                 //拼接出生日期
                 $u_born = $data['year'].'/'.$data['month'].'/'.$data['day'];
        

                 //上传数据
                 DB::table('user')->where('u_id',$data['u_id'])->update(['u_nickname'=>$data['u_nickname'],'u_sex'=>$data['u_sex'],'u_pic'=>$data['u_pic'],'u_born'=>$u_born]);
                 
                 //执行跳转
                 return redirect('/home/personal');
            }
  
        }else{

            if($data['year']==0 || $data['month']==0 || $data['day']==0){

                //上传数据
                DB::table('user')->where('u_id',$data['u_id'])->update(['u_nickname'=>$data['u_nickname'],'u_sex'=>$data['u_sex']]);

                //执行跳转
                return redirect('/home/personal');

            }else{

                 //拼接出生日期
                 $u_born = $data['year'].'/'.$data['month'].'/'.$data['day'];
            

                 //上传数据
                 DB::table('user')->where('u_id',$data['u_id'])->update(['u_nickname'=>$data['u_nickname'],'u_sex'=>$data['u_sex'],'u_born'=>$u_born]);
                 
                 //执行跳转
                 return redirect('/home/personal');
            }

        }

    }

    //头像上传
    public function upload($request)
    {
         //判断是否有文件上传
         if($request->hasFile('u_pic'))
         {
             //随机文件名
             $name = md5(time()+rand(1000,9999));
             //获取文件的后缀名
             $suffix = $request->file('u_pic')->getClientOriginalExtension();
             $arr = ['png','jpg','jpeg','gif'];
             if(!in_array($suffix,$arr)){

                 return false;
             }

             $request->file('u_pic')->move('./homeCSS/userpic/', $name.'.'.$suffix);
             //返回路径信息
             return '/userpic/'.$name.'.'.$suffix;
         }else{
             return 1;
         }
    }

    //个人中心 地址管理
    public function getAddress()
    {
        if(session('u_account')){
            //通过登录后存的session值查询数据
            $u_account = session('u_account');
            $data = DB::table('user')->where('u_account',$u_account)->first();
            // dd($data);
            //通过获取的用户id查询相对应的地址表的数据
            $u_id = $data->u_id;
            $datas = DB::table('address')->orderBy('a_mo', 'desc')->where('u_id',$u_id)->get();
            
            //跳转到地址页面
            return view('/home/address',['datas'=>$datas,'data'=>$data]);
        }else{
            return view('/home/login');
        }
    }

    //个人中心 地址管理 删除地址
    public function postDeladdress(Request $request)
    {
        //接收要删除的数据的id
        $a_id = $request->input('a_id');

        //删除数据
        $res = DB::table('address')->where('a_id',$a_id)->delete();

    }

    //个人中心 地址管理 设置默认地址
    public function postMoren(Request $request)
    {
        //接收要删除的数据的id
        $a_id = $request->input('a_id');
        $u_id = $request->input('u_id');

        //查询账号是否设置默认地址
        $data = DB::table('address')->where('u_id',$u_id)->get();

        foreach($data as $k=>$v){
            
            //将数据中默认地址字段为1的全部修改成0
            DB::table('address')->where('u_id',$u_id)->update(['a_mo'=>0]);

        }

        //修改默认字段的值
        DB::table('address')->where('a_id',$a_id)->update(['a_mo'=>1]);

    }

    //个人中心 地址管理 添加地址
    public function getAddressinsert()
    {
        //通过登录后存的session值查询数据
        $u_account = session('u_account');

        $data = DB::table('user')->where('u_account',$u_account)->first();

        
        //跳转到地址页面
        return view('/home/addressinsert',['data'=>$data]);

    }

    //个人中心 地址管理 执行添加地址
    public function postAddressadd(Request $request)
    {
        //接收提交的数据
        $a_name = $request->input('a_name');
        $a_phone = $request->input('a_phone');
        $a_address = $request->input('a_address');
        $u_id = $request->input('u_id');

       
        DB::table('address')->where('u_id',$u_id)->update(['a_mo' =>0]);



        //往数据库插入数据
        $res = DB::table('address')->insert(['a_name'=>$a_name,'a_phone'=>$a_phone,'a_address'=>$a_address,'u_id'=>$u_id]);


       


        if($res){
            return redirect('/home/address');
        }else{
            return back();
        }

    }

    //个人中心 地址管理 编辑地址
    public function getAddressupdate(Request $request)
    {
        
        //接收传递的参数数据
        $a_id = $request->input('a_id');

        //按照接收提取地址数据
        $datas = DB::table('address')->where('a_id',$a_id)->first();

        //通过登录后存的session值查询数据
        $u_account = session('u_account');
        $data = DB::table('user')->where('u_account',$u_account)->first();
        
        //跳转到地址页面
        return view('/home/addressupdate',['data'=>$data,'datas'=>$datas]);
    }

    //个人中心 地址管理 执行编辑地址
    public function postDoaddressupdate(Request $request)
    {
        //接收提交的数据
        $a_id = $request->input('a_id');
        $a_name = $request->input('a_name');
        $a_phone = $request->input('a_phone');
        $a_address = $request->input('a_address');

        //执行修改
        $res = DB::table('address')->where('a_id',$a_id)->update(['a_name'=>$a_name,'a_phone'=>$a_phone,'a_address'=>$a_address]);

        if($res){
            return redirect('/home/address');
        }else{
            return back();
        }
    }

    //个人中心 订单管理
    public function getOrder()
    {
        if(session('u_account')){
            //通过登录后存的session值查询数据
            $u_account = session('u_account');
            $data = DB::table('user')->where('u_account',$u_account)->first();

            //查询用户的订单
            $datas = DB::table('order')->where('u_id',$data->u_id)->get();
            // dd($datas);
            foreach ($datas as $k => $v) {
                
               $datas[$k]->goods = DB::table('orderdetail')
                ->join('goods','orderdetail.g_id','=','goods.g_id')
                ->select('orderdetail.*','goods.*')
                ->where('o_id',$v->o_id)
                ->get();
            }
            // dd($datas);
            return view('/home/order',['data'=>$data,'datas'=>$datas]);
        }else{
            return view('/home/login');
        }
    }

    //个人中心 订单管理 取消订单
    public function postDelorder(Request $request)
    {
        $o_id = $request->input('o_id');

        $res = DB::table('order')->where('o_id',$o_id)->delete();
        $res = DB::table('orderdetail')->where('o_id',$o_id)->delete();

        if($res){
            echo 1;
        }else{
            echo 2;
        }

        
    }

    //个人中心  订单管理  评价
    public function postPinglun(Request $request)
    {

        //接收提交的数据
        $co_comment = $request->input('co_comment');
        $g_id = $request->input('g_id');
        $co_time = $request->input('co_time');
        $o_id = $request->input('o_id');

        //通过订单ID修改订单状态
        DB::table('order')->where('o_id',$o_id)->update(['o_status'=>4]);

        //通过登录的存储的用户账号查询用户的id
        $u_account = session('u_account');
        $data = DB::table('user')->where('u_account',$u_account)->first();
        $u_id = $data->u_id;

        //把接收的数据提交到评论表
        $res = DB::table('comment')->insert(['u_id'=>$u_id,'g_id'=>$g_id,'co_comment'=>$co_comment,'co_time'=>$co_time]);

        if($res){
            return redirect('/home/order');
        }else{
            return back();
        }
    }

    //个人中心 订单管理 查看详情
     public function getOrderxiangqing(Request $request)
     {
        //接收提交的数据
        $o_status = $request->o_status;
        $g_id = $request->g_id;
        $gd_id = $request->gd_id;

        //根据接收的数据查询跳转页面所需的数据
        $goods = DB::table('goods')->where('g_id',$g_id)->first();
        $class = DB::table('goodsdetail')->where('gd_id',$gd_id)->first();
        $num = $request->num;
     
        //通过登录的存储的用户账号查询用户的id
        $name = session('u_account');
        $id = DB::table('user')->where('u_account',$name)->first()->u_id;
        //查询用户的优惠券
        $pid = DB::table('userdetail')->where('u_id',$id)->get();
        
        //判断用户是否有优惠券 有的话把优惠券参数传递过去,
        if($pid){
            foreach ($pid as $key => $value) {
                $youhui[$key] = DB::table('coupon')->where('c_id',$value->c_id)->first();
            }
           
             $pdd = DB::table('address')->where('u_id',$id)->get();
             $moren = DB::table('address')->where('u_id',$id)->where('a_mo',1)->first();
        
            return view('home.orderdingdan',['youhui'=>$youhui,'u_id'=>$id,'pdd'=>$pdd,'moren'=>$moren,'goods'=>$goods,'class'=>$class,'num'=>$num,'pid'=>$pid,'o_status'=>$o_status]);
        }else{

            $pdd = DB::table('address')->where('u_id',$id)->get();
            $moren = DB::table('address')->where('u_id',$id)->where('a_mo',1)->first();
            
            return view('home.orderdingdan',['u_id'=>$id,'pdd'=>$pdd,'moren'=>$moren,'goods'=>$goods,'class'=>$class,'num'=>$num,'pid'=>$pid,'o_status'=>$o_status]);
            
        }
    }

    //个人中心 订单管理 付款
    public function getOrderbuy(Request $request)
    {
      
        //根据接收的数据与登录后存储的用户名查询数据
        $o_id = $request->input('o_id');
        $name = session('u_account');
        $id = DB::table('user')->where('u_account',$name)->first()->u_id;

        //查询优惠券
        $pid = DB::table('userdetail')->where('u_id',$id)->get();
        

        if($pid){
            foreach ($pid as $key => $value) {
                $youhui[$key] = DB::table('coupon')->where('c_id',$value->c_id)->get();
            }

        $pdd = DB::table('address')->where('u_id',$id)->get();
        //地址
        $moren = DB::table('address')->where('u_id',$id)->where('a_mo',1)->first();
        
        //根据订单id查询订单的商品信息
        $goods = DB::table('orderdetail')->where('o_id',$o_id)->get();
       
        //通过查询到的订单下的商品数组 查询商品的详细信息
        foreach ($goods as $k => $v) {
            
           $goodss[$k] = DB::table('goodsdetail')
            ->join('goods','goodsdetail.g_id','=','goods.g_id')
            ->select('goodsdetail.*','goods.*')
            ->where('goods.g_id',$v->g_id)
            ->where('goodsdetail.gd_id',$v->gd_id)
            ->get();

        }

        return view('home.orderbuy',['o_id'=>$o_id,'u_id'=>$id,'youhui'=>$youhui,'pdd'=>$pdd,'moren'=>$moren,'goods'=>$goods,'goodss'=>$goodss,'pid'=>$pid]);
    }else{


        $pdd = DB::table('address')->where('u_id',$id)->get();
        //地址
        $moren = DB::table('address')->where('u_id',$id)->where('a_mo',1)->first();
        
        //根据订单id查询订单的商品信息
        $goods = DB::table('orderdetail')->where('o_id',$o_id)->get();
        
        //通过查询到的订单下的商品数组 查询商品的详细信息
        foreach ($goods as $k => $v) {
            
           $goodss[$k] = DB::table('goodsdetail')
            ->join('goods','goodsdetail.g_id','=','goods.g_id')
            ->select('goodsdetail.*','goods.*')
            ->where('goods.g_id',$v->g_id)
            ->where('goodsdetail.gd_id',$v->gd_id)
            ->get();

        }

        return view('home.orderbuy',['o_id'=>$o_id,'u_id'=>$id,'pdd'=>$pdd,'moren'=>$moren,'goods'=>$goods,'goodss'=>$goodss,'pid'=>$pid]);


    }
   

    }

    //个人中心 订单管理 去付款
    public function postQufukuan(Request $request)
    {
        
        $icu = $request->input('o_id');
        $o_zong = $request->input('heji');
        // 跳转到付款页面  并携带参数订单号与订单的总金额
        return view('home.pay',['icu'=>$icu,'o_zong'=>$o_zong]);
    }


    //个人中心 订单管理 确认收货
    public function postShouhuo(Request $request)
    {
        //接收提交的订单号
        $o_id = $request->input('o_id');
        //修改订单的状态为待评价
        $res = DB::table('order')->where('o_id',$o_id)->update(['o_status'=>3]);

        if($res){
            echo 1;
        }else{
            echo 2;
        }
    }


    //个人中心 收藏夹
    public function getFavorites()
    {
        if(session('u_account')){    
            //通过登录后存的session值查询数据
            $u_account = session('u_account');
            //登录用户的信息
            $data = DB::table('user')->where('u_account',$u_account)->first();
            //登录用户的收藏信息        
            $users = DB::table('favorites')
             ->join('goods','favorites.g_id','=','goods.g_id')
             ->select('favorites.*','goods.*')
             ->where('u_id',$data->u_id)
             ->get();

            //跳转到地址页面
            return view('/home/favorites',['data'=>$data,'users'=>$users]);
        }else{
            return view('/home/login');
        }
    }

    //个人中心 收藏夹 删除收藏
    public function postDeletefavorites(Request $request)
    {
        $g_id = $request->input('g_id');

        //通过登录后存的session值查询数据
        $u_account = session('u_account');
        //登录用户的信息
        $data = DB::table('user')->where('u_account',$u_account)->first();
        $u_id = $data->u_id;
        
        //执行数据删除
        $res = DB::table('favorites')->where('u_id',$u_id)->where('g_id',$g_id)->delete();
        
        if($res){
            echo 1;
        }else{
            echo 2;
        }

    }

    //个人中心 优惠券
    public function getCoupon()
    {   
        if(session('u_account')){
            //通过登录后存的session值查询数据
            $u_account = session('u_account');
            //登录用户的信息
            $data = DB::table('user')->where('u_account',$u_account)->first();
            
            //登录用户的优惠券信息
      
                $datas = DB::table('userdetail')
                 ->join('coupon','coupon.c_id','=','userdetail.c_id')
                 ->select('userdetail.*','coupon.*')
                 ->where('u_id',$data->u_id)
                 ->get();

            //跳转到地址页面
            return view('/home/coupon',['data'=>$data,'datas'=>$datas]);
        }else{
            return view('/home/login');
        }
    }


    //定义方法 检测用户名是否存在
    public function postCheckname(Request $request)
    {
        //接收提交的数据
        $account = $request->input('u_account');
        //查询用户表单的用户名是否存在
        $res = DB::table('user')->where('u_account',$account)->first();
        //如果用户名不存在echo 1 如果存在echo 2
        if($res == null){
            echo 1;
        }else{
            echo 2;
        }
    }

    //定义方法 检测手机号是否存在
    public function postCheckphone(Request $request)
    {
        //接收提交的数据
        $phones = $request->input('u_phone');
        //查询用户表单的电话号码是否存在
        $res = DB::table('user')->where('u_phone',$phones)->first();
        //如果用户名不存在echo 0 如果存在echo 1
        if($res == null){
            echo 0;
        }else{
            echo 1;
        }

    }



    /**
    *   发送验证码的方法
    *   @$phone 表单手机号的请求获取
    *   @$options 
    */
    public function getCode(Request $request)
    {
        //接收要发送验证码的手机号
        $phone = $request->input('u_phone');

        //初始化必填
        $options['accountsid']='7d6381fea4726de5b1cd92030b4c31b4';
        $options['token']='80b7c96f772e2263aa0b9a06693476fe';

        //初始化 $options必填
        $ucpass = new Ucpaas($options);

        //开发者账号信息查询默认为json或xml
        $ucpass->getDevinfo('json');

        $appId = "1bb785ea0c604c6db5d4b13448be4152";
        $to = $phone;
        $templateId = "40366";
        $code = rand(1000,9999);
        $param=$code;

        $ucpass->templateSMS($appId,$to,$templateId,$param);

        session(['ucode'=>$param]);

    }

    //注册账号 判断输入的短信验证码是否正确
    public function postYanzheng(Request $request)
    {
        //接收提交的数据
        $sms = $request->input('sms');

        if($sms == session('ucode')){
            echo 1;
        }else{
            echo 2;
        }
    }

    //跳转到服务条款页
    public function getService()
    {
        return view('/home/service');
    }


    //跳转到前台登录页面
    public function getLogin(){
        if(session('u_account')){
            return redirect('/');
        }
        return view('home.login');
    }

    //ajax判断账号密码是否正确
    public function postDenglu(Request $request)
    {
        $u_account = $request->input('u_account');
        $u_pass = $request->input('u_pass');
        
        //查询提交的数据
        $res = DB::table('user')->where('u_account',$u_account)->first();
        
        //进行判断是否查询到数据
        if($res)
        {
            if(Hash::check($u_pass,$res->u_pass))
           {
                
                Session::put('u_account',$res->u_account);
               
                echo 0;

           }else{
                echo 1;
           }
            
        }else{
           echo 1;  
        }
      
    }

    //跳转到个人中心
    public function getPersonal()
    {
           
        if(session('u_account')){
            //通过存储的用户登录account的session值查询数据
            $u_account = session('u_account');
            $data = DB::table('user')->where('u_account',$u_account)->first();

            //携带查询到的数据跳转到
            return view('/home/personal',['data'=>$data]);
        }else{
            return view('/home/login');
        }
    }

    //退出账号并删除session
    public function getOut(Request $request)
    {
        //删除session
        $request->session()->forget('u_account');
        return view('/home/login');
    }
  
    //跳转到找回密码页面
    public function getModify()
    {
        return view('/home/modify');
    }

    //找回密码 验证账号是否存在
    public function getAccount(Request $request)
    {
        //接收传递的数据
        $u_account = $request->input('u_account');

        //查询获取的账号是否存在
        $res = DB::table('user')->where('u_account',$u_account)->first();

        if($res){
            echo 0;
        }else{
            echo 1;
        }
    }

    //找回密码 验证输入的手机号是否和账号对应
    public function getPhone(Request $request)
    {
        //接收传递的数据
        $u_account = $request->input('u_account');
        $u_phone = $request->input('u_phone');

        //查询获取的账号是否存在
        $res = DB::table('user')->where('u_account',$u_account)->first();

        if($u_phone == $res->u_phone){
            echo 1;
        }else{
            echo 0;
        }
    }

    //执行找回密码
    public function getDomodify(Request $request)
    {
        //获取数据的值
        $u_phone = $request->input('u_phone');

        //查询获取的手机号码是否存在
        $res = DB::table('user')->where('u_phone',$u_phone)->first();
        
        

        if(!$res){
            
            echo 1;

        }else{
            
            //接收要发送验证码的手机号
            $phone = $request->input('u_phone');

            //初始化必填
            $options['accountsid']='7d6381fea4726de5b1cd92030b4c31b4';
            $options['token']='80b7c96f772e2263aa0b9a06693476fe';

            //初始化 $options必填
            $ucpass = new Ucpaas($options);

            //开发者账号信息查询默认为json或xml
            $ucpass->getDevinfo('json');

            $appId = "1bb785ea0c604c6db5d4b13448be4152";
            $to = $phone;
            $templateId = "40366";
            $code = rand(1000,9999);
            $param=$code;

            $ucpass->templateSMS($appId,$to,$templateId,$param);

            session(['uphone'=>$param]);
            session(['u_id'=>$res->u_id]);

        }

    }

    //找回密码 判断输入的短信验证码是否正确
    public function postPhoneyanzheng(Request $request)
    {
        //接收提交的数据
        $sms = $request->input('sms');
        
        if($sms == session('uphone')){
            echo 0;
        }else{
            echo 1;
        }
    }

    //跳转到重新设置密码页
    public function getPassword(Request $request)
    {
        return view('/home/password');
    }

    //执行密码修改
    public function postDopassword(Request $request)
    {
        //接收提交的数据
        $u_pass = $request->input('u_pass');
        $u_id = $request->input('u_id');

        //为新密码进行哈希加密
        $u_pass = Hash::make($u_pass);

        //修改数据库数据
        $res = DB::table('user')->where('u_id',$u_id)->update(['u_pass'=>$u_pass]);

        if($res){

            return redirect('/home/login');

        }
    }

    /**
     * 商品详情页方法开始
     *
     * 
     */
    /**
     * 1.显示详情页(从其他页面到此页面需要携带(该商品的id，该商品所属的二级类gcid，一级类gcpid))
     *
     *传过去的数据有商品的基本信息$data,商品的详细信息$data1,该商品所属的一二级类的信息【(商品的缩略图，商品的尺码数,制造商信息）可能为空】
     */
    public function getXiangqing(Request $request)
    {
        //该商品的基本信息
        $data=DB::table('goods')->where('g_id','=',$request->input('id'))->first();
        $time=time();

        $limit=DB::table('limited')->where('l_id','=',$data->g_yhid)->first();
        $time = time();
        // dd($limit,$time);
       // dd($limit);
        // 先判断用户是否登录,如果登录了则查询收藏表，判断该商品是否已收藏
        $res=null;
        if(session('u_account')){

            // 查出用户的u_id
               $value = session('u_account');
               $values=DB::table('user')->where('u_account','=',$value)->first();
               $u_id=$values->u_id;

            // 查询查询收藏表，判断该商品是否已收藏
               $res=DB::table('favorites')->where(['u_id'=>$u_id,'g_id'=>$data->g_id])->first();
        }

        // 将商品的图片字段拿出放数组
        $pic=explode(',',$data->g_pic);
        $picture=[];

        // 该商品的颜色总数，和商品的小缩略图数量一样
        $colornum=0;

        // 遍历存图片的数组，如果图片大于五张将多余的图片压入另一数组(该数组存放小的缩略图)
        foreach($pic as $k=>$v){
            if($k>4){
            $picture[]=$v;
            $colornum=$colornum+1;
            }else{
                $picture=[];
            }
        }
        
        // 该商品的详情信息
        $data1=DB::table('goodsdetail')->where('g_id',$request->input('id'))->get();

        // 计算出该商品有几条详细信息
        $num=0;
        foreach($data1 as $k=>$v){
            $num=$num+1;
        }

        // 判断该商品是否有颜色属性如果有，则用该商品详情的总个数除以颜色的数量，则得到该商品尺码的数量
        if($colornum==0){
            $sizenum='';
        }else{
            $sizenum=$num/$colornum;
        }

        // 判断该商品有没有制造商，如果有则查出数据传到商品详情页,如果没有则传空
        if($data->m_id!=''){
            $mname=DB::table('maker')->where('m_id',$data->m_id)->first();
        }else{
            $mname='';
        }

        // jiaojian写的
        // 查询数据库总条数
        $count = count(DB::table('comment')->where('g_id','=',$request->input('id'))->get());

        // 设置每页条数
        $rev = 5;
        // 求总页数
        $sums = ceil($count/$rev);
        // 求当前页
        $page = Input::get('xiangqing');
        if(empty($page)){  
        $page = "1";  
        }  
        //5、设置上一页、下一页  
        $prev = ($page-1)>0?$page-1:1;  
        $next = ($page+1)<$sums?$page+1:$sums;  
        //6、求偏移量  
        $offset = ($page-1)*$rev;  
        //7、sql查询数据库  
        $a = $request->input('id');
        $fen = Db::select("select * from comment where g_id=$a limit $offset,$rev");  
        //8、数字分页(可有可无)  
        $pp = array();  
        for($i=1;$i<=$sums;$i++){  
        $pp[$i]=$i;  
        } 

        $com = count(DB::table('comment')->where('g_id','=',$request->input('id'))->get());
        // dd($com);
        $comm = DB::table('comment')
        ->join('user','comment.u_id','=','user.u_id')
        ->select('user.*','comment.*')
        ->where('g_id','=',$request->input('id'))->paginate(5);

        // 从商品表中选4个随机商品
        $sui = DB::table('goods')
            ->orderBy(\DB::raw('RAND()'))
            ->take(4)
            ->get();

        if(count($comm)){
                foreach ($comm as $k => $v) {
                $mm[$k] = DB::table('goodsdetail')
                ->join('goods','goods.g_id','=','goodsdetail.g_id')
                ->select('goods.*','goodsdetail.*')
                ->where('gd_id','=',$v->gd_id)
                ->get();
                }
                // jiaojian
                // dd($mm);
                // 查询该商品所属一二级类
                $title1=DB::table('goodsclass')->where('gc_id',$request->input('gcpid'))->first();
                $title2=DB::table('goodsclass')->where('gc_id',$request->input('gcid'))->first();
                // dd($title2->gc_title);
                return view('home.xiangqing',['time'=>$time,'limit'=>$limit,'data'=>$data,'data1'=>$data1,'sizenum'=>$sizenum,'picture'=>$picture,'title1'=>$title1,'title2'=>$title2,'res'=>$res,'mname'=>$mname,'comm'=>$comm,'mm'=>$mm,'com'=>$com,'fen'=>$fen,'prev'=>$prev,'next'=>$next,'sums'=>$sums,'pp'=>$pp,'page'=>$page,'sui'=>$sui]);
            }else{
                // jiaojian
                // 查询该商品所属一二级类
                $title1=DB::table('goodsclass')->where('gc_id',$request->input('gcpid'))->first();
                $title2=DB::table('goodsclass')->where('gc_id',$request->input('gcid'))->first();
                // dd($title2->gc_title);
                return view('home.xiangqing',['time'=>$time,'limit'=>$limit,'data'=>$data,'data1'=>$data1,'sizenum'=>$sizenum,'picture'=>$picture,'title1'=>$title1,'title2'=>$title2,'res'=>$res,'mname'=>$mname,'comm'=>$comm,'com'=>$com,'fen'=>$fen,'prev'=>$prev,'next'=>$next,'sums'=>$sums,'pp'=>$pp,'page'=>$page,'sui'=>$sui]);
            }
       
    }

    // 继续无刷新分页
    public function getPagepro(Request $request){
        //该商品的基本信息
        // dd($request->all());
        $data=DB::table('goods')->where('g_id','=',$request->input('id'))->first();
        $limit=DB::table('limited')->where('l_id','=',$data->g_yhid)->first();

        $time = time();
        // dd($limit,$time);
        // 先判断用户是否登录,如果登录了则查询收藏表，判断该商品是否已收藏
        $res=null;
        if(session('u_account')){

            // 查出用户的u_id
               $value = session('u_account');
               $values=DB::table('user')->where('u_account','=',$value)->first();
               $u_id=$values->u_id;
                // dd($data->g_id);
            // 查询查询收藏表，判断该商品是否已收藏
               $res=DB::table('favorites')->where(['u_id'=>$u_id,'g_id'=>$data->g_id])->first();

        }

        // 将商品的图片字段拿出放数组
        $pic=explode(',',$data->g_pic);
        $picture=[];

        // 该商品的颜色总数，和商品的小缩略图数量一样
        $colornum=0;

        // 遍历存图片的数组，如果图片大于五张将多余的图片压入另一数组(该数组存放小的缩略图)
        foreach($pic as $k=>$v){
            if($k>4){
            $picture[]=$v;
            $colornum=$colornum+1;
            }else{
                $picture=[];
            }
        }
        
        // 该商品的详情信息
        $data1=DB::table('goodsdetail')->where('g_id',$request->input('id'))->get();

        // 计算出该商品有几条详细信息
        $num=0;
        foreach($data1 as $k=>$v){
            $num=$num+1;
        }

        // 判断该商品是否有颜色属性如果有，则用该商品详情的总个数除以颜色的数量，则得到该商品尺码的数量
        if($colornum==0){
            $sizenum='';
        }else{
            $sizenum=$num/$colornum;
        }

        // 判断该商品有没有制造商，如果有则查出数据传到商品详情页,如果没有则传空
        if($data->m_id!=''){
            $mname=DB::table('maker')->where('m_id',$data->m_id)->first();
        }else{
            $mname='';
        }
        // jiaojian
        // dd($request->all());
        //1、查询数据库总条数  
        $count = count(Db::table('comment')->where('g_id',$data->g_id)->get());  
        //2、设置每页显示条数  
        $rev = '4';  
        //3、求总页数  
        $sums = ceil($count/$rev);  
        //4、求单前页  
        $page = Input::get('page');  
        if(empty($page)){  
        $page = "1";  
        }  
        //5、设置上一页、下一页  
        $prev = ($page-1)>0?$page-1:1;  
        $next = ($page+1)<$sums?$page+1:$sums;  
        //6、求偏移量  
        $offset = ($page-1)*$rev;  
        //7、sql查询数据库  
        $a = $request->input('id');
        $fen = Db::select("select * from comment where g_id= $a limit $offset,$rev");  
        //8、数字分页(可有可无)  
        $pp = array();  
        for($i=1;$i<=$sums;$i++){  
        $pp[$i]=$i;  
        } 
        // var_dump($pp);
        $com = count(DB::table('comment')->where('g_id','=',$request->input('id'))->get());
        // dd($com);
        $comm = DB::table('comment')
        ->join('user','comment.u_id','=','user.u_id')
        ->select('user.*','comment.*')
        ->where('g_id','=',$request->input('id'))->paginate(5);
            if(count($comm)){
                // dd(count($comm));
                foreach ($comm as $k => $v) {
                $mm[$k] = DB::table('goodsdetail')
                ->join('goods','goods.g_id','=','goodsdetail.g_id')
                ->select('goods.*','goodsdetail.*')
                ->where('gd_id','=',$v->gd_id)
                ->get();
                }
                // jiaojian
                // dd($mm);
                // 查询该商品所属一二级类
                $title1=DB::table('goodsclass')->where('gc_id',$request->input('gcpid'))->first();
                $title2=DB::table('goodsclass')->where('gc_id',$request->input('gcid'))->first();
                // dd($title2->gc_title);
                return view('home.pagepro',['time'=>$time,'limit'=>$limit,'data'=>$data,'data1'=>$data1,'sizenum'=>$sizenum,'picture'=>$picture,'title1'=>$title1,'title2'=>$title2,'res'=>$res,'mname'=>$mname,'comm'=>$comm,'mm'=>$mm,'com'=>$com,'fen'=>$fen,'prev'=>$prev,'next'=>$next,'sums'=>$sums,'pp'=>$pp,'page'=>$page]);
        // return view('home.pagepro', ['data'=>$data,'prev'=>$prev,'next'=>$next,'sums'=>$sums,'pp'=>$pp,'page'=>$page]); 
                }else{
                    // jiaojian
                    // 查询该商品所属一二级类
                    $title1=DB::table('goodsclass')->where('gc_id',$request->input('gcpid'))->first();
                    $title2=DB::table('goodsclass')->where('gc_id',$request->input('gcid'))->first();
                    // dd($title2->gc_title);
                    return view('home.pagepro',['time'=>$time,'limit'=>$limit,'data'=>$data,'data1'=>$data1,'sizenum'=>$sizenum,'picture'=>$picture,'title1'=>$title1,'title2'=>$title2,'res'=>$res,'mname'=>$mname,'comm'=>$comm,'com'=>$com,'fen'=>$fen,'prev'=>$prev,'next'=>$next,'sums'=>$sums,'pp'=>$pp,'page'=>$page]);
                }
    } 

    /**
     * 2：点击加入购物车发送的ajax
     *
     * 将该商品的图片，名称，属性，价格，商品id，商品详情信息的id等压入数组，返回json格式
     */
       public function postAddgou(Request $request)
       {  
          $data=$request->all();

          //该商品的数量 
          $carg_num=$data['num'];

          // 查出用户的u_id
          $value = $request->session()->get('u_account');
          $values=DB::table('user')->where('u_account','=',$value)->first();
          $u_id=$values->u_id;

          // 商品的属性值
          $g_nature=$data['a'];

          // 判断该商品有几个属性,1走if，2走else
          if($g_nature==1){

               // 判断该属性是图片还是文字，1是图片，0是文字
               if($data['dd']==1){

               // 商品的图片
               $g_pic=$data['pp'];

               // 商品详情表里面商品的id
               $gd_id=$data['aa'];

            // 商品的详细信息和基本信息
           $gd=DB::table('goodsdetail')->where('gd_id',$gd_id)->first();
           $goods=DB::table('goods')->where('g_id',$gd->g_id)->first();
//                jiaojiantianjia
            $lltime = DB::table('limited')->where('l_id','=',$goods->g_yhid)->first();
//                jiaojiantianjia
           // 先判断该商品是否购物车已存在,如果存在则更新数量,否则将该商品信息插入购物车表
           $res=DB::table('car')->where(['u_id'=>$u_id,'gd_id'=>$gd_id])
           ->first();

              if($res!=''){

                   // 计算出更新完后商品的数量
                   $carg_num=$carg_num+$res->carg_num;
                   $car=DB::table('car')->where(['u_id'=>$u_id,'gd_id'=>$gd_id])
                   ->update(['carg_num'=>$carg_num]);

              }else{
               
                  // 将该商品的信息放入数据库(购物车表)
                  $car=DB::table('car')
                      ->insert(['g_coupon'=>$goods->g_coupon,
   'gc_id'=>$goods->gc_id,'gc_pid'=>$goods->gc_pid,'g_name'=>$goods->g_name,'u_id'=>$u_id,'g_id'=>$gd->g_id,'carg_num'=>$carg_num,'g_pic'=>$g_pic,'g_price'=>$goods->g_price,'gd_id'=>$gd_id,'gd_nature'=>$gd->gd_nature,'g_nature'=>$g_nature]);
              }

//            jiaojiantianjia
            if($lltime=='') {
                // 将该商品的图片，名称，属性，价格，商品id，商品详情信息的id压入数组
                $arr = ['g_pic' => $g_pic, 'g_name' => $goods->g_name, 'gd_nature' => $gd->gd_nature, 'g_price' => $goods->g_price, 'gd_id' => $gd_id, 'g_id' => $gd->g_id, 'res' => $res, 'carg_num' => $carg_num];
            }elseif($lltime->l_ctime<time()&&$lltime->l_ltime>=time()) {
                $arr = ['g_pic' => $g_pic, 'g_name' => $goods->g_name, 'gd_nature' => $gd->gd_nature, 'g_price' => $goods->g_coupon, 'gd_id' => $gd_id, 'g_id' => $gd->g_id, 'res' => $res, 'carg_num' => $carg_num];
            }else{
                   $arr=['g_pic'=>$g_pic,'g_name'=>$goods->g_name,'gd_nature'=>$gd->gd_nature,'g_price'=>$goods->g_price,'gd_id'=>$gd_id,'g_id'=>$gd->g_id,'res'=>$res,'carg_num'=>$carg_num];
            }
//                jiaojiantianjia

           // 返回json格式
           echo json_encode($arr); 
            }else{

                   // 商品详情表里面商品的id(gd_id)
                   $gd_id=$data['aa'];

                   // 商品的详细信息和基本信息
                  $gd=DB::table('goodsdetail')->where('gd_id',$gd_id)->first();
                  $goods=DB::table('goods')->where('g_id',$gd->g_id)->first();
                  $lltime = DB::table('limited')->where('l_id','=',$goods->g_yhid)->first();
                  // 商品的第一张大图
                  $g_pic=explode(',',$goods->g_pic)[0];

                  // 先判断该商品是否购物车已存在,如果存在则更新数量,否则将该商品信息插入购物车表
                  $res=DB::table('car')->where(['u_id'=>$u_id,'gd_id'=>$gd_id])
                  ->first();

                  if($res!=''){

                   // 计算出更新完后商品的数量
                   $carg_num=$carg_num+$res->carg_num;
                   $car=DB::table('car')->where(['u_id'=>$u_id,'gd_id'=>$gd_id])
                   ->update(['carg_num'=>$carg_num]);
                  }else{
                   
                      // 将该商品的信息放入数据库(购物车表)
                      $car=DB::table('car')
                          ->insert(['g_coupon'=>$goods->g_coupon,
   'gc_id'=>$goods->gc_id,'gc_pid'=>$goods->gc_pid,'g_name'=>$goods->g_name,'u_id'=>$u_id,'g_id'=>$gd->g_id,'carg_num'=>$carg_num,'g_pic'=>$g_pic,'g_price'=>$goods->g_price,'gd_id'=>$gd_id,'gd_nature'=>$gd->gd_nature,'g_nature'=>$g_nature]);
                  }

 //            jiaojiantianjia
             if($lltime=='') {
                 // 将该商品的图片，名称，属性，价格，商品id，商品详情信息的id压入数组
                 $arr = ['g_pic' => $g_pic, 'g_name' => $goods->g_name, 'gd_nature' => $gd->gd_nature, 'g_price' => $goods->g_price, 'gd_id' => $gd_id, 'g_id' => $gd->g_id, 'res' => $res, 'carg_num' => $carg_num];
             }elseif($lltime->l_ctime<time()&&$lltime->l_ltime>=time()) {
                 $arr = ['g_pic' => $g_pic, 'g_name' => $goods->g_name, 'gd_nature' => $gd->gd_nature, 'g_price' => $goods->g_coupon, 'gd_id' => $gd_id, 'g_id' => $gd->g_id, 'res' => $res, 'carg_num' => $carg_num];
             }else{
                    $arr=['g_pic'=>$g_pic,'g_name'=>$goods->g_name,'gd_nature'=>$gd->gd_nature,'g_price'=>$goods->g_price,'gd_id'=>$gd_id,'g_id'=>$gd->g_id,'res'=>$res,'carg_num'=>$carg_num];
             }
 //                jiaojiantianjia

            // 返回json格式
            echo json_encode($arr); 
               }
          }else{
               //该商品有两个属性(颜色和尺码)
               // 选中商品的图片
               $g_pic=$data['pp'];

               // 选中商品的颜色
               $gd_color=$data['dd'];

               // 选中商品的尺码
               $gd_size=$data['ee'];
               // 选中商品的id(g_id)
               $g_id=$data['bb'];
               
            // 获取选中商品详情的id(gd_id);
            $gdid=DB::table('goodsdetail')
                ->where('g_id',$g_id)
                ->where('gd_color','=',$gd_color)
                ->where('gd_size','=',$gd_size)
                ->first();
            $gd_id=$gdid->gd_id;
           // 商品的详细信息和基本信息
           $gd=DB::table('goodsdetail')->where('gd_id',$gd_id)->first();
            // 查询出商品的基本信息
            $goods=DB::table('goods')->where('g_id',$g_id)->first();
           //                jiaojiantianjia
           $lltime = DB::table('limited')->where('l_id','=',$goods->g_yhid)->first();
                //                jiaojiantianjia
            // 先判断该商品是否购物车已存在,如果存在则更新数量,否则将该商品信息插入购物车表
            $res=DB::table('car')->where(['u_id'=>$u_id,'gd_id'=>$gd_id])
            ->first();

            if($res!=''){

             // 计算出更新完后商品的数量
             $carg_num=$carg_num+$res->carg_num;
             $car=DB::table('car')->where(['u_id'=>$u_id,'gd_id'=>$gd_id])
             ->update(['carg_num'=>$carg_num]);
            }else{
             
                // 将该商品的信息放入数据库(购物车表)
                $car=DB::table('car')->insert(['g_coupon'=>$goods->g_coupon,'gc_id'=>$goods->gc_id,'gc_pid'=>$goods->gc_pid,'g_name'=>$goods->g_name,'u_id'=>$u_id,'gd_id'=>$gd_id,'carg_num'=>$carg_num,'g_pic'=>$g_pic,'g_price'=>$goods->g_price,'g_id'=>$g_id,'gd_color'=>$gd_color,'gd_size'=>$gd_size,'g_nature'=>$g_nature]);
            }

            if($lltime=='') {
                // 将该商品的图片，名称，属性，价格，商品id，商品详情信息的id压入数组
                $arr = ['g_pic' => $g_pic, 'g_name' => $goods->g_name, 'gd_nature' => $gd->gd_nature, 'g_price' => $goods->g_price, 'gd_id' => $gd_id, 'g_id' => $gd->g_id, 'res' => $res, 'carg_num' => $carg_num];
            }elseif($lltime->l_ctime<time()&&$lltime->l_ltime>=time()) {
                $arr = ['g_pic' => $g_pic, 'g_name' => $goods->g_name, 'gd_nature' => $gd->gd_nature, 'g_price' => $goods->g_coupon, 'gd_id' => $gd_id, 'g_id' => $gd->g_id, 'res' => $res, 'carg_num' => $carg_num];
            }else{
                $arr=['g_pic'=>$g_pic,'g_name'=>$goods->g_name,'gd_nature'=>$gd->gd_nature,'g_price'=>$goods->g_price,'gd_id'=>$gd_id,'g_id'=>$gd->g_id,'res'=>$res,'carg_num'=>$carg_num];
            }
            
            // 返回json格式
            echo json_encode($arr);
		}
       }
    /**
     * 3：点击删除点击的购物车里面的商品；（ajax）
     *
     * 将该商品的图片，名称，属性，价格，商品id，商品详情信息的id压入数组，返回json格式
     */
    public function postDelgoods(Request $request)
    {
        // 获取要删除的商品的详情gd_id
        $gdid=$request->input('gdid');

        // 执行删除
        $res=DB::table('car')->where('gd_id','=',$gdid)->delete();
        echo $res;
    }

    /**
     * 4：将未收藏的商品变为收藏，并修改数据库
     *      将收藏的商品取消收藏，并修改数据库
     * 
     */
    public function postCollection(Request $request)
    {
       $gid=$request->input('gid');

       // 查出用户的u_id
       $value = $request->session()->get('u_account');
       $values=DB::table('user')->where('u_account','=',$value)->first();
       $u_id=$values->u_id;

       // 先查询该用户和该商品是否在收藏表里
       $res=DB::table('favorites')->where(['g_id'=>$gid,'u_id'=>$u_id])->first();

       if($res!=null){

            // 该商品已被收藏，现在执行取消收藏
            // 将收藏的商品从数据库中删掉
            $res=DB::table('favorites')->where(['u_id'=>$u_id,'g_id'=>$gid])->delete();

            // 修改数据库(商品表)将收藏人数(g_fid)减一
            $data=DB::table('goods')->where('g_id',$gid)->first();
            $num=$data->g_fid-1;
            DB::table('goods')->where('g_id',$gid)->update(['g_fid'=>$num]);
            echo 1;

       }else{

            // 该商品未被收藏，现在执行添加收藏
            $res=DB::table('favorites')->insert(['g_id'=>$gid,'u_id'=>$u_id]);

            // 修改数据库(商品表)将收藏人数(g_fid)加一
            $data=DB::table('goods')->where('g_id',$gid)->first();
            $num=$data->g_fid+1;
            DB::table('goods')->where('g_id',$gid)->update(['g_fid'=>$num]);
            echo 0;
       }
    }

    /**
     * 5:点击颜色图片时发送的ajax(阴影效果)
     *
     * 
     */
    public function postTwoyin(Request $request)
    {
        $gid=$request->input('gid');
        $color=$request->input('color');

        // 查询出该商品该颜色所有的商品
        $res=DB::table('goodsdetail')->where(['g_id'=>$gid,'gd_color'=>$color])->get();

        // 遍历查询该商品各个属性的库存量
        $arr=[];
        foreach($res as $k=>$v){

            // 该商品该属性所具有的库存量
            $a=$v->gd_num;
            if($a==0){
                $arr[]=$v->gd_id;
            }
        }
        
        // 返回json格式
        echo json_encode($arr);
    }

     /**
     * 6:点击尺码时发送的ajax(阴影效果)
     *
     * 
     */
     public function postTwoyint(Request $request)
    {
        $gid=$request->input('gid');
        $sizenum=$request->input('sizenum');

        // 查询出该商品该颜色所有的商品
        $res=DB::table('goodsdetail')->where(['g_id'=>$gid,'gd_size'=>$sizenum])->get();

        // 遍历查询该商品各个属性的库存量
        $arr=[];
        foreach($res as $k=>$v){

            // 该商品该属性所具有的库存量
            $a=$v->gd_num;
            if($a==0){
                $arr[]=$v->gd_id;
            }
        }
        
        // 返回json格式
        echo json_encode($arr);
    }

    //跳转到购物车页面
    public function getCart(Request $request)
    {
    	// 判断用户是否登录  如果未登录  则跳转到用户登录页面
        if(!session('u_account')){
            return view('home.login');
        }
        // 查出用户的u_id
        $value = session('u_account');
        $values = DB::table('user')->where('u_account', '=', $value)->first();
        $id = $values->u_id;

        // var_dump($request->id);
        // 猜你喜欢  从数据库取出四个商品  本应该是随机的  不知道谁写死了
        $xihuan = DB::table('goods')->select()->orderBy('g_id', 'desc')->take(4)->get();
        // $id = $request->id;
        $res = DB::table('car')->join('goods', 'car.g_id', '=', 'goods.g_id')->select()->where('u_id', $id)->get();
       
        // dd($res);
        // 判断是否查询到数据  
        if (!empty($res)){
            foreach ($res as $k => $v) {
                $ff[$k] = DB::table('limited')->where('l_id', '=', $v->g_yhid)->first();
            }
//            dd($ff);
            return view('home.cart',['res'=>$res,'xihuan'=>$xihuan,'ff'=>$ff]);
        }else{
            return view('home.cart',['res'=>$res,'xihuan'=>$xihuan]);
        }

    }

    // 购物车页面发送的ajax  在此接受   并实现商户购物车商品的功能
    public function postDelcar(Request $request){
        // dd($request->input('delid'));
        $id = $request->input('delid');
        //执行删除
        $res = DB::table('car')->where('car_id',$id)->delete();
        echo $res;
    }

    // 跳转到用户信息页面
    public function getUserinfo(Request $request){
        return view('home.userinfo');
    }

    // 人气推荐页
    public function getRenqi()	
    {
	 // 热销
        $rx = DB::table('goods')->orderBy('g_sellnum','desc')->take(20)->get();
        // 收藏
        $sc = DB::table('goods')->orderBy('g_fid','desc')->take(20)->get();

    	return view('home.renqi',['rx'=>$rx,'sc'=>$sc]);
    }

    // 搜索商品页面
    public function postSearch(Request $request)
    {
        // dd($request->input('search'));
        $sea = DB::table('goods')->where('g_name','like','%'.$request->input('search').'%')->get();
        if ($sea) {
           foreach ($sea as $k => $v) {
            $mak[$k] = DB::table('maker')->where('m_id','=',$v->m_id)->get();
           } 
           // dd($sea); sea查询到的商品 sear 传过来的模糊字 mak制造商
           return view('home.search',['sea'=>$sea,'sear'=>$request->input('search'),'mak'=>$mak]);
        }else{
           return view('home.search',['sea'=>$sea,'sear'=>$request->input('search')]);

        }
        
        // dd($mak);
        
    	
    }

    /**
     * 将当前登录用户的购物车信息传递到主页(开始)
     *
     * 
     */
    public static function test()
    {

        // 先判断用户是否登录
        if(session('u_account')){
           $count=0;
           $number=0;

        // 查出用户的u_id
           $value = session('u_account');
           $values=DB::table('user')->where('u_account','=',$value)->first();
           $u_id=$values->u_id;

        // 查询出该用户的购物车商品
           $car=DB::table('car')->where('u_id','=',$u_id)->get();
            
        // 计算出购物车的总价格
        // 得到购物车里面总的商品数
           foreach($car as $k=>$v)
           {
                $num=$v->carg_num;
                $number+=$num;
                $price=$v->g_price;
                $count+=$num*$price;
           }

           return view('home.layout.header',['car'=>$car,'count'=>$count,'number'=>$number]);
        }else{
             return view('home.layout.header');
         }
           
    }
    /**
     * 将当前登录用户的购物车信息传递到主页(结束)
     *
     * 
     */

    // 跳转到制造商详情页面
    public function getBranddetails(Request $request){
        // var_dump($request->input());
        $id = $request->input('id');
        // 在数据库中随机取4个值
        $sui = DB::table('goods')
            ->orderBy(\DB::raw('RAND()'))
            ->take(4)
            ->get();
        // var_dump($sui);
        $m = DB::table('maker')->where('m_id',$id)->first();
        // var_dump($m);
        $res = DB::table('goods')->where('m_id',$id)->get();
        // var_dump($res);
        return view('home.branddetails',['res'=>$res,'m'=>$m,'sui'=>$sui]);
    }

    // 跳转到订单页
    public function getDingdan(Request $request){

        //获取用户ID
        $g_id = $request->g_id;

        $gd_id = $request->gd_id;

        $goods = DB::table('goods')->where('g_id',$g_id)->first();
        $ltime = DB::table('limited')->where('l_id','=',$goods->g_yhid)->first();
//        dd($ltime);
        $class = DB::table('goodsdetail')->where('gd_id',$gd_id)->first();
        $num = $request->num;
        // dd($num);
        $name = session('u_account');
        // var_dump($name);
        $id = DB::table('user')->where('u_account',$name)->first()->u_id;
        // var_dump($id);
        $pid = DB::table('userdetail')->where('u_id',$id)->get();
        // dd($pid);
        if($pid){
        foreach ($pid as $key => $value) {
            $youhui[$key] = DB::table('coupon')->where('c_id',$value->c_id)->first();
        }
        // dd($youhui);
        // var_dump($youhui);
         $pdd = DB::table('address')->where('u_id',$id)->get();
         $moren = DB::table('address')->where('u_id',$id)->where('a_mo',1)->first();
         // dd($moren);

        return view('home.dingdan',['ltime'=>$ltime,'youhui'=>$youhui,'u_id'=>$id,'pdd'=>$pdd,'moren'=>$moren,'goods'=>$goods,'class'=>$class,'num'=>$num,'pid'=>$pid]);
    }else{
        $pdd = DB::table('address')->where('u_id',$id)->get();
         $moren = DB::table('address')->where('u_id',$id)->where('a_mo',1)->first();
         // dd($moren);
        return view('home.dingdan',['ltime'=>$ltime,'u_id'=>$id,'pdd'=>$pdd,'moren'=>$moren,'goods'=>$goods,'class'=>$class,'num'=>$num,'pid'=>$pid]);
        }
    }

    //执行订单页添加地址程序
    public function postDizhi(Request $request){
       //   $this->validate($request, [
       //    's_province' => 'required',
       //    's_city' => 'required',
       //    's_county' => 'required',
       //    'address' => 'required',
       //    'name' => 'required',
       //    'mobile' => 'required'
       // ],[
       //    's_province.required' => '省份必填',
       //    's_city.required' => '城市必填',
       //    's_county.required' => '市县级必填',
       //    'address.required' => '详细地址必填',
       //    'name.required' => '收货人必填',
       //    'mobile.required' => '手机号码必填'
       // ]);
          $res = $request->input();
          // var_dump($res['u_id']);
          // $tr = DB::table('address')->where('u_id',$res['u_id'])->update(['a_mo'=>0]);
          // var_dump($res);
          if(!empty($res['dft'])){
          $ass = DB::table('address')->insert([
            'u_id' => $res['u_id'],
            'a_name' => $res['name'],
            'a_phone' => $res['mobile'],
            'a_address' => $res['address'],
            'a_mo' => 1
        ]);
      }else{
            DB::table('address')->where('u_id',$res['u_id'])->update(['a_mo'=>0]);
            $ass = DB::table('address')->insert([
                'u_id' => $res['u_id'],
                'a_name' => $res['name'],
                'a_phone' => $res['mobile'],
                'a_address' => $res['address'],
            ]);
            // var_dump($ass);
            echo $ass;
      }



      // $pdd = DB::table('address')->where('u_id',$res['u_id'])->get();
      // // dd($pdd);


      //  //获取用户ID
      //   $name = session('u_account');
      //   // var_dump($name);
      //   $id = DB::table('user')->where('u_account',$name)->first()->u_id;
      //   // var_dump($id);
      //   $youhui = DB::table('coupon')->where('u_id',$id)->get();
      //    $moren = DB::table('address')->where('u_id',$id)->where('a_mo',1)->first();
      //   // var_dump($youhui);
      //   return view('home.dingdan',['youhui'=>$youhui,'u_id'=>$id,'pdd'=>$pdd]);
      // // return view('home.dingdan',['pdd'=>$pdd]);
       
    }

    public function postDingdan(Request $request){
        // var_dump($request->id);
        $name = session('u_account');
        // var_dump($name);
        $u_id = DB::table('user')->where('u_account',$name)->first()->u_id;
        $a_id = $request->id;

        DB::table('address')->where('u_id','=',$u_id)->update(['a_mo'=>0]);
        $res = DB::table('address')->where('a_id',$a_id)->update(['a_mo'=>1]);
        echo $res;
    }

    public function getCartbuy(Request $request){
        // return 22;
        if(!session('u_account')){
            return view('home.login');
        }
        $name = session('u_account');
        // var_dump($name);
        $id = DB::table('user')->where('u_account',$name)->first()->u_id;
        //优惠
        $pid = DB::table('userdetail')->where('u_id',$id)->get();

        if($pid){
        foreach ($pid as $key => $value) {
            $youhui[$key] = DB::table('coupon')->where('c_id',$value->c_id)->get();
        }

        $pdd = DB::table('address')->where('u_id',$id)->get();
        $moren = DB::table('address')->where('u_id',$id)->where('a_mo',1)->first();
        $car = DB::table('car')->join('goods','car.g_id','=','goods.g_id')->where('u_id',$id)->get();

        if(empty($car)){
            return view('home.cart');
        }
         foreach ($car as $k => $v) {
             $llltime[$k]= DB::table('limited')->where('l_id',$v->g_yhid)->first();
         }
        // var_dump($car);
        return view('home.cartbuy',['llltime'=>$llltime,'u_id'=>$id,'youhui'=>$youhui,'pdd'=>$pdd,'moren'=>$moren,'car'=>$car,'pid'=>$pid]);
    }else{
        $pdd = DB::table('address')->where('u_id',$id)->get();
        $moren = DB::table('address')->where('u_id',$id)->where('a_mo',1)->first();
        $car = DB::table('car')->join('goods','car.g_id','=','goods.g_id')->where('u_id',$id)->get();
        // dd($car);
        foreach ($car as $k => $v) {
             $llltime[$k]= DB::table('limited')->where('l_id',$v->g_yhid)->first();
         }
        // foreach ($car as $k => $v) {
        //     $car[$k]= DB::table('goods')->where('g_id',$v->g_id)->first();
        // }
         // dd($car);
        return view('home.cartbuy',['llltime'=>$llltime,'u_id'=>$id,'pdd'=>$pdd,'moren'=>$moren,'car'=>$car,'pid'=>$pid]);
    }
    }

    //跳转帮助
    public function getHelp(){
        return view('home.help');
    }

    //跳转到付款页
    public function postPay(Request $request){
        // dd($request->all());
        $name = session('u_account');
        // dd($request->yunfei);
        $u_id = DB::table('user')->where('u_account',$name)->first()->u_id;
        // dd($request->ud_id);
        $c_id = $request->ud_id;
        $o_zong = $request->price_shifu;
        $heji = $request->heji;
        // dd($c_id);
        if($o_zong >= 88){
            $o_freight = 0;
        }else{
            $o_freight = 10;
        }
        $icu = DB::table('order')->insertGetId(['u_id'=>$u_id,'c_id'=>$c_id,'o_zong'=>$o_zong,'o_status'=>0,'o_freight'=>$o_freight,'o_time'=>time(),'o_heji'=>$heji]);
        // dd($icu);

        $res = DB::table('car')->where('u_id',$u_id)->get();
        // dd($res);
        foreach ($res as $key => $value) {
            // var_dump($value);
            $orderdetail = DB::table('orderdetail')->insert(['g_id'=>$value->g_id,'od_num'=>$value->carg_num,'o_id'=>$icu,'gd_id'=>$value->gd_id]);
        }

        $list = DB::table('car')->where('u_id',$u_id)->delete();

        return redirect("/home/pay?icu=$icu&o_zong=$o_zong");
    }

    // 跳转到付款页
    public function getPay(Request $request){
        if(!session('u_account')){
            return view('home.login');
        }
        return view('home.pay',['icu'=>$request->icu,'o_zong'=>$request->o_zong]);
    }

    // 付款成功页
    public function postPaysuccess(Request $request){
        // dd($request->all());
        $method = $request->input('payMethod');
        $o_id = $request->input('cang');
        $res = DB::table('order')->where('o_id',$o_id)->update(['o_status'=>1,'o_payMethod'=>$method]);
        // dd($method);

        return redirect('/home/paysuccess');
    }

    // get方式跳转到付款成功页面
    public function getPaysuccess(){
        return view('home.paysuccess');
    }

    // 执行订单表的数据添加  并在成功后重定向到付款页
    public function postDingdans(Request $request){
        // dd($request->all());
        // return back();
        	// 得到用户的U_name
            $name = session('u_account');
            // dd($request->yunfei);
            $u_id = DB::table('user')->where('u_account',$name)->first()->u_id;
            // 获取从商品下单页所带过来的值
            $g_id = $request->input('g_id');
            $gd_id = $request->input('gd_id');
            $c_id = $request->input('c_id');
            $heji = $request->input('heji');
            $zong = $request->input('o_zong');
            $num = $request->input('o_num');
            // 判断该商品是否使用优惠券
            if($c_id){
                // DB::table('coupon')->where('c_id',$c_id)->delete();
                DB::table('userdetail')->where('u_id',$u_id)->where('c_id',$c_id)->delete();
            }
            // 判断商品总金额是否大于88   如果大于88则免运费
            if($heji >= 88){
                $yun = 0;
            }else{
                $yun = 10;
            }

            $o_id = DB::table('order')->insertGetId(['u_id'=>$u_id,'c_id'=>$c_id,'o_status'=>0,'o_zong'=>$zong,'o_heji'=>$heji,'o_freight'=>$yun,'o_time'=>time()]);

            $res = DB::table('orderdetail')->insert(['o_id'=>$o_id,'g_id'=>$g_id,'od_num'=>$num,'gd_id'=>$gd_id]);
            // 跳转到付款页
            return redirect("/home/pay?icu=$o_id&o_zong=$zong");
        }

    //活动页点击领取优惠券
    public function postHuodong(Request $request){
        // dd($request->all());
        $name = session('u_account');
        // dd($request->yunfei);
        $u_id = DB::table('user')->where('u_account',$name)->first()->u_id;
        // 查询用户所拥有的优惠卷
        $try = DB::table('userdetail')->where('u_id',$u_id)->where('c_id',$request->input('c_id'))->get();
        // dd($try);
        if(empty($try)){
        $res = DB::table('userdetail')->insertGetId(['u_id'=>$u_id,'c_id'=>$request->input('c_id')]);
        echo $res; 
    }else{
        echo 1;
    }
    }

    //新疆地区不发货
    public function getBufahuo(){
        return view('home.bufahuo');
    }
   

   //接受购物车商品数量的改变
    public function postCartchange(Request $request){
        // dd($request->all());
        $name = session('u_account');
        // dd($request->yunfei);
        $u_id = DB::table('user')->where('u_account',$name)->first()->u_id;
        $res = DB::table('car')->where('u_id',$u_id)->where('g_id',$request->input('g_id'))->where('gd_id',$request->input('gd_id'))->update(['carg_num'=>$request->input('num')]);
        // dd($res);
    }

 
}



