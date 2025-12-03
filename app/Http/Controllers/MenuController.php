<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    public function index(){
        $allPlates = [];
        for ($PlateIndex=0; $PlateIndex < 10; $PlateIndex++) { 
            $allPlates[] = [
                'name'=>'Name'.$PlateIndex,
                'price'=>$PlateIndex,
                'isVegan'=> $PlateIndex%2==0?'hidden':'',
                'hasGluten'=> ($PlateIndex/2)%2==0?'':'hidden'
            ];
        }
        return view('menu',compact('allPlates'));
    }
}
