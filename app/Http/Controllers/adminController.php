<?php

namespace App\Http\Controllers;

use App\Models\city;
use App\Models\User;
use App\Mail\TestEmail;
use App\Models\Product;
use App\Models\Category;
use App\Models\Magasine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        
        $propId = $magazines->prop_id;
        // dd($propId);
        $user = User::find($propId);
        
        $user->update(['roleId' => "2"]);
        $user->save();


        // mailing
        $mailData = [
            "name" => "$user->name",
            "dob" => "lwa9t"
        ];
    
        Mail::to("$user->email")->send(new TestEmail($mailData));

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
  