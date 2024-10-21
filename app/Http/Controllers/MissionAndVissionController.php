<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MissionAndVissionController extends Controller
{
    public function index()
    {
        return view("common.mission&vission");
    }
}
