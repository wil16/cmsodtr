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
      $timeLogs = auth()->user()->timeLogs()->orderBy('date','desc')->paginate(10);
      return view('home', array('timeLogs' => $timeLogs) );
    }
}
