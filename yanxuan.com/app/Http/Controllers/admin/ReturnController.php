<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;



class ReturnController extends Controller
{
    //后台退货页
    public function getIndex(Request $request)
    {
    	
       //每页显示几条
        $num = $request->input('num',10);

        //判断是否搜索
        if($request->input('uname')){
            $return = DB::table('return')
             ->where('od_id','like','%'.$request->input('uname').'%')
             ->paginate($num); 
        }else{
            //查询用户数据
            $return = DB::table('return')->paginate($num);   
        }

        //获取所有参数
        $all = $request->all();

        return view('admin/return/return',['return'=>$return,'all'=>$all]);
    }

    public function getAaa()
    {
        dd(2);
    }
    public function getDel(Request $request)
    {
    
         $id = $request -> all();
         $res = DB::table('return')->where('r_id','=',$id)->delete();
         if($res)
         {
             return redirect('admin/return')->with('success','用户删除成功');
         }else{
             return back()->withInput()->with('error','用户删除失败');
         }
     }

     //修改
     public function getEdit(Request $request)
     {
         $id = $request ->all();
         //查询用户信息
        $res = DB::table('return')->where('r_id','=',$id)->first();

         //解析模板 分配数据
         return view('admin/return/edit',['return'=>$res]);
     }

    //执行用户修改
     public function postUpdate(Request $request)
     {
          $date = $request->except('_token');

          $res = DB::table('return')->where('r_id',$date['r_id'])->update($date);
          if($res)
          {
              return redirect('admin/return/')->with('success','用户修改成功');
          }else{
              return back()->withInput()->with('error','用户修改失败');
          }
     }
   
}
