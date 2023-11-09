<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function simpleMessage(){
        return ("Hello, Laravel!");
    }
}
