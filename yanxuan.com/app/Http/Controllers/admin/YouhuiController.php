<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class YouhuiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // 跳转到网站后台主页
    public function getIndex()
    {
        $res = DB::table('coupon')->paginate(15);
        // var_dump($res);
        return view('admin.youhui.index',['res'=>$res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // 跳转到优惠券添加页面
    public function getAdd(){
        return view('admin.youhui.add');
    }

    // 执行优惠券结束领取功能
    public function postDel(Request $request){
        // var_dump($request->input());
        $id = $request->input('id');
        // var_dump($id);
        $res = DB::table('coupon')->where('c_id',$id)->update(['c_status'=>0]);
        // var_dump($res);
        echo $res;
    }

    // 执行优惠券添加功能
    public function postAdds(Request $request){
      $this->validate($request, [
          'ctime' => 'required',
          'atime' => 'required',
          'c_name' => 'required',
          'jine' => 'required',
          'c_claim' => 'required'
       ],[
          'ctime.required' => '开始时间必填',
          'atime.required' => '结束时间必填',
          'c_name.required' => '优惠券名称必填',
          'c_claim.required' => '使用条件必填',
          'jine.required' => '优惠金额必填'
       ]);
        // var_dump($request->except('_token'));
        $com = $request->except('_token');
        $com['ctime'] = strtotime($com['ctime']);
        $com['atime'] = strtotime($com['atime']);
        // var_dump($com['ctime']);
        $res = DB::table('coupon')->insert(['c_name'=>$com['c_name'],'c_beginTime'=>$com['ctime'],'c_overTime'=>$com['atime'],'c_claim'=>$com['c_claim'],'c_money'=>$com['jine']]);
        // var_dump($res);
        if($res){
            return redirect('/admin/youhui/index');
        }
    }
}
