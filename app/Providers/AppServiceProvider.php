<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\Cateallproduct;
use App\Product;
use App\MCustomer;

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
        $id= MCustomer::get();
        $data['customer'] = MCustomer::find($id);
        $data['category']=Category::all();
        $data['productall'] = Product::paginate(10);
        $data['cateallproduct']=Cateallproduct::all();
        $data['listcate']=Cateallproduct::where('cateall_product',1)->get();
        $data['cateallphone']=Cateallproduct::where('cateall_product',1)->get();
        $data['catealllaptop']=Cateallproduct::where('cateall_product',2)->get();
        $data['catealltablet']=Cateallproduct::where('cateall_product',3)->take(5)->get();
        $data['catealltablet1']=Cateallproduct::where('cateall_product',3)->get();
        $data['cateallphukien']=Cateallproduct::where('cateall_product',4)->take(7)->get();
        $data['catelistphukien']=Cateallproduct::where('cateall_product',4)->get();
        $data['catelistwatch']=Cateallproduct::where('cateall_product',5)->get();
        view()->share($data);

    }
}
