<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $Product = Product::all();
       
        $data = [

            'product' => $Product
        ];
        return view('shop', $data);
    }
 
}
