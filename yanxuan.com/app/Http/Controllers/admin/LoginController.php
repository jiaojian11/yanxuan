<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Hash;

class LoginController extends Controller
{
    // 登录
    public function login()
    {
        // echo '111';
        return view('admin.login.login');
    }

    // 执行登录
    public function dologin(Request $request)
    {
        // 根据用户名获取密码
        $data = DB::table('administrator')->where('ad_account', '=', $request->input('username'))->first();//         dd($data->ad_account);
        // 判断是否为空
       
            // Hash::check($u_pass,$res->u_pass)

        if ($data != '') {
            // 判断用户密码是否与数据库一致
            // if ($request->input('password') == $data->ad_pass) {
            if(Hash::check($request->input('password'),$data->ad_pass)){  

                if($data->ad_status==0){
                    return back()->with('error', '账户已禁用');
                }else{

                    // 存储session
                    session(['data' => $data]);

                    return redirect('admin/index');
                }

               
            } else {
                return back()->with('error', '账户名或密码不正确');
            }
        } else {
            return back()->with('error', '账户名或密码不能为空');
        }
    }
    // 退出登录
    public function getLogout()
    {
        // 获取退出事件
        $time = time();
        // 获取session
        $sess = session('data');
        // dd($sess);
        // 修改最后登录时间
        DB::table('administrator')->where('ad_id','=',$sess->ad_id)->update(['ad_lastLogin'=>$time]);
        // 删除session
        session()->forget('data');
        // 退出登录
        return view('admin.login.login');
    }

}