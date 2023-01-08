<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCatgeory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class SubCatgeoryController extends Controller
{

    public function index()
    {
        $category = Category::where('status','=','0')->get();
        $subcategory = SubCatgeory::where('status','=','0')->get();
        return view('admin.subcategory.index', compact('category', 'subcategory'));
    }
    public function indexOne()
    {
        $category = Category::where('status','=','1')->get();
        $subcategory = SubCatgeory::where('status','=','1')->get();
        return view('admin.subcategory.index1', compact('category', 'subcategory'));
    }
    public function index2()
    {
        $category = Category::where('status','=','2')->get();
        $subcategory = SubCatgeory::where('status','=','2')->get();
        return view('admin.subcategory.index2', compact('category', 'subcategory'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        $subcategory = new SubCatgeory();
        $subcategory->name = $request->name;
        $subcategory->status = $request->status;
        $subcategory->category_id = $request->category_id;
        $subcategory->user_id = Auth::user()->id;
        if($request->hasfile('img')) {

            $image1 = $request->file('img');
            $name = time() . 'img' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $subcategory->img = 'img/' . $name;
        }

            $subcategory->save();
            return redirect()->back()->with('message', 'Record Added Successfully !');

    }

    public function show(SubCatgeory $subCatgeory)
    {
        //
    }


    public function edit($id)
    {
        $subcategory = SubCatgeory::find($id);
        $subcategory->status = 0;
        $subcategory->save();
        return redirect()->back()->with('info', 'Record Status Updated Successfully !');

    }

    public function update(Request $request, $id)
    {
        $subcategory = SubCatgeory::find($id);
        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category_id;
        if($request->hasfile('img')) {

            $image1 = $request->file('img');
            $name = time() . 'img' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $subcategory->img = 'img/' . $name;
        }
        $subcategory->update();
        return redirect()->back()->with('message', 'Record Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param SubCatgeory $subCatgeory
     * @return Response
     */
    public
    function destroy($id)
    {
        $subcategory = SubCatgeory::find($id);
        $subcategory->delete();
        return redirect()->back()->with('error', 'Record Deleted Successfully !');
    }
}
