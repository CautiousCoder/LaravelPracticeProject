<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProductController extends Controller
{
    
    public function __construct()
    {
       $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();
        $tags = Tag::all();
        $products = Product::with(['categories','tags'])->orderBy('created_at', 'DESC')->paginate('20');
        return view('admin.product.index', compact('products'))->with('i',1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        $tags = Tag::all();
        //$products = Product::all()->with(['categories','tags']);
        return view('admin.product.create', compact(['categories','tags']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $this->validate($request, [
            'name' => 'required',
            'image' => 'required|image',
        ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->slug =  str_slug($request->input('name').' '.$product->id, '-');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->user_id = Auth::user()->id;
        
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('post/',$filename);
            $product->image = 'post/'.$filename;
        }
        else {
            $product->image = 'noImage.jpg';
        }
        $product->save(); 

        $product->categories()->attach($request->category);
        $product->tags()->attach($request->tags);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.product.show', compact(['product','categories','tags']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.product.edit', compact(['product','categories','tags']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $this->validate($request, [
            'name' => 'sometimes|nullable',
            
        ]);

        $product->name = $request->input('name');
        $product->slug =  str_slug($request->input('name').' '.$product->id, '-');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('post/',$filename);
            $product->image = 'post/'.$filename;
        }
        
        $product->save();
        
        $product->categories()->sync($request->category);
        $product->tags()->sync($request->tags);

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        if($product) {
            $product->delete();
            return redirect()->route('product.index');
        }
    }
}
