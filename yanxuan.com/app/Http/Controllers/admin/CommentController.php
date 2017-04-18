<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
   // 商品评论管理
    public function getComment(Request $request)
    {	
    	// 查询一级分类
        $heihei = DB::table('goodsclass')->where('gc_pid','=',0)->get();
        // 使用分页
        $abc = $request->all();

        // $data = $request->except('_token');
        // 判断有没有传值
        if($request->input('two')&&$request->input('sea')){
        	// 查询二级分类下的模糊查询所有商品
            $res = DB::table('goods')
            ->where('gc_id','=',$request->input('two'))
            ->where('g_name','like','%'.$request->input('sea').'%')
            ->paginate(10);
            // dd($res);
                return view('admin.comment.commentindex',['abc'=>$abc,'data'=>$heihei,'res'=>$res]);
        }else{
        	// 查询所有商品
            $res = DB::table('goods')->paginate(10);
            return view('admin.comment.commentindex',['abc'=>$abc,'data'=>$heihei,'res'=>$res]);
        }
       
    }
    //后台评论页
    public function getIndex(Request $request)
    {
        $a = ($request->input('id'));
        // dd($a);
        
        // dd($count);
        // 查询你点击来的商品
        $data = DB::table('goods')
        ->where('g_id','=',$request->input('id'))
        ->first();
       
        // 连表查询品论表和用户表
        $res = DB::table('comment')
        ->join('user','user.u_id','=','comment.u_id')
        ->select('user.*','comment.*')
        ->where('g_id','=',$request->input('id'))
        ->paginate(5);
        $count = DB::select("select count(*) as aaa from comment where g_id = $a");
        if($res[0]){
        	// 商品详情
        	foreach ($res as $k => $v) {
        	   $vie[$k] = DB::table('goodsdetail')
        	   ->join('goods','goods.g_id','=','goodsdetail.g_id')
        	   ->select('goods.g_nature','goodsdetail.*')
        	   ->where('gd_id','=',$v->gd_id)->first();
        	}
        // var_dump($vie);

        	// 返回视图
        	return view('admin.comment.comment',['data'=>$data,'res'=>$res,'vie'=>$vie,'count'=>$count]);
        }else{
        	return view('admin.comment.comment',['data'=>$data,'res'=>$res,'count'=>$count]);
        }
        
        
    } 

    public function postChange(Request $request)
    {
        // dd($request->all());
        // 查出数据
            $data = DB::table('goodsclass')->where('gc_pid','=',$request->input('id'))->get();
            // dd($data);
            if($data){
                echo json_encode($data);
            }
    }

    // 已弃用ajax 三级联动
    // public function postGoods(Request $request)
    // {   
    //     $aaa = $request->input('id');
    //     $res = DB::table('goods')->where('gc_id','=',$aaa)->get();
    //     if($res){
    //         echo json_encode($res);
    //     }
    // }

    // public function getComment()
    // {
    //     return view('admin.comment.comment');
    // }

     public function getDel(Request $request)

    {
    
         $id = $request -> all();
         $res = DB::table('comment')->where('co_id','=',$id)->delete();
         if($res)
         {
             return redirect('admin/comment')->with('success','用户删除成功');
         }else{
             return back()->withInput()->with('error','用户删除失败');
         }
     }

      //修改
     public function getEdit(Request $request)
     {
         $id = $request ->all();
         //查询用户信息
        $res = DB::table('comment')->where('co_id','=',$id)->first();

         //解析模板 分配数据
         return view('admin/comment/edit',['comment'=>$res]);
     }

    //执行用户修改
     public function postUpdate(Request $request)
     {
          $date = $request->except('_token');

          $res = DB::table('comment')->where('co_id',$date['co_id'])->update($date);
          if($res)
          {
              return redirect('admin/comment/')->with('success','用户修改成功');
          }else{
              return back()->withInput()->with('error','用户修改失败');
          }
     }

}