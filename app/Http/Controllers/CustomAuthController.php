<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }
    public function guestDashboard()
    {
        $totalBid = DB::table('bid')->count('id'); 
        $runningBid = DB::table('bid')->where('status','running')->count('id'); 
        $totalUser = DB::table('users')->where('role','user')->count('id');
        return view('index',['totalBid'=>$totalBid, 'runningBid'=>$runningBid, 'totalUser'=>$totalUser]);
    }

    public function customLogin(Request $request)
    {
       $validator =  $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
    
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if(Auth::user()->role == 'admin'){
                return redirect()->intended('admin')
                        ->withSuccess('Signed in');
            }
            else{
                return redirect()->intended('userDashboard')
                ->withSuccess('Signed in'); 
            }
            
        }
        $validator['emailPassword'] = 'Email address or password is incorrect.';
        return redirect("login")->withErrors($validator);
    }



    public function registration()
    {
        return view('auth.registration');
    }

    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'phone_number' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ],[
            'name.required' => 'name is required',
            'phone_number.required' => 'phone_number is required',
            'email.required' => 'email is required',
            'password.required' => 'password is required',

    ]);
           
        $data = $request->all();
        $check = $this->create($data);
        return redirect("login")->withSuccess('You have successfully registered');
    }


    public function create(array $data)
    {
      return User::create([

        'name' => $data['name'],
        'phone_number' => $data['phone_number'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('login');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function signOut() {
        Session::flush();
        Auth::logout(); 
        return Redirect('login');
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
        return view('runningBidIndex',['data'=>$mybid]);        
    }
    public function changePassword(Request $req)
    { 
        $validator =  $req->validate([
            'currentpassword' => 'required|',
            'newpassword' => 'required',
        ],[
            'currentpassword.required' => 'Current password is required',
            'newpassword.required' => 'New password is required',
        ]);   
    if(Hash::check($req->currentpassword, Auth::user()->password)){
        Auth::user()->password=Hash::make($req->newpassword);
        Auth::user()->save();
        Session::flush();
        Auth::logout(); 
        return redirect()->route('login')->with('success','Password Change Successfully');
    }else{
        return redirect()->back()->with('error','Current Password Not Matched');
    }    
    }
    public function updateProfile(Request $req)
    {
        $user_id = Auth::user()->id;
        $user_update = DB::table('users')->where('id',$user_id)->update([
            'name' => $req->name,
            'phone_number' => $req->phone_number,
            'email' => $req->email,
        ]);
        if($user_update){
            return redirect()->route('profile')->with('success','Profile Update Successfully');
        }
        else{
            echo "Error!";
        }
    }
}