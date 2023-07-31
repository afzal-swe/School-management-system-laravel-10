<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserType;
use App\Models\Department;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class UserTypeController extends Controller
{
    public function index()
    {
        $user_type = UserType::all();
        return view('admin.user_type.index', compact('user_type'));
    }

    public function create()
    {
        $department = Department::all();
        return view('admin.user_type.create', compact('department'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_department' => 'required',
            'user_type' => 'required',

        ]);

        UserType::insert([
            'user_department' => $request->user_department,
            'user_type' => $request->user_type,

            'user_slug' => Str::of($request->user_type)->slug('-'),
            'created_at' => Carbon::now(),
        ]);
        $notification = array('message' => 'User Type Added Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
        $department = Department::all();
        $edit = UserType::findOrFail($id);

        return view('admin.user_type.edit', compact('edit', 'department'));
    }

    public function update(Request $request)
    {
        $update = $request->id;

        UserType::findOrFail($update)->update([
            'user_department' => $request->user_department,
            'user_type' => $request->user_type,

            'user_slug' => Str::of($request->user_type)->slug('-'),
            'updated_at' => Carbon::now(),
        ]);
        $notification = array('message' => 'User Type Update Successfully', 'alert-type' => 'success');
        return redirect()->route('user_type.index')->with($notification);
    }

    public function destroy($id)
    {

        UserType::findOrFail($id)->delete();

        $notification = array('message' => 'User Delete Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
