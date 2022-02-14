<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AfterSaleController extends Controller
{
    public function index()
    {
        return view('client.after-sale.index');
    }
}
