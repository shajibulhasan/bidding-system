<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;
use Auth;

class PDFController extends Controller
{
    // public function bidSoldPDF(string $id)
    // {
           
    //     $data = DB::table('bid')->join('users', 'users.id', '=', 'bid.bidder_id')->select('bid.*', 'users.name as buyer_name')->where('bid.id',$id)->first();
          
    //     $pdf = PDF::loadView('bidSoldPDF', compact('data'));
    
    //     return $pdf->download('productSell.pdf');
    // }
    public function AllBidSoldPDF()
    {
       

        $user_id = Auth::user()->id;
           
        $data = DB::table('bid')->join('users', 'users.id', '=', 'bid.bidder_id')->select('bid.*', 'users.name as buyer_name')->where('status','sold')->where('user_id',$user_id)->get();
          
        $pdf = PDF::loadView('bidSoldPDF', compact('data'));
    
        return $pdf->download('productSell.pdf');
    }
    public function AllBidWonPDF()
    {
       

        $user_id = Auth::user()->id;
           
        $data = DB::table('bid')->where('status','sold')->where('bidder_id',$user_id)->get();
          
        $pdf = PDF::loadView('wonBidPDF', compact('data'));
    
        return $pdf->download('productWon.pdf');
    }
    public function AllMyBidPDF()
    {
       

        $user_id = Auth::user()->id;
           
        $data = DB::table('bid')->where('user_id',$user_id)->get();
          
        $pdf = PDF::loadView('myBidPDF', compact('data'));
    
        return $pdf->download('MyProduct.pdf');
    }
}
