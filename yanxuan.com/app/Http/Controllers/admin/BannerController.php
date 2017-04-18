<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BannerController extends Controller
{
    // 列表页
    public function getIndex()
    {   
        // 找出所有的轮播图
            $data = DB::table('banner')->get();
            if($data){
                 foreach($data as $k=>$v)
                {
                    $arr[$k] = DB::table('goods')->where('g_id','=',$v->g_id)->select('g_name')->get();
                }
                
            // 找出所有以及分类
                $res = DB::table('goodsclass')->where('gc_pid','=',0)->get();
            // 返回数据
                // var_dump($arr);
                return view('admin.banner.banner',['data'=>$data,'res'=>$res,'arr'=>$arr]);
            }else{
                $res = DB::table('goodsclass')->where('gc_pid','=',0)->get();
                return view('admin.banner.banner',['data'=>$data,'res'=>$res]);
            }
           
    }

    // 添加轮播
    public function postAdd(Request $request)
    {
        // dd($request->all());
        // 获取传来的数据
            $data = $request->except('_token');
        // 调用方法进行头像上传
            $data['ban_pic'] = $this->upload($request);
        // 对提交上的数据进行检测

            $this->validate($request,[
                'gc_id'=>'required',
                'g_id' =>'required',
                'ban_status' =>'required',
                'ban_pic' =>'required',
            ],[
                'gc_id.required'=>'商品ID不能为空!',
                'g_id.required'=>'商品ID不能为空!',
                'ban_status.required'=>'类别不能为空!',
                'ban_pic.required'=>'图像不能为空!',
            ]);
            // 判断是否为空
            if($data['ban_pic']==false)
            {   
                return back()->with('error','图片上传失败');
            }

            //插入数据库并返回id
            $res = DB::table('banner')->insertGetId($data);
            //跳转到列表页
            if($res){
                return redirect('/admin/banner');
            }else{
                return back()->withInput();
            }
    }

    // 设置图像上传
    public function upload($request)
    {
        
        // 判断是否有图片上传
            if($request->hasFile('ban_pic'))
            {
                $name = md5(rand(1000,999)+time());
                $suffix = $request->file('ban_pic')->getClientOriginalExtension();

                $arr = ['jpg','jpeg','png','gif'];
                if(!in_array($suffix,$arr))
                {
                    return false;
                }
                $request->file('ban_pic')->move('./adminCSS/bannerpic/', $name.'.'.$suffix);
                // 返回路径信息
                return '/bannerpic/'.$name.'.'.$suffix;
            }
    }

    // 根据一级菜单找图其中商品
    public function postChange(Request $request)
    {
        // 查出数据
            $data = DB::table('goods')->where('gc_pid','=',$request->input('id'))->get();
            // dd($data);
            if($data){
                echo json_encode($data);
            }
    }

    // 跳转修改页面
    public function getEdit(Request $request)
    {
        // 查出需要修改的轮播图的信息
            $data = DB::table('banner')
                ->where('ban_id','=',$request->input('ban_id'))
                ->first();
            $res = DB::table('goodsclass')->where('gc_id','=',$data->gc_id)->first();
            $res1 = DB::table('goods')->where('g_id','=',$data->g_id)->first();
        // 返回视图
            return view('admin.banner.banneredit',['data'=>$data,'res'=>$res,'res1'=>$res1]);
    }

    // 修改数据
    public function postUpdate(Request $request)
    {   
        // 获取数据
            $data = $request->except('_token');
        // 判断是否有图片
            if($request->hasFile('ban_pic'))
            {
                // 给图片加上随机名字
                    $name = md5(rand(1000,999)+time());
                // 取后缀名
                    $suffix = $request->file('ban_pic')->getClientOriginalExtension();
                // 定义限定上传文件类型
                    $arr = ['jpg','jpeg','png','gif'];
                // 如果不存在返回
                    if(!in_array($suffix,$arr))
                    {
                        return false;
                    }
                // 移动文件
                    $request->file('ban_pic')->move('./adminCSS/bannerpic/', $name.'.'.$suffix);
                // 返回路径信息
                    $data['ban_pic'] = '/bannerpic/'.$name.'.'.$suffix;
                // 修改信息
                    $data = DB::table('banner')->where('ban_id','=',$data['id'])->update(['ban_pic'=>$data['ban_pic']]);
                    if($data){
                        return redirect('admin/banner');
                    }
            }else{
            // 如果没图片返回上页面
                return back()->with('error','不能为空');
            }
    }

    // 删除轮播图
    public function getDel(Request $request)
    {
        // dd($request->all());
        $data = DB::table('banner')->where('ban_id','=',$request->input('sid'))->delete();
        if($data)
        {
            return redirect('admin/banner');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
