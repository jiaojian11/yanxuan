<?php

namespace App\Providers;

use View;

use DB;


use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // dd(session('u_account'));
        // dd(\Session::get('u_account'));
        $arr = [];
        $arrr = [];
        // 获取以及分类
            $data = DB::table('goodsclass')->where('gc_pid','=','0')->get();
        // 将二级分类压入一级分类
            foreach($data as $k=>$v)
            {
                
                $arr[] = $v;
                $arrr[$k] = DB::table('goodsclass')->where('gc_pid','=',$v->gc_id)->get();
               
            }
             View::share(['arr'=>$arr,'arrr'=>$arrr]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
