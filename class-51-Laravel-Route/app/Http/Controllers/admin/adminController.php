<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class adminController extends Controller
{
    public function adminNamespace(){
    	echo "It is example of Route namespace. Its admin is Abdur Rahim";
    }

     public function adminNamespace2(){
    	echo "It is example of Route namespace2. Its admin is Md Belal";
    }
}
