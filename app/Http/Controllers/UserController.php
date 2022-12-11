<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role','=', 2)->get();
        return view('admin.user.index' , compact('users'));
    }

    public function index2()
    {
        $users = User::where('role','=', 3)->get();
        return view('admin.user.index' , compact('users'));
    }
    public function create()
    {
        return view('admin.user.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->country = $request->country;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('user.index')->with('info', 'User Added Successfully !');

    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit',compact('user'));
    }
    public function update(Request $request,$id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->country = $request->country;
        if($request->password) {
            $user->password = Hash::make($request->password);
        }
        if ($request->hasfile('img')) {

            $image1 = $request->file('img');
            $name = time() . 'img' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $user->img = 'img/' . $name;
        }
        $user->save();
        return redirect()->back()->with('info', 'User Update Successfully !');
    }
    public function adminEdit()
    {
        $user = Auth::user();
        return view('admin.user.adminEdit',compact('user'));
    }
    public function adminUpdate(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->country = $request->country;
        if($request->password) {
            $user->password = Hash::make($request->password);
        }
        if ($request->hasfile('img')) {

            $image1 = $request->file('img');
            $name = time() . 'img' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $user->img = 'img/' . $name;
        }
        $user->save();
        return redirect()->back()->with('info', ' Update Your Profile Successfully!');
    }

}
