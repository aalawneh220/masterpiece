<?php

namespace App\Http\Controllers;

use App\Models\bill;
use App\Models\cart;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = cart::all();
        return view('cart', ['cart' => $cart]);
    }


    public function placeorder(Request $request)
    {

        $userId = auth()->id();
        $bill = new bill();
        $bill->user_id = $userId;
        $bill->name = $request->name;
        $bill->email = $request->email;
        $bill->address = $request->address;
        $bill->phone = $request->tel;
        $bill->save();

        $billId = bill::where('user_id', $userId)->first();

        $oreder = new Orders();
        $oreder->user_id = $userId;
        $oreder->bill_id = $billId['id'];
        $oreder->total = $request->total;
        $oreder->save();
        $userId = auth()->id();
        $cart = cart::where('user_id', $userId)->delete();
        return Redirect::back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $userId = auth()->id();

        $cartDB = cart::where('user_id', $userId)->where('product_id', $request->product_id)->get();
        if (!empty($cartDB[0])) {

            $updateCart = cart::find($cartDB[0]->id);
            $updateCart->quantity += 1;
            $updateCart->save();
            return Redirect()->back();
        }
        $cart = new cart();
        $cart->user_id = $userId;
        $cart->product_id = $request->product_id;
        $cart->price = $request->price;
        $cart->quantity = 1;
        $cart->save();
        return Redirect()->back();
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update($id, $quantity)
    {
        $cart = cart::find($id);
        $cart->quantity = $quantity;
        $cart->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */

    public function delete($id)
    {
        $cart = cart::find($id);
        $cart->delete();
        //
    }

    public function checkout()
    {
        $userId = auth()->id();
        $cart = cart::where('user_id', $userId)->get();
        return view('CheckOut', ['cart' => $cart]);
    }
}
