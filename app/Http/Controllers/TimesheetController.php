<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class TimesheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function timesheet()
    {
      $timesheet1 = DB::table('timesheets')
      ->join('users', 'timesheets.user_id','=','users.id')
      ->select('users.*', 'timesheets.*')
      ->where('first_name', 'Bill')
      ->get();
      return view('timesheets', ['timesheet1'=>$timesheet1]);
    }


}
