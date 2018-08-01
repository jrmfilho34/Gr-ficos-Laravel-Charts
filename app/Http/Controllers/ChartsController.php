<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Charts\SampleChart;
use DB;
use App\Produtos;



class ChartsController extends Controller
{
   public function chart(){
     
    
   	$chart = new SampleChart;
   	$chart->dataset('Numero de acessos','bar',[120,90,150])
   	      ->options(['borderColor'=>'#f9F000','borderWidth'=>'2','backgroundColor'=>
   	      	[ "#ff6384","#36a2eb"]]);


    
   	return view('chart',['chart'=>$chart]);

   }

}



/*1807071503
30274220
bb 756
ag 3258
cc 2337-0*/