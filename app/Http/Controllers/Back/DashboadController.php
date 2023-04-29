<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class DashboadController extends Controller
{
     public function index(){

         $productCount = Product::count();
        $orderCount = Order::count();
        $reviewCount = Review::count();
        $userCount = User::count();
        return view('back.dashboard.index',compact('productCount', 'orderCount', 'reviewCount', 'userCount'));

     }
}
