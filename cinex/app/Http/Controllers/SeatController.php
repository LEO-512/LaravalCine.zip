<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use Illuminate\Http\Request;

class SeatController extends Controller
{
     public function show($showtimeId, Request $request)
     {
 
       $seats = Seat::where('showtime_id', $showtimeId)->get();

    if ($request->isMethod('post')) 
    {
        $this->updateSeats($request, $showtimeId); 
        return redirect()->route('bookings.show', ['booking' => $request->booking_id]);
    }

    return view('seats.show', compact('seats', 'showtimeId'));
}

private function updateSeats(Request $request, $showtimeId)
{
    $seatIds = $request->input('seats');

    foreach ($seatIds as $seatId) {
        $seat = Seat::where('id', $seatId)->where('showtime_id', $showtimeId)->first();
        if ($seat && !$seat->is_booked) {
            $seat->update(['is_booked' => true]);
        }
    }
}
}

     
