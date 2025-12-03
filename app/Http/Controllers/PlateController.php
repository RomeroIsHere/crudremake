<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plate;
use Illuminate\Support\Facades\Storage;

class PlateController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'image|mimes:jpeg,jpg,png|max:2048',
        ]);
        $file = $request->file('file');
        $path = $file->store('uploads', 'public');
    
        // $request->validate([
        //     'name' => 'required',
        //     'price' => 'required',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);

        // $imageName = time().'.'.$request->image->extension();
        // $request->image->move(public_path('images'), $imageName);
        $product = new Plate();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->filepath = $path;
        $product->isVegan = $request->isVegan=='on'?true:false;
        $product->hasGluten = $request->hasGluten=='on'?true:false;
        // $product->description = $request->description;
        // $product->image = 'images/'.$imageName;
        $product->save();
        return redirect()->route('Create.success');
    }
    public function view(?string $id){
        
        $idNum = (int)$id;
        $plate = plate::findOrFail($idNum);
        
        // 'id'=>$plate->id,
        // 'name'=>$plate->name,
        // 'price'=>$plate->price,
        // 'filepath'=>$plate->filepath,
        // 'isVegan'=> $veganVisible,
        // 'hasGluten'=> $glutenVisible

        return view('plateViewer',['plate'=>$plate]);
    }
    public function update(Request $request, string $id){
        $idNum = (int)$id;
        $plate = plate::findOrFail($idNum);
        if($request->hasFile('file')){   
            $request->validate([
                'file' => 'image|mimes:jpeg,jpg,png|max:2048',
            ]);
            $file = $request->file('file');
            $path = $file->store('uploads', 'public');
            Storage::delete($plate->filepath);
        }
        
        $plate->name = $request->name??$plate->name;
        $plate->price = $request->price??$plate->price;
        $plate->filepath = $path??$plate->filepath;

        $plate->isVegan = $request->isVegan=='on'?true:false;
        $plate->hasGluten = $request->hasGluten=='on'?true:false;
        $plate->save();
        return view('plateViewer',['plate'=>$plate]);
    }
    public function delete(?string $id){
        
        $idNum = (int)$id;
        $plate = plate::findOrFail($idNum);
        $plate->delete();
        return route('Menu');
    }

}
