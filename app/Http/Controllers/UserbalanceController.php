<?php

namespace App\Http\Controllers;

use App\Userbalance;
use Illuminate\Http\Request;
use Auth;
use App\User;

class UserbalanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userbalances=Userbalance::all();

        return view('userbalance.index',['userbalances'=>$userbalances]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userbalance.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $currentUser=Auth::id();
        $msg="";
    $user=Userbalance::where('user_id',$currentUser)->count();
        if($user==0)
        {
            Userbalance::insert([
                'winning'=>$request->winning,
                'balance'=>$request->balance,
                'bonus'=>$request->bonus,
                'user_id'=> $currentUser
                ]);
                $msg="Inserted";

        }else
        {
            $msg='user already exist';
        }
        

        return $msg;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Userbalance  $userbalance
     * @return \Illuminate\Http\Response
     */
    public function show(Userbalance $userbalance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Userbalance  $userbalance
     * @return \Illuminate\Http\Response
     */
    public function edit(Userbalance $userbalance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Userbalance  $userbalance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Userbalance $userbalance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Userbalance  $userbalance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Userbalance $userbalance)
    {
        //
    }
}
