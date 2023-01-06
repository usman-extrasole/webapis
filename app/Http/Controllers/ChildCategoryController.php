<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCatgeory;
use App\ChildCategory;
use Auth;
use Illuminate\Http\Request;

class ChildCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $childcategory = ChildCategory::where('status','=',0)->get();
        return view('admin.childcategory.index',compact('childcategory'));
    }
    public function index1()
    {
        $childcategory = ChildCategory::where('status','=',1)->get();
        return view('admin.childcategory.indexOne',compact('childcategory'));
    }
    public function index2()
    {
        $childcategory = ChildCategory::where('status','=',2)->get();
        return view('admin.childcategory.indexTwo',compact('childcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('status','=',0)->get();
        return view('admin.childcategory.create',compact('categories'));
    }
    public function create1()
    {
        $categories = Category::where('status','=',1)->get();
        return view('admin.childcategory.createOne',compact('categories'));
    }
    public function create2()
    {
        $categories = Category::where('status','=',2)->get();
        return view('admin.childcategory.createTwo',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $childcategory = new ChildCategory();
        $childcategory->name1 = $request->name1;
        $childcategory->name2 = $request->name2;
        $childcategory->name3 = $request->name3;
        $childcategory->name4 = $request->name4;
        $childcategory->name5 = $request->name5;
        $childcategory->status = $request->status;
        $childcategory->category_id = $request->category_id;
        $childcategory->subcategory_id = $request->subcategory_id;
        $childcategory->user_id = Auth::user()->id;
        $childcategory->file1 = $request->file1;
        $childcategory->file2 = $request->file2;
        $childcategory->file3 = $request->file3;
        $childcategory->file4 = $request->file4;
        $childcategory->file5 = $request->file5;
        if ($request->hasfile('file1')) {

            $image1 = $request->file('file1');
            $name = time() . 'file1' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $childcategory->file1 = 'img/' . $name;
        }
        if ($request->hasfile('file2')) {

            $image1 = $request->file('file2');
            $name = time() . 'file2' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $childcategory->file2 = 'img/' . $name;
        }
        if ($request->hasfile('file3')) {

            $image1 = $request->file('file3');
            $name = time() . 'file3' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $childcategory->file3 = 'img/' . $name;
        }
        if ($request->hasfile('file4')) {

            $image1 = $request->file('file4');
            $name = time() . 'file4' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $childcategory->file4 = 'img/' . $name;
        }
        if ($request->hasfile('file5')) {

            $image1 = $request->file('file5');
            $name = time() . 'file5' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $childcategory->file5 = 'img/' . $name;
        }
        $childcategory->save();
        return redirect()->back()->with('message', 'Child-Category Added Successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $childcategory = ChildCategory::find($id);
        $categories = Category::all();
        $subcategories = SubCatgeory::where('category_id', '=', $childcategory->category_id)->get();
        return view('admin.childcategory.show', compact('childcategory', 'categories', 'subcategories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$status)
    {
        $childcategory = ChildCategory::find($id);
        $categories = Category::where('status','=',$status)->get();
        $subcategories = SubCatgeory::where('category_id', '=', $childcategory->category_id)->get();
        return view('admin.childcategory.edit', compact('childcategory', 'categories', 'subcategories'));
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

        $childcategory = ChildCategory::find($id);
        $childcategory->name1 = $request->name1;
        $childcategory->name2 = $request->name2;
        $childcategory->name3 = $request->name3;
        $childcategory->name4 = $request->name4;
        $childcategory->name5 = $request->name5;
        $childcategory->category_id = $request->category_id;
        $childcategory->subcategory_id = $request->subcategory_id;
        $childcategory->user_id = Auth::user()->id;
        if($request->file1){
            $childcategory->file1 = $request->file1;
        }
        if($request->file2){
            $childcategory->file2 = $request->file2;
        }
        if($request->file3){
            $childcategory->file3 = $request->file3;
        }
        if($request->file4){
            $childcategory->file4 = $request->file4;
        }
        if($request->file5){
            $childcategory->file5 = $request->file5;
        }
        if ($request->hasfile('file1')) {

            $image1 = $request->file('file1');
            $name = time() . 'file1' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $childcategory->file1 = 'img/' . $name;
        }
        if ($request->hasfile('file2')) {

            $image1 = $request->file('file2');
            $name = time() . 'file2' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $childcategory->file2 = 'img/' . $name;
        }
        if ($request->hasfile('file3')) {

            $image1 = $request->file('file3');
            $name = time() . 'file3' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $childcategory->file3 = 'img/' . $name;
        }
        if ($request->hasfile('file4')) {

            $image1 = $request->file('file4');
            $name = time() . 'file4' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $childcategory->file4 = 'img/' . $name;
        }
        if ($request->hasfile('file5')) {

            $image1 = $request->file('file5');
            $name = time() . 'file5' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $childcategory->file5 = 'img/' . $name;
        }
        $childcategory->save();
        return redirect()->back()->with('message', 'Child-Category Update Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $childcategory = ChildCategory::find($id);
        $childcategory->delete();
        return redirect()->back()->with('error', 'Record Deleted Successfully !');
    }
    public function fetchmaincategory(Request $request)
    {
        $subcategories = SubCatgeory::where('status', '=', $request->status)->where('category_id', '=', $request->id)->get();
        return response()->json($subcategories);
    }
}
