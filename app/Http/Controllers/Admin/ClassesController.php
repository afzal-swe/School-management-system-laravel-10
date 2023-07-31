<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classes;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use App\Models\Department;

class ClassesController extends Controller
{
    // Show All Class function //

    public function index()
    {
        $class = Classes::paginate(10);
        return view('admin.class.index', compact('class'));
    }
    // Create Class function //
    public function create()
    {
        $department = Department::all();
        return view('admin.class.create', compact('department'));
    }
    // Store Class function //
    public function store(Request $request)
    {

        $request->validate([
            'department_id' => 'required',
            'class' => 'required|max:25',

        ]);

        Classes::insert([
            'department_id' => $request->department_id,
            'class' => $request->class,
            'slug' => Str::of($request->class)->slug('-'),
            'created_at' => Carbon::now(),
        ]);
        $notification = array('message' => 'Class Added Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
        $department = Department::all();
        $edit = Classes::findOrFail($id);

        return view('admin.class.edit', compact('edit', 'department'));
    }

    public function update(Request $request)
    {
        $update = $request->id;

        Classes::findOrFail($update)->update([
            'department_id' => $request->department_id,
            'class' => $request->class,
            'slug' => Str::of($request->class)->slug('-'),
            'updated_at' => Carbon::now(),
        ]);
        $notification = array('message' => 'Class Update Successfully', 'alert-type' => 'success');
        return redirect()->route('class.index')->with($notification);
    }

    public function destroy($id)
    {

        Classes::findOrFail($id)->delete();
        $notification = array('message' => 'Class Delete Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
