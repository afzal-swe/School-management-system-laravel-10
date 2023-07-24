<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    //
    public function view()
    {
        return view('admin.student.view');
    }

    public function register_create()
    {
        return view('admin.student.register');
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
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // dd($user);

        if ($user) {
            Student::create([
                'user_id' => $user->id,
                'stu_name' => $request->name,
                'stu_phone' => $request->stu_phone,
                'stu_email' => $request->email,
                'stu_stu_pass' => Hash::make($request->password),
            ]);
        }


        $notification = array('message' => 'Register Successfully', 'alert-type' => 'success');
        return redirect()->route('login')->with($notification);
    }
}
