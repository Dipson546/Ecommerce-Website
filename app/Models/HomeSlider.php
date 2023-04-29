<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute as CastsAttribute;


class HomeSlider extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'subtitle', 'image_path', 'link', 'is_active', 'sort_order'];



    protected $casts = [
        'images' => 'array'
    ];


    public function thumbnail(): CastsAttribute {
        return CastsAttribute::get(function($value, $attrib) {
            return json_decode($attrib['images'])[0];
        });
    }

}
