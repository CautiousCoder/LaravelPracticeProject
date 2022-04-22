<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;

class frontEndController extends Controller
{
    //
    public function home() {
        $categories = Category::get()->random(5);

        $firstCategory = $categories->splice(0,1);
        $secondCategory = $categories->splice(0,1);
        $thirdCategory = $categories->splice(0,1);
        $forthCategory = $categories->splice(0);

        $user = User::all();
        $tags = Tag::all();
        $products = Product::with(['categories','tags','user'])->orderBy('created_at','DESC')->take(3)->get();
        $LatestProducts = Product::with(['categories', 'tags','user'])->orderBy('created_at', 'DESC')->paginate(9);
        return view('webPage.home', compact(['products','LatestProducts','firstCategory','secondCategory','thirdCategory','forthCategory']));
    }
    public function products() {
        return view('webPage.products');
    }
    public function about() {
        return view('webPage.about');
    }
    public function contact() {
        return view('webPage.contact');
    }
    public function productshow($slug) {
        $product = Product::with(['categories','tags'])->where('slug', $slug)->first();
        
        if($product){
            $navcategories = Category::get()->random(5);
            $Products = Product::with(['categories', 'tags'])->orderBy('created_at', 'DESC')->paginate(9);
            $recentProducts = $Products;
            $user = User::all();
            return view('webPage.pages.productShow', compact(['product','recentProducts','user','navcategories']));
        } else {
            return redirect('/');
        }
    }

    public function category(Category $category) {
        $category = Category::where('slug', $category->slug)->first();
        if($category){
            $navcategories = Category::get()->random(5);
            $categories = Category::with('products')->get();
            return view('webPage.pages.category', compact(['category','categories','navcategories']));
        }
        else {
            return redirect()->route('home');
        }
    }
}
