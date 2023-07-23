<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Update_Profile;

class ProfileUpdateController extends Controller
{
    public function edit_profile(Request $request)
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    // public function update_profile(Request $request)
    // {
    //     return view('profile.edit', [
    //         'user' => $request->user(),
    //     ]);
    // }
}
