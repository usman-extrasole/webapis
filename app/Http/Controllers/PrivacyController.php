<?php

namespace App\Http\Controllers;

use App\Privacy;
use Auth;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $privacy = Privacy::all();
        return view('admin.setting.privicy', compact('privacy'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $about = new Privacy();
        $about->name = $request->name;
        $about->link = $request->link;
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
        return redirect()->back()->with('message', 'Record Added Successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $about =  Privacy::find($id);
        $about->delete();
        return redirect()->back()->with('error', 'Record Deleted Successfully !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $about =  Privacy::find($id);
        $about->name = $request->name;
        $about->link = $request->link;
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
     * @param  \App\Privacy  $privacy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Privacy $privacy)
    {
        //
    }
}
