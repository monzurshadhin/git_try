<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function addCategory()
    {
        return view('admin.category.add-category');
    }

    public function saveCategory(Request $request)
    {
        Category::saveCategory($request);
        return back();
    }

    public function manageCategory()
    {
        return view('admin.category.manage-category',[
            'categories'=>Category::all(),
        ]);
    }

    public function editCategory($c_id)
    {
        return view('admin.category.edit-category',[
            'category'=>Category::find($c_id)
        ]);
    }

    public function updateCategory(Request $request)
    {
        Category::updateCategory($request);
        return back();

    }

    public function updateStatus($c_id)
    {
        Category::updateStatus($c_id);
        return back();
    }

    public function deleteCategory(Request $request)
    {
        $category = Category::find($request->category_id);
        if ($category->image){
            unlink($category->image);
        }
        $category->delete();
        return back();
    }
}
