<?php

namespace App\Http\Controllers;

use App\Models\CartProduct;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();

        $cart = $user->cart;


        if (!$cart) {
            return view('cart.empty');
        }

        $products = $cart->cartProducts()->with('product')->get();

        // Group products by their product_id
        $groupedProducts = $products->groupBy('product_id');

        // Calculate total price for each product group
        $groupedProducts->transform(function ($items) {
            $totalPrice = $items->sum(function ($item) {
                return $item->product->price;
            });
            $items->first()->product->totalPrice = $totalPrice;
            return $items->first();
        });

        return view('cart.index', compact('cart', 'groupedProducts'));
    }

    // Other methods for creating, updating, and deleting cart items can go here...

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cartProduct = CartProduct::findOrFail($id);

        // Check action (add or remove)
        if ($request->action === 'add') {
            // Add the product to the cart
            $newCartProduct = new CartProduct();
            $newCartProduct->cart_id = $cartProduct->cart_id;
            $newCartProduct->product_id = $cartProduct->product_id;
            $newCartProduct->size = $cartProduct->size;
            $newCartProduct->save();
        } elseif ($request->action === 'remove') {
            // Remove one occurrence of the product from the cart
            $cartProduct->delete();
        } elseif ($request->action === 'remove_all') {
            // Remove all occurrences of the product from the cart
            $cartProduct->where('product_id', $cartProduct->product_id)->delete();
        }

        // Redirect back to the cart page
        return redirect()->route('cart.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
