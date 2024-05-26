<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Hi(): string
    {
        return "<h1>Hi, I'm the Home Controller!</h1>";
    }
}
