<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Requests\admin\addclassRequest;
use App\Http\Requests\admin\editclassRequest;
use App\Http\Requests\admin\delclassRequest;
use App\Http\Requests\admin\twoclassRequest;
use App\Http\Requests\admin\gotwoRequest;
use App\Http\Requests\admin\addmakersRequest;
use App\Http\Requests\admin\addginforRequest;
class ProductController extends Controller
{	
    /**
     * 
     *一、以下为类别管理页面
     * 
     */

    /**
     * 1.1：显示分类页面
     *
     * 返回的是一级类别的信息
     */
    public function getAddclass(Request $request)
    {
        // 查询所有的一级类别
    	$cates = DB::table('goodsclass')->where('gc_pid',0)->get();
        return view('admin.product.addclass',['cates'=>$cates]);
    }

    /**
     * 1.2：显示分类页面(执行ajax)
     *
     * 返回的是一级类别的详细信息(json格式)(data3存放的是该一级类别下面所有的二级类别)
     */
    public function getAddclasss(Request $request)
    {
        // 获取所点击一级类别的id
    	$id=$request->input('id');
    	
        // 查询该一级类别的信息 类别名称 类别图片 类别id 类别的父id
    	$data=DB::table('goodsclass')->where('gc_id',$id)->first();

        // 查询该一级类别下面所有的二级类别
        $data2=DB::table('goodsclass')->where('gc_pid',$id)->get();

        // 将查询信息压入数组
    	$arr=['title'=>$data->gc_title,'id'=>$data->gc_id,'pid'=>$data->gc_pid,'pic'=>$data->gc_pic,'data3'=>$data2];
    	
        // 返回json格式
        echo json_encode($arr); 
    }

    /**
     * 1.3：执行修改一级菜单
     *
     * 返回的是执行修改一级后的提示信息
     */
    public function postUpdateclass(editclassRequest $request)
    {
    	$id=$request->input('gc_id');
    	$title=$request->input('gc_title');

        // 执行修改
    	$res = DB::table('goodsclass')->where('gc_id',$id)->update(['gc_title'=>$title]);
    	if($res)
        {
            return redirect('admin/product/addclass')->with('success','一级分类修改成功');
        }else{
            return back()->with('error','一级分类修改失败');
        }
    }

    /**
     * 1.4：执行删除一级菜单
     *
     * 先判断该一级分类下面是否有二级分类，如果有则不能删除，反之可以删除并返回删除成功的提示信息
     */
     public function postDelclass(delclassRequest $request)
    {
        $id = $request->input('gc_id');
        $pid=$request->input('gc_pid');

        // 查询该一级类别下面的所有二级类别
        $res=DB::table('goodsclass')->where('gc_pid',$id)->get();

        // 先判断该一级分类下面是否有二级分类，如果有则不能删除
        if(empty($res)){
            DB::table('goodsclass')->where('gc_id',$id)->delete();
            return redirect('/admin/product/addclass')->with('success','一级分类删除成功');
        }else{
            return redirect('/admin/product/addclass')->with('error','该一级分类包含二级类别');
        }  
    }

    /**
     * 1.5：添加一级类别到数据库
     *
     * 返回添加成功的提示信息
     */
    public function postInsert(addclassRequest $request)
    {
        $all=$request->except('_token');

        // 获取添加图片的路径
        $all['pic'] = self::uploads($request);

        // 执行添加一级类别
        DB::table('goodsclass')->insert(['gc_title'=>$all['title'],'gc_pic'=>$all['pic'],'gc_info'=>$all['info']]);
        return redirect('/admin/product/addclass')->with('success','一级分类添加成功');
    }

    /**
     *:1.6修改类别图片(一级二级)
     *
     * 修改成功则返回success，否则返回error
     */
    public function postUpocpic(Request $request)
    {
        // 接收传过来的参数，一级类id和新的图片
        $data=$request->except(['_token']);

        // 执行图片上传
        $data['pic'] = self::uploads($request);

        // 判断是否上传图片，若为空则返回error，不为空则判断是否修改成功
        if($data['pic']==null){
            return redirect('admin/product/addclass')->with('error','图片修改失败');
        }else{
            $res = DB::table('goodsclass')->where('gc_id',$data['mid'])->update(['gc_pic'=>$data['pic']]);
            if($res==1){
            return redirect('admin/product/addclass')->with('success','图片修改成功');
            }else{
                return redirect('admin/product/addclass')->with('error','图片修改失败');
            }
        }  
    }

