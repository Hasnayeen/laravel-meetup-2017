<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function index()
    {
        $sessions = Session::all();

        return view('schedule', compact("sessions"));
    }
}
