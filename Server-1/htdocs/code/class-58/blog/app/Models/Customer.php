<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Customer extends Model
{
    use HasFactory;
    public static $customer;
    public static function saveUser($request){
        self::$customer = new Customer();
        self::$customer->name = $request->name;
        self::$customer->email = $request->email;
        self::$customer->phone = $request->phone;
        self::$customer->password = bcrypt($request->password);
        self::$customer->save();

        session::put('customerId',self::$customer->id);
        session::put('customerName',self::$customer->name);

    }
}
