<?php

namespace App\Http\Controllers;

use App\Models\city;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Magasine;
use Illuminate\Http\Request;

class ClientController extends Controller
{


    public function home(){

        // $products = Product::all();
        $products = Product::inRandomOrder()->take(8)->get();
        // $products = Product::all()->random(8);
        // dd($products);
        $categories = Category::all();
        $magazines = Magasine::all();
        $cities = city::all();
        return view('clientacuell', ['categories' => $categories, 'magazines' => $magazines, 'cities' => $cities, 'products' => $products ]);

    }


    public function search(Request $request)
    {
        $categories = Category::all();
        $magazines = Magasine::all();
        $cities = city::all();


        $category = $request->input('category');
        $searchTerm = $request->input('search');
        $cityId = $request->input('city');
    
        $query = Product::query();
    
        if ($category) {
            $query->where('categ_id', $category);
        }
    
        if ($searchTerm) {
            $query->where(function ($q) use ($searchTerm) {
                $q->where('name', 'like', "%$searchTerm%")
                    ->orWhere('description', 'like', "%$searchTerm%");
            });
        }
        
    if ($cityId) {
        $query->whereHas('magasine', function ($q) use ($cityId) {
            $q->where('city_id', $cityId);
        });
    }
    
        $products = $query->get();
        // dd($products);
    
        return view('clientacuell', ['products' => $products,'categories' => $categories, 'magazines' => $magazines, 'cities' => $cities]);
    }

    // public function edit($id)
    // {
    //     $products = Product::find($id);
    //     $Categories = Category::orderBy('name', 'asc')->get();
    
    //     return view('editProduct', ['Categories' => $Categories, 'products' => $products]);
    // }
    public function show($id)
    {
        $data = Product::find($id)
           ->join('magasines', 'products.magasine_id', '=', 'magasines.id')
           ->join('cities', 'magasines.city_id', '=', 'cities.id')
           ->select('products.name AS title', 'products.description AS product_descripton',
                    'magasines.name AS magasine_name', 'cities.name AS city_name',
                    'magasines.adress AS address', 'products.price')
           ->first();


        $cities = city::all();
        $categories = Category::orderBy('name', 'asc')->get();
    
        return view('product', compact('data', 'cities', 'categories'));
    }



}
