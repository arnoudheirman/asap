<?php

namespace App\Http\Controllers;

use App\Assessment;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $assessments = Assessment::all();
        //dd($assessments);
        return view('welcome', compact('assessments'));
    }

}
