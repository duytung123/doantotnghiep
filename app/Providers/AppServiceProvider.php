<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\Cateallproduct;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $data['category']=Category::all();
        $data['cateallproduct']=Cateallproduct::all();
        $data['listcate']=Cateallproduct::where('cateall_product',1)->get();
        $data['cateallphone']=Cateallproduct::where('cateall_product',1)->get();
        $data['catealllaptop']=Cateallproduct::where('cateall_product',2)->get();
        $data['catealltablet']=Cateallproduct::all();
        $data['cateallphukien']=Cateallproduct::where('cateall_product',4)->get();
        view()->share($data);

    }
}
