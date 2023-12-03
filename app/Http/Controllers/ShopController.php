<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function index(){
        return view ('shop');

    // $shop = Auth::user();
    // $data = $shop->api()->rest('GET', '/admin/products.json');
    // $products   = $data['body']->products;
    // return view('welcome', compact('products'));
}}

