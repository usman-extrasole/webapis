<?php

namespace App\Http\Controllers;

use App\About;
use App\Category;
use App\ChildCategory;
use App\Contact;
use App\Donate;
use App\Privacy;
use App\SubCatgeory;
use App\User;
use Illuminate\Contracts\Support\Renderable;
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
     * @return Renderable
     */
    public function index()
    {
        $data['l-category'] = Category::where('status', '=', 0)->count();
        $data['g-category'] = Category::where('status', '=', 1)->count();
        $data['p-category'] = Category::where('status', '=', 2)->count();
        $data['l-subcategory'] = SubCatgeory::where('status', '=', 0)->count();
        $data['g-subcategory'] = SubCatgeory::where('status', '=', 1)->count();
        $data['p-subcategory'] = SubCatgeory::where('status', '=', 2)->count();
        $data['l-child-category'] = ChildCategory::where('status', '=', 0)->count();
        $data['g-child-category'] = ChildCategory::where('status', '=', 1)->count();
        $data['p-child-category'] = ChildCategory::where('status', '=', 2)->count();
        $data['user'] = User::where('role', '=', 3)->count();
        $data['about'] = About::count();
        $data['contact'] = Contact::count();
        $data['donate'] = Donate::count();
        $data['privacy'] = Privacy::count();
        return view('admin.index', compact('data'));
    }
}
