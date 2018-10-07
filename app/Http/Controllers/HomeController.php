<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Test;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $x = new Test();
       $x->doSomething();

        return view('home');
    }
}
