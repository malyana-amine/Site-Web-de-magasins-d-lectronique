<?php

namespace App\Http\Controllers;

use App\Models\city;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Magasine;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function home()
    {
        $products = Product::all();
        $magazines = Magasine::all();
        $users = User::all();
        return view('adminDash', ['users' => $users, 'magazines' => $magazines, 'products' => $products]);
    }
    public function magasineHome()
    {
        // $products = Product::all();
        $magazines = Magasine::all();
        // $users = User::all();
        return view('adminMagasine', ['magazines' => $magazines]);
    }
    public function aprovemagasine($id)
    {
        $magazines = Magasine::find($id);
        $magazines->update(['status' => '0']);
        return redirect()->route('adminMagasine');
    }
    public function adminCity()
    {
        $data = city::orderBy('name', 'asc')->get();
        return view('adminCities')->with('data',$data);
    }
    public function adminCategory()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        return view('adminCategories')->with('categories',$categories);
    }
    public function store(Request $request){
        $product = new Category();
        $input = $request->all();
        $product->fill($input);
        $product->save();
        return $this->adminCategory();
 }
 public function destroy($id)
 {
     $Category = Category::find($id);
     $Category->delete();
 
     return $this->adminCategory();
 }
}
