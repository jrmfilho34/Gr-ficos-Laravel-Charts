<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Charts\SampleChart;

class ChartsController extends Controller
{
   public function chart(){
   	$chart = new SampleChart;
   	$chart->dataset('Sample','line',[120,90]);
   	return view('chart',['chart'=>$chart]);

   }
}



/*1807071503
30274220
bb 756
ag 3258
cc 2337-0*/