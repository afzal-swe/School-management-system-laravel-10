<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Department;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{


    public function view()
    {
        return view('admin.teacher.view');
    }

    public function register_create()
    {
        $department = Department::all();
        return view('admin.teacher.register', compact('department'));
    }

    public function student_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed'],
        ]);

        $user = User::create([

            'name' => $request->name,
            'user_name' => $request->user_name,
            'user_status' => $request->user_status,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // dd($user);

        if ($user) {
            Teacher::create([
                'user_id' => $user->id,
                'department_id' => $request->department_id,
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'pass' => Hash::make($request->password),
            ]);
        }


        $notification = array('message' => 'Teacher Register Successfully', 'alert-type' => 'success');
        return redirect()->route('login')->with($notification);
    }
}
