@extends('layouts.app')

@section('content')

<div class="row container">
@forelse ($plants as $plant)
    <div class="col s12 m6 l4">
        <div class="card small sticky-action hoverable">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="{{ $plant->picture }}">
            </div>

            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">{{ $plant->name }} | {{ $plant->latinName }}<i class="material-icons right">more_vert</i></span>

            </div>

            <div class="card-action">
              <a class="blue-text darken-2" href="{{ url("/plant") }}/{{ $plant->id }}">Meer info</a>
            </div>

            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">{{ $plant->name }} | {{ $plant->latinName }}<i class="material-icons right">close</i></span>
                <p>{{ $plant->description }}</p>
            </div>
        </div>
    </div>
@empty
    <div class="col s12 center">
        <i class="large material-icons icon-blue">search</i>
        <h3>Geen resultaten gevonden</h3>
        <h4>Controleer de spelling en probeer opnieuw</h4>
    </div>
@endforelse

<div class="row col s12 center">
    {{ $plants->links() }}
</div>

@endsection
