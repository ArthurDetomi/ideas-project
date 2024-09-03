<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = [
            [
                "name" => "Arthur",
                "age" => 23
            ],
            [
                "name" => "João",
                "age" => 32
            ]
        ];

        return view("dashboard", ["users" => $users]);
    }
}
