<?php

namespace App\Http\Controllers;

use App\Models\city;
use App\Models\Magasine;
use Illuminate\Http\Request;

class MagasineController extends Controller
{

    // public function home(Request $request)
    // {
    //     $data = city::orderBy('name', 'asc')->get();
    //     $data1 = Magasine::orderBy('name', 'asc')->get();
    //     // return view('createMagasine')->with('data',$data);
    //     return view('createMagasine',['cities' => $cities, 'magazines' => $magazines]);
    // }

    public function home(Request $request)
    {
        $cities = City::orderBy('name', 'asc')->get();
        $magazines = Magasine::orderBy('name', 'asc')->get();
        return view('createMagasine', ['cities' => $cities, 'magazines' => $magazines]);
    }

    public function store(Request $request)
    {
        $Magasine = new Magasine;
        $Magasine->name = $request->name;
        $Magasine->adress = $request->adress;
        $Magasine->teleNumber = $request->teleNumber;
        $Magasine->city_id = $request->city_id;
        $Magasine->prop_id = auth()->user()->id; // store the authenticated user's ID
        // You can replace `user_id` with whatever the name of the column you want to use for storing user ID.
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destination_path = public_path('images/');
            $image->move($destination_path, $image_name);
            $Magasine->image = $image_name;
        }
    
        $Magasine->save();
        return redirect()->route('dashboard');
    }

}
