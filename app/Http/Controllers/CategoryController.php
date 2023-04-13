<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function home(Request $request)
    {
        return $this->index();
    }

    public function store(Request $request){
        $product = new Category();
        $input = $request->all();
        $product->fill($input);
        $product->save();
        return $this->index();
 }

 public function index()
 {
    //  $data = Category::all();
    //  return view('addCategory')->with('data',$data);
    $data = Category::orderBy('name', 'asc')->get();
    return view('adminCategories')->with('data',$data);
 }

 public function destroy($id)
{
    $Category = Category::find($id);
    $Category->delete();

    return $this->index();
}
}
