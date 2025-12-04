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
        
        $product = new Plate();

        $file = $request->file('file');
        $product->filepath=url('/resources/BasilBurger.jpg');
        if($file){
            $path = $file->store('uploads', 'public');
            $product->filepath = $path;

        }
    
        // $request->validate([
        //     'name' => 'required',
        //     'price' => 'required',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);

        // $imageName = time().'.'.$request->image->extension();
        // $request->image->move(public_path('images'), $imageName);
        $product->name = $request->name;
        $product->price = ($request->price) > 0 ?$request->price : 0;
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
        return view('plateViewer',['plate'=>$plate])->with('success',true);
    }
    public function delete(?string $id){
        
        $idNum = (int)$id;
        $plate = plate::findOrFail($idNum);
        Storage::delete($plate->filepath);
        $plate->delete();
        return view('Menu');
    }

}
