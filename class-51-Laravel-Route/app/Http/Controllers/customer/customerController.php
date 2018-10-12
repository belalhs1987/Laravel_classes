<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class customerController extends Controller
{
    public function customerMethod(){
    	echo "It is a example of combination of prefix and namespace";
    }
}
