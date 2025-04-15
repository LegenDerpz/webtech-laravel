<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index(){
        $items = Item::all();

        return view('inventory.index')->with('items', $items);
    }

    public function edit($id){
        $item = Item::find($id);
        $categories_data = Category::all();

        $categories = [];

        foreach($categories_data as $category){
            $categories[$category->id] = $category->category_name;
        }

        return view('inventory.update', compact('item', 'categories'))->with([
            'item' => $item,
            'categories' => $categories
        ]);
    }

    public function update(Request $request, $id){
        $items = Item::find($id);
        $items->name = $request->input('name');
        $items->price = $request->input('price');
        $items->quantity = $request->input('quantity');
        $items->category_id = $request->input('category_id');
        $items->updated_at = now();

        $items->save();

        Item::where(['id' => $id])->update([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
            'category_id' => $request->input('category_id')
        ]);

        return redirect()->to('/inventory');
    }
}
