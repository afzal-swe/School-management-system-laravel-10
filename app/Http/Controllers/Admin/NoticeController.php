<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\Classes;
use App\Models\Department;

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
        ]);
        $notification = array('message' => 'Notice Added Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function destroy($id)
    {

        Notice::findOrFail($id)->delete();

        $notification = array('message' => 'Notice Delete Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
