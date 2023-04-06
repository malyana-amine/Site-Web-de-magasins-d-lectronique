<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function home(Request $request)
    {
        return $this->index();
    }

    public function store(Request $request){
        $product = new City();
        $input = $request->all();
        $product->fill($input);
        $product->save();
        return $this->index();
 }

 public function index()
 {
     $data = city::orderBy('name', 'asc')->get();
     return view('addcity')->with('data',$data);
 }

 public function destroy($id)
{
    $City = City::find($id);
    $City->delete();

    return $this->index();
}
}

