<?php

namespace Database\Seeders;

use App\Models\Admin;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name'=>'Dipson Pokharel',
            'email'=>'dipson@gmail.com',
            'password'=>Hash::make('Password#123'),
            'phone'=>'9824304633',
            'address'=>'Bagdol,Lalitpur',
            'status'=>'Active',
            'type'=>'Admin'
   
           ]);    }
}
