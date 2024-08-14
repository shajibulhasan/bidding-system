<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpSupportController extends Controller
{
    
    public function contact()
    {
        return view('contact');
    }

    public function faqs()
    {
        return view('faqs');
    }
}