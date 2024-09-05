<?php

namespace App\Http\Controllers;

use App\Models\Idea;

class DashboardController extends Controller
{
    public function index()
    {
        return view("dashboard", ["ideas" => Idea::orderBy('created_at', 'DESC')->get()]);
    }
}
