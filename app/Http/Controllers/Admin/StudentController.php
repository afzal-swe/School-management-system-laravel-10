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
    public function index()
    {
        $student = Student::paginate(10);
        return view('admin.student.index', compact('student'));
    }

    public function view()
    {
        $student = Student::all();
        return view('admin.student.view', compact('student'));
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
            'user_name' => $request->user_name,
            'user_status' => $request->user_status,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // dd($user);

        if ($user) {
            Student::create([
                'user_id' => $user->id,
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'pass' => Hash::make($request->password),
            ]);
        }


        $notification = array('message' => 'Student Registration Successfully', 'alert-type' => 'success');
        return redirect()->route('login')->with($notification);
    }
}
