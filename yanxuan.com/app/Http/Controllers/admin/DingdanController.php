<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DingdanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // 从数据库查找数据   并分页
    public function postSoul(Request $request)
    {
        // var_dump($request->input('did'));
        $id = $request->input('did');
        if($id){
        $did = DB::table('order')->select()->where('o_id',$id)->paginate(20);
        // var_dump($did);
        return view('admin.dingdan.all',['res'=>$did]);
        }else{
            $res = DB::table('order')->select()->orderBy('o_id','desc')->paginate(20);
            return view('admin.dingdan.all',['res'=>$res]);
        }
    }

    //跳转到订单列表页
    public function getAll(){
        $res = DB::table('order')->select()->orderBy('o_id','desc')->paginate(20);
        return view('admin.dingdan.all',['res'=>$res]);
    }

    // 订单页的带付款页
    public function getDaifukuan(){
        $res = DB::table('order')->where('o_status',0)->paginate(20);
        // var_dump($res);
        return view('admin.dingdan.daifukuan',['res'=>$res]);
    }

    // 订单页的待发货页
    public function getFahuo(){
        $res = DB::table('order')->where('o_status',1)->paginate(20);
        // var_dump($res);
        return view('admin.dingdan.fahuo',['res'=>$res]);
    }

    // 订单页的已发货页
    public function getYifahuo(){
        $res = DB::table('order')->where('o_status',2)->paginate(20);
        // var_dump($res);
        return view('admin.dingdan.yifahuo',['res'=>$res]);
    }

    // 订单页的订单详情页
    public function getXiangqing(Request $request){
        // var_dump($request->input());
        $id = $request->input('id');
        $res = DB::table('order')->where('o_id',$id)->first();
        $users = DB::table('address')->where('a_mo',1)->first();
        $youhui = DB::table('coupon')->where('c_id',$res->c_id)->first();
        // dd($youhui);
        $xiangqing = DB::table('orderdetail')->where('o_id',$id)->get();
        foreach ($xiangqing as $key => $value) {
            $goods[$key] = DB::table('goods')->where('g_id',$value->g_id)->get();
            $ttp[$key] = DB::table('goodsdetail')->where('gd_id',$value->gd_id)->get();
        }
        // var_dump($res);

        return view('admin.dingdan.xiangqing',['res'=>$res,'users'=>$users,'youhui'=>$youhui,'xiangqing'=>$xiangqing,'goods'=>$goods,'ttp'=>$ttp]);
    }

    // 将带发货页的商品更改为已发货
    public function getTro(Request $request){
        // return 22;
        // var_dump($request->id);
        $o_id = $request->id;
        $res = DB::table('order')->where('o_id',$o_id)->update(['o_status'=>2]);
        if($res){
            return redirect('/admin/dingdan/fahuo');
        }
    }






    


    
}
