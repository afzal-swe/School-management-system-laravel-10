<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classes;

class ClassesController extends Controller
{
    // Show All Class function //

    public function index()
    {
        $class = Classes::all();
        return view('admin.class.index', compact('class'));
    }
}
