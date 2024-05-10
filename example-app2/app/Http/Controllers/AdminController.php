<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Models\Size;
use App\Models\Color;
use App\Models\Brand;
use App\Models\Subcategory;




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
        $products = Product::all();
        $brands = Brand::all();
        $subcategories = Subcategory::all();
        return view('admin.index', compact('categories', 'sizes', 'colors', 'products', 'brands', 'subcategories'));
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
            'gender' => 'required|in:male,female,kids',
        ]);

        $validatedData['gender'] = $request->input('gender');

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

        $product->subcategories()->attach($request->subcategory_id);

        $product->brands()->attach($request->brand_id);

        // Attach the selected sizes to the product
        if ($request->has('sizes')) {
            $product->sizes()->attach($request->sizes);
        }

        // Attach the selected colors to the product
        if ($request->has('colors')) {
            $product->colors()->attach($request->colors);
        }

        //$product->update(['gender' => $request->gender]);

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
    public function edit(Product $product)
    {
        $categories = Category::all();
        $sizes = Size::all();
        $colors = Color::all();
        $brands = Brand::all();
        $subcategories = Subcategory::all();
        $genderOptions = ['male', 'female', 'kids'];
        return view('admin.edit', compact('product', 'categories', 'sizes', 'colors', 'brands', 'subcategories', 'genderOptions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the product by its ID
        $product = Product::findOrFail($id);
        // Get the product name
        $productName = Str::slug($product->name); // Generate slug from product name

        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'gender' => 'required|in:male,female,kids',
        ]);

        $validatedData['gender'] = $request->input('gender');

        // Handle image upload, if provided
        if ($request->hasFile('image')) {
            $productImage = $request->file('image');

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

        // Update product details
        $product->update($validatedData);

        // Detach old sizes, categories, and colors
        $product->sizes()->detach();
        $product->categories()->detach();
        $product->colors()->detach();
        $product->subcategories()->detach();
        $product->brands()->detach();

        // Attach the newly selected sizes to the product
        if ($request->has('sizes')) {
            $product->sizes()->attach($request->sizes);
        }

        // Attach the newly selected categories to the product
        $product->categories()->attach($request->category_id);

        $product->subcategories()->attach($request->subcategory_id);

        $product->brands()->attach($request->brand_id);

        // Attach the newly selected colors to the product
        if ($request->has('colors')) {
            $product->colors()->attach($request->colors);
        }

        // Remove images if requested
        if ($request->has('remove_images')) {
            $imagesToRemove = $request->remove_images;
            foreach ($imagesToRemove as $imageName) {
                $imagePath = public_path($product->image . '/' . $imageName);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
        }

        // Handle uploading of new images
        if ($request->hasFile('new_images')) {
            $newImages = $request->file('new_images');
            foreach ($newImages as $newImage) {
                $imagePath = $newImage->store('images/products/' . $productName, 'public');
            }
        }

        //$product->update(['gender' => $request->gender]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // Get the product name
        $productName = $product->name;

        // Delete product images directory
        $productImagesDirectory = public_path('images/products/' . $productName);
        if (file_exists($productImagesDirectory)) {
            $this->deleteDirectory($productImagesDirectory);
        }

        // Delete the product
        $product->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Product deleted successfully.');
    }

    // Helper function to recursively delete a directory
    private function deleteDirectory($directory)
    {
        if (!file_exists($directory)) {
            return;
        }

        $files = array_diff(scandir($directory), ['.', '..']);
        foreach ($files as $file) {
            if (is_dir("$directory/$file")) {
                $this->deleteDirectory("$directory/$file");
            } else {
                unlink("$directory/$file");
            }
        }
        rmdir($directory);
    }
}
