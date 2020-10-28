<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogingController extends Controller
{
    public function indexloging($name){
        return 'Names :'.$name;
    }
}
