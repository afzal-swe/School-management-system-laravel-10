<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class UserController extends Controller
{
    //
    public function index()
    {
        $user = User::paginate(10);
        return view('admin.user.index', compact('user'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'user_name' => $request->user_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $notification = array('message' => 'New User Added Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
        $edit = User::findOrFail($id);
        return view('admin.user.edit', compact('edit'));
    }

    public function update(Request $request)
    {
        $update = $request->id;

        User::findOrFail($update)->update([
            'name' => $request->name,
            'user_name' => $request->user_name,
            'email' => $request->email,
            'updated_at' => Carbon::now(),
        ]);
        $notification = array('message' => 'User Update Successfully', 'alert-type' => 'success');
        return redirect()->route('user.index')->with($notification);
    }

    public function destroy($id)
    {

        User::findOrFail($id)->delete();

        $notification = array('message' => 'Delete Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
