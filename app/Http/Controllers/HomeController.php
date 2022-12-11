<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\SubCatgeory;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->role ==1)
        {
            $data['category'] = Category::where('status','=',0)->count();
            $data['subcategory'] = SubCatgeory::where('status','=',0)->count();
            $data['seller'] = User::where('role','=',2)->count();
            $data['customer'] = User::where('role','=',3)->count();
            $data['fproduct'] = Product::where('status','=',0)->where('method','=',1)->count();
            $data['dproduct'] = Product::where('status','=',0)->where('method','=',2)->count();
        }
        else{
            $data['category'] = Category::where('status','=',0)->where('user_id' ,'=', $user->id)->orwhere('user_id','=', 1)->count();
            $data['subcategory'] = SubCatgeory::where('status','=',0)->orwhere('user_id' ,'=', $user->id)->orwhere('user_id','=', 1)->count();
            $data['fproduct'] = Product::where('status','=',0)->where('method','=',1)->count();
            $data['dproduct'] = Product::where('status','=',0)->where('method','=',2)->count();
        }


        return view('admin.index',compact('data'));
    }
}
