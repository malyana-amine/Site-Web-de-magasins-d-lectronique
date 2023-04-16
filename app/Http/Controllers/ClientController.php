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

        $categories = Category::all();
        $magazines = Magasine::all();
        $cities = city::all();
        return view('clientacuell', ['categories' => $categories, 'magazines' => $magazines, 'cities' => $cities]);

    }


    public function search(Request $request)
    {
        $category = $request->input('category');
        $searchTerm = $request->input('search');
    
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
    
        $results = $query->get();
        dd($results);
    
        return view('clientacuell', ['results' => $results]);
    }

}
