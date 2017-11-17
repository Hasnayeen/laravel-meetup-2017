<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AttendeesController extends Controller
{
    public function index()
    {
        $users = User::whoBoughtTicket()->get();

        return view('attendees', compact("users"));
    }
}
