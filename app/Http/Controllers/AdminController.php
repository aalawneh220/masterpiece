<?php

namespace App\Http\Controllers;

use App\Models\Adopt;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function addProduct(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->desc;
        $product->price = $request->price;
        $product->category = $request->category;
        $product->quantity = $request->quantity;
        $product->image = $request->image;
        $product->save();
        return Redirect::back();
    }

    public function addPet(Request $request)
    {
        $product = new Adopt();
        $product->name = $request->name;
        $product->desc = $request->desc;
        $product->phone = $request->phone;
        $product->address = $request->address;
        $product->image = $request->image;
        $product->user_id = auth()->id();
        $product->save();

        return Redirect::back();
    }
    public function destroy($id)
    {
        Product::find($id)->delete();

        return Redirect::back();
    }
}
