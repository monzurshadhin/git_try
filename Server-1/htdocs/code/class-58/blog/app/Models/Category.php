<?php

namespace App\Models;

use Faker\Extension\Extension;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    private static $category,$image,$imageNewName,$directory,$imageUrl,$update;
    public static function saveCategory($request)
    {
        self::$category = new Category();
        self::$category->category_name = $request->category_name;
        self::$category->image = self::saveImage($request);
        self::$category->save();

    }

    public static function updateCategory($request)
    {
        self::$update = Category::find($request->id);
        self::$update->category_name= $request->category_name;
        if($request->file('image')){
            if (self::$update->image){
                if (file_exists(self::$update->image)){
                    unlink(self::$update->image);
                    self::$update->image= self::saveImage($request);
                }
            }
            else{
                self::$update->image= self::saveImage($request);
            }
        }

        self::$update->save();
//        return self::$update;
    }

    private static function saveImage($request)
    {
        self::$image = $request->file('image');
        self::$imageNewName = 'category-' . rand() . '.' . self::$image->Extension();
        self::$directory = 'admin-asset/upload-image/category/';
        self::$imageUrl= self::$directory.self::$imageNewName;
        self::$image->move(self::$directory,self::$imageNewName);
        return self::$imageUrl;
    }

    public static function updateStatus($c_id)
    {
        $category = Category::find($c_id);
        if ($category->status==1){
            $category->status=0;
        }else{
            $category->status=1;
        }
        $category->save();
    }
}
