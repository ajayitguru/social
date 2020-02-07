<?php

namespace App\Http\Controllers;

use App\Challengecategory;
use Illuminate\Http\Request;
use Storage;
use File;
use Carbon\Carbon;

class ChallengecategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('challengecategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //uploading file
        $file=$request->file('image');
        Storage::disk('public')->put($file->getClientOriginalName(),File::get($file));
       // return "File Upladed ".$file->getClientoriginalName();
       Challengecategory::insert([
           'name'=>$request->name,
           'description'=>$request->description,
            'image'=>$file->getClientOriginalName(),
            'status'=>$request->status,
            'sortorder'=>$request->sortorder,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()


       ]);

       return "saved";

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Challengecategory  $challengecategory
     * @return \Illuminate\Http\Response
     */
    public function show(Challengecategory $challengecategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Challengecategory  $challengecategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Challengecategory $challengecategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Challengecategory  $challengecategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Challengecategory $challengecategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Challengecategory  $challengecategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Challengecategory $challengecategory)
    {
        //
    }
}
