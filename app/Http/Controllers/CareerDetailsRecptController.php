<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerDetailsRecptController extends Controller
{
    public function index(){
        return view("common.career-details-receptionist");
    }
}
