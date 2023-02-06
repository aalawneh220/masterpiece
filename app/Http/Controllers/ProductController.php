<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {

        if ($request->filter) {

            if ($request->filter == "50-100") {
                $product = Product::where('price', '>', 50)->where('price', '<', 100)->get();
                // dd($product);
                $data = [
                    'product' => $product
                ];
                return view('shop', $data);
            } elseif ($request->filter == '100-200') {
                $product = Product::where('price', '>', 100)->where('price', '<', 200)->get();
                $data = [
                    'product' => $product
                ];
                return view('shop', $data);
            } elseif ($request->filter == '200-300') {
                $product = Product::where('price', '>', 200)->where('price', '<', 300)->get();
                $data = [
                    'product' => $product
                ];
                return view('shop', $data);
            } elseif ($request->filter == '300-400') {
                $product = Product::where('price', '>', 300)->where('price', '<', 400)->get();
                $data = [
                    'product' => $product
                ];
                return view('shop', $data);
            }

            // dd($request->filter);
        } else {

            $product = Product::all();
            // dd($product);
            $data = [

                'product' => $product
            ];
            return view('shop', $data);
        }
    }

    public function searchKeyword(Request $request)
    {

        if ($request->search) {

            $result = Product::where('name', 'LIKE', "%{$request->search}%")->get();

            $data = [
                'product' => $result
            ];

            return view('shop', $data);
        }
    }
}
