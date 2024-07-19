<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('userDashboard');
    }

    public function requestBid(Request $req)
    {
        $user_id = Auth::user()->id;
        $bid_create = DB::table('bid')->insert([
            'name' => $req->name,
            'description' => $req->description,
            'starting_price' => $req->price,
            'starting_date' => $req->start,
            'ending_date' => $req->end,
            'user_id' => $user_id,
        ]);
        if($bid_create){
            return redirect()->route('myBid');
        }
        else{
            echo "Error!";
        }

    }
    public function biddingPrice(Request $req, string $id)
    {
        $bid_update = DB::table('bid')->where('id',$id)->update([
            'ending_price' => $req->price,
        ]);
        if($bid_update){
            return redirect()->route('runningBidUser');
        }
        else{
            echo "Error!";
        }

    }

    

    public function myBid()
    {
        $user_id = Auth::user()->id;
        $mybid = DB::table('bid')->where('user_id',$user_id)->get(); 
        return view('myBid',['data'=>$mybid]);
    }

    public function runningBid()
    {
        $mybid = DB::table('bid')->where('status','running')->get(); 
        return view('runningBidUser',['data'=>$mybid]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
