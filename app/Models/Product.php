<?php

namespace App\Models;

use Attribute as GlobalAttribute;
use Illuminate\Database\Eloquent\Attribute;
use Illuminate\Database\Eloquent\Casts\Attribute as CastsAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'summary', 'description', 'price', 
    'discounted_price', 'images', 'category_id',  'status', 'featured'];

    protected $casts = [
        'images' => 'array'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }


    public function thumbnail(): CastsAttribute {
        return CastsAttribute::get(function($value, $attrib) {
            return json_decode($attrib['images'])[0];
        });
    }




    public function order_details(){
        return $this->hasMany(OrderDetail::class);
    }
    
    public function reviews(){
        return $this->hasMany(Review::class );
    }
}
