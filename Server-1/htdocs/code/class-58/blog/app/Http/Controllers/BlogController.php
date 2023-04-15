<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BlogController extends Controller
{
    //
    public function addBlog()
    {
        return view('admin.blog.add-blog',[
            'categories'=>Category::all()
        ]);
    }

    public function saveBlog(Request $request)
    {
        Blog::addBlog($request);
        return back()->with('message','success');
    }

    public function manageBlog()
    {
        return view('admin.blog.manage-blog',[
            'blogs'=>DB::table('blogs')
                ->join('categories','blogs.category_id','categories.id')
                ->select('blogs.*','categories.category_name')
                ->get()
        ]);
    }

    public function editBlog($b_id)
    {
        return view('admin.blog.edit-blog',[
            'blog'=>Blog::find($b_id),
            'categories'=>Category::all()
        ]);
    }

    public function updateBlog(Request $request)
    {
        Blog::updateBlog($request);
        return back()->with('message','Blog successfully updated');
    }


    public function updateBlogStatus($b_id)
    {
        Blog::updateStatus($b_id);
        return back();
    }

    public function deleteBlog(Request $request)
    {
        $blog = Blog::find($request->blog_id);
        if($blog->image){
            unlink($blog->image);
        }
        $blog->delete();
        return back();
    }


}
