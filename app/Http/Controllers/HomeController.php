<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Timesheet;


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
      $timeLogs = auth()->user()->timeLogs()->orderBy('date','desc')->get();
      //$timeLogs = Auth::user()->timeLogs; //-- working with Auth but without orderBy date sorting
      //$timeLogs = Timesheet::orderBy('date', 'desc')->get(); //-- working but getting all the data without Auth
      return view('home', array('timeLogs' => $timeLogs) );
    }
}
