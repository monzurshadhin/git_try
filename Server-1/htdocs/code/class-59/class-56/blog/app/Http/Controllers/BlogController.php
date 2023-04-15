<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use DB;

class BlogController extends Controller
{
public function addblog()
{
    return view('admin.blog.add-blog', [
        'categories' => Category::all(),
        'authors'=>Author::all()
    ]);
}
    public function saveBlog(Request $request){
        Blog::saveBlog($request);
        return back()->with('message',' add success');

    }
    public function manageBlog(){
//       return $blog=Blog::where('status',1)->with('category:id,category_name')->get();
//        return $author=Author::where('status',1)->with('category:id,category_name')->get();
    return view('admin.blog.manage-blog',[
//        'blogs'=>Blog::all()

        'blogs'=>DB::table('blogs')
        ->join('categories','blogs.category_id','categories.id')
            ->join('authors','blogs.author_name','authors.id')
        ->select('blogs.*','categories.category_name','authors.author_name')
        ->get()
    ]);
    }
    public function editBlog( $id){
        return view('admin.blog.blog-edit',[
            'blog'=>Blog::find($id),
            'categories'=>Category::all()


        ]);
    }
    public function blogUpdate(Request $request){

        Blog::blogUpdate($request);

        return redirect('/manage-blog')->with('message',' edit success');;
    }

    public function blogDelete(Request $request){


        $blog= Blog::find($request->blog_id);
        if ($blog->image){
            if (file_exists($blog->image)){
            unlink($blog->image);
        }
        }
        $blog->delete();
        return redirect('/manage-blog');
    }

    public function updateBlogStatus($blog_id)
    {
        Blog::updateStatus($blog_id);
        return back();
    }

}
