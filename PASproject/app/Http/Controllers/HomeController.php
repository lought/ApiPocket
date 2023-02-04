<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('auth.dashboard');
    }

    public function categories()
    {
        return view('auth.categories'); 
    }
    public function expenses()
    {
        return view('auth.expenses'); 
    }
    public function income()
    {
        return view('auth.income'); 
    }
}