    /**
     * 1.7：执行修改二级菜单
     *
     * 返回的是执行修改二级后的提示信息(1或者0)(ajax)
     */
    public function getUpdatetwo(Request $request)
    {
        $id = $request->all();
        $res = DB::table('goodsclass')->where('gc_id',$id['id'])->update(['gc_title'=>$id['title']]);
        echo $res;
    }

    /**
     * 1.8：执行删除二级菜单ajax
     *
     * 返回的是执行删除二级后的提示信息(1或者0)(ajax)
     */
    public function getDeleteclass(Request $request)
    {
        $id = $request->input('id');
        $res = DB::table('goodsclass')->where('gc_id',$id)->delete();
        echo $res;
    }
 
    /**
     * 1.9：执行修改二级菜单
     *
     * 返回的是执行修改二级后的提示信息(1或者0)(ajax)
     */
    public function getTwoclass(gotwoRequest $request)
    {
        $id=$request->input('id');
        $title=$request->input('title');
        return view('admin.product.twoclass',['id'=>$id,'title'=>$title]);
    }

    /**
     * 1.10：执行添加二级菜单
     *
     * 返回的是执行添加二级后提示信息
     */
    public function postInserttwo(twoclassRequest $request)
    {
        $data = $request->except(['_token']);

        // 获取添加二级图片的路径
        $datas['gc_pic'] = self::uploads($request);

        // 查询添加二级类别所属的一级类别信息
        $res = DB::table('goodsclass')->where('gc_id',$data['gc_pid'])->first();

        // 拼接所添加二级类别的路径
        $datas['gc_path'] = $res->gc_path.','.$data['gc_pid'];
        $datas['gc_title']=$data['gc_title'];
        $datas['gc_pid']=$data['gc_pid'];

        // 执行添加
        $res = DB::table('goodsclass')->insert($datas);
        return redirect('/admin/product/addclass')->with('success','二级类列别添加成功');

    }
    
    /**
     * 
     *二、以下为商品添加管理页面
     * 
     */
    
    /**
     * 2.1：显示商品添加页面
     *
     * 返回类别的信息(一级类)
     */
    public function getAddgoods(Request $request)
    {
        $title=DB::table('goodsclass')->where('gc_pid','0')->get();
        return view('admin.product.addgoods',['title'=>$title]);
    }

    /**
     * 2.2：二级联动的ajax
     *
     * 返回所选一级的所有二级类别(json格式)
     */
    public function getTwooption(Request $request)
    {
        $pid=$request->all();
        $data=DB::table('goodsclass')->where('gc_pid',$pid)->get();
        echo json_encode($data); 
    }

    /**
     * 2.3：根据用户所属性返回对应的值，以便显示不同的表格
     *
     * 返回0，表格全都隐藏，1显示四个一样的单属性表格，2显示2属性表格，让用户自动生成表格
     */
    public function getNature(Request $request)
    {
        $num=$request->all();
        if($num['num']==1){
            echo 1;
        }else if($num['num']==2){
            echo 2;
        }else{
            echo 0;
        }
    }

    /**
     * 2.4：执行商品的信息上传
     *
     * 
     */
    public function postAddgoodsinfo(addginforRequest $request)
    {

        $data = $request->except(['_token']);

        //调用方法进行商品图片上传(多图片)
        $pic= self::upload($request);

        // 将调用返回来的数组遍历，放入一个字符串
        $str='';
        foreach($pic as $k=>$v)
        {
           $str.=$v.',';
        }
        $str=rtrim($str,',');

        // 将字符串放入原先的数组
        $data['file'] =$str; 

        // 执行商品基本信息的添加，并获取商品的id
        $res=DB::table('goods')
        ->insertGetId(['gc_id'=>$data['id'],'gc_pid'=>$data['pid'],'g_name'=>$data['gname'],'g_num'=>$data['gnum'],'g_price'=>$data['gprice'],'m_id'=>$data['mid'],'g_intro'=>$data['gintro'],'g_details'=>$data['editorValue'],'g_pic'=>$data['file'],'g_ctime'=>time(),'g_nature'=>$data['gnature'],'g_naturename'=>$data['gnaturename']]);
        
        // 先判断属性再插入商品详情表
        if($data['gnature']==1){
            foreach ($data['gdnature'] as $k => $v) {
                foreach($data['gdnum'] as $k1=>$v1){
                    if($k==$k1){
                        if($v1!=0){
                            DB::table('goodsdetail')->insert(['g_id'=>$res,'gd_nature'=>$v,'gd_num'=>$v1]);  
                        }
                    }
                }
            }
            return redirect('/admin/product/addgoods')->with('success','商品添加成功');
        }else{
            foreach ($data['color'] as $k => $v) {
                foreach($data['size'] as $k1=>$v1){
                    foreach($data['num'] as $k2=>$v2){
                        if($k==$k1&&$k1==$k2){
                            DB::table('goodsdetail')->insert(['g_id'=>$res,'gd_color'=>$v,'gd_size'=>$v1,'gd_num'=>$v2]);
                        }
                    }
                }
            }
            return redirect('/admin/product/addgoods')->with('success','商品添加成功');
        }
    }
    
