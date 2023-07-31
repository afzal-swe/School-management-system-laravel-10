<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class DepartmentController extends Controller
{
    public function index()
    {
        $department = Department::all();
        return view('admin.department.index', compact('department'));
    }

    public function create()
    {

        return view('admin.department.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'department' => 'required|unique:departments|max:30',
        ]);

        Department::insert([
            'department' => $request->department,
            'department_slug' => Str::of($request->department)->slug('-'),
            'created_at' => Carbon::now(),
        ]);
        $notification = array('message' => 'Added A New Department Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
        $edit = Department::findOrFail($id);
        return view('admin.department.edit', compact('edit'));
    }

    public function update(Request $request)
    {
        $update = $request->id;

        Department::findOrFail($update)->update([
            'department' => $request->department,
            'department_slug' => Str::of($request->department)->slug('-'),
            'updated_at' => Carbon::now(),
        ]);
        $notification = array('message' => 'Department Name Update Successfully', 'alert-type' => 'success');
        return redirect()->route('department.index')->with($notification);
    }

    public function destroy($id)
    {

        Department::findOrFail($id)->delete();

        $notification = array('message' => 'Delete Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
