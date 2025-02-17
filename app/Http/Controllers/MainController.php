<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        echo "Main page";
    }

    public function newNote()
    {
        echo "New note page";
    }
}
