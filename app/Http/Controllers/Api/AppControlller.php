<?php

namespace App\Http\Controllers\Api;

use App\About;
use App\Category;
use App\ChildCategory;
use App\Contact;
use App\Donate;
use App\Http\Controllers\Controller;
use App\Privacy;
use App\SubCatgeory;
use Illuminate\Http\Request;

class AppControlller extends Controller
{
    public $successStatus = 200;
    public function libraryCategory()
    {
        $category = Category::where('status','=',0)->get();
        return response()->json(['success' => $category], $this->successStatus);
    }
    public function librarySubCategory($category_id)
    {
        $subcategory = SubCatgeory::where('status','=',0)->where('category_id','=',$category_id)->get();
        return response()->json(['success' => $subcategory], $this->successStatus);
    }
    public function libraryChildCategory($subcategory_id)
    {
        $childcategory = ChildCategory::where('status','=',0)->where('subcategory_id','=',$subcategory_id)->get();
        return response()->json(['success' => $childcategory], $this->successStatus);
    }
    public function guitarCategory()
    {
        $category = Category::where('status','=',1)->get();
        return response()->json(['success' => $category], $this->successStatus);
    }
    public function guitarSubCategory($category_id)
    {
        $subcategory = SubCatgeory::where('status','=',1)->where('category_id','=',$category_id)->get();
        return response()->json(['success' => $subcategory], $this->successStatus);
    }
    public function guitarChildCategory($subcategory_id)
    {
        $childcategory = ChildCategory::where('status','=',1)->where('subcategory_id','=',$subcategory_id)->get();
        return response()->json(['success' => $childcategory], $this->successStatus);
    }
    public function pianoCategory()
    {
        $category = Category::where('status','=',2)->get();
        return response()->json(['success' => $category], $this->successStatus);
    }
    public function pianoSubCategory($category_id)
    {
        $subcategory = SubCatgeory::where('status','=',2)->where('category_id','=',$category_id)->get();
        return response()->json(['success' => $subcategory], $this->successStatus);
    }
    public function pianoChildCategory($subcategory_id)
    {
        $childcategory = ChildCategory::where('status','=',2)->where('subcategory_id','=',$subcategory_id)->get();
        return response()->json(['success' => $childcategory], $this->successStatus);
    }
    public function contact()
    {
        $contact = Contact::all();
        return response()->json(['success' => $contact], $this->successStatus);
    }
    public function about()
    {
        $about = About::all();
        return response()->json(['success' => $about], $this->successStatus);
    }
    public function privacy()
    {
        $privacy = Privacy::all();
        return response()->json(['success' => $privacy], $this->successStatus);
    }
    public function donate()
    {
        $donate = Donate::all();
        return response()->json(['success' => $donate], $this->successStatus);
    }
    public function librarySearch(Request $request)
    {
        $search = ChildCategory::where('status','=',0)->where('name1', 'LIKE', '%' . $request->keyword . '%')
            ->orWhere('name2', 'LIKE', '%' . $request->keyword . '%')
            ->orWhere('name3', 'LIKE', '%' . $request->keyword . '%')
            ->orWhere('name4', 'LIKE', '%' . $request->keyword . '%')
            ->orWhere('name5', 'LIKE', '%' . $request->keyword . '%')
            ->get();
        return response()->json(['success' => $search], $this->successStatus);
    }
    public function guitarSearch(Request $request)
    {
        $search = ChildCategory::where('status','=',1)->where('name1', 'LIKE', '%' . $request->keyword . '%')
            ->orWhere('name2', 'LIKE', '%' . $request->keyword . '%')
            ->orWhere('name3', 'LIKE', '%' . $request->keyword . '%')
            ->orWhere('name4', 'LIKE', '%' . $request->keyword . '%')
            ->orWhere('name5', 'LIKE', '%' . $request->keyword . '%')
            ->get();
        return response()->json(['success' => $search], $this->successStatus);
    }
    public function pianoSearch(Request $request)
    {
        $search = ChildCategory::where('status','=',2)->where('name1', 'LIKE', '%' . $request->keyword . '%')
            ->orWhere('name2', 'LIKE', '%' . $request->keyword . '%')
            ->orWhere('name3', 'LIKE', '%' . $request->keyword . '%')
            ->orWhere('name4', 'LIKE', '%' . $request->keyword . '%')
            ->orWhere('name5', 'LIKE', '%' . $request->keyword . '%')
            ->get();
        return response()->json(['success' => $search], $this->successStatus);
    }
}
