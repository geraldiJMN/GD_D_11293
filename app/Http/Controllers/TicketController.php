<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the tickets.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get the tickets
        $ticket = Ticket::latest()->paginate(5);

        // Render the view with tickets
        return view('ticket.index', compact('ticket'));
    }
}
