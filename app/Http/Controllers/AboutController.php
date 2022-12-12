<?php

namespace App\Http\Controllers;

use App\About;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $about = About::all();
        return view('admin.setting.about', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $about = new About();
        $about->name = $request->name;
        $about->description = $request->description;
        $about->status = 1;
        $about->user_id = Auth::user()->id;
        if ($request->hasfile('img')) {

            $image1 = $request->file('img');
            $name = time() . 'img' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $about->img = 'img/' . $name;
        }
        $about->save();
        return redirect()->back()->with('message', 'Record Added Successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param About $about
     * @return Response
     */
    public function show($id)
    {
        $about =  About::find($id);
        $about->delete();
        return redirect()->back()->with('error', 'Record Deleted Successfully !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param About $about
     * @return Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param About $about
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $about =  About::find($id);
        $about->name = $request->name;
        $about->description = $request->description;
        $about->user_id = Auth::user()->id;
        if ($request->hasfile('img')) {

            $image1 = $request->file('img');
            $name = time() . 'img' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'img/';
            $image1->move($destinationPath, $name);
            $about->img = 'img/' . $name;
        }
        $about->save();
        return redirect()->back()->with('message', 'Record Update Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param About $about
     * @return Response
     */
    public function destroy($id)
    {

    }
}
