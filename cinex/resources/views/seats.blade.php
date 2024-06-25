
@extends('layouts.app')

@section('content')
<h1>Select Seats</h1>

    <form action="{{ route('seats.update') }}" method="POST">
        @csrf
        
        <input type="hidden" name="booking_id" value="{{ $bookingId }}">
        <input type="hidden" name="showtime_id" value="{{ $showtimeId }}">
        <ul>
            @foreach($seats as $seat)
                <li>
                    <input type="checkbox" name="seats[]" value="{{ $seat->id }}" {{ $seat->is_booked ? 'disabled' : '' }}>
                    Seat {{ $seat->seat_number }}
                </li>
            @endforeach
        </ul>
        <button type="submit">Book Selected Seats</button>
    </form>
@endsection

