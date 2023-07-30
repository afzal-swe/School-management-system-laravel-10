<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Classes;
use App\Models\Department;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class BooksController extends Controller
{
    //
    public function index()
    {
        $book = Book::paginate(10);
        return view('admin.books.index', compact('book'));
    }

    public function view()
    {
        $book = Book::paginate(16);
        return view('admin.books.view', compact('book'));
    }

    public function create()
    {
        $department = Department::all();
        $classes = Classes::all();
        return view('admin.books.create', compact('classes', 'department'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'class_id' => 'required',
            'department_id' => 'required',
            'writter' => 'required',
            'title' => 'required|unique:books|max:50',
        ]);

        Book::insert([
            'class_id' => $request->class_id,
            'department_id' => $request->department_id,
            'title' => $request->title,
            'writter' => $request->writter,
            'slug' => Str::of($request->title)->slug('-'),
            'created_at' => Carbon::now(),
        ]);
        $notification = array('message' => 'Book Added Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
        $classes = Classes::all();
        $department = Department::all();
        $edit = Book::findOrFail($id);
        return view('admin.books.edit', compact('edit', 'classes', 'department'));
    }

    public function update(Request $request)
    {
        $update = $request->id;

        Book::findOrFail($update)->update([
            'class_id' => $request->class_id,
            'department_id' => $request->department_id,
            'title' => $request->title,
            'writter' => $request->writter,
            'slug' => Str::of($request->title)->slug('-'),
            'updated_at' => Carbon::now(),
        ]);
        $notification = array('message' => 'Update Book Successfully', 'alert-type' => 'success');
        return redirect()->route('book.index')->with($notification);
    }

    public function destroy($id)
    {

        Book::findOrFail($id)->delete();

        $notification = array('message' => 'Book Delete Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
