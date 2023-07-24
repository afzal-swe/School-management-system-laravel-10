<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Update_Profile;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Student;

class ProfileUpdateController extends Controller
{


    // public function edit_profile(Request $request)
    // {
    //     return view('profile.edit', [
    //         'user' => $request->user(),
    //     ]);
    // }

    public function advance_info()
    {
        if (Auth::id()) {
            $id = Auth::user()->id;
            $user = Student::where('user_id', '=', $id)->get();
            return view('admin.student.advance_info', compact('user'));
        }
    }
}
