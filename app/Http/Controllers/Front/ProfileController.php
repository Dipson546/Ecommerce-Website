<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Back\OrdersController;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Review;
use App\Models\OrderDetail;
use App\Models\Order;


use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public function index()
    {
        $user = Auth::user();
         
        $orders = $user->order()->with('order_details.product')->latest()->get();
    
        return view('front.pages.profile', compact('user', 'orders'));
    }


    public function edit(ProfileRequest $request)
    {
        $validated = $request->validated();

        $user = Auth::user();
        $user->update($validated);

        flash('profile updated')->success();
        return redirect()->route('front.profile.index');
    }


    public function password(Request  $request)
    {

        $validated = $request->validate([
            'old_password' => 'required|current_password',
            'password' => 'required|min:6|confirmed',


        ]);
        Auth::user()->update([
            'password' => Hash::make($validated['password'])
        ]);

        return redirect()->route('front.profile.index');
    }
}
