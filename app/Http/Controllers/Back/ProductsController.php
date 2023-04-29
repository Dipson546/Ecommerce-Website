<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();
        
        return view('back.dashboard.products',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('back.dashboard.createproduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'summary' => 'required|string',
            'description' => 'required|string',
            'product_sku' => 'nullable',
            'product_color' => 'nullable',
            'product_size' => 'nullable',
            'price' => 'required|numeric',
            'discounted_price' => 'nullable|numeric',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|in:Active,InActive',
            'popular' => 'required|in:Yes,No',
            'featured' => 'required|in:Yes,No',
            'pics' => 'required',
            'pics.*' => 'required|image'
            
        ]);
        foreach($validated['pics'] as $pic){
            $img = Image::make($pic);

            $filename = "IMG".date('YmdHis').rand(100,9999).".jpg";

            $img->resize(1280,720,function($constraint){
              $constraint->aspectRatio();
              $constraint->upsize();

            })->save(public_path("images/{$filename}"));  
            
            $validated['images'][] = $filename;
                  
        }
        product::create($validated);

        return redirect()->route('back.product.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        
        return view('back.dashboard.editproduct',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required',
            'summary' => 'required|string',
            'description' => 'required|string',
            'product_sku' => 'nullable',
            'product_color' => 'nullable',
            'product_size' => 'nullable',
            'price' => 'required|numeric',
            'discounted_price' => 'nullable|numeric',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|in:Active,InActive',
            'popular' => 'required|in:Yes,No',
            'featured' => 'required|in:Yes,No',

            'pics' => 'sometimes',
            
        ]);

           $validated['images'] = $product->images;
           if($request->hasFile('pics')){
            foreach($validated['pics'] as $pic){
                $img = Image::make($pic);
    
                $filename = "IMG".date('YmdHis').rand(100,9999).".jpg";
    
                $img->resize(1280,720,function($constraint){
                  $constraint->aspectRatio();
                  $constraint->upsize();
    
                })->save(public_path("images/{$filename}"));  
                
                $validated['images'][] = $filename;
                      
            }

           }

    
        $product->update($validated);

        return redirect()->route('back.product.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        
        $product->delete();

        return redirect()->route('back.product.index');
    }
}