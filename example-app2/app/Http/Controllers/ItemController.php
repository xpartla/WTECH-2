<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Return a view that displays a list of items
        return view('item.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Return the view that displays the specific item identified by $id
        $product = Product::with('colors', 'sizes', 'categories')->find($id);

        // Fetch file paths for each product
        $filePaths = [];
        $folderPath = public_path($product->image);
        $filePaths[$product->id] = $this->getAllFilePaths($folderPath);

        // Convert the PHP array to a JSON string
        $filePathsJson = json_encode($filePaths);

        return view('item.index', compact('product', 'filePathsJson'));
    }

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

    public function getAllFilePaths($folderPath): array
    {
        // Check if the directory exists
        if (!\File::isDirectory($folderPath)) {
            return [];
        }

        // Get all files in the directory
        $files = \File::allFiles($folderPath);

        // Iterate through the files and build an array of full paths
        $filePaths = [];
        foreach ($files as $file) {
            $path = $folderPath . '/' . $file->getRelativePathname();
            $filePaths[] = str_replace('\\', '/', $path);
        }

        return $filePaths;
    }

}
