<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function edit(){

        return view('back.dashboard.password');


    }

    public function update(Request $request){

        $validated = $request->validate([
            'old_password'=> 'required|current_password',
            'password'=> 'required|min:6|confirmed',


        ]);
        Auth::guard('cms')->user()->update([
            'password' => Hash::make($validated['password'])    
    ]);
         
        return redirect()->route('back.password.edit');
    }
}