    /**
     * 
     *三、以下为制造商管理页面操作
     * 
     */
    
    /**
     * 3.1：显示制造商管理页面
     *
     * 返回的是制造商的信息
     */
    public function getAddmaker(Request $request)
    {
        // 先判断有没有提交搜索内容
        if($request->input('keyword')){
            $datas = DB::table('maker')
                ->where('m_name','like','%'.$request->input('keyword').'%')
                ->paginate(4);
        }else{
                // 每页显示几条数据，并把前四条查询出来
                $datas=DB::table('maker')->paginate(4);
        }
        
        //获取所有的请求参数
        $all = $request->all();
        return view('admin.product.addmaker',['all'=>$all,'datas'=>$datas]);
    }
    
    /**
     * 3.2：执行制造商添加
     *
     * 添加成功返回success，失败则回滚
     */
    public function postAddmakers(addmakersRequest $request)
    {
        // 获取提交的全部数据 制造商名称 制造商简介 制造商图片信息
        $data=$request->except(['_token']);
        $datas['m_name']=$data['m_name'];
        $datas['m_info']=$data['m_info'];

        //处理图片信息
        $datas['m_pic'] = self::uploads($request);

        // 执行添加
        $res=DB::table('maker')->insert($datas);

        // 判断是否执行成功，并返回相应信息
        if($res){
            return redirect('admin/product/addmaker')->with('success','制造商添加成功');
        }else{
            return back()->withInput();
        }
    }
     

    /**
     * 3.3：修改制造商信息，制造商名称，制造商简介
     *
     * 执行的是ajax，返回1或者0
     */
    public function getUpdatem(Request $request)
    {
        // 接收参数，制造商id 制造商名称 制造商简介
        $data=$request->all();

        // 执行修改
        $res=DB::table('maker')->where('m_id',$data['m_id'])->update(['m_name'=>$data['m_name'],'m_info'=>$data['m_info']]);
        echo $res;
    }

    /**
     *:3.4修改制造商图片
     *
     * 修改成功则返回success，否则返回error
     */
    public function postUpmpic(Request $request)
    {
        // 接收传过来的参数，制造商id和制造商新的图片
        $data=$request->except(['_token']);

        // 执行图片上传
        $data['pic'] = self::uploads($request);

        // 判断是否上传图片，若为空则返回error，不为空则判断是否修改成功
        if($data['pic']==null){
            return redirect('admin/product/addmaker')->with('error','制造商图片修改失败');
        }else{
            $res = DB::table('maker')->where('m_id',$data['mid'])->update(['m_pic'=>$data['pic']]);
            if($res==1){
            return redirect('admin/product/addmaker')->with('success','制造商图片修改成功');
            }else{
                return redirect('admin/product/addmaker')->with('error','制造商图片修改失败');
            }
        }  
    }

    /**
     * 3.5：删除制造商
     *
     * 删除成功则返回success
     */
    public function getDelmaker(Request $request)
    {
        // 接收要删除制造商的id
        $id=$request->input('id');

        // 执行删除
        DB::table('maker')->where('m_id',$id)->delete();

        // 返回删除信息
        return redirect('admin/product/addmaker')->with('success','制造商删除成功');  
    }

    /**
     * 四：以下为商品管理页面操作
     *
     * 
     */

