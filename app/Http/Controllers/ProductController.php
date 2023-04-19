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
        $user = $request->user(); // get the authenticated user
        $magasine = Magasine::where('prop_id', $user->id)->first(); // get the magasine associated with the user
        $Categories = Category::orderBy('name', 'asc')->get();
        $products = Product::where('magasine_id',"$magasine->id")->get();

        return view('addProduct', ['Categories' => $Categories, 'products' => $products]);
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
        
        return redirect()->route('dashboard');
        
    }

    public function destroy($id)
    {

        Product::destroy($id);

        return redirect()->route('productshome');
    }

    public function edit($id)
{
    $products = Product::find($id);
    $Categories = Category::orderBy('name', 'asc')->get();

    return view('editProduct', ['Categories' => $Categories, 'products' => $products]);
}




public function update(Request $request,$id)
{
    $Products = Product::find($id);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $destination_path = public_path('images/');
        $image->move($destination_path, $image_name);
        $Products->image = $image_name;
        $Products->update();
        
    }

    $Products->update(request()->except('image'));

    return redirect()->route('dashboard');

}

}
