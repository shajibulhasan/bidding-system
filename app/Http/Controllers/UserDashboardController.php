<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use File;

class UserDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $totalBid = DB::table('bid')->count('id'); 
        $runningBid = DB::table('bid')->where('status','running')->count('id'); 
        $myBid = DB::table('bid')->where('user_id',$user_id )->count('id'); 
        $totalUser = DB::table('users')->where('role','user')->count('id');
        return view('userDashboard',['totalBid'=>$totalBid, 'runningBid'=>$runningBid, 'myBid'=>$myBid, 'totalUser'=>$totalUser]);
    }

    public function requestBid(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'description' => 'required',
            'starting_price' => 'required',
            'starting_date' => 'required',
            'ending_date' => 'required',
            'image' => 'required',
        ],[
            'name.required' => 'Name is required',
            'description.required' => 'Description is required',
            'starting_price.required' => 'Starting Price is required',
            'starting_date.required' => 'Starting Date is required',
            'ending_date.required' => 'Ending Date is required',
            'image.required' => 'Image is required',
        ]);
        
        $user_id = Auth::user()->id;
        if ($req->starting_date > now()) {
            $imageName = time().'.'.$req->image->extension();        
            $req->image->move(public_path('images'), $imageName);
            $bid_create = DB::table('bid')->insert([
                'name' => $req->name,
                'description' => $req->description,
                'starting_price' => $req->starting_price,
                'starting_date' => $req->starting_date,
                'ending_date' => $req->ending_date,
                'user_id' => $user_id,
                'image' => $imageName,
            ]);
            if($bid_create){
                return redirect()->back()->with('success','Bid Request Successful');
            }
            else{
                return redirect()->back()->with('error','Your bid Cannot Create');
            }            
        }
        else {
            return redirect()->back()->with('error','Cannot create bid, check your starting date');
        }
        

    }

    public function biddingPrice(Request $req, string $id)
    {
        $user_id = Auth::user()->id;
        $bid = DB::table('bid')->where('id',$id)->first();
        if($bid->ending_price=='No Bid'){
            if($bid->starting_price<$req->price){
                $bid_update = DB::table('bid')->where('id',$id)->update([
                    'ending_price' => $req->price,
                    'bidder_id' => $user_id,
                ]);
                if($bid_update){
                    return redirect()->back()->with('success','Successfully Participate bid');
                }
                else{
                    echo "Error!";
                }
            }else{
                return redirect()->back()->with('error','Your bid is lower than the current price');
            }
        }
        else{
            if($bid->ending_price<$req->price){
                $bid_update = DB::table('bid')->where('id',$id)->update([
                    'ending_price' => $req->price,
                    'bidder_id' => $user_id,
                ]);
                if($bid_update){
                    return redirect()->back()->with('success','Successfully Participate bid');
                }
                else{
                    echo "Error!";
                }
            }else{
                return redirect()->back()->with('error','Your bid is lower than the current price');
            }
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
        $bid = DB::table('bid')->where('ending_date','<',now())->get(); 

        if($bid){
            foreach ($bid as $key => $value) {

                if ($value->ending_price === 'No Bid' || $value->ending_price === 'Not start') {
                    DB::table('bid')->where('id',$value->id)->update([
                        'status' => 'Return',
                        ]);
                }else {
                    DB::table('bid')->where('id',$value->id)->update([
                        'status' => 'sold',
                    ]);
                }               
            }
        }
        $mybid = DB::table('bid')->where('status','running')->get(); 
        if(Auth::user()->role == 'user'){
            return view('runningBidUser',['data'=>$mybid]);
        }
        else{
            return view('runningBidAdmin',['data'=>$mybid]);
        }
        
    }

    public function wonBid()
    {
        $user_id = Auth::user()->id;
        $mybid = DB::table('bid')->where('status','sold')->where('bidder_id',$user_id)->get(); 
        if($mybid){
            return view('wonBid',['data'=>$mybid]);
        }
        else{
            echo '<h1>Error!</h1>';
        }
    }
    public function bidSold()
    {
        $user_id = Auth::user()->id;
        $mybid = DB::table('bid')->join('users', 'users.id', '=', 'bid.bidder_id')->select('bid.*', 'users.name as buyer_name')->where('status','sold')->where('user_id',$user_id)->get(); 
        if($mybid){
            return view('bidSold',['data'=>$mybid]);
        }
        else{
            echo '<h1>Error!</h1>';
        }
        
    }

    public function bidDelete(string $id)
    {
        $imageName=DB::table('bid')->where('id',$id)->value('image');
        
        if(File::exists(public_path('images/'.$imageName))){
            File::delete(public_path('images/'.$imageName));
            $user = DB::table('bid')->where('id',$id)->delete();
            return redirect()->back()->with('success','Successfully delete bid');
        }
        else
        {
            echo '<h1>Error!</h1>';
        }
    }

    public function updateBid(Request $req, string $id)
    {
              
        $imageOldName=DB::table('bid')->where('id',$id)->value('image');
        if ($req->image != "") {
            $imageName = time().'.'.$req->image->extension(); 
            $req->image->move(public_path('images'), $imageName);
            $bid_create = DB::table('bid')->where('id',$id)->update([
                'name' => $req->name,
                'description' => $req->description,
                'starting_price' => $req->starting_price,
                'starting_date' => $req->starting_date,
                'ending_date' => $req->ending_date,
                'image' => $imageName,
            ]);
            if($bid_create){
                if(File::exists(public_path('images/'.$imageOldName))){
                    File::delete(public_path('images/'.$imageOldName));                
                    return redirect()->back()->with('success','Successfully update bid');
                }
                else{
                    return redirect()->back()->with('success','Successfully update bid');
                }
            }
            else{
                echo "Error!";
            }
        }
        else {
            $bid_create = DB::table('bid')->where('id',$id)->update([
                'name' => $req->name,
                'description' => $req->description,
                'starting_price' => $req->starting_price,
                'starting_date' => $req->starting_date,
                'ending_date' => $req->ending_date,
            ]);
            if($bid_create){                           
                return redirect()->back()->with('success','Successfully update bid');
            }
            else{
                echo "Error!";
            }
        }

    }
    public function bidUpdate(string $id)
    {
        $bid = DB::table('bid')->where('id',$id)->first();
        return view('bidUpdate',['bid'=>$bid]);
    }
    public function bidView(string $id)
    {
        $bid = DB::table('bid')->where('id',$id)->first();
        return view('updateView',['bid'=>$bid]);
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
