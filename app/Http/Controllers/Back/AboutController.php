<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::paginate(10);
        
        return view('back.dashboard.about',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('back.about.createabout');
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
    public function edit(About $about)
    {
        
        return view('back.dashboard.editabout',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        $validated = $request->validate([
            'name' => 'required',
            'content' => 'required|string',


            'pics' => 'sometimes',
            
        ]);

           $validated['images'] = $about->images;
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

    
        $about->update($validated);

        return redirect()->route('back.about.index');

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