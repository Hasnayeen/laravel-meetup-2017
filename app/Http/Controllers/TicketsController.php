<?php

namespace App\Http\Controllers;

use App\Events\TicketPurchased;
use App\Models\User;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function show()
    {
        return view('tickets');
    }

    public function store(Request $request)
    {
        $user = User::find(\Auth::user()->id);
        $user->update(['ticket_bought' => \Carbon\Carbon::now()]);

        event(new TicketPurchased($user));

        return redirect('/attendees');
    }
}
