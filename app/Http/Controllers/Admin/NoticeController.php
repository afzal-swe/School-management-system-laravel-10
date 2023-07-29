<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;

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
}
