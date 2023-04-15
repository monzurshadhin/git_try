<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{ static $name;
    use HasFactory;
    public static function saveAuthor($request){
        self::$name =new Author();
        self::$name->author_name=$request->author_name;
        self::$name->save();
    }
}
