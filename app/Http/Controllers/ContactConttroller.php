<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactConttroller extends Controller
{
    public function show() {
        return view('contact');
    }
    
}
