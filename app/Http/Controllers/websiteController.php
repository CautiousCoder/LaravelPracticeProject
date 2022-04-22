<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use App\Models\User;

class websiteController extends Controller
{
    //
    public function home() {
        $categories = Category::get()->random(5);

        $firstCategory = $categories->splice(0,1);
        $secondCategory = $categories->splice(0,1);
        $thirdCategory = $categories->splice(0,1);
        $forthCategory = $categories->splice(0);

        $tags = Tag::all();
        $products = Product::with(['categories','tags'])->orderBy('created_at','DESC')->take(3)->get();
        $LatestProducts = Product::with(['categories', 'tags'])->orderBy('created_at', 'DESC')->paginate(9);
        return view('webPage.home', compact(['products','LatestProducts','firstCategory','secondCategory','thirdCategory','forthCategory']));
    }
}
