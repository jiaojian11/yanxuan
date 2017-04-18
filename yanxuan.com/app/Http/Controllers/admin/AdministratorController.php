<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Hash;

class AdministratorController extends Controller
{
   	//管理员列表
    public function getIndex(Request $request)
    {
    	//每页显示几条
    	$num = $request->input('num',3);

    	//判断是否搜索
    	if($request->input('uname')){
    	    $administrator = DB::table('administrator')
    	     ->where('ad_account','like','%'.$request->input('uname').'%')
    	     ->paginate($num); 
    	}else{
    	    //查询用户数据
    	    $administrator = DB::table('administrator')->paginate($num);   
    	}

    	//获取所有参数
    	$all = $request->all();

        return view('admin/administrator/administratorlist',['administrator'=>$administrator,'all'=>$all]);
    }

    //管理员添加页面
    public function getAdd()
    {
    	//显示管理员添加表单
    	return view('admin/administrator/add');
    }

    //管理员执行添加页面
    public function postInsert(Request $request)
    {	

        //接收提交的数据
        $data = $request->except(['_token']);

        $data['ad_pass'] = Hash::make($data['ad_pass']);
        //调用方法进行头像上传
        $data['ad_pic'] = $this->upload($request);
        
            //对提交的数据进行验证
            $this->validate($request, [
                     'ad_account' => 'required|unique:administrator|max:255',
                     'ad_pass' => 'required',
                     'ad_nick' => 'required|unique:administrator|max:255',
                     'ad_pic' => 'required',
                 ],[
                     'ad_account.required'=>'管理员账户不能为空!',
                     'ad_account.unique'=>'管理员账户已存在!',
                     'ad_account.max'=>'管理员账户最多255个字符!',
                     'ad_pass.required'=>'密码不能为空!',
                     'ad_nick.required'=>'昵称不能为空!',
                     'ad_nick.unique'=>'昵称已存在!',
                     'ad_nick.max'=>'昵称最多255个字符!',
                     'ad_pic.required'=>'必须上传头像!',
                 ]);


            if($data['ad_pic']==false){
                return back()->with('error','上传图片格式不正确!');
            }    
            


            //获取创建时间
            $data['ad_mktime'] = time();
            //插入数据库并返回id
            $res = DB::table('administrator')->insertGetId($data);


            //跳转到列表页
            if($res){
                return redirect('admin/administrator/index');
            }else{
                return back()->withInput();
            }

    }

    //头像上传
    public function upload($request)
    {
    	//判断是否有文件上传
    	if($request->hasFile('ad_pic'))
    	{
    		//随机文件名
    		$name = md5(time()+rand(1000,9999));
    		//获取文件的后缀名
    		$suffix = $request->file('ad_pic')->getClientOriginalExtension();
    		$arr = ['png','jpg','jpeg','gif'];
    		if(!in_array($suffix,$arr)){
    			// return back()->with('error','文件格式不正确');
    			// dd(1);
    			return false;
    		}

    		$request->file('ad_pic')->move('./adminCSS/adminpic/', $name.'.'.$suffix);
    		//返回路径信息
    		return '/adminpic/'.$name.'.'.$suffix;
    	}
    }

    //管理员权限
    public function getDisable(Request $request)
    {
    	//接收数据
    	$id = $request->input('id');

    	//查询数据
    	$disable = DB::table('administrator')->where('ad_id',$id)->value('ad_status');
    	
    	//改变数值
    	if($disable==1){
    	    $disable = 0;
    	}else{
    	    $disable = 1;
    	}

    	//进行修改
    	$res = DB::table('administrator')->where('ad_id',$id)->update(['ad_status'=>$disable]);
    	//判断是否修改成功
    	if($res){
    	    return back()->withInput();
    	}else{
    	    return back()->withInput();
    	}
    }

}
?>