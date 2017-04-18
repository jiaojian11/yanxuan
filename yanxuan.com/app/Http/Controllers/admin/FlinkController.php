<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FlinkController extends Controller
{
   public function getIndex(Request $request)
   {
        //每页显示几条
        $num = $request->input('num',3);

        //判断是否搜索
        if($request->input('uname')){
            $data = DB::table('friendlink')
             ->where('fl_name','like','%'.$request->input('uname').'%')
             ->paginate($num); 
        }else{
            //查询用户数据
            $data = DB::table('friendlink')->paginate($num);   
        }

        //获取所有参数
        $all = $request->all();

        return view('admin/flink/flinklist',['data'=>$data,'all'=>$all]);
   }

   //友情链接修改
   public function getUpdate(Request $request)
   {
        //获取提交的数据
        $id = $request->input('id');
        //获取要修改的数据
        $data = DB::table('friendlink')->where('fl_id',$id)->first();

        return view('admin/flink/update',['data'=>$data]);
   }

   //执行友情链接修改
   public function postDoupdate(Request $request)
   {
        //获取提交的数据
        $data = $request->except(['_token']);

        //调用方法进行头像上传
        $data['fl_pic'] = $this->upload($request);


        $this->validate($request, [
              'fl_name' => 'required',
              'fl_link' => 'required',

          ],[
              'fl_name.required'=>'友情链接名称不能为空!',
              'fl_link.required'=>'链接地址不能为空!',
          ]);

        if($data['fl_pic']==false){
            return back()->with('error','上传图片格式不正确!');
        } 

        if($data['fl_pic']==1){
            
            $res = DB::table('friendlink')->where('fl_id',$data['fl_id'])->update(['fl_name'=>$data['fl_name'],'fl_link'=>$data['fl_link']]);   
            
            //跳转到列表页
            if($res){
                return redirect('admin/flink/index');
            }else{
                return back()->withInput();
            }


        }else{

            $res = DB::table('friendlink')->where('fl_id',$data['fl_id'])->update(['fl_name'=>$data['fl_name'],'fl_link'=>$data['fl_link'],'fl_pic'=>$data['fl_pic']]);   
          
            //跳转到列表页
            if($res){
                return redirect('admin/flink/index');
            }else{
                return back()->withInput();
            }
        } 










    
                    
                   
   }



   //友情链接删除
   public function getDelete(Request $request)
   {
        //获取提交的数据
        $id = $request->input('id');
        //删除数据
        $res = DB::table('friendlink')->where('fl_id',$id)->delete();
        if($res){
            return redirect('admin/flink/index')->with('sucesss','友情链接删除成功');
        }else{
            return redirect('admin/flink/index')->with('errors','友情链接删除失败');
        }


   }

   //友情链接添加
   public function getAdd()
   {
        //显示管理员添加表单
        return view('admin/flink/add');
   }

   //执行友情链接添加
   public function postInsert(Request $request)
   {
        //接收提交的数据
        $data = $request->except(['_token']);

        //调用方法进行头像上传
        $data['fl_pic'] = $this->upload($request);
        
    
            //对提交的数据进行验证
            $this->validate($request, [
                    'fl_name' => 'required|unique:friendlink',
                    'fl_link' => 'required',
                    'fl_pic' => 'required',

                ],[
                    'fl_name.required'=>'友情链接名称不能为空!',
                    'fl_name.unique'=>'友情链接名称已存在!',
                    'fl_link.required'=>'链接地址不能为空!',
                    'fl_pic.required'=>'链接图像不能为空!',
                ]);

            if($data['fl_pic']==false){
                return back()->with('error','上传图片格式不正确!');
            }    
            
        
            //插入数据库并返回id
            $res = DB::table('friendlink')->insertGetId($data);
            //跳转到列表页
            if($res){
                return redirect('admin/flink/index');
            }else{
                return back()->withInput();
            }
   }

   //头像上传
   public function upload($request)
   {
        //判断是否有文件上传
        if($request->hasFile('fl_pic'))
        {
            //随机文件名
            $name = md5(time()+rand(1000,9999));
            //获取文件的后缀名
            $suffix = $request->file('fl_pic')->getClientOriginalExtension();
            $arr = ['png','jpg','jpeg','gif'];
            if(!in_array($suffix,$arr)){

                return false;
            }

            $request->file('fl_pic')->move('./adminCSS/flinkpic/', $name.'.'.$suffix);
            //返回路径信息
            return '/flinkpic/'.$name.'.'.$suffix;
        }else{
            return 1;
        }
   }










}
?>