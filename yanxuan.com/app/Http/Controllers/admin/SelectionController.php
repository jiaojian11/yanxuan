<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;



class SelectionController extends Controller
{
    //后台反馈页
    public function getIndex(Request $request)
    {
    	
       //每页显示几条
        $num = $request->input('num',10);

        //判断是否搜索
        if($request->input('uname')){
            $selection = DB::table('selection')
             ->where('s_id','like','%'.$request->input('uname').'%')
             ->paginate($num); 
        }else{
            //查询用户数据
            $selection = DB::table('selection')->paginate($num);   
        }

        //获取所有参数
        $all = $request->all();

        return view('admin/selection/selection',['selection'=>$selection,'all'=>$all]);
    }

    public function getAaa()
    {
        dd(2);
    }
   

   public function getDel(Request $request)
   {
  
        $id = $request -> all();
        $res = DB::table('selection')->where('s_id','=',$id)->delete();
        if($res)
        {
            return redirect('admin/selection')->with('success','用户删除成功');
        }else{
            return back()->withInput()->with('error','用户删除失败');
        }
    }

    //修改
    public function getEdit(Request $request)
    {
        $id = $request ->all();
        //查询用户信息
       $res = DB::table('selection')->where('s_id','=',$id)->first();

        //解析模板 分配数据
        return view('admin/selection/edit',['selection'=>$res]);
    }

   //执行用户修改
    public function postUpdate(Request $request)
    {
         $date = $request->except('_token');

         $res = DB::table('selection')->where('s_id',$date['s_id'])->update($date);
         if($res)
         {
             return redirect('admin/selection/')->with('success','用户修改成功');
         }else{
             return back()->withInput()->with('error','用户修改失败');
         }
    }
}

