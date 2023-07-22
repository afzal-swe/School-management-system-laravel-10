<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserType;

class UserTypeController extends Controller
{
    public function index()
    {
        $user_type = UserType::all();
        return view('admin.user_type.index', compact('user_type'));
    }
}
