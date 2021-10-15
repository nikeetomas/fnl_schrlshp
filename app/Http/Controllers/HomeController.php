<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scholarship;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function scholarships(){
        $sprogram = Scholarship :: simplePaginate(10);
        return view('pages.scholarships',['scholarships'=> $sprogram]);

    }

    public function colleges(){
        return view('pages.colleges');
    }

    public function donor(){
        return view('pages.donor');
    }
}
