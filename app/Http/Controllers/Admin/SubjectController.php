<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Subject;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    //
    public function index()
    {
        $class_name = DB::table('subjects')->join('classes', 'subjects.class_id', 'classes.id')->select('classes.class', 'subjects.*')->get();
        $subject = Subject::all();
        return view('admin.subject.index', compact('subject', 'class_name'));
    }

    public function create()
    {
        $classes = Classes::all();
        return view('admin.subject.create', compact('classes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'class_id' => 'required',
            'subject' => 'required|unique:subjects|max:50',
        ]);

        Subject::insert([
            'class_id' => $request->class_id,
            'subject' => $request->subject,
            'slug' => Str::of($request->subject)->slug('-'),
            'created_at' => Carbon::now(),
        ]);
        $notification = array('message' => 'Subject Added Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
