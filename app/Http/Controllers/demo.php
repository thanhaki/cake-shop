<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demo extends Controller
{
    // get page uu dai
    public function getUuDai(){
        return view('page.uudai');
    }
}
