<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Timelog;

class DashboardController extends Controller
{
    public function index (){

//        $collection = Timelog::all();

       $count = [
           'total' =>103,
           '0' =>1,
           '1' =>2,
           '2'=>20,
           '3'=>50,
           '4'=>30

       ];

       //return $count;

        return view('adminLTE/dashboard', ['count'=>$count, 'page_title'=>'Sales Dashboard']);
    }
}
