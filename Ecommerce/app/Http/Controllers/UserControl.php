<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use App\user;
use App\image;
use App\product;
use DateTime;

class UserControl extends Controller
{
    function login(Request $request)
    {
        // $this->validate($request,[
        //     'email'=>'required|string|email|unique:users,email',
        //     'password'=>'required|min:6|confirmed',
        //  ]);
     $input=$request->input();
      if(Auth::attempt(['email'=>$input['email'],'password'=>$input['password']]))
      {
          Session::put('userlogin',$input['email']);
          $id=DB::table('users')->where('email',$input['email'])->value('id');
          $user=DB::table('users')->where('id',$id)->get();
          $product=DB::table('tblproducts')->where('userID',$id)->where('isDelete','')->get(['id','name','dateUpload','price','camara','battery']);
          $total=DB::table('tblproducts')->where('userID',$id)->where('isDelete','')->count();
          
          return view('Admin.AdminMenu',compact('product','user','total'));
      }
        return redirect()->back()->with('message','Error on login');
    }
    function logout(Request $request)
    {
        Auth::logout();
        Session::forget('userlogin');
        return redirect('/');
    }
    function register(Request $request)
    {
        $this->validate($request,[
           'name'=>'required|string|max:255',
           'email'=>'required|string|email|unique:users,email',
           'password'=>'required|min:6|confirmed',
        ]);
        $input=$request->all();
        $input['password']=Hash::make($input['password']);
        User::create($input);
        return back()->with('message','Registered complete');
    }
    function signup(Request $request)
    {
        return view('signup');
    }
    function admin(Request $request)
    {
         $id=DB::table('users')->where('email',Session('userlogin'))->value('id');

         $product=DB::table('tblproducts')->where('userID',$id)->where('isDelete','')->get(['id','name','dateUpload','price','camara','battery']);
         $total=DB::table('tblproducts')->where('userID',$id)->where('isDelete','')->count();
         $user=DB::table('users')->where('id',$id)->get();
         return view('Admin.AdminMenu',compact('product','user','total'));
    }
    function post(Request $request)
    {
        return view('Admin.Postproduct');
    }
    function upload(Request $request)
    {
        print_r($request->file());
        $this->validate($request,[
            'name'=>'required|string|max:255',
            'screen'=>'required|string:255',
            'ram'=>'required|string:255',
            'storage'=>'required|string:255',
            'sim'=>'required|string:255',
            'camara'=>'required|string:255',
            'battery'=>'required|string:255',
            'price'=>'required|numeric',
            'img'=>'required'
         ]);
         $product=new Product();
         $imagesave=new Image();

         $product->name=$request->input('name');
         $date=new DateTime();
         $product->dateupload=$date;
         $product->screen=$request->input('screen');
         $product->type=$request->input('type');
         $product->ram=$request->input('ram');
         $product->storage=$request->input('storage');
         $product->sim=$request->input('sim');
         $product->camara=$request->input('camara');
         $product->battery=$request->input('battery');
         $product->price=$request->input('price');
         $product->isDelete="";
        
         $id=DB::table('users')->where('email',Session('userlogin'))->value('id');
         $product->userID=$id;
         $product->isPost="";
         if($request->hasFile('img')){
         $images=$request->file('img');
         $extension=$images->getClientOriginalExtension();
         $fileid=time();
         $filename=$fileid.'.'.$extension;
         $images->move('image/',$filename);

         $imagesave->imgID=$fileid;
         $imagesave->imgName=$filename;
         $imagesave->save();

         print_r($fileid);
         $product->imgID=$fileid;
         
         $product->save();
         }

         return redirect()->back()->with('message',"success Post");
    }
    function approve(Request $request)
    {
        $Approve=DB::table('tblproducts')->where('isPost','')->get(['tblproducts.id','name','dateupload','screen','ram','storage','price','camara','battery','sim']);

        return view('Admin.Approve',compact('Approve'));
    }
    function approved(Request $request,$id)
    {
        $status= DB::table('tblproducts')->where('id',$id)->update(array('isPost'=>'1'));
        if($status==0){
            return redirect()->back()->with('message','product not approve something went wrong'.$id);
        }
        else{
        return redirect()->back()->with('message',"successfully");
        }
           
    }
    function removed(Request $request,$id)
    {
        $status=DB::table('tblproducts')->where('id',$id)->update(array('isDelete'=>'1'));
        if($status==0)
        {
            return redirect()->back()->with('message','product could not delete something went wrong'.$id);
        }
        else{
            return redirect()->back()->with('message',"successfully");
        }
    }
}
