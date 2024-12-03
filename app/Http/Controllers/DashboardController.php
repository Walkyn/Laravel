<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function showCharts()
    {
        return view('graficos.charts');
    }
}
