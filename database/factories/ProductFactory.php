<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Intervention\Image\Facades\Image;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $images = [];

        for($i = 0; $i <2; $i++) {
            $img = Image::make("https://loremflickr.com/1280/720?random={$i}");
            $filename = "IMG".date('YmdHis').rand(1000,9999).".jpg";

            $img->resize(1280, 720, function($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save(public_path("images/{$filename}"));

            $images[] = $filename;
        }

        return [
            'name' => fake()->name(),
            'summary' => fake()->realText(1000),
            'description' => fake()->realTextBetween(2000, 4000),
            'price' => rand(500, 500000),
            'category_id' => Category::select('id')->inRandomOrder()->first()->id,
            'images' => $images
        ];
    }
}
