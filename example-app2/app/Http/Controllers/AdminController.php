<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Models\Size;
use App\Models\Color;




class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $sizes = Size::all();
        $colors = Color::all();
        return view('admin.index', compact('categories', 'sizes', 'colors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$categories = Category::all();
        //return view('admin.index', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Handle image upload, if provided
        if ($request->hasFile('image')) {
            $productImage = $request->file('image');
            $productName = Str::slug($validatedData['name']); // Generate slug from product name

            // Create directory if it doesn't exist
            $directory = public_path('images/products/' . $productName);
            if (!file_exists($directory)) {
                mkdir($directory, 0777, true);
            }

            // Store image in the product's directory
            $imageDirectory = "images/products/$productName";
            $imagePath = "images/products/$productName/{$productImage->getClientOriginalName()}";
            Storage::disk('public')->put($imagePath, file_get_contents($productImage));
            $validatedData['image'] = $imageDirectory;
        }

        // Create a new product record
        $product = Product::create($validatedData);

        $product->categories()->attach($request->category_id);

        // Attach the selected sizes to the product
        if ($request->has('sizes')) {
            $product->sizes()->attach($request->sizes);
        }

        // Attach the selected colors to the product
        if ($request->has('colors')) {
            $product->colors()->attach($request->colors);
        }

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Product created successfully.');
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
