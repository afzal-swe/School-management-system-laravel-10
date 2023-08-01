<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\Classes;
use App\Models\Department;
use Illuminate\Support\Carbon;

class NoticeController extends Controller
{
    //

    public function index()
    {
        $notice = Notice::paginate(10);
        return view('admin.notice.index', compact('notice'));
    }

    public function view()
    {
        $notice = Notice::paginate(8);
        return view('admin.notice.view', compact('notice'));
    }

    public function create()
    {
        $classes = Classes::all();
        $department = Department::all();
        return view('admin.notice.create', compact('classes', 'department'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'class_id' => 'required',
            'department_id' => 'required',
            'name' => 'required',
            'details' => 'required',
            'date' => 'required',
        ]);

        Notice::insert([
            'class_id' => $request->class_id,
            'department_id' => $request->department_id,
            'name' => $request->name,
            'details' => $request->details,
            'date' => $request->date,
            'created_at' => Carbon::now(),
        ]);
        $notification = array('message' => 'Notice Added Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
        $edit = Notice::findOrFail($id);

        $classes = Classes::all();
        $department = Department::all();

        return view('admin.notice.edit', compact('edit', 'classes', 'department'));
    }

    public function update(Request $request)
    {
        $update = $request->id;

        Notice::findOrFail($update)->update([
            'class_id' => $request->class_id,
            'department_id' => $request->department_id,
            'name' => $request->name,
            'details' => $request->details,
            'date' => $request->date,
            'updated_at' => Carbon::now(),
        ]);
        $notification = array('message' => 'Notice Update Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function destroy($id)
    {

        Notice::findOrFail($id)->delete();

        $notification = array('message' => 'Notice Delete Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
