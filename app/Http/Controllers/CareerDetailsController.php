<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerDetailsController extends Controller
{
    public function index(){
        return view("common.career-details-multiple");
    }
}
