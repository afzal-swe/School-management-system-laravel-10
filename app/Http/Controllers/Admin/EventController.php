<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

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
}
