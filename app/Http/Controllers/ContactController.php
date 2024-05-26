<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function Hi(): string
    {
        return "<h1>Hi, I'm the contacts Controller!</h1>";
    }
}
