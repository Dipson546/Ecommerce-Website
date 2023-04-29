<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    
public function home(){


    $featured = Product::whereStatus('Active')
    ->whereFeatured('Yes')
    ->get();    

    $popular = Product::whereStatus('Active')
    ->wherePopular('Yes')
    ->limit(4)
    ->get();

    $latest = Product::whereStatus('Active')
    ->latest()
    ->limit(4)
    ->get();

    $top = Product::whereStatus('Active')
    ->withCount('reviews')
    ->limit(4)
    ->orderBy('reviews_count','DESC')
    ->get();

return view('front.pages.index', compact('featured', 'latest','popular','top'));

}


public  function category(Category $category) {
  
    $products = $category->products()->paginate(24);

    return view('front.pages.category', compact('category', 'products'));
}


    

public function search(Request $request) {
    $term = $request->term;

    $products = Product::whereStatus('Active')
        ->where(function($query) use ($term) {
            $query->where('name', 'like', '%'.$term.'%')
                ->orWhereHas('category', function($query) use ($term) {
                    $query->where('name', 'like', '%'.$term.'%');
            });
            
        })
        ->paginate(24);

    return view('front.pages.search', compact('term', 'products'));
}

public function product(Product $product) {
    if($product->status == 'Inactive') {
        abort(404);
    }

    $similars = Product::whereStatus('Active')
        ->whereCategoryId($product->category_id)
        ->where('id', '!=', $product->id)
        ->inRandomOrder()
        ->limit(4)
        ->with(['reviews'])
        ->get();


    return view('front.pages.product', compact('product', 'similars'));
}


    public function review(Request $request, $id){
        $validated = $request->validate([
        'comment' => 'required|string',
            // 'rating' => 'required|numeric|min:1|max:5'
        
        ]);

        $validated['user_id'] = $request->user()->id;
        $validated['product_id'] = $id;

        Review::create($validated);

        flash('thank you for your review')->success();

        return redirect()->route('front.home',[$id]);


        
    }


    public function about(){
        $about = About::get();


        return view('front.pages.about',compact('about'));
    }

}

// public function product(){
 
//     $products = Product::paginate(10);
    
//     $latest = Product::whereStatus('Active')
//     ->latest()
//     ->paginate(3);

    
//     return view('front.pages.product', compact('products','latest'));


// }











