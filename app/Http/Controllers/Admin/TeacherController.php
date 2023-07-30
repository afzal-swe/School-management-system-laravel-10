<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Department;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class TeacherController extends Controller
{
    public function index()
    {
        $all_teacher = Teacher::paginate(10);
        return view('admin.teacher.index', compact('all_teacher'));
    }

    public function create()
    {
        $department = Department::all();
        return view('admin.teacher.create', compact('department'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed'],
        ]);

        $user_add = User::create([

            'name' => $request->name,
            'user_name' => $request->user_name,
            'user_status' => $request->user_status,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // dd($user);

        if ($user_add) {
            Teacher::create([
                'user_id' => $user_add->id,
                'department_id' => $request->department_id,
                't_id' => $request->t_id,
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'pass' => Hash::make($request->password),
            ]);
        }
        $notification = array('message' => 'Teacher Added Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }


    public function view()
    {
        $teacher = Teacher::all();
        return view('admin.teacher.view', compact('teacher'));
    }

    public function register_create()
    {
        $department = Department::all();
        return view('admin.teacher.register', compact('department'));
    }

    public function teacher_store(Request $request)
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

    // Teacher Profile Update // 
    public function teacher_profile()
    {
        $user = Auth::user();

        $teacher = Teacher::where('user_id', '=', $user->id)->first();
        return view('admin.teacher.profile_update', compact('teacher'));
    }

    public function teacher_profil(Request $request, $id)
    {
        $user = User::findOrFail($id)->update([
            'name' => $request->name,
            'user_name' => $request->user_name,
            'email' => $request->email,
        ]);


        if ($user) {
            Teacher::findOrFail($id)->update([

                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'barth' => $request->barth,
                'father' => $request->father,
                'mother' => $request->mother,
                'address' => $request->address,
                'post_code' => $request->post_code,
                'zip_code' => $request->zip_code,
                't_id' => $request->t_id,
            ]);
        }

        $notification = array('message' => 'Profile Update Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
        $edit = Teacher::findOrFail($id);
        return view('admin.teacher.edit', compact('edit'));
    }

    public function update(Request $request)
    {
        $update = $request->id;

        $user = User::findOrFail($update)->update([
            'name' => $request->name,
            'user_name' => $request->user_name,
            'email' => $request->email,
        ]);

        if ($user) {
            Teacher::findOrFail($update)->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'barth' => $request->barth,
                'father' => $request->father,
                'mother' => $request->mother,
                'address' => $request->address,
                'post_code' => $request->post_code,
                'zip_code' => $request->zip_code,
                't_id' => $request->t_id,
                'updated_at' => Carbon::now(),
            ]);
        }
        $notification = array('message' => 'Teacher info Update Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function destroy($id)
    {

        Teacher::findOrFail($id)->delete();

        $notification = array('message' => 'Delete Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
