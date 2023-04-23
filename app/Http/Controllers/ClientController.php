<?php

namespace App\Http\Controllers;

use App\Models\city;
use App\Models\User;
use App\Models\comment;
use App\Models\Product;
use App\Models\Category;
use App\Models\Magasine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ClientController extends Controller
{


    public function home(){

        // $products = Product::all();
        $products = Product::inRandomOrder()->take(8)->get();
        $products5 = Product::inRandomOrder()->take(5)->get();
        // $products = Product::all()->random(8);
        // dd($products);
        $categories = Category::all();
        $magazines = Magasine::all();
        $cities = city::all();
        return view('clientacuell', ['categories' => $categories, 'magazines' => $magazines, 'cities' => $cities, 'products' => $products, 'products5' => $products5 ]);

    }


    public function search(Request $request)
    {
        $categories = Category::all();
        $magazines = Magasine::all();
        $cities = city::all();
        $products5 = Product::inRandomOrder()->take(5)->get();


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
    
        return view('clientacuell', ['products' => $products,'categories' => $categories, 'magazines' => $magazines, 'cities' => $cities, 'products5' => $products5]);
    }
    public function show($id)
    {
        $product = Product::find($id);
        // $user = Auth::user()->id;
        $user = User::all();
        // $comment = comment::->get();
        // // 
        $comments = Comment::where('product_id',$id)->join('users', 'comments.user_id', '=', 'users.id')
            ->select('users.name', 'comments.comment', 'comments.image')
            ->get();
        // dd($comments);
        $data = Product::join('magasines', 'products.magasine_id', '=', 'magasines.id')
       ->join('cities', 'magasines.city_id', '=', 'cities.id')
       ->where('products.id', $id) // add a where clause to filter by the product id
       ->select('products.name AS title', 'products.description AS product_description',
                'magasines.name AS magasine_name', 'cities.name AS city_name',
                'magasines.adress AS address', 'products.price', 'products.image')
       ->first();
        //    dd($data);


        $cities = city::all();
        $categories = Category::orderBy('name', 'asc')->get();
    
        return view('product', compact('data', 'cities', 'categories','product','user','comments'));
    }


    public function addcomment(Request $request){

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destination_path = public_path('images/');
            $image->move($destination_path, $image_name);
            $comment = new comment(request()->except('image'));
            $comment->image = $image_name;
            $comment->save();
        } else {
            comment::create(request()->all());
        }
        $id = $request->input('product_id');
        // dd($id);
    
        // return $this->show($id);
        return Redirect::Route('viewproduct',$id);
    }

}
