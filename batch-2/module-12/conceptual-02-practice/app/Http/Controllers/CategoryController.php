<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //show category blade
    public function showCreateCategory()
    {
        return view('pages.showCreateCategory');
    }
    //create category
    public function createCategory(Request $request)
    {
        $request->validate([
            'categoryName' => 'required|string|max:20|alpha|unique:categories',
        ]);

        //save category
        Category::create([
            'categoryName' => $request->categoryName,
        ]);

        return response()->json([
            'status' => 'success'
        ]);
        // return redirect()->back()->with('success', 'Category created successfully');

    }

    //show all category
    public function allCategory()
    {
        $categories = Category::latest()->get();
        return view('pages.allCategories', compact('categories'));
    }

    //show edit category blade
    public function showEditCategory($id)
    {
        $editCategory = Category::findOrFail($id);
        return view('pages.editCategory', compact('editCategory'));
    }

    //update category
    public function editCategory(Request $request, $id)
    {
        $request->validate([
            'categoryName' => 'required|string|max:20|alpha|unique:categories,categoryName',
        ]);

        $category = Category::findOrFail($id);
        $category->update([
            'categoryName' => $request->categoryName,
        ]);
        return redirect()->back()->with('success', 'Category updated successfully');
    }

    //delete category
    public function deleteCategory($id){
        $deleteCategory = Category::findOrFail($id);
        $deleteCategory->delete();
        return redirect()->back()->with('success','Category deleted successfully');
    }
}
