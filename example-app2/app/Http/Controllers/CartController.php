<?php

namespace App\Http\Controllers;

use App\Models\CartProduct;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->check()) {
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
        } else {
            return view('login.index');
        }
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


    public function checkout(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'delivery_type' => ['required', Rule::in(['Vyzdvihnutie na predajni', 'Doručenie Packeta', 'Doručenie kuriérom'])],
            'payment_type' => ['required', Rule::in(['Platba Kartou', 'Apple Pay', 'Dobierka'])],
            'total_price' => 'required|numeric|min:0',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'country' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'postal_code' => 'required|string|max:20',
            'city' => 'required|string|max:255'
        ]);

        // Create a new order
        $order = new Order();
        $order->user_id = Auth::id();
        $order->name = $request->input('name');
        $order->surname = $request->input('surname');
        $order->delivery_type = $request->input('delivery_type');
        $order->payment_type = $request->input('payment_type');
        $order->status = 'created';
        $order->total_price = $request->input('total_price');
        $order->email = $request->input('email');
        $order->phone_number = $request->input('phone_number');
        $order->country = $request->input('country');
        $order->address = $request->input('address');
        $order->postal_code = $request->input('postal_code');
        $order->city = $request->input('city');


        // Save the order
        $order->save();

        // Retrieve the user's cart items
        $user = auth()->user();
        $cart = $user->cart;
        $cartProducts = $cart->cartProducts;

        // Transfer cart items to the order
        foreach ($cartProducts as $cartProduct) {
            $orderProduct = new OrderProduct();
            $orderProduct->order_id = $order->id;
            $orderProduct->product_id = $cartProduct->product_id;
            $orderProduct->size = $cartProduct->size;
            $orderProduct->save();
        }

        foreach ($cartProducts as $cartProduct) {
            $cartProduct->delete();
        }
        //$cart->delete();

        return redirect()->route('main.index')->with('success', 'Order placed successfully!');
    }

}
