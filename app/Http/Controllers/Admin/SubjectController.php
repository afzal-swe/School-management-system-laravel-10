<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Subject;
use App\Models\Department;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    //
    public function index()
    {

        $subject = Subject::all();
        return view('admin.subject.index', compact('subject'));
    }

    public function create()
    {
        $classes = Classes::all();
        $department = Department::all();
        return view('admin.subject.create', compact('classes', 'department'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'class_id' => 'required',
            'department_id' => 'required',
            'subject' => 'required|unique:subjects|max:50',
        ]);

        Subject::insert([
            'class_id' => $request->class_id,
            'department_id' => $request->department_id,
            'subject' => $request->subject,
            'slug' => Str::of($request->subject)->slug('-'),
            'created_at' => Carbon::now(),
        ]);
        $notification = array('message' => 'Subject Added Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
        $department = Department::all();
        $classes = Classes::all();
        $edit = Subject::findOrFail($id);
        return view('admin.subject.edit', compact('department', 'edit', 'classes'));
    }

    public function update(Request $request)
    {
        $update = $request->id;

        Subject::findOrFail($update)->update([
            'class_id' => $request->class_id,
            'department_id' => $request->department_id,
            'subject' => $request->subject,
            'slug' => Str::of($request->subject)->slug('-'),
            'updated_at' => Carbon::now(),
        ]);
        $notification = array('message' => 'Subject Update Successfully', 'alert-type' => 'success');
        return redirect()->route('subject.index')->with($notification);
    }

    public function destroy($id)
    {

        Subject::findOrFail($id)->delete();
        $notification = array('message' => 'Subject Delete Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
