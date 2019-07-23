<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Employee;
use App\User;

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
        //echo Auth::user()->name;
        return view('home');
    }

    public function inserttest()
    {
        $login_name = Auth::user()->name;
        $employee = New Employee();
        $employee->addNameToTestTable($login_name);
        $user = New User();
        $user->addNameToTestTable($login_name);
        return view('home');
    }

}
