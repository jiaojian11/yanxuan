<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PromotionController extends Controller
{   
    // 跳转优惠规则
    public function getRules()
    {
        return view('admin.promotion.Promotion-rules');
    }

    // 创建活动
    public function getActive(Request $request)
    {
        // 获取创建活动的信息
        	$data = $request->except('check');
            // dd($data);
            $this->validate($request, [
                    'name' => 'required',
                    'ctime' => 'required',
                    'atime' => 'required',
                    'youhui' => 'required',
                ],[
                    'name.required'=>'优惠名不能为空!',
                    'ctime.required'=>'创建时间不能为空!',
                    'atime.required'=>'结束时间不能为空!',
                    'youhui.required'=>'优惠价格不能为空!',
                ]);
        // 将日期转换为时间戳
            $ctime = strtotime($data['ctime']);
        	$atime = strtotime($data['atime']);
        	// dd($ctime,$atime);
        // 添加入库
        	$res = DB::table('limited')->insert(['l_price'=>$data['youhui'],'l_name'=>$data['name'],'l_ctime'=>$ctime,'l_ltime'=>$atime]);
        // 如果成功
        	if($res){
            // 获取当前活动
                $fix = DB::table('limited')->where('l_ctime','=',$ctime)->first();
        	// 跳转添加商品页面
        		return view('admin.promotion.promotion-add',['fix'=>$fix]);
        	}else{
            // 如果失败,返回上一页面
        		return back();
        	}
    }

//    // 活动商品页面
    public function getActadd(Request $request)
    {
        // 返回添加商品视图
            $fix = DB::table('limited')->where('l_id','=',$request->input('lid'))->first();
        	return view('admin.promotion.promotion-add',['fix'=>$fix]);
    }

    // 搜索
    public function getSearch(Request $request)
    {   
            $a = $request->all();
            $fix = DB::table('limited')->where('l_id','=',$a['lid'])->first();
        // 如果搜索条件为空 返回页面
            if($request->input('uname')==' '){
                return back();
            }
        // 如果有条件，按照条件搜索
            $data = DB::table('goods')
                    ->where('g_name','like','%'.$request->input('uname').'%')
                    ->where('g_yhid','=',0)
                    ->paginate(8);
//        dd($data);
        // 返回视图
            return view('admin.promotion.promotion-add',['data'=>$data,'fix'=>$fix,'a'=>$a]);

    }

    // 添加商品进入优惠
    public function postAdd(Request $request)
    {   
    // 获取商品id
        $id = $request->input('id');
        $lid = $request->input('lid');

    // 将商品加入当前优惠活动
        $data = DB::table('goods')->where('g_id','=',$id)->update(['g_yhid'=>$lid]);

        if($data){
            echo $data;
        }else if($data==0){
        // 如果第二次点击,取消加入优惠,将其优惠id变为0
            $dda = DB::table('goods')->where('g_id','=',$id)->update(['g_yhid'=>0]);
            echo 0;
        }
    }

    // 查看商品页面
    public function getCheck(Request $request)
    {
        // 获取当前活动
            $fix = DB::table('limited')->where('l_id','=',$request->input('lid'))->first();
        // 获取当前活动商品
            $data = DB::table('goods')->where('g_yhid','=',$request->input('lid'))->get(); 
        // 返回视图
            return view('admin.promotion.promotion-check',['data'=>$data,'fix'=>$fix]);
    }

    // ajax取消加入优惠
    public function postQxiao(Request $request)
    {
        // 获取两个Id
            $id = $request->input('id');
            $lid = $request->input('lid');
        // 取消优惠
            $data = DB::table('goods')->where('g_id','=',$id)->update(['g_yhid'=>0]);
            if($data==1){
                echo $data;
            }else if($data==0){
            // 如果第二次点击,加入优惠,
                $dda = DB::table('goods')->where('g_id','=',$id)->update(['g_yhid'=>$lid]);
                echo 0;
            }
    }


    // 跳转到活动列表页
    public function getAlllist()
    {   
        // 获取当前所有的活动,每页最多两个,按照活动时间倒序
           $data = DB::table('limited')->orderBy('l_id', 'desc')->paginate(2);
        // 定义一个空数组
           $arr = [];
           foreach($data as $k=>$v)
           {
            // 获得所有的商品
                $arr[$k] = DB::table('goods')->where('g_yhid','=',$v->l_id)->get();
           }
        // 携带参数返回视图
            return view('admin.promotion.promotion-alllist',['data'=>$data,'arr'=>$arr]);
    }

    // 上架
    public function postDo(Request $request)
    {
        // 获取当前活动
            $yh = DB::table('limited')->where('l_id','=',$request->input('lid'))->first();
        // 让当前活动变为上架状态
            $data = DB::table('limited')->where('l_id','=',$request->input('lid'))->update(['l_shelves'=>1]);
        // 如果删除成功
            if($data){
            // 获取当前活动的所有商品
                $res = DB::table('goods')->where('g_yhid','=',$request->input('lid'))->get();
                foreach ($res as $k => $v) {
                // 更新商品的价格
                    $red = DB::table('goods')->where('g_id','=',$v->g_id)->update(['g_coupon'=>$v->g_price-$yh->l_price]);
                }
            // 返回
                echo $data;
            }else{
            // 返回
                echo $data;
            }
    }

    // 取消活动
    public function getDel(Request $request)
    {
        // 删除活动
            $data = DB::table('limited')->where('l_id','=',$request->input('lid'))->delete();
        // 如果删除成功
            if($data){
            // 获取当前活动的所有商品
                // $res = DB::table('goods')->where('g_yhid','=',$request->input('lid'))->get();
                // foreach($res as $k=>$v)
                // {
                // 恢复商品价格并且恢复其他活动可选状态
                    DB::table('goods')->where('g_yhid','=',$request->input('lid'))->update(['g_yhid'=>0,'g_coupon'=>0]);
                // }
            // 删除成功
                return back();
            }else{
            // 删除失败
                return back();
            }
    }
}