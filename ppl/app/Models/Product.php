<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    protected static function booted()
    {
        static::creating(function ($product) {
            $slug = Str::slug($product->name);
            while (static::where('slug', $slug)->exists()) {
                $slug = Str::slug($product->name . '-' . Str::random(5));
            }
            $product->slug = $slug;
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
