<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageMiddleware extends Controller
{
    function hallo(){
        return "hello nama anda secure";
    }
}
