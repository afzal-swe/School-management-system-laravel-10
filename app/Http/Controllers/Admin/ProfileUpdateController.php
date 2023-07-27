<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Update_Profile;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Student;

class ProfileUpdateController extends Controller
{


    public function advance_info()
    {

        $user = Auth::user();

        $student = Student::where('user_id', '=', $user->id)->first();
        return view('admin.student.advance_info', compact('student'));
    }

    public function advance_info_update(Request $request, $id)
    {


        $user = User::findOrFail($id)->update([
            'name' => $request->name,
            'user_name' => $request->user_name,
            'email' => $request->email,
        ]);


        if ($user) {
            Student::findOrFail($id)->update([

                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'barth' => $request->barth,
                'father' => $request->father,
                'mother' => $request->mother,
                'address' => $request->address,
                'post_code' => $request->post_code,
                'zip_code' => $request->zip_code,
                's_id' => $request->s_id,
            ]);
        }

        $notification = array('message' => 'Profile Update Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
