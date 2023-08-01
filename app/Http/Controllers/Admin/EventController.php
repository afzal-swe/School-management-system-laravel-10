<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Classes;
use App\Models\Department;

class EventController extends Controller
{
    //
    public function index()
    {
        $event = Event::paginate(10);
        return view('admin.event.index', compact('event'));
    }

    public function view()
    {
        $event = Event::paginate(10);
        return view('admin.event.view', compact('event'));
    }

    public function create()
    {
        $classes = Classes::all();
        $department = Department::all();
        return view('admin.event.create', compact('classes', 'department'));
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

        Event::insert([
            'class_id' => $request->class_id,
            'department_id' => $request->department_id,
            'name' => $request->name,
            'details' => $request->details,
            'date' => $request->date,
        ]);
        $notification = array('message' => 'Event Added Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function destroy($id)
    {

        Event::findOrFail($id)->delete();

        $notification = array('message' => 'Event Delete Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
