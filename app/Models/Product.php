<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;
use App\Models\Tag;

class Product extends Model
{
    use HasFactory;

    protected $fillabe = [
        'name','slug','price','description','image','user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class, 'category_product')->withTimestamps();
    }
    public function tags(){
        return $this->belongsToMany(Tag::class, 'product_tag')->withTimestamps();
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