    /**
     * 4.1：显示商品管理页面
     *
     * 返回的是商品的信息
     */
    public function getSeegoods(Request $request)
    {
        // 先判断有没有提交搜索内容
        if($request->input('keyword')){

            // 查询出全部数据(全部商品)
            $data=DB::table('goods')
                ->where('g_name','like','%'.$request->input('keyword').'%')
                ->paginate(4);
        }else{
                // 每页显示几条数据，并把前四条查询出来
                $data=DB::table('goods')->paginate(4);
        }

        // 遍历商品数据得到商品的属性，并压入数组(将同一个商品details的所有信息压入同一个数组)
        foreach($data as $k=>$v){
            $data1[]=DB::table('goodsdetail')->where('g_id',$v->g_id)->get();
        }//dd($data1);

        // 查询所有的一级类别
        $title=DB::table('goodsclass')->where('gc_pid','0')->get();

        //获取所有的请求参数(搜索用,显示二级商品时，如果不带全部商品里面的搜索出错)
        $all = $request->all();
        return view('admin.product.seegoods',['data'=>$data,'data1'=>$data1,'title'=>$title,'all'=>$all]);
    }

    /**
     * 4.2：管理商品上架下架
     *
     * 下架返回1，上架返回0
     */
    public function getStatus(Request $request)
    {
        $data=$request->all();

        // 查询点击的当前商品的状态
        $res=DB::table('goods')->where('g_id',$data['gid'])->get();

        // 将数据库里面的状态取反
        if($res[0]->g_status==1){
            $res=DB::table('goods')->where('g_id',$data['gid'])->update(['g_status'=>0]);
            $res1=1;
        }else{
            $res=DB::table('goods')->where('g_id',$data['gid'])->update(['g_status'=>1]);
            $res1=0;
        }
        echo $res1;
    }

    /**
     * 4.3：挑选二级类下面的商品(二级下拉框触发的事件)
     *
     * 返回该二级类下面的所有商品。$all必须带回
     */
    public function getErgoods(Request $request)
    {
        $data=$request->all();
        // 每页显示几条数据，并把前四条查询出来
        $data=DB::table('goods')->where('gc_id',$data['gcid'])->paginate(4);

        // 遍历商品数据得到商品的属性，并压入数组(将同一个商品details的所有信息压入同一个数组)
        foreach($data as $k=>$v){
            $data1[]=DB::table('goodsdetail')->where('g_id',$v->g_id)->get();
        }//dd($data1);

        // 查询所有的一级类别
        $title=DB::table('goodsclass')->where('gc_pid','0')->get();

        //获取所有的请求参数(搜索用)
        $all = $request->all();
        return view('admin.product.seegoods',['data'=>$data,'data1'=>$data1,'title'=>$title,'all'=>$all]);
    }

    /**
     * 四：共用方法：处理单文件上传
     *
     * 返回上传图片的路径，返回给调用它的方法
     */
    static public function uploads($request)
    {
        //判断是否有文件上传
        if($request->hasFile('pic')){

            //随机文件名
            $name = md5(time()+rand(1,999999));

            //获取文件的后缀名
            $suffix = $request->file('pic')->getClientOriginalExtension();

            // 规定可以上传图片的类型
            $arr = ['png','jpeg','gif','jpg'];
            if(!in_array($suffix,$arr)){
                return back()->with('error','上传文件格式不正确');
            }

            // 执行文件上传
            $request->file('pic')->move('./uploads/', $name.'.'.$suffix);

            //返回路径
            return '/uploads/'.$name.'.'.$suffix;
        }
    }

    /**
     * 五：共用方法：处理多文件上传
     *
     * 返回的是一个数组，里面是一个个路径
     */
    static public function upload($request)
    {
        //判断是否有文件上传
        if($request->hasFile('file')){
            
            //遍历上传的多张图片
            foreach($request['file'] as $k=>$v){

                //随机文件名
                $name = md5(time()+rand(1,999999));
                
                //获取文件的后缀名
                $suffix = $v->getClientOriginalExtension();
                $arr = ['png','jpeg','gif','jpg'];
                if(!in_array($suffix,$arr)){
                    return back()->with('error','上传文件格式不正确');
                }
               $v->move('./uploads/', $name.'.'.$suffix);

                // 将一个个路径压入数组
               $path[]='/uploads/'.$name.'.'.$suffix;
            }

            //返回路径(一个数组)
            return $path;
        }  
    }

}