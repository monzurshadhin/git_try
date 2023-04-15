<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function addCategory(){

      return view('admin.category.add-category');
  }
    public function manageCategory(){

        return view('admin.category.manage-category',[
            'categories'=>Category::all()
        ]);
    }
    public function saveCategory(Request $request){
    Category::saveCategory($request);
    return back();


    }
    public function editCategory( $id){
      return view('admin.category.category-edit',[
          'category'=>Category::find($id)

      ]);
    }
    public function categoryUpdate(Request $request){

        Category::categoryUpdate($request);
//        return back();
        return redirect('/manage-category');
    }

 public function categoryDelete(Request $request){
//      return $request->category_id;

         $category= Category::find($request->category_id);
         if ($category->image){
             unlink($category->image);
         }

           $category->delete();
         return redirect('/manage-category');
     }

    public function updateCategoryStatus($category_id)
    {
        Category::updateStatus($category_id);
        return back();
     }

}
