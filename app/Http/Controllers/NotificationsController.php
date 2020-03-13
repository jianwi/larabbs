<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    //
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $notifications = \Auth::user()->notifications()->paginate(20);

        \Auth::user()->markAsRead();
        return view('notifications.index',compact('notifications'));
    }
}
