<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //用户列表
    public function getIndex(Request $request)
    {
        
        //每页显示几条
        $num = $request->input('num',3);

        //判断是否搜索
        if($request->input('uname')){
            $users = DB::table('user')
             ->where('u_account','like','%'.$request->input('uname').'%')
             ->paginate($num); 
        }else{
            //查询用户数据
            $users = DB::table('user')->paginate($num);   
        }

        //获取所有参数
        $all = $request->all();

        //解析模板并传递数据
        return view('admin/user/userlist',['users'=>$users,'all'=>$all]);

    }

    //用户权限修改
    public function getDisable(Request $request)
    {
        //接收数据
        $id = $request->input('id');

        //查询数据
        $disable = DB::table('user')->where('u_id',$id)->value('u_disable');
        
        //改变数值
        if($disable==1){
            $disable = 0;
        }else{
            $disable = 1;
        }

        //进行修改
        $res = DB::table('user')->where('u_id',$id)->update(['u_disable'=>$disable]);
        //判断是否修改成功
        if($res){
            return back()->withInput();
        }else{
            return back()->withInput();
        }

    }


    //用户积分管理
    public function getIntegral(Request $request)
    {
       //每页显示几条
       $nums = $request->input('nums',3);

       //判断是否搜索
       if($request->input('unames')){
           $users = DB::table('user')
            ->where('u_account','like','%'.$request->input('unames').'%')
            ->paginate($nums); 
       }else{
           //查询用户数据
           $users = DB::table('user')->paginate($nums);   
       }

       //获取所有参数
       $all = $request->all();

        return view('admin/user/integrallist',['users'=>$users,'all'=>$all]);
    }

    //用户地址信息
    public function getAddress(Request $request)
    {
        //接收数据
        $id = $request->input('id');

        //查询地址信息
        $data = DB::table('address')->where('u_id',$id)->get();
        //查询用户名
        $user = DB::table('user')->where('u_id',$id)->value('u_account');

        return view('admin/user/address',['data'=>$data,'user'=>$user]);
    }











}
?>