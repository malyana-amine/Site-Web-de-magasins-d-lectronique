<?php

namespace App\Http\Controllers;

// use auth;
use App\Models\city;
use App\Models\Product;
use App\Models\Category;
use App\Models\Magasine;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function home()
    {
        $data = Magasine::where('prop_id',auth()->user()->id)->where('status','1')->first();
        $cities = city::all();


        if(is_null($data)){    
            return view('propdash', ['data' => $data, 'cities' => $cities]);
        }
        else
         $products = Product::where('magasine_id', $data->id)->get();
        return view('propstatistique', ['data' => $data, 'cities' => $cities, 'products' => $products]);
    }

    public function productuser(){

        $data = Magasine::where('prop_id',auth()->user()->id)->where('status','1')->first();
        $products = Product::where('magasine_id', $data->id)->get();
        $Categories = Category::orderBy('name', 'asc')->get();
        // return view('userproduct')->with('Categories',$Categories);
        return view('userproduct', ['data' => $data, 'Categories' => $Categories, 'products' => $products]);

        
    }

    public function store(Request $request)
    {

        $inputs = $request->all();
        $data = Magasine::where('prop_id',auth()->user()->id)->first();
        $Categories = Category::orderBy('name', 'asc')->get();

        $inputs['magasine_id'] = $data->id;


         if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destination_path = public_path('images/');
            $image->move($destination_path, $image_name);
            $inputs['image'] = $image_name;
        }


        Product::create($inputs);
        
        return $this->productuser();
        
    }
     
}
