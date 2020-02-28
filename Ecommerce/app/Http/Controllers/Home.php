<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use Illuminate\Support\Facades\DB;

class Home extends Controller
{
    function login()
    {
        return view('Admin.AdminMenu');
    }
    function show(Request $request)
    {
       $product=DB::table('tblproducts')->where('id',$request['id'])->get();
       return view('product_detail',compact('product'));
    }
    function index(Request $request)
    {
        $samsung=DB::table('tblproducts')->join('tblimage','tblproducts.imgID','=','tblimage.imgID')->where('tblproducts.isPost','1')->where('tblproducts.type','samsung')->where('tblproducts.isDelete','')->get(['tblproducts.id','ram','storage','price','imgName','name']);
        $iphone=DB::table('tblproducts')->join('tblimage','tblproducts.imgID','=','tblimage.imgID')->where('tblproducts.isPost','1')->where('tblproducts.type','iphone')->where('tblproducts.isDelete','')->get(['tblproducts.id','ram','storage','price','imgName','name']);
        $oppo=DB::table('tblproducts')->join('tblimage','tblproducts.imgID','=','tblimage.imgID')->where('tblproducts.isPost','1')->where('tblproducts.type','oppo')->where('tblproducts.isDelete','')->get(['tblproducts.id','ram','storage','price','imgName','name']);
        $huawei=DB::table('tblproducts')->join('tblimage','tblproducts.imgID','=','tblimage.imgID')->where('tblproducts.isPost','1')->where('tblproducts.type','huawei')->where('tblproducts.isDelete','')->get(['tblproducts.id','ram','storage','price','imgName','name']);
        $mobile=DB::table('tblproducts')->join('tblimage','tblproducts.imgID','=','tblimage.imgID')->where('tblproducts.isPost','1')->where('tblproducts.type','mobile')->where('tblproducts.isDelete','')->get(['tblproducts.id','ram','storage','price','imgName','name']);
        return view('Home',compact('samsung','iphone','oppo','huawei','mobile'));
    }
    function iphone(Request $request)
    {
        $iphone=DB::table('tblproducts')->join('tblimage','tblproducts.imgID','=','tblimage.imgID')->where('tblproducts.isPost','1')->where('tblproducts.type','iphone')->where('tblproducts.isDelete','')->get(['tblproducts.id','ram','storage','price','imgName','name']);
       return view('Iphone',compact('iphone'));   
    }
    function samsung(Request $request)
    {
        $samsung=DB::table('tblproducts')->join('tblimage','tblproducts.imgID','=','tblimage.imgID')->where('tblproducts.isPost','1')->where('tblproducts.type','samsung')->where('tblproducts.isDelete','')->get(['tblproducts.id','ram','storage','price','imgName','name']);
        return view('Samsung',compact('samsung'));
    }
    function huawie(Request $request)
    {
        $huawei=DB::table('tblproducts')->join('tblimage','tblproducts.imgID','=','tblimage.imgID')->where('tblproducts.isPost','1')->where('tblproducts.type','huawei')->where('tblproducts.isDelete','')->get(['tblproducts.id','ram','storage','price','imgName','name']);
        return view('Huawei',compact('huawei'));
    }
    function oppo(Request $request)
    {
        $oppo=DB::table('tblproducts')->join('tblimage','tblproducts.imgID','=','tblimage.imgID')->where('tblproducts.isPost','1')->where('tblproducts.type','oppo')->where('tblproducts.isDelete','')->get(['tblproducts.id','ram','storage','price','imgName','name']);
        return view('Oppo',compact('oppo'));
    }
    function mobile(Request $request)
    {
        $mobile=DB::table('tblproducts')->join('tblimage','tblproducts.imgID','=','tblimage.imgID')->where('tblproducts.isPost','1')->where('tblproducts.type','mobile')->where('tblproducts.isDelete','')->get(['tblproducts.id','ram','storage','price','imgName','name']);
        return view('mobile',compact('mobile'));
    }
}
