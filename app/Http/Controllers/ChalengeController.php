<?php

namespace App\Http\Controllers;

use App\Challenge;
use App\Challengecategory;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ChalengeController extends Controller
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
        $challengecategories=Challengecategory::all();
        return view('challenge.create',['challengecategories'=>$challengecategories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {//`challengecategory_id`, `entryfee`, `winamount`, `maxuser`, `minuser`, `type`, `created_at`, `updated_at` 
     Challenge::insert([
        'challengecategory_id'=>$request->challengecategory_id,
        'entryfee'=>$request->entryfee,
        'winamount'=>$request->winamount,
        'maxuser'=>$request->maxuser,
        'minuser'=>$request->minuser,
        'type'=>$request->type,
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
     ]);

     return "Done";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chalenge  $chalenge
     * @return \Illuminate\Http\Response
     */
    public function show(Chalenge $chalenge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chalenge  $chalenge
     * @return \Illuminate\Http\Response
     */
    public function edit(Chalenge $chalenge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chalenge  $chalenge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chalenge $chalenge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chalenge  $chalenge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chalenge $chalenge)
    {
        //
    }
}
