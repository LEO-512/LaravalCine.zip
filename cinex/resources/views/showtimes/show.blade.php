@extends('layouts.app')

@extends('layouts.app')

@section('content')
    <h1>{{ $showtime->movie->title }}</h1>
    <p>{{ $showtime->showtime }}</p>

    <h2>Seats</h2>
    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        <input type="hidden" name="showtime_id" value="{{ $showtime->id }}">
        <button type="submit">Proceed to Seat Selection</button>
    </form>
@endsection