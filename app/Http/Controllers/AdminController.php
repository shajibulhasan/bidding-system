<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalBid = DB::table('bid')->count('id'); 
        $runningBid = DB::table('bid')->where('status','running')->count('id'); 
        $requestBid = DB::table('bid')->where('status','Not Approve')->count('id'); 
        return view('admin',['totalBid'=>$totalBid, 'runningBid'=>$runningBid, 'requestBid'=>$requestBid]);
    }
    public function totalBid()
    {
        $mybid = DB::table('bid')->get(); 
        return view('totalBid',['data'=>$mybid]);
    }

    public function requestedBid()
    {
        $mybid = DB::table('bid')->where('status','Not Approve')->get(); 
        return view('requestedBid',['data'=>$mybid]);
    }
    public function deleteBid(string $id)
    {
        $deletebid = DB::table('bid')->where('id',$id)->delete(); 
        return redirect()->route('requestedBid');
    }
    public function approveBid(string $id)
    {
        $approvebid = DB::table('bid')->where('id',$id)->update([
            'ending_price' => 'No Bid',
            'status' => 'running',
        ]); 
        return redirect()->route('runningBidAdmin');
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
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(admin $admin)
    {
        //
    }
}
