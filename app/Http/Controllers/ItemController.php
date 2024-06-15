<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the request data
    $request->validate([
        'pname' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'quantity' => 'required|integer',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Create a new item instance
    $item = new Item();
    $item->pname = $request->pname;
    $item->description = $request->description;
    $item->price = $request->price;
    $item->quantity = $request->quantity;

    // Handle the image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('images'), $imageName);
        $item->image = $imageName;
    }

    // Save the item to the database
    $item->save();

    // Redirect with success message
    return redirect()->route('items.index')->with('success', 'item Added Successfully');
}


    /**
     * Display the specified resource.
     */
    public function view($product_id)
{
    $i = Item::findOrFail($product_id);

    // Check if $item is not false before accessing its properties
    if ($i) {
        return view('items.view', compact('i'));
    } else {
        // Handle the case where the item is not found (e.g., show 404 page)
        abort(404);
    }
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($product_id)
    {
        $item = Item::findOrFail($product_id);

        // Check if $item is not false before accessing its properties
        if ($item) {
            return view('items.edit', compact('item'));
        } else {
            // Handle the case where the item is not found (e.g., show 404 page)
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $product_id) {
        // Validate the request data
        $request->validate([
            'pname' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Get the item from the database
        $item = Item::findOrFail($product_id);
        $item->pname = $request->pname;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->quantity = $request->quantity;
    
        // Handle the image upload
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($item->image) {
                $oldImagePath = public_path('images/' . $item->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
    
            // Upload the new image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
            $item->image = $imageName;
        }
    
        // Save the item to the database
        $item->save();
    
        // Redirect with success message
        return redirect()->route('items.index')->with('success', 'Item Updated Successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
