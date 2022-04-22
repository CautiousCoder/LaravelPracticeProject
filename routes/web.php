<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontEndController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\websiteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('webPage.home');
// });
Route::get('/', [websiteController::class, 'home']);
Route::get('/home', [frontEndController::class, 'home'])->name('home');
Route::get('/products', [frontEndController::class, 'products'])->name('products');
Route::get('/about', [frontEndController::class, 'about'])->name('about');
Route::get('/contact', [frontEndController::class, 'contact'])->name('contact');
Route::get('/product/{slug}', [frontEndController::class, 'productshow'])->name('productShow');
Route::get('/category/{category:slug?}', [frontEndController::class, 'category'])->name('productCategory');
//Comment Route
Route::post('/comment/store', 'CommentController@store')->name('comment.add');
Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');
//Setting Route
Route::get('/setting/create', [SettingController::class, 'create'])->name('setting.create');
Route::post('/setting/store', [SettingController::class, 'store'])->name('setting.store');
Route::get('/setting/edit', [SettingController::class, 'edit'])->name('setting.edit');
Route::put('/setting/update', [SettingController::class, 'update'])->name('setting.update');

//Route::resource('/home', frontEndController::class);

//Admin Route

// Route::get('/admin', function () {
//     return view('admin.admin');
// });
//Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin', function () {
      return view('admin.admin');
    })->name('admin');
  
    Route::prefix('admin')->group(function () {
      Route::resource('product', ProductController::class);
      Route::resource('category', CategoryController::class);
      Route::resource('tag', TagController::class);






      //User Route
      Route::get('/profile/index', [UserController::class, 'index'])->name('user.index');
      Route::get('/profile/create', [UserController::class, 'create'])->name('user.create');
      Route::post('/profile/store', [UserController::class, 'store'])->name('user.store');
      Route::get('/profile/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
      Route::get('/profile/show/{id}', [UserController::class, 'show'])->name('user.show');
      Route::put('/profile/update/{id}', [UserController::class, 'update'])->name('user.update');
      Route::get('/profile/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');
      Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
  });
  
 // });


  Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');




// Route::get('/test', function () {
//     $products = App\Models\Product::all();
//     $id = 1;
//     foreach($products as $product){
//         $product->image = "https://picsum.photos/id/".$id."/700/400.jpg";
//         $product->save();
//         $id++;
//     }
//     return $products;
// });

// Route::get('/test1', function () {
//     $categories = App\Models\Category::all();
//     $id = 100;
//     foreach($categories as $category){
//         $category->image = "https://picsum.photos/id/".$id."/700/400.jpg";
//         $category->save();
//         $id++;
//     }
//     return $categories;
// });
