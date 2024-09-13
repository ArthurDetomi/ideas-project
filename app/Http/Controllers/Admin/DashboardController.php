<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view("admin.dashboard");
    }
}
