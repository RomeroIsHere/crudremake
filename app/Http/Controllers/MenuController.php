<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Plate;

class MenuController extends Controller
{
    //
    public function index(){
        $allPlates = [];
        foreach (Plate::all() as $flight) {
            $veganVisible=$flight->isVegan?'':'hidden';
            $glutenVisible=$flight->hasGluten?'':'hidden';

            $allPlates[] = [
                'id'=>$flight->id,
                'name'=>$flight->name,
                'price'=>$flight->price,
                'filepath'=>$flight->filepath,
                'isVegan'=> $veganVisible,
                'hasGluten'=> $glutenVisible
            ];
        }
        return view('menu',compact('allPlates'));
    }
}
