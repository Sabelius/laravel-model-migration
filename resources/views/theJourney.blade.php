@extends('layouts.main')

@section("title", "Journey")


@section("content")
<div class="journey container text-center pt-2">
    <h1>Journey:</h1>
</div>
<div class="journey container pt-3">
    <ul>
        <li>
            <h3>{{$single_journey->journey_name}}</h3>
            <p>{{$single_journey->description}}</p>
            <h5>Data partenza: <span>{{$single_journey->departure_date}}</span></h5>
            <h5>Data ritorno:  <span>{{$single_journey->return_date}}</span></h5>
            <h5>Posti disponibili:  <span>{{$single_journey->available_places}}</span></h5>
            <h5>Posti rimanenti:  <span>{{$single_journey->is_available}}</span></h5>
            <h5>Prezzo viaggio:  <span>{{$single_journey->price}}</span> €</h5>
        </li>
    </ul>
</div>
@endsection