<?php

namespace App\Http\Controllers\Loan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GoldController extends Controller
{
    public function index()
    {
        return view("common.Loan.gold");
    }
}