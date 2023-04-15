<?php


namespace App\classes;


class NewClass
{
    public $message;
    public function __construct()
    {
        $this->message='this is from construct';
    }
    public function printMessage(){
        echo $this->message;
//        echo $value;
    }

}