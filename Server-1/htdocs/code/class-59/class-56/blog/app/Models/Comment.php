<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Comment extends Model
{
    use HasFactory;
    protected static $comment;
    Public static function saveComments($request){
        $request->validate([
            'comment'=>'required|min:10|max:200'
        ]);
        self::$comment =new Comment();
        self::$comment->customer_id =Session::get('customerId');
        self::$comment->blog_id=$request->blog_id;
        self::$comment->commnent=$request->comment;
        self::$comment->save();
    }
}
