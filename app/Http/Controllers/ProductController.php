<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Magasine;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function home(Request $request)
    {
        $data = Category::orderBy('name', 'asc')->get();
        return view('addProduct')->with('data',$data);
    }

    public function store(Request $request)
    {

        $inputs = $request->all();
        $data = Magasine::where('prop_id',auth()->user()->id)->first();

        $inputs['magasine_id'] = $data->id;


         if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destination_path = public_path('images/');
            $image->move($destination_path, $image_name);
            $inputs['image'] = $image_name;
        }


        Product::create($inputs);
        


        // $Product = new Product;
        // $Product->name = $request->name;
        // $Product->description = $request->description;
        // $Product->categ_id = $request->categ_id;
        // $Product->price = $request->price;



        // $Product->prop_id = auth()->user()->id; 
        
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $image_name = time() . '.' . $image->getClientOriginalExtension();
        //     $destination_path = public_path('images/');
        //     $image->move($destination_path, $image_name);
        //     $Product->image = $image_name;
        // }
    
        // $Magasine->save();
        return redirect()->route('dashboard');
    }

}
