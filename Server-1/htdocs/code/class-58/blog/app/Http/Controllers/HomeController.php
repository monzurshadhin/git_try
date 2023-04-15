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
        $blog = Blog::where('status',1)->with('category:id,category_name')->take(3)->get();
        return view('frontEnd.home.home',[
            'blogs' => $blog
        ]);
    }

    public function blogDetails($slug){
        $blogDetails = Blog::where('slug',$slug)->with('category:id,category_name')->first();
        return view('frontEnd.blog.blog-details',[
            'blogDetails' => $blogDetails,
            'comments'=>Comment::where('blog_id',$blogDetails->id)->get(),
            'commentsCount'=>Comment::where('blog_id',$blogDetails->id)->get()->count(),
        ]);
    }

    public function blogUserRegister(){
        return view('frontEnd.user.user-register');
    }

    public function saveUser(Request $request){
        Customer::saveUser($request);
        return back();
    }

    public function customerLogout(){
        Session::forget('customerId');
        Session::forget('customerName');
        return back();
    }


    public function customerLogin(){
        return view('frontEnd.user.user-login');
    }


    public function customerLogInCheck(Request $request){
        $customerInfo = Customer::where('email',$request->user_name)
            ->orWhere('phone',$request->user_name)
            ->first();
        if($customerInfo){
            $existingPassword = $customerInfo->password;
            if(password_verify($request->password,$existingPassword)){
                session::put('customerId',$customerInfo->id);
                session::put('customerName',$customerInfo->name);
                return back();
            }else{
                return back()->with('message',"Wrong Credentials");
            }
        }else{
            return back()->with('message',"Wrong Credentials");
        }
    }


    public function saveComment(Request $request){
        Comment::saveComment($request);
        return back();
    }
}
