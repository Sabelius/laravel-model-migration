@extends('layouts.main')

@section("title", "Journey-List")


@section("content")
<div class="container">
    <div class="row">
        <h1 class="mt-2 text-center text-uppercase">Journeys:</h1>
    </div>
    <div class="row">
        @foreach ($journeys as $journey)
            <div class="journey-list pt-3">
                <ul>
                    <li>
                        <h3>{{$journey->journey_name}}</h3>
                        <p>{{$journey->description}}</p>
                        <h5>Data partenza: <span>{{$journey->departure_date}}</span></h5>
                        <h5>Data ritorno:  <span>{{$journey->return_date}}</span></h5>
                        <h5>Posti disponibili:  <span>{{$journey->available_places}}</span></h5>
                        <h5>Posti rimanenti:  <span>{{$journey->is_available}}</span></h5>
                        <h5>Prezzo viaggio:  <span>{{$journey->price}}</span> €</h5>
                    </li>
                </ul>
            </div>
        @endforeach
    </div>
</div>





@endsection


