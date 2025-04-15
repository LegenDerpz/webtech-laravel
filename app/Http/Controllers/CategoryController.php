<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('categories.index')->with('categories', $categories);
    }

    public function edit($id){
        $category = Category::find($id);

        return view('categories.update')->with('category', $category);
    }

    public function update(Request $request, $id){
        $categories = Category::find($id);
        $categories->category_name = $request->input('category_name');
        $categories->category_description = $request->input('category_description');
        $categories->updated_at = now();

        $categories->save();

        Category::where(['id' => $id])->update([
            'category_name' => $request->input('category_name'),
            'category_description' => $request->input('category_description')
        ]);

        return redirect()->to('/categories');
    }
}
