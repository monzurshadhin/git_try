<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\Customer;
use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    public function index()
    {
        $blog = Blog::where('status', 1)->with('category:id,category_name')->take(3)->get();
        return view('frontEnd.home.home', [
            'blogs' => $blog
//        ->take(3)
//        ->get()
        ]);
    }

    public function blogDetails($slug)
    {       $blogDetails= Blog::where('slug', $slug)->first();
            return view('frontEnd.blog.blog-details', [
            'blogDetails' => $blogDetails,
            'comments'=>Comment::where('blog_id',$blogDetails->id)->get()

        ]);
    }

    public function blogUserRegister()
    {
        return view('frontEnd.user.user-register');
    }

    public function saveUser(Request $request)
    {
//        return $request;
        Customer::saveUser($request);
        return back();

    }

    public function customerLogout()
    {
        Session::forget('customerId');
        Session::forget('customerName');
        return back();

    }

    public function customerLogin()
    {
        return view('frontEnd.user.user-login');
    }
    public function customerLoginCheck(Request $request){
//        return $request;
        $customerInfo=Customer::where('email',$request->user_name)
            ->orWhere('phone',$request->user_name)
            ->first();
//        return $customerInfo;
        if($customerInfo) {
            $existingPassword = $customerInfo->password;

          if (password_verify($request->password,$existingPassword)){
              Session::put('customerId',$customerInfo->id);
              Session::put('customerName',$customerInfo->name);
              return redirect('/');
          }else
          {
              return back()->with('message',' please enter right password');
          }
        }
        else
        {
            return back()->with('message','please use right email or phone');
        }
    }

 public function saveComment(Request $request){
        Comment::saveComments($request);
        return back();

 }

    public function categorySort($id)
    {
        $categoryWiseBlog = Blog::where('category_id',$id)->get();
        return $categoryWiseBlog;
    }
}
